<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\JsonResponse;

class FooterController extends Controller
{
    public function index(): JsonResponse
    {
        $footers = Footer::with(['sections.items'])->orderBy('sort_order')->get();

        return response()->json([
            'status' => 'success',
            'data' => $footers,
        ]);
    }
}
