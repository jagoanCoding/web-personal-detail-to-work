<section class="bg-whisper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-9 col-xl-7">
                <div class="section-50 section-md-75 section-xl-100">
                    <h3>Hubungi Saya</h3>
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="row row-30">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="request-form-name" type="text" name="name" data-constraints="@Required">
                                    <label class="form-label" for="request-form-name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="request-form-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                    <label class="form-label" for="request-form-phone">Telephon</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="request-form-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="request-form-email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap form-wrap-outside">
                                    <!--Select 2-->
                                    <select class="form-input select-filter" id="request-form-select" data-minimum-results-for-search="Infinity">
                                        <option>Kategori</option>
                                        <option value="laporkan">Laporkan</option>
                                        <option value="meminta">Meminta</option>
                                        <option value="lainya">Lainya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <textarea class="form-input" id="feedback-2-message" name="message" data-constraints="@Required"></textarea>
                                    <label class="form-label" for="feedback-2-message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="button button-block button-primary" type="submit">Kirim
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>