<footer class="footer">
    <div class="base-container footer__container">
        <x-aplication-logo></x-aplication-logo>
        {{-- <p>{{ now()->year }}</p> --}}
        <div class="nav__menu">
            <x-nav-link>{{ __('Nosotros') }}</x-nav-link>
            <x-nav-link>{{ __('Cursos') }}</x-nav-link>
            <x-nav-link>{{ __('Contacto') }}</x-nav-link>
        </div>
    </div>
</footer>
