@extends('layouts.user_type.auth')

@section('content')

<div class="row">  
    <div class="col-xl-12 col-lg-12 col-md-12 grid-margin stretch-card">    
      <div class="card-body">                  
        <div class="modal fade bd-example-modal-lg" id="tambahgallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" class="col-lg-12">
            <form method="post" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
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

<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>List Gallery</h1>
    </div>

    <div class="section-body">
        <div class="row">
            @foreach ( $gallery as $gallery )
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('assets/img/gallery/'.$gallery->img)}}" alt="" style="width: 100%">
                        <div class="text-center mt-4">
                            <a href="{{route('gallery.delete',$gallery->id)}}" class="btn btn-danger swalDeleteGallery" data-id="{{$gallery->id}}"><i class="fas fa-trash"></i> Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-3">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" class="btn btn-warning mr-5" data-bs-toggle="modal" data-bs-target="#tambahgallery"><i class="fas fa-plus-square"> UPLOAD</i>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @include('gallery.modal')

</div>

@endsection

@section('js')

<script src="{{asset('stisla/assets/js/page/modules-sweetalert.js')}}"></script>

<script>
    $(document).on('click','.createGallery', function(){

        $('.modal-title').html('Tambah Gallery');
        $('.form-data').prop('method','POST').prop('action','{{route('gallery.store')}}').trigger('reset');
        $("#previewImage").css("display","none");
        $('#modalGallery').modal('show',{ Backdrop:'static'});
        $('#galleryId').val('N');
        $('#submit').show();
    });

    $(document).on('click','.editGallery', function(){

        let id = $(this).data('id');

        $.get('../admin/gallery/edit/'+id+'',function(data){
            $('.modal-title').html('Edit Gallery');
            $('.form-data').prop('method','POST').prop('action','{{route('gallery.store')}}');
            $('#galleryId').val(data.id);
            $('#hidden_image').val(data.img);
            $('#modalGallery').modal('show',{ Backdrop:'static'});
            $("#previewImage").attr("src",'{{ url('../assets/img/gallery') }}/' + data.img).css("display","block");
        });

    });

    $(".swalDeleteGallery").click(function() {

        let id = $(this).data('id');

        swal({
            title: 'Yakin hapus gallery?',
            text: 'Gallery yang sudah dihapus tidak dapat dikembalikan!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location ="../admin/gallery/delete/"+id+"",
                swal('Gallery berhasil dihapus!', {
                    icon: 'success',
                });
            } else {
            swal('Gallery masih tersimpan!', {
                icon: 'warning',
            });
            }
        });
    });
</script>

@endsection
