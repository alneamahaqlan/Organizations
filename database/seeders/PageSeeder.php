<?php

namespace Database\Seeders;

use App\Enums\PageStatus;
use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $titles = [
            'Home',
            'Documents',
            'Users',
            'Menus',
            'Approvals',
            'Editor',
            'Library',
        ];

        $extraPages = [
            'Team',
            'Company History',
            'Mission & Vision',
            'Blog',
            'News',
            'Careers',
            'Contact',
            'Support',
            'Pricing',
            'Terms of Service',
            'Privacy Policy',
            'FAQ',
            'Tutorials',
            'Guides',
            'API Docs',
            'Events',
            'Partnerships',
            'Press',
            'Downloads',
            'Changelog'
        ];

        $allTitles = [...$titles, ...$extraPages];

        foreach ($allTitles as $title) {
            Page::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => "<p>This is the content for the {$title} page.</p>",
                'status' => PageStatus::Published,
            ]);
        }
    }
}
