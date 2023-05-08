@extends("layouts.master")
@section("metadata") "liste des articles"@endsection
@section("content")
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">Articles</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <?php foreach ($articles as $article) { ?>
                            <div class="col-lg-4 col-md-6">
                                <article class="post-grid mb-5 sidebar-widget subscribe">
                                    <a class="post-thumb mb-4 d-block" href="{{url('')}}/article/{{$article->slug()}}">
                                        <img src="{{$article->img}}" alt="{{$article->titre}}" class="img-fluid w-100">
                                    </a>
                                    <h3 class="post-title mt-1 mb-0"><a href="{{url('')}}/article/{{$article->slug()}}" >{{$article->titre}}</a></h3>
                                    <div class="post-content"><p>{{$article->resume}}</p></div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
