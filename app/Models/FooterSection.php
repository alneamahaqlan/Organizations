<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FooterSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'footer_id',
        'name',
        'slug',
        'sort_order',
        'type',
    ];

    protected $casts = [
    'type' => \App\Enums\FooterItemType::class,
        'sort_order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',

    ];



    public function footer(): BelongsTo
    {
        return $this->belongsTo(Footer::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(FooterItem::class)->orderBy('sort_order');
    }
}
