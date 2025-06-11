<?php

namespace App\Models;

use App\Enums\PageStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;

     protected $fillable = ['title','page_id','icon', 'parent_id', 'sort_order'];

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
    public function parent() { return $this->belongsTo(Menu::class, 'parent_id'); }
    public function children() { return $this->hasMany(Menu::class, 'parent_id'); }
    public function page() { return $this->HasOne(Page::class, 'id', 'page_id');  }

}