<?php

namespace App\Repositories;

use App\Models\Enrollment;
use App\Repositories\BaseRepository;

/**
 * Class EnrollmentRepository
 * @package App\Repositories
 * @version October 25, 2021, 5:22 am UTC
*/

class EnrollmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Firstname',
        'Middlename',
        'Lastname',
        'Birthdate',
        'Gender',
        'Address',
        'Citizenship',
        'Religion',
        'Last_School_Attended',
        'Date_Graduated',
        'Honor_Received'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Enrollment::class;
    }
}
