<x-frontend-header-component />
<section id="hero" class="innerBanner">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background: url('{{ asset('public/assets/front_images/' . $homeimagebanner->file_path) }}') center center no-repeat;">
                <div class="overlayBanner"></div>

                <div class="carousel-container">
                    <div class="container">
                        <!--<h1>Contact Us</h1>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="innerBodyText">
    <div class="container">
        <div class="row">
            <!--<h2>Get in Touch</h2>-->
            <div class="contactForm">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="cf">
                        <form>
                            <fieldset>
                                <input type="text" placeholder="Name">
                            </fieldset>
                            <fieldset>
                                <input type="text" placeholder="Email">
                            </fieldset>
                            <fieldset>
                                <textarea placeholder="Message"></textarea>
                            </fieldset>
                            <fieldset>
                                <input type="submit" value="SUBMIT NOW">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</div>
<x-frontend-footer-component />
