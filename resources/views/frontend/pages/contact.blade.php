@extends('frontend.layouts.default')
@section('title','Contact Us')
@section('content')
<style>
    .contact-form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        color: white;
    }
    .contact-form h2 {
        color: #007bff;
    }
    .contact-form label {
        margin: 10px 0;
        color: rgb(0, 0, 0);
    }
</style>
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
            <div class="container">
                <h2 class="text-center my-2">Contact Us</h2>
                <p class="text-center my-2">If you have any questions, feel free to reach out to us through the form below or via the provided contact details.</p>

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <h3 class="my-2">Contact Form</h3>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject:</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary my-3">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <h3 class="text-center my-2">Our Contact Details</h3>
                        <div class="contact-details  text-white p-4 rounded">
                            <p><strong>Address:</strong> Phnom Penh, Cambodia</p>
                            <p><strong>Email:</strong> info@piseth-computer.com.kh</p>
                            <p><strong>Phone:</strong> +855 1234 5678</p>
                            <p><strong>Working Hours:</strong> Monday - Friday, 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
