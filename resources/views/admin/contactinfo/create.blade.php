<x-header></x-header>
<x-navbar title="TABLE KONTAK INFO" />
<form class="flex flex-col gap-5 px-40 py-28" action="/admin/contactinfo/insert" method="post" enctype="multipart/form-data">
    <a class="px-10 py-3 w-[8vw] text-white bg-red-700 rounded-full" href="/admin/contactinfo"> <-- Back </a>
    @csrf
    <label for="">Email</label>
    <input type="email" name="email"
        class="block px-2 py-1.5 w-full text-gray-600 rounded-md border-2 form-input placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    <label for="">Telephone Number</label>
    <input type="text" name="telephone"
    class="block px-2 py-1.5 w-full text-gray-600 rounded-md border-2 form-input placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    <label for="">Location</label>
    <input type="text" name="location"
        class="block px-2 py-1.5 w-full text-gray-600 rounded-md border-2 form-input placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    <input class="py-2 font-bold text-center text-white bg-green-700 rounded-xl" type="submit" value="SUBMIT">
</form>
<x-footer></x-footer>
