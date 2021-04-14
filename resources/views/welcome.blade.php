<!DOCTYPE html>
<html>
<head>
	<title>TUGAS MKPL</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <style type="text/css">
    
    body {

      margin:5%;
    }

  </style>
</head>

<body>
    <h2 class="text-center">Aplikasi ketersediaan buku perpustakaan</h2>
    <hr>

<table class="table mt-4" border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Judul buku</th>
        <th>Pengarang</th>
        <th>Tahun terbit</th>
        <th>Penerbit</th>
        <th>Stok tersedia</th>
        <th>Action</th>
    </tr>
    @foreach($db_all as $db)
    
    <tr>
      <td>{{$db->judul}}</td>
      <td>{{$db->pengarang}}</td>
      <td>{{$db->tahun}}</td>
      <td>{{$db->penerbit}}</td>
      <td>{{$db->stok}}</td>
      <td>
          <a href="detail/{{$db->id}}"><button class="btn btn-secondary">Update</button></a>
          <a href="delete/{{$db->id}}"><button class="btn btn-danger">Delete</button></a>
          
        </td>
    </tr>
    @endforeach
</table>

<a href="create"><button class="btn btn-primary"> Tambah Data &rarr; </button></a>

</body>
</html>