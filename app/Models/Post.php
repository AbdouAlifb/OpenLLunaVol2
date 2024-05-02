<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'writer', 'description', 'main_image', 'quote', 'sub_images'];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function getSubImagesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setSubImagesAttribute($value)
    {
        $this->attributes['sub_images'] = json_encode($value);
    }
}
