@extends('layouts.main')

@section('content')

<div class="container pri-tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="tab-1-tab" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">Privacy Policy</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab-2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Digital Privacy Policy</button>
        </li>
      </ul>
    
    <div class="tab-content" id="myTabContent">
        
        {{-- Privacy Policy --}}
        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-tab">
            <section class="container" id="lg-container">
              <h2 class="lg-hdr-1" id="redirect-1">Privacy Policy</h2>
            
            
              <h2 class="lg-sub-hdr">1. Introduction</h2>
              
              <p class="lg-des-txt">
                  The Southall Athletic Football Club (CIC) (‘Southall Athletic FC’) is committed to protecting the privacy and security of the personal information we collect from you and handling it responsibly.
                  This privacy notice describes how we collect, use and store personal information about you during and after any interaction with us. It also covers and protects all personal data that we receive from third parties with your consent.
                  Southall Athletic FC is a data controller. This means that we are responsible for deciding how we hold, use and store personal information about you. We are required under the data protection laws to notify you of the information contained in this privacy notice.
                  We may update this at any time so please check back at any time to view any changes.
                  It is important that you read this notice, together with any other privacy notice we may provide on specific occasions when we are collecting or processing personal information about you, so that you are aware of how and why we are using your personal information.
              </p>
              <br>
              <h2 class="lg-sub-hdr">2. Data Protection Principles</h2>
              <p class="lg-des-txt">
                  We will comply with all relevant data protection law (including the GDPR). This requires that the personal information we hold about you must be:
              </p>
              
              <ol type="1" >
                  <li>Used lawfully, fairly and in a transparent way.</li>
                  <li>Collected only for valid purposes that we have clearly explained to you and not used in any way that is incompatible with those purposes.</li>
                  <li>Relevant to the purposes we have told you about and limited only to those purposes.</li>
                  <li>Accurate and kept up to date.</li>
                  <li>Kept only if necessary for the purposes we have told you about.</li>
                  <li>Kept securely.</li>
              </ol>
              
              <br>
              <h2 class="lg-sub-hdr">3. The Kind of Information We Hold About You</h2>
              <p class="lg-des-txt">
                  Personal data, or personal information, means any information about an individual from which that person can be identified, whether directly or indirectly. It does not include data where the identity has been removed (anonymous data).
                  There are also "special categories" of sensitive personal data which require a higher level of protection.
                  We collect personal data from your interactions with us, for example when you register, sign up, or when you email or phone us.
                  The personal data we collect from you includes:
              </p>
              <ul type="square">
                  <li>The name and contact details when you register, sign up, enter competitions, or send any enquiry to Southall Athletic FC.</li>
                  <li>Your payment card and address details.</li>
                  <li>Your marketing preferences, including any consents you have given us or third parties.</li>
                  <li>Information about your use of our websites and apps.</li>
                  <li>Your communications with us. (For example, by email, social media, events, or enquiries).</li>
                  <li>Information about your attendance at training sessions, matches, events and tours.</li>
                  <li>Images and Videos may be taken as these events and all parts of the stadium are covered by CCTV.</li>
              </ul>
              
              <br>
              <h2 class="lg-sub-hdr">4. How Your Personal Information is Collected</h2>
              <p class="lg-des-txt">We typically collect personal information from you via:</p>
              <ul type="square">
                  <li>The web browser and cookies.</li>
                  <li>Through our enquiry tab <a href="contact-us.html">Contact Us</a></li>
                  <li>When you email through to us, at any point on the Southall Athletic FC <a href="index.html">(www.southallathleticfc.com)</a> website where you login. </li>
                  <li>Through any register your interest and any competitions you enter via our social media/google forms.</li>
              </ul>
              
              <br>
              <h2 class="lg-sub-hdr">5. How We Will Use Information About You</h2>
              <p class="lg-des-txt">We will only use your personal information when the law allows us to. If you opted-in to receive information and offers from us and our partners (for example by giving consent on one of our competition or registration forms) then we will provide any offers or information to you by email, phone/SMS, or post.</p>
              <a href="club_partners.html">Click here to see a list of our current partners.</a>
              <p class="lg-des-txt">Most commonly, we will use your personal information in the following circumstances:</p>
              
              <ul type="square">
                  <li>Where we need to perform the contract, we have entered with you.</li>
                  <li>Where we need to process the orders that you have placed with us.</li>
                  <li>Where we need to administer your account with us.</li>
                  <li>Where we seek feedback on the products and services that we provide.</li>
                  <li>Where we need to notify you of changes to our products and services.</li>
                  <li>Where we send you information about other products or services that you have specifically requested from us.</li>
                  <li>Where we need to comply with a legal or regulatory obligation.</li>
                  <li>Using incident reports cards and CCTV to investigate any issues that have arisen and ensure the security and safety of our player, their parents, our coaches, and volunteers.</li>
                  <li>We may need to process a job application or respond to an enquiry about a possible job with us.</li>
                  <li>Where it is necessary for our legitimate interests (or those of a third party) and your interests and fundamental rights do not override those interests.</li>
              </ul>
              
              <p class="lg-des-txt">We may also use your personal information in the following situations, which are likely to be rare:</p>
              <ul type="square">
                  <li>Where we need to protect your interests (or someone else's interests).</li>
                  <li>Where it is needed in the public interest or for official purposes.</li>
                  <li>Where we may detect crime within the club.</li>
              </ul>
              <p class="lg-des-txt">The following applies to the processing handled by The Club, its partners, suppliers, sponsors, and volunteers, and is permissible under the consent you have given relating to our third-party mailing list.</p>
              <p class="lg-des-txt">Southall Athletic FC, its partners, suppliers, sponsors and volunteers will process the personal data you have provided us (i.e. your name, email address, telephone number/s, address and date of birth) with other personal data (such as your lifestyle data) that you have already provided to public sources and is publicly available (such as research surveys, open data, government data), to provide you with rewards, special offers and promotions. Your personal data will be used only for these purposes, and it will not be shared or disclosed to any anyone other than the Club’s appointed sub-processors.</p>
              <p class="lg-des-txt">Southall Athletic FC, its partners, suppliers, sponsors, and volunteers store your personal data securely using suitable physical, electronic, and managerial procedures, security measures and appropriate safeguards to prevent its unauthorised access, use or disclosure. It is stored in the UK and is not transferred to any countries outside the EU.  It is kept and used only for as long as is necessary for the stated purposes and it is deleted when those purposes no longer apply and / or you withdraw your consent, which you may do at any time.</p>
              <p class="lg-des-txt">You have the right to request access to and rectification or erasure of your personal data; or restriction of the processing concerning it; and you may object to its processing. You may ask for your data in a portable format, or for it to be transmitted to another company on your behalf. You may also ask that the data is not processed for automated decision making.  You may contact us to withdraw your consent to processing by Southall Athletic FC, its partners, suppliers, sponsors and volunteers at any time and you also have the right to lodge a complaint with the supervisory authority (the UK’s Information Commissioner's Office).</p>
              <p class="lg-des-txt">If you would like to know what personal data Southall Athletic FC, its partners, suppliers, sponsors, and volunteers hold about you or would like a copy of the data or exercise any of your rights, please contact our Data Protection Officer as shown above / below. </p>
              
              <br>
              <h2 class="lg-sub-hdr" id="redirect-2">6. Cookies</h2>
              <p class="lg-des-txt">Like many other websites, the Southall Athletic FC websites use cookies. 'Cookies' are small pieces of information sent by an organisation to your computer and stored on your hard drive to allow that website to recognise you when you visit. They collect statistical data about your browsing actions and patterns and do not identify you as an individual. For example, we use cookies to [store your country preference]. This helps us to improve our website and deliver a better more personalised service.</p>
              <p class="lg-des-txt">Like many other websites, the Southall Athletic FC websites use cookies. 'Cookies' are small pieces of information sent by an organisation to your computer and stored on your hard drive to allow that website to recognise you when you visit. They collect statistical data about your browsing actions and patterns and do not identify you as an individual. For example, we use cookies to [store your country preference]. This helps us to improve our website and deliver a better more personalised service.</p>
              <p class="lg-des-txt">It is possible to switch off cookies by setting your browser preferences. Turning cookies of may result in a loss of functionality when using our website.</p>
              <p class="lg-des-txt">To view more information about the cookies used on our sites please visit:</p>
              <p class="lg-des-txt">Cookie Consent tab on <a href="index.html">https://www.southallathleticfc.com/</a> Southall Athletic FC’s Privacy Policy on <a href="privacy_policy.html">https://www.southallathleticfc.com/website-privacy-policy/</a></p>
            
              <br>
              <h2 class="lg-sub-hdr">7. Data Sharing</h2>
              <p class="lg-des-txt">We may have to share your data with third parties <a href="club_partners.html">(listed here)</a>, including third-party service. We require third parties to respect the security of your data and to treat it in accordance with the law and we will have a contract in place with each of these third parties to ensure the protection of your personal information.</p>
              
              <h2 class="lg-sub-hdr">7.1.	Why might you share my personal information with third parties?</h2>
              <p class="lg-des-txt">We may share your personal information with third parties where required by law, where it is necessary to administer the working relationship with you or where we have another legitimate interest in doing so.</p>
              
              <h2 class="lg-sub-hdr">7.2.	How secure is my information with third-party service providers and other entities in our group?</h2>
              <p class="lg-des-txt">All our third-party service providers are required to take appropriate security measures to protect your personal information in line with our policies and this is supported by a contractual agreement with clear obligations on the third parties. We do not allow our third-party service providers to use your personal data for their own purposes. We only permit them to process your personal data for specified purposes and in accordance with our written instructions.</p>
              
              <h2 class="lg-sub-hdr">7.3.	What about other third parties?</h2>
              <p class="lg-des-txt">We may share your personal information with other third parties, for example in the context of the possible sale or restructuring of the business. We may also need to share your personal information with a regulator or to otherwise comply with the law.</p>
              
              <br>
              <h2 class="lg-sub-hdr">8. Data Security</h2>
              <p class="lg-des-txt">We have put in place appropriate technical and security measures to protect the security of your personal information. Details of these measures are available upon request.  Third parties will only process your personal information on our written instructions and where they have agreed to treat the information confidentially and to keep it secure as part of their contractual arrangement with us.</p>
              <p class="lg-des-txt">We have put in place appropriate security measures to prevent your personal information from being accidentally lost, used, or accessed in an unauthorised way, altered, or disclosed. In addition, we limit access to your personal information to those employees, workers, agents, contractors and other third parties who have a business need to know. They will only process your personal information on our instructions, and they are subject to a duty of confidentiality. Details of these measures are available upon request.</p>
              <p class="lg-des-txt">We have put in place technical and organisational processes and procedures to deal with any suspected data security breach and will notify you and any applicable regulator of a suspected breach where we are legally required to do so.</p>
              
              <br>
              <h2 class="lg-sub-hdr">9. How Long Your Personal Information is Stored For</h2>
              <p class="lg-des-txt">We keep personal data about your purchases, and interaction for as long as your account remains active, and for a limited time afterwards (for in the event you reinstate your account or have any questions about it). We retain personal data about your purchases for 6 years from the initial transaction so that we can meet our legal and contractual obligations and understand how you purchase.</p>
              <p class="lg-des-txt">CCTV footage is kept for up to 42 days and held if we need to resolve an issue or meet a legal requirement. Body cam footage is also kept for the same length of time.</p>
              
              <br>
              <h2 class="lg-sub-hdr">10. If You Are Under 16</h2>
              <h2 class="lg-sub-hdr">10.1. Aged 13-15</h2>
              <p class="lg-des-txt">If you are aged 13-15, you must first tell your parent or legal guardian that you wish to register on our digital platforms and get their consent. You must make sure that your parent or legal guardian knows and agrees each time before you:</p>
              
              <ul type="square">
                  <li>email us or ask us to email anything to you;</li>
                  <li>send any information to us;</li>
                  <li>enter any competition or game that requires information about you or offers a prize; or</li>
                  <li>offer or agree to buy anything online.</li>
              </ul>
              <p class="lg-des-txt">If you are the parent or legal guardian of a user of our digital platforms who is aged 13-to-15 we do not seek your direct consent to their registration, but we expect them to inform you and get your agreement in advance before they register and before each time, they do any of the activities listed above.</p>
              
              <br>
              <h2 class="lg-sub-hdr">10.2. Aged under 13</h2>
              <p class="lg-des-txt">If you are under 13 and wish to register, you must truthfully tell us your name, email address, country, and date of birth. We will then ask you for the name and email address of your parent or legal guardian. We will send them an email, so they are aware of your request and will ask them for their consent and to confirm they have authority to give that consent. We need their consent or refusal within 7 days, or else we will assume consent is not granted. Their consent can be withdrawn at any stage.</p>
              <p class="lg-des-txt">Even if your parent or legal guardian gives their consent to your registration, if you are under 13, we still expect you to tell them and get their agreement in advance each time before you:</p>
              <ul type="square">
                  <li>email us or ask us to email anything to you;</li>
                  <li>send any information to us;</li>
                  <li>enter any competition or game that requires information about you or offers a prize; or</li>
                  <li>offer or agree to buy anything online.</li>
              </ul>
              
              <p class="lg-des-txt">If you are the parent or legal guardian of a user of our digital platforms who is under 13, they can access and use unrestricted areas, but we will need your direct consent if they wish to gain access to restricted areas.</p>
              
              <br>
              <h2 class="lg-sub-hdr">11. Right of Access, Correction, Erasure and Restriction</h2>
              <p class="lg-des-txt">It is important that the personal information we hold about you is accurate and current. Please keep us informed if your personal information changes at any point by emailing <a href="mailto: hello@theplayerscorner.co.uk">hello@theplayerscorner.co.uk </a></p>
              
              <h2 class="lg-sub-hdr">11.1. Your rights in connection with personal information</h2>
              <p class="lg-des-txt">Under certain circumstances, by law you have the right to:</p>
              
              <ul type="square">
                  <li><b> Request access</b> to your personal information (commonly known as a "data subject access request"). This enables you to receive a copy of the personal information we hold about you and to check that we are lawfully processing it.</li>
                  <li><b>Request correction</b> of the personal information that we hold about you. This enables you to have any incomplete or inaccurate information we hold about you corrected.</li>
                  <li><b>Request erasure </b>of your personal information. This enables you to ask us to delete or remove personal information where there is no good reason for us continuing to process it. You also have the right to ask us to delete or remove your personal information where you have exercised your right to object to processing (see below).</li>
                  <li><b>Object to processing</b> of your personal information where we are relying on a legitimate interest (or those of a third party) and there is something about your situation which makes you want to object to processing on this ground.</li>
                  <li><b> Request the restriction of processing</b> of your personal information. This enables you to ask us to suspend the processing of personal information about you, for example if you want us to establish its accuracy or the reason for processing it.</li>
                  <li><b>Request for transfer</b> of your personal information to another party</li>
              </ul>
              <p class="lg-des-txt">If you want to review, verify, correct, or request erasure of your personal information, object to the processing of your personal data, or request that we transfer a copy of your personal information to another party, please contact our DPO.</p>
              
              <h2 class="lg-sub-hdr">11.2. No fee usually required</h2>
              <p class="lg-des-txt">You will not have to pay a fee to access your personal information (or to exercise any of the other rights). However, we may charge a reasonable fee if your request for access is clearly unfounded or excessive. Alternatively, we may refuse to comply with the request in such circumstances.</p>
              
              <h2 class="lg-sub-hdr">11.3. What we may need from you</h2>
              <p class="lg-des-txt">We may need to request specific information. To ensure we are speaking to the correct person we will to of (certified copy of your passport, valid driving License or utility bill) from you to help us confirm your identity and ensure your right to access the information (or to exercise any of your other rights). This is another appropriate security measure to ensure that personal information is not disclosed to any person who has no right to receive it.</p>
              
              <h2 class="lg-sub-hdr">11.4. Right to withdraw consent</h2>
              <p class="lg-des-txt">In the limited circumstances where you may have provided your consent to the collection, processing, and transfer of your personal information for a specific purpose, you have the right to withdraw your consent for that specific processing at any time. To withdraw your consent, please contact our Data Protection Officer in writing or email <a href="mailto: optout@southallathleticfc.com">optout@southallathleticfc.com</a>. Once we have received notification that you have withdrawn your consent, we will no longer process your information for the purpose or purposes you originally agreed to, unless we have another legitimate basis for doing so in law.</p>
              
              <h2 class="lg-sub-hdr">11.5. Data Subject Access Request</h2>
              <p class="lg-des-txt">If you wish to submit a data subject access request, please email <a href="mailto: privacy@southallathleticfc.com">privacy@southallathleticfc.com</a>  with proof of identification (Passport/Driving license).</p>
              
              <br>
              <h2 class="lg-sub-hdr">12. Change of Purpose</h2>
              <p class="lg-des-txt">We will only use your personal information for the purposes for which we collected it, unless we reasonably consider that we need to use it for another reason and that reason is compatible with the original purpose. If we need to use your personal information for an unrelated purpose, we will notify you in writing and we will explain the legal basis which allows us to do so.</p>
              <p class="lg-des-txt">Please note that we may process your personal information without your knowledge or consent, in compliance with the above rules, where this is required or permitted by law.</p>
              
              <br>
              <h2 class="lg-sub-hdr">13. Choices You Have With Your Personal Information</h2>
              <p class="lg-des-txt">You have a choice about whether you wish to receive information from us. If you do not want to receive direct marketing communications from us about the work we do and our exciting products and services, then you can select your choices by ticking the relevant boxes situated on our registration, competition and register your interest forms. The opt out can be found at the bottom of each of these forms and you can opt out from one method of delivery, from third party or from all.</p>
              <p class="lg-des-txt">We will not contact you for marketing purposes by email, phone/SMS, or post unless you have given your prior consent. You can change your marketing preferences at any time by contacting us by email:</p>
              <a href="mailto: optout@southallathleticfc.com">optout@southallathleticfc.com </a>
              
              <p class="lg-des-txt">or write to us at:</p>
              <p class="lg-des-txt"><b>Southall Athletic Football Club (CIC)</b> <br>
                  11 Floriston Avenue<br>
                  Uxbridge<br>
                  Middlesex<br>
                  UB10 9DZ
              </p>
              
              <br>
              <h2 class="lg-sub-hdr">14. Data Protection Officer (DPO)</h2>
              <p class="lg-des-txt">We have appointed a data protection officer to oversee compliance with this privacy notice. If you have any questions about this privacy notice or how we handle your information, please contact our</p>
              <p class="lg-des-txt">DPO by email on <a href="mailto: privacy@southallathleticfc.com">privacy@southallathleticfc.com</a>.</p>
              
              <br>
              <h2 class="lg-sub-hdr">15. Changes To This Privacy Notice</h2>
              <p class="lg-des-txt">We reserve the right to update this privacy notice at any time, and we will provide you with a new privacy notice when we make any substantial updates. We may also notify you in other ways from time to time about the processing of your personal information.</p>
              <p class="lg-des-txt">If you have any questions about this privacy notice, please contact the DPO on <a href="privacy_policy.html">privacy@southallathleticfc.com</a>.</p>
              
              <p class="lg-des-txt"><b>Last Updated:</b> Monday, 8 August 2022</p>
            
            
            </section>
    
        </div>
            
        {{-- Digital Privacy Policy --}}
        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">  
            <section class="container" id="lg-container">
                <h2 class="lg-hdr-1">Digital Privacy Policy</h2>
                <h2 class="lg-sub-hdr">1. Who are we?</h2>
                
                <div class="brief-box">
                    <b>In brief…</b><a href="{{ route('company-details') }}">The Club</a> for which the website is branded. Details of our Data Protection Officer(s) can be found <a href="{{ route('privacy-policy') }}">here</a>.
                </div>
                
                <p class="lg-des-txt">Southall Athletic FC, its partners, suppliers, sponsors, and volunteers operate the Online Facilities on behalf of <a href="{{ route('company-details') }}">The Club</a>. When this policy states “The Club” we are referring to Southall Athletic FC, its partners, suppliers, sponsors, and volunteers. The Club may use your data on the basis set out in this Policy. </p>
                <p class="lg-des-txt">References to <b>“we”</b>, <b>“us”</b> and <b>“our”</b> in this Policy are all references to The Club.</p>
                <p class="lg-des-txt">Click for company information about <a href="{{ route('company-details') }}">The Club</a> and our <a href="{{ route('privacy-policy') }}#redirect-1">Data Protection Officer(s)</a>.</p>
                
                <br>
                <h2 class="lg-sub-hdr">2. What does this Policy cover?</h2>
                <div class="brief-box">
                    <b>In brief…</b>Personal data collected by The Club when you use the Online Facilities.
                </div>
                <p class="lg-des-txt">This Policy applies to personal data collected by The Club through your use of the Online Facilities.</p>
                <p class="lg-des-txt">Where personal data is collected and used for the purposes set out in this Policy, The Club is the ‘data controller’ under data protection law applicable in the EU (“<b>Data Protection Law</b>”). </p>
                <p class="lg-des-txt">You should read this Policy together with any other privacy information which may be provided on specific occasions when personal data about you is collected on the Online Facilities. That will ensure you are fully aware of how and why we are using your data. This Policy supplements any other notices and is not intended to override them.</p>
                
                <br>
                <h2 class="lg-sub-hdr">3. What does this Policy NOT cover?</h2>
                <div class="brief-box">
                    <b>In brief…</b>Personal data you provide to (a) third parties (b) information gathered online by The Club, for which [<b>The Club Privacy Policy</b>] will inform you of use of your personal data.  
                </div>
                
                <h2 class="lg-sub-hdr">Offline</h2>
                <p class="lg-des-txt">This Policy does NOT apply in relation to any data you provide to The Club through offline scenarios separate from the Online Facilities, such as unrelated telephone enquiries or in person. </p>
                
                <h2 class="lg-sub-hdr">Online</h2>
                <p class="lg-des-txt">This Policy does NOT apply where The Club collects your personal data for its own use. This may be:</p>
                <ol type="i">
                    <li>on the Online Facilities, or </li>
                    <li>on other web-based facilities of The Club, such as its own official mobile application, or its own separate website for merchandise etc. </li>
                </ol>
                
                <p class="lg-des-txt">Where this is the case on the Online Facilities, that will be clearly noted on the relevant page used by The Club to collect your information. </p>
                <p class="lg-des-txt">In these circumstances only The Club will be the ‘data controller’ for the purpose of Data Protection Law. </p>
                <p class="lg-des-txt">For further information about how The Club uses your data in these circumstances, please <a href="{{ route('contact-us') }}">contact the Club</a>.</p>
                
                <p class="lg-des-txt"><b>Links to Third Party Websites and Services</b> <br> We are not responsible or liable for the content, privacy notices or services offered by websites or apps other than the Online Facilities. We encourage you to read those notices. </p>
                <p class="lg-des-txt">This includes websites and apps which link from any of the Online Facilities, with the exception of:</p>
                <ol type="i">
                    <li>The Club’s official merchandise service and/or official Club mobile app, which only the Club controls.</li>
                </ol>
                
                <br>
                <h2 class="lg-sub-hdr">4. What information do we collect?</h2>
                <div class="brief-box">
                    <b>In brief…</b>Information which identifies you, contact information, financial or transactional information, technical and profile data, information about how you use the Online Facilities, and/or preferences you have notified to us. We use safeguards for any collection of children’s data.  
                </div>
                <p class="lg-des-txt">We may collect, use, store and transfer different kinds of personal data about you. For the purpose of this Policy, we have grouped these together as follows:</p>
                
                <ul type="square">
                    <li><b>Identity Data</b>, such as your name(s), username or similar identifier, marital status, title, date of birth, gender, and job title (where relevant).</li>
                    <li><b>Contact Data</b>, such as your address, billing address (where different), email address, preferred language, and telephone numbers.</li>
                    <li><b>Financial Data</b>, such as your bank account, PayPal account and/or payment card details.</li>
                    <li><b>Transaction Data</b>, such as details about payments to and from you and other details of products or services you have purchased from us or accessed on the Online Facilities.</li>
                    <li><b>Technical Data</b> such as your internet protocol (IP) address, your login data, browser type and version, time zone setting and location, browser plug-in types, versions and statuses, operating system and platform and other technology on the devices you use to access the Online Facilities. </li>
                </ul>
                
                <p class="lg-des-txt">The Online Facilities use cookies, which are small files with a code that is stored on your device, with your consent, and is retrieved when you next visit the Online Facilities. This allows information about your use and browsing to be recognised. Full information on which cookies we use is available in our <a href="privacy_policy.html#redirect-2">Cookies Policy</a>, along with guidance about how you can set your browser to refuse all or some cookies (but that may affect some use of the Online Facilities).</p>
                
                <ul type="square">
                    <li><b>Profile Data</b>, such as your username and password, associated social media accounts, supported team or club, your interests, preferences, posts, or comments on interactive features (if any), feedback and/or survey responses.</li>
                    
                    <li><b>Usage Data</b>, such as information about how you use the Online Facilities and services provided through them (including newsletters and marketing emails, and advertisements). This may include information about page views, length of visit or use and exit route, timing, frequency, and patterns of your use, along with navigation paths when using the Online Facilities – this information does not directly identify you. We use various tools to help us with this, including Google Analytics (see our <a href="privacy_policy.html#redirect-2">Cookies Policy</a> for further information). Where you have subscribed to receive the Club newsletter or marketing emails, we will also receive information about whether you open, delete, or access links contained in the newsletter, the browser or app type used and whether opened via mobile or desktop.</li>
                    
                    <li><b>Communications Data</b>, includes information you provide when communicating with us, your preferences in receiving marketing from us and our third parties and (where relevant) any other communication preferences.</li>
                    
                    <li><b>Aggregated Data</b>, such as statistical or demographic data for any purpose. Aggregated Data may be generated from your personal data but does not directly reveal your identity. However, if we combine or connect Aggregated Data with your personal data so that it can directly identify you, we treat the combined data as personal data which will be used in accordance with this Policy.</li>
                </ul>
                
                <p class="lg-des-txt"><b>Special Categories of Personal Data</b>, includes details about your race or ethnicity, religious or philosophical beliefs, sex life, sexual orientation, political opinions, trade union membership, information about your health and genetic and biometric data). We generally do not collect this information, and where we do, it is held in an anonymised form detached from your other data so does not reveal your identity. We do not collect any information about criminal convictions and offences.</p>
                
                <p class="lg-des-txt"><b>If you fail to provide personal data</b> <br> Use of services accessed through the Online Facilities may require you to provide specific types of information. Where you fail to provide that information, we may not be able to perform the contract we have or are trying to enter into with you. For example, we may not be able to provide you with access to performance related statistics and videos for the player. </p>
                
                <p class="lg-des-txt"><b>Children’s Data</b> <br> We understand that children and young people, including those under 13 years of age (“<b>minors</b>”), may visit the Online Facilities or otherwise interact with us. Minors may need their parent or guardian’s permission to use or access certain facilities or receive certain information through the Online Facilities. Minors may also be asked to confirm they have that permission, and we reserve the right to verify parental or guardian consent, where required. </p>
                
                <p class="lg-des-txt">We try not to make a minor's participation in activities with us contingent on the minor disclosing any more personal information than is reasonably necessary in order to do so. We do not actively market to minors or use (or pass to any third party) personal information on persons known to be minors for any commercial purposes, without proper consent.</p>
                
                <p class="lg-des-txt">Other age restrictions may apply to certain products, services, or opportunities available through our Online Facilities. </p>
                
                <br>
                <h2 class="lg-sub-hdr">5. How do we collect your personal data?</h2>
                <div class="brief-box">
                    <b>In brief…</b>Through direct interactions with you or your use of the Online Facilities, automated technologies, relevant third parties and publicly available sources such as social media platforms. Some data passes through our contractor's systems before coming to us.  
                </div>
                <p class="lg-des-txt">We use different methods to collect data about you, including through:</p>
                
                <p class="lg-des-txt"><b>Direct interactions</b> <br> You may give us your Identity, Contact, Financial, Communication and certain Profile Data by filling in forms or by corresponding with us using contact details we provide on the Online Facilities. This includes, amongst other things, personal data you provide when you submit a request, such as a newsletter subscription; participate in interactive features, including any competition, promotion, or survey; or give us feedback. </p>
                
                <p class="lg-des-txt"><b>Automated technologies or interactions</b> <br> As you interact with the Online Facilities, Technical & Usage Data about your equipment, browsing actions and patterns may also be collected or generated, along with Profile and Communications Data. We collect this personal data by using cookies, server logs and other similar technologies. We do not receive data from other websites you visit. Please see our <a href="privacy_policy.html#redirect-2">Cookie Policy</a> for further details. Other websites may use cookies which activate beyond their websites, including when you use the Online Facilities (you should check the cookies policy of those websites in those instances).</p>
                
                <p class="lg-des-txt"><b>Third parties or publicly available sources</b> <br> We may receive personal data about you from various third parties as set out below:</p>
                
                <ul type="square">
                    <li>Technical & Usage Data from parties such as our analytics providers (including Google), and advertising networks (see below);</li>
                    <li>Identity, Contact, Profile, Financial, Transaction, Usage and Technical Data from providers of technical, payment and delivery services;</li>
                    <li>Identity, Contact, Profile, Usage and/or Technical Data from social media platforms which are publicly available or through which you may log in or interact with the Online Facilities; </li>
                    <li>Identity, Financial and/or Contact Data from data brokers or aggregators, such as those used for any credit reference or similar pre-service vetting facility (if any); and</li>
                    <li>Information from lawfully available sources where relevant to our bringing, defending, or assisting in legal action (such as the police, regulators, investigators, or publicly available sources). </li>
                </ul>
                
                <p class="lg-des-txt">We may also supplement the information collected with other information that we obtain from our dealings with you or which we receive from other organisations, such as our partners, suppliers, sponsors, and volunteers.</p>
                
                <br>
                <h2 class="lg-sub-hdr">6. What do we use your personal data for?</h2>
                <div class="brief-box">
                    <b>In brief…</b>To deliver services you request; take payments; allow you to make use of interactive features (if any); manage and improve our services; communicate with you; marketing and associated profiling (only where you have agreed for email, SMS, phone or social media direct messaging); administer, analyse use of and improve the Online Facilities; protect and enforce our legal rights or those of others. 
                    We may profile your use of the Online Facilities and communications you agree to receive, and any automated processes. 
                    Several legal grounds apply to our use of your data, depending on which of the above purposes we use it for. These may include where: you consent; we need to perform any contract with you; we need to comply with legal requirements; or as necessary for our legitimate interests but balanced against your rights. 
                </div>
                <p class="lg-des-txt">We use information about you for the following purposes:</p>
                
                <ul type="square">
                    <li><b>Services, Products & Opportunities</b> <br>
                        To allow you to register an account or otherwise receive products, services, and other opportunities (such as a newsletter) and fulfil any of our obligations for delivery of those. Automated processes may assess your eligibility to receive services such as subscriptions, based on the information you provide - if you think that process has incorrectly refused you a subscription, let us know why and we will have a human review it. 
                        <br><br>
                        Processing your data for this purpose will usually be necessary:
                        
                        <ol type="i">
                            <li>to perform any contract with you for the relevant service where applicable;</li>
                            <li>to comply with legal obligations where applicable; or </li>
                            <li>otherwise for our legitimate interests in complying with third party requirements which enable us to provide the service(s).</li>
                        </ol>   
                    </li>
                    <br>
                    <li><b>Publications</b> <br>
                        To include you in relevant publications, such as where you win a promotion, we or one of our commercial partners carry out. We will usually ask you for permission in these circumstances.  
                    </li>
                    <br>
                    <li><b>Manage and Improve</b> <br>
                        To manage and improve the Online Facilities, notify you of applicable changes where required and allow you to use the features offered by the Online Facilities. This will usually be necessary:  
                        
                        <ol type="i">
                            <li>to perform any contract with you where relevant for applicable services; or </li>
                            <li>to comply with legal obligations where applicable; or </li>
                            <li>otherwise for our legitimate interests in managing our relationship with you as a customer, improving our service, and/or record keeping. </li>
                        </ol>   
                    </li>
                    <br>
                    <li><b>Communications</b> <br>
                        To communicate with you where necessary for purposes other than marketing. This will usually be necessary:   
                        
                        <ol type="i">
                            <li>to perform any contract with you for applicable services where relevant; or </li>
                            <li>to comply with legal obligations where applicable; or </li>
                            <li>otherwise for our legitimate interests in managing our relationship with you as a customer, improving our service, and/or record keeping.</li>
                        </ol>   
                    </li>
                    <br>
                    <li><b>Administer and Protect</b> <br>
                        To administer and protect our businesses, the Online Facilities, and rights of ourselves or other associated third parties (including those of other users and partners). This may include routine tasks such as troubleshooting, data analysis, testing, system maintenance and support as well as more formal matters such as bringing, defending, or assisting in legal action where necessary.  This will usually be necessary:    
                        
                        <ol type="i">
                            <li>for our legitimate interests in running our business and systems in a secure manner, business restructuring, protecting our rights and property (including intellectual property) and preventing or tackling illegal activity; or </li>
                            <li>to comply with a legal obligation where applicable.</li>
                        </ol>   
                    </li>
                    <br>
                    <li><b>Marketing & Associated Profiling</b> <br>
                        To alert you to information about events, surveys, competitions, offers, products, services and other exciting updates relating to us, and/or commercial partners.
                        <br>
                        We only do this through email, SMS, automated phone calls or online direct messaging (such as using any private message facility on the Club website or as may be permitted on associated social media platforms) where you have agreed, so this is on the basis of your consent. However, if you are an existing member/supporter of the Club, we may contact you about our products or services similar to those you have previously received or enquired about (unless you have chosen not to receive such communications).
                        <br><br>
                        
                        You can change your mind or adjust your preferences any time afterwards either in your personal profile page (also known as a ‘preference centre’) which is accessible from all of our emails or emailing us at <a href="mailto: privacy@southallathleticfc.com">privacy@southallathleticfc.com</a>. We will also stop sending these in direct response to any other express communication from you asking to do so. We may measure the effectiveness of our communications, including Usage Data relating to newsletters and other marketing emails as set out in the <a href="privacy_policy.html">“What information do we collect?”</a> section above.   
                        
                        <br><br>
                        We also use tools to help us, and our advertising network make relevant advertising available to you when you use the Online Facilities and our associated social media platforms (including facilities made available for this purpose by Facebook), and measure how effective that advertising is. To do this we rely on cookies, which may include codes associated with your device but do not themselves identify you by name. As mentioned earlier, full information on which cookies we use is available in our <a href="privacy_policy.html#redirect-2">Cookies Policy</a>, along with guidance about how you can set your browser to refuse all or some cookies. This type of bespoke advertising (and any postal marketing) is carried out on the basis it is necessary for the legitimate interests of us or applicable commercial partners in marketing relevant products, services, and exciting offers.
                    </li>
                    <br>
                    <li><b>Research, Analysis & Personalisation</b> <br>
                        To carry out market research so that we can improve the products and services we offer, and in some circumstances personalise content (including advertising as mentioned earlier) delivered to you. Your feedback is valued and helps to inform the commercial strategy, marketing activity and initiatives across Southall Athletic FC and its partners, suppliers, sponsors, and volunteers. This will usually be necessary for our legitimate interests to study how customers use our products/services, to develop them, to grow our business and to inform our commercial and marketing strategy.
                        
                        <br><br>
                        We may also process your personal data for other reasons, in compliance with the above rules, where this is required or permitted by law. Where we reasonably consider that we need to process your personal data for another reason that is compatible with the original purpose set out in this Policy we will do so. If that is ever the case and you wish to get an explanation as to how processing for any new purpose is compatible with the original purpose, please <a href="privacy_policy.html">contact us</a>. 
                        
                        <br><br>
                        If we need to use your personal data for an unrelated purpose, we will notify you and we will explain the legal basis which allows us to do so. In some circumstances, this may require your consent.
                    </li>
                </ul>
                
                <br>
                <h2 class="lg-sub-hdr">7. How do we store your information and for how long?</h2>
                <div class="brief-box">
                    <b>In brief…</b>Usually in the European Economic Area (EEA) but always in a manner that ensures proper security.  We will only keep the minimum amount of information for as long as we need it for the purpose(s) set out in this Policy. 
                </div>
                <p class="lg-des-txt"><b>Location</b> <br>
                    We are committed to protecting the security of your personal data, which we generally hold in secure data centres in the European Economic Area (EEA).
                </p>
                <p class="lg-des-txt">Some organisations to which we may disclose your personal information may be situated outside of the EEA. Whenever we transfer your personal data out of the EEA, we take reasonable steps to ensure that your information is still properly protected. This may include safeguards such as checking the relevant countries have been deemed to provide an adequate level of protection for personal data by the European Commission or using contractual provisions to ensure your information is properly protected (certain contracts are approved by the European Commission).</p>
                <p class="lg-des-txt">In relation to personal data sent to the US, we usually check whether the ‘Privacy Shield’ applies – that ensures a similar level of protection to personal data shared within the EEA. See <a href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/eu-us-privacy-shield_en" target="_blank">https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/eu-us-privacy-shield_en</a>, for further details.</p>
                
                <p class="lg-des-txt"><b>Duration</b> <br>
                    We will keep the personal data you have provided only for as long as we reasonably require to fulfil the purposes, we collected it for, including for the purposes of satisfying any legal, accounting, or reporting requirements. 
                </p>
                <p class="lg-des-txt">To determine the appropriate retention period for personal data, we consider the amount, nature, and sensitivity of the personal data, the potential risk of harm from unauthorised use or disclosure of your personal data, the purposes for which we process your personal data and whether we can achieve those purposes through other means. This is in addition to any applicable legal requirements. Details of any specific retention periods for different aspects of your personal data are available on request by contacting us at <a href="mailto: ">privacy@southallathleticfc.com</a>.</p>
                <p class="lg-des-txt">For legal reasons we may have to keep basic information about our customers (including Contact, Identity, Financial and Transaction Data) for up to seven years after they cease being customers– this is particularly for any paid for products or services.</p>
                <p class="lg-des-txt">In some circumstances you can ask us to delete your data: see the <a href="privacy_policy.html">“contact_us?”</a> section below for further information.</p>
                <p class="lg-des-txt">We may anonymise your personal data (so that it can no longer be associated with you) for research or statistical purposes in which case we may use this information indefinitely without further notice to you. </p>
                
                <p class="lg-des-txt"><b>Security</b> <br>
                    We have put in place appropriate operational, technical and security measures to reduce the risk of your personal data from being accidentally lost, used, or accessed in an unauthorised way, altered, or disclosed. This includes use of encryption where relevant. In addition, we limit access to your personal data to those volunteers, agents, contractors and other third parties who have a business need to know. 
                </p>
                <p class="lg-des-txt">We have put in place procedures to deal with any suspected personal data breach and will notify you and any applicable regulator of a breach where we are legally required to do so.</p>
                <p class="lg-des-txt">If we have given you a password to access certain parts of the Online Facilities, you must keep the password safe and make sure you use a secure browser. </p>
                
                <br>
                <h2 class="lg-sub-hdr">8. Who do we provide your information to?</h2>
                <div class="brief-box">
                    <b>In brief…</b>Our partners, suppliers, sponsors, and volunteers; legal bodies; selected contractors who help us provide the Online Facilities (including payment service, hosting and other technical providers); affiliates in the football industry; and <a href="club_partners.html">commercial partners and sponsors</a> of the Club, including where you have agreed to receive marketing information from them.  
                </div>
                <p class="lg-des-txt">We may disclose your information to third parties as follows:</p>
                
                <ul type="square">
                    <li>to any of our affiliated community trusts and charitable schemes. </li>
                    <li>to third parties to whom we may choose to merge with, sell or transfer all or parts of our business or our assets (or businesses we may acquire). New owners of our business may use your personal data in the same way as set out in this Policy;</li>
                    <li>to service providers who carry out some data processing activities on our behalf. For example, mailing services, payment processing, IT infrastructure, software and hosting, analytics, and advertising delivery service providers, along with other relevant partners used to help us deliver the Online Facilities to you.</li>
                </ul>
                
                <p class="lg-des-txt">We do not allow our third-party service providers to use your personal data for their own purposes unless they can otherwise lawfully do so:</p>
                <ul type="square">
                    <li>to our commercial partners or sponsors. For example, if required for prize or opportunity fulfilment in relation to promotions you engage with (but only for direct electronic marketing purposes where you have agreed to this). Click for details about the current <a href="club_partners.html">Club</a> and its <a href="club_partners.html">partners, suppliers, sponsors, and volunteers;</a></li>
                    <li>other organisations in the football industry where required for completion of the purposes set out in this Policy, such as other football leagues, clubs, governing bodies, and match venues. For example, if you enter a competition and win tickets to a match, we may need to share details with the stadium or participating clubs, for ticket delivery and/or health and safety or other legal reasons; </li>
                    <li>to professional advisers including lawyers, bankers, auditors, and insurers where required for those parties to provide services to us; </li>
                    <li>to law enforcement agencies, Courts, or other dispute resolution forums, or other legal or regulatory authorities if we are under a duty to disclose or share your personal data to comply with any legal obligation, or are enforcing or protecting our rights, or lawfully co-operating in the protection of third-party rights; and/or</li>
                    <li>to any credit reference or similar pre-service or communication vetting agency (if any) for the purposes of fraud protection and credit risk reduction in relation to paid for services you request from us or assisting our compliance with lawful requirements. </li>
                </ul>
                
                <p class="lg-des-txt">We may have to share your personal data with the parties above for the purposes set out in the <a href="privacy_policy.html">“What do we use your personal data for?”</a> section of this Policy. In some circumstances, there may be other lawful reasons for the third party to use your data in accordance with any privacy notice they make available to you.</p>
                <p class="lg-des-txt">We may also provide anonymised Aggregated Data to third parties. For example, we may aggregate your Usage Data to calculate the percentage of users accessing a specific website feature.</p>
                
                <br>
                <h2 class="lg-sub-hdr">9.What are your rights?</h2>
                <div class="brief-box">
                    <b>In brief…</b>Access or object to use of your data; have your data corrected, erased, transferred, or used only in a restricted way; complain to us or the Information Commissioner; withdraw consent to use your data. Some rights are only available in limited circumstances.   
                </div>
                <p class="lg-des-txt">Under the Data Protection Laws, you may have the following rights in relation to your personal data in certain circumstances: </p>
                
                <ul type="square">
                    <li><b>Request Access:</b> (also known as a "data subject access request"). You can receive a copy of the personal data we hold about you.</li>
                    <li><b>Request Correction:</b> You can have any incomplete or inaccurate data we hold about you corrected, though we may need to verify the accuracy of new data you provide.</li>
                    <li><b>Request Deletion:</b> You can ask us to delete or remove personal data in certain circumstances, for example where: there is no good reason for us continuing to process it; you have successfully exercised your right to object to processing (below); or where we may have processed your information unlawfully or where we are required to erase your personal data to comply with local law.</li>
                    <li><b>Object to Processing of your personal data:</b> This applies where: we are relying on a legitimate interest or those of a third party (see the <a href="privacy_policy.html">“What do we use your personal data for?”</a> section above) and you feel our processing on this ground impacts your fundamental rights; or where we are processing your personal data for direct marketing purposes.</li>
                    <li><b>Request Restriction of Processing:</b> You can ask us to suspend processing of your personal data where: you want us to establish the data's accuracy; our use of the data is unlawful but you do not want us to erase it; where you need us to hold the data even if we no longer require it as you need it to establish, exercise or defend legal claims; or you have objected to our use of your data but we need to verify whether we have overriding legitimate grounds to use it.</li>
                    <li><b>Request Transfer:</b> You can ask us to provide to you, or a third party of your choice, your personal data in a machine-readable format. This right only applies to automated information which: you initially provided consent for us to use your data (see the <a href="privacy_policy.html">“What do we use your personal data for?”</a> section above); or your provided and we used the information to perform a contract with you (see the <a href="privacy_policy.html">“What do we use your personal data for?”</a> section above).</li>
                    <li><b>Right to withdraw consent:</b> This only applies where we are relying on consent to process your personal data (see the <a href="privacy_policy.html">“What do we use your personal data for?”</a> section above). If you withdraw your consent, we may not be able to provide certain products or services to you. We will advise you if this is the case at the time you withdraw your consent.</li>
                </ul>
                
                <p class="lg-des-txt">All requests set out in this section or other queries relating to this Policy should be addressed to Southall Athletic FC. See the <a href="privacy_policy.html">“Who can you contact for further details?”</a> section below. Please note we may not always be able to comply with your request due to our legitimate interests or other legal reasons. If applicable, these will be notified to you in response to a relevant request.</p>
                <p class="lg-des-txt">You will not usually have to pay a fee to exercise any of the above rights. However, we may charge a reasonable fee if your request is clearly unfounded, repetitive, or excessive (or we may refuse to comply with your request in these circumstances).</p>
                <p class="lg-des-txt">For security reasons, we may need to request specific information from you to help us confirm your identity and ensure your right to access your personal data (or to exercise any of your other rights). We may also ask you for further information in relation to your request.</p>
                <p class="lg-des-txt">If you have any concerns about how we use your data you also have the right to raise this with the Information Commissioner’s Office at Wycliffe House, Water Lane, Wilmslow, Cheshire, SK9 5AF (<a href="https://ico.org.uk" target="_blank">https://ico.org.uk</a>). However, we will always try to help with any concerns so ask that you contact us in the first instance.</p>
                
                <br>
                <h2 class="lg-sub-hdr">10.	Will this Policy change?</h2>
                <div class="brief-box">
                    <b>In brief…</b>Yes, we like to ensure you are up to date about our use of your personal data. If we update this policy, we will notify you unless the changes are minor.    
                </div>
                <p class="lg-des-txt">We may need to update this Policy, and minor changes will be posted on this page so you should check back from time to time. Significant changes will be notified to you. </p>
                <p class="lg-des-txt">This Policy was last updated on 8 August 2022. </p>
                
                <br>
                <h2 class="lg-sub-hdr">11.	Who can you contact for further details?</h2>
                <p class="lg-des-txt" style="text-decoration: underline;">Write to us:</p>
                <p class="lg-des-txt">Data Protection Officer </p>
                
                <p class="lg-des-txt">
                    Southall Athletic FC <br>
                    7 Colnbrook Court <br>
                    Old Bath Road <br>
                    Colnbrook <br>
                    Slough <br>
                    Berkshire <br>
                    SL3 0NN <br>
                </p>
                <p class="lg-des-txt" style="text-decoration: underline;">Email us:</p>
                <a href="mailto: privacy@southallathleticfc.com">privacy@southallathleticfc.com. </a>
                <p class="lg-des-txt">Please include your name, address, and/or email address when you contact us.</p>
                <p class="lg-des-txt">Details of the Club’s Data Protection Officer can be found in the Club Privacy Notice on the Club’s website.</p>
                
                <br>
                <h2 class="lg-sub-hdr">12.	Cookies Policy</h2>
                <div class="primary-btn">
                    <a href="{{route('privacy-preference')}}"><button>Cookie Settings</button></a>
                </div>
                <p class="lg-des-txt">A cookie is a small piece of data (text file) that a website – when visited by a user – asks your browser to store on your device in order to remember information about you, such as your language preference or login information. Those cookies are set by us and called first-party cookies. We also use third-party cookies – which are cookies from a domain different than the domain of the website you are visiting – for our advertising and marketing efforts. More specifically, we use cookies and other tracking technologies </p>
                
                <br>
                <h2 class="lg-sub-hdr">11.1. Strictly Necessary Cookies</h2>
                <p class="lg-des-txt">These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you which amount to a request for services, such as setting your privacy preferences, logging in, or filling in forms. You can set your browser to block or alert you about these cookies, but some parts of the site will not then work. These cookies do not store any personally identifiable information.</p>
                
                <br>
                <h2 class="lg-sub-hdr">11.2. Performance Cookies</h2>
                <p class="lg-des-txt">These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us to know which pages are the most and least popular and see how visitors move around the site. All information these cookies collect is aggregated and therefore anonymous. If you do not allow these cookies we will not know when you have visited our site and will not be able to monitor its performance.</p>
                
                <br>
                <h2 class="lg-sub-hdr">11.3. Functional Cookies</h2>
                <p class="lg-des-txt">These cookies enable the website to provide enhanced functionality and personalisation. They may be set by us or by third party providers whose services we have added to our pages. If you do not allow these cookies, then some or all of these services may not function properly.</p>
                
                <br>
                <h2 class="lg-sub-hdr">11.4. Targeting Cookies </h2>
                <p class="lg-des-txt">These cookies may be set through our site by our advertising partners. They may be used by those companies to build a profile of your interests and show you relevant adverts on other sites. They do not store directly personal information but are based on uniquely identifying your browser and internet device. If you do not allow these cookies, you will experience less targeted advertising.</p>
                
                <br>
                <h2 class="lg-sub-hdr">11.5. Removing Cookies</h2>
                <p class="lg-des-txt">If you choose to accept any cookies and later change your mind, don’t worry as most modern browsers allow you to change your cookie settings and/or remove all cookies already accepted from your device. These settings will typically be found in the 'options' or 'preferences' menu of your browser. To understand these settings, the following links may be helpful, otherwise you should use the 'Help' option in your browser for more details.</p>
                
                <a href="https://support.microsoft.com/en-gb/windows/delete-and-manage-cookies-168dab11-0753-043d-7c16-ede5947fc64d" target="_blank">Cookie settings in Internet Explorer</a><br>
                <a href="https://support.mozilla.org/en-US/kb/how-clear-firefox-cache" target="_blank">Cookie settings in Firefox</a><br>
                <a href="https://support.google.com/accounts/answer/32050?co=GENIE.Platform%3DDesktop&hl=en" target="_blank">Cookie settings in Chrome</a><br>
                <a href="https://support.apple.com/en-gb/guide/safari/sfri47acf5d6/mac" target="_blank">Cookie settings in Safari</a><br>
                <a href="https://support.microsoft.com/en-gb/windows/microsoft-edge-browsing-data-and-privacy-bb8174ba-9d73-dcf2-9b4a-c582b4e640dd" target="_blank">Cookie settings in Edge</a><br>
                
                <p class="lg-des-txt">Please note however that turning cookies off when using our Online Facilities, may interfere with your ability to use services on the relevant Online Facility to which the cookies apply.</p>
                
                <p class="lg-des-txt">For further information about cookies and how to control their use, please visit the following third party educational resources: <a href="www.allaboutcookies.org" target="_blank">www.allaboutcookies.org</a> and <a href="www.youronlinechoices.eu" target="_blank">www.youronlinechoices.eu</a></p>
                
                <p class="lg-des-txt">Last Updated:		Friday 4th August 2022</p>
                
                
            
            
            </section>
        </div>
    </div>
</div>




 @endsection