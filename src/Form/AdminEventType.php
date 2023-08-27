<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\OptionsResolver\OptionsResolver;

use TeiEditionBundle\Entity\Event;

class AdminEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'required' => true,
            ])
            ->add('gnd', TextType::class, [
                'label' => 'GND',
                'required' => false,
            ])
            ->add('startDate', TextType::class, [
                'label' => 'Start Date',
                'required' => false,
            ])
            ->add('endDate', TextType::class, [
                'label' => 'End Date',
                'required' => false,
            ])
            ->add('description_de', TextareaType::class, [
                'label' => 'Description (German)',
                'required' => false,
                'getter' => function (Event $event, FormInterface $form): ?string {
                    return $event->getDescriptionLocalized('de');
                },
                'setter' => function (Event &$event, ?string $val, FormInterface $form): void {
                    $locale = 'de';

                    // $event->setDescriptionLocalized($locale, $val) is missing - emulate
                    $description = $event->getDescription();

                    if (!is_null($val)) {
                        $val = trim($val);
                        if ('' === $val) {
                            $val = null;
                        }
                    }

                    if (is_null($val)) {
                        // clear if exists
                        if (is_array($description) && array_key_exists($locale, $description)) {
                            unset($description[$locale]);
                        }
                    }
                    else {
                        // add or set
                        if (is_null($description)) {
                            $description = [];
                        }

                        $description[$locale] = $val;
                    }

                    $event->setDescription($description);
                },
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => \TeiEditionBundle\Entity\Event::class,
        ]);
    }
}
