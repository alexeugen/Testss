@extends('master')

@section('content')

    <div class="container admin-container">
        <div class="row">
            <div class="col-md-6">
                    <div class="container-fluid">
                <div class="jumbotron">
                    <h1 class="display-4">Notificare generala</h1>
                    <p class="lead">Trimite notificare catre toti utilizatorii.</p>
                    <hr class="my-4">
                    
                        <form method="POST" action="{{ route('sendAnnualCheck') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titlu</label>
                                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Introduceti titlul">
                                <small id="titleHelp" class="form-text text-muted">Alegeti un titlu clar si relevant</small>
                            </div>
                            <div class="form-group">
                                <label for="content">Continut</label>
                                <input type="text" class="form-control" id="content" name="content" placeholder="Introduceti continutul">
                            </div>
                            <div class="form-group">
                                <label for="type">Tip</label>
                                <input type="number" class="form-control" id="type" name="type" placeholder="1 2 sau 3">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Trimite</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="container-fluid">
                <div class="jumbotron">
                    <h1 class="display-4">Notificare catre parinti</h1>
                    <p class="lead">Trimite notificare catre toti parintii.</p>
                    <hr class="my-4">
                        <form method="POST" action="{{ route('sendToParents') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titlu</label>
                                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Introduceti titlul">
                                <small id="titleHelp" class="form-text text-muted">Alegeti un titlu clar si relevant</small>
                            </div>
                            <div class="form-group">
                                <label for="content">Continut</label>
                                <input type="text" class="form-control" id="content" name="content" placeholder="Introduceti continutul">
                            </div>
                            <div class="form-group">
                                <label for="minage">Varsta minima copil</label>
                                <input type="number" class="form-control" id="minage" name="minage" placeholder="Varsta minima a copiilor">
                            </div>
                            <div class="form-group">
                                <label for="maxage">Varsta maxima copil</label>
                                <input type="number" class="form-control" id="maxage" name="maxage" placeholder="Varsta maxima a copiilor">
                            </div>
                            <div class="form-group">
                                <label for="type">Tip</label>
                                <input type="number" class="form-control" id="type" name="type" placeholder="1 2 sau 3">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Trimite</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 
    
    </div>


@endsection
