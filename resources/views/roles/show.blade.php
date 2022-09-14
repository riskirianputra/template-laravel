

@extends('layouts.user_type.auth')

@section('content')

<div class="alert alert-secondary mx-4" role="alert">
    <span class="text-white">
        <strong>SHOW ROLE !!!</strong>             
    </span>
</div>  
<div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
            
                    @csrf
                    @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @csrf
                    
                    <div class="row">                                                 
                        <label for="name" class="col-md-2 col-form-label">Nama Role</label>                        
                            <div class="col-md-4">                               
                                    <input value="{{ $role->name }}" type="text" class="form-control" name="name" placeholder="Name" id="name" required="" readonly="">                                    
                                        @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror                                                          
                            </div>
                    </div>                                     
                  <br>
                    <div class="row">
                        <label for="permissions" class="col-md-2 col-form-label">Nama Permissions</label>
                            <div class="col-md-4">                                                           
                                <div class="@error('email')border border-danger rounded-3 @enderror">
                                <input value="{{ $rolePermissions->name }}" type="text" class="form-control" name="permissions"  required="" readonly="">                                       
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>                           
                            </div>
                    </div>
<br>                                                  
                    
                <a href="{{ route('roles.index') }}" class="btn btn-dark">Back</a>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }

            });
        });
    </script>
@endsection



                            
                            

                        