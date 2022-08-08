<x-app-layout>
    <x-slot name=header>
        <x-header title="Blog de café con consejos y cursos" message="Aprende de los expertos con las mejores recetas">
        </x-header>
    </x-slot>

    {{-- Main
    =================================================================================== --}}
    <main class="blog">
        <section>
            <h3>Nuestro Blog</h3>
            <article class="article">
                <livewire:mostrar-articles>
            </article>
        </section>
    </main>
    <aside class="sidebar">
        <h3>Nuestro Cursos y Talleres</h3>
        <livewire:widget-cursos>
    </aside>
    {{-- ========== end main ========== --}}

</x-app-layout>
