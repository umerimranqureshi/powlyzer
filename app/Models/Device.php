<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected  $table = 'devices';
	protected $fillable = [
        'name', 'model', 'description', 'Installed', 'vendor_id', 'firebase_id', 'status'
      ];
   
}
