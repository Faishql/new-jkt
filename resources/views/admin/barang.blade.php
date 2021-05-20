@extends('layouts.admin')
@section('content')
    <div class="span9">
        <div class="content">
            <div class="btn-controls">
                <div class="btn-box-row row-fluid">
                    <div class="btn-box big">
                        <i class="icon-inbox"></i><b>15</b>
                        <p class="text-muted">Jumlah Barang</p>
                    </div>
                </div>
                <div class="module">
                    <div class="module-head">
                        <div class="row-fluid">
                            <div class="">
                                <h3>Daftar Barang</h3>
                            </div>
                            <div class="" style="text-align: right; margin-top: -22px">
                                <a href="#modaltambah" role="button" class="btn btn-success" data-toggle="modal">Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="module-body table">
                        <table cellpadding="0" cellspacing="0" border="0"
                            class="datatable-1 table table-bordered table-striped display" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Satuan</th>
                                    <th>Kemasan</th>
                                    <th>Jenis</th>
                                    <th>Harga Jual</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><a href="#modaledit" role="button" class="btn btn-warning"
                                            data-toggle="modal">Update</a></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/.module-->
            </div>
            <!--/.content-->
        </div>
        <!--/.span9-->
    </div>
    </div>
    <!--/.container-->
    </div>
    <!--/.wrapper-->
    <!-- Modal Edit -->
    <div id="modaledit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <form action="" method="post" id="editBarang">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Barang</h3>
            </div>
            <div class="modal-body">
                <div class="control-group">
                    <label class="control-label" for="nama">Nama Barang</label>
                    <div class="controls">
                        <input type="text" id="nama" name="namabarang" placeholder="" class="span5">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="satuan">Satuan</label>
                    <div class="controls">
                        <input type="text" id="satuan" name="satuan" placeholder="" class="span5">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="kemasan">Kemasan</label>
                    <div class="controls">
                        <input type="text" id="kemasan" name="kemasan" placeholder="" class="span5">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="jenis">Jenis</label>
                    <div class="controls">
                        <input type="text" id="jenis" name="jenis" placeholder="" class="span5">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="harga">Harga Jual</label>
                    <div class="controls">
                        <input type="text" id="harga" name="harga" placeholder="" class="span5">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
    <!-- Akhir Modal Edit -->
    <!-- Modal Tambah -->
    <div id="modaltambah" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <form action="" method="post">
            @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Tambah Barang</h3>
            </div>
            <div class="modal-body">
                <div class="control-group">
                    <label class="control-label" for="nama">Nama Barang</label>
                    <div class="controls">
                        <input type="text" id="nama" name="namabarang" placeholder="" class="span5">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="satuan">Satuan</label>
                    <div class="controls">
                        <input type="text" id="satuan" name="satuan" placeholder="" class="span5">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="kemasan">Kemasan</label>
                    <div class="controls">
                        <input type="text" id="kemasan" name="kemasan" placeholder="" class="span5">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="jenis">Jenis</label>
                    <div class="controls">
                        <input type="text" id="jenis" name="jenis" placeholder="" class="span5">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="harga">Harga Jual</label>
                    <div class="controls">
                        <input type="text" id="harga" name="harga" placeholder="" class="span5">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="tgl">Tanggal</label>
                    <div class="controls">
                        <input type="date" id="tgl" name="date" placeholder="" class="span5">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
    <!-- Akhir Modal Tambah -->
@endsection
