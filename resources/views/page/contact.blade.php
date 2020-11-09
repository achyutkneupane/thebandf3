<div class="container my-4" id="contact">
    <div class="shadowbox">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="Title">
                    Contact Us
                </h1>
                <div class="vLine"></div>
            </div>
            <div class="col-md-12">
                <div class="contactText">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 py-3">
                                <form method="POST" action="/contact">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name">

                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Comment</label>
                                        <textarea name="comment" class="form-control" id="comment" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-6 py-3">
                                <p class="mb-4">You can contact us on any medium:</p>
                                <p>Email: <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                                <p>Contact Number: <a href="tel:+{{ $setting->contact }}">{{ $setting->contact }}</a></p>
                                <p>For Bookings: <a href="mailto:{{ $setting->booking }}">{{ $setting->booking }}</a></p>
                                <p class="mt-4">
                                    @isset($setting->fbLink)
                                        <a class="btn btn-social-icon btn-facebook btn-rounded" href="{{ $setting->fbLink }}"><i class="fa fa-facebook"></i></a>
                                    @endisset
                                    @isset($setting->ytlink)
                                        <a class="btn btn-social-icon btn-youtube btn-rounded" href="{{ $setting->ytLink }}"><i class="fa fa-youtube"></i></a>
                                    @endisset
                                    @isset($setting->instaLink)
                                        <a class="btn btn-social-icon btn-instagram btn-rounded" href="{{ $setting->instaLink }}"><i class="fa fa-instagram"></i></a>
                                    @endisset
                                    @isset($setting->email)
                                        <a class="btn btn-social-icon btn-envelope btn-rounded" href="mailto:{{ $setting->email }}"><i class="fa fa-envelope"></i></a>
                                    @endisset
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
