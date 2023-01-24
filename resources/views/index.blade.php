@include("home")

<div class='ripple-background'>
  <div class='circle xxlarge shade1'></div>
  <div class='circle xlarge shade2'></div>
  <div class='circle large shade3'></div>
  <div class='circle mediun shade4'></div>
  <div class='circle small shade5'></div>



  <h1 class="mt-3 text-danger text-center">Trains</h1>
<div class="row g-5 p-5">
  @foreach ($trains as $train)
    
  
  <div class="col">
    <div class="py-2 mt-5 card d-flex flex-column justify-center align-items-center">
      <div>ID {{$train->id}}</div>
      <div class="fw-semibold">Azienda: {{$train->company}}</div>
      <div class="fw-semibold">Stazione di partenza: {{$train->departure_station}}</div>
      <div class="fw-semibold">Stazione d'arrivo: {{$train->arrival_station}}</div>
      <div class="fw-semibold">Orario di partenza: {{$train->departure_time}}</div>
      <div class="fw-semibold">Orario di arrivo: {{$train->arrival_time}}</div>
      <div class="fw-semibold">Codice treno: {{$train->train_code}}</div>
      <div class="fw-semibold">Numero di carrozze: {{$train->number_of_carriages}}</div>
      
    </div>
  </div>
  @endforeach
</div>

</div>