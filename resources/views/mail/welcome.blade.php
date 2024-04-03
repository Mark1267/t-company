@extends('layouts.mail.app')

@section('content')
    <div class="col-12" style="width: 100% !important; font-size: 30px;">
        <h4 style="text-align: center; text-transform: capitalize; margin: 0; color: #00001c;">Welcome to {{ config('settings.site.name') }}.</h4>
   </div>
   <div class="col-12" style="padding: 15px 15px; margin: 15px 0px; background-color: #00001c; word-wrap: break-word; color: #fff;">
        <h4>Dear {{ $user->full_name }},</h4>

        <p style="box-sizing: border-box; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">Warm greetings from {{ config('settings.site.name') }}, a pioneering cloud crypto mining platform. We are thrilled to extend our warm welcome to you as you join our platform.</p>
        
        <p style="box-sizing: border-box; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">Founded with a core mission, our company is dedicated to offering dependable access to digital mining and streamlined fund management services for our clients. We take immense pride in our unwavering dedication to providing top-tier solutions that cater to the diverse needs of our valued customers.</p>
        
        <p style="box-sizing: border-box; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">We would like to hear your thoughts on our services and if there is anything we can do to enhance your experience with us. Your feedback is important to us and we are always looking for ways to improve our offerings.</p>
        
        <p style="box-sizing: border-box; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">Thank you for choosing {{ config('main.site.name') }} as your trusted crypto mining partner. We look forward to working with you.</p>

        <p style="box-sizing: border-box; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">We invite you to visit our website to explore the different <a href="{{ route('plans') }}">mining plans</a> we offer, and see how we can help you reach your investment goals. If you have any questions or concerns, please do not hesitate to reach out to us. Our customer service team is here to assist you.</p>
        
        <p style="box-sizing: border-box; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">
            <b>
                Best regards,<br />
                {{ config('settings.site.name') }} Team
            </b>
        </p>
   </div>
   <div style="margin: 15px 0px; background-color: #eeeeee; color: black;">
        <p style="font-size: 12px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">You have received this email because either you or someone else registered on our platform using your email address. If this was not done by you, please reach out to us for assistance.</p>
   </div>
@endsection