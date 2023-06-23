<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5 pt-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline"><?php echo $title; ?></span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-4">
                    <div class="card-body p-0">
                            <?php if(isset($rows[0])):?>
                                <div class="d-flex align-items-center">
                                    <div class="p-4 col-6">
                                                <h2 class="fw-bolder"><?php echo $rows[0]->title; ?></h2>
                                                <p><?php echo $rows[0]->content; ?><p>                                                    
                                    </div>
                                            <img class="img-fluid w-50 h-25" src="<?php echo base_url();?><?php echo $rows[0]->image;?>" alt="..." />   -->
                                </div>
                            <?php endif; ?>

                    </div>
                </div>
                <!-- Project Card 2-->
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="card-body p-0">
                        <?php if(isset($rows[1])):?>
                            <div class="d-flex align-items-center">
                                <div class="p-4 col-6">
                                    <h2 class="fw-bolder"><?php echo $rows[1]->title; ?></h2>
                                    <p><?php echo $rows[1]->content; ?><p>  
                                </div>
                                    <img class="img-fluid w-50 h-50" src="<?php echo base_url();?><?php echo $rows[1]->image;?>" alt="..." />     
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>