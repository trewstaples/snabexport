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
            'service' => Service::where('slug', 'rental')->first(),
            'description' => 'Широкий спектр гидравлического оборудования в аренду с доставкой по России. Инструктаж по работе с инструментом'
        ]);
    }

    public function service(Request $request)
    {
        return Inertia::render('ServicePage', [
            'service' => Service::where('slug', 'service')->first(),
            'description' => 'Технические консультации, подбор оборудования, его интеграция в процесс производства. Гарантийный и постгарантийный ремонт, модернизация и капремонт станков',

        ]);
    }

    public function repair(Request $request)
    {
        return Inertia::render('ServicePage', [
            'service' => Service::where('slug', 'repair')->first(),
            'description' => 'Разрабатываем и сопровождаем техпроекты ремонта и модернизации металлорежущих станков и кузнечно-прессового оборудования. Электромонтажные работы и ПНР',
        ]);
    }
}
