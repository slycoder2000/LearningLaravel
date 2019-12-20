<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table
    protected $table = 'posts';
    // Primary Key
    protected $primaryKey = 'id';
    // Time Stamps
    public $timestamps = true;

    //
    public function user(){
        return $this->belongsTo('App\User');
    }
}
