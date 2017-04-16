<?php
/**
 * Created by PhpStorm.
 * User: maxpowers
 * Date: 4/16/17
 * Time: 7:11 AM
 */

namespace Mauro\TrainingBundle\Entity\Performance;

use Mauro\TrainingBundle\Entity\Performance;

class PerformanceFactory
{
    /**
     * @param array $data
     * @return Performance
     */
    public function create(Array $data)
    {
        return new Performance(
            isset($data['id']) ? $data['id'] : null,
            $data['created_at'],
            $data['date_of_workout'],
            $data['sets'],
            $data['reps'],
            $data['weight'],
            $data['pr'],
            $data['result'],
            $data['measurement_units'],
            $data['performance_type'],
            $data['workout_description']
        );
    }
}