<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrlDetail extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function url()
    {
        return $this->belongsTo(ShortUrl::class, 'url_id','id');
    }

}
