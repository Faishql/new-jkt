@extends('layouts.admin')
@section('content')
    <div class="span9">
        <div class="content">
            <div class="btn-controls">
                <div class="btn-box-row row-fluid">
                    <div class="btn-box big span4">
                        <i class="icon-check"></i></i><b>65%</b>
                        <p class="text-muted">Gabah Hari Ini</p>
                    </div>
                    <div class="btn-box big span4">
                        <i class="icon-user"></i><b>15</b>
                        <p class="text-muted">Jumlah User</p>
                    </div>
                    <div class="btn-box big span4">
                        <i class="icon-money"></i><b>Rp 7.350.000</b>
                        <p class="text-muted">Transaksi Hari Ini</p>
                    </div>
                </div>
                <div class="module">
                    <div class="module-head">
                        <div class="row-fluid">
                            <div class="">
                                <h3>Daftar User</h3>
                            </div>
                            <div class="" style="text-align: right; margin-top: -22px;">
                                <button class="btn btn-success">Tambah</button>
                            </div>
                        </div>
                    </div>
                    <div class="module-body table">
                        <table cellpadding="0" cellspacing="0" border="0"
                            class="datatable-1 table table-bordered table-striped display" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($user_data as $item)
                                    <tr class="odd gradeX">
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td class="center">{{ $item->level === 1 ? 'petugas' : 'admin' }}</td>
                                        <td><a class="btn btn-warning">Update</a></td>
                                        <td>
                                            <form action="{{ route('deluser', ['id' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
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
