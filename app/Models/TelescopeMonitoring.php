<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelescopeMonitoring
 *
 * @property string $tag
 *
 * @package App\Models
 */
class TelescopeMonitoring extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'telescope_monitoring';
    protected $fillable = [
        'tag'
    ];
}
