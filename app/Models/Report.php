<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Report
 *
 * @property int $id
 * @property string $deviceId
 * @property int $voltage
 * @property int $currentCapacity
 * @property int $dischargeRate
 * @property int $fullChargeCapacity
 * @property int $designedMaxCapacity
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Report extends Model
{
    protected $table = 'reports';

    protected $casts = [
        'voltage' => 'int',
        'currentCapacity' => 'int',
        'dischargeRate' => 'int',
        'fullChargeCapacity' => 'int',
        'designedMaxCapacity' => 'int'
    ];

    protected $fillable = [
        'deviceId',
        'voltage',
        'currentCapacity',
        'dischargeRate',
        'fullChargeCapacity',
        'designedMaxCapacity'
    ];
}
