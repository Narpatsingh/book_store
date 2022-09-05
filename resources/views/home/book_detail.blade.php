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
                    <h3 class="c-font-uppercase c-font-sbold"><a href="{{route('frontend')}}">Books</a></h3>
                    <h4 class="">Books Details</h4>
                </div>
                <div class="row mb-3 justify-content-end">
                    <a href="{{route('frontend')}}" class="btn btn-primary filter_books">Back</a>
                </div>
            </div>
        </div>
		<div class="container">
            <div class="c-layout-sidebar-content ">
                <div class="c-margin-t-20"></div>
                <div class="c-bs-grid-small-space">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-6">
                        <img class="card-img-top" src="{{$book->image_url}}" alt="Card image cap" style="height: 400px;">
                        </div>
                        <div class="col-xl-8 col-md-8 mb-6">
                            <div class="card-body">
                                <h5 class="card-title"><b>Title :</b> {{$book->title}}</h5>
                                <p class="card-text"><b>Description :</b> {{ $book->description }}</p>
                                <p class="card-text"><b>Author :</b> {{ $book->author->first_name.' '.$book->author->middle_name.' '.$book->author->last_name }}</p>
                                <p class="card-text"><b>ISBN :</b> {{ $book->isbn }}</p>
                                <p class="card-text"><b>Totle Page :</b> {{ $book->total_pages }}</p>
                                <p class="card-text"><b>Published Date :</b> {{ $book->published_date }}</p>
                            </div>
                        </div>  
                    </div>
                </div>
                
                <div class="c-margin-t-20"></div>
                <!-- END: PAGE CONTENT -->
            </div>
        </div>
	</div>
</div> <!-- END: CONTENT/CONTACT/CONTACT-1 -->

<!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->

</div>
@endsection


@section('scripts')
<script>

$(".filter_books").click(function(){
  var search = $("#searchByAppliedJob").val();
  window.location = window.location.origin+'?search='+search
});
</script>
@endsection