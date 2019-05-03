
<!-- Portfolio Section -->
<div id="portfolio">
    <div class="section-title text-center center">
        <div class="overlay">
            <h2>...A jövőt építjük!</h2>
            <hr>
            <p></p>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="categories">
                <ul class="cat">
                    <li>
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">All</a></li>
                            @foreach ($categorys as $category)
                                <li><a href="#" data-filter=".{{$category}}">{{$category}}</a></li>
                            @endforeach

                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>


        <div class="row">
            <div class="portfolio-items">
                @foreach ($images as $image)
                    <div class="col-sm-6 col-md-4 col-lg-4 {{$image['category']}}">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <img src="{{$image['src']}}" class="img-responsive" alt="Project Title" style="width: 360px; height: 270px">
                                {{--<a href="{{$image['src']}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>{{$image['desc']}}</h4>
                                    </div>

                                </a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
