<!-- Contact Info Social Start -->
@if (env('FACEBOOK_LINK') || env('TWITTER_LINK') || env('LINKEDIN_LINK') || env('INSTAGRAM_LINK'))

    <div class="col-md-3 col-xs-6 col-xxs-12">
        <!-- Contact Info Item Start -->
        <div class="contact-info--item text-center">
            <h2 class="h4">Find Us On:</h2>
            <div class="contact-info--social">
                <ul class="nav">
                    @if (env('FACEBOOK_LINK'))
                        <li><a href="{{ env('FACEBOOK_LINK') }}"><i class="fa fa-facebook"></i></a></li>
                    @endif
                    @if (env('TWITTER_LINK'))
                        <li><a href="{{ env('TWITTER_LINK') }}"><i class="fa fa-twitter"></i></a></li>
                    @endif
                    @if (env('LINKEDIN_LINK'))
                        <li><a href="{{ env('LINKEDIN_LINK') }}"><i class="fa fa-linkedin"></i></a></li>
                    @endif
                    @if (env('INSTAGRAM_LINK'))
                        <li><a href="{{ env('INSTAGRAM_LINK') }}"><i class="fa fa-instagram"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
        <!-- Contact Info Social End -->

@endif
