@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'ACERCA DE NOSOTROS',
    'image' => asset('images/about/about-header.jpg')
])
<section class="mt-10 md:mt-20">
    <div class="w-full px-6">
        <div class="container mx-auto flex flex-col md:flex-row-reverse md:items-center">
            <div class="w-full px-0 md:px-16">
                <h2 class="text-primary text-2xl md:text-3xl">Facilitamos, diseñamos e implementamos sistemas de gestión
                    <span class="font-bold">de políticas de integridad empresarial.</span>
                </h2>
                <p class="mt-3 text-primary md:text-lg">
                    En E&I creemos firmemente en que los empresarios, sin importar el tamaño de su empresa, tienen un compromiso con la sociedad. Un compromiso que debe ir más allá de generar empleos bien remunerados y ofrecer servicios/productos de calidad. Lo empresarios somos en nuestro día a día forjadores de cultura y de hábitos en nuestros colaboradores, en nuestros clientes y en nuestros proveedores.
                </p>
                <div class="mt-5">
                    <a href="{{ route('services') }}" class="btn btn-primary">ver servicios</a>
                </div>
            </div>
            <div class="w-full mt-10 md:mt-0">
                <img class="w-full md:w-3/4 mx-auto" src="{{ asset('images/about/about-image-1.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="mt-10 md:mt-20">
    <div class="bg-primary px-6 py-10 md:py-20">
        <div class="container mx-auto flex flex-col md:flex-row md:items-center">
            <div class="w-full px-0 md:px-16">
                <h2 class="text-2xl text-white">
                    E&I busca compartir sus experiencias y conocimientos <span class="font-bold">para ayudar a empresarios comprometidos</span>
                </h2>
                <p class="mt-3 text-white">
                    En la implementación de políticas de integridad y de cumplimiento de normas específicas relacionadas con Integridad y eficiencia, para el logro de sus objetivos y que agreguen valor a la empresa al reducir riesgos operativos, financieros, estratégicos, normativos y de seguridad.
                </p>
                <div class="mt-5">
                    <a href="{{ route('programs') }}" class="btn btn-outline">ver programas</a>
                </div>
            </div>
            <div class="w-full mt-10 md:mt-0">
                <img class="w-full md:w-3/4" src="{{ asset('images/about/about-image-2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="flex flex-col md:flex-row">
        <div class="bg-custom-gray px-6 py-10 md:py-20 md:pl-44 md:pr-12">
            <img class="w-24" src="{{ asset('images/about/mision.png') }}" alt="">
            <div class="mt-5">
                <h3 class="text-primary text-3xl font-bold uppercase">Misión</h3>
                <p class="mt-5 text-primary">
                    Somos un equipo de asesores interdisciplinarios que facilita, diseña e implementa sistemas de gestión y se especializa en la implementación de políticas de integridad.empresarial Emplea metodologías y herramientas de las mejores prácticas internacionales, así como brinda capacitación para apoyar a las empresas a eficientar sus procesos, así como implementar controles para el logro de sus objetivos.
                </p>
            </div>
        </div>
        <div class="px-6 py-10 md:py-20 md:pr-44 md:pl-12">
            <img class="w-24" src="{{ asset('images/about/vision.png') }}" alt="">
            <div class="mt-5">
                <h3 class="text-primary text-3xl font-bold uppercase">visión</h3>
                <p class="mt-5 text-primary">
                    Ser la consultora más eficiente y a la vanguardia que ofrezca servicios de excelencia en sistemas de gestión anticorrupción e implementación de políticas de integridad en el Estado de Jalisco. Aportar a un cambio de cultura en las empresas con las que colaboramos para el logro de sus objetivos.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection