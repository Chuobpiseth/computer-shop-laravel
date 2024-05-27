
@extends('frontend.layouts.default')
@section('title','FQA')

@section('content')
<style>
    .faq-section h3 {
        color: #007bff;
    }
    .faq-section ul li {
        color: white;
    }
</style>
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
            <div class="container mt-5 faq-section">
                <h2 class="text-center">Frequently Asked Questions (FAQ)</h2>

                <h3>Ordering and Payment</h3>
                <ul style="background-color: #343a40; padding: 15px; border-radius: 5px;">
                    <li><strong>Q:</strong> How do I place an order?<br>
                        <strong>A:</strong> You can place an order through our website by selecting the desired products, adding them to your cart, and proceeding to checkout.</li>
                    <li><strong>Q:</strong> What payment methods do you accept?<br>
                        <strong>A:</strong> We accept Cash-on-Delivery, Local Bank Transfer, and Debit/Credit Cards (Visa, MasterCard, and UnionPay).</li>
                    <li><strong>Q:</strong> Is it safe to use my credit card on your website?<br>
                        <strong>A:</strong> Yes, we use secure encryption technology to ensure your payment information is protected.</li>
                </ul>

                <h3>Shipping and Delivery</h3>
                <ul style="background-color: #343a40; padding: 15px; border-radius: 5px;">
                    <li><strong>Q:</strong> What are your delivery charges?<br>
                        <strong>A:</strong> Delivery is free within Phnom Penh. There is a charge for deliveries to other locations in Cambodia. We do not offer overseas delivery.</li>
                    <li><strong>Q:</strong> How long will my order take to arrive?<br>
                        <strong>A:</strong> Orders within Phnom Penh typically arrive within 1-2 working days for Cash-on-Delivery and 1-3 working days for other payment methods.</li>
                    <li><strong>Q:</strong> Can I track my order?<br>
                        <strong>A:</strong> Yes, once your order is dispatched, you will receive a tracking number via email.</li>
                </ul>

                <h3>Returns and Exchanges</h3>
                <ul style="background-color: #343a40; padding: 15px; border-radius: 5px;">
                    <li><strong>Q:</strong> What is your return policy?<br>
                        <strong>A:</strong> We accept returns within 7 days of delivery for defective products, which can be replaced but not refunded. Non-defective products can also be returned for replacement within 7 days.</li>
                    <li><strong>Q:</strong> How do I initiate a return?<br>
                        <strong>A:</strong> Contact our customer service team with your order details and reason for the return. You will need to provide a copy of the purchase receipt.</li>
                    <li><strong>Q:</strong> Are there any items that cannot be returned?<br>
                        <strong>A:</strong> Software packages with broken seals and certain hardware peripherals may not be returnable due to third-party constraints.</li>
                </ul>

                <h3>Product Warranty</h3>
                <ul style="background-color: #343a40; padding: 15px; border-radius: 5px;">
                    <li><strong>Q:</strong> Do your products come with a warranty?<br>
                        <strong>A:</strong> Yes, all products are covered by the manufacturer’s warranty unless otherwise stated. We do not provide additional warranties.</li>
                    <li><strong>Q:</strong> What does the warranty cover?<br>
                        <strong>A:</strong> The warranty covers defects in materials and workmanship under normal use.</li>
                    <li><strong>Q:</strong> How do I claim a warranty?<br>
                        <strong>A:</strong> Contact our customer service team with your order details and a description of the defect. We will guide you through the warranty claim process.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
