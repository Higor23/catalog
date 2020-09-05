@extends('template.template_base')

@section('content')

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="carrossel">
                    <div id="carouselSite" data-interval="3000" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselSite" data-slide-to="1"></li>
                            <li data-target="#carouselSite" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ url("storage/{$product->image01}") }}" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url("storage/{$product->image02}") }}" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url("storage/{$product->image03}") }}" class="img-fluid">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{ $product->name }}</h3>
                    <h2>{{ $product->price }}</h2>
                    <ul class="list">
                        @foreach($categories as $category)
                        <li><span>Categoria: </span> {{ $category->name }}</li>
                        @endforeach
                        @foreach($subcategories as $subcategory)
                        <li>Sub-categoria: </span>{{ $subcategory->name }}</li>
                        @endforeach
                        <br>
                        <li>
                            <h6>Descrição</h6>
                        </li>
                        <p>{{ $product->description }}</p>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<!--================ Relationships =================-->
<section class="related-product-area section-margin--small mt-0">
    <div class="container">
        <div class="section-intro pb-60px">
            <h2>Produtos <span class="section-intro__style">Relacionados</span></h2>
        </div>


        @foreach ($category01 as $product)

        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">

                <div class="card-product__img">
                    @if($product->image01)
                    <a href="{{ route('detail.product', [$product->url , $product->category->id]) }}"><img class="card-img" src="{{ url("storage/{$product->image01}") }}" alt="image">
                    @endif
                </div>

                <div class="card-body">
                    <p>{{ $product->category->name }}</p>
                    <h4 class="card-product__title"><a href="single-product.html">{{ $product->name }}</a></h4>
                    <p class="card-product__price">{{ $product->price }}</p>
                </div>

            </div>
        </div>
        @endforeach
    </div>
    
    <div class="card-footer">
        @if (isset($filters))
        {!! $products->appends($filters)->links() !!}
        @else
        {!! $products->links() !!}
        @endif

    </div>
    </div>

</section>

@stop