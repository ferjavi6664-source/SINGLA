<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">



<script>
document.addEventListener("DOMContentLoaded", function () {

    const hero = document.getElementById("hero");
    const truck = document.querySelector(".truck-img");

    if (!hero || !truck) return;

    hero.addEventListener("mousemove", (e) => {

        const rect = hero.getBoundingClientRect();
        const x = (rect.width / 2 - (e.clientX - rect.left)) / 40;
        const y = (rect.height / 2 - (e.clientY - rect.top)) / 40;

        truck.style.transform = `
            translateY(-10px)
            rotateY(${x}deg)
            rotateX(${-y}deg)
        `;
    });

    hero.addEventListener("mouseleave", () => {
        truck.style.transform = "translateY(0px) rotateY(0deg) rotateX(0deg)";
    });

});
</script>
<script>
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar-custom");
    if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});
</script>



<style>
body { font-family:'Segoe UI',sans-serif; overflow-x:hidden; }

.hero {
    position: relative;
    height: 100vh;
    background: linear-gradient(
        135deg,
        #0a1931 0%,
        #0d3b8e 40%,
        #1f6feb 100%
    );
    color: white;
    display: flex;
    align-items: center;
    overflow: hidden;
}

#hero {
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    position: relative;
    overflow: hidden;
}

.reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}


.float-truck{
    animation: floatTruck 4s ease-in-out infinite;
}

/* Contenedor del camión */
.truck-wrapper {
    position: relative;
    z-index: 2;
}

/* Imagen del camión */
.truck-img {
    max-width: 100%;
    transition: transform 0.3s ease;
    will-change: transform;
    filter: drop-shadow(0 25px 40px rgba(0,0,0,0.3));
}

/* Glow azul premium */
.truck-glow {
    position: absolute;
    right: 10%;
    top: 50%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(0,140,255,0.6) 0%, rgba(0,140,255,0.2) 40%, transparent 70%);
    filter: blur(80px);
    transform: translateY(-50%);
    z-index: 1;
    animation: glowPulse 4s ease-in-out infinite;
}

@keyframes glowPulse {
    0% { opacity: 0.6; }
    50% { opacity: 1; }
    100% { opacity: 0.6; }
}


/* Cuando paso el mouse */
.truck-wrapper:hover .truck-img {
    transform: rotateY(8deg) rotateX(5deg) scale(1.05);
}

@keyframes floatTruck{
    0% { transform: translateY(0px); }
    50% { transform: translateY(-15px); }
    100% { transform: translateY(0px); }
}

.navbar-glass{
    background: transparent;
    transition: .3s;
}

.navbar-scrolled{
    background: rgba(15,32,39,0.95);
    backdrop-filter: blur(10px);
}

.section { padding:90px 0; }

.card-premium{
    border:none;
    border-radius:15px;
    transition:.3s;
}
.card-premium:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.counter{ font-size:2.5rem;font-weight:bold;color:#0d6efd;}

.cta{
    background:#0a1931;
    color:white;
    padding:80px 0;
}

footer{
    background:#111;
    color:#aaa;
    padding:20px 0;
}
#particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 0;
}

.hero .container {
    position: relative;
    z-index: 2;
}
</style>

@stack('styles')


</head>
<body>

@include('partials.navbar2')

@yield('content')

@include('partials.footer')
@include('partials.login-modal')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

@push('scripts')
<script>
AOS.init();

/* partículas */
particlesJS("particles-js", {
  particles: {
    number: { value: 70 },
    size: { value: 3 },
    color: { value: "#ffffff" },
    line_linked: { enable: true, distance: 150, color: "#ffffff", opacity: 0.2 },
    move: { enable: true, speed: 2 }
  }
});
window.addEventListener("scroll", function(){
    const navbar = document.querySelector(".navbar");
    if(window.scrollY > 50){
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});
const truck = document.querySelector(".float-truck");

document.addEventListener("mousemove", function(e){
    const x = (window.innerWidth / 2 - e.pageX) / 40;
    const y = (window.innerHeight / 2 - e.pageY) / 40;

    truck.style.transform = `translateY(-10px) translate(${x}px, ${y}px)`;
});

</script>
<script>
const reveals = document.querySelectorAll(".reveal");

window.addEventListener("scroll", () => {
    reveals.forEach((el) => {
        const windowHeight = window.innerHeight;
        const elementTop = el.getBoundingClientRect().top;

        if (elementTop < windowHeight - 100) {
            el.classList.add("active");
        }
    });
});
</script>
@endpush

@stack('scripts')

</body>
</html>