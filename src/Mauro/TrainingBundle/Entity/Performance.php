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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return \Date
     */
    public function getDateOfWorkout()
    {
        return $this->date_of_workout;
    }

    /**
     * @param \Date $date_of_workout
     */
    public function setDateOfWorkout($date_of_workout)
    {
        $this->date_of_workout = $date_of_workout;
    }

    /**
     * @return int
     */
    public function getSets()
    {
        return $this->sets;
    }

    /**
     * @param int $sets
     */
    public function setSets($sets)
    {
        $this->sets = $sets;
    }

    /**
     * @return int
     */
    public function getReps()
    {
        return $this->reps;
    }

    /**
     * @param int $reps
     */
    public function setReps($reps)
    {
        $this->reps = $reps;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getPr()
    {
        return $this->pr;
    }

    /**
     * @param int $pr
     */
    public function setPr($pr)
    {
        $this->pr = $pr;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return string
     */
    public function getMeasurementUnits()
    {
        return $this->measurement_units;
    }

    /**
     * @param string $measurement_units
     */
    public function setMeasurementUnits($measurement_units)
    {
        $this->measurement_units = $measurement_units;
    }

    /**
     * @return string
     */
    public function getPerformanceType()
    {
        return $this->performance_type;
    }

    /**
     * @param string $performance_type
     */
    public function setPerformanceType($performance_type)
    {
        $this->performance_type = $performance_type;
    }

    /**
     * @return string
     */
    public function getWorkoutDescription()
    {
        return $this->workout_description;
    }

    /**
     * @param string $workout_description
     */
    public function setWorkoutDescription($workout_description)
    {
        $this->workout_description = $workout_description;
    }

}
