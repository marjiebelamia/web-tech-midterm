<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class FaceBookUser
 * @package App\Models
 * @version October 25, 2021, 8:30 am UTC
 *
 * @property string $country
 * @property integer $number_of_users
 * @property integer $active_users
 * @property integer $none_active_users
 * @property integer $hrs_per_day_online
 */
class FaceBookUser extends Model
{

    use HasFactory;

    public $table = 'facebook_users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'country',
        'number_of_users',
        'active_users',
        'none_active_users',
        'hrs_per_day_online'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country' => 'string',
        'number_of_users' => 'integer',
        'active_users' => 'integer',
        'none_active_users' => 'integer',
        'hrs_per_day_online' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'country' => 'required|string|max:255',
        'number_of_users' => 'required|integer',
        'active_users' => 'required|integer',
        'none_active_users' => 'required|integer',
        'hrs_per_day_online' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
