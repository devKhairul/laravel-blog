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

    public function scopePosts($query, array $filters)
    {
        // dd(request());

        $query->when( $filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query
                    ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%'))
            );

        $query->when( $filters['category'] ?? false, fn($query, $catSlug) =>
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $catSlug)
                )
            );

        $query->when( $filters['author'] ?? false, fn($query, $author) =>
        $query->whereHas('user', fn($query) =>
            $query->where('username', $author)
            )
        );
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
