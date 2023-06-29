<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title>Nithi's | Portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/cv.png" />
        
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url(); ?>/assets/css/styles.css" rel="stylesheet" />

        <style>
            .navbar-nav .nav-item:hover .nav-link,
            .navbar-nav .nav-item.active .nav-link{
                font-size: larger;
                
            }

            @media (max-width: 991.98px) {
                .navbar-nav .nav-item .nav-link {
                    padding: 0.5rem 1rem;
                }
            }
        </style>
    
</head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 position-fixed fixed-top">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?php echo $greet[1]; ?>">
                        <span class="fw-bolder text-primary text-gradient d-inline"><?php echo $greet[0]; ?></span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="<?php echo $nav_link[0]; ?>"><span class="text-dark"><?php echo $nav[0];?></span></a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo $nav_link[1]; ?>"><span class="text-dark"><?php echo $nav[1];?></span></a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo $nav_link[2]; ?>"><span class="text-dark"><?php echo $nav[2];?></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </main>
    </body>
</html>
