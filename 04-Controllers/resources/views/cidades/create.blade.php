<h2>Cadastrar Cidade</h2>
<form action="{{ route('cidade.store') }}" method="POST">
   <!-- Token de segurança salvo na sessão, verificar o formulário submetido -->
   @csrf
   <a href="{{route('cidade.index')}}"><h4>voltar</h4></a>
   <label>Nome: </label> <input type='text' name='nome'>
   <label>Porte: </label> <input type='text' name='porte'>
   <input type="submit" value="Salvar">
</form>