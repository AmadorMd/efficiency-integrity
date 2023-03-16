<a href="{{ route('services.detail', [
    'slug' => $slug
]) }}" class="group">
    <div class="bg-white px-4 md:px-16 py-5 rounded-md md:h-96 md:flex md:flex-col md:justify-around group-hover:bg-secondary transition-colors duration-200 ease-in">
        <img class="w-24 mx-auto group-hover:hidden" src="{{ $icon }}" alt="Sistema de gestión">
        <img class="w-24 mx-auto group-hover:block hidden" src="{{ $iconWhite }}" alt="Sistema de gestión">
        <div class="mt-5">
            <h4 class="text-dark text-xl font-bold text-center group-hover:text-white">{{ $title }}</h4>
            <p class="mt-3 text-center text-xs md:text-base group-hover:text-white">
                {{ $description }}
            </p>
        </div>
    </div>
</a>
