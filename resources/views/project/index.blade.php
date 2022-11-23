
@extends('layouts.user_type.auth')
@section('content')

<div class="row">  
    <div class="col-xl-12 col-lg-12 col-md-12 grid-margin stretch-card">    
      <div class="card-body">                  
        <div class="modal fade bd-example-modal-lg" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" class="col-lg-12">
            <form method="post" action="{{ route('project.store') }}" enctype="multipart/form-data">
              <div class="modal-content" style="background: #fff;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">UPLOAD GAMBAR</h5>
                </div>
                <div class="modal-body">
                {{ csrf_field() }}                                                            
                        <div class="form-row">                                                                                             
                            <div class="form-group col-md-12 {{ $errors->has('img') ? ' has-error' : '' }}">                                                    
                                <input id="img" type="file" class="form-control" name="img" value="" placeholder="PILIH GAMBAR">
                                @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
                            </div>      
                        </div> 

                        <div class="form-row">
                            <div class="form-group col-md-12 {{ $errors->has('nama_project') ? ' has-error' : '' }}">  
                                <input id="nama_project" type="text" class="form-control" name="nama_project" value="" placeholder="Nama Project">
                                @if ($errors->has('nama_project'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_project') }}</strong>
                                    </span>
                                @endif
                            </div>                                      
                        </div> 

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                  <button type="submit" class="btn btn-info"> UPLOAD </button>
                </div>
              </div>
            </form>
          </div>
        </div>                                               
      </div>
    </div>
</div>
                       
<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete Project!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">ALL PROJECTS</h5>
                        </div>
                        
                        <button type="button" class="btn btn-light mr-5" data-bs-toggle="modal" data-bs-target="#importExcel"><i class="fa fa-upload"> UPLOAD</i>
                      </button>     
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>                                
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>                                                                           
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%" colspan="3">Action</th>   
                                </tr>                                                                    
                            </thead>
                            <tbody>
                                @foreach($project as $projects)
                                <tr>
                                    <td>{{ $projects->id }}</td>
                                    <td>{{ $projects->nama_project }}</td>
                                    <td><img src="{{asset('assets/img/project/'.$projects  ->img)}}" alt="" style="width: 150px"></td>                                                                                                                           
                                    <td><a href="{{ route('user.show', $projects->id) }}" ><i class="fas fa-eye text-secondary"></a></td>
                                    <td><a href="{{ route('user.edit', $projects->id) }}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('user.destroy', $projects->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                                @endforeach                                                                                                    
                                </tr>                                                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

@endsection


                            
                            
 