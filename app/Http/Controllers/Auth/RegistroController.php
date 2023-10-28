<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function registroConSesion(Request $request)
{

    return redirect()->route('dashboard'); // Redirige al área de usuario después de registrar
}
}