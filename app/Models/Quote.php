<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $touches = ['user'];

    protected $fillable= ['title', 'description'];
    
    // Relation  Many to One (User)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
