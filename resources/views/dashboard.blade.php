<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto my-5 text-center">
            <div class="flex space-xl-6">
                <div class="image-container">
                    <img src="{{ asset('images/2.jpg') }}" alt="Image 1" class="w-300 h-300object-cover">
                    <a href="{{ route('index')}}">la page d'ajouter une personne</a>
                </div>
                <div class="image-container">
                    <img src="{{ asset('images/2.jpg') }}" alt="Image 2" class="w-300 h-300 object-cover">
                    <a href="{{ route('index')}}">la page d'ajouter une personne</a>
                </div>
                <div class="image-container">
                    <img src="{{ asset('images/2.jpg') }}" alt="Image 3" class="w-300 h-300object-cover">
                    <a href="{{ route('index')}}">la page d'ajouter une personne</a>
                </div>
                <div class="image-container">
                    <img src="{{ asset('images/2.jpg') }}" alt="Image 3" class="w-300 h-300object-cover">
                    <a href="{{ route('index')}}">la page d'ajouter une personne</a>
                </div>
            </div>
        </div>
        <footer class="text-center mt-8">
            &copy; 2024 Mary. Tous droits réservés.
        </footer>

   

</x-app-layout>


