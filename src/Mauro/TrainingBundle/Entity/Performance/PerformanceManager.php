<?php

/**
 * Created by PhpStorm.
 * User: maxpowers
 * Date: 4/16/17
 * Time: 7:05 AM
 */
namespace Mauro\TrainingBundle\Entity\Performance;

use Mauro\TrainingBundle\Core\AbstractManager;

class PerformanceManager extends AbstractManager
{
    /**
     * @var
     */
    protected $performanceFactory;

    public function __construct(\PDO $db, PerformanceFactory $performanceFactory)
    {
        parent::__construct($db);
        $this->performanceFactory = $performanceFactory;
    }

    public function fetchPerformance()
    {
        $statement = $this->db->prepare('SELECT * FROM workout_log');
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}