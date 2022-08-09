<x-app-layout>
    <x-slot name=header>
        <x-header title="Blog de café con consejos y cursos" message="Aprende de los expertos con las mejores recetas">
        </x-header>
    </x-slot>

    {{-- Main
    =================================================================================== --}}
    <div class="page-content">
        <main>
            <section class="article-section base-container">
                <h3 class="title-section">Tipos de Grano de Café</h3>
                <div class="article-section__img">
                    <img src="{{ asset('storage/img/blog1.jpg') }}" alt="Imagen de blog1">
                </div>
                <div class="article-section__description">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis
                        veniam
                        exercitationem animi at
                        quo et consectetur pariatur error molestiae, odit vero rem, quia numquam rerum iure quasi.
                        Dicta, excepturi culpa.</p>
                    <p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto
                        aleatorio. Tiene sus raices en una pieza clásica de la literatura del Latin, que data del
                        año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard
                        McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró
                        una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem
                        Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable. Lorem
                        Ipsum viene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malorum" (Los
                        Extremos del Bien y El Mal) por Cicero, escrito en el año 45 antes de Cristo. Este libro es
                        un tratado de teoría de éticas, muy popular durante el Renacimiento. La primera linea del
                        Lorem Ipsum, "Lorem ipsum dolor sit amet..", viene de una linea en la sección 1.10.32

                        El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para
                        aquellos interesados. Las secciones 1.10.32 y 1.10.33 de "de Finibus Bonorum et Malorum" por
                        Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en
                        Inglés de la traducción realizada en 1914 por H. Rackham.</p>
                    <p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió
                        alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que
                        no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar
                        seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los
                        generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos
                        predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en
                        la Internet. Usa un diccionario de mas de 200 palabras provenientes del latín, combinadas
                        con estructuras muy útiles de sentencias, para generar texto de Lorem Ipsum que parezca
                        razonable. Este Lorem Ipsum generado siempre estará libre de repeticiones, humor agregado o
                        palabras no características del lenguaje, etc.</p>
                </div>
            </section>
        </main>
    </div>
    {{-- ========== end main ========== --}}

</x-app-layout>
