{{-- Header --}} 
<nav class="flowbite-navbar bg-blue-400 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-blue-400 dark:border-gray-600">
    <div class="max-w-screen-xl mx-auto">
        <div class="flex items-center justify-between p-auto">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo-tupin.png" style="width: 120px;" alt="TuPin Logo">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" href="/admin">Login</a>
            </div>
            <div class="items-center hidden md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-auto md:p-0 mt-4 font-medium border border-blue-100 bg-blue-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-blue-400 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/" class="block py-auto px-3 @if(request()->is('/')) text-blue-700 font-bold @else  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/services" class="block py-auto px-3 @if(request()->is('services')) text-blue-700 font-bold @else  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif">Services</a>
                    </li>
                    <li>
                        <a href="/about" class="block py-auto px-3 @if(request()->is('about')) text-blue-700 font-bold @else  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
{{-- End Header --}}
