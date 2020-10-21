<?php 
session_start();
// $mysqli = new mysqli("localhost","root","","spark_intern");
$mysqli = new mysqli("fdb29.awardspace.net","3621382_spark",":n:WR_I41MG}PEcI","3621382_spark");


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MyProject</title>
    <link rel="stylesheet" href="Piggy-Bank.css" />
    <link rel="stylesheet" href="style11.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <!-- anime css cdn -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- font awsome cdn end -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- bootstrap cdn end -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <!-- W3 school cdn end -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- popper js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <!-- bootstrap js cdn -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- type js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- header start -->

    <div class="bs-example">
        <nav class="navbar-dark navbar-expand-md navbar" id="navbar1">

            <a href="#" style="text-decoration: none;">
                <!-- <h2 class="title"> <i class="fa fa-dollar-sign" aria-hidden="true" id="logo"></i> Piggy-Bank
                </h2> -->
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTeceFqcw4X52e-Y_me29L0F7HYIo2v7-kW0w&usqp=CAU"
                    alt="LOGO" class="logo-img">
                <h2 class="title" id="title"> BMS
                </h2>

            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <div class="navbar-nav m-2" id="navdiv">
                    <a href="#my" class="nav-item nav-link">Home</a>
                    <a href="#target" class="nav-item nav-link">About</a>
                    <a href="#services" class="nav-item nav-link">Services</a>
                    <a href="#whyus" class="nav-item nav-link">Why Us</a>
                    <a href="#footer" class="nav-item nav-link">Contact</a>
                    <a href="#users" class="nav-item nav-link">Current Users</a>
                    <a href="#trans" class="nav-item nav-link">Transactions</a>
                    <a href="#" class="nav-item nav-link"><button class="signup-btn">Open Account</button></a>
                    <a href="#" class="nav-item nav-link"><button class="signup-btn">Account Login</button></a>
                </div>
            </div>
        </nav>
    </div>

    <!-- header end -->

    <div class="wrapper" style="overflow: hidden !important;">
        <header class="my" id="my">
            <div id="typed-strings">
                <p>
                    All Credit transfer Facilities At Your Home!
                </p>
                <p>Your Comfort is Our Goal</p>
                <p>credit transfer made easier</p>
                <p>open your account now</p>
            </div>
            <p id="typed"></p>

            <script>
                var typed = new Typed( "#typed", {
                    stringsElement: "#typed-strings",
                    smartbackspace: true,
                    loopCount: Infinity,
                    showCursor: false,
                    loop: true,
                    typeSpeed: 50,
                    backSpeed: 50,
                } );
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        </header>
    </div>

    <div id="target">
        <div class="leftbox">
            <div id="leftbox" class="jumbotron">
                <h1>About Us</h1>
                <p>
                    We mix latest technology with all credit transfer facilities to standout
                    from other BMS , This is our approach . We
                    understand your needs but also we make sure to give you all the facilities that you require to make
                    your life easier
                    , this is where we hit.
                    <br> <b>Our goal is simple <q>Provide the customer all BMS facilities at their home</q></b>
                </p>
                <hr />
                <p style="font-size: 25px;">
                    Check out our <strong>Services </strong> Below
                </p>
            </div>

            <div>
                <img src="https://teamoxio.com/assets/others/Bankin&Finance1.png" class="fluid" alt="image"
                    id="middlebox" />
            </div>
        </div>
    </div>
    <section class="section" id="serv">
        <div class="container">
            <div class="row">
                <div class="feat bg-gray pt-4 pb-4">
                    <div class="container">
                        <div class="row">
                            <div class="section-head col-sm-12">
                                <h4 id="services"><span>Our</span> Services</h4>
                            </div>
                            <div class="col-lg-4 col-sm-6 " id="a">
                                <div class="item">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <h6>Online Account Service</h6>
                                    <p>
                                        We made Account facilities all online.
                                        <br><b>Facilities: Creation , Modifiaction , Deletion(Closing).</b>
                                        <br>All 3 Facilities are online.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6" id="b">
                                <div class="item">
                                    <span class="icon"><i class="fa fa-dollar-sign" aria-hidden="true"></i></span>
                                    <h6>Payment Facilities</h6>
                                    <p>
                                        Depositing and retrieving money is made easier by us.
                                        <b>deposit/retrieve money</b> right away <b>from our BMS website</b> making it
                                        more
                                        flexible
                                        as it works <b>24*7</b>.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6" id="c">
                                <div class="item">
                                    <span class="icon"><i class="fa fa-briefcase"></i></span>
                                    <h6>Online Loan facility</h6>
                                    <p>
                                        As you all know applying for loan is not an easy job ,
                                        but we made it easier for our clients as by <b>just few clicks</b>
                                        our BMS will provide you <b>instant loan facility</b>.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6" id="d">
                                <div class="item">
                                    <span class="icon"><i class="fa fa-money-bill"></i></span>
                                    <h6>Instant Insurance Facility</h6>
                                    <p>
                                        provide us your data and we will provide you <b>best insurance policies</b> for
                                        you
                                        rigth away.the process will be <b>instant</b>.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6" id="e">
                                <div class="item">
                                    <span class="icon"><i class="fa fa-star"></i></span>
                                    <h6>Wealth Management</h6>
                                    <p>
                                        All your money will be managed by our <b>highly trained and expert managers</b>
                                        in best
                                        way possible <b>giving you all and max benefits</b>.

                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6" id="f">
                                <div class="item">
                                    <span class="icon"><i class="fa fa-recycle"></i></span>
                                    <h6>Currency Exchange</h6>
                                    <p>
                                        We give you a lot of options/choices to choose from acc to
                                        your business type , and we also provide <b>all types of currency exhcange</b>
                                        right
                                        away
                                        <b>on our BMS portal</b>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Features v.1 -->
    <section class="text-center my-5">
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold my-5" style="font-size: 50px;" id="whyus">
            Why Us?
        </h2>
        <!-- Section description -->
        <p class="lead grey-text w-responsive mx-3 mb-5">
            Leading BMS Providing All Services Online To You
        </p>

        <!-- Grid row -->
        <div class="row">


            <!-- Grid column -->
            <div class="col-md-4">
                <br />
                <h5 class="font-weight-bold my-4" style="font-size: 35px;">
                    <i class="fas fa-briefcase mb-5" id="icons"></i> <br /><br />
                    We are not new to this
                </h5>

                <p class="grey-text p-5" style="color: gray;">
                    We are doing this for almost 12 years and this is something that will
                    gonna help you. Because experience is helps a lot.
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">
                <br />
                <h5 class="font-weight-bold my-4" style="font-size: 35px;">
                    <i class="fab fa-steam mb-5" id="icons"></i> <br /><br />
                    Automation
                </h5>

                <p class="grey-text p-5" style="color: gray;">
                    After our life we We don't believe in doing every thing manually .
                    We put software with right strategy on work.
                </p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-4">
                <br />
                <h5 class="font-weight-bold my-4" style="font-size: 35px;">
                    <i class="fas fa-heart mb-5" id="icons"></i> <br /><br />
                    We care most
                </h5>

                <p class="grey-text p-5" style="color: gray;">
                    After our life we most care about that is providing our customer the
                    best. You focus only on business and We got your back. If there is
                    any assistance you need we are here at your service.
                </p>
            </div>
            <!-- Grid column -->
        </div>

    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <h2 class="h1-responsive font-weight-bold " style="font-size: 30px;text-align: center;">
                            Send Money
                        </h2>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-2">
                    <form action='./logic.php' method="post">
                        <div class="form-group">
                            <label for="exampleInput10" id="dyn_name">Receiver Name:</label>
                            <input type="text" class="form-control" id="exampleInput10" aria-describedby="Help"
                                placeholder="Enter Your Name" name="name">

                        </div>
                        <div class="form-group">
                            <label for="exampleInput2">Receiver's E-Mail:</label>
                            <input type="email" class="form-control" id="exampleInput2" aria-describedby="Help"
                                placeholder="Enter Receiver's E-Mail" name="email">
                            <small class="text-muted" style="font-size: 12px;">"make sure you enter the correct e-mail
                                of the reciever"</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInput3" id="dyn_email">Your E-Mail:</label>
                            <input type="email" class="form-control" id="exampleInput3" aria-describedby="Help"
                                placeholder="Enter Your E-Mail" name="senderemail">
                            <small class="text-muted" style="font-size: 12px;">"make sure you have an active account
                                associated with
                                Piggy-BMS"</small>

                        </div>
                        <div class="form-group">
                            <label for="exampleInput1">Amount:</label>
                            <input type="number" class="form-control" id="exampleInput1" aria-describedby="amounthelp"
                                placeholder="Enter Amount" name="amount">
                            <small class="text-muted" style="font-size: 12px;">"make sure you have appropriate balance
                                amount in your
                                account"</small>

                        </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-dark" style="border-radius: 50px;"
                        data-dismiss="modal">Close</button>
                    <input type="submit" name="sendmoney" class="btn btn-outline-dark " style="border-radius: 50px;" value="Send Money">
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->

    <!-- another modal start -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <h2 class="h1-responsive font-weight-bold " style="font-size: 30px;text-align: center;">
                            Request Money
                        </h2>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-2">
                    <form action="./logic.php" method="post">
                        <div class="form-group">
                            <label for="exampleInput5">Your Name:</label>
                            <input type="text" class="form-control" id="exampleInput5" aria-describedby="Help"
                                placeholder="Enter Your Name" name="loanname">

                        </div>

                        <div class="form-group">
                            <label for="exampleInput6">Your E-Mail:</label>
                            <input type="email" class="form-control" id="exampleInput6" aria-describedby="Help"
                                placeholder="Enter Your E-Mail" name="loanemail">
                            <small class="text-muted" style="font-size: 12px;">"make sure you have an active account
                                associated with
                                Piggy-BMS"</small>

                        </div>
                        <div class="form-group">
                            <label for="exampleInput1">Amount:</label>
                            <input type="number" class="form-control" id="exampleInput1" aria-describedby="amounthelp"
                                placeholder="Enter Amount" name="loanamount">
                            <small class="text-muted" style="font-size: 12px;">"you can only request money 2 times and
                                the amount should be less than
                                10000 credits"</small>

                        </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-dark" style="border-radius: 50px;"
                        data-dismiss="modal">Close</button>
                    <input type="submit" name="wantloan" class="btn btn-outline-dark" style="border-radius: 50px;" value="Request Money">
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <!-- another modal end -->

    <!-- Current Users section start -->
    <h2 class="h1-responsive font-weight-bold my-5" style="font-size: 50px;text-align: center;" id="users">
        Current Users
    </h2>
            <?php

if(isset($_SESSION['error_msg']))
{
  ?>
  <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
  <p><b><?php  echo $_SESSION['error_msg']; ?></b></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php
 
  unset($_SESSION['error_msg']);
}
if(isset($_SESSION['success_msg']))
{
  ?>
  <div class='alert alert-success alert-dismissible fade show m-0' role='alert'>
  <p><b><?php echo $_SESSION['success_msg']; ?></b></p>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
     <?php 
  
  unset($_SESSION['success_msg']);
}
     ?>
    <form class="form-inline ">

        <input class="search" type="text" placeholder="Search by Name , E-mail , Mobile Number . . ."
            aria-label="Search">
        <button class="search-btn">Search</button>
    </form>


    <table class="table ">
        <thead>
                        <tr>
                <th>Serial No.
                    <hr>
                </th>
                <th>User Name
                    <hr>
                </th>
                <th>User E-mail
                    <hr>
                </th>
                <th> Mobile Number
                    <hr>
                </th>
                <th>Current Balance
                    <hr>
                </th>
                <th>Send Money
                    <hr>
                </th>
                <th>Request Money
                    <hr>
                </th>

            </tr>

         

        </thead>
              <?php 
$sql= "select * from users";
 $result = $mysqli -> query($sql);
   if($mysqli -> affected_rows > 0)
  {
    while($row = $result -> fetch_assoc())
    {
      
   ?>

        <tbody>
            <tr>
            <td><?php echo $row['sno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['credit']; ?></td>
           <td><a href="javascript:void(0)" data-name="<?php echo $row['name']; ?>" data-email="<?php echo $row['email']; ?>"  class="search-btn" data-toggle="modal" data-target="#exampleModalCenter">Send Credits</a></td>
       <td><a href="javascript:void(0)" data-name="<?php echo $row['name']; ?>" data-email="<?php echo $row['email']; ?>" class="search-btn" data-toggle="modal" data-target="#exampleModalCenter1">Request</a></td>

<?php 

    } 
}
 ?>/</tr>

        </tbody>

    </table>

    <!-- Current Users section end -->



    <!-- Transactions section start -->
    <h2 class="h1-responsive font-weight-bold my-5" style="font-size: 50px;text-align: center;" id="trans">
        Transactions
    </h2>
    <form class="form-inline ">

        <input class="search" type="text" placeholder="Search by Name , E-mail , Date . . ." aria-label="Search">
        <button class="search-btn">Search</button>
    </form>


    <table class="table ">
        <thead>
            <tr>
                <th>Transaction No.
                    <hr>
                </th>
             
                <th>Sender E-mail
                    <hr>
                </th>
          
                <th>Receiver E-mail
                    <hr>
                </th>
                   <th>Amount
                    <hr>
                </th>
                <th>Date of Transaction
                    <hr>
                </th>
             

            </tr>

          

        </thead>
          <?php 

$sql= "select * from transactions";
 $result = $mysqli -> query($sql);
   if($mysqli -> affected_rows > 0)
  {
    while($row = $result -> fetch_assoc())
    {
      
   ?>
        <tbody>
            
       

    <tr>
      <th scope="row"><?php echo $row['sno']; ?></th>
      <td><?php echo $row['sender']; ?></td>
      <td><?php echo $row['receiver']; ?></td>
      <td><?php echo $row['credit']; ?></td>
      <td><?php echo $row['date']; ?></td>


    </tr>
<?php 

    } 
}
 ?>
  </tbody>
    </table>

    <!-- Transactions section end -->



    <!-- footer start -->

    <!-- ***** Footer Start ***** -->
    <section id="footer" style="background-color: #2c303a;">
        <div class="footer">
            <div class="inner-footer">
                <!--  for company name and description -->
                <div class="footer-items">
                    <h4>Piggy-BMS</h4>
                    <div class="border1"></div>
                    <br />
                    <p> All BMS Facilities At Your Home!</p>
                    <p>Your Comfort is Our Goal</p>
                    <p>Open your account and start using all BMS services right away</p>
                </div>

                <!--  for quick links  -->
                <div class="footer-items">
                    <h4>Quick Links</h4>
                    <div class="border1"></div>
                    <br />
                    <!--for the underline -->
                    <ul>
                        <a href="#title">
                            <li>Home</li>
                        </a>
                        <a href="#target">
                            <li>About</li>
                        </a>
                        <a href="#services">
                            <li>Services</li>
                        </a>
                        <a href="#whyus">
                            <li>Why Us</li>
                        </a>
                        <a href="#footer">
                            <li>Contact</li>
                        </a>
                        <a href="#users">
                            <li>Current Users</li>
                        </a>
                        <a href="#trans">
                            <li>Transactions</li>
                        </a>
                    </ul>
                </div>

                <!--  for some other links -->
                <div class="footer-items">
                    <h4>Services</h4>
                    <div class="border1"></div>
                    <br />
                    <!--for the underline -->
                    <ul>
                        <a href="#a">
                            <li>Online Account Service</li>
                        </a>
                        <a href="#b">
                            <li>Payment Facilities</li>
                        </a>
                        <a href="#c">
                            <li>Online Loan facility</li>
                        </a>
                        <a href="#d">
                            <li>Instant Insurance Facility</li>
                        </a>
                        <a href="#e">
                            <li>Wealth Management</li>
                        </a>
                        <a href="#f">
                            <li>Currency Exchange</li>
                        </a>
                    </ul>
                </div>

                <!--  for contact us info -->
                <div class="footer-items">
                    <h4>Contact Us</h4>
                    <div class="border1"></div>
                    <br />
                    <ul>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true" id="footericons"></i><br />Meerut,Uttar
                            Pradesh,India
                        </li>
                        <br />
                        <li>
                            <i class="fa fa-phone" aria-hidden="true" id="footericons"></i><br />7055677951
                        </li><br />

                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"
                                id="footericons"></i><br />yashverma0070@gmail.com
                        </li><br />

                    </ul>

                    <!--   for social links -->
                    <div class="social-media">
                        <a href="#"><i class="fab fa-instagram" id="footericons"></i></a>
                        <a href="#"><i class="fab fa-facebook" id="footericons"></i></a>
                        <a href="#"><i class="fab fa-google-plus-square" id="footericons"></i></a>
                    </div>
                </div>
            </div>

            <!--   Footer Bottom start  -->
            <div class="footer-bottom">
                Copyright &copy; Piggy-BMS2020 </br>
                <h3>Created By <strong>MADHUR MAHESHWARI</strong></h3>
                
            </div>
        </div>
    </section>
    <!-- footer end -->
    <!-- Section: Features v.1 -->

</body>
<script type="text/javascript">
    Array.from(document.getElementsByClassName('search-btn')).map(elem=>elem.addEventListener('click',DynamicName));
    function DynamicName(e)
    {
        name= e.target.getAttribute('data-name')
        email= e.target.getAttribute('data-email')
        document.getElementById('exampleInput1').value=name
        document.getElementById('exampleInput3').value=email
            document.getElementById('exampleInput5').value=name
        document.getElementById('exampleInput6').value=email

    }

</script>
</html>