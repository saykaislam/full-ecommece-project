@extends('frontend.layouts.master')
@section('title','All Categories')
@section('content')
    <!-- breadcrumb -->
    <div class="full-row py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="mb-2">Categories List</h3>
                </div>

            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <div class="full-row pt-0 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="products-header d-flex justify-content-between align-items-center py-10 px-20 bg-light md-mt-30">
                    </div>
                    <div class="showing-products pt-30 pb-50 border-2 border-bottom border-light ">
                        <div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 e-hover-image-zoom e-image-bg-light e-btn-set-two cart-slide-up g-4">
                           @foreach(categories() as $category)
                            <div class="col">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="{{route('category.products',$category->slug)}}" class="woocommerce-LoopProduct-link"><img class="lazyload" src="{{ asset('frontend/assets/images/placeholder.jpg') }}" data-src="{{asset('uploads/categories/'.$category->icon)}}" alt="Product Image"></a>
                                        </div>
                                        <div class="product-info text-center">
                                            <h3 class="product-title "><a href="{{route('category.products',$category->slug)}}">{{$category->name}} <span>({{ category_product_count($category->id) }})</span> </a></h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-3">
                        <div class="showing-result">Showing 1 – 28 of 23945 results</div>
                        <div class="pagination-style-one">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
