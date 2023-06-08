<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily_Consumption extends Model
{
    use HasFactory;
    protected  $table = 'daily_consumptions';
    protected $fillable = [ 'device_id', 'previous', 'current', 'datetime', 'consumption' ];

}
