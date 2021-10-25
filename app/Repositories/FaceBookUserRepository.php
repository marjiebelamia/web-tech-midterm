<?php

namespace App\Repositories;

use App\Models\FaceBookUser;
use App\Repositories\BaseRepository;

/**
 * Class FaceBookUserRepository
 * @package App\Repositories
 * @version October 25, 2021, 8:30 am UTC
*/

class FaceBookUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'country',
        'number_of_users',
        'active_users',
        'none_active_users',
        'hrs_per_day_online'
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
        return FaceBookUser::class;
    }
}
