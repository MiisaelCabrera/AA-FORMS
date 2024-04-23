<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class=" border mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">


            <div class="login">


                <x-nav-link :href="route('login')">
                    {{ __('Iniciar sesión') }}
                </x-nav-link>
            </div>

        </div>
    </div>



</nav>
