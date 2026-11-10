<?php

// src/Controller/PlaceController.php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;

/**
 *
 */
class PlaceController extends \TeiEditionBundle\Controller\PlaceController
{
    public function buildMap(EntityManagerInterface $entityManager, $locale, $mode = '')
    {
        if ('place-map' === $mode && 'ade' === $this->getSiteKey()) {
            // in ade site, primary place is always Potsdam, so switch to mentioned places instead
            $mode = 'mentioned';
        }

        return parent::buildMap($entityManager, $locale, $mode);
    }

    protected function buildPopupContentArticles(EntityManagerInterface $entityManager, $ids, $geo, $locale, $mode = '')
    {
        if ('place-map' === $mode && 'ade' === $this->getSiteKey()) {
            // in ade site, primary place is always Potsdam, so switch to mentioned places instead
            $mode = 'mentioned';
        }

        return parent::buildPopupContentArticles($entityManager, $ids, $geo, $locale, $mode);
    }

}
