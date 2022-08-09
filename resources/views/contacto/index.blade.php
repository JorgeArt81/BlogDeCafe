<x-app-layout>
    <x-slot name=header>
        <x-header title="Blog de café con consejos y cursos" message="Aprende de los expertos con las mejores recetas">
        </x-header>
    </x-slot>

    {{-- Main
    =================================================================================== --}}
    <main class="page-content">
        <section class="base-container">
            <h3 class="title-section">Contacto</h3>
            <div class="contact-bg"></div>
            <livewire:contacto-from />
        </section>
    </main>
    {{-- ========== end main ========== --}}

</x-app-layout>
