@extends('layouts.principal')

{{-- @section('productsCategories')
    @foreach ($findProductsCategories as $categoryProducts)
        <li><a href="#" onclick="location.href='{{ url('store/' . $categoryProducts->name) }}'">{{ $categoryProducts->name }}</a></li>
    @endforeach
@endsection

@section('serviceCategories')
    @foreach ($findCategory as $category)
        <li><a onclick="location.href='{{ url('services/' . $category->id) }}'">{{ $category->name }}</a></li>
    @endforeach
@endsection --}}

@section('content')
    {{-- En esta seccion lo que se contiene son los servicios, estos servicios contienen la imagen, 
         el nombre y la descripcion del servicio 
    --}}
    <section class="container-services">
        <div class="container">
            <h2><a href="{{ asset('/services') }}">Nuestros Servicios</a></h2>
            <div class="servicesMenu">
                <div class="service">
                    <picture>
                        <source srcset="{{ asset('images/scissor.webp') }}" type="image/webp">
                        <source srcset="{{ asset('images/scissor.png') }}" type="image/png">
                        <img src="{{ asset('image/scissor.png') }}" alt="Icon scissor" alt="Corte de cabello"
                            title="Corte de cabello">
                    </picture>
                    <h3 class="nameService">Corte de Cabello</h3>
                    <p class="description">Para caballeros y niños.</p>
                </div>
                <div class="service">
                    <picture>
                        <source srcset="{{ asset('images/razor.webp') }}" type="image/webp">
                        <source srcset="{{ asset('images/razor.png') }}" type="image/png">
                        <img src="{{ asset('image/razor.png') }}" alt="Icon scissor" alt="Corte de Barba"
                            title="Corte de Barba">
                    </picture>
                    <h3 class="nameService">Corte de Barba</h3>
                    <p class="description">Emparejado, alineado y afeitado de barba.</p>
                </div>
                <div class="service">
                    <picture>
                        <source srcset="{{ asset('images/brush.webp') }}" type="image/webp">
                        <source srcset="{{ asset('images/brush.png') }}" type="image/png">
                        <img src="{{ asset('image/brush.png') }}" alt="Icon scissor" alt="Afeitado Suave"
                            title="Afeitado Suave">
                    </picture>
                    <h3 class="nameService">Afeitado Suave</h3>
                    <p class="description">Una sola pasada con navaja, loción para despues de afeitar.</p>
                </div>
                <div class="service">
                    <picture>
                        <source srcset="{{ asset('images/hairbrush.webp') }}" type="image/webp">
                        <source srcset="{{ asset('images/hairbrush.png') }}" type="image/png">
                        <img src="{{ asset('image/hairbrush.png') }}" alt="Icon scissor" alt="Mascarilla Facial"
                            title="Mascarilla Facial">
                    </picture>
                    <h3 class="nameService">Mascarilla Facial</h3>
                    <p class="description">Distintos tipos de mascarillas, de barro, sheet (hoja), para la hidratación y cuidado de la piel, así como el uso de toallas huemdas calientes y frias para relajar la piel.</p>
                </div>
            </div>
            <div class="btn-enlace">
                <a class="btn orange" href="{{ asset('services') }}">Ver Servicios</a>
            </div>
        </div>
    </section>
    {{-- En esta sección se le pone una imagen y una pregunta para que lo redirija a la vista de citas --}}
    <section class="schedule">
        <div class="container-schedule">
            <div class="container-img">
                <picture>
                    <source srcset="{{ asset('images/contact-img.webp') }}" type="image/webp">
                    <source srcset="{{ asset('images/contact-img.jpg') }}" type="image/jpeg">
                    <img src="{{ asset('images/contact-img.jpg') }}" alt="Image Contact"
                        alt="¿Que esperas para agendar tu cita?" title="¿Que esperas para agendar tu cita?">
                </picture>
            </div>
            <div class="phraseContact">
                <h2>¿Qué esperas para agendar tu cita?</h2>
                <a href="{{ asset('date') }}" class="btn">Agendar Cita</a>
            </div>
        </div>
    </section>
    {{-- En esta seccion se mostrará los servicios que se ofrecen de cabello, barba y facial con sus precios --}}
    <section class="prices">
        <div class="container-prices container">
            <h2><a href="{{ asset('services') }}">Nuestros Precios</a></h2>

            <div class="price-wrap">
                <div class="container-price-wrap">
                    <h3><a href="{{ asset('services/1') }}">Cortes de Cabello</a></h3>
                    <ul class="hairStyling">
                        <li>
                            <h4>Corte Estilo Fade</h4>
                            <p>Corte de pelo degradado, dejando el cabello muy recortado en la nuca, patillas y laterales de
                                la cabeza.</p>
                            <span class="price">$170</span>
                        </li>
                        <li>
                            <h4>Casquete Corto</h4>
                            <p>Rapado de los lado y levemente más largo de arriba, permite darle varios estilos.</p>
                            <span class="price">$120</span>
                        </li>
                        <li>
                            <h4>Dandi</h4>
                            <p>Raya al lado, ideal para cualquier dia de verano. Corte clásico y limpio.</p>
                            <span class="price">$150</span>
                        </li>
                    </ul>
                </div>
                <div class="container-price-wrap">
                    <h3><a href="{{ asset('services/2') }}">Afeitado</a></h3>
                    <ul class="hairStyling">
                        <li>
                            <h4>Barba circular</h4>
                            <p>Un parche en la barbilla y un bigote que forman un círculo.</p>
                            <span class="price">$120</span>
                        </li>
                        <li>
                            <h4>Barba corta cuadrada</h4>
                            <p>Una barba corta con los lados delgados bien recortados.</p>
                            <span class="price">$150</span>
                        </li>
                        <li>
                            <h4>Barba estilo franja en la barbilla</h4>
                            <p>Una barba sin bigote que rodea la barbilla.</p>
                            <span class="price">$130</span>
                        </li>
                    </ul>
                </div>
                <div class="container-price-wrap">
                    <h3><a href="{{ asset('services/3') }}">Mascarillas</a></h3>
                    <ul class="hairStyling">
                        <li>
                            <h4>Barro y arcilla</h4>
                            <p>Mascarillas clásicas para una limpieza profunda y para el cutis graso.</p>
                            <span class="price">$100</span>
                        </li>
                        <li>
                            <h4>Peel-oof</h4>
                            <p>Para cualquier tipo de necesidad, hidratación, limpieza y reparación.</p>
                            <span class="price">$120</span>
                        </li>
                        <li>
                            <h4>Hoja (sheet)</h4>
                            <p>Compuestas por una delgada capa de algodón empapada de alguna fórmula líquida que hidrata,
                                restaura y refresca la piel.</p>
                            <span class="price">$150</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="btn-enlace">
                <a class="btn green" href="{{ asset('date') }}">Agrenda tu cita</a>
            </div>
        </div>
    </section>
    <section class="container ubication">
        <div class="container-ubication">
            <h2>Nuestra Ubicación</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.214017878405!2d-86.8723879435819!3d21.15812537323973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b36655929cb%3A0xd59ba81c86729e54!2sWaves%20Barber%20Shop!5e0!3m2!1ses-419!2smx!4v1634438075079!5m2!1ses-419!2smx"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
@endsection
