<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Eloquent model is always called in singular, for table "comments" the eloquent model name is "comment"
class Job extends Model {
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}
