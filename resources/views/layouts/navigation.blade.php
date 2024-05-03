<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class=" border mx-auto ">
        <div class="flex  p-0 h-16">

            <!-- Navigation Links -->

            @foreach ($categories as $category)
                @if ($category->number < 9)
                    <div class="flex h-16 mx-auto my-0">
                        <x-nav-link :href="route($category->controller . '.index')" :active="request()->routeIs($category->controller . '.index')">
                            {{ __($category->name) }}
                        </x-nav-link>
                    </div>
                @endif
            @endforeach

            <!--<form action="{{route('formCompleted.store')}}" id="send" class="flex p-0 nav-link h-16 mx-auto " method="POST"  >
                @csrf
                <button>Envíar todo</button>
            </form>-->




        </div>
    </div>


</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
    $('#send').submit(function(e) {
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, envíalo!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    success: function(response) {
                        Swal.fire({
                            title: '¡Enviado!',
                            text: response.message,
                            icon: 'success'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    },
                    error: function(response) {
                        var errorMessage = response.responseJSON.message;
                        Swal.fire({
                            title: '¡Error!',
                            text: errorMessage,
                            icon: 'error'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    }
                });
            }
        });
    });
});
</script>