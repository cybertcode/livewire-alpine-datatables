<?php

namespace App\Models;

use App\Models\Friend;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['friend_id', 'text'];

    public function friend()
    {
        return $this->belongsTo(Friend::class);
    }
}
