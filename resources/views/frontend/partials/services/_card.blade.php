<a href="{{ route('services.detail') }}">
    <div class="bg-white px-4 py-5 rounded-md">
        <img class="w-24 mx-auto" src="{{ $icon }}" alt="Sistema de gestión">
        <div class="mt-5">
            <h4 class="text-dark text-xl font-bold text-center">{{ $title }}</h4>
            <p class="mt-3 text-center text-xs">
                {{ $description }}
            </p>
        </div>
    </div>
</a>
