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
                    <h3 class="mb-0">General Form</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs Form</li>
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
                            <div class="card-title">Blogs</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form role="form" action="{{ url('post-blog-add-edit') }}" method="POST"
                            enctype="multipart/form-data" class="card shadow-sm p-4">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog->id ?? 0 }}">

                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row g-3 mb-3">
                                    <div class="col-md-12">
                                        <label for="blog_title" class="form-label fw-semibold">Blog Title</label>
                                        <input type="text" class="form-control" id="blog_title" name="blog_title"
                                            value="{{ $blog->title ?? '' }}" placeholder="Enter Blog Title" required>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-12">
                                        <label for="editor" class="form-label fw-semibold">Blog Content</label>
                                        <textarea class="form-control" id="editor" name="blog_content">{{ old('content', $blog->content ?? '') }}</textarea>
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
</script>
