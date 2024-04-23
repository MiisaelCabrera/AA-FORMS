<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class=" border mx-auto ">
        <div class="flex  p-0">

            <!-- Navigation Links -->

            @foreach ($categories as $category)
                <div class="flex h-16 mx-auto my-0">
                    <x-nav-link :href="route($category->controller . '.index')" :active="request()->routeIs($category->controller . '.index')">
                        {{ __($category->name) }}
                    </x-nav-link>
                </div>
            @endforeach
            <form class="flex mx-auto " action="{{ route('logout') }}" method="POST">

                @csrf

                <button class="nav-link h-16 m-0">
                    {{ __('Cerrar sesión') }}
                </button>
            </form>



        </div>
    </div>


</nav>
