<?php 

// require_once "about.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEDC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    li a:hover{
        text-decoration: underline;
        color: white;
        background-color: rgba(250, 235, 215, 0.24);
    }
    li a{
        text-decoration: none;  
        position: sticky;
    }
    /* #nav-mobile:hover{
        text-decoration: underline;
        color: white;
    } */
    #redfox{
        text-decoration: none;
    }
    #frost{
    
    }
    #red{
        color: cadetblue;
    }
    #sec{
        background-color: rgb(6, 6, 6);
        bottom: 0;
        width:100%;
        padding: 100px;
        position: static;
    } 
    #dress{
        bottom: 0; 
        /* position: fixed;
        text-align: center; */
    }
    .aries{
        width:200px;
        font-size:100px;
        color:blue;
    }
    #text-white{
        text-align: center;
        color:white;
        font-size:11px;
    }
    #ODIN{
        font-size:50px;
    }
    .rredd{
        color:white;
        font-size:30px;
    }
    .passs{
        font-size:19px;
        text-decoration: none;
        text-align: left;
    }
    .passs:hover{
        text-decoration: underline;
    }
    .carousel-caption{
        text-align: center;
        margin-bottom:60px;
        text-align: left;
        /* position: static; */
    }
    .hero{
        font-weight: 300;
        font-size:2.5rem;
        bottom:0;
        position: static;
        font-weight: bolder;
        margin-bottom: 20px;
    }
    .state{
        font-weight: bolder; 
        font-size:2.0rem;
    }
    .modal-body{
        background-color: rgb(245, 99, 2);
        padding: 30px;
    }
    #frod{
        background-color: white;
        padding: 30px;
    }
    .hero2{
        font-weight: bolder;
        font-size:2.8rem;
    }
    .hero3{
        /* font-weight: bolder; */
        font-size:1.9rem;
    }
    #hero3{
         font-size:1.9rem;
    }
    #date{
        border: 2px solid white;
        background-color: rgb(8, 250, 0);
        width: 200px;
        padding: 9px;
        /* width:620px; */
    }
    #date1{
        border: 2px solid white;
        background-color: rgb(185, 226, 0);
        width: 200px;
        padding: 9px;
        /* width:620px; */
    }
    #date2{
        border: 2px solid white;
        background-color: rgb(221, 53, 2);
        width: 200px;
        padding: 9px;
        /* width:620px; */
    }
    #date3{
        border: 2px solid white;
        background-color: rgb(255, 238, 0);
        width: 200px;
        padding: 9px;
        /* width:620px; */
    }
    #exampleModal{
        background-color: rgba(0, 0, 0, 0.18);
    }
    .modal-body{
      background-color: rgb(255, 255, 255);
    }
</style>
<body  class="gray lighting-7">
<nav class="black z-depth-4">
        <div>
            <a href="#" id="redfox" class="brand-text"style="margin-right:40px; font-size:20px;">AEDC</a>
            <ul  class="right hide-on-mobile-small-and-down" id="nav-mobile" >
                <li><a href="#" class="white-text brand" id="red"  style="margin-right:9px; ">home</a></li>
                <li><a href="about.php" class="white-text brand"  style="margin-right:9px;">about us</a></li>
                <!-- <li><a href="career.php" class="white-text brand"  style="margin-right:9px;">careers</a></li> -->
                <li><a href="contact us.php" class="white-text brand"  style="margin-right:9px;">contact us</a></li>
                <li><a href="./admin/dashboard.php" class="white-text brand"  style="margin-right:9px;">dashboard</a></li>
            </ul>
        </div>
    </nav>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/pic3.jpg" class="d-block w-100" id="frost" alt="...">
        <div class="carousel-caption">
        <div class="carousel-caption">
            <p class="hero">
                <h1 class="hero2">
                don't get left in the dark <br>
                <hr>
                </h1>
                <p class="hero3">you should download the power outage report system (pors)app <br> to report outage and get update</p>
                <p class="hero3">
                    *instant reporting<br>
                    *real-time update<br>
                    *improved customer <br>
                    available on Goole play and Apple App store
                </p>
           </div>
        </div>
    </div>
</div>
    <footer id="sec" class="col">
    <div class="container text-center">
  <div class="row align-items-end">
    <div id="frod" class="col d-block justify-content-center text-black aligh-items-center text-start">
    <h1>Head Office</h1>
    <p>Abuja Electricity Distribution Plc, No 1 Ziguinchor Street, Off IBB Way, Wuse <br>
     Zone 4, FCT</p>
     <p>Call: 08039070070 WhatsApp: 08152141414, 08152151515</p>
     <p>Email: customercare@abujaelectricity.com</p>
     <p>Telegram: 08152151515</p>
     <p>Facebook:@abujaelectricity</p>
     <p>Instagram: @aedcelectricity X: @aedcelectricity</p>
    
    </div>
   
    <div class="col d-block justify-content-center text-white aligh-items-center text-start">
        <a href="">
    <img src="./WROK.jpeg" class="d-block w-100" id="drok" alt="...">
    </a>
    </div>
    <p id="hero3" class="text-white  d-block justify-content-center aligh-items-center text-start">We have offices spread across our franchise areas, click on the buttons to reveal these offices.</p>



<div class="container text-center">
  <div class="row">
    <div class="col-6 col-sm-3">
    <button type="button" class="btn btn-primary d-block justify-content-center align-items-center text-center" id="date" data-bs-toggle="modal" data-bs-target="#exampleModal">
      abuja
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="exampleModalLabel" class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
    </div>
    <div class="col-6 col-sm-3">
    <button type="button" class="btn btn-primary d-block justify-content-center align-items-center text-center" id="date1" data-bs-toggle="modal" data-bs-target="#exampleModal">
 kogi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="exampleModalLabel" class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
    </div>
    
<br>
<br>
<br>
    <!-- Force next columns to break to new line -->
    <div class="w-100"></div>

    <div class="col-6 col-sm-3">
    <button type="button" class="btn btn-primary d-block justify-content-center align-items-center text-center" id="date2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  nasarawer
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="exampleModalLabel" class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
    </div>
    <div class="col-6 col-sm-3">
    <button type="button" class="btn btn-primary d-block justify-content-center align-items-center text-start" id="date3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row align-items-center">
  <div class="col">
  <h1  class="aries">AEDC</h1>
  <h1 id="text-white" class=" text-white d-block justify-content-center aligh-items-center text-start">Power of commitment</h1>
<p  id="text-white" class=" text-white d-block justify-content-center aligh-items-center text-start"> No 1 Ziguinchor Street, Off IBB Way, Wuse Zone 4, FCT</p> 
<p  id="text-white" class=" text-white d-block justify-content-center aligh-items-center text-start"> Call: 08039070070, WhatsApp: <br> 08152141414, 08152151515, <br> Telegram: 08152151515</p> 
<p  id="text-white" class=" text-white d-block justify-content-center aligh-items-center text-start"> customercare@abujaelectricity.com, <br> webmaster@abujaelectricity.com</p> 
<p  id="text-white" class=" text-white d-block justify-content-center aligh-items-center text-start"> No 1 Ziguinchor Street, Off IBB Way, Wuse Zone 4, FCT</p> 
<p  id="text-white" class=" text-white d-block justify-content-center aligh-items-center text-start"> No 1 Ziguinchor Street, Off IBB Way, Wuse Zone 4, FCT</p> 

</div>
    <div class="col d-block justify-content-center aligh-items-center text-start">
    <h1  class="rredd">Quick Links</h1>
    
        <a href="" class="passs">Distributed Energy Resource </a><br>
        <a href="" class="passs">Customer Redress  </a><br>
        <a href="" class="passs">mechanism </a><br>
        <a href="" class="passs">ConsumerAffairs </a><br>
        <a href="" class="passs">Debt Management</a><br>
        <a href="" class="passs"> Our Offices</a><br>
        <a href="" class="passs"> Staff verification</a><br>
    </div>
    <br>
    <br>
    <div class="col d-block justify-content-center aligh-items-center text-start">
    <h1  class="rredd">TID</h1>
        <a href="" class="passs">About TID Rollover</a><br>
        <a href="" class="passs">Verify Meter Status</a><br>
        <a href="" class="passs">TID FAQ</a><br>
        <a href="" class="passs">TID Support</a><br>
    </div>
    <div class="col d-block justify-content-center aligh-items-center text-start">
    <h1  class="rredd">Franchise Area</h1>

        <a href="" class="passs">Abuja</a><br>
        <a href="" class="passs">Nassarawa</a><br>
        <a href="" class="passs">Kogi</a><br>
        <a href="" class="passs">Niger State</a><br>
    </div>
    <div class="col d-block justify-content-center aligh-items-center text-start">
    <h1  class="rredd">TID</h1>
        <a href="" class="passs">About TID Rollover</a><br>
        <a href="" class="passs">Verify Meter Status</a><br>
        <a href="" class="passs">TID FAQ</a><br>
        <a href="" class="passs">TID Support</a><br>
    </div>
    </div>
  </div>
</div>
        <p id="dress" class="center white-text" >copyright &copy; semester 3 2024-</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>

<!-- 
Name:
depertment:
semester:
-->