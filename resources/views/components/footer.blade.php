<footer class="bg-[#121212]">
    <div class="p-4 py-6 mx-auto w-full max-w-screen-xl lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center px-3 py-2 text-xl font-bold text-white">TASTY FOOD</a>
                <p class="text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Possimus recusandae consequatur nam, aliquam in vero est, <br>
                    corrupti quaerat, illum voluptatem modi sunt earum a maiores!</p> <br>
                <img src="{{ asset('images/001-facebook.png') }}" class="size-[2rem]" alt="Facebook-icon"> <img
                    src="{{ asset('images/002-twitter.png') }}" class="size-[2rem] relative -top-8 left-10"
                    alt="Twitter-icon">
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Usefull Links</h2>
                    <ul class="font-medium text-white">
                        <li class="mb-4">
                            <a href="/blog" class="hover:text-blue-500">Blog</a>
                        </li>
                        <li>
                            <a href="/animals" class="hover:text-blue-500">Hewan</a>
                        </li>
                        <br>
                        <li>
                            <a href="/gallery" class="hover:text-blue-500">Galeri</a>
                        </li>
                        <br>
                        <li>
                            <a href="/testimonial" class="hover:text-blue-500">Testimonial</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Privacy</h2>
                    <ul class="font-medium text-white">
                        <li class="mb-4">
                            <a href="/career" class="hover:text-blue-500">Karir</a>
                        </li>
                        <li>
                            <a href="/about" class="hover:text-blue-500">Tentang Kami</a>
                        </li>
                        <br>
                        <li>
                            <a href="/contact" class="hover:text-blue-500">Kontak Kami</a>
                        </li>
                        <br>
                        <li>
                            <a href="/services" class="hover:text-blue-500">Servis</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Contact Info</h2>
                    <ul class="font-medium text-white">
                        <li class="mb-4">
                            <p class="relative -top-4 left-6 hover:text-blue-500"><img
                                    src="{{ asset('images/ic_markunread_24px.png') }}"
                                    class="relative top-5 right-6 h-full size-3" alt="Email-Icon">tastyfood@gmail.com
                            </p>
                        </li>
                        <li>
                            <p class="relative -top-6 left-6 hover:text-blue-500"><img
                                    src="{{ asset('images/ic_call_24px.png') }}"
                                    class="relative top-4 right-6 h-full size-3" alt="Phone-Icon">+62 812 3456 7890</p>
                        </li>
                        <br>
                        <li>
                            <p class="relative left-6 -top-9 hover:text-blue-500"><img
                                    src="{{ asset('images/ic_place_24px.png') }}"
                                    class="relative top-5 right-6 h-full size-3" alt="Place-Icon">
                                    CyberLabs
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-24">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">Copyright ©2023 All Rights Reserved.
            </span>
        </div>
    </div>
    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</footer>
</body>

</html>
