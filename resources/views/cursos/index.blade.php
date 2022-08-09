<x-app-layout>
    <x-slot name=header>
        <x-header title="Blog de café con consejos y cursos" message="Aprende de los expertos con las mejores recetas">
        </x-header>
    </x-slot>

    {{-- Main
    =================================================================================== --}}
    <div class="page-content base-container">
        <main>
            <section class="base-container">
                <h3 class="title-section">Nuestros Próximos Cursos y Talleres</h3>
                <div class="courses">
                    <livewire:cursos-info />
                </div>
            </section>
        </main>
    </div>
    {{-- ========== end main ========== --}}

</x-app-layout>
