@extends('layouts.admin.app')

@section('content')
<div class="row mt-4 text-center">
  <h2>Pembelian</h2>
</div>
<div class="row">
  <div class="col-sm-12">
    @include('components.alert')
  </div>
  <table class="table" id="table1">
    <thead>
      <tr>
        <th>No. </th>
        <th>Nama</th>
        <th>Nama Produk</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>total</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($orders as $row)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $row->user->name }}</td>
        <td>{{ $row->product->name }}</td>
        <td>{{ $row->date }}</td>
        <td>{{ $row->quantity }}</td>
        <td>Rp. {{ number_format($row->total, 0, 0, '.') }}</td>
      </tr>
      @empty
      <tr class="text-center">
        <td colspan="6">No order found.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection