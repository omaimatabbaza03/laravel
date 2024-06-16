<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
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
.btn{
  background-color: var(--main-color);
  color: #fff;

}
b{
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 8px;
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
    width: 80%;
}

.packages .box-container .box .image{
    height:25rem;
    width: 100%;
    padding:1.5rem;
    position: relative;
}

.packages .box-container .box .image img{
    height:80%;
    width: 100%;
    object-fit: cover;
    border-radius: .5rem;
}

.packages .box-container .box .image h3{
  position: relative;
  font-size: 16px;
  font-weight: 600;
  text-align: right;
  color: white;
  top: -150px;
  right: 30px;
}
.dest-content{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 16px;
  margin-top: -70px;

}

.location h4{
  font-size: 2àpx;
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
.title h2{ 
  font-size: 24px;
  line-height: 1.2;
  margin-bottom: 20px;
  font-weight: 700;
 
  }
  </style>
  <title>Consulter les rooms</title>
</head>
<body>
  


<!--offres section-->
<section class="packages" id="packages">
  <div class="title">
     <h2>Related Rooms</h2>
   </div>    
   <div class="box-container">
    @if ($room)
      @foreach($room as $val)
      <div class="box">
          <div class="image">
              <img src="{{$val->image}}" alt="">
              
          </div>
          <div class="dest-content">
             <div class="location">
     
      <p>Nombre de Persone :{{$val->persone}}</p>
      <b>Prix :{{$val->prix}}DH</b><br><br>
        <a href="{{route('reserver')}}" class="btn">Reserve</a>
          </div>

      </div>
      </div>
      @endforeach
    
    
        
    @endif
    
     </div><br><br>
     <a href="{{route('voyage.index')}}" class="btn">Retour</a>

 </section>
 


</body>
</html>