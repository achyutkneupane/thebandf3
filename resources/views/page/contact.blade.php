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
                                <p>Email: <a href="mailto:info@thebandf3.com">info@thebandf3.com</a></p>
                                <p>Contact Number: <a href="tel:+">Contact Number</a></p>
                                <p>For Bookings: <a href="mailto:booking@thebandf3.com">booking@thebandf3.com</a></p>
                                <p class="mt-4">
                                    <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="fa fa-facebook"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i class="fa fa-youtube"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-instagram btn-rounded"><i class="fa fa-instagram"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-envelope btn-rounded"><i class="fa fa-envelope"></i></button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
