@extends('frontend.master')

@section('content')
    <div>
        <!-- POST 1-->
        <div class="page-blog-list material-container">
            <img src="{{$product->main_pic}}" alt="{{$product->name}}" class="responsive-image">
            <h3 class="page-blog-title">Product Detail</h3>

            <div class="page-blog-content">

                {!! $product->content !!}

            </div>

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
        <div class="decoration hide-if-mobile"></div>
    </div>

@endsection