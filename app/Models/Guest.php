<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'location', 'event_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
