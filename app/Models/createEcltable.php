<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createEcltable extends Model
{
    protected $fillable = [
        'name', 'barcode', 'pk_type',
        'sale_report', 'sale_report_type',
        'qty', 'department', 'amount', 'status'
    ];

//    protected $fillable = ['name','barcode','pk_type','sale_report','sale_report_type','qty','department','amount','status'];
    use HasFactory;
}
