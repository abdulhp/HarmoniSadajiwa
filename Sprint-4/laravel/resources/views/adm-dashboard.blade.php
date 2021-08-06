@extends('admin-layout.app')

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
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$data['jmlArtikel']}}</h3>
                            
                            <p>Artikel</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$data['jmlMusik']}}</h3>
                            
                            <p>Lagu Daerah</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Selamat Datang, {{session('name')}}</h3>
                        </div>
                        <div class="card-body">
                            <p>Website ini digunakan untuk memasukkan data artikel dan data musik</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection

@section('footer')
@include('admin-layout.footer')
@endsection