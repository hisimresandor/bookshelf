<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
        
    public function scopeFilter($query, array $filters)
    {
        if($filters['writer'] ?? false) {
            $query->where('writers', 'like', '%' . request('writer') . '%');
        }
        if($filters['category'] ?? false) {
            $query->where('category', '=', request('category'));
        }
        if($filters['publisher'] ?? false) {
            $query->where('publisher', '=', request('publisher'));
        }
        if($filters['year'] ?? false) {
            $query->where('year', '=', request('year'));
        }
        if($filters['country'] ?? false) {
            $query->where('country', '=', request('country'));
        }
        if($filters['language'] ?? false) {
            $query->where('language', '=', request('language'));
        }
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('writers', 'like', '%' . request('search') . '%')
                ->orWhere('category', 'like', '%' . request('search') . '%')
                ->orWhere('publisher', 'like', '%' . request('search') . '%')
                ->orWhere('year', '=', request('search'))
                ->orWhere('country', 'like', '%' . request('search') . '%')
                ->orWhere('language', 'like', '%' . request('search') . '%');
        }
    }
}
