@extends('admin.layouts.main')

@section('content')

<div class="page-header d-xl-flex d-block flex-column align-items-start">
    <div class="page-leftheader mb-4">
        <h4 class="page-title">All<span class="font-weight-normal text-muted ml-2">News</span></h4>
    </div>

    <x-flash />

    <div class="card">
        <div class="card-header border-bottom-0">
            <div class="card-title">Basic DataTable</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap border-bottom news">
                    <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">URL</th>
                            <th class="wd-15p border-bottom-0">Photo</th>
                            <th class="wd-15p border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <script>
        $(document).ready(function() {
            var table = $('.news').DataTable({
                "ajax": "{{ route('news.index') }}",
                columns: [
                    {name: 'url', data: 'url'},
                    {name: 'photo', data: 'photo'},
                    {name: 'action', data: 'action'},
                ]
            });

            $('body').on('click', '.delete-btn', function(e) {
                if(!confirm('Are You Sure ?'))
                    return;
                
                id = $(e.target).data('id');
                $.ajax({
                    url: `{{ url('admin/news/') }}/${id}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        "id": id,
                    },
                    success: function(response) {
                        console.log(response);
                        table.ajax.reload();
                    }
                })
            })
            
} );
    </script>
@endpush