<form action="{{ route('profile.upload')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <div class="flex items-center justify-center py-4 text-8xl">
            
            @if(Auth::user()->profile_image)
                <img src="{{ asset('storage/profile_images/' . Auth::user()->profile_image) }}"
                    class="w-auto h-36 object-cover border border-gray-300 shadow-sm">
            @else
                <i class="fa-solid fa-user"></i>
            @endif
        </div>

        <label class="block text-sm font-medium text-gray-700">Upload Profile Picture</label>
        <input type="file" name="profile_image" class="mt-1 block w-full">
    </div>
    <x-primary-button>{{ __('Upload') }}</x-primary-button>
</form>