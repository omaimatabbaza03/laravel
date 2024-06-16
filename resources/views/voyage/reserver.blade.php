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
.reserve .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
    
}

.reserve .box-container .box{
    background:var(--bg-color-1);
   
}
form {
  padding-top: 40px;
  padding-left: 40px;
  width: 600px;
}
input{
  border: 1px solid black;
  padding: 2px;
  margin-top: 3px;
  color: black;
  width: 150px;
  margin-bottom: 10px;
  
}
.trip{
  margin-left: 200px
}
.btn{
  display: inline-block;
  font-size: 10px;
  padding: 5px 10px;
  background: #6e54fa;
  color: white;
  border-radius: 4px;
  transition: ease .40s;
  margin: 0 18px;
  margin-top: 5px;
  margin-left: 25px;
}
.btn:hover{
  background:#6e54fa;
  transform: scale(1.1);
}
.box label {
  font-size: 1rem;
    color:var(--text-color-2);
  font-weight: bold;
  font-family: sans-serif;
  
}
 </style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <section class="reserve">
    <h1>Valider votre Rérvation</h1>
    <div class="box-container">
      <div class="box">
        <h4>Invoice details</h4>
    <form action="{{route('finiReserve')}}" method="POST">
      <table>
        <tr>
          <td><label>username :</label> </td>
          <td><input type="text" name="username" /> </td>
          <td><label>E-mail :</label></td>
          <td><input type="email" name="email" /></td>
        </tr>
        
        <tr>
          <td><label>Adresse :</label></td>
            <td><input type="text" name="adresse" /></td>
              <td><label> Ville : </label></td>
                <td><input type="text" name="ville" /></td>
              
        </tr>
        <tr>
          <td><label>Code Postale :</label></td>
          <td><input type="text" name="code" /></td>
          <td><label> Pays : </label></td>
          <td><input type="text" name="pays" /></td>
              
        </tr>
        <tr>
          <td><label>Date Rservation  :</label></td>
          <td><input type="date" name="DateR" /></td>
          <td>
            <button type="submit" class="btn">reservation confirmation</button>
          </td>
              
        </tr>
      </table>

    </form>
      </div>

      <div class="box">
        <div class="trip">
        <h4>Votre Réservation </h4>
        <p> Wednesday 6 May</p>
        <p>04:20 ---------- 07:00</p>
        <h4>Price information</h4>
        <p>The price of the trip</p>
        <a href=""><i class="fa fa-cc-visa" style="font-size:30px"></i></a>
        <a href=""><i class="fa fa-cc-mastercard" style="font-size:30px"></i></a>
        </div>
      </div>
     
     
      </div>
      <button onclick="window.print()">Imprimer</button>
  
  </section>
      

</body>
</html>