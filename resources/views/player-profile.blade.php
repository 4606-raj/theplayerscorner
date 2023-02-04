@extends('layouts.main')

@section('content')

    {{-- Teams section --}}
    <section class="teams-sec">
        <div class="container">

            {{-- Player Cover image --}}
            <div class="player-cover-img col-lg-12">
                <img src="{{ asset('assets/images/teams-images/player-profile/1-Veer-Bansal.png') }}" alt="">
            </div>
            
            {{-- Player profile navigation Row --}}
            <nav>
                <div class="nav nav-tabs pl-pro-nav" id="nav-tab" role="tablist">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#show-profile" type="button" role="tab" aria-controls="show-profile" aria-selected="true">Home</button>
                  <button class="nav-link" id="stats-tab" data-bs-toggle="tab" data-bs-target="#show-stats" type="button" role="tab" aria-controls="show-stats" aria-selected="false">Stats</button>
                  <button class="nav-link" id="match-centre-tab" data-bs-toggle="tab" data-bs-target="#show-match-centre" type="button" role="tab" aria-controls="show-match-centre" aria-selected="false">Match Centre</button>
                  <button class="nav-link active" id="show-gallery-tab" data-bs-toggle="tab" data-bs-target="#show-gallery" type="button" role="tab" aria-controls="show-gallery" aria-selected="false">Gallery</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">

                {{-- Player details Tab --}}
                <div class="tab-pane fade " id="show-profile" role="tabpanel" aria-labelledby="profile-tab">
                     {{-- Player details container --}}
                     <div class="player-details-con">
                        <h4>Player Details</h4>

                        <div class="table-responsive">
                            <table class="table tb-data">
                                {{-- <thead>
                                <tr class="top-hdrs">
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead> --}}
                                <tbody>
                                <tr class="side-hdrs">
                                    <th scope="row">Name</th>
                                    <td>Mark</td>
                                    <th scope="row">Weight</th>
                                    <td>150lbs</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">Gender</th>
                                    <td>Male</td>
                                    <th scope="row">Height</th>
                                    <td>5'9'</td>
                                </tr>
                                <tr>
                                    <th scope="row">BirthPlace</th>
                                    <td>Plano, USA</td>
                                    <th scope="row">Position</th>
                                    <td>Goalkeeper</td>
                                </tr>
                                <tr>
                                    <th scope="row">Position Detail</th>
                                    <td>Goalkeeper</td>
                                    <th scope="row">Preferred Side</th>
                                    <td>Unknow</td>
                                </tr>
                                <tr>
                                    <th scope="row">Preferred Foot</th>
                                    <td>Right</td>
                                    <th scope="row">Roster Category</th>
                                    <td>Senior</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Stats Tab --}}
                <div class="tab-pane fade" id="show-stats" role="tabpanel" aria-labelledby="stats-tab">
                    {{-- Player details container --}}
                    <div class="player-details-con">

                        <div class="table-responsive">
                            <table class="table tb-data">
                                <thead>
                                    <tr class="top-hdrs">
                                        <th scope="col">Year</th>
                                        <th scope="col">Team</th>
                                        <th scope="col">GP</th>
                                        <th scope="col">GS</th>
                                        <th scope="col">GS</th>
                                        <th scope="col">A</th>
                                        <th scope="col">YC</th>
                                        <th scope="col">RC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="side-hdrs">
                                        <th scope="row">DD/MM/YYYY</th>
                                        <td>OpenAged Men</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                {{-- Match Center Tab --}}
                <div class="tab-pane fade" id="show-match-centre" role="tabpanel" aria-labelledby="match-centre-tab">
                    
                    
                    {{-- Player details container --}}
                    <div class="player-details-con">

                        <div class="d-flex flex-wrap align-content-center mb-3">
    
                            {{-- All Competitions Filter --}}
                            <select class="filter-select form-select" aria-label=".form-select-lg example">
                                <option selected>All Competitions</option>
                                <option value="1">Friendly</option>
                                <option value="2">Goals Hayes Summer Tournament</option>
                                <option value="3">Harrow Youth Football League (HYFL)</option>
                                <option value="4">Junior Premier League (JPL)</option>
                                <option value="5">Middlesex Youth County Cup</option>
                                <option value="6">Middlesex Youth Football League (MYFL)</option>
                                <option value="7">Rectory Park Flexileague</option>
                                <option value="8">Sikh Youth UK Tournament</option>
                                <option value="9">Super 5 International Tournament (Netherlands)</option>
                                <option value="10">Super 5 North West League</option>
                                <option value="11">Super 5 North West Tournament</option>
                                <option value="12">Super 5 Women’s Legacy Tournament </option>
                            </select>
        
                            <h5 class="filter-h5">All Competitions</h5>
                        </div>
                        
                        {{-- Table container --}}
                        <div class="table-responsive">
                            <table class="table tb-data">
                                <thead>
                                    <tr class="top-hdrs">
                                        <th scope="col">Date</th>
                                        <th scope="col">Competition</th>
                                        <th scope="col">Match</th>
                                        <th scope="col">Result</th>
                                        <th scope="col">Appearance</th>
                                        <th scope="col">G</th>
                                        <th scope="col">A</th>
                                        <th scope="col">YC</th>
                                        <th scope="col">RC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="side-hdrs">
                                        <th scope="row">DD/MM/YYYY</th>
                                        <td>Super 5 International Tournament (Netherlands)</td>
                                        <td>Home Team v Away Team</td>
                                        <td>W</td>
                                        <td>Start</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr class="side-hdrs">
                                        <th scope="row">DD/MM/YYYY</th>
                                        <td>Sikh Youth UK Tournament</td>
                                        <td>Home Team v Away Team</td>
                                        <td>D</td>
                                        <td>Sub</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                {{-- Gallery Tab --}}
                <div class="tab-pane fade show active" id="show-gallery" role="tabpanel" aria-labelledby="show-gallery-tab">
                    <div class="player-details-con pl-gallery-sec">
                        <!-- Photos -->    
                        <div class="img-con">
                            <a href="{{ asset('storage/images/gallery/img-0-1.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                <img src="{{ asset('storage/images/gallery/img-0-1.jpg') }}" class="img-fluid">
                            </a>
                        </div>
                        
                        <div class="img-con">
                            <a href="{{ asset('storage/images/gallery/img-2.jpg') }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                <img src="{{ asset('storage/images/gallery/img-2.jpg') }}" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
              </div>

          
        </div>

    </section>

@endsection