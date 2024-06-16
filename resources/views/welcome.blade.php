<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <title>travel agency</title>
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>


    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap');
  
  :root{
      --orange:black;
      --text-color-1:#310c0f;
      --text-color-2:#666;
      --bg-color-1:#fff;
      --second-color: #5a7184;
      --main-color:#6e54fa;
      --big-font:6rem;
      --h2-font: 3rem;
      --p-font: 1.5rem
      --bg-color-2:rgb(235, 233, 233);
      --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
  }
  
  *{
      font-family: 'Poppins', sans-serif;
      margin:0; padding:0;
      box-sizing: border-box;
      outline: none; border:none;
      text-decoration: none;
      text-transform: capitalize;
      transition:all .2s linear;
      list-style: none;
      scroll-behavior: smooth;
  }
  
  html{
      font-size: 62.5%;
      overflow-x: hidden;
      scroll-padding-top: 7rem;
      scroll-behavior: smooth;
  }
  
  html::-webkit-scrollbar{
      width:.8rem;
  }
  
  html::-webkit-scrollbar-track{
      background:transparent;
  }
  
  html::-webkit-scrollbar-thumb{
      background:black;
      border-radius: 5rem;
  }
  
  
  body.active{
      --text-color-1:#fff;
      --text-color-2:#eee;
      --bg-color-1:#333;
      --bg-color-2:#222;
      --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.4);
  }

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
}

h1, h2 {
  font-family: sans-serif;
  font-weight: 400;
}

a {
  text-decoration: none;
}

li {
  list-style: none;
}

.flex {
  display: flex;
}

.flex_space {
  display: flex;
  justify-content: space-between;
}

button {
  border: none;
  background: none;
  outline: none;
  transition: 0.5s;
  cursor: pointer;
}

.primary-btn {
  padding: 15px 40px;
  background: #7fc142;
  font-weight: bold;
  color: white;
}

.secondary-btn {
  padding: 15px 40px;
  background: none;
  border: 2px solid white;
  font-weight: bold;
  color: white;
}

.container {
  max-width: 85%;
  margin: auto;
}
      nav {
    
    color: #fff;
    border-radius: 5px;
   
   
      }
  
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
  }
  
  li {
    margin: 0 18px;
  }
  
  a {
    color:var(--main-color);
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
  }
  
  a:hover {
    text-decoration: underline;
    color: var(--text-color-1);
  
  }
  ul li ul.dropdown{
    position: absolute;
    z-index: 999;
    display: none;
    background: #fff;
    font-size: 6px;
    width: 150px
  }
  ul li:hover ul.dropdown{
    display: block;
  }
  .btn{
    background-color: var(--main-color);
    color: #fff;
  
  }
  #menu-icon{
    color:var(--bg-color-1);
    font-size:35px;
    z-index:10001;
    cursor: pointer;
    display: none;
  }
 

.container {
  max-width: 85%;
  margin: auto;
}
/*--------home---------*/
.home {
  height: 100vh;
  color: #fff;
}

.home img {
  width: 100%;
  height: 80vh;
}

.home .text {
  position: absolute;
  top: 20%;
  left: 15%;
  
}

.home .text h1 {
  font-size: var(--big-font);
  line-height: 1.2;
  color: var(--bg-color-1);
  font-family:  'Paytone One',sans-serif;
  letter-spacing: 4px;
  margin-bottom: 20px
}

.home p {
  color:#ffffffbf;
  font-size: 20px;
  font-weight: 400;
  line-height: 38px;
  margin-bottom: 20px;
}

.home-btn{
  display: inline-block;
  font-size: 16px;
  padding: 10px 20px;
  background: #ffffffbf;
  color: var(--main-color);
  border-radius: 4px;
  transition: ease .40s;
  margin: 0 18px;
}
.home-btn:hover{
  background:var(--bg-color-1);
  transform: scale(1.1);
}
.navbar-brand{
  color:var(--main-color);
  font-family:  'Paytone One',sans-serif;
}

.owl-nav .owl-prev,
.owl-nav .owl-next {
  position: absolute;
  top: 40%;
  height: 50px;
  width: 50px;
  background: rgba(0, 0, 0, 0.5) !important;
  color: #fff;
}

.owl-nav .owl-prev {
  left: 0;
}

.owl-nav .owl-next {
  right: 0;
}

/*--------home---------*/
/*--login and registrer*/
.login-form{
    position:absolute;
    top:115%; right:7%;
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width:35rem;
    padding: 2rem;
    transform:scale(0);
    transform-origin: top right;
    margin-top: 50px;
    z-index: 2;

}

.login-form.active{
    transform:scale(1);
}

.login-form .inputBox{
    margin-bottom: 1rem;
}

.login-form .inputBox span{
    font-size: 1.7rem;
    color:var(--text-color-2);
  font-weight: bold;
  font-family: sans-serif
}


.login-form .inputBox input{
    font-size: 1.5rem;
    color:var(--text-color-1);
    border-radius: .5rem;
    padding:1rem;
    background:var(--bg-color-2);
    width: 100%;
    text-transform: none;
    margin:.5rem 0;
    box-shadow: 2px 2px 1px #666;
    
}

.login-form .remember{
    display: flex;
    align-items: center;
    gap:.5rem;
    padding:.5rem 0;
}

.login-form .remember label{
    color:var(--text-color-2);
    font-size: 1.5rem;
    cursor: pointer;
    font-size: 15px;
  font-weight: bold;
}

.login-form  .btn[type="submit"] {
	background-color: var(--main-color);
	color: white;
	padding: 8px 16px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}
.login-form .btn{
    width:100%;
    font-weight: 400
   
}
 .registe-form {
  position:absolute;
    top:115%; right:7%;
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width:35rem;
    padding: 2rem;
    transform:scale(0);
    transform-origin: top right;
    margin-top: 20px;
    z-index: 2;

}

 .registe-form.active{
    transform:scale(1);
}

 .registe-form label {
  font-size: 1.7rem;
    color:var(--text-color-2);

  font-weight: bold;
  font-family: sans-serif
}

.registe-form input[type="text"], input[type="email"], input[type="password"] {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ddd;
	border-radius: 5px;
}

.registe-form  .btn[type="submit"] {
	background-color: var(--main-color);
	color: white;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

.registe-form .btn {
  width:100%;
    font-weight: 400
}
.form-container form{
    background: var(--bg-color-1);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    padding:2rem;
    display: flex;
    flex-wrap: wrap;
    gap:1rem;
    align-items: center;
    margin-left:30px;
    margin-right:30px;
    margin-top:-80px;
    box-shadow: 2px 2px 1px #666;
    border-top:1px solid black;
    
}

.form-container form .inputBox{
    flex:1 1 20rem;
   

}

.form-container form .inputBox span{
    font-size: 1.5rem;
    color:black;
    font-weight:600 ;
}

.form-container form .inputBox input{
    font-size: 1.5rem;
    color:var(--text-color-1);
    box-shadow: 1PX 2PX 2PX #222;
    border-radius: .5rem;
    margin:.5rem 0;
    text-transform: none;
    width: 80%;
    padding:0.5rem;
}

.form-container form .inputBox select{
    font-size: 1.5rem;
    color:var(--text-color-1);
    box-shadow: 1PX 2PX 2PX #222;
    border-radius: .5rem;
    margin:.5rem 0;
    text-transform: none;
    width: 80%;
    padding:0.5rem;
}

.form-container form .btn{
    flex:1 1 23rem;
    padding: 6px
}
.form-container form .btn :hover{
    background: #222;
}
/*--------counter---------*/
.counter {
  background-image: url(../images/background-1.png);
    background-size: cover;
    background-repeat: no-repeat;
    height: 30vh;
    width: 100%;
    color: #fff;
}

  .top {
    margin-top: 30px;
}
@media only screen and (max-width: 768px){
.counter .grid {
    grid-template-columns: repeat(2, 1fr);
}}
.counter .grid {
  grid-template-columns: repeat(4, 1fr);
    text-align: center;
    place-items: center;
    padding-top: 40px;
}

.grid {
    display: grid;
   
    grid-gap: 20px;
}
.container {
    max-width: 85%;
    margin: auto;
}
.counter h1 {
  font-size: 50px;
}

.counter hr {
  width: 50%;
  margin: 10px auto;
  background: #6e54fa;
  height: 2px;
  border: none;
}

/*--------counter---------*/
/*--------rooms---------*/
.rooms {
  position: relative;
  padding-right:10px;
}
.top {
    margin-top: 30px;
}
.container {
    max-width: 85%;
    margin: auto;
}
.heading h1 {
    font-size: 100px;
    font-weight: 500;
    opacity: 0.1;
    font-family: serif;
    position: absolute;
    top: -30px;
}
.heading h2 {
    margin: 30px 0;
    font-size: 35px;
    font-family: serif;
    font-weight: 400;
}

.rooms .text {
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-top: none;
  padding: 10px;
  
}


.rooms p {
  margin: 20px 0;
  opacity: 0.7;
  margin-top: -10px;
}

.rooms h3 {
  font-size: 20px;
  line-height: 20px;
  margin-left: 20px;
  font-weight: 500;
  color: RED;
}

.rooms h3 span {
  font-size: 10px;
  font-weight: 400;
  color: #000;
}
.mtop{
grid-template-columns: repeat(2, 2fr);
display: grid;
   grid-gap: 120px;

  }
.owl-carousel1 .owl-nav .owl-prev,
.owl-carousel1 .owl-nav .owl-next {
  position: absolute;
  top:-20%;
  height: 50px;
  width: 30px;
  background: #6e54fa !important;
}
.flex {
    display: flex;
}
.rooms i {
    font-size: 12px;
    color: #6e54fa;
    margin: 15px 0;
    margin-right: 5px;
}

.owl-carousel1 .owl-nav .owl-prev i,
.owl-carousel1 .owl-nav .owl-next i {
  color: #fff;
}

.owl-carousel1 .owl-nav .owl-prev {
  left: 90%;
}

.owl-carousel1 .owl-nav .owl-next {
  right: 0;
}

.items{
  width: 70%;
  height: 50%;
  cursor: pointer;
 
}
.flex button{
  width: 100px;
  height: 40px;
  background-color: #6e54fa;
  padding: 5px;
  border-radius: 10px;
}

/*--------rooms---------*/
/*--------gallery---------*/
.gallery {
  position: relative;
}


.mtop1 {
    margin-top: 20px;
    
}
.gallery img {
  width: 300%;
  height: 300%;
 
}

.gallery .img {
  position: relative;

 
}
.gallery .img ::after{
  content: '';
  position: absolute;
  top: 0;
  left:0;
  background: #6e54fa;
  width: 255px;
  height: 251px;
  z-index: 2;
  opacity: 0;
  transition: 0.5s;
}
.itemss{
  padding: 80px 15px;
   cursor: pointer;
   width: 200%;
   width: 250%;

}
.overlay{
  position: absolute;
  top: 35%;
  left: 25%;
  z-index: 3;
  text-align: center;
  color: white;
  opacity: 0;
  transition: 0.5s;
}

.gallery span {
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  text-align: center;
  border: 2px solid white;
}
.overlay h3 {
  margin-top: 20px;
  font-weight: 500;
}


.gallery .items:hover .overlay,
.gallery .items:hover .img::after {
  opacity: 1;
  cursor: pointer;
}

.gallery .owl-nav .owl-prev {
  left: 85%;
}

.gallery .owl-nav .owl-next {
  right: 5%;
}

.gallery .owl-nav .owl-next,
.gallery .owl-nav .owl-prev {
  top: -40%;
}
@media only screen and (max-width: 768px){
  .content .mtop1 {
    grid-template-columns: repeat(2, 1fr);
}}

.gal{
  display: grid;
  grid-template-columns: 
  repeat(auto-fit, minmax(40px ,auto));
  grid-gap: 3rem;
  margin-top:-6rem;
}

/*--------gallery---------*/
/*--------news---------*/
.news {
  position: relative;
  margin-top: -12px;
}


.news i {
  color: #6e54fa;
  text-transform: capitalize;
  font-size: 18px;
}

.news label {
  margin-top: 12px;
  margin-right: 20px;
}

.news .left {
  padding: 30px 0;
  width: 65%;
}

.news .right {
  width: 35%;
}

.news img {
  width: 100%;
}

.news .items p {
  padding-top: 20px;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
}

.news .box {
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  padding: 40px 0;
}

.news .box:nth-child(1) {
  padding-top: 0;
}

.news .box:nth-last-child(1) {
  border-bottom: none;
}

.news .box img {
  width: 110px;
  height: 114px;
}

.news .stext {
  padding: 0 0 0 20px;
}

/*--------news---------*/
/*-------footer ----*/
.footer{
    background: var(--main-color);
    margin-top: 0px;
    padding-right: 60px;
    padding-left: 60px;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(12rem, 1fr));
    gap:1.5rem;
}
.footer .box-container .box{
  padding-top: 5px;
  padding-right: 10px

}

.footer .box-container .box h3{
    font-size: 2rem;
    color:var(--bg-color-1);
    padding:1rem 0;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.2rem;
    color:var(--bg-color-1);
    padding:1rem 0;
}

.footer .box-container .box a i{
    padding-right: .5rem;
    color:var(--orange);
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .credit{
    font-size: 2rem;
    text-align: center;
    border-top: .1rem solid var(--bg-color-1);
    padding:1rem;
    padding-top: 2rem;
    margin-top: 2rem;
    color:var(--bg-color-2);
}

.footer .credit span{
    color:var(--bg-color-1);
}



</style>
</head>
<body>
  <!--navbar-->
  <nav class="navbar navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand">
         <img src="./departure.png" width="30px" height="30px">travel</a>
    
     <div class="bx bx-menu" id="menu-icon"></div>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Rooms</a></li>
          <li><a href="">Amenities</a></li>
          <li><a href="">Contact</a></li>
          <li>
            <a  href="#"  class="nav-link dropdown-toggle">
              Dropdown link
            </a>
            <ul class="dropdown">
              <li id="login-btn"><a href="#" >login</a></li>
              <li id="registe-btn"><a href="#">Register</a></li>
              <li><a href="#">Disconnect</a></li>
            </ul>
          </li>
        </ul>
     
      
      <form class="d-flex" >
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">Search</button>
      </form>
      <span class="fa fa-bars" onclick="menutoggle()"></span>
    </div>
    <form action="" class="registe-form" >
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
  
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
  
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
  
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" required>
  
      <input type="submit" class="btn" value="registe">
    </form>
    <!-- page connecter -->
    <form action="" class="login-form" method="post" >
      @csrf
      <div class="inputBox">
          <span>username</span>
          <input type="text" placeholder="enter your name" name="username">
      </div>
      <div class="inputBox">
          <span>password</span>
          <input type="password" placeholder="enter your password" name="password">
      </div>
      <div class="remember">
          <input type="checkbox" name="" id="login-remember">
          <label for="login-remember">remember me</label>
      </div>
      <input type="submit" class="btn" value="login">  
  </form>
</nav>
  <script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight = "0px";
    function menutoggle() {
      if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "100vh";
      } else {
        menulist.style.maxHeight = "0px";
      }}
  </script>


  <section class="home">
    <div class="content">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="images/banner-1.png" alt="">
          <div class="text">
            <h1>Spend Your <br>Holiday</h1>
            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed 
              <br>do eiusmtem por incid.
            </p>
            <a href="#" class="home-btn" >Let's go now</a>
              <a href="#" class="home-btn" >Register</a>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-2.png" alt="">
          <div class="text">
            <h1>Spend Your <br>Holiday</h1>
            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed<br>
               do eiusmtem por incid.
            </p>
            <a href="#" class="home-btn" >Let's go now</a>
              <a href="#" class="home-btn" >Register</a>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-3.png" alt="">
          <div class="text">
            <h1>Spend Your<br> Holiday</h1>
            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed <br>
              do eiusmtem por incid.
            </p>
            <a href="#" class="home-btn" >Let's go now</a>
              <a href="#" class="home-btn" >Register</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="form-container" >
    <form action=""> 
        <div class="inputBox">
            <span>Adults</span><br>
            <br>
            <select name="ville">
           <option></option>
            </select>
        </div>
        <div class="inputBox">
          <span>Persone</span><br>
          <input type="number" placeholder="Persone" name="Persone">
      </div>
        <div class="inputBox">
            <span>arrivals</span><br>
            <input type="date" name="dateDebut"/>
        </div>
        <div class="inputBox">
            <span>leaving</span><br>
            <input type="date" name="dateFin"/>
        </div>
        <a to="{" class="btn">book now</a>
    </form>
    <section class="counter top">
      <div class="container grid">
        <div class="box">
          <h1>2500</h1>
          <hr>
          <span>Customer</span>
        </div>
        <div class="box">
          <h1>1250</h1>
          <hr>
          <span>Happy Customer</span>
        </div>
        <div class="box">
          <h1>150</h1>
          <hr>
          <span>Expert Technicians</span>
        </div>
        <div class="box">
          <h1>3550</h1>
          <hr>
          <span>Desktop Reaired</span>
        </div>
      </div>
    </section>
  
  
    <section class="rooms">
      <div class="container top">
        <div class="heading">
          <h2>Our Rooms</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
          </p>
        </div>
  
        <div class="mtop">
          <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="items">
              <div class="image">
                <img src="images/room-5.png" alt="">
              </div>
              <div class="text">
                <h2>Suporior Rooms</h2>
                <div class="rate flex">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
                <div class="button flex">
                  <button class="primary-btn">BOOK NOW</button>
                  <h3>$250 <span> <br> Per Night </span> </h3>
                </div>
              </div>
            </div>
            <div class="items">
              <div class="image">
                <img src="images/room-2.png" alt="">
              </div>
              <div class="text">
                <h2>Suporior Rooms</h2>
                <div class="rate flex">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
                <div class="button flex">
                  <button class="primary-btn">BOOK NOW</button>
                  <h3>$250 <span> <br> Per Night </span> </h3>
                </div>
              </div>
            </div>
            <div class="items">
              <div class="image">
                <img src="images/room-3.png" alt="">
              </div>
              <div class="text">
                <h2>Suporior Rooms</h2>
                <div class="rate flex">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
                <div class="button flex">
                  <button class="primary-btn">BOOK NOW</button>
                  <h3>$250 <span> <br> Per Night </span> </h3>
                </div>
              </div>
            </div>
            <div class="items">
              <div class="image">
                <img src="images/room-4.png" alt="">
              </div>
              <div class="text">
                <h2>Suporior Rooms</h2>
                <div class="rate flex">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
                <div class="flex">
                  <button class="primary-btn">BOOK NOW</button>
                  <h3>$250 <span> <br> Per Night </span> </h3>
                </div>
              </div>
            </div>
            <div class="items">
              <div class="image">
                <img src="images/room-5.png" alt="">
              </div>
              <div class="text">
                <h2>Suporior Rooms</h2>
                <div class="rate flex">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
                <div class="button flex">
                  <button class="primary-btn">BOOK NOW</button>
                  <h3>$250 <span> <br> Per Night </span> </h3>
                </div>
              </div>
            </div>
            <div class="items">
              <div class="image">
                <img src="images/room-6.png" alt="">
              </div>
              <div class="text">
                <h2>Suporior Rooms</h2>
                <div class="rate flex">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
                <div class="button flex">
                  <button class="primary-btn">BOOK NOW</button>
                  <h3>$250 <span> <br> Per Night </span> </h3>
                </div>
              </div>
            </div>
            <div class="items">
              <div class="image">
                <img src="images/room-7.png" alt="">
              </div>
              <div class="text">
                <h2>Suporior Rooms</h2>
                <div class="rate flex">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
                <div class="button flex">
                  <button class="primary-btn">BOOK NOW</button>
                  <h3>$250 <span> <br> Per Night </span> </h3>
                </div>
              </div>
            </div>
            <div class="items">
              <div class="image">
                <img src="images/room-8.png" alt="">
              </div>
              <div class="text">
                <h2>Suporior Rooms</h2>
                <div class="rate flex">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
                <div class="button flex">
                  <button class="primary-btn">BOOK NOW</button>
                  <h3>$250 <span> <br> Per Night </span> </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 40,
        nav: true,
        dots: false,
        navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2,
            margin:10
          
          },
          1000: {
            items: 3
          }
        }
      })
    </script>
     <section class="gallery">
      <div class="container top">
        <div class="heading">
          <h2>Our Gallery</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        </div>
      </div>
  
      <div class="content mtop1">
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div class="gal">
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-1.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-2.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-3.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-4.png" alt="">
            </div>
          </div>
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-5.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-6.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-4.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-3.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-1.png" alt="">
            </div>
          </div>
          <div class="itemss">
            <div class="img">
              <img src="images/gallery-6.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  
  
    <script>
      $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 4,
          },
          1000: {
            items: 6
          }
        }
      })
    </script>
    <section class="news top rooms">
      <div class="container">
        <div class="heading">
          <h2>Our News</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        </div>
  
  
        <div class="content flex">
          <div class="left grid2">
            <div class="items">
              <div class="image">
                <img src="images/blog-1.png" alt="">
              </div>
              <div class="text">
                <h2>Finibus bonorum malorm.</h2>
                <div class="admin flex">
                  <i class="fa fa-user"></i>
                  <label>Admin</label>
                  <i class="fa fa-heart"></i>
                  <label>500</label>
                  <i class="fa fa-comments"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="items">
              <div class="image">
                <img src="images/blog-2.png" alt="">
              </div>
              <div class="text">
                <h2>Finibus bonorum malorm.</h2>
                <div class="admin flex">
                  <i class="fa fa-user"></i>
                  <label>Admin</label>
                  <i class="fa fa-heart"></i>
                  <label>500</label>
                  <i class="fa fa-comments"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
  
          <div class="right">
            <div class="box flex">
              <div class="img">
                <img src="images/blog-s1.png" alt="">
              </div>
              <div class="stext">
                <h2>Etiam Vel Nequ</h2>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
              </div>
            </div>
            <div class="box flex">
              <div class="img">
                <img src="images/blog-s2.png" alt="">
              </div>
              <div class="stext">
                <h2>Etiam Vel Nequ</h2>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
              </div>
            </div>
            <div class="box flex">
              <div class="img">
                <img src="images/blog-s3.png" alt="">
              </div>
              <div class="stext">
                <h2>Etiam Vel Nequ</h2>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
<!--footer-->
<section class="footer">
  <div class="box-container">
      <div class="box">
          <h3>our branches</h3>
          <a href="#"> Meknes </a>
          <a href="#"> Fes </a>
          <a href="#"> Tanger </a>
          <a href="#"> Marrakech </a>
          <a href="#"> Casablanca </a>
      </div>
      <div class="box">
          <h3>quick links</h3>
          <a href=""><i class="fas fa-chevron-right"></i>Home</a>
          <a  href=""><i class="fas fa-chevron-right"></i>Rooms</a>
          <a  href="#"><i class="fas fa-chevron-right"></i>Amenities</a>
          <a href="#"><i class="fas fa-chevron-right"></i>contact</a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <a href="#"><i class="fas fa-phone"></i> +121-656-789-000 </a>
          <a href="#"><i class="fas fa-phone"></i> +121-656-888-000  </a>
          <a href="#"><i class="fas fa-envelop"></i> AgenceVoyage@gmail.com </a>
          <a href="#">..... </a>
      </div>
      <div class="box">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
          <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
      </div>
  </div>
  <div class="credit"> creadet by <span>Agence Voyage</span> | all rights reserved </div>

</section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>
    <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
      let loginForm = document.querySelector('.login-form')
    
    document.querySelector('#login-btn').onclick = () =>{
        loginForm.classList.toggle('active');
        registeForm.classList.remove('active');
    
    }
    
    let registeForm = document.querySelector('.registe-form')
    
    document.querySelector('#registe-btn').onclick = () =>{
      registeForm.classList.toggle('active');
      loginForm.classList.remove('active');
    
    
    //slider image    
    
      
    }
    </script>
</body>
</html>