<h2>Lista de Cidade</h2>
<a href="{{ route('cidades.create') }}"><h4>Novo Cliente</h4></a>
<table>
   <thead>
       <tr>
           <th>ID</th>
           <th>NOME</th>
           <th>PORTE</th>
           <th>INFO</th>
           <th>EDITAR</th>
           <th>REMOVER</th>
       </tr>
   </thead>
   <tbody>
       
       @foreach ($cidades as $item)
           <tr>
               
               <td>{{ $item['id'] }}</td>
               <td>{{ $item['nome'] }}</td>
               <td>{{ $item['porte'] }}</td>
               <td><a href="{{ route('cidades.show', $item['id']) }}">info</a></td>
               <td><a href="{{ route('cidades.edit', $item['id']) }}">editar</a></td>
               <td>
                   <form action="{{ route('cidades.destroy', $item['id']) }}" method="POST">
                       <!-- Token de Segurança -->
                       <!-- Define o método de submissão como delete -->
                       @csrf
                       @method('DELETE')
                       <input type='submit' value='remover'>
                   </form>
               </td>
           </tr>
       @endforeach
   </tbody>
</table>