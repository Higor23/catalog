@extends('template.template_base')

@section('content')

<section class="section-margin calc-60px">
        <div class="container">
          <div class="section-intro pb-60px">
            @foreach ($category01 as $product)
            <h2>Produtos da Categoria <span class="section-intro__style">{{ $product->category->name }}</span></h2>
          </div>
          <div class="row">
            
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card text-center card-product">

                <div class="card-product__img">
                  @if($product->image01)
                  <img class="card-img" src="{{ url("storage/{$product->image01}") }}" alt="image">
                  @endif
                  <ul class="card-product__imgOverlay">
                    <li><button><i class="ti-search"></i></button></li>
                    <li><button><i class="ti-shopping-cart"></i></button></li>
                    <li><button><i class="ti-heart"></i></button></li>
                  </ul>
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