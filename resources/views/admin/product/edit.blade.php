@extends('layouts.admin.app')

@section('content')
<div class="row mt-4 text-center">
  <h2>Edit Produk</h2>
</div>
<div class="row text-end mt-4">
  <div class="col-md-8">
    <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama Produk</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" required autofocus>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
          <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" value="{{ old('desc', $product->desc) }}" required>
          @error('desc')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
          <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}" required>
          @error('price')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <div class="d-grid gap-2" class="col-sm-2 col-form-label">
          <button type="submit" class="btn btn-primary">Edit Data</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection