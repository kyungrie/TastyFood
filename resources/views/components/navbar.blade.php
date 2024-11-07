<nav id="navbar"
    class="flex flex-row gap-10 justify-between items-center px-5 py-4 md:justify-between md:py-8 md:px-20">
    <h1 class="text-2xl font-bold text-white md:text-4xl">TASTY FOOD</h1>
    <ul id="nav-menu"
        class="text-sm flex flex-col px-5 py-10 md:p-0 md:flex-row justify-center items-center gap-8 absolute top-0 left-0 md:static w-full md:w-[unset] transition-all duration-300 translate-y-[-100%] md:transform-none">
        <li><a class="text-xl font-semibold text-white md:px-3 md:py-2 md:rounded-md md:hover:text-white md:hover:bg-gray-500" href="/">HOME</a></li>
        <li><a class="text-xl font-semibold text-white md:px-3 md:py-2 md:rounded-md md:hover:text-white md:hover:bg-gray-500" href="/about">TENTANG</a></li>
        <li><a class="text-xl font-semibold text-white md:px-3 md:py-2 md:rounded-md md:hover:text-white md:hover:bg-gray-500" href="/news">BERITA</a></li>
        <li><a class="text-xl font-semibold text-white md:px-3 md:py-2 md:rounded-md md:hover:text-white md:hover:bg-gray-500" href="/gallery">GALERI</a></li>
        <li><a class="text-xl font-semibold text-white md:px-3 md:py-2 md:rounded-md md:hover:text-white md:hover:bg-gray-500" href="/contact">KONTAK</a></li>
        @if (Auth::check())
            @if (Auth::user()->type == 'admin')
                <li><a class="text-xl font-semibold text-white md:px-3 md:py-2 md:rounded-md md:hover:text-white md:hover:bg-gray-500" href="/admin">DASHBOARD ({{ Auth::user()->name }})</a></li>
            @endif
            <li><a class="text-xl font-semibold text-white md:px-3 md:py-2 md:rounded-md md:hover:text-white md:hover:bg-gray-500" href="/logout">LOGOUT</a></li>
        @else
            <li><a class="text-xl font-semibold text-white md:px-3 md:py-2 md:rounded-md md:hover:text-white md:hover:bg-gray-500" href="/login">LOGIN</a></li>
        @endif
    </ul>
    <div id="toggle-nav-button"
        class="flex z-50 flex-col justify-around items-center w-10 h-8 rounded-lg cursor-pointer md:hidden">
        <span class="w-8 h-1.5 bg-white rounded-full transition-all duration-300"></span>
        <span class="w-8 h-1.5 bg-white rounded-full transition-all duration-300"></span>
        <span class="w-8 h-1.5 bg-white rounded-full transition-all duration-300"></span>
    </div>
    <div id="scroll-to-top-button"
        class="hidden fixed right-5 bottom-5 z-50 justify-center items-center bg-black rounded-full cursor-pointer size-10 md:size-16">
        <span class="w-full h-1 bg-white rounded-full origin-top-left -rotate-45 translate-x-1/4 translate-y-2"></span>
        <span class="w-full h-1 bg-white rounded-full origin-top-right rotate-45 -translate-x-1/4 translate-y-2"></span>
    </div>
    <script>
        const toggleNavButton = document.getElementById("toggle-nav-button")
        const navMenu = document.getElementById("nav-menu")
        let isOpen = false

        toggleNavButton.onclick = () => {
            if (window.matchMedia('screen and (max-width: 768px)').matches) {
                isOpen = !isOpen
                if (isOpen) {
                    navMenu.classList.add("--state-open")
                    toggleNavButton.classList.add("--state-open")
                } else {
                    navMenu.classList.remove("--state-open")
                    toggleNavButton.classList.remove("--state-open")
                }
            }
        }

        if (window.matchMedia('screen and (max-width: 768px)').matches) {
            navMenu.classList.add("w-full")
        } else {
            navMenu.classList.remove("--state-open")
            toggleNavButton.classList.remove("--state-open")
        }

        const scrollToTopButton = document.getElementById("scroll-to-top-button")
        scrollToTopButton.onclick = () => {
            window.scrollTo(0, 0)
        }
        document.onscroll = () => {
            if (window.scrollY > window.innerHeight / 4) {
                scrollToTopButton.style.display = "flex"
            } else {
                scrollToTopButton.style.display = "none"
            }
        }
    </script>
</nav>
<div
    class="flex flex-row justify-start items-center px-5 py-20 md:p-20 w-[100vw] h-[50vh] md:h-[80vh] -mt-[4rem] md:-mt-[10rem] bg-cover" style="background-image: url('{{ asset('images/Group 70.png') }}')">
    <h1 class="font-extrabold text-white text-[4rem]">{{ $title}}</h1>
</div>
