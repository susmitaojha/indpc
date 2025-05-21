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
                    <h3 class="mb-0">Image Management</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Image Management</li>
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
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Image Table</h3>
                            <a href="{{ url('/add-edit-image/0') }}"><button class="btn btn-info" type="button">Add
                                    Image</button></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image Name</th>
                                        <th>Section</th>
                                        <th>Preview</th>
                                        <th>Uploaded At</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($images as $image)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $image->image_name }}</td>
                                            <td>{{ ucfirst(str_replace('_', ' ', $image->image_section)) }}</td>
                                            <td>@if ($image->file_path)
                                                    <span id="image-preview">
                                                        <img src="{{ asset('public/assets/front_images/' . $image->file_path) }}" alt="{{ $image->image_name }}" width="100" />
                                                        <i class="bi bi-trash-fill text-danger" id="delete-image-btn" data-id="{{ $image->id }}"></i>
                                                    </span>
                                                @endif
                                            </td>
                                            <td>{{ $image->created_at->format('d-m-Y') }}</td>
                                            <td>
                                                <a href="{{ url('add-edit-image/' . $image->id) }}"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="{{ url('delete-image/' . $image->id) }}"
                                                    onclick="return confirmDelete()"><i class="fa fa-trash-o"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->
<x-footer-component />
<script>
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
</script>
