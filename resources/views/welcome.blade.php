@extends('layouts.landing')

@section('title','SIGEC v1.0')

@section('content')

<!-- HERO -->
<section class="hero text-center" id="hero">
    <div id="particles-js"></div>

    <div class="container">
        <h1 class="reveal">Sistema Inteligente de Gestión de Cumplidos</h1>
        <p class="reveal">Plataforma profesional para generadores de carga en Colombia.</p>
        <button class="btn btn-light btn-lg mt-4" data-bs-toggle="modal" data-bs-target="#loginModal">
            Iniciar sesión
        </button>
    </div>
    <div class="truck-glow"></div>
   <div class="truck-wrapper">
    <img src="{{ asset('imagenes/camion2.png') }}" class="truck-img" alt="Camión SIGEC">
</div>
</div>
</div>
</section>

<!-- BENEFICIOS -->
<section class="section text-center">
    <div class="container">
        <h2 class="mb-5">¿Por qué elegir SIGEC?</h2>
        <div class="row g-4">

            <div class="col-md-4" data-aos="fade-up">
                <div class="card card-premium p-4">
                    <i class="bi bi-speedometer2 fs-1 text-primary"></i>
                    <h5 class="mt-3">Gestión Rápida</h5>
                    <p>Administra cumplidos en segundos.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                <div class="card card-premium p-4">
                    <i class="bi bi-shield-lock fs-1 text-primary"></i>
                    <h5 class="mt-3">Seguridad Total</h5>
                    <p>Datos protegidos con estándares modernos.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card card-premium p-4">
                    <i class="bi bi-bar-chart fs-1 text-primary"></i>
                    <h5 class="mt-3">Reportes Inteligentes</h5>
                    <p>Visualiza información clave en tiempo real.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTADORES -->
<section class="section bg-light text-center">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="counter" data-target="2500">0</div>
                <p>Cumplidos Gestionados</p>
            </div>

            <div class="col-md-4">
                <div class="counter" data-target="180">0</div>
                <p>Empresas Registradas</p>
            </div>

            <div class="col-md-4">
                <div class="counter" data-target="98">0</div>
                <p>% Satisfacción</p>
            </div>

        </div>
    </div>
</section>

<!-- TESTIMONIOS -->
<section class="section text-center">
    <div class="container">
        <h2 class="mb-5">Testimonios</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card card-premium p-4">
                    <p>"SIGEC optimizó nuestra operación logística."</p>
                    <strong>— Empresa de Transporte</strong>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-premium p-4">
                    <p>"Interfaz moderna y muy fácil de usar."</p>
                    <strong>— Coordinador Logístico</strong>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-premium p-4">
                    <p>"Nos permitió reducir tiempos administrativos."</p>
                    <strong>— Generador de Carga</strong>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta text-center">
    <div class="container">
        <h2>Empieza a transformar tu gestión hoy</h2>
        <button class="btn btn-primary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#loginModal">
            Acceder a la plataforma
        </button>
    </div>
</section>

@endsection

@push('scripts')
<script>
/* CONTADOR ANIMADO */
const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / 200;

        if(count < target){
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 10);
        } else {
            counter.innerText = target;
        }
    };
    updateCount();
});
</script>
@endpush