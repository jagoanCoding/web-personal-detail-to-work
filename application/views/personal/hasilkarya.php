<section class="bg-secondary">
    <div class="jumbotron">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="<?= base_url('hasilkarya/pukultikus'); ?>" target="blank"><img src="<?= base_url('assets/img/slider/slider1.png'); ?>" class="d-block" alt=""></a>
                            </div>
                            <div class="col">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>GAME PUKUL TIKUS</h4>
                                    <p class="text-secondary">Pukul tikus tanah dan dapatkan poin dari setiap pukulan yang kena !.</p>
                                    <small class="text-dark"><i>Saya akan sangat berterimakasih apabila anda memainkan dan memberikan feedback pada admin</i></small>
                                    <br>
                                    <a href="<?= base_url('hasilkarya/pukultikus'); ?>" target="blank"><button class="btn btn-dark mt-5">Mainkan</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="<?= base_url('auth'); ?>" target="blank"><img src="<?= base_url('assets/img/slider/slider2.png'); ?>" class="d-block" alt=""></a>
                            </div>
                            <div class="col bg-white">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>CODEIGNITER ADMIN</h4>
                                    <p class="text-secondary"> Sistem login lengkap menggunakan codeigniter dan beberapa fitur untuk pengelolaan admin.</p>
                                    <small class="text-dark"><i>Saya akan sangat berterimakasih apabila anda mengunjungi dan memberikan feedback pada admin</i></small>
                                    <br>
                                    <a href="<?= base_url('auth'); ?>" target="blank"><button class="btn btn-dark mt-5">Kunjungi</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item h-auto">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="<?= base_url('hasilkarya/restapi'); ?>" target="blank"><img src="<?= base_url('assets/img/slider/slider3.png'); ?>" class="d-block" alt=""></a>
                            </div>
                            <div class="col">
                                <div class="carousel-caption d-none d-md-block p-3">
                                    <h4 class="">REST API</h4>
                                    <p class="text-secondary">Penggunaan public api dalam kategori film, menampilkan top film sesuai pencarian.</p>
                                    <small class="text-dark"><i>Saya akan sangat berterimakasih apabila anda berkunjung dan memberikan feedback pada admin</i></small>
                                    <br>
                                    <a href="<?= base_url('hasilkarya/restapi'); ?>" target="blank"><button class="btn btn-dark mt-5">Kunjungi</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- <div class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="5500" data-simulate-touch="true">
        <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="images/home-slider-slide-1.jpg">
                <div class="swiper-slide-caption text-center">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                    <h3 class="medium text-primary">Game Pukul Tikus</h3>
                                </div>
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">Pukul tikus tanah dan dapatkan poin dari setiap pukulan yang kena !</h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Saya akan sangat berterimakasih apabila anda memainkan dan memberikan feedback pada admin</p>
                                <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" target="_blank" href="">Mainkan</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/home-slider-slide-2.jpg">
                <div class="swiper-slide-caption text-center">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="1s">
                                    <h3 class="medium text-primary">Sistem Login</h3>
                                </div>
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">Sistem login lengkap menggunakan codeigniter dan beberapa fitur untuk pengelolaan admin</h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Silahkan kunjungi link di bawah untuk mencoba sistem yang saya buat, jika ada masalah silahkan hubungi admin</p>
                                <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="<?= base_url('auth'); ?>">Pergi Sekarang</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/home-slider-slide-3.jpg">
                <div class="swiper-slide-caption text-center">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                    <h3 class="medium text-primary">Rest Api</h3>
                                </div>
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">Penggunaan public api dalam kategori film, menampilkan top film sesuai pencarian</h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Web ini hanya rest api public, bukan web streaming film, silahkan kunjungi dan berikan feedback anda</p>
                                <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="#">Pergi Sekarang</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-scrollbar d-lg-none"></div>
        <div class="swiper-nav-wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div> -->
</section>