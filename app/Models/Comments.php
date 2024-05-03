<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'chismis_id',
        'content',
        'reacts',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chismis()
    {
        return $this->belongsTo(Chismis::class);
    }
}
