<x-header-component />

<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Image Form</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Image Form</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
                <!--begin::Col-->
                <div class="col-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-12">
                    <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Image Management</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form role="form" action="{{ url('post-image-add-edit') }}" method="POST"
                            enctype="multipart/form-data" class="card shadow-sm p-4">
                            @csrf
                            <input type="hidden" name="image_id" value="{{ $editimage->id ?? 0 }}">

                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label for="image_name" class="form-label fw-semibold">Image Name / Social Media
                                            Name</label>
                                        <input type="text" class="form-control" id="image_name" name="image_name"
                                            value="{{ $editimage->image_name ?? '' }}" placeholder="Enter image name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="social_media_link" class="form-label fw-semibold">Social Media
                                            Link</label>
                                        <input type="text" class="form-control" id="social_media_link"
                                            name="social_media_link" value="{{ $editimage->social_media_link ?? '' }}"
                                            placeholder="Enter Social Media Link">
                                    </div>
                                </div>

                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label for="image_section" class="form-label fw-semibold">Assign Image To
                                            Section</label>
                                        <select class="form-select" id="image_section" name="image_section" required>
                                            <option value="" disabled>Select section
                                            </option>
                                            <option value="logo"
                                                {{ isset($editimage) && $editimage->image_section == 'logo' ? 'selected' : '' }}>
                                                Logo
                                            </option>
                                            <option value="banner"
                                                {{ isset($editimage) && $editimage->image_section == 'banner' ? 'selected' : '' }}>
                                                Banner
                                            </option>
                                            <option value="home"
                                                {{ isset($editimage) && $editimage->image_section == 'home' ? 'selected' : '' }}>
                                                Home
                                            </option>
                                            <option value="about_us"
                                                {{ isset($editimage) && $editimage->image_section == 'about_us' ? 'selected' : '' }}>
                                                About Us
                                            </option>
                                            <option value="our_products"
                                                {{ isset($editimage) && $editimage->image_section == 'our_products' ? 'selected' : '' }}>
                                                Our
                                                Products</option>
                                            <option value="blogs"
                                                {{ isset($editimage) && $editimage->image_section == 'blogs' ? 'selected' : '' }}>
                                                Blogs
                                            </option>
                                            <option value="why_us"
                                                {{ isset($editimage) && $editimage->image_section == 'why_us' ? 'selected' : '' }}>
                                                Why Us
                                            </option>
                                            <option value="social_link"
                                                {{ isset($editimage) && $editimage->image_section == 'social_link' ? 'selected' : '' }}>
                                                Social Link
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" id="alignment-options" style="{{ isset($editimage) && $editimage->alignment !== null ? 'display: block;' : 'display: none;' }}">
                                        <label for="alignment" class="form-label fw-semibold">Alignment</label>
                                        <select class="form-select" id="alignment" name="alignment">
                                            <option value="" disabled>Select alignment
                                            </option>
                                            <option value="left" {{ isset($editimage) && $editimage->alignment == 'left' ? 'selected' : '' }}>Left</option>
                                            <option value="right" {{ isset($editimage) && $editimage->alignment == 'right' ? 'selected' : '' }}>Right</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputGroupFile02" class="form-label fw-semibold">Image File</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile02"
                                                name="image_file" accept="image/*">
                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                        </div>
                                        @if (!empty($editimage->file_path))
                                            <div class="mt-2" id="image-preview">
                                                <img src="{{ asset('public/assets/front_images/' . $editimage->file_path) }}"
                                                    alt="Current Image" class="img-thumbnail" style="max-width: 150px;">
                                                <i class="bi bi-trash-fill text-danger" id="delete-image-btn"
                                                    data-id="{{ $editimage->id }}"></i>
                                            </div>
                                        @endif
                                        <div id="image-message"></div>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-12">
                                        <label for="editor" class="form-label fw-semibold">Details</label>
                                        <textarea class="form-control" id="editor" name="details">{{ old('content', $editimage->details ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Quick Example-->
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<x-footer-component />
<!-- resources/views/your-view.blade.php -->

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    $(document).ready(function() {
        $(document).on('click', '#delete-image-btn', function() {
            let imageId = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this action!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ url('/delete-single-image') }}/" + imageId,
                        type: 'GET',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Add this if you’re using CSRF tokens
                        },
                        success: function(response) {
                            $('#image-preview').fadeOut(300, function() {
                                $(this).remove();
                            });

                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            );
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Error!',
                                xhr.responseJSON?.error ||
                                'Failed to delete the image.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const sectionSelect = document.getElementById('image_section');
        const alignmentOptions = document.getElementById('alignment-options');

        function toggleAlignment() {
            if (sectionSelect.value === 'about_us') {
                alignmentOptions.style.display = 'block';
            } else {
                alignmentOptions.style.display = 'none';
            }
        }

        // Initial check on page load
        toggleAlignment();

        // Check on change
        sectionSelect.addEventListener('change', toggleAlignment);
    });

</script>
