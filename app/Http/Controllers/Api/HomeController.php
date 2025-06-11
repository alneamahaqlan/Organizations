<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomePageResource;
use App\Models\Page;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function index(): JsonResponse
    {
        $home = Page::with(['sliders','news','members','partners','galleries','footer.sections.items'])
            ->where('slug', 'home')
            ->firstOrFail();

        return response()->json([
            'status' => 'success',
            'data' => $home,
        ]);
    }
}