@extends('layouts.admin.app')

@section('content')
<div class="row mt-4 text-center">
  <h2>Produk</h2>
</div>
<div class="row">
  <div class="col-sm-12">
    @include('components.alert')
  </div>
  <div class="col-sm-12">
    <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary"><i class="bi bi-plus-square"></i>
      Tambah
      Produk</a>
  </div>
</div>
<div class="row mt-2">
  <table class="table" id="table1">
    <thead>
      <tr>
        <th>No. </th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $row)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->desc }}</td>
        <td>Rp. {{ number_format($row->price, 0, 0, '.') }}</td>
        <td>
          <a href="{{ route('admin.product.edit', $row->id) }}" class="btn btn-success">Ubah</a>
          <form action="{{ route('admin.product.destroy', $row->id) }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i
                class="bi bi-trash"></i>
              Hapus</button>
          </form>
        </td>
      </tr>
      @empty
      <tr class="text-center">
        <td colspan="6">No product found.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection