<x-header></x-header>
<x-navbar title="TABLE GALERI" />


<section class="px-20 py-20">
    <a class="px-10 py-3 text-white bg-red-700 rounded-full" href="/admin"> <-- Back </a>
    <div class="flex justify-between py-2">
        <h1 class="text-[2rem] font-bold">Tabel Galeri</h1>
        <a class="px-3 py-3 bg-green-600 rounded-full" href="/admin/gallery/create">+ Tambah Data</a>
    </div>
    <table class="w-full text-center border border-black table-auto border-3">
        <div class="m-2">
            {{ $index->links() }}
        </div>
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
                    <a class="px-5 py-1 text-xl bg-red-600 rounded-xl" role="button" onclick="deleteConfirmation(event,'/admin/gallery/delete/{{ $g->id }}')">Delete</a>
                </td>
            </tbody>
        @endforeach
    </table>
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session("success") }}',
            showConfirmButton:false,
            timer:1500
        });
    </script>
    @endif
    <script>
        function deleteConfirmation(event, url) {
            event.preventDefault();

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        }
    </script>
    <div class="m-2">
        {{ $index->links() }}
    </div>
</section>
<x-footer></x-footer>
