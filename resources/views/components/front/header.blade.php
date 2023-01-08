<!-- Header Infobar Start -->
<div class="header--infobar">
    <div class="container">
        <!-- Logo Start -->
        <div class="logo float--left">
            <h3 class="h3">
                <a href="/">
                    <img class="img-fluid" src="./front/img/logos/logo-full.png" width="125" alt="">
                </a>
            </h3>
        </div>
        <!-- Logo End -->

        <ul class="info nav float--right hidden-xs">
            <li>
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>

                <div class="content">
                    <p>Reach Us</p>
                    <p>{{ env('COMPANY_PHONE') }}</p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>

                <div class="content">
                    <p>{{ env('COMPANY_ADDRESS1') }}</p>
                    <p>{{ env('COMPANY_ADDRESS2') }}</p>
                </div>
            </li>

            <li>
                <div class="icon">
                    <i class="fa fa-clock-o"></i>
                </div>

                <div class="content">
                    <p>09:00 - 05:00 pm</p>
                    <p>Mon - Fri</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- Header Infobar End -->
