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
                            <h1>Contact</h1>
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
        <li class="uk-active"><span>Contact</span>
        </li>
    </ul>
</div>

<div class="tm-bottom-a-box  ">
    <div class="uk-container uk-container-center">
        <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1 uk-row-first">
                <div class="uk-panel">
                    <div class="contact-page">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="contact-title">
                                    <h2>CONTACT US</h2>
                                </div>
                                <div class="contact-text">If you are a parent of a young football-loving player and you are on the lookout for the right club with great values and endless opportunities, then look no further.</div>
                            </div>
                            <div class="uk-width-1-1">
                                <div class="contact-socials-wrap">
                                    <ul class="contact-socials">
                                        <li><a href="https://www.instagram.com/southall_athletic/?hl=en" target="_blank"><span class="uk-icon-instagram"></span></a></li>
                                        <li><a href="https://www.facebook.com/SouthallAthletic/" target="_blank"><span class=" uk-icon-facebook"></span></a></li>
                                        <li><a href="https://twitter.com/southall_afc" target="_blank"><span class="uk-icon-twitter"></span></a></li>
                                        <li><a href="#"><span class="uk-icon-linkedin"></span></a></li>
                                        <li><a href="https://www.youtube.com/channel/UC5puOkk0k-yIfngkssGtzWA" target="_blank"><span class="uk-icon-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid uk-flex-center" data-uk-grid-match="{target:'.contact-enquiries'}">
                            <div class="uk-width-1-2 uk-panel">
                                <div style="min-height: 139px;" class="contact-enquiries">
                                    <!-- <div class="title">HEAD OFFICE</div> -->
                                    <span>Perivale Park</span>

                                    <div class="phone"><i class="uk-icon-phone"></i>(020) 3289 5010</div>
                                    <div class="mail">
                                        <i class="uk-icon-envelope"></i>
                                        <a href="malto:info@southallathleticfc.com">
                                            info@southallathleticfc.com
                                        </a>
                                    </div>
                                    <div class="location"><i class="uk-icon-map-marker"></i>22 Betham Road Greenford Middlesex UB6 8RZ <br>
                                        <span>(Access via Cowgate Road, Greenford, Middlesex UB6 8HQ)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-width-1-2 uk-panel">
                                <div style="min-height: 139px;" class="contact-enquiries">
                                    <!-- <div class="title">HEAD OFFICE</div> -->
                                    <span>Norwood Hall Playing Fields</span>

                                    <div class="phone"><i class="uk-icon-phone"></i>(020) 3289 5010</div>
                                    <div class="mail">
                                        <i class="uk-icon-envelope"></i>
                                        <a href="malto:info@southallathleticfc.com">
                                            info@southallathleticfc.com
                                        </a>
                                    </div>
                                    <div class="location"><i class="uk-icon-map-marker"></i>Norwood Green Road Southall Middlesex UB2 4LA <br>
                                        <span>(Behind Khalsa Primary School – access via Tentelow Lane, Southall UB2 4JA)</span>
                                    </div>
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

<!-- Map & Contact Us Section START -->
<div class="tm-bottom-e-box tm-full-width  ">
    <div class="uk-container uk-container-center">
        <section id="tm-bottom-e" class="tm-bottom-e uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <div class="map-wrap">

                        <div class="contact-form-wrap uk-flex">
                            
                            <div class="uk-container uk-container-center uk-flex-item-1">
                                <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                    <div class="uk-width-5-10 contact-left uk-vertical-align contact-left-wrap">
                                        <div class="contact-info-lines uk-vertical-align-middle">
                                            <div class="item phone"><span class="icon"><i class="uk-icon-phone"></i></span>(020) 3289 5010</div>
                                            <div class="item mail"><span class="icon"><i class="uk-icon-envelope"></i></span><a href="malto:info@southallathleticfc.com">info@southallathleticfc.com</a></div>
                                            <div class="item location"><span class="icon"><i class="uk-icon-map-marker"></i></span>Brentside Playing Fields, Ruislip</div>
                                        </div>
                                    </div>

                                    
                                    <!-- Contact Us Section START -->

                                    <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                        <div class="contact-form uk-height-1-1">
                                            <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                <div class="contact-form-title">
                                                    <h2>DROP US A LINE</h2>
                                                </div>
                                                <div id="aiContactSafe_form_1">
                                                    <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                        <div class="contentpaneopen">
                                                            <div id="aiContactSafeForm">
                                                                <form method="post" id="adminForm_1" name="adminForm_1">
                                                                    <div id="displayAiContactSafeForm_1">
                                                                        <div class="aiContactSafe" id="aiContactSafe_contact_form">
                                                                            <div class="aiContactSafe" id="aiContactSafe_info"></div>

                                                                            <div class="aiContactSafe_row" id="aiContactSafe_row_aics_name">
                                                                                <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_name"><label for="aics_name">Name</label></span>&nbsp;
                                                                                    <label class="required_field">*</label>
                                                                                </div>
                                                                                <div class="aiContactSafe_contact_form_field_right">
                                                                                    <input name="aics_name" id="aics_name" class="textbox" placeholder="Name" value="" type="text">
                                                                                </div>
                                                                            </div>

                                                                            <div class="aiContactSafe_row" id="aiContactSafe_row_aics_email">
                                                                                <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_email"><label for="aics_email">E-mail</label></span>&nbsp;
                                                                                    <label class="required_field">*</label>
                                                                                </div>
                                                                                <div class="aiContactSafe_contact_form_field_right">
                                                                                    <input name="aics_email" id="aics_email" class="email" placeholder="Email" value="" type="text">
                                                                                </div>
                                                                            </div>
                                                                            

                                                                            <div class="aiContactSafe_contact_form_field_right uk-form-select contact-drop" data-uk-form-select>
                                                                                <span>Nature of enquiry:</span>
                                                                                <select>
                                                                                    <option value="">General enquiry</option>
                                                                                    <option value="">Player Registration</option>
                                                                                    <option value="">Marketing</option>
                                                                                    <option value="">Partnership Opportunities</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="aiContactSafe_row" id="aiContactSafe_row_aics_message">
                                                                                <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_message"><label for="aics_message">Message</label></span>&nbsp;
                                                                                    <label class="required_field">*</label>
                                                                                </div>
                                                                                <div class="aiContactSafe_contact_form_field_right">
                                                                                    <textarea name="aics_message" id="aics_message" cols="40" rows="10" class="editbox" placeholder="Message"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                    <div id="aiContactSafeBtns">
                                                                        <div id="aiContactSafeButtons_center" style="clear:both; display:block; text-align:center;">
                                                                            <table style="margin-left:auto; margin-right:auto;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div id="aiContactSafeSend_loading_1">&nbsp;</div>
                                                                                        </td>
                                                                                        <td id="td_aiContactSafeSendButton">
                                                                                            <input id="aiContactSafeSendButton" value="Send" type="submit">
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <!-- Contact Us Section END -->
                                    
                                </div>
                            </div>
                        </div>
                        <div id="main-map">
                            <div class="map-overlay"></div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9929.044663455878!2d-0.3478684!3d51.5267695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x37d4a13908bc9231!2sBrentside%20Playing%20Fields!5e0!3m2!1sen!2sin!4v1652177917404!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Map & Contact Us Section END -->

@endsection