<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Partner extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\PartnerFactory> */
    use HasFactory,
        InteractsWithMedia;
    protected $fillable = ['page_id', 'sort_order'];
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
        $this->addMediaCollection('partners')->singleFile();
    }

        public function page() { return $this->HasOne(Page::class, 'id', 'page_id');  }

}