@if($permission)
<button 
    class="nav-btn {{ $class }} {{ $isActive() ? 'active' : '' }}"
    data-url="{{ $url }}"
    onclick="cargarVista(event, '{{ $url }}')"
>

    @if($icon)
        <span class="icon">{!! $icon !!}</span>
    @endif

    {{ $label }}
</button>
@endif