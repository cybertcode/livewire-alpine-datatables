<?php

namespace App\Models;

use App\Models\Message;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email'];
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
