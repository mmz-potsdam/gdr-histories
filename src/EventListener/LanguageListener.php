<?php

/*
 * Show 404 in domain-dependant localization
 *
 * see http://donna-oberes.blogspot.de/2014/01/symfony-internalizationlocalization-and.html
 *
 * though we use the logic from
 * https://github.com/schmittjoh/JMSI18nRoutingBundle/blob/master/EventListener/LocaleChoosingListener.php
 *
 * register the listener in services.yml
 * services:
 *   # ...
 *
 *  # language-specific layout in 404
 *  App\EventListener\LanguageListener:
 *      arguments: [ '%jms_i18n_routing.default_locale%', '%jms_i18n_routing.locales%', '@jms_i18n_routing.locale_resolver' ]
 *      tags:
 *         - { name: kernel.event_listener, event: kernel.exception, method: setLocale }
 *
 */

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class LanguageListener
{
    protected $defaultLocale;
    protected $locales;

    public function __construct($defaultLocale, array $locales)
    {
        $this->defaultLocale = $defaultLocale;
        $this->locales = $locales;
    }

    public function setLocale(RequestEvent $event)
    {
        if (HttpKernelInterface::MAIN_REQUEST !== $event->getRequestType()) {
            return;
        }

        $request = $event->getRequest();

        // doesn't seem to work - so check if pathInfo starts with '/locale/'
        $pathInfo = $request->getPathInfo();

        $locale = $request->getLocale();

        if ($locale != $this->defaultLocale) {
            $needle = '/' . $locale . '/';
            if (strncmp($pathInfo, $needle, strlen($needle)) !== 0) {
                $locale = $this->defaultLocale;
            }
        }
        else {
            foreach ($this->locales as $localeCandidate) {
                if ($localeCandidate == $this->defaultLocale) {
                    continue;
                }

                $needle = '/' . $localeCandidate . '/';
                if (strncmp($pathInfo, $needle, strlen($needle)) === 0) {
                    $locale = $localeCandidate;
                    break;
                }
            }
        }

        $request->setLocale($locale);
    }
}
