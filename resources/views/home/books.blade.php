@extends('layouts.home')
@section('title', 'All Books')
@section('content')
<!-- BEGIN: PAGE CONTAINER -->
<style>
    .c-navbar{
        background: #4c4c4c !important;
    }
    </style>
<div class="c-layout-page">
    <section class="c-layout-revo-slider c-layout-revo-slider-14" dir="ltr" style="height:50px;">
   </section>
    <div class="c-layout-page">
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Books</h3>
                    <h4 class="">All Books</h4>
                </div>
		    </div>
        </div>
		<div class="container">
            <div class="c-layout-sidebar-content ">
                <div class="c-margin-t-20"></div>
                <!-- BEGIN: CONTENT/SHOPS/SHOP-2-7 -->
                <div class="c-bs-grid-small-space">
                    <div class="row">
                        @foreach ($books as $book)
                        <div class="col-xl-3 col-md-3 mb-6" style="padding: 10px;">
                            <div class="card" style="width: 18rem;padding: 15px;">
                                <img class="card-img-top" src="{{$book->image_url}}" alt="Card image cap" style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$book->title}}</h5>
                                    <p class="card-text">{{$book->description}}</p>
                                    <a href="#" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: CONTENT/SHOPS/SHOP-2-7 -->
               
                
                <div class="c-margin-t-20"></div>
                {{ $books->links() }}
                
                <!-- END: PAGE CONTENT -->
            </div>
        </div>
	</div>
</div> <!-- END: CONTENT/CONTACT/CONTACT-1 -->

<!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->

</div>
@endsection


