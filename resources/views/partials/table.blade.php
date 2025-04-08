<section>
  <div class="container border border-dark border-3 text-white mt-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Codice Treno</th>
          <th scope="col">Partenza</th>
          <th scope="col">Arrivo</th>
          <th scope="col">Stazione di Partenza</th>
          <th scope="col">Stazione di arrivo</th>
          <th scope="col">Ritardo</th>
          <th scope="col">Cancellato</th>
          <th scope="col">Carrozze</th>
          <th scope="col">Azienda</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($trains as $train)
        <tr>
          <th scope="row">{{$train['code_train']}}</th>
          <td>{{$train['arrive_train']}}</td>
          <td>{{$train['departure_train']}}</td>
          <td>{{$train['arrive_station']}}</td>
          <td>{{$train['departure_station']}}</td>

          @if ($train['train_on_time'] && $train['canceled_trein']){
            <td> - </td>
          }@elseif($train['train_on_time']){
            <td> Orario </td>
          }@else{
            <td> In ritardo </td>
          }   
          @endif

          @if ($train['canceled_trein']){
            <td>Cancellato</td>
          }@else{
            <td>Non cancellato</td>
          }    
          @endif

          <td>{{$train['number_carriages']}}</td>
          <td>{{$train['agency']}}</td>
        </tr>
            
        @endforeach
      </tbody>

    </table>
  </div>
</section>