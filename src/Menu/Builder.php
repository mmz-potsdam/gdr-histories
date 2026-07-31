<?php

// src/Menu/Builder.php

// see https://symfony.com/bundles/KnpMenuBundle/current/menu_service.html

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class Builder
{
    private $factory;
    private $translator;
    private $requestStack;
    private $router;
    private $twig;

    /**
     * @param FactoryInterface $factory
     * @param TranslatorInterface $translator
     * @param RequestStack $requestStack
     * @param RouterInterface $router
     *
     * Add any other dependency you need
     * @param \Twig\Environment $twig
     */
    public function __construct(
        FactoryInterface $factory,
        TranslatorInterface $translator,
        RequestStack $requestStack,
        RouterInterface $router,
        \Twig\Environment $twig
    ) {
        $this->factory = $factory;
        $this->translator = $translator;
        $this->requestStack = $requestStack;
        $this->router = $router;
        $this->twig = $twig;
    }

    private function getSiteKey(): string
    {
        return $this->twig->getGlobals()['siteKey'] ?? 'gdr';
    }

    public function createTopMenu(array $options): ItemInterface
    {
        $menu = $this->factory->createItem('root');

        $inline = false;
        if (array_key_exists('position', $options) && 'footer' == $options['position']) {
            $menu->setChildrenAttributes([ 'id' => 'menu-top-footer', 'class' => 'small' ]);
        }
        else {
            $inline = true;
            $menu->setChildrenAttributes([ 'id' => 'menu-top', 'class' => 'list-inline' ]);
        }

        // add menu items
        if (!array_key_exists('part', $options) || 'left' == $options['part']) {
            if ($inline) {
                // hierarchical dropdown
                $menu->addChild('about', [
                    'label' => 'About this edition',
                    'route' => 'about',
                    'attributes' => [
                        'id' => 'dropdownAboutMenuButton',
                        'class' => 'list-inline-item nav-item dropdown',
                    ],
                    'linkAttributes' => [
                        'class' => 'dropdown-toggle', // possibly prepend nav-link
                        'dropdown' => true,
                        'role' => 'button',
                        'data-bs-toggle' => 'dropdown',
                        'aria-expanded' => 'false',
                    ],
                    'childrenAttributes' => [
                        'class' => 'dropdown-menu dropdown-menu-center',
                        'aria-labelledby' => 'dropdownAboutMenuButton',
                    ],
                ]);

                if ('ade' == $this->getSiteKey()) {
                }

                $menu['about']
                    ->addChild('about-transcription', [
                        'label' => $this->translator->trans('Transcription Guidelines'),
                        'uri' => $this->router->generate('about-additional', [ 'path' => 'transcription' ]),
                        'linkAttributes' => [
                            'class' => 'dropdown-item',
                        ],
                    ]);
            }
            else {
                $menu->addChild('about', [
                    'label' => 'About this edition',
                    'route' => 'about',
                ]);

                $menu['about']
                    ->addChild('about-transcription', [
                        'label' => $this->translator->trans('Transcription Guidelines'),
                        'uri' => $this->router->generate('about-additional', [ 'path' => 'transcription' ]),
                    ]);
            }

            $child = $menu->addChild('terms', [
                'label' => 'Terms and Conditions', 'route' => 'terms',
            ]);
            if ($inline) {
                $child->setAttribute('class', 'list-inline-item');
            }

            $child = $menu->addChild('contact', [
                'label' => 'Contact', 'route' => 'contact',
            ]);
            if ($inline) {
                $child->setAttribute('class', 'list-inline-item');
            }
        }

        return $menu;
    }

    public function createMainMenu(array $options): ItemInterface
    {
        $menu = $this->factory->createItem('home', [ 'label' => 'Home', 'route' => 'home' ]);
        if (array_key_exists('position', $options) && 'footer' == $options['position']) {
            $menu->setChildrenAttributes([ 'id' => 'menu-main-footer', 'class' => 'small' ]);
        }
        else {
            $menu->setChildrenAttributes([ 'id' => 'menu-main', 'class' => 'list-inline' ]);
        }

        // add menu items

        $siteKey = $this->twig->getGlobals()['siteKey'] ?? 'gdr';

        if ('ade' != $siteKey) {
            $menu->addChild('date-chronology', [
                'label' => 'Chronology',
                'route' => 'date-chronology',
            ])
                ->setAttribute('class', 'list-inline-item');
        }

        $menu->addChild('place-map', [
            'label' => 'Map',
            'route' => 'place-map',
        ])
            ->setAttribute('class', 'list-inline-item');

        $menu->addChild('_lookup', [
            'label' => 'Look-up',
            'uri' => '#',
        ])
            ->setAttribute('class', 'list-inline-item')
            ->setAttribute('dropdown', true);

        $menu['_lookup']
            ->addChild('person-index', [
                'label' => 'Persons',
                'route' => 'person-index',
            ]);
        $menu['_lookup']
            ->addChild('place-index', [
                'label' => 'Places',
                'route' => 'place-index',
            ]);
        $menu['_lookup']
            ->addChild('organization-index', [
                'label' => 'Organizations',
                'route' => 'organization-index',
            ]);
        $menu['_lookup']
            ->addChild('event-index', [
                'label' => 'Epochs and Events',
                'route' => 'event-index',
            ]);
        /*
        // the following are currently not in use
        $menu['_lookup']
            ->addChild('bibliography-index', [
                'label' => 'Bibliography',
                'route' => 'bibliography-index',
            ]);
        $menu['_lookup']
            ->addChild('article-index', [
                'label' => 'Articles',
                'route' => 'article-index',
            ]);
        $menu['_lookup']
            ->addChild('glossary-index', [
                'label' => 'Glossary',
                'route' => 'glossary-index',
            ]);
        */

        if (array_key_exists('position', $options) && 'footer' == $options['position']) {
        }
        else {
            foreach ([
                'place-map' => 'menu-item-map',
                'date-chronology' => 'menu-item-chronology',
                '_lookup' => 'menu-item-lookup',
            ] as $key => $id) {
                $menuItem = $menu[$key];
                if (!is_null($menuItem)) {
                    $menuItem->setAttribute('id', $id);
                }
            }

            // find the matching parent
            // TODO: maybe use a voter
            $uriCurrent = $this->requestStack->getCurrentRequest()->getRequestUri();

            // create the iterator
            $itemIterator = new \Knp\Menu\Iterator\RecursiveItemIterator($menu);

            // iterate recursively on the iterator
            $iterator = new \RecursiveIteratorIterator($itemIterator, \RecursiveIteratorIterator::SELF_FIRST);

            foreach ($iterator as $item) {
                $uri = $item->getUri();
                if (substr($uriCurrent, 0, strlen($uri)) === $uri) {
                    $item->setCurrent(true);
                    break;
                }
            }
        }

        return $menu;
    }

    public function createBreadcrumbMenu(array $options): ItemInterface
    {
        $menu = $this->createMainMenu($options + [ 'position' => 'breadcrumb' ]);

        // try to return the active item
        $currentRoute = $this->requestStack->getCurrentRequest()->get('_route');

        if (is_null($currentRoute) || 'home' == $currentRoute) {
            // $currentRoute is null on error pages, e.g. 404
            return $menu;
        }

        // first level
        $item = $menu[$currentRoute];
        if (isset($item)) {
            return $item;
        }

        // additional routes
        switch ($currentRoute) {
            case 'about':
            case 'terms':
            case 'contact':
                $toplevel = $this->createTopMenu([]);
                $item = $toplevel[$currentRoute];
                $item->setParent(null);
                $item = $menu->addChild($item);
                break;

            case 'article':
            case 'article-pdf':
                $item = $menu->addChild($currentRoute, [ 'label' => 'Article' ]);
                break;

            case 'source':
                $item = $menu->addChild($currentRoute, [ 'label' => 'Source' ]);
                break;

            case 'person-index':
            case 'place-index':
            case 'organization-index':
            case 'event-index':
            case 'bibliography-index':
            case 'glossary-index':
                $item = $menu['_lookup'][$currentRoute];
                break;

            case 'person':
            case 'person-by-gnd':
                $item = $menu['_lookup']['person-index'];
                $item = $item->addChild($currentRoute, [ 'label' => 'Detail', 'uri' => '#' ]);
                break;

            case 'place-map-mentioned':
            case 'place-map-landmark':
                $item = $menu->addChild($currentRoute, [ 'label' => 'Map' ]);
                break;

            case 'place':
            case 'place-by-tgn':
                $item = $menu['_lookup']['place-index'];
                $item = $item->addChild($currentRoute, [ 'label' => 'Detail', 'uri' => '#' ]);
                break;

            case 'organization':
            case 'organization-by-gnd':
                $item = $menu['_lookup']['organization-index'];
                $item = $item->addChild($currentRoute, [ 'label' => 'Detail', 'uri' => '#' ]);
                break;

            case 'event':
            case 'event-by-gnd':
                $item = $menu['_lookup']['event-index'];
                // $item = $item->addChild($currentRoute, [ 'label' => 'Detail', 'uri' => '#' ]);
                break;

            case 'article-index':
            case 'article-index-date':
                $item = $menu['_lookup']['article-index'];
                $item = $item->addChild($currentRoute, [ 'label' => 'Detail', 'uri' => '#' ]);
                break;

            case 'bibliography':
                $item = $menu['_lookup']['bibliography-index'];
                $item = $item->addChild($currentRoute, [ 'label' => 'Detail', 'uri' => '#' ]);
                break;

            case 'search-index':
                $item = $menu->addChild($currentRoute, [ 'label' => 'Search' ]);
                break;
        }

        if (isset($item)) {
            $item->setCurrent(true);

            return $item;
        }

        return $menu;
    }
}
