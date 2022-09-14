{{-- Modal Edit --}}
@foreach ($role as $i)
<form action="{{ route('roles.update', $role->id) }}" method="post" enctype="multipart/form-data" name="edit">
    <div class="modal fade" id="edit{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
            @csrf
            @method('PATCH')
            <div class="modal-dialog modal-dialog-centered" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Menu</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Thumbnail</label>
                            
                        </div>
                        @foreach($permissions as $permission)
                        <div class="form-group">
                            <label for="">Permissions </label>
                            <input type="checkbox" name="permission[{{ $permission->name }}]" value="{{ $permission->name }}" class='permission'{{ in_array($permission->name, $rolePermissions) ? 'checked': '' }}>
                        </div>                                                
                        
                        <div class="form-group">
                            <label>Name</label>
                            <textarea name="desc" class="form-control">{{ $permission->name }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Guard</label>
                            <textarea name="desc" class="form-control">{{ $permission->guard_name }}</textarea>
                        </div>
                        @endforeach

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endforeach

{{-- End of Modal Edit --}}




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

