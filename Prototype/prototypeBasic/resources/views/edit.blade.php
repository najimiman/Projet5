<form action="{{route('crud.update',$tachee->id)}}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="nom_tache" value="{{$tachee->nom_tache}}">
<button type="submit">Modifier</button>
</form>