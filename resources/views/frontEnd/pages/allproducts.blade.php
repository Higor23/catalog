@extends('template.template_base')

@section('content')

<section class="section-margin calc-60px">
        <div class="container">
          <div class="section-intro pb-60px">
            <h2>Todos os <span class="section-intro__style">Produtos</span></h2>
          </div>
          <div class="row">
            @foreach ($products as $product)
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

@endsection