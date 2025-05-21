<x-frontend-header-component />
<section id="hero" class="innerBanner">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background: url('{{ asset('public/assets/front_images/' . $homeimagebanner->file_path) }}') center center no-repeat;">
            <div class="overlayBanner"></div>


			<div class="carousel-container">
                <div class="container">
                    <!--<h1>About Us</h1>-->
                </div>
            </div>
          </div>
        </div>
    </div>
</section>

@forelse ($imageabout_us as $image)
<div class="innerBodyText {{ $image->alignment == 'left' ? 'hygin' : '' }}">
  <div class="ibt">
    <div class="ibtLeft">
      <img src="{{ asset('public/assets/front_images/' . $image->file_path) }}" alt="About Us Image">
    </div>
    <div class="ibtRight">
      {!! $image->details !!}
    </div>
  </div>
</div>
@empty
<div class="innerBodyText">
  <div class="ibt">
    <div class="ibtLeft"><img src="{{ asset('public/assets/front/images/banner.jpg') }}"></div>
    <div class="ibtRight">
      <h2>What We Do</h2>
      <p>We take our mission to heart by organizing documentary film screenings across rural and semi-rural regions, as well as tier two and tier three cities. For us, it’s not just about showing films; it’s about creating spaces for dialogue, learning, and empowerment. These screenings bring together communities to experience stories that resonate with their lives and offer new perspectives on the world around them.</p>

      <p>But we don’t stop there. We carry photography—powerful, thought-provoking imagery—directly to those who may never have the opportunity to leave their small villages or cities. By bringing visual narratives to their doorsteps, we hope to ignite a sense of wonder, curiosity, and cultural pride. We believe that these images have the potential to spark conversations and broaden horizons, no matter how distant the place.</p>

      <p>Through our endeavors, we are also building a platform to promote the work of documentary photographers. We aim to nurture emerging talent and shine a spotlight on the unique voices capturing India’s vibrant stories.</p>
    </div>
  </div>
</div>
@endforelse

<x-frontend-footer-component />
