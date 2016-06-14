<?php namespace Teb\Doctorinfo\Models;

use Model;
use Config;
use DirectoryIterator;
use Cache;
use Request;

/**
 * Setting Model
 */
class Setting extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name' => 'required',
        'branch_name' => 'required',
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'teb_doctorinfo_doctors';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}