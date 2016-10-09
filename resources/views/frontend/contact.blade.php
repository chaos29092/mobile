@extends('frontend.master')

@section('content')
    <div class="decoration hide-if-responsive"></div>
    <div class="material-container full-bottom">
        <div class="material-container no-bottom">
            <h4>Contact Information</h4>
            <p>
                We answer the request in the shortest possible time!
            </p>
            <p>
                <strong>Postal Information</strong><br>
                Zhengzhou high tech Development Zone,<br>
                Magnolia Street No.55, China.
            </p>
            <p>
                <strong>Contact Information:</strong><br>
                <a href="tel: +86 371 67826992" class="contact-call"><i class="fa fa-phone"></i>+86 371 67826992</a>
                <a href="mailto:info@furnace-tech.com" class="contact-mail"><i class="fa fa-envelope"></i>info@furnace-tech.com</a>
                <a href="https://www.facebook.com/laboratory.furnace" class="contact-facebook"><i class="fa fa-facebook"></i>laboratory.furnace</a>
                <a href="https://twitter.com/kejiafurnace1" class="contact-twitter"><i class="fa fa-twitter"></i>@kejiafurnace1</a>
            </p>
            <p><strong>Whatapp/Phone:</strong> +86 17737149370</p>
        </div>
    </div>

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
                    <h3>Contact Form</h3>
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