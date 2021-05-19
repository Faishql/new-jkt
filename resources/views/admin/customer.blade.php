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
                                @foreach ($customer as $item)
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td class="center">{{ $item->no_telp }}</td>
                                        <td><button class="btn btn-warning">Update</button></td>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                    </tr>
                                @endforeach
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
