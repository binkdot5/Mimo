<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    /**
     * Accessible by anyone but protected
     * 
     * @var array 
     */
    protected $fillable = [
        'user_id', 'property_id', 'title', 'body'
    ];

    /**
     * Belongs to parent model User
     */
    public function property()
    {
        return $this->belongsTo(User::class);
    }
}
