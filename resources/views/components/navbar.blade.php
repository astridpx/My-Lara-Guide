<nav class="sticky top-0 z-20 flex items-center justify-between px-8 py-4 text-gray-300 bg-obsidian-black ">
    <section class="flex items-center space-x-4">

        <a href="/room" class="">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo" width="40">
        </a>

        <ul class="flex space-x-4 font-semibold">
            <li>
                <a href="/notes/1">Home</a>
            </li>
            <li>
                <a href="/notes">Room</a>
            </li>
            <li>
                <a href="/notes/create">Create</a>
            </li>
        </ul>
    </section>

    <!-- Settings Dropdown -->
    <div class="hidden sm:flex sm:items-center sm:ms-6 ">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">

                <button
                    class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-300 transition duration-150 ease-in-out border border-transparent rounded-md hover:text-gray-400 focus:outline-none">
                    {{-- <div>{{ Auth::user()->name }}</div> --}}
                    <div>Joe</div>

                    <div class="ms-1">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                {{-- <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link> --}}

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>

</nav>
