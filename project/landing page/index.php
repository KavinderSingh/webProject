<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require_once('../cdnScripts.php')
    ?>
    <link rel = "stylesheet" href = "styles.css">
    <title>E-commerce</title>
</head>
<body>

    <?php
      require_once('../header.php');
    ?>

    <div class="">
        <div class="row row-content">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="../img/electronics/banner.jpeg" alt="First slide" height="400" width= "900">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../img/clothing/banner.jpg" alt="Second slide"  height="400" width= "900">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../img/footwear/banner.jpg" alt="Third slide"  height="400" width= "900">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Explore Your Technology</h1>
        <p class="lead">Find Your Virtual World!</p>
        <a class="badge badge-pill badge-primary" style="background: linear-gradient(-45deg, #067aa5, #0ff3be );" href="../electronics/electronics.php">
          <h3 style="padding: 2px;">View All Electronics</h3>
        </a>
        
      </div>
    </div>
      <div class="row row-content" style="background-color: white;">
          <div class="xd col-sm-2">
              <img class="card-img-top"src="../img/electronics/ad1.gif" alt="First slide" height="320" width= "200">
          </div>
          
              <div class="col-sm-8">
              <div id="myc" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#myc" data-slide-to="0" class="active"></li>
                      <li data-target="#myc" data-slide-to="1"></li>
                      <li data-target="#myc" data-slide-to="2"></li>
                    </ol>
                  <div class="carousel-inner" role = "listbox">
                    <div class="carousel-item active">
                        <div class="container">
                          <div class="row">                     
                             <div class="elec-cr col-sm-3"> 
                              <div class="card">
                                  <img class="card-img-top"src="../img/electronics/earpods.jpg" alt="First slide" height="200" width= "200">
                                  <div class="card-body">
                                      <p class="card-text">
                                          Apple AirPods (....
                                          <br>
                                          <p class="highlight">
                                              Upto 30% OFF
                                          </p>
                                        </p>
                                      </div>
                                </div>
                            </div>
                            <div class="elec-cr col-sm-3">
                              <div class="card">
                                  <img class="card-img-top"src="../img/electronics/headphones.jpg" alt="First slide" height="200" width= "200">
                                  <div class="card-body">
                                      <p class="card-text">
                                          Bose Headphones (....
                                          <br>
                                          <p class="highlight">
                                              From Rs.5,000
                                          </p>
                                        </p>
                                      </div>
                                </div>
                            </div>
                            <div class="elec-cr col-sm-3">
                              <div class="card">
                                  <img class="card-img-top"src="../img/electronics/bose.jpg" alt="First slide" height="200" width= "200">
                                  <div class="card-body">
                                    <p class="card-text">
                                        Sony Pods (....
                                        <br>
                                        <p class="highlight">
                                            From Rs. 25,000
                                        </p>
                                      </p>
                                  </div>
                                </div>
                            </div>
                            <div class="elec-cr col-sm-3">
                              <div class="card">
                                  <img class="card-img-top"src="../img/electronics/apple.jpg" alt="First slide" height="200" width= "200">
                                  <div class="card-body">
                                      <p class="card-text">
                                        Apple Lightning earphones (....
                                          <br>
                                          <p class="highlight">
                                              New Arrivals
                                          </p>
                                        </p>
                                      </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card">
                          <img class="card-img-top"src="../img/electronics/discount.png" alt="First slide" height="300" width= "500">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                    </div>
                    </div>
                    
                  <a class="carousel-control-prev" href="#myc" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <!-- <span class="sr-only">Previous</span> -->
                  </a>
                  <a class="carousel-control-next" href="#myc" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <!-- <span class="sr-only">Next</span> -->
                  </a>
              </div>
          </div>
          <div class="xd col-sm-2">
              <img class="card-img-top"src="../img/electronics/ad2.png" alt="First slide" height="320" width= "200">
          </div>
      </div>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Your Fashion's One Stop Shop</h1>
          <p class="lead">Know Your Fashion!</p>
          <a class="badge badge-pill badge-primary col-sm-3 mb-2" style="background: linear-gradient(-45deg, #067aa5, #0ff3be );" href="../clothing/clothing.php">
            <h3 style="padding: 2px;">View All Clothes</h3>
          </a>
          <a class="badge badge-pill badge-primary col-sm-3" style=" margin-left: 5px;background: linear-gradient(-45deg, #067aa5, #0ff3be );" href="../footwear/footwear.php">
            <h3 style="padding: 2px;">View All FootWears</h3>
          </a>

        </div>
      </div>

      <h2 class="clothing-heading container">Clothing</h2>

      <div class="row row-content"style="background-color: white;" >
          <!-- <div class="xd col-2">
              <img class="card-img-top"src="../img/elecad.gif" alt="First slide" height="320" width= "200">
          </div> -->
          
          <div class="ml-auto mr-auto">
            <div id="clothing" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#clothing" data-slide-to="0" class="active"></li>
                    <li data-target="#clothing" data-slide-to="1"></li>
                    <li data-target="#clothing" data-slide-to="2"></li>
                  </ol>
                <div class="carousel-inner" role = "listbox">
                  <div class="carousel-item active">
                      <div class="container">
                      <div class="row">
                          <div class="elec-cr col-3">
                            <div class="card">
                                <img class="card-img-top"src="../img/clothing/shirt1.jpg" alt="First slide" height="200" width= "200">
                                <div class="card-body">
                                    <p class="card-text">
                                        Shirt 1
                                        <br>
                                        <p class="highlight">
                                            Upto 30% OFF
                                        </p>
                                      </p>
                                    </div>
                              </div>
                          </div>
                          <div class="elec-cr col-3">
                            <div class="card">
                                <img class="card-img-top"src="../img/clothing/shirt2.jpg" alt="First slide" height="200" width= "200">
                                <div class="card-body">
                                    <p class="card-text">
                                        CLOTHING ITEM 2
                                        <br>
                                        <p class="highlight">
                                            From Rs. 25,000
                                        </p>
                                      </p>
                                    </div>
                              </div>
                          </div>
                          <div class="elec-cr col-3">
                            <div class="card">
                                <img class="card-img-top"src="../img/clothing/shirt3.jpg" alt="First slide" height="200" width= "200">
                                <div class="card-body">
                                  <p class="card-text">
                                      CLOTHING ITEM 3
                                      <br>
                                      <p class="highlight">
                                          From Rs. 25,000
                                      </p>
                                    </p>
                                </div>
                              </div>
                          </div>
                          <div class="elec-cr col-3">
                            <div class="card">
                                <img class="card-img-top"src="../img/clothing/shirt4.jpg" alt="First slide" height="200" width= "200">
                                <div class="card-body">
                                    <p class="card-text">
                                        CLOTHING ITEM 4
                                        <br>
                                        <p class="highlight">
                                            New Arrivals
                                        </p>
                                      </p>
                                    </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    
                  </div>
                  <!-- <div class="carousel-item">
                    <div class="card">
                        <img class="card-img-top"src="../img/discount-elec.png" alt="First slide" height="300" width= "100">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div> -->
                  </div>
                  <div class="carousel-item">
                    <div class="card">
                        <img class="card-img-top"src="../img/electronics.jpeg" alt="First slide" height="300" width= "500">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                  </div>
                <a class="carousel-control-prev" href="#clothing" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#clothing" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- <div class="xd col-2">
            <img class="card-img-top"src="../img/elecad.png" alt="First slide" height="320" width= "200">
        </div> -->
      </div>

      
      <h2 class="footwear-heading container">FootWears</h2>

      <div class="row row-content"style="background-color: white;" >
        <!-- <div class="xd col-2">
            <img class="card-img-top"src="../img/elecad.gif" alt="First slide" height="320" width= "200">
        </div> -->
        
        <div class="ml-auto mr-auto">
          <div id="footwear" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#footwear" data-slide-to="0" class="active"></li>
                  <li data-target="#footwear" data-slide-to="1"></li>
                  <li data-target="#footwear" data-slide-to="2"></li>
                </ol>
              <div class="carousel-inner" role = "listbox">
                <div class="carousel-item active">
                    <div class="container">
                    <div class="row">
                        <div class="elec-cr col-3">
                          <div class="card">
                              <img class="card-img-top"src="../img/footwear/shoe1.jpg" alt="First slide" height="200" width= "200">
                              <div class="card-body">
                                  <p class="card-text">
                                      CLOTHING ITEM 1
                                      <br>
                                      <p class="highlight">
                                          Upto 30% OFF
                                      </p>
                                    </p>
                                  </div>
                            </div>
                        </div>
                        <div class="elec-cr col-3">
                          <div class="card">
                              <img class="card-img-top"src="../img/footwear/shoe2.jpg" alt="First slide" height="200" width= "200">
                              <div class="card-body">
                                  <p class="card-text">
                                      CLOTHING ITEM 2
                                      <br>
                                      <p class="highlight">
                                          From Rs. 25,000
                                      </p>
                                    </p>
                                  </div>
                            </div>
                        </div>
                        <div class="elec-cr col-3">
                          <div class="card">
                              <img class="card-img-top"src="../img/footwear/shoe3.jpg" alt="First slide" height="200" width= "200">
                              <div class="card-body">
                                <p class="card-text">
                                    CLOTHING ITEM 3
                                    <br>
                                    <p class="highlight">
                                        From Rs. 25,000
                                    </p>
                                  </p>
                              </div>
                            </div>
                        </div>
                        <div class="elec-cr col-3">
                          <div class="card">
                              <img class="card-img-top"src="../img/footwear/shoe4.jpg" alt="First slide" height="200" width= "200">
                              <div class="card-body">
                                  <p class="card-text">
                                      CLOTHING ITEM 4
                                      <br>
                                      <p class="highlight">
                                          New Arrivals
                                      </p>
                                    </p>
                                  </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  
                </div>
                <!-- <div class="carousel-item">
                  <div class="card">
                      <img class="card-img-top"src="../img/discount-elec.png" alt="First slide" height="300" width= "100">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                </div> -->
                </div>
                <div class="carousel-item">
                  <div class="card">
                      <img class="card-img-top"src="../img/electronics.jpeg" alt="First slide" height="300" width= "500">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                  </div>
                </div>
              <a class="carousel-control-prev" href="#footwear" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <!-- <span class="sr-only">Previous</span> -->
              </a>
              <a class="carousel-control-next" href="#footwear" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <!-- <span class="sr-only">Next</span> -->
              </a>
          </div>
      </div>
      <!-- <div class="xd col-2">
          <img class="card-img-top"src="../img/elecad.png" alt="First slide" height="320" width= "200">
      </div> -->
    </div>
    <?php
      require_once('../footer.php');
    ?>
   
</body>
</html>