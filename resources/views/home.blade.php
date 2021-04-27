@extends('layouts.app')

@section('css-home')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
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
                        <label><b>Berat</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" id="berat" name="berat" required>
                        <label><b>Bayar</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" id="bayar" name="bayar" required>
                        <button class="button" type="button" id="add">Input</button>
                        <button onclick="document.getElementById('id01').style.display='none'" type="button"
                            class="button-cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
