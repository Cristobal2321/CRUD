@extends('dashboard.layout')

@section('content')


    <form method="POST" action="{{route('registro') }}">
        @csrf

        <!-- Nombre

        <!-- Correo Electrónico -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Nombre de usuario')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Contraseña -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
        </div>

        <div class="mt-4">
            <x-input-label for="rol" :value="__('Rol del Usuario')" />
            <select id="rol" class="block mt-1 w-full" name="rol" :value="old('rol')" required>
                <option value="admin">Administrador</option>
                <option value="regular" selected>Usuario Regular</option>
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
@endsection