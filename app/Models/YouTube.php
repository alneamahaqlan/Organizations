<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YouTube extends Model
{
    /** @use HasFactory<\Database\Factories\YouTubeFactory> */
    use HasFactory;
    protected $fillable = [ 'title', 'url', 'page_id'];
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
     * Get the page associated with the YouTube video.
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
