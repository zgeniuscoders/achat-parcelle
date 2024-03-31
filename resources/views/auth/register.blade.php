@extends('layouts.auth')

@section('title')
    Inscription
@endsection

@section('text')
    Inscription
@endsection

@section('main')
    {{ $errors }}
    <form action="{{ route('register') }}" method="post" class="space-y-4">
        @csrf
        <x-input-component name="email" type="email" placeholder="zgeniuscoders@gmail.com" title="Adresse Email"
            :isLogin="true" value="{{ old('email') }}" />

        <x-input-component name="name" type="text" placeholder="zgeniuscoders" title="Nom d'utilisateur"
            :isLogin="true" value="{{ old('name') }}" />

        <x-input-component name="password" type="password" placeholder="zgeniuscoders" title="Mot de passe"
            :isLogin="true" value="{{ old('password') }}" />

        <x-input-component name="password_confirmation" type="password" placeholder="zgeniuscoders"
            title="Confirmer le mot de passe" :isLogin="true" value="{{ old('password_confirmation') }}" />

        <button
            class="bg-gradient-to-r dark:text-gray-300 from-emerald-500 to-cyan-500 shadow-lg mt-6 p-2 text-white rounded-lg w-full hover:scale-105 hover:from-cyan-500 hover:to-emerald-500 transition duration-300 ease-in-out"
            type="submit">
            S'INSCRIRE
        </button>
    </form>
@endsection

@section('footer')
    <div class="text-gray-500 flex text-center flex-col mt-4 items-center text-sm">
        <p class="cursor-default">
            By signing in, you agree to our
            <a class="group text-emerald-400 transition-all duration-100 ease-in-out" href="#">
                <span
                    class="cursor-pointer bg-left-bottom bg-gradient-to-r from-emerald-400 to-emerald-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                    Terms
                </span>
            </a>
            and
            <a class="group text-emerald-400 transition-all duration-100 ease-in-out" href="#">
                <span
                    class="cursor-pointer bg-left-bottom bg-gradient-to-r from-emerald-400 to-emerald-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                    Privacy Policy
                </span>
            </a>
        </p>
    </div>
@endsection
