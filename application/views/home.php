<!-- Header-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-lg-5 align-items-center px-5">
            <div class="col-xxl-5 pt-lg-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start mt-4">
                    <div class="badge bg-gradient-primary-to-secondary m-4 p-2">
                        <div class="text-uppercase">
                            <span><?php echo $badge[0]; ?> &middot; <?php echo $badge[1]; ?></span>
                        </div>
                    </div>
                    
                    <div class="card border-0 rounded-4 mb-3">
                        <div class="card-body">
                            <div class="p-2">
                                <p class="fw-bolder"><?php echo $about[0];?></p>
                                <p><?php echo $about[1];?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-0 d-sm-flex justify-content-center justify-content-xxl-start mx-5 pb-5">
                        <a class="btn rounded-pill btn-light btn-outline-secondary px-5 py-3 me-sm-3 fs-6 fw-bold" href="<?php echo $btn_link[0]; ?>"><?php echo $btnname[0];?></a>
                        <a class="btn rounded-pill btn-primary px-5 py-3 fs-6 fw-bolder" href="<?php echo $btn_link[1]; ?>"><?php echo $btnname[1];?></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 mx-xxl-5 mt-xxl-5 p-xxl-5">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center">
                    <div class="col-12 pb-0">
                        <img class=" mx-xxl-5 img-fluid rounded-4" src="<?php echo $profile; ?>" alt="Profile Picture" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


