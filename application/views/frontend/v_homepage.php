  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(<?php echo base_url(); ?>assets_frontend/img/slider-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4"><?php echo $pengaturan->nama ?></h1>
          <p class="intro-subtitle"><span class="text-slider-items">Seputar, Informasi, Teknologi, dan Alam Semesta</span><strong class="text-slider"></strong></p>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <br/>
  <br/>
  <br/>

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Berita Yang Kami Tawarkan
            </h3>
            <p class="subtitle-a">
              Anti Hoax, Credible dan Terpercaya.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Profesionalitas</h2>
              <p class="s-description text-center">
                Wartawan kami menjujung tinggi etika profesi dibidang jurnalistik, sehingga hasil informasi yang didapat sangat profesionallitas.
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-camera"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Lulus Sensor</h2>
              <p class="s-description text-center">
                Gambar pada setiap berita yang kami tampilkan telah lulus sensor sehingga berita yang kami tawarkan aman dikonsumsi publik dibawah umur.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-stats-bars"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Fakta Bukan Opini</h2>
              <p class="s-description text-center">
                Berita yang kami tawarkan berupa fakta kami tidak menampilkan berita yang berdasarkan opini sehingga diragukan keberanaya.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <div class="section-counter paralax-mf bg-image" style="background-image: url(<?php echo base_url (); ?>assets_frontend/img/midfoot-bg.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">100</p>
              <span class="counter-text">Peliputan yang telah kami sajikan</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">10</p>
              <span class="counter-text">Tahun pengalaman Kami</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">100</p>
              <span class="counter-text">Total Karyawan Juranlis</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">10</p>
              <span class="counter-text">Penghargaan Jurnalistik</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Portfolio Star /-->
 <br>

  <!--/ Section Testimonials Star /-->
  

  <!--/ Section Blog Star /-->
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              BERITA
            </h3>
            <p class="subtitle-a">
              Artikel Terbaru Dari Kami.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php foreach($artikel as $a){ ?>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="<?php echo base_url().$a->artikel_slug ?>">
                  <?php if($a->artikel_sampul != ""){ ?>
                    <img src="<?php echo base_url(); ?>gambar/artikel/<?php echo $a->artikel_sampul ?>" alt="" class="img-fluid">
                  <?php } ?>
                </a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category"><?php echo $a->kategori_nama ?></h6>
                  </div>
                </div>

                <h3 class="card-title"><a href="<?php echo base_url().$a->artikel_slug ?>"><?php echo $a->artikel_judul ?></a></h3>

              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <span class="author"><?php echo $a->pengguna_nama; ?></span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> <?php echo date('d-M-Y', strtotime($a->artikel_tanggal)); ?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->
