@extends('admin.layouts.main')

@section('content')

<div class="page-header d-xl-flex d-block flex-column align-items-start">
    <div class="page-leftheader mb-4">
        <h4 class="page-title">All<span class="font-weight-normal text-muted ml-2">Gallery</span></h4>
    </div>
</div>

<div class="card">
    <div class="card-header border-bottom-0">
        <div class="card-title">Add New Images</div>
    </div>
    <div class="card-body">

        <form action="{{ route('gallery.store') }}" method="post" id="dropzone" class="dropzone">
            @csrf
        </form>

        <div class="m-4">
            <button type="button" id="reload" class="btn btn-default">Reload</button>
        </div>
        
    </div>

<div class="page-header d-xl-flex d-block flex-column align-items-start">
    <div class="page-leftheader mb-4">
        <h4 class="page-title">View<span class="font-weight-normal text-muted ml-2">Gallery</span></h4>
    </div>

    <x-flash />

    <div class="card">
        <div class="card-header border-bottom-0">
            <div class="card-title">All Images</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap border-bottom teams">
                    <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">Name</th>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" integrity="sha512-WvVX1YO12zmsvTpUQV8s7ZU98DnkaAokcciMZJfnNWyNzm7//QRV61t4aEr0WdIa4pe854QHLTV302vH92FSMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        $(document).ready(function() {
            var table = $('.teams').DataTable({
                "ajax": "{{ route('gallery.index') }}",
                columns: [
                    {name: 'photo', data: 'photo'},
                    {name: 'action', data: 'action'},
                ]
            });

            $('body').on('click', '.delete-btn', function(e) {
                if(!confirm('Are You Sure ?'))
                    return;
                
                id = $(e.target).data('id');
                $.ajax({
                    url: `{{ url('admin/gallery/') }}/${id}`,
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

            $('#reload').click(function() {
                location.reload();
            })

            
            
} );
    </script>

<script>
    Dropzone.options.dropzone = {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
        return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file) {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                type: 'DELETE',
                url: `{{ url("admin/gallery") }}/${name}`,
                data: {filename: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ? 
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            
        success: function(file, response) {
            console.log(response);
        },
        error: function(file, response) {
            return false;
        }
    }
</script>
    
@endpush