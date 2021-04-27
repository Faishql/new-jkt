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
            <th>Berat Kotor</th>
            <th>Total Potongan</th>
            <th>Total pot zak</th>
            <th>Total Berat</th>
            <th>Total Bayar</th>
            <th>Tanggal Data</th>
        </tr>
        <tr>
            <td>1</td>
            <td>0001</td>
            <td>LK1001</td>
            <td>6Kg</td>
            <td>1%</td>
            <td>2%</td>
            <td>7Kg</td>
            <td>Rp 120.000</td>
            <td>1-1-1999</td>
        </tr>
        <tr>
            <td>2</td>
            <td>0002</td>
            <td>LK1002</td>
            <td>3Kg</td>
            <td>0%</td>
            <td>1%</td>
            <td>3.2Kg</td>
            <td>Rp 60.000</td>
            <td>12-1-1999</td>
        </tr>
      </table>
    </div>
</div>
</div>   
@endsection
        
