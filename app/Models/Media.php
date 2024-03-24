<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'type', 'link', 'img_url'];

    public function setImgUrlAttribute($value)
    {
        if (request()->hasFile('img_url')) {
            $file = request()->file('img_url');
            $path = Storage::disk('public')->put('media_images', $file);
            $this->attributes['img_url'] = $path;
        }
    }

}
