@extends('layouts.main')

@section('content')

<section class="container" id="lg-container">
  <h2 class="lg-hdr-1" id="redirect-1">Privacy Preference Centre</h2>
  
    <p class="lg-des-txt">
        When you visit any website, it may store or retrieve information on your browser, mostly in the form of cookies. This information might be about you, your preferences or your device and is mostly used to make the site work as you expect it to. The information does not usually directly identify you, but it can give you a more personalized web experience. Because we respect your right to privacy, you can choose not to allow some types of cookies. Click on the different category headings to find out more and change our default settings. However, blocking some types of cookies may impact your experience of the site and the services we are able to offer. <a href="https://cookiepedia.co.uk/giving-consent-to-cookies" target="_blank">Cookie Policy</a>  
    </p>

    <div class="primary-btn">
        <a href="http://127.0.0.1:8000/privacy-preference"><button>Allow All</button></a>
    </div>
    
    <br>
    <h2 class="lg-sub-hdr">Manage Consent Preferences</h2>
    <p class="lg-des-txt">
        <b>Strictly Necessary Cookies </b><br>
        <span style="color: #0549ce; font-weight: 500">Always Active</span>
    </p>
    
    <p class="lg-des-txt">
        These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you, which amount to a request for services, such as setting your privacy preferences, logging in, or filling in forms. You can set your browser to block or alert you about these cookies, but some parts of the site will not then work. These cookies do not store any personally identifiable information.
    </p>
    
    
    <br>
    <h2 class="lg-sub-hdr d-flex align-items-center">Performance Cookies
        
        <div class="form-check form-switch" style="margin-left: 30px; outline: none !important; border: none !important">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        </div>
    </h2>
    
    <p class="lg-des-txt">
        These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us to know which pages are the most and least popular and see how visitors move around the site. All information these cookies collect is aggregated and therefore anonymous. If you do not allow these cookies we will not know when you have visited our site and will not be able to monitor its performance.
    </p>
    
    <br>
    <h2 class="lg-sub-hdr d-flex align-items-center">Functional Cookies
        
        <div class="form-check form-switch" style="margin-left: 30px; outline: none !important; border: none !important">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        </div>
    </h2>
    
    <p class="lg-des-txt">
        These cookies enable the website to provide enhanced functionality and personalisation. They may be set by us or by third party providers whose services we have added to our pages. If you do not allow these cookies, then some or all of these services may not function properly.
    </p>
    
    <br>
    <h2 class="lg-sub-hdr d-flex align-items-center">Targeting Cookies
        
        <div class="form-check form-switch" style="margin-left: 30px; outline: none !important; border: none !important">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        </div>
    </h2>
    
    <p class="lg-des-txt">
        These cookies may be set through our site by our advertising partners. They may be used by those companies to build a profile of your interests and show you relevant adverts on other sites. They do not store directly personal information but are based on uniquely identifying your browser and internet device. If you do not allow these cookies, you will experience less targeted advertising.
    </p>
    <br>
    
    <div class="primary-btn">
        <a href="http://127.0.0.1:8000/privacy-preference"><button>Confirm My Choices</button></a>
    </div>
    

</section>



 @endsection