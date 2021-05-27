{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')

  <section class="hero section-bg-dark" style="background-image: url(@asset('images/hero-bg.jpg')); ">
    <div class="hero-content text-center">
      <img src="@asset('images/hero-ocelot-logo.png')" alt="Ocelot Logo" class="hero__logo">
      <h2 class="hero__subtitle">GAME CERTIFICATION, PORTING AND OPTIMISATION SPECIALISTS.</h2>
      <ul class="plataforms list-unstyled d-flex justify-content-center align-items-center">
        <li><img src="@asset('images/platform-logo-01.svg')" alt="" class="platforms__logo"></li>
        <li><img src="@asset('images/platform-logo-02.svg')" alt="" class="platforms__logo"></li>
        <li><img src="@asset('images/platform-logo-03.svg')" alt="" class="platforms__logo"></li>
        <li><img src="@asset('images/platform-logo-04.svg')" alt="" class="platforms__logo"></li>
      </ul>
    </div>
  </section>

  <section class="ocelot-section section-bg-dark">
    <section class="block-two-columns">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-5 col-xl-6">
            <img src="" alt="" class="block-two-columns__image">
          </div>

          <div class="col-md-8 col-lg-7 col-xl-6">
            <h4 class="block-two-columns__subtitle text-uppercase">Video Game</h4>
            <h2 class="block-two-columns__title text-uppercase">CERTIFICATION, PORTING & OPTIMISATION</h2>
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
                <img src="@asset('images/icon-certification.png')" alt="" class="service-card__image">
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
                <a href="#" class="service-card__button btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-card">
              <div class="service-card__content">
                <img src="@asset('images/icon-porting.png')" alt="" class="service-card__image">
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
                <img src="@asset('images/icon-optimisation.png')" alt="Service Icon" class="service-card__image">
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

  <section class="section-contact text-center">
    <div class="section-contact__container">
      <h3 class="section-contact__title text-uppercase">Contact Us</h3>
      <p class="section-contact__subline">If you have a project you want to discuss or have further questions about our services please feel welcome to get in touch below.</p>

      <div class="section-contact__form">
        {{-- Add contact form 7 --}}
      </div>
    </div>
  </section>

@endsection
