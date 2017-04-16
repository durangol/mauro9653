<?php

/**
 * Created by PhpStorm.
 * User: maxpowers
 * Date: 4/15/17
 * Time: 9:41 PM
 */
namespace Mauro\TrainingBundle\Core;

class AbstractManager
{
    /**
     * @var \PDO
     */
    protected $db;

    /**
     * AbstractManager constructor.
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
}