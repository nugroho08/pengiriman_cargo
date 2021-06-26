@extends('layouts.app')


@section('level')
<div class="info">
    <a href="#" class="d-block">Admin</a>
</div>
@endsection

@section('sidebarmenu')
<li class="nav-item">
    <a href="{{url('home')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Dashboard</p>
    </a>

</li>
<li class="nav-item">
    <a href="{{url('admin/operator')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Operator Pelabuhan</p>
    </a>

</li>
<li class="nav-item">
    <a href="{{url('admin/pelabuhan')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Pelabuhan</p>
    </a>

</li>
<li class="nav-item">
    <a href="{{url('admin/barang')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Tracking barang</p>
    </a>

</li>
<li class="nav-item">
    <a href="{{url('admin/kontainer')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Container</p>
    </a>

</li>
<li class="nav-item">
    <a href="{{url('admin/kapal')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Kapal Cargo</p>
    </a>

</li>
@endsection



@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('kapal.store')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Kapal</label>
                                <input type="text" class="form-control" id="nama_kapal" name="nama_kapal" placeholder="Enter ship name">
                            </div>

                            <div class="form-group">
                                <label for="Alamat">Status Kapal</label>
                                <select class="form-control" name="status_kapal">
                                    <option>--Pilih--</option>
                                    <option>Dalam Perjalanan</option>
                                    <option>Dalam Perbaikan</option>
                                    <option>Sedang Di Dermaga</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nip_operator">Alamat Tujuan</label>
                                <input type="text" class="form-control" id="nip_operator" name="alamat_tujuan" placeholder="Enter your destination">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection