@extends('layouts.website')
@section('content')
    <!-- ====================Start Contact ============================== -->
    <section class="contain mb-5">

        <div class="content">
            <h6>get in touch</h6>
            <h1>Contact us</h1>
        </div>

    </section>
    <section class="contactForm">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact">
                        <h6 class="mb-4">what you are waiting for ....</h6>
                        <h2>CONTACT</h2>

                        <div class="places my-2">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="address mx-3">
                                <h6>our office </h6>
                                <p>51 Street No.13, Al-Fardous, Agamy, Bitache, Dekheila, Alexandria, Egypt.
                                    Farm = Farm: Sanour, Beni Suef, Egypt</p>
                            </div>
                        </div>
                        <div class="places my-2">

                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="address mx-3">
                                <h6>our Farm </h6>
                                <p>
                                    Farm: Sanour, Beni Suef, Egypt
                                </p>
                            </div>
                        </div>

                        <div class="realContact  p-4 ">
                            <div class="places ">
                                <div class="icon">
                                    <i class="fas fa-store"></i>
                                </div>
                                <div class="address mx-3">
                                    <h6>CONTACT</h6>
                                    <p> phone:<a href="tel:1066684853">(+20) 1066684853</a> </p>
                                    <p>watsapp:<a href="https://wa.me/201066684850">(+20)
                                            +201066684850</a> </p>
                                    <p> Email: <a href="mailto:info@alsharkherbs.com">info@alsharkherbs.com</a></p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="offset-md-2 col-md-4 position-relative ">
                    <h4 class="mt-5"> get in touch </h4>

                    <form class=" p-3">
                        <div class="form-group">
                            <label>Name <span>*</span></label>
                            <div class="d-flex mt-2">
                                <input class="form-control ">
                                <input class="form-control  mx-3">
                            </div>
                            <div class="hent">
                                <label class="w-50">Frist</label>
                                <label>Second</label>
                            </div>
                        </div>

                        <div class="form-group my-3">
                            <label class="my-2">Company Name <span>*</span></label>
                            <input class="form-control w-100">
                        </div>

                        <div class="form-group my-3">
                            <label>Phone Number <span>*</span></label>
                            <input class="form-control w-100">
                        </div>

                        <div class="form-group my-3">
                            <label>Email <span>*</span></label>
                            <input class="form-control w-100">
                        </div>

                        <div class="form-group my-3">
                            <label>Comment or Message <span>*</span></label>
                            <textarea class="form-control w-100 "></textarea>
                        </div>

                        <button class="sub">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="map container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1744.622295935623!2d31.099770741532996!3d29.009747898443155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145a2510e0f2457b%3A0xe3bcce87b88433f6!2sAlshark%20for%20Herbs%20and%20spices!5e0!3m2!1sen!2sus!4v1666384215424!5m2!1sen!2sus"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ====================end Contact ============================== -->
@endsection
