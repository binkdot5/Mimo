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
        'title', 'description', 'address', 'category', 
        'bed_room', 'bath_room', 'score', 'active', 
        'utility_heating', 'utility_wifi', 'utility_patio', 'kitchen_fridge', 
        'kitchen_freezer', 'kitchen_oven', 'kitchen_stove', 'ktichen_potspans', 
        'kitchen_microwave', 'kitchen_dishwasher', 'bathroom_shower', 
        'bathroom_sink', 'bathroom_toilet', 'bathroom_bathtub', 'bathroom_window'
    ];

    /**
     * The attributes that should be cast.
     * 
     * @var array
     */
    protected $casts = [
        'gallery' => 'array',
        'review' => 'array'
    ];

    /**
     * The attributes that are hidden.
     * 
     * @var array
     */
    // protected $hidden = [
    //     'slug'
    // ];

    /**
     * Each property belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Each property can have several reviews.
     */
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
}
