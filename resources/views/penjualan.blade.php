@extends('layouts.app')
@section('css-drying')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <div class="form">
        <div class="container-content">
            <div class="content-header">
                <h2>DATA PENJUALAN</h2>

                <div class="header-icons">
                    <button class="icons-button" id="modal" onclick="modalGlobal()"><img
                            src="{{ asset('assets/plus.svg') }}" alt=""></button>
                </div>
            </div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Invoice</th>
                    <th>Total Harga</th>
                    <th>Tanggal Penjualan</th>
                    <th>Action</th>
                </tr>
                <tbody id="list-data">

                </tbody>
            </table>
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                    <div class="w3-center"><br>
                        <span onclick="document.getElementById('id01').style.display='none'"
                            class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                    </div>
                    <div class="w3-container">
                        <table class="detail-table">
                            <tr>
                                <th>Nama Barang</th>
                                <th>Nama Customer</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                            </tr>
                            <tbody id="list-detail">
                                {{-- content --}}
                            </tbody>
                        </table>
                        <button class="button cetak" type="button" id="cetak">Cetak</button>
                        <button class="button tambah" type="button" id="modal" onclick="modalAdd()">Tambah</button>
                        <div id="id03" class="w3-modal">
                            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                                <div class="w3-center"><br>
                                    <span onclick="document.getElementById('id03').style.display='none'"
                                        class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                                        title="Close Modal">&times;</span>
                                </div>

                                <div class="w3-container">
                                    <form class="w3-container" action="">
                                        <div class="w3-section">
                                            <input type="hidden" id="customer" value="">
                                            <input type="hidden" id="inv" value="">
                                            <label><b>Nama Barang</b></label>
                                            <select class="w3-select w3-border w3-margin-bottom" id="barangSelect"
                                                name="barang">
                                            </select>
                                            <label><b>Jumlah</b></label>
                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder=""
                                                id="jumlah" name="jumlah" required>
                                            <label><b>Total Harga</b></label>
                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder=""
                                                id="total_harga" name="tothar" required>
                                            <label><b>Tanggal Penjualan</b></label>
                                            <input class="w3-input w3-border w3-margin-bottom" type="date" name="tanggal"
                                                required>

                                            <button class="button" type="button" onclick="addDetail()">Input</button>
                                            <button onclick="document.getElementById('id03').style.display='none'"
                                                type="button" class="button-cancel">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="id02" class="w3-modal">
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                    <div class="w3-center"><br>
                        <span onclick="document.getElementById('id02').style.display='none'"
                            class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                    </div>
                    <div class="w3-container">
                        <form class="w3-container" action="">
                            <div class="w3-section">
                                <label><b>Tanggal Penjualan</b></label>
                                <input class="w3-input w3-border w3-margin-bottom" type="date" name="tgl" required>
                                <label><b>Nama Customer</b></label>
                                <select class="w3-select w3-border w3-margin-bottom" id="customerSelect" name="customeradd">

                                </select>
                                <button class="button" type="button" onclick="addPenjualan()">Input</button>
                                <button onclick="document.getElementById('id02').style.display='none'" type="button"
                                    class="button-cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/Penjualan.js') }}"></script>
@endsection
