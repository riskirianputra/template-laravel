{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.user_type.auth')

@section('content')
<h3>
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <form method="post" action="#" enctype="multipart/form-data">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                      </div>
                        <div class="modal-body">

                           <div class="form-row">

                              <div class="form-group col-md-12">                                                      
                                <select class="btn btn-info" name="jalur" required="">                            
                                                                                     
                                </select>                                 
                              </div>                                                       
                                                                                                             
                              <div class="form-group col-md-12 {{ $errors->has('file') ? ' has-error' : '' }}">  
                          {{ csrf_field() }}
                          <label>Pilih file excel</label>
                          <div class="form-group">
                            <input type="file" name="file" required="required">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                  </div>
                </form>
              </div>
            </div>    </h3>
<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete ROLE!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Role</h5>
                        </div>
                        <a href="{{ route('roles.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Role</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>PERMISSIONS</b></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>
                                </tr>                                                                                                 
                            </thead>
                            <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                                    <td><a href="{{ route('roles.show', $role->id) }}" ><i class="fas fa-eye text-secondary"></a></td>                                    
                                    <td><a href="{{ route('roles.edit', $role->id) }}" data-toggle="modal" data-target="#edit{{$role->id}}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('roles.destroy', $role->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                                </tr>
                            @endforeach                                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

