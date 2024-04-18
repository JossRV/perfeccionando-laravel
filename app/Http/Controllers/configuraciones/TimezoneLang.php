<?php

namespace App\Http\Controllers\configuraciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TimezoneLang extends Controller
{
    //configuracion de timezone para la base de datos (hora de acuerdo a la zona horaria) utilizacion de ruta
    public function setTimezone(Request $request)
    {
        // recibe informacion de la zona horaria enviado por ajax js
        $timezoneOffset = $request->timezone_offset;

        // Calcula la diferencia de tiempo entre la hora UTC y la hora local
        $serverOffset = (new \DateTime())->getOffset() / 60;
        $timezone = $serverOffset - ($timezoneOffset / 60);

        // Establece la zona horaria en la sesión o en la configuración de la aplicación
        // Session::put('timezone', $timezone);
        // O si quieres cambiar la configuración de la aplicación
        config(['app.timezone' => $timezone]);

        return response()->json(['success' => true]);
    }
    // public function lang($lang){
    //     // config(['app.locale' => $lang]);
    //     App::setLocale($lang);
    //     return redirect()->back();
    // }
    // instalacion de lenguajes
    // composer require --dev laravel-lang/common
    // php artisan lang:update
    // composer require laravel-lang/locales (opcional)
    // confog/app incluir provider solo para laravel 5 y versiones inferiores
    // Laraveles\Spanish\SpanishServiceProvider::class,
    // actualizaciones de traducciones con el comando
    // php artisan vendor:publish --tag=lang
    // crear middleware para su funcionamiento del idioma dinamico
}
