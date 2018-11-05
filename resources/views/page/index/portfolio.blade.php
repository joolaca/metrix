
<!-- Portfolio Section -->
<div id="portfolio">
    <div class="section-title text-center center">
        <div class="overlay">
            <h2>Gallery</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
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
                    <div class="col-sm-6 col-md-4 col-lg-4 {{$categorys[rand ( 0 , 2)]}}">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="{{$image}}" title="Dish Name" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Dish Name</h4>
                                </div>
                                <img src="{{$image}}" class="img-responsive" alt="Project Title" style="width: 360px; height: 270px"> </a> </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
