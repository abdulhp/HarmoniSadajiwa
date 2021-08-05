@extends('admin-layout.app')

@section('additional-stylesheet')
<!-- summernote -->
<link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/summernote/summernote-bs4.min.css">
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
                            <form action="{{route('admin.artikel.postInput')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    @error('judul')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <textarea class="@error('judul') is-invalid @enderror" name="judul" id="judul"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="deksripsi">Deskripsi</label>
                                    @error('deskripsi')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <textarea class="@error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                            </form>
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
<script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/summernote/summernote-bs4.min.js"></script>

<script>
    $(function () {
        // Summernote
        $('#judul').summernote()
        $('#deskripsi').summernote({
            height: 300
        })
    })
</script>
@endsection