@extends('layouts.auth')

@section('title')
    Verifier l'adresse email
@endsection

@section('text')
    Verification de l'adresse email
@endsection

@section('main')
    <p class="text-xl text-white mb-4">Your must verified your email before using ndakunakin</p>
    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit"
            class="dark:text-gray-900 text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Resend
            verification email</button>
    </form>
@endsection
