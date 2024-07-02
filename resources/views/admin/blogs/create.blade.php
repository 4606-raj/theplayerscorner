@extends('admin.layouts.main')

@section('content')

<div class="page-header d-xl-flex d-block flex-column align-items-start">
    <div class="page-leftheader mb-4">
        <h4 class="page-title">Add<span class="font-weight-normal text-muted ml-2">Blog</span></h4>
    </div>

    <x-flash />

    <form action="{{ route('admin.blogs.store') }}" method="POST" class="w-100" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-12 col-md-12">
        
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <h3 class="card-title">Blog Details Here </h3>
                    </div>
                    <div class="card-body">
                        
                        <label class="form-label">Title</label>
                        <div class="row row-sm">
                            <div class="col-lg">
                                <input class="form-control mb-4" placeholder="Title" type="text" name="title" required>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-6">
                                <label class="form-label">Author</label>
                                <div class="col-lg px-0">
                                    <input class="form-control mb-4" placeholder="Author" type="text" name="author" required>
                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Category</label>
                                <div class="col-lg px-0">
                                    <input class="form-control mb-4" placeholder="Category" type="text" name="category" required>
                                </div>
                            </div>
                        </div>
                        
                        <label class="form-label">Cover Image</label>
                        <div class="row row-sm">
                            <div class="col-lg">
                                <input class="form-control mb-4" placeholder="Image" type="file" name="cover">
                            </div>
                        </div>

                        <div class="form-group content-input">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content"></textarea>
                        </div>

                        <div class="row row-sm">
                            <div class="col-lg text-center">
                                <button class="btn primary-btn mt-4 mb-0">Submit</button>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
        
    </form>


@endsection

@push('script')
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <script>
        // CKEDITOR.replace('content');
        ClassicEditor
                                .create( document.querySelector( '#content' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );

    </script>
@endpush