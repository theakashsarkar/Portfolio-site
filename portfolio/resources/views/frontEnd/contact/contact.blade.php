@extends('frontEnd.master')
@section('body')
<section class="w3l-contacts-12 py-5">
        <div class="container py-md-3">
            <div class="contacts12-main">
                <div class="title-section">
                    <h3 class="main-title-w3 mb-md-5 mb-4">Want to get in touch? <br>Find me on
                        <a href="tel:+12-331-456-789" class="text-primary">phone</a>,
                        <a href="mailto:mymail@mail.com" class="text-primary">email</a>,
                        <a href="#twitter" class="text-primary">twitter</a>
                        or <a href="#linkedin" class="text-primary">linkedin</a>.</h3>
                </div>
                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="">
                    <div class="main-input">
                        <input type="text" name="w3lName" placeholder="Enter your name" class="contact-input"
                            required="" />
                        <input type="email" name="w3lSender" placeholder="Enter your mail" class="contact-input"
                            required="" />
                        <input type="number" name="w3lPhone" placeholder="Your phone number" class="contact-input"
                            required="" />
                        <textarea class="contact-textarea contact-input" name="w3lMessage"
                            placeholder="Enter your message" required=""></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn-primary btn primary-btn-style">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endSection