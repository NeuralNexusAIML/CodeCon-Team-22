<header class="header bg-white text-gray-800 py-1">
    <div class="container mx-auto px-4 flex justify-between items-center h-20">
        <img src="logo-no-background.svg" alt="Fundtasia Logo" class="w-48 py-1 px-1">
        <nav class="hidden md:block">
            <ul class="flex flex-row justify-between mx-auto max-width-250">
                <li class="px-4 py-2 rounded-md text-gray bg-white-700">
                    <a href="#causes">Causes</a>
                </li>
                <li class="px-4 py-2 rounded-md text-gray bg-white-700">
                    <a href="#about">About Us</a>
                </li>
                <li class="px-4 py-2 rounded-md text-gray bg-white-700">
                    <a href="#contact">Contact Us</a>
                </li>
            </ul>
        </nav>
        <!-- Mobile Menu -->
        <div class="md:hidden">
            <button class="text-gray-800 focus:outline-none" id="mobile-menu-button"
                    style="align-self: center;">
                <span class="sr-only align-items:center">Toggle Menu</span>
                <svg class="h-8 w-8" viewBox="0 0 24 24">
                    <path
                        d="M4 6h16M4 12h16M4 18h16"
                        stroke="currentColor"
                        stroke-width="2"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu Content -->
    <nav class="mobile-menu hidden">
        <ul class="flex flex-col space-y-4 mt-4 mx-auto max-width-250 flex-direction: column-reverse justify:center">
            <li><a class="text-gray-800 text-align:center" href="#causes">Causes</a></li>
            <li><a class="text-gray-800 text-align:center" href="#about">About Us</a></li>
            <li><a class="text-gray-800 text-align:center" href="#contact">Contact Us</a></li>
        </ul>
    </nav>


</header>
