<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'writer' , 'description', 'main_image', 'quote', 'content', 'sub_images'];

    // Method to decode sub_images JSON into an array
    public function getSubImagesAttribute($value)
    {
        return json_decode($value, true);
    }

    // Method to encode sub_images array into JSON before storing in the database
    public function setSubImagesAttribute($value)
    {
        $this->attributes['sub_images'] = json_encode($value);
    }

}
