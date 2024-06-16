
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
    @import "https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap";

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 78px;
        background: #11101D;
        padding: 6px 14px;
        z-index: 99;
        transition: all 0.5s ease;
    }

    .sidebar .logo-details {
        height: 60px;
        display: flex;
        align-items: center;
        position: relative;
    }

    .sidebar .logo-details .icon {
        opacity: 0;
        transition: all 0.5s ease;
    }

    .sidebar .logo-details .logo_name {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        opacity: 0;
        transition: all 0.5s ease;
    }

    .sidebar .logo-details #btn {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        font-size: 22px;
        transition: all 0.4s ease;
        font-size: 23px;
        text-align: center;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .sidebar i {
        color: #fff;
        height: 60px;
        min-width: 50px;
        font-size: 28px;
        text-align: center;
        line-height: 60px;
    }

    .sidebar .nav-list {
        margin-top: 20px;
        height: 100%;
    }

    .sidebar li {
        position: relative;
        margin: 8px 0;
        list-style: none;
    }

    .sidebar li .tooltip {
        position: absolute;
        top: -20px;
        left: calc(100% + 15px);
        z-index: 3;
        background: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        padding: 6px 12px;
        border-radius: 4px;
        font-size: 15px;
        font-weight: 400;
        opacity: 0;
        pointer-events: none;
        transition: 0s;
    }

    .sidebar li:hover .tooltip {
        opacity: 1;
        pointer-events: auto;
        transition: all 0.4s ease;
        top: 50%;
        transform: translateY(-50%);
    }

    .sidebar li a {
        display: flex;
        height: 100%;
        width: 100%;
        border-radius: 12px;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
        background: #11101D;
    }

    .sidebar li a:hover {
        background: #FFF;
    }

    .sidebar li a:hover .links_name {
        transition: all 0.5s ease;
        color: #11101D;
    }

    .sidebar li a:hover i {
        transition: all 0.5s ease;
        color: #11101D;
    }

    .sidebar li a .links_name {
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: 0.4s;
    }

    .sidebar li i {
        height: 50px;
        line-height: 50px;
        font-size: 18px;
        border-radius: 12px;
    }

    .sidebar li .profile-details {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
    }

    .sidebar li img {
        height: 45px;
        width: 45px;
        object-fit: cover;
        border-radius: 6px;
        margin-right: 10px;
    }



    .sidebar #sr {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        font-size: 22px;
        background: #1d1b31;
        color: #FFF;
    }

    .sidebar .bx-search:hover {
        background: #FFF;
        color: #11101d;
    }

    .sidebar li.profile {
        position: fixed;
        height: 60px;
        width: 78px;
        left: 0;
        bottom: -8px;
        padding: 10px 14px;
        background: #1d1b31;
        transition: all 0.5s ease;
        overflow: hidden;
    }

    .sidebar li.profile .name {
        font-size: 15px;
        font-weight: 400;
        color: #fff;
        white-space: nowrap;
    }

    .sidebar li.profile .job {
        font-size: 15px;
        font-weight: 400;
        color: #fff;
        white-space: nowrap;
        font-size: 12px;
    }

    .sidebar .profile #log_out {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        background: #1d1b31;
        width: 100%;
        height: 60px;
        line-height: 60px;
        border-radius: 0px;
        transition: all 0.5s ease;
    }

    .sidebar.open {
        width: 250px;
    }

    .sidebar.open .logo-details .icon {
        opacity: 1;
    }

    .sidebar.open .logo-details .logo_name {
        opacity: 1;
    }

    .sidebar.open .logo-details #btn {
        text-align: right;
    }

    .sidebar.open li .tooltip {
        display: none;
    }

    .sidebar.open li a .links_name {
        opacity: 1;
        pointer-events: auto;
    }

    .sidebar.open #z {
        padding: 0 20px 0 50px;
        width: 100%;
    }

    .sidebar.open .bx-search:hover {
        background: #1d1b31;
        color: #FFF;
    }

    .sidebar.open li.profile {
        width: 250px;
    }

    .sidebar.open .profile #log_out {
        width: 50px;
        background: none;
    }

    .sidebar.open~.home-section {
        left: 250px;
        width: calc(100% - 250px);
    }

    .home-section {
        position: relative;
        background: #E4E9F7;
        min-height: 100vh;
        top: 0;
        left: 78px;
        width: calc(100% - 78px);
        transition: all 0.5s ease;
        z-index: 2;
    }

    .home-section .text {
        display: inline-block;
        color: #000;
        font-size: 25px;
        font-weight: 500;
        margin: 18px;
    }

    .allp {
        width: 100%;
       
        min-height: 100vh;
        place-items: center;
        overflow: hidden;
        justify-content: center;

    }

    nav {
        width: 80%;
        margin: 20px auto;
        border-radius: 40px;
        height: 90px;
        color: #2c3e50;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
        letter-spacing: 3px;
        text-transform: uppercase;
        padding-bottom: -20px;
       

    }

    .head {
        width: 40%;
        font-size: 1.4rem;
        color: #1DA1F2;
        background-color: #373B44;
        height: 40px;

    }

    .container {
        width: 700px;
        height: 300px;
        border-radius: 20px;
        padding: 15px 20px;
        box-sizing: border-box;
        background: linear-gradient(#bdc3c7, #bdc3c7);
        margin: 0px;
    }

    .brand-title {
        margin-top: 10px;
        font-weight: 900;
        font-size: 30px;
        color: #000;
        letter-spacing: 1px;
        text-decoration:underline;
    }

    .inputs {
        text-align: left;
    }

    label,
    input,
    button {
        display: block;
        width: 100%;
        padding: 0;
        border: none;
        outline: none;
    }

    label {
        margin: 15px 5px;
    }



    input::placeholder {
        color: gray;
    }

    input {
        background: #ecf0f3;
        padding: 10px;
        padding-left: 20px;
        height: 37px;
        font-size: 14px;
       
    }

    button,
    .xma {
        color: white;
        margin: 20px auto;
        background: #000;
        height: 40px;
        width: 80%;
        margin-left: 100px;
       
        cursor: pointer;
        font-weight: 900;
        /* box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white; */
        transition: 0.5s;
    }

    button:hover {
        box-shadow: none;
        color: #FFF;
        background: #373B44;
        
    }

    

    #file {
        display: none;
    }

    .xma {
        text-align: center;
        padding-top: 10px;
    }

    @keyframes over {
        from {
            letter-spacing: 5px;
            text-shadow: 0 0 10px #00fff2, 0 0 20px #00fff2, 0 0 30px #00fff2, 0 0 40px #00fff2, 0 0 50px #00fff2, 0 0 60px #00fff2, 0 0 70px #00fff2, 0 0 90px #00fff2;
        }

        to {
            text-shadow: 0 0 20px #00fff2, 0 0 30px #00fff2, 0 0 40px #00fff2, 0 0 50px #00fff2, 0 0 60px #00fff2, 0 0 70px #00fff2, 0 0 80px #00fff2, 0 1 90px #00fff2;
        }
    }

    .sidebar #z {
        font-size: 15px;
        color: #FFF;
        font-weight: 400;
        outline: none;
        height: 50px;
        width: 100%;
        width: 50px;
        border: none;
        border-radius: 12px;
        transition: all 0.5s ease;
        background: #1d1b31;
        box-shadow: none;
    }

    .ds {
        display: flex;
        justify-content: space-between;
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">page admin</div>
            <i class="bx fa-solid fa-bars" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
              <a href="">
                <i class="bx fa-solid fa-magnifying-glass" id="sr"></i>
                <input type="text" placeholder="Search..." id="z">
              </a>
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="{{route('voyage.create')}}">
                    <!-- <i class='bx bx-grid-alt'></i> -->
                    <i class="bx fa-solid fa-circle-plus"></i>
                    <span class="links_name">Add Offres</span>
                </a>
                <span class="tooltip">Add Offres</span>
            </li>
            <li>
                <a href="">
                    <i class='fas fa-hotel'></i>
                    <span class="links_name">List Hotel</span>
                </a>
                <span class="tooltip">List Hotel</span>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-plus-square"></i>
                    <span class="links_name">Add Hotel</span>
                </a>
                <span class="tooltip">Add Hotel</span>
            </li>
            <li>
                <a href="">
                    <i class='fas fa-share'></i>
                  <span class="links_name">Back</span>
                </a>
                <span class="tooltip">Back</span>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="allp">
            <nav>
                <h1>Add Offres</h1>
            </nav>
            <center>
                <div class="container">
                    <form method="post"  action="{{route('voyage.store')}}">
                        @csrf
                      
                        <div class="inputs">
                           
                                <table>
                                    <tr>
                                <td>
                                    <label>Noffres</label>
                                </td>
                                <td>
                                    <input type="number" name="Noffres">
                                </td>
                                <td>
                                    <label>TITRE</label>
                                </td>
                                <td>
                                    <input type="text" name="titre" />
                                </td>
                            </tr>
                           <tr>
                                <td>
                                    <label>DateDebut</label>
                                </td>
                                    <td>
                                    <input type="text" name="DateDebut">
                                    </td>
                                <td>
                                    <label>Datefin</label>
                                </td>
                                <td>
                                    <input type="text" name="Datefin" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>ville</label>
                                </td>
                                    <td>
                                    <input type="text" name="ville">
                                    </td>
                                <td>
                                    <label>titre</label>
                                </td>
                                <td>
                                    <input type="text" name="titre" />
                                </td>
                            </tr>
                           
                            <tr>
                         
                                <td>
                                    <label>prix</label> </td>
                                
                                    <td> <input type="number" name="prix" />
                                </td>
                            </tr>
                           
                            <!-- ___________________________________________________________ -->
                               </tr>
                            <tr>
                                <td>
                                <label for="foto" class="xma">IMAGE</label>
                                  
                                 <input type="file" name="image" id="foto" style="display: none;" />
                                 </td>
                                 
                            <td>
                                <button type="submit" name="enr">Ajouter </button>
                            </td>
                            </tr>
                            </table>
                        </div>
                    </form>
                </div>
                
            </center>
        </div>
    </section>
    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector("#sr");
    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search icon
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });
    </script>
</body>

</html>