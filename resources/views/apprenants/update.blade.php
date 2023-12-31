<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Modifier Apprenant</title>
</head>

<body>
    <div class="card text-bg-info m-4">
        <div class="card-header mx-auto">
            Modifier Apprenant
        </div>
        <div class="card-body">
            <form action="{{route('update_traitement')}}" class="row g-3" method="post">
                <input type="text" hidden name="id" value="{{$apprenant->id}}">
                @csrf
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nom</label>
                    <input name="nom" type="" class="form-control" value="{{$apprenant->nom}}">

                    <label for="" class="form-label">Prenom</label>
                    <input name="prenom" type="" class="form-control" id="" value="{{$apprenant->prenom}}">

                    <label for="" class="form-label">Matricule</label>
                    <input name="matricule" type="" class="form-control" id="" value="{{$apprenant->matricule}}">

                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Telephone</label>
                    <input name="telephone" type="text" class="form-control" id="" value="{{$apprenant->telephone}}">
                  
                </div>
                <div class="mx-auto col-12 col-sm ">
                    <button type="submit" class="btn btn-primary btn-lg ">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</body>
