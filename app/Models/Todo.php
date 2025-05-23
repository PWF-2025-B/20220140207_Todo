<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'is_complete',

    ];

    public function user()

    {
        return $this->belongsTo(User::class);
    }
}
