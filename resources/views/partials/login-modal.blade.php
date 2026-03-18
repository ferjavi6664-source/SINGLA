<div class="modal fade" id="loginModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content border-0 shadow-lg rounded-4">

<div class="modal-body p-5">

<div class="text-center mb-4">
<h4 class="fw-bold">Bienvenido a SIGEC</h4>
<p class="text-muted">Ingresa a tu panel de gestión</p>
</div>

<form method="POST" action="/login">
@csrf

<div class="form-floating mb-3">
<input type="email" name="email" class="form-control rounded-3" placeholder="Email">
<label>Correo electrónico</label>
</div>

<div class="form-floating mb-3">
<input type="password" name="password" class="form-control rounded-3" placeholder="Password">
<label>Contraseña</label>
</div>
<a href="/dashboard" class="btn btn-primary w-100 py-2 rounded-3 fw-bold">
Ingresar
</a>

</form>

<hr class="my-4">

<div class="text-center">
<small class="text-muted">SIGEC v1.0 · Plataforma segura</small>
</div>

</div>
</div>
</div>
</div>