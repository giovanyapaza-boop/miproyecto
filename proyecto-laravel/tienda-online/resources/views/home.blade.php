@extends('layouts.app')

@section('title', 'Tienda de Herramientas | Importadora Gikar')

@section('content')

    <section class="header-content container">

        <div class="header-img">
            <img src="{{ asset('image/img1.png') }}" alt="Herramientas eléctricas">
        </div>

        <div class="header-txt">
            <h1>Ofertas especiales</h1>
            <p>Adquiere las mejores herramientas</p>
            <a href="#lista-1" class="btn-1">Ver productos</a>
        </div>

    </section>

    <section class="ofert container">
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="{{ asset('image/f1.png') }}" alt="Taladro inalámbrico" loading="lazy">
            </div>
            <div class="ofert-txt">
                <h3>Taladro Inalámbrico</h3>
                <p>Voltaje: 20V</p>
                <p>Velocidad de No-carga: 0-400/0-1500/min<br>Max. torsión: 45NM</p>
                <p>Capacidad de mandril: 0.8-10mm<br>Ajustes de par: 15+1</p>
                <a href="#lista-1" class="btn-2">Información</a>
            </div>
        </div>
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="{{ asset('image/f2.png') }}" alt="Llave de impacto inalámbrica" loading="lazy">
            </div>
            <div class="ofert-txt">
                <h3>Llave de impacto inalámbrica</h3>
                <p>Motor sin escobillas<br>Voltaje de taladro: 20V</p>
                <p>Hex Encastre: 1/4"<br>Velocidad de No-carga: 0-2400/min</p>
                <p>Tasa de impacto: 0-3550bpm<br>Max. torque: 200NM</p>
                <a href="#lista-1" class="btn-2">Información</a>
            </div>
        </div>
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="{{ asset('image/f3.png') }}" alt="Amoladora Angular inalámbrica" loading="lazy">
            </div>
            <div class="ofert-txt">
                <h3>Amoladora Angular inalámbrica</h3>
                <p>Voltios: 20V</p>
                <p>Velocidad sin carga: 8500/min</p>
                <p>Diámetro de disco: 100mm</p>
                <a href="#lista-1" class="btn-2">Información</a>
            </div>
        </div>
    </section>

    <section class="products container" id="lista-1">

        <h2>Productos</h2>

        <div class="product-content">

            @forelse($productos as $producto)
                <div class="product">
                    <img src="{{ asset('image/' . $producto->image) }}" alt="{{ $producto->nombre }}" loading="lazy">
                    <div class="product-txt">
                        <h3><span>{{ $producto->codigo }}</span></h3>
                        <h4>{{ $producto->nombre }}</h4>
                        <p>{{ $producto->descripcion }}</p>
                        <p class="precio">{{ number_format($producto->precio, 2) }} Bs.</p>
                    </div>
                </div>
            @empty
                <p>No hay productos disponibles por el momento.</p>
            @endforelse

        </div>
    </section>

    <section class="nosotros container" id="nosotros">
        <div class="nosotros-info">
            <img src="{{ asset('image/fachada.jpg') }}" alt="Fachada de Importadora Gikar" loading="lazy">
            <h3><span>SOBRE NOSOTROS</span></h3>
            <p>
                Somos una microempresa de Oruro con 16 años de experiencia en la importación y venta de herramientas eléctricas de diferentes marcas. Comenzamos en una pequeña caseta y hoy contamos con una tienda en una zona comercial y un almacén de distribución. Nos caracterizamos por ofrecer productos de calidad, precios competitivos y una atención comprometida con la satisfacción de nuestros clientes.
            </p>
        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="{{ asset('image/mision.png') }}" alt="Icono de misión" loading="lazy">
            </div>
            <div class="icon-text">
                <h3>Misión</h3>
                <p>
                    Ofrecer herramientas eléctricas de calidad, de diferentes marcas y a precios competitivos, brindando una atención amable y confiable que satisfaga las necesidades de nuestros clientes.
                </p>
            </div>
        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="{{ asset('image/orientacion.png') }}" alt="Icono de visión" loading="lazy">
            </div>
            <div class="icon-text">
                <h3>Visión</h3>
                <p>
                    Ser una importadora reconocida en Oruro y a nivel nacional por la calidad de nuestros productos, nuestros precios accesibles y nuestro compromiso con el crecimiento y la satisfacción de nuestros clientes.
                </p>
            </div>
        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="{{ asset('image/integridad.png') }}" alt="Icono de valores" loading="lazy">
            </div>
            <div class="icon-text">
                <h3>Valores</h3>
                <p>
                    En Importadora Gikar nos guiamos por la responsabilidad, honestidad, compromiso, respeto y calidad. Trabajamos para brindar una atención confiable, ofrecer productos que cumplan las expectativas de nuestros clientes y construir relaciones duraderas basadas en la confianza.
                </p>
            </div>
        </div>
    </section>

        <section class="contacto container" id="contacto">
        <div class="contacto-titulo">
            <h2>Contáctanos</h2>
            <p>
                ¿Buscas una herramienta o necesitas más información?
                Escríbenos y con gusto te atenderemos.
            </p>
        </div>

        <form class="formulario-contacto" action="{{ route('contacto.store') }}" method="post" novalidate>

            @csrf

            <div class="campo">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
            </div>

            <div class="campo">
                <label for="correo">Correo electrónico</label>
                <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
            </div>

            <div class="campo">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Ej. +591 11111111">
            </div>

            <div class="campo">
                <label for="asunto">Asunto</label>
                <select id="asunto" name="asunto" required>
                    <option value="">Selecciona un asunto</option>
                    <option value="consulta-producto">Consulta sobre un producto</option>
                    <option value="precios">Consulta de precios</option>
                    <option value="distribucion">Distribución y ventas</option>
                    <option value="otro">Otro</option>
                </select>
            </div>

            <div class="campo campo-mensaje">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu consulta aquí..." required></textarea>
            </div>

            <div id="mensaje-error" class="mensaje-error"></div>

            @if(session('success'))
                <div class="mensaje-error exito">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mensaje-error visible">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn-contacto">Enviar mensaje</button>
        </form>
    </section>

@endsection