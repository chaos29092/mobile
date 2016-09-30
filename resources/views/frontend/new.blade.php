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


                <div class="blog-post-comments full-bottom">

                    <div class="blog-post-comment-add">
                        <h5>Leave your inquiry</h5>
                        <p>
                            if you have any need, please contact me
                        </p>
                        <strong>Name</strong>
                        <em>required</em>
                        <input type="text" placeholder="Your Name">
                        <strong>Email</strong>
                        <em>required</em>
                        <input type="text" placeholder="Your Email">
                        <strong>Message</strong>
                        <em>required</em>
                        <textarea cols="30" rows="3" placeholder="Your Message"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="decoration hide-if-mobile"></div>
    </div>

@endsection