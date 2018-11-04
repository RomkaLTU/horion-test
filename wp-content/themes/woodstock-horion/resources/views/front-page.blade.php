@extends('layouts.home')

@section('content')
  <section class="slider" id="slider" style="background-image: url(@asset('images/main.jpg'))">
    <div class="container">
      <div class="cta-big">
        <h2>
          COME TO PLAY
          PLAN TO STAY
        </h2>
        <a href="javascript:" class="btn-main">EXPLORE NOW</a>
      </div>
    </div>
  </section>

  <section class="collage" id="collage">
    <div class="container-fluid">

      <div class="left">
        <div class="inner" style="background-image:url(@asset('images/photo_brewery.jpg'))">
          <div class="cta">
            <h5>Experience Our craft beers</h5>
            <h3>TRADITIONAL BREWERY</h3>
            <a href="javascript:" class="btn-main">VIEW MORE</a>
          </div>
        </div>
      </div>

      <div class="right">
        <div class="right-top">
          <div class="inner" style="background-image:url(@asset('images/restaurant_pubs.jpg'))">
            <div class="cta">
              <h5>AWARD WINNING</h5>
              <h3>RESTAURANT & PUBS</h3>
              <a href="javascript:" class="btn-main">VIEW MORE</a>
            </div>
          </div>
        </div>
        <div class="right-bottom">
          <div>
            <div class="inner" style="background-image:url(@asset('images/foto_host_party.png'))">
              <div class="cta">
                <h5>AWARD WINNING</h5>
                <h3>RESTAURANT & PUBS</h3>
                <a href="javascript:" class="btn-main">VIEW MORE</a>
              </div>
            </div>
          </div>
          <div>
            <div class="inner" style="background-image:url(@asset('images/photo_lodging.jpg'))">
              <div class="cta">
                <h5>AWARD WINNING</h5>
                <h3>RESTAURANT & PUBS</h3>
                <a href="javascript:" class="btn-main">VIEW MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="blog" id="blog">
    <div class="container-fluid">
      <div class="left">
        <div class="inner" style="background-image:url(@asset('images/foto_wedding.png'))">
          <div class="cta">
            <h5>SAY I DO</h5>
            <h3>UNFORGETTABLE WEDDINGS </h3>
            <a href="javascript:" class="btn-main">VIEW MORE</a>
          </div>
        </div>
      </div>
      <div class="right">
        <div>
          <h5>OUR BLOG</h5>
        </div>
        <div>
          <article>
            <div class="head">
              <div class="date">Aug 30, 2018</div>
              <h2>Meet the creative team behind our new look</h2>
              <p class="excerpt">
                When the Woodstock Inn Brewery launched in 1995, we were able to make a name for ourselves in the
                burgeoning craft beer business, creating now...
              </p>
            </div>
          </article>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="inner" style="background-image:url(@asset('images/foto_wedding.png'))">
        <div class="cta">
          <h5>SAY I DO</h5>
          <h3>UNFORGETTABLE WEDDINGS </h3>
          <a href="javascript:" class="btn-main">VIEW MORE</a>
        </div>
      </div>
      <div class="inner" style="background-image:url(@asset('images/foto_wedding.png'))">
        <div class="cta">
          <h5>SAY I DO</h5>
          <h3>UNFORGETTABLE WEDDINGS </h3>
          <a href="javascript:" class="btn-main">VIEW MORE</a>
        </div>
      </div>
      <div class="inner black">
        <div class="cta">
          <h5>GET IN TOUCH</h5>
          <h3>135 Main Street
            North Woodstock, NH 03262
            603.745.3951
            800.321.3985</h3>
          <a href="javascript:" class="btn-main">CONTACT US</a>
        </div>
      </div>
    </div>
  </section>
@stop
