<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'tags',
        'published',
        'description'
    ];

    public function scopeFilter($query, array $filters) {
        if($filters['tags'] ?? false) {
            $query->where('tags', 'like', '%' . request('tags') . '%');
        }
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
}
