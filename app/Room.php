<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class Room extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id',
        'description',
        'price',
        'image'
    ];

    /**
     * Each room belongs to a property.
     */
    public function property() {
        return $this->belongsTo(Property::class);
    }
}
