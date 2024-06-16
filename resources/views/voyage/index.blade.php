<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
.home .login-form{
    position:absolute;
    top:115%; right:7%;
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width:35rem;
    padding: 2rem;
    transform:scale(0);
    transform-origin: top right;
    margin-top: -450px;
}

.home .login-form.active{
    transform:scale(1);
}

.home .login-form .inputBox{
    margin-bottom: 1rem;
}

.home .login-form .inputBox span{
    font-size: 1.7rem;
    color:var(--text-color-2);
  font-weight: bold;
  font-family: sans-serif
}


.home .login-form .inputBox input{
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
.home .login-form .inputBox select{
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

.home .login-form .remember{
    display: flex;
    align-items: center;
    gap:.5rem;
    padding:.5rem 0;
}

.home .login-form .remember label{
    color:var(--text-color-2);
    font-size: 1.5rem;
    cursor: pointer;
    font-size: 15px;
  font-weight: bold;
}

.home .login-form  .btn[type="submit"] {
	background-color: var(--main-color);
	color: white;
	padding: 8px 16px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}
.home .login-form .btn{
    width:100%;
    font-weight: 400
   
}
.home .registe-form {
  position:absolute;
    top:115%; right:7%;
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width:35rem;
    padding: 2rem;
    transform:scale(0);
    transform-origin: top right;
    margin-top: -450px;

}

.home .registe-form.active{
    transform:scale(1);
}

.home .registe-form label {
  font-size: 1.7rem;
    color:var(--text-color-2);

  font-weight: bold;
  font-family: sans-serif
}

.home .registe-form input[type="text"], input[type="email"], input[type="password"] {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ddd;
	border-radius: 5px;
}

.home .registe-form  .btn[type="submit"] {
	background-color: var(--main-color);
	color: white;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

.home  .registe-form .btn {
  width:100%;
    font-weight: 400
}

.home{
  padding: 80px 18%;
  position: relative;
  width: 100%;
  height: 80vh;
  background-image:linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
   url('./potho3.jpg');

  background-size: cover;
  background-position: center;
  grid-template-columns: repeat(1,1fr);
  align-items: center;
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
    margin-top:20px;
    box-shadow: 2px 2px 1px #666;
    border-top:1px solid black;
    
}

.form-container form .inputBox{
    flex:1 1 16rem;

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
.text h2{
  font-size: var(--h2-font);
  line-height: 1.1;
  margin-top: 50px;
  font-weight: 700

}
.row-items{
  display: grid;
  grid-template-columns: 
  repeat(auto-fit, minmax(100px ,auto));
  grid-gap: 2rem;
  align-items: center;
  text-align: center;
  margin-top:5rem;
}
.container-box{
  background:  var(--bg-color-1);
  border: 1px solid #f0eded;
  padding: 40px 15px;
  border-radius: 2rem;
  cursor: pointer;
}
.container-img img{
  height: 85px;
  width: 85px;
  padding: 15px;
  background: var(--bg-color-1);
  box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
  border-radius: 4rem;
  margin-bottom: 15px;
  cursor: pointer;
}
.container-box h4{
  font-size:22px;
  font-weight:600;
  margin-bottom: 8px;
}
.container-box p{
  font-size: 15px;
  color: var(--second-color);
}
.container-box:hover{
  box-shadow: 5px 30px 56.1276px rgb(55 55 55 / 12%);
   border: 1px solid transparent;
   transform: translateY(-3px);
}
.title{
  padding-left: 100px;
  padding-bottom: 20px;
}
.title h2{
  font-size: var(--h2-font);
  line-height: 1.1;
  margin-top: 50px;
  font-weight: 700;
}
.packages{
  margin: 40px
}

.packages .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.packages .box-container .box{
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
}

.packages .box-container .box .image{
    height:25rem;
    width: 100%;
    padding:1.5rem;
    position: relative;
}

.packages .box-container .box .image img{
    height:100%;
    width: 100%;
    object-fit: cover;
    border-radius: .5rem;
}

.packages .box-container .box .image h3{
  position: relative;
  font-size: 20px;
  font-weight: 600;
  text-align: right;
  color: white;
  top: -190px;
  right: 30px;
}
.dest-content{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 16px;
  padding-top: 2px;

}
.stars img{
  width: 20px;
  height: 20px;

}
.location h4{
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 8px;
}
.location p{
  font-size: 15px;
  color: var(--second-color);
}
.image:hover{
  filter: brightness(100%) hue-rotate(45deg);
  transform: scale(1.04);
}
.blogs{
  margin: 40px
}
.blogs .blog{
    margin-bottom: 50px;
    margin-top: 20px;
   
}

.blogs .blog .btn {
    float: right;
    padding: 8px 5px;
    margin-top: 1rem;
    font-size: 1rem;
    color:white;
    background:black;
    cursor: pointer;
    letter-spacing: 1.5px;
    font-weight: 600;
    border:  solid 1px black;   
}
.blogs .blog .btn:hover{
    letter-spacing: .2rem;
}
.blogs .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(18rem, 1fr));
    gap:1.5rem;
    margin-top: 20px;
}

.blogs .box-container .box{
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    padding:1rem;
}

.blogs .box-container .box .images{
    height: 20rem;
    width: 100%;
    overflow:hidden;
    border-radius: .5rem;
    background: var(--bg-color-2);
   
}
.blogs .box-container .box .images .image:hover{
  filter: brightness(100%) hue-rotate(45deg);
  transform: scale(1.04);
}
.blogs .box-container .box .images img{
    height: 100%;
    width: 100%;
  
}

.blogs .box-container .box:hover .images img{
    transform:scale(1.2);
}

.blogs .box-container .box .content{
    padding-top: 1rem;
}

.blogs .box-container .box .content h3{
   font-size: 2rem;
   color:var(--text-color-1);
   line-height: 1.5;
}

.blogs  pre
{
  font-family: serif;
    font-size: 12px;
    line-height: 25px;
}
.blogs h2{
  font-size: var(--h2-font);
  line-height: 1.1;
  margin-top: 50px;
  font-weight: 700;
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
  <title>Agence de voyage</title>
</head>
<body>
  
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
    </div>
  </nav>
  

  <!--navbar-->
  <!--Home section --->
  
  <section class="home" id="home">
    <form action="{{route('registe')}}" class="registe-form">
      @if(session('succ'))
    <div class="alert alert-success">
        {{ session('succ') }}
    </div>
@endif

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" required>

      <input type="submit" class="btn" value="registe" >
    </form>

    <!-- page connecter -->
    <form action="{{route('login')}}" class="login-form" method="post">
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
  

      <!-- page register -->
      <div class="home-text">
        <h1>Fuel Mind <br>Travel</h1>
        <p>Enthusiastically extend extensive customer servoce before <br> best breed
          convergence completely. </p>
          <a href="#" class="home-btn" >Let's go now</a>
          <a href="#" class="home-btn" id="registe-btn2">Register</a>
      
      </div> 
  </section>
  <section class="form-container" >
    <form action="{{route('cherche')}}" method="POST">
      @csrf
        <div class="inputBox">
            <span>where to</span>
            <br>
            <select name="ville">
        <option></option>
            </select>
        </div>
        
        <div class="inputBox">
            <span>arrivals</span><br>
            <input type="date" name="dateD"/>
        </div>
        <div class="inputBox">
            <span>leaving</span><br>
            <input type="date" name="dateF"/>
        </div>
        <button type="submit" class="btn">book now</button>
    </form>
</section>

<!-- service -->

<section class="container">
    <div class="text">
      <h2>Start Your Vacation <br>with Lots of Services !</h2>
    </div>
    <div  class="row-items">
      <div class="container-box">
        <div class="container-img">
          <img src="trip1.png"/>
        </div>
        <h4>Ship Cruises</h4>
        <p>150 Properties </p>
      </div>

      <div class="container-box">
        <div class="container-img">
          <img src="trip2.png" />
        </div>
        <h4>Foods Teurs</h4>
        <p>150 Properties </p>
      </div>

      <div class="container-box">
        <div class="container-img">
          <img src="trip3.png" />
        </div>
        <h4>Summer Rest</h4>
        <p>150 Properties </p>
      </div>

      <div class="container-box">
        <div class="container-img">
          <img src="trip4.png"/>
        </div>
        <h4>Mountains Tours</h4>
        <p>150 Properties </p>
      </div>
    </div>
</section>

<!--Package section-->
<section class="packages" id="packages">
  <div class="title">
     <h2>Our Upcoming Tour Package</h2>
   </div>    <div class="box-container">
 
         <div class="box">
             <div class="image">
                 <img src="p-1.jpg" alt="">
                  <h3>599Dh</h3>
             </div>
             
      <div class="dest-content">
       <div class="location">
         <h4>Tanger</h4>
         <a href="#" class="btn">read more</a>
       </div>
       <div class="stars">
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
 
       </div>
 
     </div>
         </div>
 
         <div class="box">
             <div class="image">
                 <img src="p-2.jpg" alt="">
          <h3>399Dh</h3>
             </div>
             
      <div class="dest-content">
       <div class="location">
         <h4>Fes</h4>
         <a href="#" class="btn">read more</a>
       </div>
       <div class="stars">
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
 
       </div>
 
     </div>
         </div>
  <div class="box">
             <div class="image">
                 <img src="p-3.jpg" alt="">
          <h3>499Dh</h3>
             </div>
             
      <div class="dest-content">
       <div class="location">
         <h4>Casablanca</h4>
         <a href="#" class="btn">read more</a>
       </div>
       <div class="stars">
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
 
       </div>
 
     </div>
         </div>
 
        <div class="box">
             <div class="image">
                 <img src="p-4.jpg" alt="">
          <h3>499Dh</h3>
             </div>
             
      <div class="dest-content">
       <div class="location">
         <h4>Marrakech</h4>
         <a href="#" class="btn">read more</a>
       </div>
       <div class="stars">
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
 
       </div>
 
     </div>
         </div>
 
 
         <div class="box">
             <div class="image">
                 <img src="p-5.jpg" alt="">
          <h3>399Dh</h3>
             </div>
             
      <div class="dest-content">
       <div class="location">
         <h4>Ouijda</h4>
         <a href="#" class="btn">read more</a>
       </div>
       <div class="stars">
        <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
 
       </div>
 
     </div>
         </div>
 
  <div class="box">
             <div class="image">
                 <img src="p-6.jpg" alt="">
                  <h3>290Dh</h3>
             </div>    
      <div class="dest-content">
       <div class="location">
         <h4>Agadir</h4>
         <a href="#" class="btn">read more</a>
       </div>
       <div class="stars">
      <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
         <a href="#"><i class='fas fa-star'></i></a>
 
      </div>

</div>
         </div>
 
 
     </div>
 </section>
 <!-- bglos-->
  <section class="blogs" id="blogs">
    <h2>Best Tours</h2>
    <p>We offer various tourist activities and fun tours.</p>
    <div class="box-container">
        <div class="box">
            <div class="images">
                <img src="./blog-1.svg" alt=""/>
            </div>
            <div class="content">
                <h3>explore the world now, adventure awaits</h3>
                <a href="#" class="btn">read more</a>
                
            </div>
        </div>

        <div class="box">
            <div class="images">
                <img src="./blog-2.svg" alt=""/>
            </div>
            <div class="content">
                <h3>explore the world now, adventure awaits</h3>
                <a href="#" class="btn">read more</a>
               
            </div>
        </div>

        <div class="box">
            <div class="images">
                <img src="./blog-3.svg" alt=""/>
            </div>
            <div class="content">
                <h3>explore the world now, adventure awaits</h3>
                <a href="#" class="btn">read more</a>
                
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
          <a href="#">.....</a>
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
  <div class="credit"> creadet by <span> Agence Voyage</span> | all rights reserved </div>

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