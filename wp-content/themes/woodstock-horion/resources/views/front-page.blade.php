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

  <section class="collage">
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
@stop
