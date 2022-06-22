<h2>Alterar Cidade</h2>
<form action="{{ route('cidade.update', $dados['id']) }}" method="POST">
   <!-- Token de Segurança -->
   <!-- Define o método de submissão como PUT -->
   @csrf
   @method('PUT')
   <a href="{{route('clientes.index')}}"><h4>voltar</h4></a>
   <label>Nome: </label> <input type='text' name='nome' value='{{$dados['nome']}}'>
   <label>Porte: </label> <input type='text' name='email' value='{{$dados['porte']}}'>
   <input type="submit" value="Salvar">
</form>