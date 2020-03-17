@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Design</strong>
        <h6 class="mb-0">
        <a class="text-dark" href="#">{{$product->title}}</a>
        </h6>
        <div class="mb-1 text-muted"> {{ $product->created_at->format('d/m/Y') }} </div>
        <p class="card-text mb-auto"> {{ $product->description }} </p>
        <strong class="card-text mb-auto"> {{ $product->getPrice() }} </strong>
        <form action="#" method="POST">
            <button type="submit" class="btn btn-dark">Ajouter au panier</button>
        </form>
      </div>
      <img class="card-img-right flex-auto d-none d-md-block" src=" {{ $product->image }} " alt="Card image cap">
    </div>
  </div>
</div>
@endsection
