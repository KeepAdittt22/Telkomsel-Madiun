@extends('layouts.template')

@section('title',$title)
    
@section('page_title',$page_title)
    
@section('content')
    <script>
        $(function(){
            @if(session("type"))
            showMessage('{{ session("type") }}','{{ session("text") }}','{{ session("icon") }}','{{ session("button") }}');
            @endif
        });
    </script>
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-tambah" onclick="clear_user()">
              <i class="fa fa-plus"></i> Tambah Data
            </button>
        </div>
       <div class="col-sm-12">
        <table id="example1" class="table table-bordered">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th width="18%">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $rsUser)
                    <tr>
                        <td>{{ $rsUser["name"]}}</td>
                        <td>{{ $rsUser["email"]}}</td>
                        <td>{{ $rsUser["role"]}}</td>
                        <td style="text-align: center">
                          <a href="javascript:void(0)" class="btn btn-warning btn-flat btn-sm" data-toggle="modal" data-target="#modal-tambah" onclick="edit_user('{{ $rsUser["id"] }}','{{ $rsUser["name"] }}','{{ $rsUser["email"] }}','{{ $rsUser["password"] }}','{{ $rsUser["role"] }}')"><i class="fa fa-edit"></i></a>
                          <a href="{{ url('user/delete/'.$rsUser["id"]) }}" class="btn btn-danger btn-flat btn-sm" onclick="return confirmDelete(this)"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </div>  
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg" style="background-color: beige">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Data User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('user/save')}}" method="post" onsubmit="showPreload()">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama User</label>
                                <input type="hidden" name="id" id="id" value="{{$rsUser->id}}">
                                <input type="text" class="form-control @error("name") is-invalid  @enderror" id="name" name="name" placeholder="Nama User">
                                @error("name")
                                    <span id="error-name" class="error invalid-feedback">
                                        {{ $errors->first("name") }}
                                    </span>
                                @enderror
                             </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error("email") is-invalid  @enderror" id="email" name="email" placeholder="Nama Email">
                                @error("email")
                                <span id="error-email" class="error invalid-feedback">
                                    {{ $errors->first("email") }}
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="hidden" name="old_password" id="old_password" value="{{ @$rsUser->password }}">
                                <input type="password" class="form-control @error("password") is-invalid  @enderror" id="password" name="password" placeholder="Password" value="">
                                @error("password")
                                <span id="error-password" class="error invalid-feedback">
                                    {{ $errors->first("password") }}
                                </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="role">Pilih Role</label>
                                <select class="custom-select rounded-0 @error("role") is-invalid  @enderror" id="role" name="role" value="">
                                    <option value="">- Pilih Role -</option>
                                    <option {{ @$rsUser->role == "Admin" ? "selected" : "" }} value="Admin">Admin</option>
                                    <option {{ @$rsUser->role == "User" ? "selected" : "" }} value="User">User</option>
                                </select>
                                @error("role")
                                <span id="error-role" class="error invalid-feedback">
                                    {{ $errors->first("role") }}
                                </span>
                                @enderror                            
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-right bg-danger">
                        <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                </form>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <script>
        $(function(){
            @if($errors->any())
            showMessage("Terjadi Kesalahan !","Data Gagal Disimpan","error","Oke");
            var mymodal = new bootstrap.Modal(document.getElementById("modal-tambah"));
            mymodal.show();
            @endif
        });
    </script>
@endsection
