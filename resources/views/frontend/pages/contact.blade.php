@extends('frontend.master')
@section('body')
<h1 class="text-center contact-heading mt-4">Contact Us</h1>
<div class="container">
    <div class="row justify-content-center contact-form">
        <div class="col-md-8 mx-auto my-5">
            <form method="post" id="enquiryCreateForm" action="https://hms.infyom.com/send-enquiry">
                <input type="hidden" name="_token" value="lehBkHv5U0RFlIWNrZtxQg91f66ObgbXMTR1CJqK">                                                            <div class="row mb-md-3 mb-sm-1">
                    <div class="col-md-12 mb-3">
                        <input type="text"
                               class="form-control "
                               name="full_name" value=""
                               placeholder="Full Name" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="email"
                               class="form-control "
                               name="email" value=""
                               placeholder="Email" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="tel"
                               class="form-control "
                               id="phoneNumber" name="contact_no" value=""
                               placeholder="Contact No" required
                               onkeyup='if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'>
                        <input id="prefix_code" name="prefix_code" type="hidden">
                    </div>
                    <span id="valid-msg" class="hide">✓ Valid</span>
                    <span id="error-msg" class="hide"></span>
                    <div class="col-md-12 mb-3">
                        <select id="type" name="type"
                                class="form-control ">
                            <option value="1">General Inquiry</option>
                            <option value="2">Feedback/Suggestions</option>
                            <option value="3">Residential Care</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                                <textarea name="message"
                                          class="min-height form-control "
                                          placeholder="Message" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" id="btnContact" class="btn btn-primary btn-flat send-enquiry-btn">Send
                            Enquiry
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection