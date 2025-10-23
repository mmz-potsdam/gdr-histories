<?php

// src/Controller/SourceController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Cocur\Slugify\SlugifyInterface;
use Doctrine\ORM\EntityManagerInterface;
use Sylius\Bundle\ThemeBundle\Context\SettableThemeContext;
use TeiEditionBundle\Utils\Xsl\XsltProcessor;
use TeiEditionBundle\Utils\PdfGenerator;
use App\Service\AvMetadataService;

/**
 *
 */
class SourceController extends \TeiEditionBundle\Controller\SourceController
{
    protected $avMetadataService;

    /**
     * Inject XsltProcessor and PdfGenerator
     */
    public function __construct(
        KernelInterface $kernel,
        SlugifyInterface $slugify,
        SettableThemeContext $themeContext,
        \Twig\Environment $twig,
        XsltProcessor $xsltProcessor,
        PdfGenerator $pdfGenerator,
        ?AVMetadataService $avMetadataService
    ) {
        parent::__construct($kernel, $slugify, $themeContext, $twig, $xsltProcessor, $pdfGenerator);

        $this->avMetadataService = $avMetadataService;
    }

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

        if (!is_null($this->avMetadataService)) {
            // set proper aspect ratio
            $html = preg_replace_callback(
                '/(<div class="embed-responsive (embed-responsive-[^"]*)">)\s*([\s\S]*?)(<\/div>)/s',
                function ($matches) use ($baseUrl) {
                    $full = $matches[0];

                    $responsiveRatio = $matches[2];
                    $avTag = $matches[3];
                    if (preg_match('/<source src="([^"]*)"/', $avTag, $matches)) {
                        $url = $matches[1];

                        if (preg_match('~/viewer/([^/]+)/(.+)~', $url, $matches)) {
                            $uid = $matches[1];
                            $dstPath = $this->buildViewerPath($uid);
                            $mediaPath = $dstPath[1] . '/' . $matches[2];
                            if (file_exists($mediaPath) && is_readable($mediaPath)) {
                                $aspectRatio = $this->avMetadataService->getAspectRatio($mediaPath);
                                if (false !== $aspectRatio) {
                                    $responsiveRatioNew = null;

                                    switch ($aspectRatio) {
                                        // Bootstrap 4: https://getbootstrap.com/docs/4.6/utilities/embed/
                                        case '21x9':
                                        case '16x9':
                                        case '4x3':
                                        case '1x1':
                                            $responsiveRatioNew = 'embed-responsive-' . str_replace('x', 'by', $aspectRatio);
                                            break;
                                    }

                                    if (!is_null($responsiveRatioNew) && $responsiveRatioNew != $responsiveRatio) {
                                        $full = str_replace($responsiveRatio, $responsiveRatioNew, $full);
                                    }
                                }
                            }
                        }
                    }

                    return $full;
                },
                $html
            );

        }

        return $html;
    }
}
