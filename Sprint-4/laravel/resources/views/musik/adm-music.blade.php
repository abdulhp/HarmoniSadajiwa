@extends('admin-layout.app')

@section('additional-stylesheet')
{{-- DataTables --}}
<link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('nav')
@include('admin-layout.nav')
@endsection

@section('left-sidebar')
@include('admin-layout.left-sidebar')
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{$data['pageTitle']}}</h1>
                </div><!-- /.col -->    
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul</th>
                                        <th>Pencipta</th>
                                        <th>Daerah</th>
                                        <th>Gambar</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['musikData'] as $musik)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$musik['judul']}}</td>
                                        <td>{{$musik['pencipta']}}</td>
                                        <td>{{$musik['daerah']}}</td>
                                        <td>{{$musik['gambar']}}</td>
                                        <td>{{$musik['created_at']}}</td>
                                        <td>{{$musik['updated_at']}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('admin.musik.edit', ['id' => $musik['id']])}}" class="btn btn-warning"><span class="fas fa-pen"></span></a>
                                                <form action="{{route('admin.musik.delete', ['id'=> $musik['id']])}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger"><span class="fas fa-trash"></span></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</div>
@endsection

@section('footer')
@include('admin-layout.footer')
@endsection

@section('additional-script')
{{-- DataTables --}}
<script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script>
    $(function () {

        var dataTemp = ''
        var table1 = $("#example1").DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            deferRender: true,
            buttons: {
                dom: {
                    button: {
                        className: "btn"
                    }
                },
                buttons: [{
                    className: 'btn-primary',
                    text: '<span class="fas fa-plus-square"></span> Tambah Musik',
                    action: function() {
                        window.location = 'musik/input';
                    }
                }],
            }
        });
        table1.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    })
</script>

@endsection