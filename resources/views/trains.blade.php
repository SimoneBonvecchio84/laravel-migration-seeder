@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                  <h3>Id</h3>  
                </th>
                <th scope="col">
                  <h3>Azienda</h3>  
                </th>
                <th scope="col">
                  <h3>Codice</h3>  
                </th>
                <th scope="col">
                  <h3>Immagine</h3>  
                </th>
                <th scope="col">
                    <h3>Partenza</h3> 
                </th>
                <th scope="col">
                    <h3>Arrivo</h3> 
                </th>
                <th scope="col">
                  <h3>Ora_Partenza</h3>  
                </th>
                <th scope="col">
                   <h3>Ora_Arrivo</h3> 
                </th>
                <th scope="col">
                  <h3>Carrozze</h3>  
                </th>
                <th scope="col">
                   <h3>In_orario</h3> 
                </th>
                <th scope="col">
                   <h3>Cancellato</h3> 
                </th>
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
                        <h5>
                            {{ $treno->azienda }}
                        </h5>
                    </td>
                    <td>
                        <h5>
                            {{ $treno->codice_treno }}
                        </h5>
                    </td>
                    
                    <td>
                        <img class="w-100" src="{{ $treno->immagine_treno }}" alt="{{ $treno->azienda }}">
                    </td>
                    <td>
                        <h5>
                           {{ $treno->stazione_di_partenza }} 
                        </h5>
                    </td>
                    <td>
                        <h5>
                            {{ $treno->stazione_di_arrivo }}
                        </h5>
                    </td>
                    <td>
                        <h5>
                            {{ $treno->orario_di_partenza }}
                        </h5>
                    </td>
                    <td>
                        <h5>
                            {{ $treno->orario_di_arrivo }}
                        </h5>
                    </td>
                    <td>
                        <h5>
                            {{ $treno->numero_carrozze }}
                        </h5>
                    </td>
                    <td>
                        <h4>
                            @if ($treno->in_orario === 1)
                                Non ci sono Ritardi
                            @else
                                Treno in ritardo
                            @endif
                        </h4>
                    </td>
                    <td>
                        <h4>
                            
                            @if ($treno->cancellato === 0)
                                Corsa non cancellata
                            @else
                                Corsa cancellata  
                            @endif
                        </h4>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>
@endsection
