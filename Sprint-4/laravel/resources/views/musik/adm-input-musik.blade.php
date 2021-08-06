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
                            @if ($data['mode'] == 'Edit')
                                <form action="{{route('admin.musik.postEdit', ['id'=>$data['musik']['id']])}}" method="POST" enctype="multipart/form-data">
                                @method('PATCH')
                            @elseif($data['mode'] == 'Add')
                                <form action="{{route('admin.musik.postInput')}}" method="POST" enctype="multipart/form-data">
                            @endif
                                @csrf
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    @error('judul')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <input type="text" class="@error('judul') is-invalid @enderror input-group" name="judul" id="judul" @if ($data['musik'] != null) value="{{$data['musik']['judul']}}" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="pencipta">Pencipta</label>
                                    @error('pencipta')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <input type="text" class="@error('pencipta') is-invalid @enderror input-group" name="pencipta" id="pencipta" @if ($data['musik'] != null) value="{{$data['musik']['pencipta']}}" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="daerah">Daerah</label>
                                    @error('daerah')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <input type="text" class="@error('daerah') is-invalid @enderror input-group" name="daerah" id="daerah" @if ($data['musik'] != null) value="{{$data['musik']['daerah']}}" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="lirik">Lirik</label>
                                    @error('lirik')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <textarea class="@error('lirik') is-invalid @enderror" name="lirik" id="lirik" cols="30" rows="10">@if ($data['musik'] != null) {{$data['musik']['lirik']}} @endif</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Upload Gambar</label>
                                    @error('gambar')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="bs-custom-file-input @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="lagu">Upload Lagu</label>
                                    @error('lagu')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="bs-custom-file-input @error('lagu') is-invalid @enderror" name="lagu" id="lagu">
                                      </div>
                                    </div>
                                  </div>
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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
        $('#lirik').summernote({
            height: 300
        });
        $('#deskripsi').summernote({
            height: 300
        });
    })
</script>
@endsection