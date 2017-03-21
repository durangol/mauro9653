<?php

namespace Mauro\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MauroController extends Controller
{
    public function indexAction()
    {
        return $this->render('MauroTrainingBundle::layout.html.twig');
    }
}
