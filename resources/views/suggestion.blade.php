<!DOCTYPE html>
<!--page header-->
@include('header');

<!-- end page header-->


<!-- featured section starts  -->

<section class="featured" id="featured">

    <!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

<h1 class="heading"> <span>پیشنهاد سیتیدل</span> </h1>

<div class="swiper arrivals-slider">

    <div class="swiper-wrapper">

        @foreach($books as $book)
        <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="{{$book-> first_page}}" alt="">
            </div>
            <div class="content">
                <h3>تازه رسیده ها</h3>
                <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </a>
        @endforeach
        
    </div>

</div>


</section>

<!-- arrivals section ends -->

</section>

<!-- featured section ends -->


<!-- footer section starts -->  

@include('footer');

<!-- footer section ends -->

</body>
</html>