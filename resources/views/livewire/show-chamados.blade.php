
@foreach($chamados as $chamado)
    {{ $chamado->vendedor->nome }}
@endforeach