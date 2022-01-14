@extends('template.base')

@section('content')
    <div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
               </div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Data User</h3>
                        </div>
                        <div class="col-md-2">
                            <a href="{{url('admin/user/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus" data-feather="plus"></i> Tambah User</a>
                        </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Jenis_kelamin</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach ($list_user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                            <a href="{{url('admin/user', $user->id)}}" class="btn btn-dark" ><i  class="fa fa-info" data-feather="info"></i></a>
                                            <a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"data-feather="edit" ></i></a>
                                            @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
                                            </div>
                                        </td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->nama  }}</td>
                                        <td>{{ $user->Jenis_Kelamin_String }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
