@extends('dashboard.layout')

@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Nombre de Usuario')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$error<x-guest-layout>
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
            
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('inicio-sesion') }}">
                            {{ __('¿Ya tienes una cuenta?') }}
                        </a>
            
                        <x-primary-button class="ml-4">
                            {{ __('Registrar') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-guest-layout>
            s->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirma Contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
                {{ __('Agregar Usuario') }}
            </x-primary-button>
        </div>
    </form>

@endsection