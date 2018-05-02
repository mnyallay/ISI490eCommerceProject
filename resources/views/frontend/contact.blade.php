@extends('frontend.master')

@section('content')


    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Get In Touch</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        @if(Session::has('success-msg'))
                            <p class="alert alert-success">{{ Session::get('success-msg') }}</p>
                        @endif
                        <form id="main-contact-form" class="contact-form row" name="contact-form" action="/contact" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Contact Info</h2>
                        <address>
                            <p>{{$settings->title}}</p>
                            <p>{{$settings->address}}</p>
                            <p>Mobile: {{$settings->mobile}}</p>
                            <p>Email: {{$settings->email}}</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Social Networking</h2>
                            <ul>
                                <li>
                                    <a href="{{$settings->facebook}}"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{$settings->twitter}}"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{$settings->linked_in}}"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="{{$settings->google_plus}}"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/#contact-page-->


@stop