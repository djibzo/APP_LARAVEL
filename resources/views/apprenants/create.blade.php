<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Creation Apprenant</title>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card text-bg-info m-4">
                    <div class="card-header mx-auto">
                        Ajout Apprenant
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store_apprenant') }}" class="row g-3 mx-auto" method="POST">
                            @csrf

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Nom</label>
                                <input name="nom" type="" class="form-control" id="">
                                @if ($errors->has('nom'))
                                    <div class="alert alert-danger mt-2 alert-sm" role="alert">
                                        {{ $errors->first('nom') }}
                                    </div>
                                @endif
                                <label for="" class="form-label">Prenom</label>
                                <input name="prenom" type="" class="form-control" id="">
                                @if ($errors->has('prenom'))
                                    <div class="alert alert-danger mt-2 alert-sm" role="alert">
                                        {{ $errors->first('prenom') }}
                                    </div>
                                @endif
                                <label for="" class="form-label">Matricule</label>
                                <input name="matricule" type="" class="form-control" id="">
                                @if ($errors->has('matricule'))
                                    <div class="alert alert-danger mt-2 alert-sm" role="alert">
                                        {{ $errors->first('matricule') }}
                                    </div>
                                @endif
                                <label for="inputAddress" class="form-label">Telephone</label>
                                <input name="telephone" type="text" class="form-control" id="">
                                @if ($errors->has('telephone'))
                                    <div class="alert alert-danger mt-2 alert-sm" role="alert">
                                        {{ $errors->first('telephone') }}
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary btn-lg mt-3 ">Valider</button>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
</body>
