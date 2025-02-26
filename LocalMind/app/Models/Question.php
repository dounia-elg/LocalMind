<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'content', 'location'];
    
    public function user() { return $this->belongsTo(User::class); }
    public function answers() { return $this->hasMany(Answer::class); }
    public function favorites() { return $this->hasMany(Favorite::class); }
}



