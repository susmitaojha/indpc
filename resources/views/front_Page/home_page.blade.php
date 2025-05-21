<x-frontend-header-component />
<section id="hero">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"
                style="background: url('{{ asset('public/assets/front_images/' . $homeimagebanner->file_path) }}') center center no-repeat; background-size: cover;">
                <div class="overlayBanner"></div>

                <div class="socalLogo">
                    <ul>
                        @forelse ($imagesocial_link as $social_image)
                            <li><a href="{!! $social_image->social_media_link !!}" target="_blank">
                                    <img src="{{ asset('public/assets/front_images/' . $social_image->file_path) }}" alt="">
                                </a></li>
                        @empty
                            <li><a href="https://www.instagram.com/indpc35?igsh=MWlqbnM2emp5Mm5zMw==" target="_blank">
                                    <img src="{{ asset('public/assets/front/images/socialinsta.png') }}" alt="">
                                </a></li>
                            <li><a href="#"><img src="{{ asset('public/assets/front/images/linkedin.png') }}"
                                        alt=""></a></li>
                        @endforelse

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<x-frontend-footer-component />
