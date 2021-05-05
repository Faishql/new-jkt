@extends('layouts.app')

@section('css-home')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="container-content">
        <div class="content-header">
            <h2>PEMBELIAN GABAH</h2>
            <div class="header-icons">
                <a href="#add"><button id="modal" onClick="getmodal3()" 
                    class="icons-button" value="${data.kode_penerimaan}"><img src="{{ asset('assets/plus.svg') }}" alt=""></button></a>
                <a href="#add"><button id="modal" onClick="getmodal2()" 
                    class="icons-button" value="${data.kode_penerimaan}"><img src="{{ asset('assets/controls.svg') }}" alt=""></button></a>
            </div>
            
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Tanggal</th>
                <th>Total Berat</th>
                <th>Potongan</th>
                <th>Harga Perkilo</th>
                <th>Total Harga</th>
                <th>Action</th>
            </tr>
            <tbody id="list-data">
                {{-- content --}}
            </tbody>
        </table>
    </div>
    </div>
    <div class="w3-container">


        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                    <span onclick="document.getElementById('id01').style.display='none'"
                        class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <form class="w3-container" action="">
                    <div class="w3-section">
                        <input type="hidden" id="kodepenerimaan" value="">
                        <label><b>Berat</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" id="berat" name="berat" required>
                        <button class="button" type="button" id="add">Input</button>
                        <button onclick="document.getElementById('id01').style.display='none'" type="button"
                            class="button-cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="id02" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                    <span onclick="document.getElementById('id02').style.display='none'"
                        class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <form class="w3-container" action="">
                    <div class="w3-section">
                        <label><b>Tanggal Awal</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="date" value="" id="tgl1" name="tanggal" required>
                        <label><b>Tanggal Akhir</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="date" value="" id="tgl2" name="tanggal" required>
                        <button class="button" type="button" id="filter">Filter</button>
                        <button onclick="document.getElementById('id02').style.display='none'" type="button"
                            class="button-cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="id03" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                    <span onclick="document.getElementById('id03').style.display='none'"
                        class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <form class="w3-container" action="">
                    <div class="w3-section">
                        <label><b>Nama Pengirim</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" id="nama" required>
                        <label><b>Harga Gabah</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" id="harga" required>
                        <button class="button" type="button" id="global">Input</button>
                        <button onclick="document.getElementById('id03').style.display='none'" type="button"
                            class="button-cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="id04" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                    <span onclick="document.getElementById('id04').style.display='none'"
                        class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>
                <input type="hidden" id="kode" value="">
                <div class="w3-container">
                    <table class="detail-table">
                    <tr>
                        <th>Kode Penerimaan</th>
                        <th>Berat</th>
                        <th>Action</th>
                    </tr>
                    <tbody id="list-detail">
                        {{-- content --}}
                    </tbody>
                    </table>
                    <button class="button cetak" type="button" id="cetak">Cetak</button>
                </div>
            </div>
        </div>
    </div>
    <div id="id05" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                    <span onclick="document.getElementById('id05').style.display='none'"
                        class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <form class="w3-container" action="">
                    <div class="w3-section">
                        <input type="hidden" value="" id="idpe">
                        <label><b>Potongan</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" id="uppot" required>
                        <button class="button" type="button" id="ude">Input</button>
                        <button onclick="document.getElementById('id05').style.display='none'" type="button"
                            class="button-cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    <script src="{{ asset('js/Data.js') }}"></script>
    <script src="{{ asset('js/Filter.js') }}"></script>

<!-- Add font awesome icons to buttons (note that the fa-spin class rotates the icon) -->

@endsection
