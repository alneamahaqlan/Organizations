<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\SliderFactory> */
    use HasFactory,
        InteractsWithMedia;
    protected $fillable = ['title', 'sub_title', 'page_id'];
    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
    /**
     * Register media collections.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('sliders')->singleFile();
    }

    /**
     * Get the page associated with the slider.
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

}
