<x-header></x-header>
<x-navbar title="TABLE BERITA" />
<form class="flex flex-col gap-5 px-40 py-28" action="/admin/news" method="post" enctype="multipart/form-data">
    <a class="px-10 py-3 w-[8vw] text-white bg-red-700 rounded-full" href="/admin/news"> <-- Back </a>
    @method('PUT')
    @csrf
    <input type="hidden" name="id" value="{{ $news->id }}">
    <label for="">Title</label>
    @error('title')
    <div class="error">{{ $message }}</div>
    @enderror
    <input type="text" name="title" value="{{ $news->title }}"
        class="block px-2 py-1.5 w-full text-gray-600 rounded-md border-2 form-input placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    <label for="">News Picture</label>
    @error('picture')
    <div class="error">{{ $message }}</div>
    @enderror
    <input type="file" name="picture" value="{{ $news->picture }}"
        class="block px-2 py-1.5 w-full text-gray-600 rounded-md border-2 form-input placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    <label for="">News Content</label>
    @error('newscontent')
        <div class="error">{{ $message }}</div>
    @enderror
    <textarea class="block px-2 py-1.5 w-full text-gray-600 rounded-md border-2 form-input placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
        name="newscontent" required="required">{{ $news->newscontent }}</textarea>
    <input class="py-2 font-bold text-center text-white bg-green-700 rounded-xl" type="submit" value="SUBMIT">

    @if($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Terjadi kesalahan dalam pengisian data.',
            footer: '<ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>'
        });
    </script>
    @endif
</form>
<x-footer></x-footer>
