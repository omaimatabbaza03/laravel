<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
 
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
        color: #11101d;
        font-size: 25px;
        font-weight: 500;
        margin: 18px;
    }

    .allp {
        width: 100%;
        background: linear-gradient(#141e30, #243b55);
        min-height: 100vh;
        place-items: center;
        overflow: hidden;
        justify-content: center;

    }

    nav {
        width: 80%;
        margin: 20px auto;
        background: linear-gradient(to left, #bdc3c7, #fff);
        border-radius: 40px;
        height: 90px;
        color: red;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 3rem;
        letter-spacing: 3px;
        text-transform: uppercase;
        box-shadow: rgba(0, 0, 0, 0.6) 0px 15px 25px;
        animation: over 3s ease infinite alternate;

    }

    .head {
        width: 40%;
        font-size: 1.4rem;
        color: #1DA1F2;
        background-color: #373B44;
        height: 40px;

    }

    table {
        width: 1500px;
        height: 400px;
        border-radius: 20px;
        padding: 15px 20px;
        box-sizing: border-box;
        background: linear-gradient(#bdc3c7, #2c3e50);
        box-shadow: rgba(0, 0, 0, 0.6) 0px 15px 25px;
        margin-left: -30px;
        
    }
    


    .brand-title {
        margin-top: 10px;
        font-weight: 900;
        font-size: 30px;
        color: #1DA1F2;
        letter-spacing: 1px;
        text-decoration:underline;
    }


 
    label {
        margin: 15px 5px;
    }


    .xma:hover {
        box-shadow: none;
        color: #1DA1F2;
        background: #03e9f4;
        box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4;
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
                <a href="
                ">
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
            <h1>New Hotel</h1>
        </nav>
        <div class="container">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th scope="col">idHotel</th>
                        <th scope="col">NomHotel</th>
                        <th scope="col">NumberHotel</th>
                        <th scope="col">NomVille</th>
                        <th scope="col">Pays</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->idHotel }}</td>
                        <td>{{ $hotel->nomHotel }}</td>
                        <td>{{ $hotel->numberHotel }}</td>
                        <td>{{ $hotel->nomVille }}</td>
                        <td>{{ $hotel->pays }}</td>
                        <td>
                            <form method="post" action="{{ route('hotels.destroy', $hotel->idHotel) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('hotels.show', $hotel->idHotel) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('hotels.edit', $hotel->idHotel) }}" class="btn btn-warning btn-sm">Update</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>
                        </td>
                    </tr>
                    @endforeach</tbody> </table>
        </div>
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