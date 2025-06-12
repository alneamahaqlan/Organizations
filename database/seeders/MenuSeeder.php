<?php

namespace Database\Seeders;

use App\Enums\PageStatus;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'title' => 'نمو',
                'icon' => 'fa-solid fa-eye',
                'children' => [
                    'أهداف الجمعية', 'النشأة والبداية', 'المؤسس', 'أعضاء مجلس الإدارة',
                    'الهيكل الإداري', 'خطط الجمعية', 'قياس رضا المستفيدين', 'سياسة الجودة', 'الرؤية والرسالة'
                ]
            ],
            [
                'title' => 'الخدمات',
                'icon' => 'fa-solid fa-gears',
                'children' => [
                    'نظام نمو', 'طلب إقامة برنامج', 'المبادرات', 'البريد الإلكتروني',
                    'نظام إدارة التدريب', 'منصة نمو التعليمية', 'موقع القسم الرجالي', 'موقع القسم النسائي'
                ]
            ],
            [
                'title' => 'الحوكمة',
                'icon' => 'fa-solid fa-briefcase',
                'children' => [
                    'سياسات الجمعية', 'لوائح الإدارة العامة', 'لوائح الميدان', 'القائمين على الجمعية',
                    'الميزانية السنوية', 'اللجان الدائمة', 'مكاتب الجمعية', 'قرارات التملك',
                    'التقارير السنوية', 'الإحصائيات'
                ]
            ],
            [
                'title' => 'الجمعية العمومية',
                'icon' => 'fa-solid fa-users',
                'children' => [
                    'الترشح', 'محاضر الاجتماعات', 'الأعضاء'
                ]
            ],
            [
                'title' => 'التبرعات',
                'icon' => 'fa-solid fa-hand-holding-heart',
                'children' => [
                    'المتجر الإلكتروني', 'الاستقطاع الشهري', 'الحسابات البنكية'
                ]
            ],
            [
                'title' => 'المناقصات',
                'icon' => 'fa-solid fa-file-invoice',
                'children' => []
            ],
            [
                'title' => 'المركز الإعلامي',
                'icon' => 'fa-solid fa-video',
                'children' => [
                    'أخبار الجمعية', 'القناة المرئية', 'القناة الصوتية', 'نماذج من الطلاب'
                ]
            ],
            [
                'title' => 'التوظيف والتطوع',
                'icon' => 'fa-solid fa-briefcase',
                'children' => [
                    'بوابة التوظيف', 'استمارة التطوع'
                ]
            ],
        ];

        foreach ($menus as $index => $menuData) {
            $page = Page::where('title', $menuData['title'])->first();
            $menu = Menu::create([
                'title' => $menuData['title'],
                'page_id' => $page?->id,
                'parent_id' => null,
                'sort_order' => $index + 1,
                'status' => PageStatus::Published,
                'icon' => $menuData['icon'],
            ]);

            foreach ($menuData['children'] as $i => $childTitle) {
                $childPage = Page::where('title', $childTitle)->first();
                Menu::create([
                    'title' => $childTitle,
                    'page_id' => $childPage?->id,
                    'parent_id' => $menu->id,
                    'sort_order' => $i + 1,
                    'status' => PageStatus::Published,
                    'icon' => $menuData['icon'],
                ]);
            }
        }
    }
}
