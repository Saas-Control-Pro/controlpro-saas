<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Empresa;
use App\Models\Sucursal;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */


public function store(Request $request)
{
    $request->validate([
        'empresa_nombre' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|confirmed|min:6',
    ]);

    DB::beginTransaction();

    try {

        // Crear empresa
        $empresa = Empresa::create([
            'nombre' => $request->empresa_nombre,
            'plan' => 'free',
            'trial_ends_at' => now()->addDays(15),
        ]);

        // Crear sucursal principal
        $sucursal = Sucursal::create([
            'empresa_id' => $empresa->id,
            'nombre' => $empresa->nombre . ' - Sucursal Principal',
        ]);

        // Crear usuario owner
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'empresa_id' => $empresa->id,
            'sucursal_id' => $sucursal->id,
            'rol' => 'owner'
        ]);

        DB::commit();

        auth()->login($user);

        return redirect()->route('dashboard');

    } catch (\Exception $e) {

        DB::rollBack();
        return back()->withErrors(['error' => 'Error al crear empresa']);
    }
}

}
