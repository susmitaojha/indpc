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
                    <h3 class="mb-0">Blogs Management</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs Management</li>
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
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Blogs Table</h3>
                            <a href="{{ url('/add-edit-blog/0') }}"><button class="btn btn-info" type="button">Add
                                    Blogs</button></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Blog</th>
                                        <th>Uploaded At</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blog as $blog_row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $blog_row->title }}</td>
                                            <td>{{ $blog_row->content }}</td>
                                            <td>{{ $blog_row->created_at->format('d-m-Y') }}</td>
                                            <td>
                                                <a href="{{ url('add-edit-blog/' . $blog_row->id) }}"><i
                                                        class="fa fa-edit"></i> </a>
                                                {{-- <a href="{{ url('admin/delete-banner/' . $image->id) }}"
                                        onclick="return confirmDelete()"><i class="fa fa-trash-o"></i> </a> --}}
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
