<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentItem extends Model
{
    use HasFactory;

    protected $fillable = ['content_section_id', 'type', 'label', 'value', 'icon', 'sort_order'];

    public function section()
    {
        return $this->belongsTo(ContentSection::class, 'content_section_id');
    }
}
