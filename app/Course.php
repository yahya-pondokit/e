<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Course extends Model
{
    protected $fillable = ['user_id', 'category_id', 'image', 'title', 'subtitle', 'description', 'status'];

    public function user()
    {
    	return $this->belongsTo('User');
    }
}
