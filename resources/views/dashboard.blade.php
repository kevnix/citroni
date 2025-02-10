<x-app-layout>
    <x-slot name="header">
        <x-application-logo />
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @include('layouts.navigation')
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col space-y-4 text-center">
                        <a href="/"
                            class="px-6 py-3 bg-yellow-400 text-gray-900 font-bold rounded-lg hover:bg-yellow-500 transition">
                            Play
                        </a>

                        <a href="{{ route('rules') }}"
                            class="px-6 py-3 bg-gray-800 text-white font-bold rounded-lg hover:bg-gray-700 transition">
                            How to Play
                        </a>

                        <a href="/"
                            class="px-6 py-3 bg-blue-500 text-white font-bold rounded-lg hover:bg-blue-600 transition">
                            Settings
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>