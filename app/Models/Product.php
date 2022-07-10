<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('products.name', 'like', '%' . request('search') . 
            '%');
        }

        if($filters['select'] ?? false){
            $query->where('brands.id', 'like', '%' . request('select') . 
            '%');
        }
    }
}
