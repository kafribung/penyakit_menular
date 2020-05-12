<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $touches = ['user'];

    protected $fillable= ['title', 'content', 'img'];
    
    // Relation  Many to One (User)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function getImgAttribute($value) 
    {
        return url('artikels', $value);
    } 
}
