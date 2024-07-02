@extends('admin.layouts.main')

@section('content')

<div class="page-header d-xl-flex d-block flex-column align-items-start">
    <div class="page-leftheader mb-4">
        <h4 class="page-title">All<span class="font-weight-normal text-muted ml-2">Players</span></h4>
    </div>

    <x-flash />

    <div class="card">
        <div class="card-header border-bottom-0">
            <div class="card-title">[10] Players</div>
        </div>
        <div class="card-body">
            <div class="table-responsive" id="players-tbl">
                <table class="table table-bordered text-nowrap border-bottom teams">
                    <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">Name</th>
                            <th class="wd-15p border-bottom-0">Photo</th>
                            <th class="wd-15p border-bottom-0">Squad Number</th>
                            <th class="wd-15p border-bottom-0">Type</th>
                            <th class="wd-15p border-bottom-0">Captain</th>
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
        var table = $('.teams').DataTable({
        "ajax": "{{ route('players.index') }}",
        initComplete: function() {
            var dataTableFilterLabel = $('div.dataTables_filter label');
            var dataTableFilterInput = dataTableFilterLabel.find('input');
            dataTableFilterLabel.contents().filter(function() {
                return this.nodeType === Node.TEXT_NODE;
            }).remove();
            dataTableFilterInput.detach();
            dataTableFilterLabel.after(dataTableFilterInput);
            
            $('div.dataTables_filter input')
                .attr('autocomplete', 'off')
                .attr('placeholder', 'Search...')
                .attr('class', 'pl-searchInput');
            
            // Create a new parent div
            var newParentDiv = $('<div class="dataTables_controls"></div>');
            
            // Append dataTables_length and dataTables_filter to the new parent div
            $('div.dataTables_length').appendTo(newParentDiv);
            $('div.dataTables_filter').appendTo(newParentDiv);
            
            // Prepend the new parent div to the container
            newParentDiv.prependTo('.dataTables_wrapper');
        },
            columns: [
                {name: 'name', data: 'name'},
                {name: 'photo', data: 'photo'},
                {name: 'squad_number', data: 'squad_number'},
                {name: 'type', data: 'type'},
                {name: 'captain', data: 'captain'},
                {name: 'action', data: 'action'},
            ]
        });

        $('body').on('click', '.delete-btn', function(e) {
            if(!confirm('Are You Sure ?'))
                return;
            
            id = $(e.target).data('id');
            $.ajax({
                url: `{{ url('admin/players/') }}/${id}`,
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