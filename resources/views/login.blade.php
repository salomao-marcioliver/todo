<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>
    Tela de Login
    <a href="{{route('home')}}">
        Ir para Página Inicial
    </a>
</x-layout>