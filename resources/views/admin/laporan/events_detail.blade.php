@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan Events</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Events </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title float-left">Judul Events <span class="badge badge-success">13 Januari
                                    2023</span>
                            </h3>
                            <button class="btn btn-primary float-right"><i class="fas fa-filter"
                                    style="color: #ffffff;"></i> Filter</button>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>Nama Alumni</th>
                                        <th>Angkatan</th>
                                        <th>Alamat</th>
                                        <th>Jam hadir</th>
                                        <th>Whist List</th>
                                        <th>Hadir Saat Acara</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rafli ichwan</td>
                                        <td>2023</td>
                                        <td>Malang</td>
                                        <td align="center"><span class="badge badge-primary">00:00:00</span>
                                        </td>

                                        <td align="center">
                                            <i class="fas fa-check-circle fa-lg" style="color: #3ec40e;"></i>
                                        </td>
                                        <td align="center"><i class="fas fa-times-circle fa-lg" style="color: #ff0000;"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vidii</td>
                                        <td>2023</td>
                                        <td>Malang</td>
                                        <td align="center"><span class="badge badge-primary">12:32:47</span>
                                        </td>

                                        <td align="center">
                                            <i class="fas fa-check-circle fa-lg" style="color: #3ec40e;"></i>
                                        </td>
                                        <td align="center"><i class="fas fa-check-circle fa-lg" style="color: #3ec40e;"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
@section('script')
    <script>
        $("#example1").DataTable();
    </script>
@endsection
