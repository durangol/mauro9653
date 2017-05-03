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

    /**
     * PerformanceManager constructor.
     * @param \PDO $db
     * @param PerformanceFactory $performanceFactory
     */
    public function __construct(\PDO $db, PerformanceFactory $performanceFactory)
    {
        parent::__construct($db);
        $this->performanceFactory = $performanceFactory;
    }

    /**
     * @return array
     */
    public function fetchPerformance()
    {
        $statement = $this->db->prepare('SELECT * FROM workout_log limit 5 ');
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}