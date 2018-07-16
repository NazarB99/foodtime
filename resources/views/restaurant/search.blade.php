@extends('layouts.front')

@section('content')
    <main>
        <div class="main-part">
            <!-- Start Breadcrumb Part -->
            <section class="breadcrumb-part"
                     style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('../../images/restaurants.jpg')  ">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <h2>Рестораны</h2>
                        <a href="/index.php">Домой</a>
                        <span>Список всех ресторанов по результатам поиска</span>
                    </div>
                </div>
            </section>
            <div class="grk1">
            </div>
            <!-- End Breadcrumb Part -->
            <section class="home-icon">
                <div class="container oPadding">
                    <div class="gallery-royal">
                        <div class="galleryportfolio">
                            <div class="portfolioFilter-inner bg-skeen">
                                <a href="javascript:;" data-filter="*" class="current">Все</a>
                                @foreach($categories as $category)
                                    <a href="javascript:;" data-filter=".{{$category->id}}" style="font-family: Ubuntu">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="row gallery-filter">
                            @foreach($restaurants as $restaurant)
                                <div class="col-md-6 col-sm-6 col-xs-12 isotope-item
                                @foreach($restaurant->restaurant_categories as $restaurant_category)
                                {{$restaurant_category->id}}
                                @endforeach">
                                    <div class="gallery-megic-blog">
                                        <a href="{{route('restaurant',['id' => $restaurant->id])}}">
                                            <img src="{{asset($restaurant->img)}}" alt="">
                                            <div class="gallery-megic-inner">
                                                <div class="gallery-megic-out">
                                                    <div class="gallery-megic-detail">
                                                        <h3>{{$restaurant->name}}</h3>
                                                        <span>
                                                            @foreach($restaurant->restaurant_categories as $cat)
                                                                {{$cat->name}}
                                                            @endforeach
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--                    <div class="gallery-pagination">-->
                    <!--                        <div class="gallery-pagination-inner">-->
                    <!--                            <ul>-->
                    <!--                                <li><a href="#" class="pagination-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span>PREV page</span></a></li>-->
                    <!--                                <li class="active"><a href="#"><span>1</span></a></li>-->
                    <!--                                <li><a href="#"><span>2</span></a></li>-->
                    <!--                                <li><a href="#"><span>3</span></a></li>-->
                    <!--                                <li><a href="#" class="pagination-next"><span>next page</span> <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>-->
                    <!--                            </ul>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
            </section>
        </div>
    </main>
@endsection