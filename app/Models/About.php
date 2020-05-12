<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $touches = ['user'];

    protected $fillable= ['description'];
    
    // Relation  Many to One (User)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
