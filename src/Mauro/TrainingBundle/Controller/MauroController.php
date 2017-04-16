<?php

namespace Mauro\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mauro\TrainingBundle\Entity\Performance\PerformanceManager;

class MauroController extends Controller
{
    public function indexAction()
    {
        return $this->render('MauroTrainingBundle:performance:index.html.twig',
                ['performances' => $this->get('performance_manager')->fetchPerformance()]
            );
    }
}
