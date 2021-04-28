<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
            crossorigin="anonymous"
        />

        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('') }}css/invoice.css" />

        <!-- Icon Bootsstap -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        />

        <title>Invoice</title>
    </head>
    <body>
        <div class="container">
            <div class="border border-dark wrap">
                <div class="header">
                    <h2>Penerimaan Gabah</h2>
                    <hr />
                </div>
                <!-- Data Nama dan Tanggal -->
                <div class="tabble">
                    <table>
                        <tr>
                            <th>Dari</th>
                            <th>Tgl</th>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <th></th>
                        </tr>
                    </table>
                </div>
                <!-- Akhir Data Nama dan Tanggal -->
                <!-- Tabel Isi Barang -->
                <div class="content">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Berat (Kg)</th>
                            <th>Pot (%)</th>
                            <th>Total</th>
                        </tr>
                        @foreach ($datalist as $item)
                            <tr>
                                <td>{{ $item['no'] }}</td>
                                <td>{{ $item['berat'] }}</td>
                                <td>{{ $item['potongan'] }}</td>
                                <td>{{ $item['total'] }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th></th>
                            <th>{{ $total_kotor }}</th>
                            <th></th>
                            <th>{{ $afterpotongan }}</th>
                        </tr>
                    </table>
                </div>
                <!-- Akhir Tabel Isi Barang -->

                <!-- Total -->
                <div class="pot">
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-6">pot zak</div>
                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td>{{ $countdata }} x 0.5 Kg</td>
                                    <td>{{ $final_potongan }}</td>
                                </tr>
                                <tr>
                                    <th>Total Gabah</th>
                                    <th>{{ $total_gabah }}</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="row justify-content-center mb-4">
                        <div class="col-md-4">Bayar</div>
                        <div class="col-md-4">{{ $total_gabah }} x 4.600</div>
                        <div class="col-md-4">{{ $bayar }}</div>
                    </div> --}}
                </div>
                <div class="mengtotal">
                    <table class="submengtotal">
                        <tr>
                            <td style="text-align: left;">Bayar</td>
                            <td>353.5 x 4.600</td>
                            <td style="text-align: right;">1.639.900</td>
                        </tr>
                    </table>
                </div>
                <!-- Akhir total -->
            </div>
            <div class="row justify-content-center tombol">
                <div class="col-md-6">
                    <!-- Tombol Print -->
                    <button
                        type="button"
                        class="btn btn-primary biru mb-2 tmbl"
                    >
                        <i class="bi bi-arrow-counterclockwise"></i> Kembali
                    </button>
                    <!-- Akhir Tombol Print -->
                </div>
                <div class="col-md-6">
                    <!-- Tombol Print -->
                    <button type="button" class="btn btn-success mb-2 tmbl">
                        <i class="bi bi-printer"></i> Cetak
                    </button>
                    <!-- Akhir Tombol Print -->
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
