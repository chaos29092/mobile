@extends('frontend.master')

@section('content')
    <div>
        <!-- POST 1-->
        <div class="page-blog-list material-container">
            <img src="{{asset('frontend/images/pictures/3w.jpg')}}" alt="img" class="responsive-image">
            <h3 class="page-blog-title">Product Detail</h3>

            <div class="page-blog-content">

                Product content <br>
                22222 <br>
                dsa

                <br>
                <div class="decoration"></div>

                {{--Table--}}
                <div class="container no-bottom">
                    <h4>Table</h4>
                    <table cellspacing='0' class="table">
                        <tr>
                            <th>TABLE</th>
                            <th class="table-title">PLUS</th>
                            <th class="table-title">PRO</th>
                        </tr>
                        <tr>
                            <td class="table-sub-title"> ONE</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr class='even'>
                            <td class="table-sub-title"> TWO</td>
                            <td>No</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td class="table-sub-title"> THREE</td>
                            <td>No</td>
                            <td>No</td>
                        </tr>
                        <tr class='even'>
                            <td class="table-sub-title">VALUE</td>
                            <td class="price">$9.<sup class="small-price">99</sup></td>
                            <td class="price">$109.<sup class="small-price">99</sup></td>
                        </tr>
                    </table>
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
        </div>
        <div class="decoration hide-if-mobile"></div>
    </div>

@endsection