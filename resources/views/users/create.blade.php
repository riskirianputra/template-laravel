
@extends('layouts.user_type.auth')
@section('content')


        <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Profile Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route ('user.store') }}" method="POST" role="form text-left">
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
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="name" class="form-label">Name</label>                        
                                <div class="@error('name')border border-danger rounded-3 @enderror">
                                    <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Name" id="name" required>                                    
                                        @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">{{ __('Email') }}</label>
                                <div class="@error('email')border border-danger rounded-3 @enderror">
                                    <input value="{{ old('email') }}" type="email" class="form-control" name="email" placeholder="Email address" required>                                   
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="user-password" class="form-control-label">{{ __('password') }}</label>
                                <div class="@error('password')border border-danger rounded-3 @enderror">
                                    <input value="{{ old('password') }}" type="password" class="form-control" name="password" placeholder="password" required>                                   
                                        @error('password')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($roles as $role)
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="role" class="form-control-label">{{ Form::label($role->name, ucfirst($role->name)) }}</label>
                                <div class="@error('email')border border-danger rounded-3 @enderror">
                                {{ Form::checkbox('roles[]',  $role->id ) }}                             
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="user.phone" class="form-control-label">{{ __('Phone') }}</label>
                                <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="tel" placeholder="40770888444" id="number" name="phone" value="{{ old('nohp') }}">
                                        @error('phone')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection


                            
                            

                        