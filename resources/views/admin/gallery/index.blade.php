<x-header></x-header>
<x-navbar title="TABLE GALERI" />


<section class="px-20 py-20">
    <a class="px-10 py-3 text-white bg-red-700 rounded-full" href="/admin"> <-- Back </a>
    <div class="flex justify-between py-2">
        <h1 class="text-[2rem] font-bold">Tabel Galeri</h1>
        <a class="px-3 py-3 bg-green-600 rounded-full" href="/admin/gallery/create">+ Tambah Data</a>
    </div>
    <table class="w-full text-center border border-black table-auto border-3">
        <thead class="bg-emerald-700">
            <th class="px-4 py-2 border border-black">no</th>
            <th class="px-4 py-2 border border-black">gambar</th>
            <th class="px-4 py-2 border border-black">judul</th>
            <th class="px-4 py-2 border border-black">action</th>
        </thead>
        @foreach ($index as $g)
            <tbody>
                <td class="border border-black">{{ $g->id }}</td>
                <td class="flex justify-center border border-black"><img class="max-w-60"
                        src="{{ asset('gallery-picture/' . $g->picture) }}"></td>
                <td class="border border-black">{{ $g->title }}</td>
                <td class="border border-black">
                    <a class="px-5 py-1 text-xl bg-yellow-400 rounded-xl"
                        href="/admin/gallery/edit?id={{ $g->id }}">Update</a>
                    <br>
                    <br>
                    <a class="px-5 py-1 text-xl bg-red-600 rounded-xl"
                        href="/admin/gallery/delete/{{ $g->id }}" onclick="return confirm('Are you sure want to delete this item?')">Delete</a>
                </td>
            </tbody>
        @endforeach
        <div class="m-2">
            {{ $index->links() }}
        </div>
    </table>
</section>
<x-footer></x-footer>
