<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>

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

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Stock</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="stock" value="{{$db->stok}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  
    @csrf
  </form>

</body>
</html>