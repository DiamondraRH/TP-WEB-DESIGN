@extends("layouts.master")
@section("metadata") "formulaire pour modifier un nouvel article"@endsection
@section("content")
<script src="../assets/js/ckeditor.js"></script>

<div class="col-md-12">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-1">
            <nav aria-label="breadcrumb">
                <h3>Articles</h3>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <a href="/articles">
                        <button type="button" class="btn btn-outline-primary">Voir la liste</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <br/>

    <div class="card">
        <div class="card-body">
        <form method="post" action="/article/update" >
        @csrf
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" value="{{$article->id_article}}" name="id_article">
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input class="form-control form-control-name" name="titre"
                                type="text" id="titre" value={{$article->titre}} required>
                    </div>

                    <div class="form-group">
                        <label for="resume">Resume</label>
                        <textarea class="form-control form-control-message" name="resume"
                                    rows="7" id="resume" required>{{$article->resume}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="contenu">Contenu</label>
                        <textarea name="contenu" id="contenu" rows="10" cols="80">{{$article->contenu}}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input class="form-control form-control-file" onchange="encodeImageFileAsURL(this)"
                                type="file"  size="50000000"/>
                        <input type="hidden" name="img" id="visuel" value="{{$article->img}}">
                    </div>

                    <div>

                    </div>
                    <button class="btn btn-primary solid blank mt-3" type="submit">Submit</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<script>
    function encodeImageFileAsURL(element) {
        let file = element.files[0];
        let reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById("visuel").value = reader.result;
        }
        reader.readAsDataURL(file);
    }
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#contenu' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
