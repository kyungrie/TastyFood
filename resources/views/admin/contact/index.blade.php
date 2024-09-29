<x-header></x-header>
<x-navbar title="TABLE KONTAK" />

<section class="px-3 md:px-20 md:py-20">
    <a class="px-10 py-3 text-white bg-red-700 rounded-full" href="/admin"> <-- Back </a>
    <div class="flex justify-between py-2">
        <h1 class="text-[2rem] font-bold">Tabel Kontak</h1>
        <a class="px-3 py-3 bg-green-600 rounded-full" href="/contact">+ Tambah Data</a>
    </div>
    <table class="text-sm text-center border border-black table-auto md:table-fixed md:text-xl md:w-full border-3">
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
</section>

<x-footer></x-footer>
