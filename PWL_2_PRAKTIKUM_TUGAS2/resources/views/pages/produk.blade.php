@extends('layout.template')

@section('content')
    <div class="container mt-3">
        <h1>Produk Kami</h1>
        <div class="card p-3">


            <div class="mb-2"> 
                <button class="btn btn-primary btn-sm">Tambah Produk</button>
            </div>
           
           <table class="table table-hover table-bordered table-striped ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laptop Acer Swift Go 14</td>
      <td>13.349.000</td>
      <td>12</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>

  </tbody>
</table>
        </div>
    </div>
@endsection