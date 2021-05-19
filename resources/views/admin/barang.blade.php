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
                                <button class="btn btn-success">Tambah</button>
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
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>2</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>3</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>4</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>5</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>6</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>7</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>8</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>9</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>10</td>
                                    <td>Beras</td>
                                    <td>3</td>
                                    <td>Plastik</td>
                                    <td>Beras</td>
                                    <th>15k</th>
                                    <td><button class="btn btn-warning">Update</button></td>
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
@endsection
