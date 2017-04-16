<?php

/**
 * Created by PhpStorm.
 * User: maxpowers
 * Date: 4/15/17
 * Time: 9:49 PM
 */
namespace Mauro\TrainingBundle\Entity;

class Performance
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var \Date
     */
    protected $date_of_workout;

    /**
     * @var int
     */
    protected $sets;

    /**
     * @var int
     */
    protected $reps;

    /**
     * @var int
     */
    protected $weight;

    /**
     * @var int
     */
    protected $pr;

    /**
     * @var string
     */
    protected $result;

    /**
     * @var string
     */
    protected $measurement_units;

    /**
     * @var string
     */
    protected $performance_type;

    /**
     * @var string
     */
    protected $workout_description;

    /**
     * Performance constructor.
     * @param $id
     * @param \DateTime $created_at
     * @param $date_of_workout
     * @param $sets
     * @param $reps
     * @param $weight
     * @param $pr
     * @param $result
     * @param $measurement_units
     * @param $performance_type
     * @param $workout_description
     */
    public function __construct($id, \DateTime $created_at, $date_of_workout, $sets, $reps, $weight, $pr, $result, $measurement_units, $performance_type, $workout_description)
    {
        $this->id = $id;
        $this->created_at = $created_at;
        $this->date_of_workout = $date_of_workout;
        $this->sets = $sets;
        $this->reps = $reps;
        $this->weight = $weight;
        $this->pr = $pr;
        $this->result = $result;
        $this->measurement_units = $measurement_units;
        $this->performance_type = $performance_type;
        $this->workout_description = $workout_description;
    }


}