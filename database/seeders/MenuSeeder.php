<?php

namespace Database\Seeders;

use App\Enums\PageStatus;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $iconMap = [
            'heroicon-o-home' => 'Home',
            'heroicon-o-document' => 'Documents',
            'heroicon-o-user' => 'Users',
            'heroicon-o-menu' => 'Menus',
            'heroicon-o-check-circle' => 'Approvals',
            'heroicon-o-pencil' => 'Editor',
            'heroicon-o-book-open' => 'Library',
        ];

        $icons = array_keys($iconMap);

        $pages = Page::inRandomOrder()->get();
        $pageIndex = 0;

        // Create parent menu items
        foreach (array_values($iconMap) as $index => $label) {
            $icon = $icons[$index % count($icons)];
            $page = $pages[$pageIndex % $pages->count()];

            $menu = Menu::create([
                'title' => $label,
             
                'page_id' => $page->id,
                'parent_id' => null,
                'sort_order' => $index + 1,
                'status' => PageStatus::Published,
                'icon' => $icon,
            ]);

            $pageIndex++;

            // Create child menu items for each parent
            for ($i = 1; $i <= 3; $i++) {
                $childPage = $pages[$pageIndex % $pages->count()];
                Menu::create([
                    'title' => $label . ' Option ' . $i,

                    'page_id' => $childPage->id,
                    'parent_id' => $menu->id,
                    'sort_order' => $i,
                    'status' => PageStatus::Published,
                    'icon' => $icons[array_rand($icons)],
                ]);
                $pageIndex++;
            }
        }
    }
}
