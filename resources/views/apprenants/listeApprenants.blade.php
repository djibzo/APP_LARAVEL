<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Apprenants</title>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1 class="m-2 p-2">
                  Liste des apprenants
                </h1>
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <table class="table table-dark table-sm table-striped-columns table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $idE = 1;
                        @endphp
                        @forelse ($apprenants as $item)
                            <tr>
                                <th scope="row">{{ $idE }}</th>
                                <td>{{ $item->nom }}</td>
                                <td>{{ $item->prenom }}</td>
                                <td>{{ $item->telephone }}</td>
                                <td>
                                    <a href="/update/{{ $item->id }}" class="btn btn-success ">Modifier</a>
                                    <a href="/delete/{{ $item->id }}" class="btn btn-danger ">Supprimer</a>
                                </td>
                            </tr>
                            @php
                                $idE = $idE + 1;
                            @endphp
                        @empty
                        @endforelse
                    </tbody>

                </table>
                <a href="{{ route('add_new_apprenant') }}" type="button" class="btn btn-primary p-3 center">Ajouter un
                    apprenant</a>
            </div>
        </div>
    </div>

</body>

</html>
