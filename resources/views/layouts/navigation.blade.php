<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class=" border mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <!-- Navigation Links -->

                @foreach ($categories as $category)
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route($category->controller . '.index')" :active="request()->routeIs($category->controller . '.index')">
                            {{ __($category->name) }}
                        </x-nav-link>
                    </div>
                @endforeach
                <form class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" action="{{ route('logout') }}" method="POST">

                    @csrf

                    <button>
                        {{ __('Cerrar sesión') }}
                    </button>
                </form>
            </div>



        </div>
    </div>


</nav>
