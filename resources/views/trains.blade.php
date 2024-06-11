@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Azienda</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Immagine</th>
                <th scope="col">Stazione Di Partenza</th>
                <th scope="col">Stazione Di Arrivo</th>
                <th scope="col">Orario Di Partenza</th>
                <th scope="col">Orario Di Arrivo</th>
                <th scope="col">Numero Carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">cancellato</th>
            </tr>
        </thead>
        @foreach ($lista_treni as $treno)
            <tbody>
                <tr>
                    <th scope="row">
                        <h3>
                            {{ $treno->id }}
                        </h3>
                    </th>
                    <td>
                        <h3>
                            {{ $treno->azienda }}
                        </h3>
                    </td>
                    <td>
                        <h3>
                            {{ $treno->codice_treno }}
                        </h3>
                    </td>
                    
                    <td>
                        <img class="w-25" src="{{ $treno->immagine_treno }}" alt="{{ $treno->azienda }}">
                    </td>
                    <td>
                        <h4>
                           {{ $treno->stazione_di_partenza }} 
                        </h4>
                    </td>
                    <td>
                        <h4>
                            {{ $treno->stazione_di_arrivo }}
                        </h4>
                    </td>
                    <td>
                        <h4>
                            {{ $treno->orario_di_partenza }}
                        </h4>
                    </td>
                    <td>
                        <h4>
                            {{ $treno->orario_di_arrivo }}
                        </h4>
                    </td>
                    <td>
                        <h4>
                            {{ $treno->numero_carrozze }}
                        </h4>
                    </td>
                    <td>
                        <h3>
                            
                            @if ($treno->in_orario === 1)
                                Non ci sono Ritardi
                            @else
                                Treno in ritardo
                            @endif
                        </h3>
                    </td>
                    <td>
                        <h3>
                            
                            @if ($treno->cancellato === 0)
                                Corsa non cancellata
                            @else
                                Corsa cancellata  
                            @endif
                        </h3>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>
@endsection
