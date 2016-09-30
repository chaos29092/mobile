@extends('frontend.master')

@section('content')
    <div class="material-shadow full-bottom">
        <iframe class="responsive-image maps" src="https://maps.google.com/?ie=UTF8&amp;ll=47.595131,-122.330414&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed"></iframe>
    </div>



    <div class="decoration hide-if-responsive"></div>
    <div class="material-container full-bottom">
        <div class="material-container no-bottom">
            <h4>Contact Information</h4>
            <p>
                We answer all our emails in the shortest possible time!
            </p>
            <p>
                <strong>Postal Information</strong><br>
                PO Box 22161 Street Collins East<br>
                PO Box 16122 Collins Street West<br>
                Victoria 8007 Australia
            </p>
            <p>
                <strong>Envato Headquarters</strong><br>
                121 King Street, Melbourne <br>
                Victoria 3000 Australia
            </p>
            <p>
                <strong>Contact Information:</strong><br>
                <a href="tel: +123 456 7890" class="contact-call"><i class="fa fa-phone"></i>+ 123 456 7890</a>
                <a href="sms: +123 456 7890" class="contact-text"><i class="fa fa-comments"></i>+ 123 456 7890</a>
                <a href="mailto:name@domain.com" class="contact-mail"><i class="fa fa-envelope"></i>mail@doamin.com</a>
                <a href="#" class="contact-facebook"><i class="fa fa-facebook"></i>enabled.labs</a>
                <a href="#" class="contact-twitter"><i class="fa fa-twitter"></i>@iEnabled</a>
            </p>
        </div>
    </div>

    <div class="decoration"></div>
    <div class="material-container full-bottom">
        <div class="contact-form no-bottom">
            {{--<div class="formSuccessMessageWrap" id="formSuccessMessageWrap">--}}
            {{--<div class="big-notification green-notification">--}}
            {{--<h3 class="uppercase">Message Sent </h3>--}}
            {{--<a href="#" class="close-big-notification">x</a>--}}
            {{--<p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank you!</p>--}}
            {{--</div>--}}
            {{--</div>--}}

            <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                <fieldset>
                    <div class="formValidationError bg-red-dark color-white" id="contactNameFieldError">
                        <p class="center-text uppercase small-text">Name is required!</p>
                    </div>
                    <div class="formValidationError bg-red-dark color-white" id="contactEmailFieldError">
                        <p class="center-text uppercase small-text">Mail address required!</p>
                    </div>
                    <div class="formValidationError bg-red-dark color-white" id="contactEmailFieldError2">
                        <p class="center-text uppercase small-text">Mail address must be valid!</p>
                    </div>
                    <div class="formValidationError bg-red-dark color-white" id="contactMessageTextareaError">
                        <p class="center-text uppercase small-text">Message field is empty!</p>
                    </div>
                    <div class="formFieldWrap">
                        <label class="field-title contactNameField" for="contactNameField">Name:<span>(required)</span></label>
                        <input type="text" name="contactNameField" value="" class="contactField requiredField" id="contactNameField"/>
                    </div>
                    <div class="formFieldWrap">
                        <label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span></label>
                        <input type="text" name="contactEmailField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                    </div>
                    <div class="formTextareaWrap">
                        <label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span></label>
                        <textarea name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                    </div>
                    <div class="formSubmitButtonErrorsWrap contactFormButton">
                        <input type="submit" class="buttonWrap button button-green contactSubmitButton" id="contactSubmitButton" value="Send Message" data-formId="contactForm"/>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>





@endsection