<!-- Contact Section Start -->
<div class="contact--section pd--80-0 bg--color-lightgray">
    <!-- Contact Map Wrapper Start -->
    <div class="contact--map-wrapper reset--gutter">
        <div class="col-sm-6 col-sm-offset-6">
            <!-- Contact Map Start -->
            <div id="map" class="contact--map" data-map-latitude="-1.266809440887002"
                data-map-longitude="36.76542316456387" data-map-zoom="17"
                data-map-marker="[[-1.266809440887002, 36.76542316456387]]"></div>
            <!-- Contact Map End -1.266809440887002, 36.76542316456387 -->
        </div>
    </div>
    <!-- Contact Map Wrapper End -->

    <!-- Contact Form Start -->
    <div class="contact--form">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="title">
                        <h2 class="h3">Contact Us</h2>
                    </div>
                    <div class="form-group">
                        <input wire:model="name" type="text" name="name" placeholder="John Doe" class="form-control contact-name"
                            required>
                    </div>

                    <div class="form-group">
                        <input wire:model="email" type="email" name="email" placeholder="johndoe@example.com"
                            class="form-control contact-email">
                    </div>

                    <div class="form-group">
                        <input wire:model="subject" type="text" name="subject" placeholder="Subject" class="form-control contact-subject"
                            required>
                    </div>

                    <div class="form-group">
                        <textarea wire:model="body" name="message" class="form-control contact-message" placeholder="Hi..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-block btn-default active" wire:click="send">Submit</button>
                    {{-- <div class="message">
                        <p class="email-loading"><img src="/front/img/loading.gif"
                                alt="">&nbsp;&nbsp;&nbsp;Sending...</p>
                        <p class="email-success"><i class="icon fa fa-check"></i> Your quote has
                            successfully been sent.</p>
                        <p class="email-failed"><i class="icon fa fa-times"></i> Something went wrong!
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
</div>
<!-- Contact Section End -->
