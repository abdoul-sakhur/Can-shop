<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Slider extends Model
{
    use HasFactory;
    protected $fillable=[
        'description1',
        'description2',
        'image',
    ];
    public function getImageUrl()
    :string
    
    {
        return Storage::disk('public')->url($this->image);
    }

}
