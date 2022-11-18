<!DOCTYPE html>
<!-- header starts --> 

@include('header')

<!-- header ends-->
@if(!(session()->has('login') && Session::get('login')==1))
    <h2>برای اضافه کردن کتاب مورد نظر به لیست خرید یا خرید آن ابتدا وارد حساب کاربری خود شوید</h2>
@elseif($buy==1)
    کتاب برای شما ارسال خواهد شد... 
@elseif($buy==2)
    کتاب به لسیت مورد علاقه ی شما اضافه شد...
@endif

<section class="home" id="home">


    <div class="row">

        <div class="content">
            <h3 id="pivot" > {{ $book->name }} </h3>
            <p> نویسنده:{{$book->writer}}</p>
            <p>تعداد صفحات: {{ $book->pages }}</p>
            <a href="/book?id={{$book->id}}&buy=1" class="btn">اکنون خرید کنید</a>              
            <a href="/book?id={{$book->id}}&buy=2" class="btn">اضافه به لیست خرید</a>

        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a class="swiper-slide"><img src="{{ $book-> first_page}}" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- footer starts -->

@include('footer')

<!-- footer ends -->