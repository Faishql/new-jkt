@extends('layouts.app')

@section('css-home')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    {{ session('username') }}
    <div class="container-content">
        <div class="content-header">
            <h2>LIST GABAH</h2>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>No Invoice</th>
                <th>Total Berat</th>
                <th>Total Harga</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>INV02938098</td>
                <td>7</td>
                <td>8000000</td>
                <td>
                    <a href="#add"><button onclick="document.getElementById('id01').style.display='block'"
                            class="button">Tambah</button></a>
                    <a href="detail.html"><button class="button">Detail</button></a>
                </td>
            </tr>
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
                        <label><b>Tanggal</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="tanggal"
                            required>
                        <label><b>Berat</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="berat" required>
                        <label><b>Potongan</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="potongan"
                            required>
                        <label><b>Potongan Zakat</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="potongan-zakat"
                            required>
                        <label><b>Bayar</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="bayar" required>
                        <button class="button" type="submit">Input</button>
                        <button onclick="document.getElementById('id01').style.display='none'" type="button"
                            class="button-cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
