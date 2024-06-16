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
  position: relative;
  width: 100%;
  height: 90vh;
  background-image:linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
   url('./photo2.jpg');

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

.amenities .amenities{
    margin-bottom: 50px;
    margin-top: 20px;
    padding-left: 40px;
    padding-top: 40px;
}
.amenities .amenities pre{
    font-family: serif;
    font-size: 12px;
    line-height: 25px;
    margin-top: 6px;
}

.amenities .amenities h1{
  font-size: var(--h2-font);
  line-height: 1.1;
  font-weight: 700
 
}
.amenities .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
    margin-top: -40px;
    padding-left: 20px;
}
.amenities .box-container .box{
    background:var(--bg-color-1);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    padding:2rem;
    height: 100%;
    width: 80%;
    padding-bottom: -10px;
}

.amenities .box-container .box .image{
    height: 26rem;
    width: 100%;
    overflow:hidden;
 
}

.amenities .box-container .box .image img{
    height: 80%;
    width: 100%;
}

.amenities .box-container .box:hover .image img{
    transform:scale(1.2);
}
.amenities .box-container .box .cont{
  margin-top: -30px;
}

.amenities .box-container .box .cont h2{
   font-size: 1.5rem;
   color:var(--text-color-1);
   line-height: 1.5;
   margin-bottom:10px ;
}

.amenities.box-container .box .cont p
{
    padding-top: 5px;
    font-family: serif;
    font-size: 11px;
    line-height: 20px;
    
}
.amenities .box-container .box .cont a{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 1rem;
    font-size: 1rem;
    color:#fff;
    background:#6e54fa;
    border-radius: .5rem;
    cursor: pointer;
    text-decoration: none;
    letter-spacing: 1.5px;
    font-weight: 600;
    border:  solid 1px #6e54fa;   
}
.amenities .box-container .box .cont  a:hover{
    letter-spacing: .2rem;
}
.amenities1 .amenities1{
  margin-bottom: 50px;
    margin-top: 20px;
    padding-left: 40px;
    padding-top: 40px;
}
.amenities1 .amenities1 pre{
    font-family: serif;
    font-size: 12px;
    line-height: 25px;
    margin-top: 10px;
}
.amenities1 .amenities1 h1{
  font-size: var(--h2-font);
  line-height: 1.1;
  font-weight: 700
}
.amenities1 .amenities1 .btn {
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
.amenities1 .amenities1 .btn:hover{
    letter-spacing: .2rem;
}
.amenities1 .box-container1{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
    gap:1.5rem;
    margin-top: -60px;
    padding-left: 20px;
}
.amenities1 .box-container1 .box1{
    padding:2rem;
}

.amenities1 .box-container1 .box1 .image{
    height: 26rem;
    width: 100%;
    overflow:hidden;
    padding-bottom: 20px;   
}

.amenities1 .box-container1 .box1 .image img{
    height: 100%;
    width: 100%;
}

.amenities .box-container .box:hover .image img{
    transform:scale(1.2);
}
.amenities .box-container .box .content{
    padding-top: 1rem;
}

.amenities1 .box-container1 .box1 .content1 h2{
   font-size: 2rem;
   color:var(--text-color-1);
   line-height: 1.5;
   margin-bottom:10px ;
}

.amenities1.box-container1 .box1 .cont1 pre
{
    padding-top: 10px;
    font-family: serif;
    font-size: 11px;
    line-height: 25px;
}
.amenities .box-container .box .cont a{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 1rem;
    font-size: 1rem;
    color:#fff;
    background:rgb(111, 155, 249);
    border-radius: .5rem;
    cursor: pointer;
    text-decoration: none;
    letter-spacing: 1.5px;
    font-weight: 600;
    border:  solid 1px rgb(111, 155, 249);
    
}
.amenities1 .box-container1 .box1 .cont1  a:hover{
    letter-spacing: .2rem;
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
      <h1>Amenities And<br/>
        Facilities</h1>
      <p> We do not give you just rooms to stay . We give you an environment so you can 
      experience the best while on a holiday with us . 
      </p>
        <a href="#" class="home-btn" >Let's go now</a>
        <a href="#" class="home-btn" >Register</a>
    
    </div> 
</section>
<section class="amenities">
  <div class="amenities">
      <h1> Amenities </h1>
      <pre> Cursus tempus . tincidunt quis sem sapien id non eget sed in consequat tellus<br/>
      phasellus orci in semper elit porttitor eget metus.</pre>
      </div>
      <div class="box-container">
          <div class="box">
              <div class="image">
                  <img src="./pexels-cottonbro-studio-4154994.jpg" width="100px" height="100px"/>
              </div>
              <div class="cont">
                  <h3>An Infinite edge Pool</h3>
                  <p>
                      Experience the joy of swimming in our<br>
                      infinity-edge pool that gives you a nice<br>
                      picturesque view.
                  </p>
                  <a href="#" class="btn">read more</a>
              </div>
          </div>
     <div class="box">
              <div class="image">
                  <img src="./pexels-andrea-piacquadio-3757657.jpg"  width="100px" height="100px"/>
              </div>
              <div class="cont">
                  <h3>An Iconic Spa</h3>
                  <p>
                      Set forth on an exquisite wellness journey<br>
                      to refresh,re-energize and rejuvenate <br>at
                      our iconic spa.
                  </p>
                  <a href="#" class="btn">read more</a>
              </div>
          </div>   
      <div class="box">
              <div class="image">
                  <img src="./pexels-barion-mcqueen-5002332.jpg"  width="100px" height="100px"/>
              </div>
              <div class="cont">
                  <h3>In house Restaurants</h3>
                  <p>
                      We have three in-house restaurants<br>
                      offering different cuisines that you can<br>
                      choose from.
                  </p>
                  <a href="#" class="btn">read more</a>
              </div>
          </div>
          <div class="box">
              <div class="image">
                  <img src="./pexels-koolshooters-8945923.jpg"  width="100px" height="100px"/>
              </div>
              <div class="cont">
                  <h3>Deep Soaking Bath-tub</h3>
                  <p>
                      Take a dip into these special bath-buts to<br>
                      soak into a refreshing vacation mode that<br>
                      you've wanted.
                  </p>
                  <a href="#" class="btn">read more</a>
              </div>
          </div>
          <div class="box">
              <div class="image">
                  <img src="./pexels-pixabay-461064.jpg"  width="100px" height="100px"/>
              </div>
              <div class="cont">
                  <h3>Guest Computer And WIFI</h3>
                  <p>
                      We offer special computers and WIFI for<br>
                      guests who'd like to say connected while<br>
                      on vacation.
                  </p>
                  <a href="#" class="btn">read more</a>
              </div>
          </div>
          <div class="box">
              <div class="image">
                  <img src="./pexels-cottonbro-studio-5371562.jpg"  width="100px" height="100px"/>
              </div>
              <div class="cont">
                  <h3>24 Hour Concierge</h3>
                  <p>
                      We have three in-house restaurants<br>
                      offering different cuisines that you can<br>
                      choose from.
                  </p>
                  <a href="#" class="btn">read more</a>
              </div>
          </div>
      </div>
  </section>
  <section class="amenities1">
    <div class="amenities1">
        <h1> Other Perks And Facilites</h1>
        <pre> 
            Looking for more ? Well,We believe that every guest walks into our hotel for the<br/>
            best experience . And ,we are determined to do that.
        </pre>
        </div>
        <div class="box-container1">
            <div class="box1">
                <div class="image">
                    <img src="./pexels-pixabay-271815.jpg"/>
                </div>
                <div class="cont1">
                    <h3>Ocean View Terrace</h3>
                    <p>
                        Among the scenic breauty of the city we<br>
                        also have an ocean view terrace for every<br>
                        Suite in our hotel.
                    </p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
       <div class="box1">
                <div class="image">
                    <img src="./pexels-ash-376464.jpg"/>
                </div>
                <div class="cont1">
                    <h3>Delicious Food</h3>
                    <p>
                       We ahve team chefs from across the<br>
                       world. So you can enjoy the delicacies <br>
                       anytime during your stay.
                    </p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>   
        <div class="box1">
                <div class="image">
                        <img src="./pexels-vincent-gerbouin-1174732.jpg"/>            </div>
                <div class="cont1">
                    <h3>Private Beach</h3>
                    <p>
                        Want to take a dip into the sea? All our <br>
                        guests get complimentary access to our<br>
                        Private beach.
                    </p>
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
              <a href="#"> mumbai , indai - 400104 </a>
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
      <div class="credit"> creadet by <span>Voyage Agence</span> | all rights reserved </div>
    
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