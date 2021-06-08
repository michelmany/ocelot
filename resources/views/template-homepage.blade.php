{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')

  <section class="hero section-bg-dark" style="background-image: url(@field('hero_background_image'))">
    <div class="hero__content text-center">
      @hasfield('hero_logo')
        <img src="@field('hero_logo', 'url')" alt="@field('hero_logo', 'alt')" class="hero__logo">
      @endfield

      @hasfield('hero_subtitle')
        <h2 class="hero__subtitle">@field('hero_subtitle')</h2>
      @endfield

      @hasfields('plataforms')
        <ul class="plataforms list-unstyled d-flex justify-content-center align-items-center">
          @fields('plataforms')
            <li>
              <img 
                src="@sub('platform_logo', 'url')" 
                alt="@sub('platform_logo', 'alt')" 
                class="platforms__logo">
            </li>  
          @endfields
        </ul>
      @endhasfields
    </div>
  </section>

  <section class="ocelot-section section-bg-dark">
    <section class="block-two-columns">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-5 col-xl-6">
            <div class="block-two-columns__image-wrapper">
              <img 
                src="@asset('images/ocelot-welcome-logo.png')" 
                alt="Ocelot Welcome Logo" 
                class="block-two-columns__image">
              <img 
                src="@asset('images/welcome-logo-shadow.png')"
                class="block-two-columns__image-shadow" 
                alt="Ocelot Logo shadow">
            </div>
          </div>

          <div class="col-md-8 col-lg-7 col-xl-6">
            <h4 class="block-two-columns__subtitle text-uppercase">Video Game</h4>
            <h2 class="block-two-columns__title text-uppercase">Certification, Porting & Optimisation</h2>
            <p class="block-two-columns__copy">
              Hello there, we are Ocelot.<br><br>
              We specialise in a variety of development solutions including game certification, porting and optimisation. We have a vast degree of experience across many different platforms allowing us to deliver effective solutions based on years of experience. Please read below to find out more about our core services. If you want to get in touch, please use the contact option  and we’d love to hear from you.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="block-services-cards">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="service-card">
              <div class="service-card__content">
                <img src="@asset('images/card-icon-certification.png')" alt="" class="service-card__image">
                <p class="ocelot-subtitle">Ocelot</p>
                <h3 class="service-card__title text-uppercase">Certification</h3>
                <p class="service-card__description">This is a snippet of information about the service on offer. It doesn’t need to be a lot, just enough to give a good overview of what’s on offer.  This is a snippet of information about the service on offer. It doesn’t need to be a lot, just enough to give a good overview of what’s on offer.</p>
                <ul class="plataforms list-unstyled list-unstyled d-flex justify-content-center align-items-center">
                  <li><img src="@asset('images/platform-logo-01.svg')" alt="" class="platforms__logo"></li>
                  <li><img src="@asset('images/platform-logo-02.svg')" alt="" class="platforms__logo"></li>
                  <li><img src="@asset('images/platform-logo-03.svg')" alt="" class="platforms__logo"></li>
                  <li><img src="@asset('images/platform-logo-04.svg')" alt="" class="platforms__logo"></li>
                </ul>
              </div>
              <div class="service-card__btn-wrapper">
                <a href="#" class="service-card__button btn">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-card">
              <div class="service-card__content">
                <img src="@asset('images/card-icon-porting.png')" alt="" class="service-card__image">
                <p class="ocelot-subtitle">Ocelot</p>
                <h3 class="service-card__title text-uppercase">Porting</h3>
                <p class="service-card__description">This is a snippet of information about the service on offer. It doesn’t need to be a lot, just enough to give a good overview of what’s on offer.  This is a snippet of information about the service on offer. It doesn’t need to be a lot, just enough to give a good overview of what’s on offer.</p>
                <ul class="plataforms list-unstyled list-unstyled d-flex justify-content-center align-items-center">
                  <li><img src="@asset('images/platform-logo-01.svg')" alt="" class="platforms__logo"></li>
                  <li><img src="@asset('images/platform-logo-02.svg')" alt="" class="platforms__logo"></li>
                  <li><img src="@asset('images/platform-logo-03.svg')" alt="" class="platforms__logo"></li>
                  <li><img src="@asset('images/platform-logo-04.svg')" alt="" class="platforms__logo"></li>
                </ul>
              </div>
              <div class="service-card__btn-wrapper">
                <a href="#" class="service-card__button btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-card">
              <div class="service-card__content">
                <img src="@asset('images/card-icon-optimisation.png')" alt="Service Icon" class="service-card__image">
                <p class="ocelot-subtitle">Ocelot</p>
                <h3 class="service-card__title text-uppercase">Optimisation</h3>
                <p class="service-card__description">This is a snippet of information about the service on offer. It doesn’t need to be a lot, just enough to give a good overview of what’s on offer.  This is a snippet of information about the service on offer. It doesn’t need to be a lot, just enough to give a good overview of what’s on offer.</p>
                <ul class="plataforms list-unstyled list-unstyled d-flex justify-content-center align-items-center">
                  <li><img src="@asset('images/platform-logo-01.svg')" alt="" class="platforms__logo"></li>
                  <li><img src="@asset('images/platform-logo-02.svg')" alt="" class="platforms__logo"></li>
                  <li><img src="@asset('images/platform-logo-03.svg')" alt="" class="platforms__logo"></li>
                  <li><img src="@asset('images/platform-logo-04.svg')" alt="" class="platforms__logo"></li>
                </ul>
              </div>
              <div class="service-card__btn-wrapper">
                <a href="#" class="service-card__button btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <section id="section-contact" class="section-contact text-center">
    <div class="section-contact__container">
      <h3 class="section-contact__title text-uppercase">Contact Us</h3>
      <p class="section-contact__subline">If you have a project you want to discuss or have further questions about our services please feel welcome to get in touch below.</p>

      <div class="section-contact__form-wrapper">
        @shortcode('[wpforms id="19" title="false"]')
      </div>
    </div>
  </section>

@endsection
