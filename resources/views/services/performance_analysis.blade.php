@extends('layouts.main')
@section('content')

    <section class="container" id="service-container">
        <div class="row">
            <div class="col-lg-auto col-md-auto position-relative">
                <div class="sr-bg-overlay"></div>
                {{-- service image --}}
                <div class="services-img-bl">
                    <img src="{{ asset('assets/images/services/service-2.jpg') }}" alt="services" >
                </div>
            </div>
            <!-- Services Content -->
            <div class="col-lg-8 col-md-8 sr-content-bl">
                <h4 class="sr-content-hdr">Performance Analysis <hr>
                
                    <div class="dot-highlighter">
                        <svg width="68" height="68" preserveAspectRatio="none"  viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_f_51_39)">
                            <path id="dot-shadow" d="M34 19.6035C41.9512 19.6035 48.3965 26.0488 48.3965 34C48.3965 41.9512 41.9512 48.3965 34 48.3965C26.0488 48.3965 19.6035 41.9512 19.6035 34C19.6035 26.0488 26.0488 19.6035 34 19.6035ZM36.4042 39.7586H31.5958L29.6091 42.4896L30.4066 44.9456C31.5666 45.3254 32.7795 45.5183 34 45.5172C35.2539 45.5172 36.4618 45.3156 37.5934 44.9456L38.3895 42.4896L36.4042 39.7586ZM24.3457 32.3761L22.4857 33.7265L22.4828 34C22.4828 36.4906 23.2732 38.7955 24.6164 40.68H27.3661L29.2708 38.0598L27.7908 33.4961L24.3457 32.3761ZM43.6543 32.3761L40.2092 33.4961L38.7292 38.0598L40.6325 40.68H43.3822C44.7744 38.7311 45.5211 36.3951 45.5172 34L45.5129 33.725L43.6543 32.3761ZM37.2968 22.9622L35.4396 24.3155V27.9391L39.3181 30.7565L42.5429 29.7098L43.3404 27.2581C41.8553 25.1996 39.7316 23.6894 37.2997 22.9622M30.7032 22.9622C28.271 23.6898 26.1474 25.2005 24.6624 27.2596L25.46 29.7098L28.6834 30.7565L32.5604 27.9391V24.3155L30.7032 22.9622Z" fill="#FFF17C"/>
                            </g>
                            <path d="M34 24C39.523 24 44 28.477 44 34C44 39.523 39.523 44 34 44C28.477 44 24 39.523 24 34C24 28.477 28.477 24 34 24ZM35.67 38H32.33L30.95 39.897L31.504 41.603C32.3097 41.8668 33.1522 42.0008 34 42C34.871 42 35.71 41.86 36.496 41.603L37.049 39.897L35.67 38ZM27.294 32.872L26.002 33.81L26 34C26 35.73 26.549 37.331 27.482 38.64H29.392L30.715 36.82L29.687 33.65L27.294 32.872ZM40.706 32.872L38.313 33.65L37.285 36.82L38.607 38.64H40.517C41.4841 37.2863 42.0027 35.6636 42 34L41.997 33.809L40.706 32.872ZM36.29 26.333L35 27.273V29.79L37.694 31.747L39.934 31.02L40.488 29.317C39.4564 27.8871 37.9813 26.8381 36.292 26.333M31.71 26.333C30.0206 26.8384 28.5455 27.8877 27.514 29.318L28.068 31.02L30.307 31.747L33 29.79V27.273L31.71 26.333Z" fill="#FBE746"/>
                            <defs>
                            <filter id="filter0_f_51_39" x="0.103516" y="0.103516" width="67.793" height="67.793" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="9.75" result="effect1_foregroundBlur_51_39"/>
                            </filter>
                            </defs>
                        </svg>     
                    </div>
                </h4>

                {{-- servies text --}}
                <div class="sr-dec-txt">
                    <p>
                        We pride ourselves in offering pro-level insights and guidance with our bespoke performance analysis service – regardless of the level. <br> <br>
                        We meticulously analyse your game footage to provide a comprehensive analysis of your performance. We ensure that you receive expert insights and tailored guidance designed to raise your game. <br> <br>
                        Our professionally presented analysis service comes with personalised coaching points, full annotations, a SWOT analysis, and more – helping players elevate their performances, and ultimately highlighting their unique talents – perfect for sharing on social media or showcasing to coaches, agents, and scouts. <br>
    
                    </p>
                </div>
            </div>

        </div>
    </section>

    @endsection
