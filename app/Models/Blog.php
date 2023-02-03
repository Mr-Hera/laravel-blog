<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
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

    // relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
