@extends('layouts.auth')

@section('title')
    Connexion
@endsection

@section('text')
    Connexion
@endsection

@section('main')
    <form action="{{ route('login') }}" method="post" class="space-y-4">
        @csrf
        <x-input-component name="email" type="email" placeholder="zgeniuscoders@gmail.com" title="Adresse Email"
            :isLogin="true" value="{{ old('email') }}" />


        <x-input-component name="password" type="password" placeholder="*********" title="Mot de passe" :isLogin="true"
             />


        <button
            class="bg-gradient-to-r dark:text-gray-300 from-emerald-500 to-cyan-500 shadow-lg mt-6 p-2 text-white rounded-lg w-full hover:scale-105 hover:from-cyan-500 hover:to-emerald-500 transition duration-300 ease-in-out"
            type="submit">
            SE CONNECTER
        </button>

        <a class="group text-emerald-400 transition-all duration-100 ease-in-out" href="">
            <span
                class="bg-left-bottom bg-gradient-to-r text-sm to-emerald-400 from-sky-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                Mot de passe oublié ?
            </span>
        </a>
    </form>
@endsection


@section('footer')
    <div class="flex flex-col mt-4 items-center justify-center text-sm">
        <h3 class="dark:text-gray-300">
            Vous n'avez pas de compte ?
            <a class="group text-emerald-400 transition-all duration-100 ease-in-out" href="{{ route('register') }}">
                <span
                    class="bg-left-bottom bg-gradient-to-r from-emerald-400 to-emerald-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                    Inscrivez-vous
                </span>
            </a>
        </h3>
    </div>
    <!-- Third Party Authentication Options -->
    {{-- <div id="third-party-auth" class="flex items-center justify-center mt-5 flex-wrap">
                        <button href="#"
                            class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                            <img class="max-w-[25px]" src="https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/"
                                alt="Google" />
                        </button>
                        <button href="#"
                            class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                            <img class="max-w-[25px]" src="https://ucarecdn.com/95eebb9c-85cf-4d12-942f-3c40d7044dc6/"
                                alt="Linkedin" />
                        </button>
                        <button href="#"
                            class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                            <img class="max-w-[25px] filter dark:invert"
                                src="https://ucarecdn.com/be5b0ffd-85e8-4639-83a6-5162dfa15a16/" alt="Github" />
                        </button>
                        <button href="#"
                            class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                            <img class="max-w-[25px]" src="https://ucarecdn.com/6f56c0f1-c9c0-4d72-b44d-51a79ff38ea9/"
                                alt="Facebook" />
                        </button>
                        <button href="#"
                            class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                            <img class="max-w-[25px] dark:gray-100"
                                src="https://ucarecdn.com/82d7ca0a-c380-44c4-ba24-658723e2ab07/" alt="twitter" />
                        </button>

                        <button href="#"
                            class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                            <img class="max-w-[25px]" src="https://ucarecdn.com/3277d952-8e21-4aad-a2b7-d484dad531fb/"
                                alt="apple" />
                        </button>
                    </div> --}}
@endsection
