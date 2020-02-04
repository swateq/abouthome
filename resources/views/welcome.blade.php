@extends('layouts.main')

@section('content')
    @include('partials.nav')
    <div class="owl-slider">
        <div id="carousel" class="owl-carousel owl-theme">
            <div class="item">
                <img class="owl-lazy" data-src="img/slider1.jpg" alt="">
            </div>
            <div class="item">
                <img class="owl-lazy" data-src="img/slider2.jpg" alt="">
            </div>
        </div>
    </div>

    <section class="text-center my-32">
        <h2 class="text-3xl">Zaprojektujemy i wykonamy dla Ciebie wymarzone meble</h2>
        <p>Stworzone, dla szczęścia Twojego i Twoich bliskich.</p>
    </section>

    <section class="flex container mx-auto my-8">
        <div>
            <img src="img/point.png" alt="">
        </div>
        <div class="ml-6 mt-4">
            <h2 class="text-2xl">About Home</h2>
            <span class="line"></span>
            <p class="mb-4">Projektujemy eleganckie i ponadczasowe meble na wymiar, które doskonale odzwierciedlają osobowości ich właścicieli.</p>
            <a href="#" class="uppercase text-white bg-main rounded-full py-2 px-4 hover:bg-white hover:text-main border border-main">Sprawdź naszą ofertę</a>
        </div>
    </section>

    <section class="flex container mx-auto my-12 leading-loose">
        <div>
            <h3 class="text-2xl">Indywidualny projekt</h3>
            <p>Współpracując z nami masz bezpośredni wpływ na finalny wygląd mebli.</p>
        </div>
        <div>
            <h3 class="text-2xl">Profesjonalna obsługa</h3>
            <p>Jesteśmy z Tobą w stałym kontakcie na każdym etapie Twojego projektu.</p>
        </div>
        <div>
            <h3 class="text-2xl">Precyzyjny montaż</h3>
            <p>Bezpieczna instalacja mebli w Twoim domu z gwarancją jakości wykonania.</p>
        </div>
    </section>

    <section class="bg-fixed" style="background-image: url('img/parallax.jpg')">
        <div class="text-white container mx-auto">
            <h3 class="pt-32 text-4xl">Praktyczne meble na wymiar!</h3>
            <p class="pb-32">Nasz doświadczony zespół ściśle współpracuje z partnerami i klientami, aby realizować indywidualne aspiracje.</p>
        </div>
    </section>

    <section>

    </section>
@endsection

@section('script')
<script>
    jQuery("#carousel").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        dots: true,
        /*
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        */
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        responsive: {
            0: {
            items: 1
            }
        }
    });
</script>
@endsection
