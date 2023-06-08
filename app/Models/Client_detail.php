<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_detail extends Model
{
    use HasFactory;
    protected $table = 'client_details';
    protected $fillable = [
        'user_id', 'device_id', 'vendor_id', 'status',
      ];

    
}
