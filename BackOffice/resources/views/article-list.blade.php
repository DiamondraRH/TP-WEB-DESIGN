@extends("layouts.master")
@section("metadata") "liste des articles"@endsection
@section("content")

<div class="col-12">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-1">
            <nav aria-label="breadcrumb">
                <h3>Articles</h3>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <a href="/article">
                        <button type="button" class="btn btn-outline-primary">Nouvel Article</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="card mb-4">
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titre</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Resume</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Création</th>
                <th class="text-secondary opacity-7"></th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) { ?>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="{{$article->img}}" class="avatar avatar-sm me-3" alt="{{$article->titre}}">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$article->titre}}</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <p class="text-xs font-weight-bold mb-0">{{$article->resume}}</p>
                        </td>
                        <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$article->date_creation}}</span>
                        </td>
                        <td class="align-middle">
                        <a href="/article/{{$article->id_article}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                        </td>
                        <td class="align-middle">
                        <a href="/article/delete/{{$article->id_article}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                        </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
