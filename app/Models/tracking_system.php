<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracking_system extends Model
{

    protected $fillable = ['count' , 'company_name'];
    use HasFactory;
}
