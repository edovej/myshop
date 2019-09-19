@include('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>


</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">{{Cart::content()->count()}}</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart align-center">BAM{{Cart::total()}}</h4>
                            <p class="subtitle">Your choice is the right one.</p>
                            <a href="/cart">
                            <div class="btn btn-small btn--dark">
                                <span class="text">View cart</span>
                            </div>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>
    

</header>


<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Welcome to our web shop site</h4>
                    <p class="heading-text">You can find a very nice t-shirt for you and your friends.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End products grid -->

    <div class="container">
        <div class="row pt120">
            <div class="product-grid">

            <div class="row mb30">

            @foreach($products as $product)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item">
                        <div class="product-item-thumb">
                            <img src="{{asset($product->media)}}" alt="product">
                            <div class="new">New</div>
                            <div class="sale">Sale</div>
                            <div class="overlay overlay-product"></div>
                        </div>

                        <div class="product-item-info">
                        <a href="{{route('product.single', ['id' => $product->id])}}">
                        <h5 class="product-title">{{$product->name}}</h5>
                        </a>
                            

                            <div class="product-price">{{$product->price}}</div>
                        </div>
                        

                        <a href="{{route('cart.rapid.add', ['id' => $product->id])}}" class="btn btn-small btn--dark add">
                            <span class="text">Add to Cart</span>
                            <i class="seoicon-commerce"></i>
                        </a>
                        

                    </div>
                </div>
                @endforeach
            </div>
                 
            <div class="row pb120">

            <div class="col-lg-12"> {{ $products->links() }} </div>
           



                

            </div>
        </div>
        </div>
    </div>
</div>

</html>