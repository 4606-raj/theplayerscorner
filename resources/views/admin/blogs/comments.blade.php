@extends('admin.layouts.main')

@section('content')

<div class="page-header d-xl-flex d-block flex-column align-items-start">
    <div class="page-leftheader mb-4">
        <h4 class="page-title">Blog<span class="font-weight-normal text-muted ml-2">Comments</span></h4>
    </div>

    <x-flash />

    <div class="card">
        <div class="card-header border-bottom-0">
            <div class="card-title">Comments List</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap border-bottom news">
                    <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">Name</th>
                            <th class="wd-15p border-bottom-0">Comment</th>
                            <th class="wd-15p border-bottom-0">Email</th>
                            <th class="wd-15p border-bottom-0">Website</th>
                            <th class="wd-15p border-bottom-0">Date</th>
                            <th class="wd-15p border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($comments as $comment)
                            <tr>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $comment->website }}</td>
                                <td>{{ $comment->created_at }}</td>
                                <td>
                                    <button type="button" data-url="{{ route('admin.blogs.comments.destroy', $comment->id) }}" class="btn btn-danger delete-btn"><i class="bi bi-trash3-fill"></i> Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Comments</td>
                            </tr>
                        @endforelse
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