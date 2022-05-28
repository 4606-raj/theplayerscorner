@extends('admin.layouts.main')

@section('content')

<div class="page-header d-xl-flex d-block flex-column align-items-start">
    <div class="page-leftheader mb-4">
        <h4 class="page-title">Add<span class="font-weight-normal text-muted ml-2">Player</span></h4>
    </div>

    <x-flash />

    <form action="{{ route('players.store') }}" method="POST" class="w-100" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-12 col-md-12">
        
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <h3 class="card-title">Player Details Here </h3>
                    </div>
                    <div class="card-body pb-2">
                        
                        <div class="row">

                            <div class="form-group col-6">
                                <label class="form-label">Name</label>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <input class="form-control mb-4" value="{{ old('name') }}" placeholder="Name" type="text" name="name" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group col-6">
                                <label class="form-label">Email</label>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <input class="form-control mb-4" value="{{ old('email') }}" placeholder="Email" type="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-6">
                                <label class="form-label">Short Bio</label>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <textarea class="form-control mb-4" placeholder="Short Bio" type="text" name="short_bio" required>{{ old('squad_number') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-6">
                                <label class="form-label">Photo</label>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <input class=" mb-4" placeholder="Image" type="file" name="photo" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-6">
                                <label class="form-label">Squad Number</label>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <input class="form-control mb-4" value="{{ old('squad_number') }}" placeholder="Squad Number" type="text" name="squad_number" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-6">
                                <label class="form-label">Type</label>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <select class="form-control mb-4" name="type" required>
                                            <option value="" selected disabled>select type</option>
                                            <option value="1">defender</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-6">
                                <li class="list-group-item">
                                    Captain
                                    <div class="material-switch pull-right">
                                        <input id="someSwitchOptionSuccess" name="is_captain" type="checkbox"/>
                                        <label for="someSwitchOptionSuccess" class="label-success"></label>
                                    </div>
                                </li>
                            </div>

                            <div class="form-group col-6">
                                <label class="form-label">Team</label>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <select class="form-control mb-4" name="team_id" required>
                                            <option value="" selected disabled>select team</option>
                                            @foreach ($teams as $team)
                                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
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
