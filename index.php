<?php
session_start();

// Cek jika pengguna belum login, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// Mengambil username dari sesi
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas UTS Web </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-paw"></i> Woof & Wag </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#shop">shop</a>
            <a href="#services">services</a>
            <a href="#plan">plan</a>
            <a href="#contact">Our Team</a>
            <a href="logout.php">logout</a>    
            <a href="upload.php">upload</a>  
        </nav>


        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            
            <div class="fas fa-user" id="login-btn"></div>
        </div>
        
        <div class="container">
            <button id= "dark-mode-btn" onclick="toggleDarkMode()"><img src="image/moon.png" id="icon"></button>
        </div>

        <form action="" class="login-form">
            <h3>sign in</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="password" name="" placeholder="enter your password" id="" class="box">
            <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <div class="links">
                <a href="#">forget password</a>
                <a href="#">sign up</a>
            </div>
        </form>

    </header>


    <section class="home" id="home">
        <div class="content">
            <h3> <span>hi</span> welcome to Woof & Wag pet shop </h3>
        </div>

        <video autoplay muted loop>
            <source src="image/video.mp4" type="video/mp4" />
        </video>
    </section>

    <section class="about" id="about">
        <div class="image">
            <img src="image/PetShop.png" alt="">
        </div>
        <div class="content">
            <h3>premium <span>pet food</span> & <span>dogs</span> for sale</h3>
            <p>Selamat datang di petshop kami! Temukan sahabat terbaik Anda di sini. Kami menawarkan berbagai macam ras
                anjing yang lucu dan sehat serta makanan berkualitas tinggi untuk anjing dan kucing Anda. Dapatkan
                produk-produk terbaik dengan harga yang terjangkau dan nikmati diskon menarik setiap bulannya. Jangan
                ragu untuk menghubungi kami jika Anda membutuhkan bantuan atau saran tentang perawatan hewan peliharaan
                Anda. Terima kasih telah memilih kami sebagai partner perawatan hewan peliharaan Anda!🧡🧡</p>
        </div>
    </section>

    <div class="dog-food">

        <div class="image">
            <img src="image/dog.png" alt="">
        </div>

        <div class="content">
            <h3> <span>Pedigree</span> dog food </h3>
            <p>🐾Berikan makanan terbaik untuk anjing kesayangan Anda dengan Pedigree. Dibuat dengan bahan-bahan
                berkualitas dan teruji, memberikan gizi yang dibutuhkan untuk anjing Anda agar tetap sehat dan bahagia
                setiap hari.
                🐶"Pedigree: Memenuhi Gizi Anjing Anda dengan Rasanya yang Tak Tertandingi"🍴
            </p>
            <div class="amount">IDR 20.000 - IDR 120.000</div>
            <a href="Fitur.html"> <img src="image/shop_now_dog.png" alt=""> </a>
        </div>
    </div>

    <div class="cat-food">

        <div class="content">
            <h3> <span>Whiskas</span> cat food </h3>
            <p>Kamu hanya ingin memberikan makanan terbaik untuk si manismu? Whiskas jawabannya! Dibuat dengan
                bahan-bahan berkualitas dan dibuat khusus untuk memenuhi kebutuhan nutrisi kucingmu.</p>
            <div class="amount">IDR 10.000 - IDR 150.000</div>
            <a href="Fitur2.html"> <img src="image/shop_now_cat.png" alt=""> </a>
        </div>

        <div class="image">
            <img src="image/cat.png" alt="">
        </div>

    </div>


    <section class="shop" id="shop">

        <h1 class="heading"> our <span> products </span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/Beagle.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Beagle</h3>
                    <div class="amount"> IDR 4.500.000 – IDR 6.000.000 </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/Dalmatian.jpg" alt="">
                    <a href="halaman_selanjutnya.html">
                        <img src="image/Dalmatian.jpg" alt="Deskripsi Gambar" id="gambarLink">
                      </a>
                </div>
                <div class="content">
                    <h3>Dalmatian</h3>
                    <div class="amount"> IDR 3.950.000 – IDR 4.250.000 </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart" ></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/Labrador.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Labrador</h3>
                    <div class="amount"> IDR 6.000.000 – IDR 10.000.000 </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/dashchund.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Dashchund</h3>
                    <div class="amount"> IDR 3.000.000 – IDR 11.000.000 </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/Golden.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Golden Retriever</h3>
                    <div class="amount"> IDR 10.000.000 – IDR 15.000.000 </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/corgi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Corgi</h3>
                    <div class="amount"> IDR 13.000.000 – IDR 15.000.000 </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shiba inu.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Shiba Inu</h3>
                    <div class="amount"> IDR 15.000.000 – IDR 30.000.000 </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/Cihuahua.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cihuahua</h3>
                    <div class="amount"> IDR 5.000.000 – IDR 19.000.000 </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/Pitbull.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pitbull</h3>
                    <div class="amount"> IDR 5.000.000 – IDR 22.000.000 </div>
                </div>
            </div>
        </div>

    </section>


    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-dog"></i>
                <h3>dog boarding</h3>
                <a href="#" class="btn">Coming Soon</a>
            </div>

            <div class="box">
                <i class="fas fa-cat"></i>
                <h3>cat boarding</h3>
                <a href="#" class="btn">Coming Soon</a>
            </div>

            <div class="box">
                <i class="fas fa-bath"></i>
                <h3>spa & grooming</h3>
                <a href="#" class="btn">Coming Soon</a>
            </div>

            <div class="box">
                <i class="fas fa-drumstick-bite"></i>
                <h3>healthy meal</h3>
                <a href="#" class="btn">Coming Soon</a>
            </div>

            <div class="box">
                <i class="fas fa-baseball-ball"></i>
                <h3>activity exercise</h3>
                <a href="#" class="btn">Coming Soon</a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>health care</h3>
                <a href="#" class="btn">Coming Soon</a>
            </div>
        </div>

    </section>

    <section class="plan" id="plan">

        <h1 class="heading"> choose a <span>plan</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">pet care</h3>
                <h3 class="day"> 1 day </h3>
                <i class="fas fa-bicycle icon"></i>
                <div class="list">
                    <p> pet room <span class="fas fa-check"></span> </p>
                    <p> pet grooming <span class="fas fa-check"></span> </p>
                    <p> pet exercise <span class="fas fa-check"></span> </p>
                    <p> pet meals <span class="fas fa-check"></span> </p>
                </div>
                <div class="amount"> 500rb </div>
                <a href="#" class="btn"> Coming Soon </a>
            </div>

            <div class="box">
                <h3 class="title">pet care</h3>
                <h3 class="day"> 10 days </h3>
                <i class="fas fa-motorcycle icon"></i>
                <div class="list">
                    <p> pet room <span class="fas fa-check"></span> </p>
                    <p> pet grooming <span class="fas fa-check"></span> </p>
                    <p> pet exercise <span class="fas fa-check"></span> </p>
                    <p> pet meals <span class="fas fa-check"></span> </p>
                </div>
                <div class="amount"> 4,5jt </div>
                <a href="#" class="btn"> Coming Soon </a>
            </div>

            <div class="box">
                <h3 class="title">pet care</h3>
                <h3 class="day"> 30 days </h3>
                <i class="fas fa-car-side icon"></i>
                <div class="list">
                    <p> pet room <span class="fas fa-check"></span> </p>
                    <p> pet grooming <span class="fas fa-check"></span> </p>
                    <p> pet exercise <span class="fas fa-check"></span> </p>
                    <p> pet meals <span class="fas fa-check"></span> </p>
                </div>
                <div class="amount"> 12jt </div>
                <a href="#" class="btn"> Coming Soon </a>
            </div>

        </div>

    </section>

    <section class="contact" id="contact">


        <form action="">
            <h3>Our Team</h3>
            <style>
                .container {
                    display: flex;
                    justify-content: space-around;
                    align-items: center;
                    flex-wrap: wrap;
                }

                .card {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin: 20px;
                    padding: 20px;
                    background-color: #f2f2f2;
                    border-radius: 10px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                    transition: 0.3s;
                    width: 300px;
                }

                .card:hover {
                    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
                }

                h1 {
                    font-size: 28px;
                    margin-bottom: 10px;
                }

                p {
                    font-size: 18px;
                    margin-bottom: 10px;
                }

                .card img {
                    width: 200px;
                    height: 200px;
                    border-radius: 50%;
                    object-fit: cover;
                    object-position: center;
                    margin-bottom: 20px;
                }

                .card h1 {
                    text-align: center;
                }
            </style>


            <div class="container">
                <div class="card">
                    <img src="image/Abi.jpeg" alt="Person 1">
                    <h1>Abigail Hadasa Wina Pantow </h1>
                    <h1> 210211060268 </h1>
                </div>
                <div class="card">
                    <img src="image/Ima.jpeg" alt="Person 2">
                    <h1>Kharisma Lensania Mawei</h1>
                    <h1> 210211060038 </h1>
                </div>
                <div class="card">
                    <img src="image/Debo.jpg" alt="Person 3">
                    <h1>Debora Feica Intan Akemat</h1>
                    <h1> 210211060078 </h1>
                </div>
            </div>

    </section>

    <section class="footer">

        <img src="image/top_wave.png" alt="">

        <div class="share">
            <a href="https://drive.google.com/folderview?id=1Nt_BHagOC3aWdjwz1kNaLMX_03zh5tJR" class="btn"> <i class="">
                Link Video Presentasi </i></a>
            <a href="https://www.instagram.com/abigailhadasa/" class="btn"> <i class="fab fa-instagram">
                    @abigailhadasa</i></a>
            <a href="https://www.instagram.com/__khrismawei/" class="btn"> <i class="fab fa-instagram">
                    @__khrismawei</i></a>
            <a href="https://www.instagram.com/debora_akemat/" class="btn"> <i class="fab fa-instagram">
                    @debora_akemat</i></a>
        </div>

        
    </section>

    <script src="js/script.js"></script>

</body>

</html>