<html>

<head>
    <meta charset="utf-8" />
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('css/invpenjualan.css') }}" />
</head>

<body>
    <article>
        <address>
            <p>Invoice : {{ $inv }}</p>
        </address>
        <table class="meta">
            <tr>
                <th><span>Tuan</span></th>
                <td><span>{{ $nama }}</span></td>
            </tr>
            <tr>
                <th><span>Tanggal</span></th>
                <td><span>1-1-1999</span></td>
            </tr>
        </table>
        <table class="inventory">
            <thead>
                <tr>
                    <th style="width: 10%"><span>JUMLAH</span></th>
                    <th style="width: 50%"><span>NAMA BARANG</span></th>
                    <th><span>HARGA</span></th>
                    <th><span>JUMLAH</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr>
                        <td><span>{{ $item['banyak_barang'] }}</span></td>
                        <td><span>{{ $item['nama_barang'] }}</span></td>
                        <td><span>{{ $item['harga'] }}</span></td>
                        <td><span>{{ $item['jumlah'] }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table class="balance">
            <tr>
                <th><span>Total</span></th>
                <td><span>Rp. {{ $total }}</span></td>
            </tr>
        </table>
    </article>
    <aside>
        <h1><span>Catatan Tambahan</span></h1>
        <div contenteditable>
            <p>Tulis catatan tambahan disini</p>
        </div>
    </aside>
</body>

</html>
