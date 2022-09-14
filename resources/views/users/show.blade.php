        
@extends('layouts.user_type.auth')

@section('content')

<div class="alert alert-secondary mx-4" role="alert">
    <span class="text-white">
        <strong>SHOW USER !!!</strong>             
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
                        <label for="name" class="col-md-2 col-form-label">Nama Users</label>                        
                            <div class="col-md-4">                               
                                    <input value="{{ $user  ->name }}" type="text" class="form-control" name="name" placeholder="Name" id="name" required="" readonly="">                                    
                                        @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror                                                          
                            </div>
                    </div>                                     
                <br>
                    <div class="row">
                        <label for="permissions" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-4">                                                           
                                <div class="@error('email')border border-danger rounded-3 @enderror">
                                <input value="{{ $user->email }}" type="text" class="form-control" name="email"  required="" readonly="">                                       
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>                           
                            </div>
                    </div>
                <br>
                    <div class="row">                                                 
                        <label for="name" class="col-md-2 col-form-label">Nama Role</label>                        
                            <div class="col-md-4">                               
                                    <input value="{{ $roles->name }}" type="text" class="form-control" name="name" placeholder="Name" id="name" required="" readonly="">                                    
                                        @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror                                                          
                            </div>
                    </div>   
<br>                                                  
                    
                <a href="{{ route('user.index') }}" class="btn btn-dark">Back</a>

            </div>
        </div>
    </div>

@endsection





                            
                            

                        


                            
                            

                        