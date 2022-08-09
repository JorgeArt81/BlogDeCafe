    <form action="" class="form">
        <div class="form__field">
            <x-label for="nombre" :value="__('Nombre')" />
            <input id="nombre" type="text" name="nombre" class="form-input" placeholder="Tu nombre">
        </div>
        <div class="form__field">
            <x-label for="email" :value="__('Email')" />
            <input id="email" type="email" name="email" class="form-input" placeholder="Tu email">
        </div>
        <div class="form__field">
            <x-label for="mensaje" :value="__('Mensaje')" />
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button class="btn-link">Enviar</button>
        </div>

    </form>
