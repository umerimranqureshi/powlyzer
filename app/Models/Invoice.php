<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';

    protected $fillable = [
		'invoice_id', 'product_name', 'rate', 'quantity', 'user_id_generater', 'user_id_receiver', 'description', 'paid_date',
	];
}
