@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])

    @foreach ($files as $file)
        @php
            $entity = $entities->where('id', $file->entity_id)->first();
            $filename = explode('/', $file->path);
            $url = 'storage/' . $file->path;

        @endphp
        <div class="history-card">
            <div>
                <h3>{{ $entity->name . ': ' . end($filename) }}</h3>
                <a href="{{ asset($url) }}" target="_blank">{{ 'Descargar ' . end($filename) }}</a>
            </div>
            <div class="history-card__date">
                {{ $file->created_at }}
            </div>
            @if (auth()->user()->role == 'superadmin')
                <form action="{{ route('history.destroy', $file->id) }}" id="delete">
                    @csrf
                    @method('DELETE')
                    <button class="submit">x</button>
                </form>
            @endif
        </div>
    @endforeach
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('#delete').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, borrarlo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        success: function(response) {
                            var message = response.message;
                            Swal.fire({
                                title: '¡Borrado!',
                                text: message,
                                icon: 'success'
                            }).then(
                                (result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                }
                            )
                        },
                        error: function(response) {
                            var message = response.responseJSON.message;
                            Swal.fire({
                                title: '¡Error!',
                                text: message,
                                icon: 'error'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        }

                    })
                }
            })
        });
    });
</script>
