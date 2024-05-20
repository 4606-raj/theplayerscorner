<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback !!</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Star Rating --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>
<body>
    <div class="container" id="testimonial-con">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center mb-2">Write a few words About Us !!</h2>
    
                <form id="testimonialForm" class="form-container">
                    <div class="row">
                        
                        {{-- Rating block --}}
                        <div class="input-bl rating-bl col-lg-12 col-md-12" id="half-stars-example">
                            <div class="rating-group">
                                <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
                                <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                                <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
                                <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
                                <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
                                <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
                                <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
                                <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
                                <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
                                <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
                                <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
                                <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                
                                {{-- Profile picture --}}
                                <div class="input-bl col-lg-2 col-md-3 col-sm-3 col-12 pro-pic">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-lg-10 col-md-9 col-sm-9 d-flex align-items-center justify-content-end ps-0 row-1">
                                    <div class="row" style="width: 100%">
                                        {{-- Name --}}
                                        <div class="input-bl col-lg-6">
                                            <input type="text" class="form-control" id="name" name="name" required>
                                            <label for="name" class="form-label">Name</label>
                                        </div>
                        
                                        {{-- Title --}}
                                        <div class="input-bl col-lg-6">
                                            <input type="text" class="form-control" id="title" name="title" required>
                                            <label for="title" class="form-label">Title</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- User's Feedback --}}
                    <div class="input-bl">
                        <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
                        <label for="review" class="form-label">Your feedback</label>
                    </div>
    
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="primary-md-btn feedback-sb-btn">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="congrats">
        <div class="el ang-a animated d-none" data-in="zoomOut"></div>
        <div class="el ang-b animated d-none" data-in="zoomOut"></div>
        <div class="el glow animated d-none" data-in="fadeIn"></div>
        <div class="el bg bg-1 animated d-none" data-in="fadeIn" data-out="zoomOut"></div>
        <div class="el dots animated d-none"> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i></div>
        <div class="el bg bg-2 animated d-none" data-in="zoomIn" data-out="bounceOut"></div>
        <div class="el ang-c animated d-none" data-in="zoomOut"></div>
        <div class="el shine animated d-none" data-in="shineIn" data-out="fadeOut"></div>
        <div class="el text animated d-none" data-in="zoomOutIn" data-out="zoomOutLeft">Feedback Sent!!</div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>
</body>
</html>