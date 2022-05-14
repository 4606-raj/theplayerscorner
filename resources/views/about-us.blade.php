@extends('layouts.main')

@section('content')

<div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
    <div class="uk-container uk-container-center">
        <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div class="uk-width-1-1 uk-row-first">
                <div class="uk-panel">
                    <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('{{ asset('public/images/head-bg.jpg') }}');">
                        <img class="uk-invisible" src="{{ asset('public/images/head-bg.jpg') }}" alt="" height="290" width="1920">
                        <div class="uk-position-cover uk-flex uk-flex-center head-title">
                            <h1>About</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="uk-container uk-container-center alt">
    <ul class="uk-breadcrumb">
        <li><a href="index.html">Home</a>
        </li>
        <li class="uk-active"><span>About Us</span>
        </li>
    </ul>
</div>

<div class="tm-bottom-a-box  ">
    <div class="uk-container uk-container-center ">
        <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div class="uk-width-1-1 uk-row-first">
                <div class="uk-panel">
                    <div class="about-team-page-top-wrap">
                        <div class="uk-grid">
                            <div class="uk-width-large-5-10 uk-width-small-1-1 left-part">
                                <div class="top-title">
                                    <h2>Few  words<span> About Us</span></h2>
                                </div>
                                <p class="sub-title">Southall Athletic F.C. </p>
                                <p>was started primarily due to the lack of 11-a-side football opportunities within the community, this coincided with the figures released by the FA on how underrepresented the South-East Asian community was in football. </p>
                                <p>We are looking to become the first ALL-INCLUSIVE grassroots club offering football for adults, both men and women; youth, both boys and girls; and also, football for those who are disabled.</p>
                            </div>
                            <div class="uk-width-large-5-10 uk-width-small-1-1">
                                <div class="top-banner uk-cover-background uk-position-relative" style="height: 420px; background-image: url('{{ asset('public/images/about-team-banner.jpg') }}');">
                                    <img class="uk-invisible" src="{{ asset('public/images/about-team-banner.jpg') }}" alt="">
                                    <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle inner">
                                        “It’s not whether you get knocked
                                        <br> down; it’s whether you get up.”
                                        <!-- <div class="name">Vince Lombardi</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="about-team-page-top-wrap uk-container uk-container-center our-aim">
    <div class="uk-grid">
        <!-- Our Aim -->
        <div class="uk-width-large-5-10 uk-width-small-1-1 left-part">
            <div class="top-title">
                <h2>Our <span>Aim</span></h2>
            </div>
            <p>Our aim is to educate our community about football. So, as a community we can be taken seriously within the game. The consensus was that other local clubs were non-representative of our community and did little in the way of benefiting the community. They were also not a visible presence in the community, three things we wanted to ensure we could change.</p>
        </div>
        
        <!-- Our Objectives -->
        <div class="uk-width-large-5-10 uk-width-small-1-1 left-part our-Objectives">
            <div class="top-title">
                <h2>Our <span>Objectives</span></h2>
            </div>
            <ul>
                <li><p>To address the issue of how underrepresented the South Asian and the BAME community as whole are in football.</p></li>
                <li><p>To focus on actions that will benefit the whole community.</p></li>
                <li><p>To create a visible presence and an identity within the community.</p></li>
            </ul>
        </div>
    </div>
</div>

<!-- WHO ARE WE? -->
<div class="about-team-page-top-wrap uk-container uk-container-center our-aim">
    <div class="uk-grid">
        <!-- Our Aim -->
        <div class="uk-width-small-1-1 left-part">
            <div class="top-title">
                <h2>WHO ARE <span>WE?</span></h2>
            </div>
            <p>We are already a Middlesex affiliated football club (X-MID2820). We are a community grassroots football club, operating as a non-profit, looking to become the first ALL-INCLUSIVE club in Middlesex.</p> 
            <p>We currently have adult men's and women's teams and will be introducing, for the first time, youth teams this summer.</p>
        </div>
    </div>
</div>

<!-- WHERE ARE WE FROM? -->
<div class="about-team-page-top-wrap uk-container uk-container-center our-last-wr">
    <div class="uk-grid">
        <!-- Our Aim -->
        <div class="uk-width-small-1-1 left-part">
            <div class="top-title">
                <h2>WHERE ARE WE <span>FROM?</span></h2>
            </div>
            <p>Our home, Ealing, is ranked as the 18th most deprived London borough out of the 33 Local Authorities in the region, and 87th most deprived out of 326 Local Authorities nationally. </p>
        </div>
    </div>
    <div>

        <div id="chart-area"></div>

        <p>51.01% of our population is represented by the BAME community, which is significantly above the national average of 14.6%.</p>
    </div>
    <!-- <div class="uk-grid">
    </div> -->
</div>

@endsection

@push('script')
<script src="https://uicdn.toast.com/chart/latest/toastui-chart.min.js"></script>
<script>
    const el = document.getElementById('chart-area');
  const data = {
    // categories: ['Browser'],
    series: [
      {
        name: 'Asian',
        data: 48.99,
      },
      {
        name: 'Black',
        data: 10.89,
      },
      {
        name: 'Mixed',
        data: 17.71,
      },
      {
        name: 'Other',
        data: 5.99,
      },
      {
        name: 'White',
        data: 29.68,
      },
    ],
  };
  const options = {
    chart: { title: 'Ethnicity Data', width: 600, height: 400 },
  };

  const chart = toastui.Chart.pieChart({ el, data, options });
</script>
@endpush