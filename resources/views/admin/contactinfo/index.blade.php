<x-header />
<x-navbar title="TABLE KONTAK INFO" />

<section class="px-3 md:px-20 md:py-20">
    <a class="px-10 py-3 text-white bg-red-700 rounded-full" href="/admin"> <-- Back </a>
    <div class="flex justify-between py-2">
        <h1 class="text-[2rem] font-bold">Tabel Kontak Info</h1>
        <a class="px-3 py-3 bg-green-600 rounded-full" href="/admin/contactinfo/create">+ Tambah Data</a>
    </div>
    <table class="text-sm text-center border border-black table-auto md:table-fixed md:text-xl md:w-full border-3">
        <thead class="bg-emerald-700">
            <th class="px-4 py-2 border border-black">email</th>
            <th class="px-4 py-2 border border-black">telephone number</th>
            <th class="px-4 py-2 border border-black">location</th>
            <th class="px-4 py-2 border border-black">action</th>
        </thead>
        @foreach ($index as $c)
            <tbody>
                <td class="border border-black">{{ $c->email }}</td>
                <td class="border border-black">{{ $c->telephone }}</td>
                <td class="border border-black">{{ $c->location }}</td>
                <td class="py-2 border border-black">
                    <a class="px-5 py-1 bg-yellow-400 rounded-xl"
                    href="/admin/contactinfo/edit?id={{ $c->id }}">Update</a>
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
</section>

<x-footer />
