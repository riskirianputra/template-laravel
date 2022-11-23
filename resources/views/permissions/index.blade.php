{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete PERMISSION!!</strong>             
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Permissions</h5>
                        </div>
                        <a href="{{ route('permissions.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Permissions</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Permissions</th>                                    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="20%" colspan="3">Action</th>
                                </tr>                                                                                                                                 
                            </thead>
                            <tbody>
                            @foreach ($permissions as $permission)
                                <tr class="text-center">
                                    <td>{{ $permission->name }}</td>                                    
                                    <td><a href="{{ route('permissions.show', $permission->id) }}" ><i class="fas fa-eye text-secondary"></a></td>
                                    <td><a href="{{ route('permissions.edit', $permission->id) }}" ><i class="fas fa-user-edit text-secondary"></i></a></td>
                                    <td><a href="{{ route('permissions.destroy', $permission->id) }}" ><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>                        
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

