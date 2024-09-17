<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // Add table name if it doesn't follow Laravel's convention (e.g., 'blogs')
    protected $table = 'blogs'; 

    // Optionally, define fillable fields if you're mass-assigning data
    protected $fillable = ['title', 'content'];

    // If your primary key is not 'id', specify it
    protected $primaryKey = 'id';
}
