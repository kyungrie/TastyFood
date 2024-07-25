    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <nav class="bg-transparent">
        <div class="m-20 px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 justify-between">
              <div class="flex-shrink-0">
                  <a href="/" class="text-white px-3 py-2 text-[2rem] font-bold">TASTY FOOD</a>
              </div>
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="/" class="rounded-md px-3 py-2 text-sm font-semibold hover:text-gray-900 hover:bg-gray-500 text-white">HOME</a>
                  <a href="/about" class="rounded-md px-3 py-2 text-sm font-semibold hover:text-gray-900 hover:bg-gray-500 text-white">TENTANG</a>
                  <a href="/news" class="rounded-md px-3 py-2 text-sm font-semibold hover:text-gray-900 hover:bg-gray-500 text-white">BERITA</a>
                  <a href="/gallery" class="rounded-md px-3 py-2 text-sm font-semibold hover:text-gray-900 hover:bg-gray-500 text-white">GALERI</a>
                  <a href="/contact" class="rounded-md px-3 py-2 text-sm font-semibold hover:text-gray-900 hover:bg-gray-500 text-white">KONTAK</a>
                </div>
              </div>
            </div>
        </div>
      </nav>
      <div class="flex flex-row justify-start pl-[8rem] items-center w-[100vw] h-[70vh] bg-cover -mt-[15rem]" style="background-image: url('{{ asset('images/group-70.png') }}')">
        {{ $slot }}
    </div>
