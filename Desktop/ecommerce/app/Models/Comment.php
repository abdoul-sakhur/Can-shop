<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=[
        'comments',
        'notes'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
