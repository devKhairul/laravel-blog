<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     *
     * Allow mass assignment for the folowig fields
     */
    protected $guarded = [];


    /**
     *
     * Eager Load relationships on Category and User Models
     */
    protected $with = ['category', 'user'];


    /**
     *
     * Query Scopes
     */

    public function scopePosts($query)
    {
        if ( request('search') ) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
    }

    /**
     *
     * Eloquent Relationships
     */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
