<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;

/**
 *
 */
class DefaultController extends \TeiEditionBundle\Controller\TopicController
{
    /* shared code with PlaceController */
    use \TeiEditionBundle\Controller\MapHelperTrait;

    /* TODO: share with DateController */
    protected function fetchSources($entityManager, $locale)
    {
        $criteria = [ 'status' => [ 1 ] ];

        if (!empty($locale)) {
            $criteria['language'] = \TeiEditionBundle\Utils\Iso639::code1to3($locale);
        }

        $queryBuilder = $entityManager
                ->createQueryBuilder()
                ->select('S, A')
                ->from('\TeiEditionBundle\Entity\SourceArticle', 'S')
                ->leftJoin('S.isPartOf', 'A')
                ->orderBy('S.dateCreated', 'ASC')
                ;

        foreach ($criteria as $field => $cond) {
            $queryBuilder->andWhere('S.' . $field
                                    . (is_array($cond)
                                       ? ' IN (:' . $field . ')'
                                       : '= :' . $field))
                ->setParameter($field, $cond);
        }

        return $queryBuilder->getQuery()->getResult();
    }

    #[Route(path: '/', name: 'home')]
    public function indexAction(
        Request $request,
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator
    ) {
        [$markers, $bounds] = $this->buildMap($entityManager, $request->getLocale());

        $news = [];

        try {
            /* the following can fail */
            $url = $this->getParameter('app.wp-rest.url');

            if (!empty($url)) {
                try {
                    $client = new \Vnn\WpApiClient\WpClient(
                        new \Vnn\WpApiClient\Http\GuzzleAdapter(new \GuzzleHttp\Client()),
                        $url
                    );
                    $client->setCredentials(new \Vnn\WpApiClient\Auth\WpBasicAuth($this->getParameter('app.wp-rest.user'), $this->getParameter('app.wp-rest.password')));
                    $posts = $client->posts()->get(null, [
                        'per_page' => 4,
                        'lang' => $request->getLocale(),
                    ]);

                    if (!empty($posts)) {
                        foreach ($posts as $post) {
                            $article = new \TeiEditionBundle\Entity\Article();
                            $article->setName($post['title']['rendered']);
                            $article->setSlug($post['slug']);
                            $article->setDatePublished(new \DateTime($post['date_gmt']));

                            $news[] = $article;
                        }
                    }
                }
                catch (\Exception $e) {
                    ;
                }
            }
        }
        catch (\InvalidArgumentException $e) {
            ; // ignore
        }

        return $this->render('Default/home.html.twig', [
            'pageTitle' => $translator->trans('Welcome'),
            // 'topics' => $this->buildTopicsDescriptions($translator, $request->getLocale()),
            'sourcesTimeline' => $this->fetchSources($entityManager, $request->getLocale()),
            'markers' => $markers,
            'bounds' => $bounds,
            'news' => $news,
        ]);
    }
}
