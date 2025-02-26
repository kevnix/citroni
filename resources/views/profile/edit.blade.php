<x-app-layout>
    <x-slot name="header">
        <x-application-logo />
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex flex-col sm:flex-row justify-between items-center gap-6">
                <div class="w-full sm:w-1/2">
                    @include('profile.partials.update-profile-information-form')
                </div>
            
                <div class="w-full sm:w-1/2">
                    @include('profile.partials.upload-profile-picture-form')
                </div>
            </div>
            

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="max-w-xl w-full">
                    @include('profile.partials.delete-user-form')
                </div>
                <a href="{{ route('dashboard') }}"
                    class="px-6 py-3 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition w-full sm:w-auto text-center">
                    Back to Main Menu
                </a>
            </div>
            
            
        </div>
    </div>
</x-app-layout>