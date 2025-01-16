<?php

namespace App\Models;

use App\Models\Friend;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['frien_id', 'phone', 'direction'];
    public function friend()
    {
        return $this->belongsTo(Friend::class);
    }
}
