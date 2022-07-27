<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
                $query
                    ->where('title', 'like', '%' . trim($search) . '%')
                    ->orWhere('content', 'like', '%' . trim($search) . '%'));

        $query->when($filters['category'] ?? false, fn($query, $category) =>
        $query
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.*', 'categories.slug')
            ->where('categories.slug', $category))
            ->get();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function incrementReadCount() {
        $this->views++;
        return $this->save();
    }
}
