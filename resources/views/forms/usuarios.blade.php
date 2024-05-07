@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])
    <form action="{{ route('usersUpload.store') }}" id="cuestionario" class="cuestionario" method="POST">
        @csrf
        <div class="question-block">

            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="question-block">

            <label for="email">Correo institucional</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="question-block">

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="question-block">

            <label for="password">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <div class="question-block">

            <label for="role">Rol</label>
            <select name="role" id="role" required>
                <option value="superadmin">Superadministrador</option>
                <option value="admin">Administrador</option>
                <option value="user">Capturista</option>
            </select>
        </div>
        <div class="question-block">

            <label for="entity">Entidad</label>
            <select name="entity" id="entity" required>
                @foreach ($entities as $entity)
                    <option value="{{ $entity->id }}">{{ $entity->name }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="submit">Registrar</button>

    </form>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function() {


        $("#cuestionario").submit(function(e) {

            e.preventDefault();
            $('input').prop('disabled', false);
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,

                processData: false,
                contentType: false,
                success: function(response) {
                    swal.fire({
                        title: '¡Guardado!',
                        text: 'Se ha guardado la información',
                        icon: 'success',
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        window.location.href =
                            "{{ route('usersUpload.index') }}";
                    });
                },
                error: function(response) {
                    var message = response.responseJSON.message;
                    swal.fire({
                        title: '¡Error!',
                        text: message,
                        icon: 'error',
                        confirmButtonText: 'Aceptar'
                    });
                },
            });

        });

    })
</script>
