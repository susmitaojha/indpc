<x-frontend-header-component />
<section id="hero" class="innerBanner">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background: url('{{ asset('public/assets/front_images/' . $homeimagebanner->file_path) }}') center center no-repeat;">
                <div class="overlayBanner"></div>
                <div class="carousel-container">
                    <div class="container">
                        <!--<h1>Blogs</h1>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cashStides">
    <div class="container">
        <div class="csArea">
            <div class="cs1">
                <ul>
                    @forelse ($imageblogs as $image)
                    <li class="secendLi"><a href="">
                            <img src="{{ asset('public/assets/front_images/' . $image->file_path) }}">
                            <div class="overGallery">
                                <h5>{!! $image->image_name !!}</h5>
                            </div>
                        </a>
                    </li>
                    @empty
                    <li class="secendLi">
                        <a href="">
                            <img src="{{ asset('public/assets/front/images/banner.jpg') }}">
                            <div class="overGallery">
                                <h5>eCommerce &amp; Retail</h5>
                            </div>
                        </a>
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
<x-frontend-footer-component />
