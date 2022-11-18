

<!DOCTYPE html>
<!--page header-->
@include('header');

<!-- end page header-->





<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3 id="pivot" >جدیدترین کتاب ها</h3>
            <p> با سیتادل به روز باشید </p>
            <a href="#" class="btn">اکنون خرید کنید</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                @foreach($books as $book)
                
                <a href="/book?id={{ $book->id}}" class="swiper-slide"><img src="{{ $book-> first_page}}" alt=""></a>
                @endforeach
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>ارسال رایگان</h3>
            <p>سفارش بالای 100 هزار تومان</p> 
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>پرداخت امن</h3>
            <p>100 پرداخت مطمئن</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>بازگشت آسان</h3>
            <p>10 روز مهلت بازگشت</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>پشتیبانی 7/24</h3>
            <p>در هر زمان با ما تماس بگیرید</p>
        </div>
    </div>

</section>

<!-- icons section ends -->


<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>برای آخرین به روز رسانی مشترک شوید</h3>
        <input type="email" name="" placeholder="ایمیل خود را وارد کنید" id="" class="box">
        <input type="submit" value="ارسال کتاب های جدید به ایمیل شما" class="btn">
    </form>

</section>

<!-- newsletter section ends -->





<!-- comments section starts  
<section class="reviews" id="reviews">

    <h1 class="heading"> <span>نظرات مشتریان</span> </h1>

    <div class="swiper reviews-slider">


        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <h3>نام مشتری</h3>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>
comments section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>معرفی کتاب</span> </h1>
    

    

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>عنوان متن در اینجا</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>
                    <a href="#" class="btn">مطالعه بیشتر</a>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->


<!-- footer section starts -->  

@include('footer');

<!-- footer section ends -->















