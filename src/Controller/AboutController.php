<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Render the data/tei/about-*.locale.xml
 */
class AboutController extends \TeiEditionBundle\Controller\RenderTeiController
{
    /**
     * Render about-text from TEI to HTML
     */
    protected function renderContent(Request $request, $fnameTei)
    {
        $params = [
            'lang' => \TeiEditionBundle\Utils\Iso639::code1To3($request->getLocale()),
        ];

        $html = $this->renderTei($fnameTei, 'dtabf_article-printview.xsl', [
            'params' => $params,
        ]);

        if (false === $html) {
            return '<div class="alert alert-warning">'
                 . 'Error: Invalid or missing file: ' . $fnameTei
                 . '</div>';
        }

        return $html;
    }

    /**
     * Render about-text from TEI to HTML
     * If $title is null, extract from TEI
     */
    protected function renderTitleContent(
        Request $request,
        $template,
        $title = null
    ) {
        $route = $request->get('_route');
        $locale = $request->getLocale();
        $fnameTei = $route . '.' . $locale . '.xml';

        if (is_null($title)) {
            // try to extract title from TEI
            $fnameTeiFull = $this->locateTeiResource($fnameTei);

            if (false !== $fnameTeiFull) {
                $teiHelper = new \TeiEditionBundle\Utils\TeiHelper();
                $meta = $teiHelper->analyzeHeader($fnameTeiFull);
                if (false !== $meta) {
                    $title = $meta->name;
                }
            }
        }

        return $this->render($template, [
            'pageTitle' => $title,
            'title' => $title,
            'content' => $this->renderContent($request, $fnameTei),
        ]);
    }

    #[Route(path: '/about', name: 'about')]
    #[Route(path: '/about/transcription', name: 'about-transcription')]
    #[Route(path: '/terms', name: 'terms')]
    #[Route(path: '/contact', name: 'contact')]
    public function renderAbout(
        Request $request,
        TranslatorInterface $translator,
        $title = null
    ): Response {
        return $this->renderTitleContent($request, 'About/sitetext.html.twig', $title);
    }
}
