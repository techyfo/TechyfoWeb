<section id="contact" class="section">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <p class="section_subtitle mx-auto">Contact Us</p>
                <h2>Need help? Consult an expert on our team</h2>
            </div>
        </div>

        <div class="contact-info pt-4 pb-4">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="single-contact-info contact-color-1">
                        <div class="contact-info-icon">
                            <i class="lni lni-map-marker"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">{!! getSetting('site_address') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="single-contact-info contact-color-2">
                        <div class="contact-info-icon">
                            <i class="lni lni-envelope"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text"><a href="mailto:{{getSetting('site_email')}}">{{getSetting('site_email')}}</a> </p>
                            <p class="text"><a href="mailto:{{getSetting('site_support_email')}}">{{getSetting('site_support_email')}}</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="single-contact-info contact-color-3">
                        <div class="contact-info-icon">
                            <i class="lni lni-phone"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text"><a href="tel:{{getSetting('site_phone')}}">{{getSetting('site_phone')}}</a> </p>
                            <p class="text"><a href="tel:{{getSetting('site_support_phone')}}">{{getSetting('site_support_phone')}}</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <livewire:contact-form />

            </div>
            <div class="col-lg-6">
                <div class="mt-4 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1000ms">

                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d228.14850365250697!2d90.3539961240994!3d23.80522298907458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHouse-119-120%2C%20Road-2%2C%20Block-CHA%2C%20Mirpur-2%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1710674123326!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>


    </div>
</section>
