<section class="home-slider position-relative pt-50">
    <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">

        @if (session()->get('slider'))
            @forelse ( session()->get('slider') as $slider)

                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Trade-in offer</h4>
                                    <h1 class="animated fw-900 text-brand"


                                    >{{ $slider->short_desc?? " " }}</h1>
                                    <p class="animated">{{ $slider->offer_desc??'' }}</p>
                                    <a class="animated btn btn-brush btn-brush-3"
                                    href="{{ $slider->link?? "#" }}"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1"   src="{{ asset($slider->image??' '        ) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse

        @endif
    </div>
    <div class="slider-arrow hero-slider-1-arrow"></div>
</section>
