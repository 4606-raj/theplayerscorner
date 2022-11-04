@extends('admin.layouts.main')

@section('content')

<div class="page-header d-xl-flex d-block flex-column align-items-start">
    <div class="page-leftheader mb-4">
        <h4 class="page-title">Add<span class="font-weight-normal text-muted ml-2">News</span></h4>
    </div>

    <x-flash />

    <form action="{{ route('news.store') }}" method="POST" class="w-100" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-12 col-md-12">
        
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <h3 class="card-title">Team Details Here </h3>
                    </div>
                    <div class="card-body pb-2">
                        
                        <label class="form-label">URL</label>
                        <div class="row row-sm">
                            <div class="col-lg">
                                <input class="form-control mb-4" placeholder="URL" type="text" name="url" required>
                            </div>
                        </div>
                        
                        <label class="form-label">Photo</label>
                        <div class="row row-sm">
                            <div class="col-lg">
                                <input class="form-control mb-4" placeholder="Image" type="file" name="photo" required>
                            </div>
                        </div>

                        <div class="row row-sm">
                            <div class="col-lg text-center">
                                <button class="btn btn-primary mt-4 mb-0">Submit</button>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
        
    </form>


@endsection
