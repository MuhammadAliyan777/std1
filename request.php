<?php
$conn = mysqli_connect("localhost","root","","vision_pj");
$sql = "SELECT * FROM admission_tbl";
$res = mysqli_query($conn,$sql);
if(isset($_POST["btn"]))
{
$a = $_POST["name"];
$b = $_POST["email"];
$c = $_POST["class"];
$d = $_POST["message"];

$sql1 = "INSERT INTO `admission_tbl`(`ID`, `NAME`, `EMAIL`, `CLASS`, `MESSAGE`) VALUES (NULL,'$a','$b','$c','$d')";
$res1 = mysqli_query($conn,$sql1);
header("location: Admission.php");
}




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Edustage Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area white-header">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="Home.PhP">
              <img class="logo-2" src="img/logo2.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="Home.PhP">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Pages</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item active">
                      <a class="nav-link" href="Admission.php">Admission</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="course-details.html"
                        >Course Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="elements.html">Elements</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Blog</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->
        <!--================Home Banner Area =================-->
        <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Admission</h2>
                <div class="page_link">
                  <a href="Home.PhP">Home</a>
                  <a href="Admission.php">Request For Online Portal</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div style="margin-top: 70px;">
              <h2 style="text-align: center ;" class="mb-3">Request For Online Portal</h2>
              <p style="text-align: center ;">
               Submit a request for Online Portal to get your Login Id And Password.
              </p>
    </div>
    <section class="contact_area section_gap">
      <div class="container">
          <div class="col-lg-9">
            <form
              class="row contact_form"
              action="#"
              method="post"
              id="contactForm"
             
            >
              <div class="col-md-6">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter student name"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email address"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your email address'"
                    required=""
                  />
                </div>
                
                <div class="form-group">

<select class="w-100" >
<option   class="w-100" selected>Choose...</option>
<option  class="w-100" value="1">Student Portal</option>
<option  class="w-100" value="2">Driver Portal</option>
<option   class="w-100" value="3">Parent Portal</option>
</select>
</div>
                </div>
             
              <div class="col-md-6">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="1"
                    placeholder="Enter any Message"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter any Message'"
                    required=""
                  ></textarea>
                </div>
              </div>
              <div class="col-md-12 w-100">
                <button name = "btn" type="submit" value="submit" class="btn primary-btn w-100">
                Submit Request
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
   
          <?php
include "footer.php";

?>
          </body>


          </html>