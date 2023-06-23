<!-- Header-->
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-6 pt-lg-5">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start mt-4">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4 p-2 justify-content-evenly">
                            <div class="text-uppercase">
                                <span class="mx-5 px-lg-5 p-xxl-5">
                                    <?php echo $badge[0]; ?> &middot; <?php echo $badge[1]; ?>
                                </span>
                            </div>
                        </div>
                        <!-- <div class="fs-3 fw-light text-muted">I can help your business to</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Get online and grow fast</span></h1> -->

                        <div class="card shadow border-0 rounded-4 mb-5 mt-2 mx-1 w-75 h-auto">
                            <div class="card-body">
                                <div class="p-2 text-cenetr">
                                        <p class="fw-bolder"><?php echo $about[0];?></p>
                                        <p><?php echo $about[1];?></p>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3 mx-xxl-4">
                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder shadow-lg mx-3" href="<?php echo $btn_link[0]; ?>"><?php echo $btnname[0];?></a>
                            <a class="btn btn-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="<?php echo $btn_link[1]; ?>"><?php echo $btnname[1];?></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6">
                    <!-- Header profile picture-->
                    <div class="d-flex justify-content-center mt-4 mt-xxl-5 pt-4">
                        <!-- <div class="profile rounded shadow-lg p-3 mb-5"> -->
                            <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                            <!-- Watch a tutorial on how to do this on YouTube (link)-->
                            <!-- <img class="profile-img" src="<?php echo base_url(); ?>assets/img/profile.jpg" alt="..." /> -->
                        <!-- </div> -->

                        <div class="col-12 pb-4">
                            <img class="img-fluid rounded-5 shadow-lg" src="<?php echo $profile; ?>" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

