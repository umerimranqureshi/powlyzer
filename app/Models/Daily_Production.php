<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily_Production extends Model
{
    use HasFactory;
    protected  $table = 'daily_productions';
    protected $fillable = [ 'device_id', 'previous', 'current', 'datetime', 'production' ];

}
