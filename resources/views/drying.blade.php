@extends('layouts.app')
@section('css-drying')
    <link rel="stylesheet" href="{{ asset('css/drying.css')}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<div class="form">
  <div class="container-content">
      <div class="content-header">   
          <h2>DATA PENJEMURAN</h2>
          <div class="header-icons">
            <button class="icons-button" id="modal" onclick="document.getElementById('id01').style.display='block'"><img src="{{ asset('assets/sun.svg')}}" alt=""></button>
          </div>  
      </div>
      <table>
        <tr>
            <th>No</th>
            <th>Nama Pengirim</th>
            <th>Total Berat</th>
            <th>Total Bayar</th>
            <th>Tanggal Data</th>
        </tr>
        <tbody id="list-data">
          {{-- content --}}
        </tbody>
      </table>
    </div>
</div>
</div> 
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
          <span onclick="document.getElementById('id01').style.display='none'"
              class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="">
          <div class="w3-section">
              <label><b>Tanggal</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="" id="tanggal" name="tanggal" required>
              <select class="w3-select w3-border w3-margin-bottom" id="selector" name="option">
                
              </select>
              <button class="button" type="button" id="tkering">Input</button>
              <button onclick="document.getElementById('id01').style.display='none'" type="button"
                  class="button-cancel">Cancel</button>
          </div>
      </form>
  </div>
</div> 

<script src="{{ asset('js/Kering.js') }}"></script>
<script src="{{ asset('js/Detail.js') }}"></script> 
@endsection
        
