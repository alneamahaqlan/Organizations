<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentSection extends Model
{
     use HasFactory;

    protected $fillable = ['title', 'description', 'page_id', 'sort_order'];

    public function items()
    {
        return $this->hasMany(ContentItem::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
