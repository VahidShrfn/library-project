<!DOCTYPE html>
<!--page header-->
@include('header');

<!-- end page header-->
<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span> پرطرفدارهای سیتیدل </span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
            @foreach($books as $book)
            
            <div class="swiper-slide box">
                <!--
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                     <a href="{{ $book->pdf_address }}" class="fas fa-eye"></a> 
                </div>
                -->
                <div class="image">
                    <img src="{{ $book->first_page }}" alt="">
                </div>
                <div class="content">
                    <h3>{{ $book-> name }}</h3>
                    <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                    <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- footer section starts -->  

@include('footer');

<!-- footer section ends -->


</body>
</html>