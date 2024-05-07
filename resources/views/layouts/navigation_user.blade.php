<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class=" border mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-end h-16 ">


            <div class="login ">


                @if (auth()->user() == null)
                    <x-nav-link :href="route('login')" style="height:64px;">
                        {{ __('Iniciar sesión') }}
                    </x-nav-link>
                @else
                    @if (auth()->user()->role != 'user')

                        <form action="{{ route('user.update', auth()->user()->id) }}" id="entitychange"
                            style="margin: auto auto auto 0px; " method="POST">
                            @csrf
                            @method('PUT')
                            <select name="entity" id="entity" style="width: 200px;">
                                @foreach ($entities as $entity)
                                    <option value="{{ $entity->id }}"
                                        {{ $entity->id == auth()->user()->entity_id ? 'selected' : '' }}>
                                        {{ $entity->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    @endif
                    @foreach ($categories as $category)
                        @if (
                            ($category->number >= 9 && $category->number <= 12) ||
                                ($category->number > 12 && auth()->user()->role == 'superadmin'))
                            <div class="flex h-16 my-0" style="margin: 0px 10px">
                                <x-nav-link :href="route($category->controller . '.index')" :active="request()->routeIs($category->controller . '.index')">
                                    {{ __($category->name) }}
                                </x-nav-link>
                            </div>
                        @endif
                    @endforeach
                    <form class="flex p-0 nav-link h-16  " action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            {{ __('Cerrar sesión') }}
                        </button>
                    </form>
                @endif
            </div>

        </div>
    </div>



</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function() {

        $('#entity').change(function() {
            $('#entitychange').submit();
        });


        $("#entitychange").submit(function(e) {
            e.preventDefault();


            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,

                processData: false,
                contentType: false,
                success: function(response) {
                    swal.fire({
                        title: 'Entidad cambiada correctamente',
                        text: 'Ahora verás los datos de la entidad seleccionada',
                        icon: 'success',
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        window.location.reload();;
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
