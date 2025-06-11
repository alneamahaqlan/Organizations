<?php

namespace App\Models;

use App\Enums\FooterItemType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FooterItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'footer_section_id',
        'type',
        'label',
        'description',
        'url',
        'is_clickable',
        'icon',
        'image',
        'sort_order',
    ];

    protected $casts = [
        'type' => FooterItemType::class,
        'is_clickable' => 'boolean',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(FooterSection::class);
    }
}
