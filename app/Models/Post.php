<?php

namespace App\Models;

use App\Models\Medium;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollections;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;

use Brackets\AdminUI\Traits\HasWysiwygMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;

class Post extends Model implements HasMedia
{

    use ProcessMediaTrait;
    use AutoProcessMediaTrait; // attached automatically from de request
    use HasMediaCollectionsTrait;

    // Para usarlo en la parte del edit y que me muestre el archivo guardado
    use HasMediaThumbsTrait;

    // Para las imagenes del WysiwygMedia
    use HasWysiwygMediaTrait;


    protected $fillable = [
        'title',
        'slug',
        'perex',
        'published_at',
        'enabled',
        'text',
    ];
    
    
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url', 'media_url', 'media_name'];


    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/posts/'.$this->getKey());
    }



    public function mediums()
    {
        return $this->morphMany(Medium::class, 'model');
    }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('gallery');
    }


    
    public function getMediaUrlAttribute()
    {
        $mediaItem = $this->getFirstMedia('gallery');
        return optional($mediaItem)->getUrl();
    }

    public function getMediaNameAttribute()
    {
        $mediaItem = $this->getFirstMedia('gallery');
        $file_name = optional($mediaItem)->getCustomProperty('name');
        return $file_name;
    }

}
