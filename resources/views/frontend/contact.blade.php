@extends('layouts.guest')
@section('content')
@include('frontend.partials._header-section', [
    'title' => 'CONTACTO',
    'image' => asset('images/contact/contacto-header.jpg')
])
<section>
    <div class="bg-custom-gray py-10 md:py-20 ">
        <div class="container px-0 md:px-32 mx-auto grid grid-cols-1 md:grid-cols-2">
            <div class="bg-white rounded-3xl px-6 py-5">
                <h2 class="text-primary font-bold text-2xl">Déjanos un mensaje</h2>
                <p class="text-primary">Completando el formulario</p>
                <form action="">
                    <input type="text" class="form-input" placeholder="Nombre">
                    <input type="email" class="form-input" placeholder="Email">
                    <input type="tel" class="form-input" placeholder="Teléfono">
                    <input type="text" class="form-input" placeholder="Empresa">
                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary">
                            conoce más
                        </a>
                    </div>
                </form>
            </div>
            <div class="px-6 py-5">
                <h3 class="text-primary font-bold text-xl">O escríbenos por cualquiera de los siguientes medios</h3>
                <ul class="text-primary mt-5">
                    <li class="bg-white px-4 py-2 rounded-lg mt-4">
                        <a href="mailto:info@ei.com.mx" class="inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 29.337 23.47">
                                <path id="Icon_material-email" data-name="Icon material-email" d="M29.4,6H5.934A2.93,2.93,0,0,0,3.015,8.934L3,26.536A2.942,2.942,0,0,0,5.934,29.47H29.4a2.942,2.942,0,0,0,2.934-2.934V8.934A2.942,2.942,0,0,0,29.4,6Zm0,5.867L17.668,19.2,5.934,11.867V8.934l11.735,7.334L29.4,8.934Z" transform="translate(-3 -6)" fill="#374fa7"/>
                            </svg>
                            <span class="ml-3">info@ei.com.mx</span>
                        </a>
                    </li>
                    <li class="bg-white px-4 py-2 rounded-lg mt-4">
                        <a class="inline-flex items-center" href="tel:3344556677">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 32.674 32.674">
                                <path id="Icon_material-phone" data-name="Icon material-phone" d="M11.071,18.641A27.5,27.5,0,0,0,23.033,30.6l3.993-3.993a1.8,1.8,0,0,1,1.852-.436,20.706,20.706,0,0,0,6.48,1.035,1.821,1.821,0,0,1,1.815,1.815v6.335a1.821,1.821,0,0,1-1.815,1.815A30.856,30.856,0,0,1,4.5,6.315,1.821,1.821,0,0,1,6.315,4.5h6.353a1.821,1.821,0,0,1,1.815,1.815,20.622,20.622,0,0,0,1.035,6.48,1.822,1.822,0,0,1-.454,1.852l-3.993,3.993Z" transform="translate(-4.5 -4.5)" fill="#374fa7"/>
                              </svg>
                            <span class="ml-3">33 4455 6677</span>
                        </a>
                    </li>
                    <li class="bg-white px-4 py-2 rounded-lg mt-4">
                        <a class="inline-flex items-center" href="tel:3344556677">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-5" viewBox="0 0 29 41.889">
                                <path id="Icon_ionic-ios-pin" data-name="Icon ionic-ios-pin" d="M22.375,3.375c-8.005,0-14.5,6.032-14.5,13.463,0,10.472,14.5,28.426,14.5,28.426s14.5-17.954,14.5-28.426C36.875,9.407,30.38,3.375,22.375,3.375Zm0,19.223A4.723,4.723,0,1,1,27.1,17.875,4.723,4.723,0,0,1,22.375,22.6Z" transform="translate(-7.875 -3.375)" fill="#374fa7"/>
                            </svg>                          
                            <span class="ml-3">32 st Kilda Road, Melbourne VIC, 3004 Australia</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        
    </div>
</section>
@endsection