

<h2> Deseja mesmo excluir a Pessoa '{{$pessoa->nome}} ?'</h2>
<a href="/pessoas">Cancelar</a>
<form action="/pessoas/{{$pessoa->id}}" method="post">
  @method('DELETE')
  @csrf
  <input type="submit" value="Sim, exclua por gentileza">
</form>

