<?php
// session_start();
// require "../includes/dbh.inc.php";
// error_reporting(E_ALL);
// if (!$_SESSION['admin']) {
//     header('Location: signup.php');
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/style.css">
   
</head>

<body>
    <style>
        /* =========== Google Fonts ============ */
@import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap");

/* =============== Globals ============== */
* {
  font-family: "Ubuntu", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --blue: #21854e;
  --white: #fff;
  --gray: #f5f5f5;
  --black1: #222;
  --black2: #999;
}

body {
  min-height: 100vh;
  overflow-x: hidden;
}

.container {
  position: relative;
  width: 100%;
}

/* =============== Navigation ================ */
.navigation {
  position: fixed;
  width: 300px;
  height: 100%;
  background: var(--blue);
  border-left: 10px solid var(--blue);
  transition: 0.5s;
  overflow: hidden;
}

.navigation.active {
  width: 80px;
}

.navigation ul {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
}

.navigation ul li {
  position: relative;
  width: 100%;
  list-style: none;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}

.navigation ul li:hover,
.navigation ul li.hovered {
  background-color: var(--white);
}

.navigation ul li:nth-child(1) {
  margin-bottom: 40px;
  pointer-events: none;
}

.navigation ul li a {
  position: relative;
  display: block;
  width: 100%;
  display: flex;
  text-decoration: none;
  color: var(--white);
}

.navigation ul li:hover a,
.navigation ul li.hovered a {
  color: var(--blue);
}

.navigation ul li a .icon {
  position: relative;
  display: block;
  min-width: 60px;
  height: 60px;
  line-height: 75px;
  text-align: center;
}

.navigation ul li a .icon ion-icon {
  font-size: 1.75rem;
}

.navigation ul li a .title {
  position: relative;
  display: block;
  padding: 0 10px;
  height: 60px;
  line-height: 60px;
  text-align: start;
  white-space: nowrap;
}

/* --------- curve outside ---------- */
.navigation ul li:hover a::before,
.navigation ul li.hovered a::before {
  content: "";
  position: absolute;
  right: 0;
  top: -50px;
  width: 50px;
  height: 50px;
  background-color: transparent;
  border-radius: 50%;
  box-shadow: 35px 35px 0 10px var(--white);
  pointer-events: none;
}

.navigation ul li:hover a::after,
.navigation ul li.hovered a::after {
  content: "";
  position: absolute;
  right: 0;
  bottom: -50px;
  width: 50px;
  height: 50px;
  background-color: transparent;
  border-radius: 50%;
  box-shadow: 35px -35px 0 10px var(--white);
  pointer-events: none;
}

/* ===================== Main ===================== */
.main {
  position: absolute;
  width: calc(100% - 300px);
  left: 300px;
  min-height: 100vh;
  background: var(--white);
  transition: 0.5s;
}

.main.active {
  width: calc(100% - 80px);
  left: 80px;
}

.topbar {
  width: 96%;
  height: 60px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 10px;
}

.toggle {
  position: relative;
  width: 60px;
  height: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2.5rem;
  cursor: pointer;
}

.search {
  position: relative;
  width: 400px;
  margin: 0 10px;
}

.search label {
  position: relative;
  width: 100%;
}

.search label input {
  width: 100%;
  height: 40px;
  border-radius: 40px;
  padding: 5px 20px;
  padding-left: 35px;
  font-size: 18px;
  outline: none;
  border: 1px solid var(--black2);
}

.search label ion-icon {
  position: absolute;
  top: 0;
  left: 10px;
  font-size: 1.2rem;
}

.user {
  position: relative;
  width: 40px;
  height: 40px;
  /* border-radius: 50%; */
  overflow: hidden;
  cursor: pointer;
}



/* ======================= Cards ====================== */
.cardBox {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 30px;
}

.cardBox .card {
  position: relative;
  background: var(--white);
  padding: 30px;
  border-radius: 20px;
  display: flex;
  justify-content: space-between;
  cursor: pointer;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
}

.cardBox .card .numbers {
  position: relative;
  font-weight: 500;
  font-size: 2.5rem;
  color: var(--blue);
}

.cardBox .card .cardName {
  color: var(--black2);
  font-size: 1.1rem;
  margin-top: 5px;
}

.cardBox .card .iconBx {
  font-size: 3.5rem;
  color: var(--black2);
}

.cardBox .card:hover {
  background: var(--blue);
}

.cardBox .card:hover .numbers,
.cardBox .card:hover .cardName,
.cardBox .card:hover .iconBx {
  color: var(--white);
}

/* ================== Order Details List ============== */
.details {
  position: relative;
  width: 100%;
  padding: 20px;

}

.details .box {
  position: relative;
  display: grid;
  min-height: 500px;
  background: var(--white);
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
}

.details .cardHeader {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}

.cardHeader h2 {
  font-weight: 600;
  color: var(--blue);
}

.cardHeader .btn {
  position: relative;
  padding: 5px 10px;
  background: var(--blue);
  text-decoration: none;
  color: var(--white);
  border-radius: 6px;
}




/* ====================== Responsive Design ========================== */
@media (max-width: 991px) {
  .navigation {
    left: -300px;
  }

  .navigation.active {
    width: 300px;
    left: 0;
  }

  .main {
    width: 100%;
    left: 0;
  }

  .main.active {
    left: 300px;
  }

  .cardBox {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .details {
    grid-template-columns: 1fr;
  }

  .box {
    overflow-x: auto;
  }

  .status.inProgress {
    white-space: nowrap;
  }
}

@media (max-width: 480px) {
  .cardBox {
    grid-template-columns: repeat(1, 1fr);
  }

  .cardHeader h2 {
    font-size: 20px;
  }

  .user {
    min-width: 40px;
  }

  .navigation {
    width: 100%;
    left: -100%;
    z-index: 1000;
  }

  .navigation.active {
    width: 100%;
    left: 0;
  }

  .toggle {
    z-index: 10001;
  }

  .main.active .toggle {
    color: #fff;
    position: fixed;
    right: 0;
    left: initial;
  }
}
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .btn {
            padding: 5px 10px;
            text-decoration: none;
            display: inline-block;
            margin: 2px;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn-info {
            background-color: #5bc0de;
            color: #fff;
        }

        .btn-add {
            background-color: #040;
            color: #fff;
        }

        .btn-danger {
            background-color: #d9534f;
            color: #fff;
        }

        form.form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .form input,
        .form select,
        .form button {
            flex: 1;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-right: 10px;
        }

        .form button {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .form button:hover {
            background-color: #45a049;
        }

        .modal {
            position: fixed;
            display: none;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .btn#close {
            margin: 10px;

        }

        .box h1 {
            text-align: center;
            margin: 10px 0 30px;
            /* font-size: ; */
        }
    </style>
    
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="./dashboard.php">
                        <span class="icon">
                            <ion-icon name="rose-outline"></ion-icon>
                        </span>
                        <span class="title">O-PEP</span>
                    </a>
                </li>



                <li>
                    <a href="#plantes">
                        <span class="icon">
                            <ion-icon name="leaf-outline"></ion-icon>
                        </span>
                        <span class="title">plantes</span>
                    </a>
                </li>

                <li>
                    <a href="#categories">
                        <span class="icon">
                            <ion-icon name="sync"></ion-icon>
                        </span>
                        <span class="title">categories</span>
                    </a>
                </li>

                <li>
                    <a href="#themes">
                        <span class="icon">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </span>
                        <span class="title">Thèmes</span>
                    </a>
                </li>

                <li>
                    <a href="#tags">
                        <span class="icon">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </span>
                        <span class="title">Tags</span>
                    </a>
                </li>

                <li>
                    <a href="../includes/logout.inc.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class='title'>logout
                          
        </div>
        </a>
        </li>
        </ul>
    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>

                </label>
            </div>

            <div>
            
            </div>
        </div>


        <!-- ======================= Cards ================== -->


        <!-- ================ Order Details List ================= -->

        <div class="details" id="plantes">
            <div class="box">
                <div class="">
                    <h1>Gestion des plantes</h1>

                    <form class="form" action="../includes/ajouter.inc.php" method="post" enctype="multipart/form-data">
                        <input name="nomPlante" type="text" placeholder="nom">
                        <input name="pricePlante" type="number" placeholder="prix">
                        <input name="imagePlante" type="file">
                        <select name="catPlante" id="">
                           
                                <option value="">
                                   
                                </option>

                           
                        </select>
                        <button class="btn btn-add" name="ajouterPlante">
                            ajouter plante
                        </button>
                    </form>




                    <table class="table">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>nom</th>

                                <th>prix</th>

                                <th>image</th>

                                <th>categorie</th>

                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody style="text-align: center;">

                           

                                <tr>

                                    <td style="text-align: center;">
                                       
                                    </td>
                                    <td style="text-align: center;">
                                     
                                    </td>
                                    <td style="text-align: center;">
                                       
                                    </td>
                                    <td style="text-align: center;">
                                        <img src="../uploads/" alt="" style="width: 200px; border-radius: 10px;">
                                    </td>

                                    <td style="text-align: center;">
                                        
                                    </td>



                                    <td style="text-align: center;"><a class="btn btn-info" href="./modifierPlante.php?id=">modifier</a>&nbsp;<a class="btn btn-danger" href="../includes/deletePlante.inc.php?id=">supprimer</a>
                                    </td>

                                </tr>

                            

                        </tbody>

                    </table>
                </div>
            </div>

            <!-- ================= New Customers ================ -->

        </div>
        <div class="details" id="categories">
            <div class="box">
                <div class="">
                    <h1>Gestion des categories</h1>
                    <form class="form" action="../includes/ajouterCateg.inc.php" method="post">
                        <input name="nomCateg" type="text" placeholder="nom">
                        <button class="btn btn-add" name="ajouterCateg">
                            ajouter categorie
                        </button>
                    </form>
                    <table class="table">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>nom</th>

                                <th>nombre des plantes</th>

                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody style="text-align: center;">

                           

                                <tr>

                                    <td style="text-align: center;">
                                     
                                    </td>
                                    <td style="text-align: center;">
                                        
                                    </td>
                                    <td style="text-align: center;">
                                       
                                    </td>





                                    <td style="text-align: center;"><a class="btn btn-info" href="./modifierCateg.php?id=">modifier</a>&nbsp;<a class="btn btn-danger" href="../includes/deleteCateg.inc.php?id=">supprimer</a>
                                    </td>

                                </tr>


                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="details" id="themes">
            <div class="box">
                <div class="">
                    <h1>Gestion des thèmes</h1>
                    <form class="form" action="../includes/ajouterTheme.inc.php" method="post" enctype="multipart/form-data">
                        <input name="nomTheme" type="text" placeholder="Titre">
                        <input name="imageTheme" type="file" placeholder="">
                        <input name="descriptionTheme" type="text" placeholder="description">
                        <button class="btn btn-add" name="ajouterTheme">
                            ajouter thèmes
                        </button>
                    </form>
                    <table class="table">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Nom</th>

                                <!-- <th>nombre des articles/Thèmes</th> -->

                                <th>Image</th>

                                <th>Description</th>

                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody style="text-align: center;">

                            

                                <tr>

                                    <td style="text-align: center;">
                                        
                                    </td>
                                    <td style="text-align: center;">
                                        
                                    </td>
                                    <!-- <td style="text-align: center;"></td> -->
                                    <td style="text-align: center;">
                                        <img src="../uploads/" alt="" style="width: 200px; border-radius: 10px;">




                                    </td>
                                    <td style="text-align: center;">
                                       
                                    </td>



                                    <td style="text-align: center;"><a class="btn btn-info" href="./modifierTheme.php?id=">modifier</a>&nbsp;
                                        <a class="btn btn-danger" href="../includes/deleteTheme.inc.php?id=">supprimer</a>
                                    </td>

                                </tr>

                            

                        </tbody>

                    </table>
                </div>
            </div>
        </div>



        <div class="details" id='tags'>
            <div class="box">

                <div class="">
                    <h1>Gestion des tags</h1>

                    <form class="form" action="../includes/ajouttag.php" method="post">
                        <input name="tagName" type="text" placeholder="nom de tag">

                        <select name="themeTag" id="">
                           

                                <option value="">j</option>


                        </select>
                        <button class="btn btn-add" name="ajouterTag">
                            ajouter le tag
                        </button>
                    </form>
                    <table class="table">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Nom</th>


                                <th>theme</th>
                                <th>action</th>


                            </tr>

                        </thead>

                        <tbody style="text-align: center;">

                            

                                <tr>

                                    <td style="text-align: center;">
                                   
                                    </td>
                                    <td style="text-align: center;">
                                      
                                    </td>
                                    <!-- <td style="text-align: center;"></td> -->
                                    <td style="text-align: center;">
                                   
                                    </td>




                                    <td style="text-align: center;"><a class="btn btn-info" href="./modifierTags.php?id=">modifier</a>&nbsp;<a class="btn btn-danger" href="../includes/deleteTag.inc.php?id=">supprimer</a>
                                    </td>

                                </tr>


                        </tbody>

                    </table>
                </div>


            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 0, // Adjust the offset as needed
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
     <script>
        // add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
    </script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>