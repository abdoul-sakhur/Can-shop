<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'status'
    ];
    
    public function getImageUrl()
    :string
    
    {
        return Storage::disk('public')->url($this->image);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
 
}
