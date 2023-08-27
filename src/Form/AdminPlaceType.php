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

use TeiEditionBundle\Entity\Place;

class AdminPlaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'required' => true,
            ])
            ->add('name_de', TextType::class, [
                'label' => 'Name (German)',
                'required' => false,
                'getter' => function (Place $place, FormInterface $form): ?string {
                    return $place->getNameLocalized('de', false);
                },
                'setter' => function (Place &$place, ?string $val, FormInterface $form): void {
                    $locale = 'de';

                    // $place->setNameLocalized($locale, $val) is missing - emulate
                    $alternateName = $place->getAlternateName();

                    if (!is_null($val)) {
                        $val = trim($val);
                        if ('' === $val) {
                            $val = null;
                        }
                    }

                    if (is_null($val)) {
                        // clear if exists
                        if (is_array($alternateName) && array_key_exists($locale, $alternateName)) {
                            unset($alternateName[$locale]);
                        }
                    }
                    else {
                        // add or set
                        if (is_null($alternateName)) {
                            $alternateName = [];
                        }

                        $alternateName[$locale] = $val;
                    }

                    $place->setAlternateName($alternateName);
                },
            ])
            ->add('tgn', TextType::class, [
                'label' => 'TGN',
                'required' => false,
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => \TeiEditionBundle\Entity\Place::class,
        ]);
    }
}
