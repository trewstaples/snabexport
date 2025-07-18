<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function rental(Request $request)
    {
        return Inertia::render('ServicePage', [
            'service' => Service::where('slug', 'rental')->first()
        ]);
    }

    public function service(Request $request)
    {
        return Inertia::render('ServicePage', [
            'service' => Service::where('slug', 'service')->first()
        ]);
    }

    public function repair(Request $request)
    {
        return Inertia::render('ServicePage', [
            'service' => Service::where('slug', 'repair')->first()
        ]);
    }
}
