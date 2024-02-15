<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $name_key
 * @property string $title
 * @property string $language
 * @property string $link
 * @property string $logo
 * @property string $date_published
 * @property string $date_init_count_access
 */
class InfoLibs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'info_libs';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_key', 'title', 'language', 'link', 'logo', 'date_published', 'date_init_count_access'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'name_key' => 'string', 'title' => 'string', 'language' => 'string', 'link' => 'string', 'logo' => 'string', 'date_published' => 'string', 'date_init_count_access' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
