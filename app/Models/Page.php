<?php

namespace App\Models;

use App\Enums\PageStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory,
        InteractsWithMedia;


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
    ];
    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => PageStatus::class,
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
    /**
     * Register media collections.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('pages')->singleFile();
    }

    /**
     * Get the sliders associated with the page.
     */
    public function sliders()
    {
        return $this->hasMany(Slider::class)->orderBy('sort_order');
    }
    /**
     * Get the footers associated with the page.
     */
    public function footer()
    {
        return $this->hasOne(Footer::class);
    }

    /**
     * Get the news associated with the page.
     */
    public function news()
    {
        return $this->hasMany(News::class)->orderBy('sort_order');
    }

    //members
    public function members()
    {
        return $this->hasMany(Member::class)->orderBy('sort_order');
    }
    //partners
    public function partners()
    {
        return $this->hasMany(Partner::class)->orderBy('sort_order');
    }

//galleries
    public function galleries()
    {
        return $this->hasMany(Gallery::class)->orderBy('sort_order');
    }
}
