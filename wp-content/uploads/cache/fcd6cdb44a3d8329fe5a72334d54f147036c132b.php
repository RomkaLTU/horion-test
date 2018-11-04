<?php $__env->startSection('content'); ?>
  <section class="slider" id="slider" style="background-image: url(<?= App\asset_path('images/main.jpg'); ?>)">
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
        <div class="inner" style="background-image:url(<?= App\asset_path('images/photo_brewery.jpg'); ?>)">
          <div class="cta">
            <h5>Experience Our craft beers</h5>
            <h3>TRADITIONAL BREWERY</h3>
            <a href="javascript:" class="btn-main">VIEW MORE</a>
          </div>
        </div>
      </div>

      <div class="right">
        <div class="right-top">
          <div class="inner" style="background-image:url(<?= App\asset_path('images/restaurant_pubs.jpg'); ?>)">
            <div class="cta">
              <h5>AWARD WINNING</h5>
              <h3>RESTAURANT & PUBS</h3>
              <a href="javascript:" class="btn-main">VIEW MORE</a>
            </div>
          </div>
        </div>
        <div class="right-bottom">
          <div>
            <div class="inner" style="background-image:url(<?= App\asset_path('images/foto_host_party.png'); ?>)">
              <div class="cta">
                <h5>AWARD WINNING</h5>
                <h3>RESTAURANT & PUBS</h3>
                <a href="javascript:" class="btn-main">VIEW MORE</a>
              </div>
            </div>
          </div>
          <div>
            <div class="inner" style="background-image:url(<?= App\asset_path('images/photo_lodging.jpg'); ?>)">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>