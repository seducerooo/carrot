<div class="second-section" id="second-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-6">
                <div class="card shadow p-3 mb-5 bg-body" >
                    <div class="card-body rounding" id="contact-form">
                        <form action="{{ route('IndexPage') }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="firstName" class="required">First Name</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName"  required />
                                </div>
                                <div class="form-group">
                                    <label for="lastName" class="required">Last Name</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" required />
                                </div>
                                <div class="form-group">
                                    <label for="companyName" class="required">Company Name</label>
                                    <input type="text" class="form-control" name="companyName" id="companyName" required />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="required">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required />
                                </div>
                                <div class="form-group">
                                    <label for="phoneNumber" class="required">Phone Number</label>
                                    <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" required />
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message"  class="form-control" rows="5"></textarea>
                                </div>
                                <button class="btn btn-bi-primary w-100" type="submit">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>

                    <div class="card-success rounding" id="contact-form-success">
                        <div>
                            <h2>Thank you for trusting Bright Inventory</h2>
                            <h3>Your message was sent successfully</h3>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-12 col-md-5 mb-0 mb-md-5">
                <h4>How can we help you?</h4>
                <p>Whether you have a question about our features, trials, pricing, need a demo, or anything else, our team is ready to answer all your inquiries.</p>
            </div>
        </div>
    </div>

</div>
