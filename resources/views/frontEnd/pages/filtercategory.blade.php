@extends('template.template_base')

@section('content')

<section class="section-margin calc-60px">
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting">
              <select>
              <option > <a href="{{ route('products.all') }}">Personalizados</option></a>
                <option value="1">Default sorting</option>
                <option value="1">Default sorting</option>
              </select>
            </div>
            <div class="sorting mr-auto">
              <select>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
              </select>
            </div>
            <div>
              <div class="input-group filter-bar-search">
                <input type="text" placeholder="Search">
                <div class="input-group-append">
                  <button type="button"><i class="ti-search"></i></button>
                </div>
              </div>
            </div>
          </div>
                    <!-- End Filter Bar -->
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