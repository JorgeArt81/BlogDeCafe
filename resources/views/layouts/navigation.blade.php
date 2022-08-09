<nav class="nav base-container">
    <a class="logo" href="{{ route('home.index') }}">
        <x-aplication-logo></x-aplication-logo>
    </a>
    <div class="nav__menu">
        <x-nav-link :href="route('nosotros.index')" :active="request()->routeIs('nosotros.index')">{{ __('Nosotros') }}</x-nav-link>
        <x-nav-link :href="route('cursos.index')" :active="request()->routeIs('cursos.index')">{{ __('Cursos') }}</x-nav-link>
        <x-nav-link :href="route('contacto.index')" :active="request()->routeIs('contacto.index')">{{ __('Contacto') }}</x-nav-link>
    </div>
</nav>
