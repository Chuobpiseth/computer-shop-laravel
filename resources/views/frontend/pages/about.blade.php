@extends('frontend.layouts.default')
@section('title','About Us')
@section('content')
<div class="container">

    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
            <div class="topic-titles">

                <span id="line"></span>
                <span>ABOUT THIS SITE</span>
                <span id="line"></span>
            </div>
            <div class="row my-3 p-3 bg-darkgrey">
                <div class="col-lg-12 ">
                    <p class="fw-bold" style="color:yellow">Welcome to Piseth Computer Shop!</p>
                    <p style="color:grey">At Piseth Computer Shop, we are dedicated to providing the latest and greatest in computer technology. Our mission is to offer high-quality products and exceptional customer service to meet all your computing needs. Whether you're a tech enthusiast, a gamer, a student, or a professional, we have the right solutions for you.</p>
                    <p class="fw-bold" style="color:yellow">Our Story</p>
                    <p style="color:grey">Founded on 25-May-2024, Piseth Computer Shop was born out of a passion for technology and a desire to make cutting-edge computer products accessible to everyone. We understand the rapidly evolving tech landscape and strive to keep our inventory updated with the newest and most reliable products on the market.</p>
                    <p class="fw-bold" style="color:yellow">Our Products and Services</p>
                    <p style="color:grey">We offer a wide range of products, including:
                        <br/>-Desktops and Laptops<br/>
                        -Gaming PCs and Accessories<br/>
                        -Computer Components (CPUs, GPUs, RAM, etc.)<br/>
                        -Peripherals (Keyboards, Mice, Monitors)<br/>
                        -Software Solutions<br/>
                        -Networking and Security Solutions<br/>
                        -Repair and Maintenance Services<br/>
                        -Custom Builds and Upgrades<br/>
                        -Training and Support Services<br/>
                        -Online Store and Delivery Services<br/>
                        -Payment Options (Cash, Credit/Debit Card, Online Payment)<br/>
                        -Return and Exchange Policies<br/>
                        -Customer Support and Service<br/>
                        -Social Media Presence (Facebook, Instagram, Twitter, etc.)<br/>
                        -Partnerships with Other Tech Companies<br/>
                    </p>
                    <p class="fw-bold" style="color:yellow">Educational Purpose</p>
                    <p style="color:grey">This site was created as part of an educational project for my Laravel development course. The aim is to demonstrate my understanding of web development, database management, and e-commerce functionalities within a real-world context. Through this project, I have gained valuable experience in building a fully functional website that not only showcases products but also ensures a smooth and secure shopping experience for users.</p>
                    <p class="fw-bold" style="color:yellow">Our Commitment</p>
                    <p style="color:grey">We are committed to:<br/>
                        -Offering high-quality products at competitive prices
                        <br/>-Providing excellent customer service and support
                        <br/>-Continuously improving our website for better user experience
                        <br/>-Ensuring secure and seamless transactions</p>
                </div>
            </div>
            <div class="topic-titles">

                <span id="line"></span>
                <span>ABOUT OWNER</span>
                <span id="line"></span>
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <div class="main-profile ">
                    <div class="row">
                      <div class="col-lg-4">
                        <img src="{{asset('assets/homeassets/images/big-profile.png')}}" alt="" style="border-radius: 23px;">
                      </div>
                      <div class="col-lg-4 align-self-center">
                        <div class="main-info header-text">
                          <span>Owner Info</span>
                          <h4 class="text-light">CHUOB PISETH</h4>
                          <p class="text-light">The CEO of Piseth Computer Shop.</p>
                          <div class="main-border-button">
                            <a href="https://chuobpiseth.vercel.app/about" target="_blank">Read More</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 align-self-center">
                        <ul>
                          <li>Study at <span>The University of Cambodia</span></li>
                          <li>College<span>CoST</span></li>
                          <li>Study Major<span>Computer Science</span></li>
                          <li>Student ID<span>65-210092</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
</div>
@endsection
