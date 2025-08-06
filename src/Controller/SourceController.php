<?php

// src/Controller/SourceController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;

/**
 *
 */
class SourceController extends \TeiEditionBundle\Controller\SourceController
{
    #[Route(path: '/source/{uid}.jsonld', name: 'source-jsonld')]
    #[Route(path: '/source/{uid}.pdf', name: 'source-pdf')]
    #[Route(path: '/source/{uid}', name: 'source', requirements: ['uid' => '.*source\-\d+'])]
    public function sourceViewerAction(
        Request $request,
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        $uid
    ) {
        return parent::sourceViewerAction($request, $entityManager, $translator, $uid);
    }

    /**
     * override adjustMedia to color time span
     * TODO: mark speakers as well
     */
    protected function adjustMedia($html, $baseUrl, $imgClass = 'image-responsive')
    {
        $html = parent::adjustMedia($html, $baseUrl, $imgClass);

        // color time codes in the format
        // HH:MM:SS Speaker Name:
        // at the beginning of a paragraph
        $html = preg_replace_callback(
            '/(<p class="dta\-p">)\s*(\d[\d\:]+\d)([\s\S]*?)(<\/p>)/s',
            function ($matches) {
                $timecode = $matches[2];

                // use strip_tags so : doesn't match attributes with http: or other content with colon
                $rest_plain = strip_tags($matches[3]);

                if (preg_match('/(\:.)/s', $rest_plain, $matches_rest)) {
                    $pos = strpos($matches[3], $matches_rest[1]);

                    // with colon sign after time code
                    return $matches[1]
                        . '<span class="dta-time">' . $timecode
                        . substr_replace($matches[3], '</span>', $pos + 1, 0) // $pos + 1 to include the colon
                        . $matches[4];
                }

                // without colon sign after time code
                return $matches[1] . '<span class="dta-time">' . $timecode . '</span>' . $matches[3] . $matches[4];
            },
            $html
        );

        return $html;
    }
}
