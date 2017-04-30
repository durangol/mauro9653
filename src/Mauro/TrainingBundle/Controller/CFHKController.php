<?php
/**
 * Created by PhpStorm.
 * User: maxpowers
 * Date: 4/26/17
 * Time: 8:41 PM
 */

namespace Mauro\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;

class CFHKController extends Controller
{
    public function indexAction()
    {
        $html = file_get_contents('http://crossfithellskitchen.com/blog/lastest-wod/');
        $crawler = new Crawler($html);

        //div.feedContent gives all workout of the week
        //div.thePost will give the most recent workout
        //div.content will give just top workout without title or date
        $wod =  $crawler->filter('div.thePost')->html();

        return $this->render('MauroTrainingBundle:CFHK:index.html.twig', [
            'wods' => $wod
        ]);
    }
}