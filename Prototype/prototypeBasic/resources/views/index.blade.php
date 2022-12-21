<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('crud.store')}}" method="POST">
        @csrf
        <input type="text" name="nom_tache">
        <button type="submit">Ajouter</button>
    </form>
    <table>
       @foreach($mytache as $value)
       <tr>
        <td>{{$value->nom_tache}}</td>
        <td>
            <form action="{{route('crud.destroy',$value->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Supprimer</button>
            </form>
        </td>
        <td><a href="{{route('mytacheupdateT',$value->id)}}">Modifier</a></td>
       </tr>
        
       @endforeach
    </table>
</body>
</html>