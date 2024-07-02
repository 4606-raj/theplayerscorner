@extends('admin.layouts.main')

@section('content')

<div class="page-header d-xl-flex d-block flex-column align-items-start">
    <div class="page-leftheader mb-4">
        <h4 class="page-title">All<span class="font-weight-normal text-muted ml-2">Blogs</span></h4>
    </div>

    <x-flash />

    <div class="card">
        <div class="card-header border-bottom-0">
            <div class="card-title">Blogs List</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap border-bottom news">
                    <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">Title</th>
                            <th class="wd-15p border-bottom-0">Cover Image</th>
                            <th class="wd-15p border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td><img src="{{ $blog->cover_image }}" width="100px" alt=""></td>
                                <td>
                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn second-btn"> <i class="bi bi-pencil-square"></i> Edit</a>
                                    <button type="button" data-url="{{ route('admin.blogs.destroy', $blog->id) }}" class="btn btn-danger delete-btn"><i class="bi bi-trash3-fill"></i> Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <script>
        $('body').on('click', '.delete-btn', function(e) {
                if(!confirm('Are You Sure ?'))
                    exit();
                
                url = $(e.target).data('url');
                console.log(url);
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        location.reload();
                    }
                })
            })
    </script>
@endpush