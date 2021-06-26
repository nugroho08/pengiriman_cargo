@extends('layouts.app')


@section('level')
<div class="info">
    <a href="#" class="d-block">Admin</a>
</div>
@endsection

@section('sidebarmenu')
<li class="nav-item">
    <a href="{{url('admin/home')}}" class="nav-link">
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
    <a href="{{url('admin/home')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Pelabuhan</p>
    </a>

</li>
<li class="nav-item">
    <a href="{{url('admin/home')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Tracking barang</p>
    </a>

</li>
<li class="nav-item">
    <a href="{{url('admin/home')}}" class="nav-link">
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
<div class="container">
    <div class="col-lg-3 col-6 " style="position: absolute; right: 0;">
        <div class="small-box bg-warning">
            <div class="inner">

                <p>Operator Registrations</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="{{route('operator.create')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Operator</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>NIP Operator</th>
                                    <th>Nama Lengkap</th>
                                    <th>E-mail</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No. Telepon</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($operator as $o)
                                <tr>
                                    <td>{{$o->nip_operator}}</td>
                                    <td>{{$o->nama_lengkap}}</td>
                                    <td>{{$o->email}}</td>
                                    <td>{{$o->jenis_kelamin}}</td>
                                    <td>{{$o->no_telepon}}</td>
                                    <td>{{$o->Alamat}}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('operator.destroy', $o->nip_operator) }}" method="POST">
                                            <a href="{{ route('operator.edit', $o->nip_operator) }}" class="btn btn-sm btn-warning">EDIT</a>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection