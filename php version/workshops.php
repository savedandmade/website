<!DOCTYPE html>
<html lang="en">
<?php include("header.php"); ?>
<!-- page content -->


        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-6 bg-grey"> 
                    <!-- <div class="masthead-subheading">Welcome To Our Studio!</div> -->
                    <div class="masthead-heading text-uppercase">Workshops</div>
                    <!--    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a> -->
                    </div>
                    <div class="col-sm-4 col-md-6"></div>
                </div>
            </div>
        </header>
      



        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Workshops</h2>
                    <h3 class="section-subheading text-muted">All of my workshops currently take place at Hazlehurst Studios, Runcorn but can be run from any suitable venue.</h3>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#workshopModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/sewingformen.jpg" alt="Sewing fro Men - An introduction to MYOG, Upcycling and Repairing" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sewing for Men</div>
                                <div class="portfolio-caption-subheading text-muted"> An introduction to MYOG, Upcycling and Repairing</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#workshopModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img//workerjacket.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Make a Worker Jacket</div>
                                <div class="portfolio-caption-subheading text-muted">
                                Make a simple worker jacket </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3 -->
                        <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#workshopModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/toolbelt.JPG" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Make a Tool Belt</div>
                                <div class="portfolio-caption-subheading text-muted">
                                Learn how to design and make your own multi purpose toolbelt</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3 -->
                        <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#workshopModalToolRoll">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/toolroll.JPG" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Make a Tool Roll</div>
                                <div class="portfolio-caption-subheading text-muted">
                                Learn how to design and make your own multi purpose tool roll</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3 -->
                        <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#workshopModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/workshop-kneeler.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Make a Garden Kneeler</div>
                                <div class="portfolio-caption-subheading text-muted">
                                Learn how to design and make a durable garden kneeler</div>
                            </div>
                        </div>
                    </div>
                   


                
                </div>
            </div>
        </section>
      
<?php include("workshop_modals.php"); ?> 
<?php include("footer.php"); ?>