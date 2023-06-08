<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor_detail extends Model
{
    use HasFactory;
     protected $table = 'vendor_details'; 
     protected $fillable = [
        'phone', 'cnic', 'company_name', 'status', 'user_id', 
      ];
}
