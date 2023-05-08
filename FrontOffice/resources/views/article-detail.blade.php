@extends("layouts.master")
@section("title") {{ "- ".$article->titre}} @endsection
@section("metadata") {{ $article->titre." ".$article->resume}} @endsection
@section("content")
<section class="single-block-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="single-post">
                    <div class="post-header mb-5 text-center">
                        <h1 class="post-title mt-2">
                            {{$article->titre}}
                        </h1>
                        <div class="post-featured-image mt-3">
                            <strong>{{$article->resume}}</strong>
                        </div>
                        <div class="post-featured-image mt-5">
                            <img src="{{$article->img}}" class="img-fluid w-50" alt="{{$article->titre}}">
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="entry-content">
                            {!!$article->contenu!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
