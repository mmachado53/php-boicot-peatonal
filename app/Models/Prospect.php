<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Prospect extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'is_active',
        'has_bumps',
        'is_from_politician',
        'is_from_media',
        'is_from_business',
        'google_maps_link',
        'facebook_link',
        'reporter_email',
        'image_url',
    ];

    public function getImageUrlAttribute($value)
    {
//        @todo: remove this line when we have a proper image storage
        $value = str_replace('public', 'storage', (string) $value);
        return url($value);
    }

    /**
     * @throws Exception
     */
    public function getVotesAttribute($value): int
    {
        return random_int(1, 99);
    }

    public function markFeatured()
    {
        $this->featured_at = now();
        $this->save();
    }

    public function scopeFeatured($query)
    {
        return $query->whereNotNull('featured_at')->orderByDesc('featured_at');
    }

    public function scopeNotFeatured($query)
    {
        return $query->whereNull('featured_at');
    }

    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
