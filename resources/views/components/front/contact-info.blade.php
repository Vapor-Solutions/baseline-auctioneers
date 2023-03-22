<!-- Contact Info Section Start -->
<div class="contact-info--section pd--80-0-50">
    <div class="container">
        <!-- Contact Info Items Start -->
        <div class="contact-info--items">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-xxs-12">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info--item">
                        <h2 class="h4">Find Us:</h2>

                        <p>{{ env('COMPANY_ADDRESS1') }}</p>
                        <p>{{ env('COMPANY_ADDRESS2') }}</p>
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info--item">
                        <h2 class="h4">Call Us:</h2>

                        <p><a href="tel:{{ env('COMPANY_PHONE') }}">Phone: {{ env('COMPANY_PHONE') }} </a></p>
                        <p><a href="tel:{{ env('COMPANY_PHONE_2') }}">Mobile: {{ env('COMPANY_PHONE_2') }} </a></p>
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info--item">
                        <h2 class="h4">Mail Us:</h2>

                        <p><a href="mailto:{{ env('DEFAULT_EMAIL') }}">{{ env('DEFAULT_EMAIL') }}</a></p>
                        <p><a href="mailto:{{ env('SECONDARY_EMAIL') }}">{{ env('SECONDARY_EMAIL') }}</a></p>
                    </div>
                    <!-- Contact Info Item End -->
                </div>



                <x-front.social></x-front.social>

            </div>
        </div>
        <!-- Contact Info Items End -->
    </div>
</div>
<!-- Contact Info Section End -->
