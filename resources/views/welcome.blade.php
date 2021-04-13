<!DOCTYPE html>
<html>
<head>
	<title>TUGAS MKPL</title>
</head>
<body>
    <h1>Aplikasi ketersediaan buku perpustakaan</h1>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Judul buku</th>
        <th>Pengarang</th>
        <th>Tahun terbit</th>
        <th>Penerbit</th>
        <th>Stok tersedia</th>
    </tr>
    @foreach($db_all as $db)
    
    <tr>
      <td>{{$db->judul}}</td>
      <td>{{$db->pengarang}}</td>
      <td>{{$db->tahun}}</td>
      <td>{{$db->penerbit}}</td>
      <td>{{$db->stok}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>