<x-header></x-header>
<x-navbar></x-navbar>
<form action="/admin/news/create" method="post">
    {{ csrf_field() }}
    Nama <input type="text" name="title" required="required"> <br />
    Jabatan <input type="text" name="picture" required="required"> <br />
    Alamat
    <textarea name="newscontent" required="required"></textarea> <br />
    <input type="submit" value="submit">
</form>
<x-footer></x-footer>
