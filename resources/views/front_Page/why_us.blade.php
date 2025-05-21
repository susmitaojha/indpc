<x-frontend-header-component />
<section id="hero" class="innerBanner">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"
                style="background: url('{{ asset('public/assets/front_images/' . $homeimagebanner->file_path) }}') center center no-repeat;">
                <div class="overlayBanner"></div>
                <div class="carousel-container">
                    <div class="container">
                        <!--<h1>Why Choose Us</h1>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="innerBodyText">

    <div class="ibt">
        <div class="ibtLeft"><img src="{{ asset('public/assets/front/images/banner.jpg') }}"></div>
        <div class="ibtRight">
            <h2>Why INDPC</h2>
            <p>InDPC thrives as a haven for the uncommon, the exquisite, and the bizarre, embracing the rich tapestry of
                this nation's visual culture. Think of it as a refined boutique, where every item tells a unique
                story—curated with care and brimming with character. It stands in stark contrast to the sprawling,
                generic offerings of mass-market superstores like Walmart, which cater to utility and widespread appeal.
                InDPC elevates its purpose by catering to connoisseurs of craftsmanship and eccentricity, those who seek
                treasures that resonate with individuality and depth. From rare collectibles to stunning specialties,
                each piece reflects a thoughtful celebration of heritage and artistry, making it a beacon for those who
                appreciate quality over quantity. Like a bijou nestled amidst the commonplace, InDPC invites its patrons
                on a journey to explore the extraordinary, to uncover pieces that evoke wonder and nostalgia. It holds a
                mirror to the nation's creative soul, offering an array of curated oddities that speak volumes about the
                vibrant, diverse cultural landscape. With its dedication to excellence and distinctiveness, InDPC
                redefines the experience of discovery, creating a connection that transcends mere transactions,
                enriching the lives of those who walk through its doors. It’s not just a shop—it’s a cultural
                destination.</p>


        </div>
    </div>
</div>


<div class="servicesMain">
    <div class="container">
        <div class="sm">
            <div class="row">
                <div class="col-4">
                    <div class="smblock">
                        <div class="smbTop"><img src="{{ asset('public/assets/front/images/ethicsn.png') }}"></div>
                        <div class="smbBtm">
                            <h4>We're Ethical</h4>
                            <p>Indian Documentary Photo Collective rewards the work, not the name, and not the
                                curriculum vitae. We award visual storytellers regardless of their past success or
                                network. We look at the works with fresh minds and eyes freed from any dogma or modus
                                operandi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="smblock">
                        <div class="smbTop"><img src="{{ asset('public/assets/front/images/magic.png') }}"></div>
                        <div class="smbBtm">
                            <h4>We have Magic</h4>
                            <p>There is something magical and awkward and stylish at the same time about InDPC. We are
                                pretty unique with a constant out-of-the-box attitude. We don't believe the hype and
                                don't follow any trends. We are the trend makers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="smblock">
                        <div class="smbTop"><img src="{{ asset('public/assets/front/images/simplicity.png') }}"></div>
                        <div class="smbBtm">
                            <h4>We love Simplicity</h4>
                            <p>We don't like articulated slogans and sophisticated vocabulary. We believe that the arts
                                should be for everyone.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<x-frontend-footer-component />
