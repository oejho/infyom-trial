<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mahasiswa
 * @package App\Models
 * @version October 14, 2020, 8:43 am UTC
 *
 * @property string $name
 * @property string $nim
 */
class Mahasiswa extends Model
{
    use SoftDeletes;

    public $table = 'mahasiswas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'nim'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'nim' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'nim' => 'required'
    ];

    
}
