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
    <h1><center>Liste des apprenants</center></h1>
    <table class="table table-dark table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Telephone</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($apprenants as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nom}}</td>
                <td>{{$item->prenom}}</td>
                <td>{{$item->telephone}}</td>
              </tr>
            @empty
                
            @endforelse
        </tbody>
      </table>
</body>
</html>

