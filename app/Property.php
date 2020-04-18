<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Property extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'address', 'category', 'gallery',
        'bed_room', 'bath_room', 'score', 'active', 'review',
        'utility_heating', 'utility_wifi', 'utility_patio', 'kitchen_fridge', 
        'kitchen_freezer', 'kitchen_oven', 'kitchen_stove', 'ktichen_potspans', 
        'kitchen_microwave', 'kitchen_dishwasher', 'bathroom_shower', 
        'bathroom_sink', 'bathroom_toilet', 'bathroom_bathtub', 'bathroom_window'
    ];

    /**
     * Each property belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Each property can have several rooms.
     */
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
