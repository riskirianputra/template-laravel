
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Profile Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route ('user.update', $user->id) }}" method="POST" role="form text-left">
                {{ csrf_field() }}
                {{ method_field('put') }}
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <label for="name" class="form-label">Name</label>                        
                                <div class="@error('name')border border-danger rounded-3 @enderror">
                                    <input value="{{ $user->name }}" type="text" class="form-control" name="name" placeholder="Name" id="name" required>                                    
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
                                    <input value="{{ $user->email }}" type="email" class="form-control" name="email" placeholder="Email address" required>                                   
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
@foreach($roles as $role)
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">{{ __('Role') }}</label>
                                <div class="@error('role')border border-danger rounded-3 @enderror">
                                    <input value="{{ $role->name, ucfirst($role->name) }}" type="text" class="form-control" name="role" placeholder="Email address" required>                                   
                                        @error('role')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                        
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" id="submit">Save</button>
                        <a href="{{ route('user.index') }}" class="btn btn-dark">Back</a>
                    </div>
                </form>

            </div>
        </div>
    </div>


                        