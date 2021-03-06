<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/font-awesome.min.css">     
    <link rel="stylesheet" href="./css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>IVY care</title>
      <?php
        if($_SERVER['HTTP_HOST'] == 'localhost:8080' || $_SERVER['HTTP_HOST'] == 'localhost')
           {
                $APIURL = 'http://imk.dev2.imkloud.com';
                $user = "pQqXk4dgxSh873PZW";
                $org = "7yB63oNJ4QuMtuywv";
            } else if($_SERVER['HTTP_HOST'] == '104.197.167.156')
           {
                $APIURL = 'http://imk.dev2.imkloud.com';
                $user = "pQqXk4dgxSh873PZW";
                $org = "7yB63oNJ4QuMtuywv";
            } else {
                $APIURL = 'https://prod.imkloud.com';
                $user = "gqKrCQJHBxjoXksp3";
                $org = "jFXNrA6jbG6JMQbsr";
            }
            ?>
            <script>
         window['SERVER_URL'] = '<?php echo $APIURL ?>';
         window['user_id'] = '<?php echo $user ?>';
         window['group'] = '<?php echo $org ?>'; </script>
  </head>
  <body>
   <header>
         <div class="container">
             <div class="row">
                <div class="col-sm-3 col-md-4">
                    <a href="index.php"><img src="./images/logo.png" class="img-fluid"></a>
                </div>
                <div class="col-sm-9 col-md-8">
                  <div class="text-sm-right">
                    <ul class="menu">
                      <img src="./images/cross.png" class="cross-icon">
                      <li>
                       <a href="about.php">ABOUT</a> 
                      </li>
                       <li class="dropdown">
                       <a href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TREATMENTS <span class="fa fa-caret-down"></span> </a> 
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="alpha-acid.php">Alpha lipoic acid</a>
                          <a class="dropdown-item" href="hangover.php">Hangover</a>
                          <a class="dropdown-item" href="calcium.php">EDTA Calcium “push”</a>
                          <a class="dropdown-item" href="performance.php">Performance</a>
                          <a class="dropdown-item" href="myers-cocktail.php">Myers Cocktail</a>                          
                          <a class="dropdown-item" href="hydrogen-peroxide.php">Hydrogen Peroxide</a>
                          <a class="dropdown-item" href="super-charge.php">Super Charge</a>
                        </div>
                      </li>
                       <li>
                       <a href="packages.php">PACKAGES</a> 
                      </li>
                       <li>
                       <a href="javascript:void(0);">COVID-19 TEST</a> 
                      </li>
                       <li>
                       <a href="membership.php">MEMBERSHIP</a> 
                      </li>                      
                    </ul>
                    <a href="javascript:void(0);" class="book-now">(000) 000 000</a>
                    <a href="javascript:void(0);" class="bradcrumb"><img src="./images/menu.png"></a>
                  </div> <!-- text-right end -->  
                </div>  
             </div> 
         </div> <!-- container end -->
    </header> 
    <div class="banner container">
        <img src="./images/banner.jpg" class="img-fluid">
        <div class="inner-text">
            <h3>Nutrition & Hydration</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis- mod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis dolore.</p>
            <a href="#book-now">BOOK NOW</a>
        </div>  
    </div>  <!-- banner-end -->
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="choose-box">
                    <img src="./images/drop.png" class="img-fluid d-block mx-auto">
                    <h4>A wide range of IV therapies to refresh and reboot you. 
                      <h5>ALL YOU’VE GOT TO DO IS</h5>
                      <ul>
                        <li>
                          <span>CHOOSE YOUR TREATMENT</span>
                        </li>
                        <li>
                          <span>BOOK YOUR APPOINTMENT</span>
                        </li>
                        <li>
                          <span>CONSULT WITH A PHYSICIAN</span>
                        </li>
                        <li>
                            <span>GET <br> POWERED  UP</span>
                        </li>
                      </ul>
                </div> <!-- choose-box --> 
            </div>
            <div class="col-lg-4">
                <div class="contact-box">
                    <h4>Why IV therapy is so good for you.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer
                    adipiscing elit.</p>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter">TALK TO US</a>
                </div>  
            </div>  
        </div>  <!-- row end -->
  </div> <!-- containers -->  

   <div class="treatment-list" id="book-now">
     <div class="container">
      <div class="row">
          <div class="col-md-4">
            <div class="img-height">
              <img src="./images/Treatments.jpg" class="img-fluid">
            </div>  
         </div>   
         <div class="col-md-4">
          <div class="img-height">
              <img src="./images/Boosters.png" class="img-fluid mt-md-5"> 
          </div>      
         </div>   
         <div class="col-md-4">
          <div class="img-height">
              <img src="./images/Packages.jpg" class="img-fluid">
          </div>      
         </div>   
      </div>  
       <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Treatments</a>
              </li>            
              <li class="nav-item">
                
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Packages</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <ul class="inner-box">
                    
                    <li>
                        <h3>Alpha lipoic acid</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="alpha-acid.php" class="cart">ADD TO CART</a>
                    </li>
                      <li>
                        <h3>Hangover</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="hangover.php" class="cart">ADD TO CART</a>
                    </li>
                      <li>
                        <h3>EDTA Calcium “push”</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="calcium.php" class="cart">ADD TO CART</a>
                    </li>
                    <li>
                        <h3>Performance</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="performance.php" class="cart">ADD TO CART</a>
                    </li>
                     <li>
                        <h3>Myers Cocktail</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="myers-cocktail.php" class="cart">ADD TO CART</a>
                    </li>
                     <li>
                        <h3>Hydrogen Peroxide</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="hydrogen-peroxide.php" class="cart">ADD TO CART</a>
                    </li>
                     <li>
                        <h3>Super Charge</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="super-charge.php" class="cart">ADD TO CART</a>
                    </li>                

                  </ul>

              </div>              
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <ul class="inner-box">                    
                      <li>
                       <h3>GLUTATHIONE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="glotathione.php" class="cart">ADD TO CART</a>
                    </li>
                    <li>
                        <h3>VITAMIN C</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="vitamin-c.php"  class="cart">ADD TO CART</a>
                    </li>
                    <li>
                        <h3>VITAMIN B12</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="vitamin-b12.php"  class="cart">ADD TO CART</a>
                    </li>
                    <li>
                        <h3>VITAMIN D3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                      <a href="vitamin-d3.php" class="cart">ADD TO CART</a>
                    </li>
                    <li>
                       <h3>LIPOTROPIC</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="lipotropic.php" class="cart">ADD TO CART</a>
                    </li>                   
                    <li>
                       <h3>VITAMINS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                       <a href="vitamins.php" class="cart">ADD TO CART</a>
                        
                    </li>
                    <li>
                        <h3>MINERALS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                       <a href="minerals.php" class="cart">ADD TO CART</a>
                    </li>                 
                    <li>
                        <h3>ANTIOXIDANTS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="antioxidants.php" class="cart">ADD TO CART</a>
                    </li>
                    <li>
                        <h3>AMINO ACIDS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="amino-acid.php" class="cart">ADD TO CART</a>
                    </li>                    
                    <li>
                        <h3>ANTI AGEING</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="anti-ageing.php" class="cart">ADD TO CART</a>
                    </li>                                                  

                  </ul>

              </div>
            </div> 
       </div> <!-- container end -->      
   </div> <!-- treatment-list -->
    
   <div class="container">
        <div class="row">
             <div class="col-lg-4">
                <div class="contact-box">
                    <h4>Diagnostic testing to identify your deficiencies.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer
                    adipiscing elit.</p>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#book-appointment">BOOK AN APPOINTMENT</a>
                </div>  
            </div> 
            <div class="col-lg-8">
                <div class="choose-box">
                    <img src="./images/plus.png" class="img-fluid d-block mx-auto">
                    <h4>Wellness testing so that you can customize your treatment. 
                      <h5>HERE IS WHAT WE OFFER</h5>
                      <ul>
                        <li>
                          <span>TEST YOUR DEFICIENCIES</span>
                        </li>
                        <li>
                          <span>GET SUPPLEMENTATION SUGGESTIONS</span>
                        </li>
                        <li>
                          <span> BOOK <br>A THERAPY</span>
                        </li>                       
                      </ul>
                </div> <!-- choose-box --> 
            </div>
          
        </div>  <!-- row end -->
  </div> <!-- containers -->  

     <footer>
        <div class="container">
          <div class="footer-logo">
          <img src="./images/footer.png" class="img-fluid">
          </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-2">
                    
                    <div class="inner">
                        <h3>TREATMENTS</h3>
                        <ul>
                          <li>
                             <a href="JavaScript:void(0);">Autoimmune Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Flawless Drip</a> 
                          </li>
                            <li>
                             <a href="JavaScript:void(0);">Food Poisoning Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Hangover Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Her Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Hydration Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Immunity Drip</a> 
                          </li>
                          <li>
                             <a href="JavaScript:void(0);">Jet Lag</a> 
                          </li>
                          <li>
                             <a href="JavaScript:void(0);">Migraine Drip</a> 
                          </li>                         
                        </ul>
                    </div>                      
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2">
                    <div class="inner">
                        <h3>BOOSTERS</h3>
                        <ul>
                          <li>
                             <a href="JavaScript:void(0);">Autoimmune Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Flawless Drip</a> 
                          </li>
                            <li>
                             <a href="JavaScript:void(0);">Food Poisoning Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Hangover Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Her Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Hydration Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Immunity Drip</a> 
                          </li>
                          <li>
                             <a href="JavaScript:void(0);">Jet Lag</a> 
                          </li>
                          <li>
                             <a href="JavaScript:void(0);">Migraine Drip</a> 
                          </li>                         
                        </ul>
                    </div>                       
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2">
                       <div class="inner">
                        <h3>PACKAGES</h3>
                        <ul>
                          <li>
                             <a href="JavaScript:void(0);">Autoimmune Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Flawless Drip</a> 
                          </li>
                            <li>
                             <a href="JavaScript:void(0);">Food Poisoning Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Hangover Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Her Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Hydration Drip</a> 
                          </li>
                           <li>
                             <a href="JavaScript:void(0);">Immunity Drip</a> 
                          </li>
                          <li>
                             <a href="JavaScript:void(0);">Jet Lag</a> 
                          </li>
                          <li>
                             <a href="JavaScript:void(0);">Migraine Drip</a> 
                          </li>                         
                        </ul>
                    </div>                       
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">

                    <div class="inner last">
                        <h3>ABOUT</h3>
                        <h3>TESTING</h3>
                        <h3>TALK TO A PHYSICIAN</h3>
                        <h3>BOOK A THERAPY</h3>
                       <ul class="social">
                      <li>
                        <a href="javascript:void(0);" class="fa fa-facebook"></a> 
                      </li>                      
                      <li>
                        <a href="javascript:void(0);" class="fa fa-linkedin"></a> 
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="fa fa-twitter"></a> 
                      </li>
                    </ul>
                    </div>                              
                </div>  
            </div> <!-- row end -->  
            
            <div class="bottom">
                <div class="row">
                    <div class="col-md-7">
                        <h4>ADDRESS</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy Nibh euismod tincidunt ut laoreet.</p>
                    </div>
                    <div class="col-md-5">
                        <ul class="text-md-right">
                          <li>
                            info@theivcare.com
                          </li>
                           |
                          <li>
                            +1 (000) 000 000
                          </li>
                        </ul>
                    </div>  
                </div>  
            </div>  <!-- bottom -->
        </div>  <!-- container-end -->

        
    </footer>


    <!-- Modal -->
<div class="modal fade" id="book-appointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4>Book an appointment</h4>
          <h6>Fill out the form below to book an appointment</h6>
          <form >                 
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                  <input type="Email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Contact Number">
              </div>
              <div class="form-group">              
              <input type="text" class="form-control datetimepicker-input" id="datetimepicker1" data-toggle="datetimepicker" data-target="#datetimepicker1" placeholder="Date" />
            </div>
            <div class="form-group">              
              <input type="text" class="form-control datetimepicker-input" id="datetimepicker3" data-toggle="datetimepicker" data-target="#datetimepicker3" placeholder="Time"/>
            </div>
              <button type="submit" class="submit">SUBMIT</button>  
          </form>
      </div>     
    </div>
  </div>
</div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4>Talk to us</h4>
          <h6>Have a question? Fill out the form below and we will get in touch with you!</h6>
          <form name="abouts" id="abouts">                 
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" name="Name" data-validation="required,custom" data-validation-regexp="^[a-zA-z ]{1,}$" required="required">
              </div>
              <div class="form-group">
                  <input type="Email" class="form-control" placeholder="Email" name="emailId" placeholder="Email *" data-validation="email" required="required" >
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Contact Number" id="contactNumber" data-force-validation-if-hidden="true" data-validation="required,custom" required="required" name="contactNumber">
              </div>
              <div class="form-group">
                  <textarea placeholder="Message" class="form-control" rows="5" data-validation="email" required="required" type="email"></textarea>
              </div>
              <button type="submit" class="submit">SUBMIT</button>  
          </form>
      </div>     
    </div>
  </div>
</div>



 <!-- Modal -->
<div class="modal fade" id="add-cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4>Item added successfully!</h4>   
          <a href="javascript:void(0);" class="drip">Immunity Drip</a>       
          <form > 
              <div class="form-group">         
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control">
                            <option>Patients</option>
                            <option>Low</option>
                            <option>High</option>
                        </select>  
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control price-top" placeholder="Price">
                    </div>  
                </div>          
              </div>
          
              <a href="javascript:void(0);" class="drip">Add Supplements</a>  
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Vitamin C">
                  <a href="javascript:void(0);" class="add">Add</a>
              </div>
              <div class="form-group">              
              <input type="text" class="form-control" placeholder="Vitamin B12" />
              <a href="javascript:void(0);" class="add">Add</a>
            </div>
            <div class="form-group">              
              <input type="text" class="form-control" placeholder="Super Charge"/>
              <a href="javascript:void(0);" class="add">Add</a>
            </div>
            <div class="total-price text-right">
                Total  <span>$ 000</span>
            </div>  
              <button type="submit" class="submit">SCHEDULE AN APPOINTMENT</button>  
          </form>
      </div>     
    </div>
  </div>
</div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>      
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js" ></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="./js/index.js?ver=0.4" ></script>
    <script type="text/javascript">
        
        $(function () {
            $('#datetimepicker1').datetimepicker({
              format: 'DD/MM/YYYY'
            });
            $('#datetimepicker3').datetimepicker({
              format: 'HH:mm'
            });
          });

        $(document).ready(function(){
            $("header .bradcrumb").click(function(){
                 $("header .menu") .addClass("show-menu");
            });
             $(".cross-icon").click(function(){
                 $("header .menu") .removeClass("show-menu");
            });
        });
       
   
    </script>
  </body>
</html>



