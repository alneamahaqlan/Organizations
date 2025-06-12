<?php

use App\Models\Page;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/{slug}', function ($slug) {
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('pages.show', compact('page'));
})->name('page.show');


// Route::view('/administrative-structure', 'administrative-structure')->name('administrative-structure');
// Route::view('/adminregulations', 'adminregulations')->name('adminregulations');
// Route::view('/annual-budget', 'annual-budget')->name('annual-budget');
// Route::view('/annual-reports', 'annual-reports')->name('annual-reports');
// Route::view('/association-offices', 'association-offices')->name('association-offices');
// Route::view('/associations-leaders', 'associations-leaders')->name('associations-leaders');
// Route::view('/bank-info', 'bank-info')->name('bank-info');
// Route::view('/begining', 'begining')->name('begining');
// Route::view('/block', 'block')->name('block');
// Route::view('/board-of-directors', 'board-of-directors')->name('board-of-directors');
// Route::view('/email', 'email')->name('email');
// Route::view('/feasibility-policy', 'feasibility-policy')->name('feasibility-policy');
// Route::view('/fieldregulations', 'fieldregulations')->name('fieldregulations');
// Route::view('/hoffadh', 'hoffadh')->name('hoffadh');
// Route::view('/initiative', 'initiative')->name('initiative');
// Route::view('/measu-benefi', 'measu-benefi')->name('measu-benefi');
// Route::view('/meet', 'meet')->name('meet');
// Route::view('/member-general', 'member-general')->name('member-general');
// Route::view('/news', 'news')->name('news');
// Route::view('/objectif', 'objectif')->name('objectif');
// Route::view('/operational-plans', 'operational-plans')->name('operational-plans');
// Route::view('/policies', 'policies')->name('policies');
// Route::view('/recruitment', 'recruitment')->name('recruitment');
// Route::view('/setup-loop', 'setup-loop')->name('setup-loop');
// Route::view('/standing-committees', 'standing-committees')->name('standing-committees');
// Route::view('/statistics', 'statistics')->name('statistics');
// Route::view('/test', 'test')->name('test');
// Route::view('/training', 'training')->name('training');
// Route::view('/vision-message', 'vision-message')->name('vision-message');
