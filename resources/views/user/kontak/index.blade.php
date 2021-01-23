@extends('user.layout.post')

@section('title', 'Kontak UKM LUMUT')

@section('sub-title', 'Kontak UKM LUMUT')

@section('description', 'Kontak atau informasi untuk menghubungi UKM LUMUT')

@section('content')

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        <strong>Sukses!</strong> {{session('status')}}
    </div>
@endif

<!-- SECTIONS ===================== -->
<section id="contact-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-info-block text-center">
                    <i class="pe-7s-map-marker"></i>
                    <h4>Address</h4>
                    <p class="lead">Jl. Mastrip Kotak Pos 164, Jember</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-info-block text-center">
                    <i class="pe-7s-mail"></i>
                    <h4>Email</h4>
                    <p class="lead">ukm.lumut@polije.ac.id</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-info-block text-center">
                    <i class="pe-7s-phone"></i>
                    <h4>Phone Number</h4>
                    <p class="lead">+62 8965 2546 772</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="contact">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8 col-lg-6">
                <h5>Leave a Message</h5>
                <!-- Heading -->
                <h2 class="section-title mb-2 ">
                    Tell us about <span class="font-weight-normal">yourself</span>
                </h2>

                <!-- Subheading -->
                <p class="mb-5 ">
                    Whether you have questions or you would just like to say hello, contact us.
                </p>

            </div>
        </div> <!-- / .row -->

        <div class="row">
            <div class="col-lg-6">
               <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                    </div>
                </div>
                <!-- end message -->
                <!-- Contacts Form -->
                <form class="contact_form" action="mail.php">
                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Your name
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <input class="form-control" name="name" id="name" required="" placeholder="John Doe" type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Your email address
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="email" id="email" required="" placeholder="john@gmail.com" type="email">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="w-100"></div>

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Subject
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <input class="form-control" name="subject" id="subject" required="" placeholder="Web design" type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Your Phone Number
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" id="phone" name="phone" required="" placeholder="1-800-643-4500" type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <!-- Input -->
                    <div class="form-group mb-5">
                        <label class="h6 small d-block text-uppercase">
                            How can we help you?
                            <span class="text-danger">*</span>
                        </label>

                        <div class="input-group">
                            <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Hi there, I would like to ..."></textarea>
                        </div>
                    </div>
                    <!-- End Input -->

                    <div class="">
                       <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Send Message">
                       
                        <p class="small pt-3">We'll get back to you in 1-2 business days.</p>
                    </div>
                </form>
                <!-- End Contacts Form -->
            </div>

            <div class="col-lg-6 col-md-6">
                <!-- START MAP -->
                {{-- <div id="map" ></div> --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15797.715304619993!2d113.7224597!3d-8.1594771!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1609948612201!5m2!1sid!2sid" class="w-100" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <!-- END MAP -->
            </div>
        </div>
    </div>
</section>
@endsection