@extends('layouts.admin')
@section('content')
    <div class="span9">
        <div class="content">
            <div class="btn-controls">
                <div class="btn-box-row row-fluid">
                    <div class="btn-box big">
                        <i class="icon-user"></i><b>15</b>
                        <p class="text-muted">Jumlah Customer</p>
                    </div>
                </div>
                <div class="module">
                    <div class="module-head">
                        <div class="row-fluid">
                            <div class="">
                                <h3>Daftar Customer</h3>
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
                                    <th>Alamat</th>
                                    <th>No telp</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>Rendi</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>2</td>
                                    <td>Bagus</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>3</td>
                                    <td>Faisal</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>4</td>
                                    <td>Dino</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>5</td>
                                    <td>Rama</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>6</td>
                                    <td>Bima</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>7</td>
                                    <td>Denza</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>8</td>
                                    <td>Naufal</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>9</td>
                                    <td>Rafli</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
                                    <td><button class="btn btn-warning">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>10</td>
                                    <td>Jusuf</td>
                                    <td>Malang</td>
                                    <td class="center">000</td>
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
