@extends('layouts.app')
@section('css-drying')
    <link rel="stylesheet" href="{{ asset('css/drying.css')}}" >
@endsection
@section('content')
<div class="form">
  <div class="container-content">
      <div class="content-header">
        <h2>LIST PENJEMURAN</h2>
      </div>
      <table>
        <tr>
            <th>Id</th>
            <th>Kode Penerimaan</th>
            <th>Nama Gabah</th>
            <th>Total Berat</th>
            <th>Total Bayar</th>
            <th>Tanggal Data</th>
            <th>Action</th>
        </tr>
        <tbody id="list-data">
          {{-- content --}}
        </tbody>
      </table>
    </div>
</div>
</div>  

<script src="{{ asset('js/Detail.js') }}"></script> 
@endsection
        
