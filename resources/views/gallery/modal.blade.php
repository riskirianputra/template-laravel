<div class="modal fade" tabindex="-1" role="dialog" id="modalGallery">
    <form class="form-data" action="" method="" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">[Modal title]</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input id="partnerId" name="id" type="hidden" value="N">
                    <input id="hidden_image" name="hidden_image" type="hidden" value="">
                    <div style="display: flex; justify-content: center">
                        <!-- Upload Area -->
                        <div id="uploadArea" class="upload-area">
                            <!-- Header -->
                            <div class="upload-area__header">
                                <h1 class="upload-area__title">Upload file</h1>
                                <p class="upload-area__paragraph">

                                    <strong class="upload-area__tooltip">
                                    Ini
                                    <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
                                    </strong>
                                    adalah ekstensi yang diizinkan
                                </p>
                            </div>
                            <!-- End Header -->

                            <!-- Drop Zoon -->
                            <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                                <span class="drop-zoon__icon">
                                    <i class='bx bxs-file-image'></i>
                                </span>
                                <p class="drop-zoon__paragraph">Drop file disini atau klik untuk mencari</p>
                                <span id="loadingText" class="drop-zoon__loading-text">Mohon Tunggu...</span>
                                <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
                                <input name="image" type="file" id="fileInput" class="drop-zoon__file-input" accept="image/*" required autocomplete="image">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Requirement foto 500x500 px
                                </small>
                            </div>
                            <!-- End Drop Zoon -->

                            <!-- File Details -->
                            <div id="fileDetails" class="upload-area__file-details file-details">
                                <h3 class="file-details__title mt-2">File berhasil diupload</h3>
                                <div id="uploadedFile" class="uploaded-file">
                                    <div class="uploaded-file__icon-container">
                                        <i class="fas fa-file uploaded-file__icon"></i>
                                        <span class="uploaded-file__icon-text"></span>
                                    </div>
                                    <div id="uploadedFileInfo" class="uploaded-file__info">
                                        <span class="uploaded-file__name">Proejct 1</span>
                                        <span class="uploaded-file__counter">0%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End File Details -->
                        </div>
                        <!-- End Upload Area -->
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
