<?php

namespace Mauro\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mauro\TrainingBundle\Entity\Performance\PerformanceManager;

class MauroController extends Controller
{
    public function indexAction()
    {
        return $this->render('MauroTrainingBundle::layout.html.twig',
                ['performance' => $this->get('performance_manager')->fetchPerformance()]
            );
    }
}
