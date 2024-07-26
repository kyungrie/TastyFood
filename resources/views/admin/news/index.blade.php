<x-header></x-header>
<x-navbar></x-navbar>
    <section class="px-20 py-20">
         <div class="flex justify-between">
            <h1 class="text-[2rem] font-bold">Tabel Berita</h1>
            <a class="px-3 py-3 bg-green-600 rounded-full" href="/admin/news/create">+ Tambah Data</a>
         </div>
        <table class="min-w-full text-center border border-black border-3">
            <thead>
                <th>no</th>
                <th>gambar</th>
                <th>judul</th>
                <th>isi berita</th>
                <th>action</th>
            </thead>
            @foreach ($index as $n )
            <tbody>
                <td>{{ $n->id }}</td>
                <td>{{ $n->picture }}</td>
                <td>{{ $n->title }}</td>
                <td>{{ $n->newscontent }}</td>
                <td>
                    <a href="/admin/news/edit{{ $n->id }}">Edit</a>
                    |
                    <a href="/admin/news/delete{{ $n->id }}">Delete</a>
                </td>
            </tbody>
            @endforeach
        </table>
    </section>
<x-footer></x-footer>
