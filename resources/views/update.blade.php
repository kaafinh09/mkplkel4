<!DOCTYPE html>
<html>
<head>
	<title>Update </title>
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
<h2 class="text-center"> Update Data </h2> <hr>
<form action="../update" method="post" >
<input type="hidden" value="{{$db->id}}" name = "id">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Judul</label>
      <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$db->judul}}">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Pengarang</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="pengarang" value="{{$db->pengarang}}">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tahun</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="tahun" value="{{$db->tahun}}">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Penerbit</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="penerbit" value="{{$db->penerbit}}">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
  
    @csrf
  </form>

</body>
</html>