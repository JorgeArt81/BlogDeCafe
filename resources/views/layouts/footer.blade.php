<footer class="footer">
    <div class="base-container footer__container">
        <x-aplication-logo></x-aplication-logo>
        {{-- <p>{{ now()->year }}</p> --}}
        <div class="nav__menu">
            <x-nav-link :href="route('nosotros.index')" :active="request()->routeIs('nosotros.index')">{{ __('Nosotros') }}</x-nav-link>
            <x-nav-link :href="route('cursos.index')" :active="request()->routeIs('cursos.index')">{{ __('Cursos') }}</x-nav-link>
            <x-nav-link :href="route('contacto.index')" :active="request()->routeIs('contacto.index')">{{ __('Contacto') }}</x-nav-link>
        </div>
    </div>
</footer>
