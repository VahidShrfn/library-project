<?php
use Illuminate\Support\Facades\Session;
use App\Models\libusers as Modelslibusers;

?>
<html dir="rtl" lang="en">
<head> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citadel|دنیای کتاب سیتیدل</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <div>
            <h4>

            @if(session()->has('login') && Session::get('login')==1)
            <?php 

            $id=Session::get('userID');
            $user= Modelslibusers::where('id', $id)->first();
            echo $user->name;
            
            ?>
            @endif

            </h4>
        </div>
        <a href="/" class="logo"> <i class="fas fa-book"></i> سیتیدل</a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="جستجو کنید" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="/boughtBooks" class="fas fa-heart"></a>
            <a href="/boughtBooks" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            @if(session()->has('login') && Session::get('login')==1)
            <a href="/?logout=1" >خروج</a>
            @else
            <div id="login-btn" class="fas fa-user"></div>
            @endif
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="/">خانه</a>
            <a href="/suggestion">پیشنهاد سیتیدل</a>
            <a href="/newBooks">جدیدها</a>
            <!-- <a href="#reviews">نظرات</a> -->
            <a href="/recommendation">معرفی کتاب</a>
        </nav>
    </div>

    <div class="alert">
        <h2> {{ session('msg') }} </h2>
    </div>

</header>

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="/" method="POST">
        @csrf
        <h3>ورود</h3>
        <span>نام کاربری</span>
        <input hidden type="string" name="ls" value="login">
        <input type="string" name="username" class="box" placeholder="نام کاربری خود را وارد کنید" id="">
        <span>رمز عبور</span>
        <input type="password" name="password" class="box" placeholder="رمز عبور خود را وارد کنید" id="">
        <input type="submit" value="ورود" class="btn">
        <p id="register-btn">ثبت نام نکرده اید ؟ <a href="#">ساخت حساب</a></p>
    </form>


</div>
<!--end login form  -->


<!-- register form  -->
<div class="register-form-container" >

    <div id="close-register-btn" class="fas fa-times"></div>

    <form action="/" method="POST">
        @csrf
        <input hidden type="string" name="ls" value="signup" >
    <h3>ثبت نام</h3>
    <table>
        <tr>
            <td>
            <span> نام و نام خانوادگی</span>
            </td>
            <td>
            <input type="string" name="name" class="box" placeholder="نام" id="">
            
            </td>
        </tr>

        <tr>
            <td>
            <span>نام کاربری</span>
            </td>
            <td>
            <input type="string" name="username" class="box" placeholder="نام کاربری" id="">
            </td>
        </tr>

        <tr>
            <td>
            <span>ایمیل</span>
            </td>
            <td>
            <input type="email" name="email" class="box" placeholder="ایمیل" id="">
            </td>
        </tr>

        <tr>
            <td>
            <span>شماره تماس</span>
            </td>
            <td>
            <input type="string" name="phonenumber" class="box" placeholder="شماره تماس" id="">
            </td>
        </tr>


        <tr>
            <td>
            <span>رمز عبور</span>
            </td>
            <td>
            <input type="password" name="password" class="box" placeholder="رمز عبور" id="">
            </td>
        </tr>

        

    </table>
    
    <input type="submit" value="sign up" class="btn">
    </form>

</div>

<!-- end register form  -->

<!-- header section ends -->
