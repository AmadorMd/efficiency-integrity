<div class="swiffy-slider slider-item-nogap slider-indicators-round slider-nav-animation-slideup slider-nav-mousedrag">
    <ul class="slider-container">
        <li class="slide-visible">
            <div id="slide1" class="relative">
                <img class="relative z-0" src="{{ asset('images/main-banner/main_banner-1.jpg') }}" alt="">
                <div class="absolute z-10 w-2/3 md:w-1/2 top-1/2 left-0 transform -translate-y-1/2 ml-5 md:ml-20">
                    <p class="text-white text-base md:text-4xl lg:text-6xl">Ayudamos a organizaciones y empresas comprometidas con la <span class="font-bold">eficiencia e integridad en sus procesos.</span></p>
                    <div class="mt-3 md:mt-10 flex flex-col md:flex-row md:items-center">
                        <div>
                            <a class="btn btn-primary" href="{{ route('about') }}">ACERCA DE NOSOTROS</a>
                        </div>
                        <div class="mt-5 md:mt-0 md:ml-5">
                            <a class="btn btn-outline" href="{{ route('services') }}">NUESTROS SERVICIOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="slide-visible">
            <div id="slide1" class="relative">
                <img class="relative z-0" src="{{ asset('images/main-banner/main_banner-2.jpg') }}" alt="">
                <div class="absolute z-10 w-2/3 md:w-1/2 top-1/2 left-0 transform -translate-y-1/2 ml-5 md:ml-20">
                    <p class="text-white text-base md:text-4xl lg:text-6xl">Ofrece un servicio de implementación de sistemas de <span class="font-bold">control, vigilancia y auditoría de integridad en su organización.</span></p>
                    <div class="mt-3 md:mt-10 flex flex-col md:flex-row md:items-center">
                        <div>
                            <a class="btn btn-primary" href="{{ route('about') }}">ACERCA DE NOSOTROS</a>
                        </div>
                        <div class="mt-5 md:mt-0 md:ml-5">
                            <a class="btn btn-outline" href="{{ route('services') }}">NUESTROS SERVICIOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="slide-visible">
            <div id="slide1" class="relative">
                <img class="relative z-0" src="{{ asset('images/main-banner/main_banner-3.jpg') }}" alt="">
                <div class="absolute z-10 w-2/3 md:w-1/2 top-1/2 left-0 transform -translate-y-1/2 ml-5 md:ml-20">
                    <p class="text-white text-base md:text-4xl lg:text-6xl">
                        Comprometidos a promover la transparencia y la 
                        <span class="font-bold">publicidad de su organización para generar mayor confiabilidad.</span></p>
                    <div class="mt-3 md:mt-10 flex flex-col md:flex-row md:items-center">
                        <div>
                            <a class="btn btn-primary" href="{{ route('about') }}">ACERCA DE NOSOTROS</a>
                        </div>
                        <div class="mt-5 md:mt-0 md:ml-5">
                            <a class="btn btn-outline" href="{{ route('services') }}">NUESTROS SERVICIOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        
    </ul>
    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>
    <ul class="slider-indicators">
        <li class=""></li>
        <li class="active"></li>
        <li class=""></li>       
    </ul>
</div>