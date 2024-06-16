<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Agence de voyage</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
.home{
  padding: 80px 18%;
  position: relative;clients
  width: 100%;
  height: 80vh;
  background-image:linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
   url('./photo2.jpg');

  background-size: cover;
  background-position: center;
  grid-template-columns: repeat(1,1fr);
  align-items: center;
  margin-top: -20px;
}
.home-text h1{
  font-size: var(--big-font);
  line-height: 1.2;
  color: var(--bg-color-1);
  font-family:  'Paytone One',sans-serif;
  letter-spacing: 4px;
  margin-bottom: 20px
}
.home-text p{
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
.row3{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    margin-top: 10px;
    
}

.row .map{
    flex:1 1 42rem;
    width: 100%;
    height: 50%;
    padding:2rem;
    box-shadow: var(--box-shadow);
    border:var(--border);
    border-radius: .5rem;
}

body,
input,
textarea {
  font-family: "Poppins", sans-serif;
}

.container {
  position: relative;
  width: 100%;
  min-height: 100vh;
  padding: 2rem;
  margin-top: 40px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.form {
  width: 100%;
  max-width: 820px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  overflow: hidden;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.contact-form {
  background-color: #637ef5;
  position: relative;
}

.conta{
    margin-top: 50px;
}
.conta p{
    font-size: 14px;
    margin-top: 10px;
    margin-bottom: 10px;
    font-family: cursive;
  
}
.conta h2{
    font-size: 20px;
    font-weight: 600;
    font-family: serif;
}
.fol img{
    margin-right: 10px;
}

form {
  padding: 2.3rem 2.2rem;
  z-index: 10;
  overflow: hidden;
  position: relative;
}

.title {
  color: #fff;
  font-weight: 500;
  font-size: 2.5rem;
  line-height: 1;
  margin-bottom: 0.7rem;
}

.input-container {
  position: relative;
  margin: 1rem 0;
}

.input {
  width: 100%;
  height: 30px;
  outline: none;
  border: 2px solid #fafafa;
  background: none;
  padding: 0.6rem 1.2rem;
  color: #fff;
  font-weight: 500;
  font-size: 1.5rem;
  letter-spacing: 0.5px;
  border-radius: 25px;
  transition: 0.3s;
}

textarea.input {
  padding: 0.8rem 1.2rem;
  min-height: 150px;
  border-radius: 22px;
  resize: none;
  overflow-y: auto;
}

.input-container label {
  position: absolute;
  top: 50%;
  left: 15px;
  transform: translateY(-50%);
  padding: 0 0.4rem;
  color: #fafafa;
  font-size: 0.9rem;
  font-weight: 400;
  pointer-events: none;
  z-index: 1000;
  transition: 0.5s;
}

.input-container.textarea label {
  top: 1rem;
  transform: translateY(0);
}

.btnh {
  padding: 0.6rem 1.3rem;
  background-color: #fff;
  border: 2px solid #fafafa;
  font-size:1.5rem;
  color: rgb(111, 155, 249);
  line-height: 1;
  border-radius: 25px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin: 0;
  width: 120px;
  height: 40px;
}

.btnh:hover {
  background-color: transparent;
  color: #fff;
}
.registre{
    float: right;
    padding: 8px 5px;
    margin-top: 1rem;
    font-size: 1rem;
    color:white;
    background:rgb(111, 155, 249);
    cursor: pointer;
    letter-spacing: 1.5px;
    border-radius: 5px;
    font-weight: 600;
    border:  solid 1px black;   
    margin-left: 20px;
}
.input-container span {
  position: absolute;
  top: 0;
  left: 25px;
  transform: translateY(-50%);
  font-size: 0.8rem;
  padding: 0 0.4rem;
  color: transparent;
  pointer-events: none;
  z-index: 500;
}

.input-container span:before,
.input-container span:after {
  content: "";
  position: absolute;
  width: 10%;
  opacity: 0;
  transition: 0.3s;
  height: 5px;
  background-color: rgb(111, 155, 249);
  top: 50%;
  transform: translateY(-50%);
}

.input-container span:before {
  left: 50%;
}

.input-container span:after {
  right: 50%;
}

.input-container.focus label {
  top: 0;
  transform: translateY(-50%);
  left: 25px;
  font-size: 0.8rem;
}

.input-container.focus span:before,
.input-container.focus span:after {
  width: 50%;
  opacity: 1;
}

.contact-info {
  padding: 2.3rem 2.2rem;
  position: relative;
}

.contact-info .title {
  color: rgb(111, 155, 249);
}

.text {
  color: #333;
  margin: 1.5rem 0 2rem 0;
}

.information {
  display: flex;
  color: #555;
  margin: 0.7rem 0;
  align-items: center;
  font-size: 0.95rem;
}

.icon {
  width: 28px;
  margin-right: 0.7rem;
}

.social-media {
  padding: 2rem 0 0 0;
}

.social-media p {
  color: #333;
}

.social-icons {
  display: flex;
  margin-top: 0.5rem;
}

.social-icons a {
  width: 35px;
  height: 35px;
  border-radius: 5px;
  background: linear-gradient(45deg,rgb(111, 155, 249),rgb(111, 155, 249));
  color: #fff;
  text-align: center;
  line-height: 35px;
  margin-right: 0.5rem;
  transition: 0.3s;
}

.social-icons a:hover {
  transform: scale(1.05);
}

.contact-info:before {
  content: "";
  position: absolute;
  width: 110px;
  height: 100px;
  border: 22px solid #1abc9c;
  border-radius: 50%;
  bottom: -77px;
  right: 50px;
  opacity: 0.3;
}

.big-circle {
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: linear-gradient(to bottom, rgb(111, 155, 249),rgb(111, 155, 249));
  bottom: 50%;
  right: 50%;
  transform: translate(-40%, 38%);
}

.big-circle:after {
  content: "";
  position: absolute;
  width: 360px;
  height: 360px;
  background-color: #fafafa;
  border-radius: 50%;
  top: calc(50% - 180px);
  left: calc(50% - 180px);
}

.square {
  position: absolute;
  height: 400px;
  top: 50%;
  left: 50%;
  transform: translate(181%, 11%);
  opacity: 0.2;
}

@media (max-width: 850px) {
  .form {
    grid-template-columns: 1fr;
  }

  .contact-info:before {
    bottom: initial;
    top: -75px;
    right: 65px;
    transform: scale(0.95);
  }

  .contact-form:before {
    top: -13px;
    left: initial;
    right: 70px;
  }

  .square {
    transform: translate(140%, 43%);
    height: 350px;
  }

  .big-circle {
    bottom: 75%;
    transform: scale(0.9) translate(-40%, 30%);
    right: 50%;
  }

  .text {
    margin: 1rem 0 1.5rem 0;
  }

  .social-media {
    padding: 1.5rem 0 0 0;
  }
}

@media (max-width: 480px) {
  .container {
    padding: 1.5rem;
  }

  .contact-info:before {
    display: none;
  }

  .square,
  .big-circle {
    display: none;
  }

  form,
  .contact-info {
    padding: 1.7rem 1.6rem;
  }

  .text,
  .information,
  .social-media p {
    font-size: 0.8rem;
  }

  .title {
    font-size: 1.15rem;
  }

  .social-icons a {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }

  .icon {
    width: 23px;
  }

  .input {
    padding: 0.45rem 1.2rem;
  }

  .btn {
    padding: 0.45rem 1.2rem;
  }
}

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
         <img src="./departure.png" width="30px" height="30px">Voyage</a>
    
     <div class="bx bx-menu" id="menu-icon"></div>
        <ul>
          <li><a href="{{route('voyage.index')}}">Accueil</a></li>
          <li><a href="{{route('hotel.index')}}">Hotels</a></li>
          <li><a href="{{route('amenities')}}">Amenities</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li>
            <a  href="#"  class="nav-link dropdown-toggle">
              Dropdown link
            </a>
            <ul class="dropdown">
              <li id="login-btn"><a href="#" >se connecter</a></li>
              <li id="registe-btn"><a href="#">Register</a></li>
              <li><a href="#">Déconexion</a></li>
            </ul>
          </li>
        </ul>
     
      
      <form class="d-flex">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">Search</button>
      </form>
      <span class="fa fa-bars" onclick="menutoggle()"></span>
    </div>
    <form action="" class="registe-form">
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
    <form action="" class="login-form" method="post">
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
      }
    }
  </script>
  <section class="home" id="home">
    <div class="home-text">
      <h1>Contact Us</h1>
      <p> Do you want to enquire about our pricing current offers and arrangements we<br/>
        can help you with ? Give us a call or send in your concerns through the form below.</p>
        <a href="#" class="home-btn" >Let's go now</a>
        <a href="#" class="home-btn" >Register</a>
    
    </div> 
</section>
  <section>
    <div>
      @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
    </div>
<div class="container">
      
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="conta">
        <p>Reception Office</p>
        <h2> 2855 Nelsonville Rd, Boston, Massachusetts<br/>
        (MA) ,40107</h2>
        <br/>
        <p>Reception Houses</p>
        <h2>7:30 AM -11:00 PM</h2><br/>
        <p>Contact</p>
        <h2>+212 691 915 845</h2>
        <h2>Travel@gmail.com</h2><br/>
        <p>Follow Us</p>
        <div class="fol">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"> <i class="fab fa-twitter"></i>  </a>
        <a href="#"> <i class="fab fa-instagram"></i>  </a>
        <a href="#"> <i class="fab fa-linkedin"></i>  </a>
        <a href="#"> <i class="fab fa-pinterest"></i>  </a>
    </div>
    </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="post">
            @csrf
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" placeholder="Username" class="input" />
            
            </div>
            <div class="input-container">
              <input type="email" name="email" placeholder="Email" class="input" />
             
            </div>
            <div class="input-container">
              <input type="tel" name="phone" placeholder="Phone" class="input" />
              
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="Message"></textarea>
             
            </div>
            <input type="submit" value="Send" class="btnh" />
          </form>
        </div>
      </div>
    </div>

</section>


<div class="row">
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d211989.76268512852!2d-5.7028374552895045!3d33.88089528761617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda044d23bfc49d1%3A0xfbbf80a99e4cde18!2zTWVrbsOocw!5e0!3m2!1sfr!2sma!4v1683148814434!5m2!1sfr!2sma" allowfullscreen="" loading="lazy"></iframe> 
</div>

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
              <a href="{{route('voyage.index')}}"><i class="fas fa-chevron-right"></i>Home</a>
              <a  href="{{route('hotel.index')}}"><i class="fas fa-chevron-right"></i>Rooms</a>
              <a  href="#"><i class="fas fa-chevron-right"></i>Amenities</a>
              <a href="#"><i class="fas fa-chevron-right"></i>contact</a>
          </div>
    
          <div class="box">
              <h3>contact info</h3>
              <a href="#"><i class="fas fa-phone"></i> +121-656-789-000 </a>
              <a href="#"><i class="fas fa-phone"></i> +121-656-888-000  </a>
              <a href="#"><i class="fas fa-envelop"></i> AgenceVoyage@gmail.com </a>
              <a href="#">## </a>
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
      <div class="credit"> creadet by <span>Agence de voyage</span> | all rights reserved </div>
    
    </section>
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