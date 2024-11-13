<x-header></x-header>
<x-navbar title="TABLE KONTAK" />

<section class="px-3 md:px-20 md:py-20">
    <a class="px-10 py-3 text-white bg-red-700 rounded-full" href="/admin"> <-- Back </a>
    <div class="flex justify-between py-2">
        <h1 class="text-[2rem] font-bold">Tabel Kontak</h1>
        <a class="px-3 py-3 bg-green-600 rounded-full" href="/contact">+ Tambah Data</a>
    </div>
    <table class="text-sm text-center border border-black table-auto md:table-fixed md:text-xl md:w-full border-3">
        <div class="m-2">
            {{ $index->links() }}
        </div>
        <thead class="bg-emerald-700">
            <th class="px-4 py-2 border border-black">no</th>
            <th class="px-4 py-2 border border-black">subjek</th>
            <th class="px-4 py-2 border border-black">name</th>
            <th class="px-4 py-2 border border-black">email</th>
            <th class="px-4 py-2 border border-black">message</th>
            <th class="px-4 py-2 border border-black">action</th>
        </thead>
        @foreach ($index as $c)
            <tbody>
                <td class="border border-black">{{ $c->id }}</td>
                <td class="border border-black">{{ $c->subject }}</td>
                <td class="border border-black">{{ $c->name }}</td>
                <td class="border border-black">{{ $c->email }}</td>
                <td class="border border-black">{{Str::limit($c->message, 20) }}</td>
                <td class="py-2 border border-black">
                    <a class="px-5 py-1 bg-red-600 rounded-xl"
                        href="/admin/contact/delete/{{ $c->id }}" onclick="return confirm('Are you sure want to delete this item?')">Delete</a>
                </td>
            </tbody>
        @endforeach
    </table>
    @if (session('success'))
    <div class="flex items-center px-4 py-3 text-sm font-bold text-white bg-blue-500" role="alert">
        <svg class="mr-2 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
        {{ session('success') }}
      </div>
    @endif
    <div class="m-2">
        {{ $index->links() }}
    </div>
</section>

<x-footer></x-footer>
