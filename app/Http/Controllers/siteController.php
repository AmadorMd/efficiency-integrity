<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public $serviceItems = [];
    public function __construct(){
        $this->serviceItems = [
            'sistemas-gestion' => [
                'title' => 'Sistema De Gestión De Integridad Para Las Empresas',
                'HTMLDescription' => '<p class="text-primary mt-5 md:text-lg">¿Qué ofrece el Sistema de Gestión de Integridad para las Empresas?</p>
                <ul class="max-w-md space-y-1 text-primary list-inside mt-5">
                    <li class="flex items-center">
                        <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Compromiso con nuestros clientes, proveedores y sociedad en general con la adecuada gestión de Integridad.
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Diagnóstico acertado de los riesgos y su impacto.
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Gestionar mediante políticas los riesgos.
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Acciones que ayuden a cumplir los objetivos y las políticas. 
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Seguimiento, control y mejora continua de la Integridad. 
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 mr-1.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Informar continuamente los avances y logros a los interesados.
                    </li>
                </ul>',
                'image' => asset('images/services/detail/image-detail.jpg')
            ],
            'codigo-conducta' => [
                'title' => 'Código De Conducta',
                'HTMLDescription' => '<p class="text-primary mt-5 md:text-lg">Nuestro proceso incluye la elaboración de un documento detallado que incluya la Misión, Visión, Objetivos y Valores de la empresa, además de contemplar los aspectos legales y normativos aplicables.</p>
                <p class="text-primary mt-5 md:text-lg">Desarrollamos un canal de denuncia que permita a los empleados y colaboradores reportar situaciones incómodas o incongruentes con los valores y principios establecidos en el Código de Conducta.
                </p>
                <p class="text-primary mt-5 md:text-lg">Nuestro equipo se asegurará de que el Código de Conducta sea ampliamente conocido y comprendido por todos los miembros de la organización a través de la implementación de canales de comunicación eficientes. 
                </p>
                <p class="text-primary mt-5 md:text-lg">Trabajamos en el desarrollo de herramientas que permitan el seguimiento y cumplimiento del Código de Conducta, fomentando así la cultura de integridad empresarial.</p>
                <p class="text-primary mt-5 md:text-lg">Los beneficios cubiertos del Código de Conducta serán la adaptación de la cultura, regulación y giro de la empresa a una perspectiva ética y responsable. Además, el Código de Conducta establecerá los principios mínimos para actuar en la empresa y promoverá un comportamiento ético y responsable por parte de los colaboradores.</p>
                <p class="text-primary mt-5 md:text-lg">Si está interesado en nuestro servicio, por favor no dude en ponerse en contacto con nosotros para programar una reunión y discutir los detalles de su proyecto.
                </p>
                ',
                'image' => asset('images/services/detail/image-detail.jpg')
            ],
            'control-auditoria' => [
                'title' => 'Programa De Controles Y Auditoria De Integridad',
                'HTMLDescription' => '<p class="text-primary mt-5 md:text-lg">E&I Ofrece un servicio de implementación de sistemas de control, vigilancia y auditoría de integridad en su organización. Incluimos auditorías periódicas para evaluar el cumplimiento de estándares de integridad, controles internos y auditoría, administración de riesgos y mejoras continúas.</p>
                <p class="text-primary mt-5 md:text-lg">También capacitamos en metodologías basadas en las mejores prácticas internacionales para ayudar a evaluar el nivel de eficiencia y eficacia de sus sistemas de control interno e identificar medidas para fortalecer la gestión de la integridad empresarial. Si deseas conocer más contáctanos.</p>',
                'image' => asset('images/services/detail/image-detail.jpg')
            ],
            'recursos-humanos' => [
                'title' => 'Políticas De Recursos Humanos.',
                'HTMLDescription' => '<p class="text-primary mt-5 md:text-lg">Nuestra empresa ofrece el servicio para implementar la cultura de inclusión y respeto a los derechos humanos en todas las áreas de su operación. Esto incluye la adopción de políticas y prácticas de recursos humanos orientadas a evitar la incorporación de personas que puedan poner en riesgo la integridad de la corporación. Además, nos esforzamos por asegurar que todas las decisiones de contratación se realicen de acuerdo con los estándares éticos y legales aplicables, sin discriminación alguna. La capacitación y la implementación rigurosa de políticas de contratación son esenciales para garantizar que los procesos se realicen de manera justa y equitativa, y para proteger los derechos de todas las personas involucradas.
                </p>',
                'image' => asset('images/services/detail/image-detail.jpg')
            ],
            'transpariencia-confidencialidad' => [
                'title' => 'Transparencia Y Confidencialidad',
                'HTMLDescription' => '<p class="text-primary mt-5 md:text-lg">E&I se compromete a promover la transparencia y la publicidad de los intereses de su organización en todas sus operaciones, con el objetivo de asegurar la integridad y confianza de nuestros stakeholders.</p>
                <p class="text-primary mt-5 md:text-lg">Para ello, establecemos mecanismos claros y efectivos para identificar la información relevante y clasificarla adecuadamente, garantizando la confidencialidad de aquella que lo requiere y la publicidad de la información que deba ser conocida. Además, establecemos canales de comunicación eficaces para asegurar que la información relevante se difunda de manera oportuna y actualizada a todas las partes interesadas. Con estos esfuerzos, buscamos fomentar un ambiente de transparencia y confianza en todas las operaciones de la empresa.
                </p>',
                'image' => asset('images/services/detail/image-detail.jpg')
            ],
        ];
    }
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function services(){
        return view('frontend.services.index');
    }
    public function servicesDetail($slug){
        $info = $this->serviceItems[$slug];
        $title = $info['title'];
        $HTMLDescription = $info['HTMLDescription'];
        $image = $info['image'];
       
        return view('frontend.services.detail', compact('title', 'HTMLDescription', 'image', 'slug'));
    }
    public function blogs(){
        return view('frontend.blog.index');
    }
    public function entry(Blog $entry){
        return view('frontend.blog.detail', compact('entry'));
    }
    public function programs(){
        return view('frontend.programs');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
