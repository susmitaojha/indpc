<x-frontend-header-component />
<section id="hero" class="innerBanner">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background: url('{{ asset('public/assets/front_images/' . $homeimagebanner->file_path) }}') center center no-repeat;">
                <div class="overlayBanner"></div>
                <div class="carousel-container">
                    <div class="container">
                        <!--<h1>Our Products</h1>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="galC">
    <div class="container">
        <div class="row">
            @forelse ($imageour_products as $image)
             <div class="col-4">
                <a href="{{ asset('public/assets/front_images/' . $image->file_path) }}">
                    <div class="gcImg"><img src="{{ asset('public/assets/front_images/' . $image->file_path) }}"><span></span></div>
                    <h5>{!! $image->image_name !!}</h5>
                </a>
            </div>
            @empty
            <div class="col-4">
                <a href="{{ asset('public/assets/front/images/banner.jpg') }}">
                    <div class="gcImg"><img src="{{ asset('public/assets/front/images/banner.jpg') }}"><span></span></div>
                    <h5>InDPC Photo Award</h5>
                </a>
            </div>
            @endforelse
        </div>
    </div>
</div>
<x-frontend-footer-component />
