<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public  function user()
    {
        return $this->belongsTo(User::class);
    }

    public function url_details()
    {
        return $this->hasMany(ShortUrlDetail::class, 'url_id', 'id');
    }

}
