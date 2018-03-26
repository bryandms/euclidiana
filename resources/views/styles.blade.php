@extends('partials.layout')

@section('title', 'Descubre tu estilo de aprendizaje')

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>Estilo de aprendizaje</h3>
        <div class="separator-alt"></div>
        <h5>Instrucciones</h5>
        <p>Debe conceder una calificación alta a aquellas palabras que mejor caracterizan la forma en que usted aprende, y una calificación baja a las palabras que menos caracterizan su estilo de aprendizaje.</p>
        <p>De inmediato encontrará nueve series o líneas de cuatro palabras cada una. Ordene de mayor a menor cada serie o juego de cuatro palabras que hay en cada línea, ubicando 4 en la palabra que mejor caracteriza su estilo de aprendizaje, un 3 en la palabra siguiente en cuanto a la correspondencia con su estilo; a la siguiente un 2, y un 1 a la palabra que menos caracteriza su estilo. Tenga cuidado de ubicar un número distinto al lado de cada palabra en la misma línea. </p>
        <hr>
        <form id="stylesForm" class="row">
          <!-- First Column EC -->
          <div class="col-12 col-md-3">
            <div class="card bg-light">
              <div class="card-body">
                <?php $i = 1; ?>
                @foreach ($ec as $value)
                  @include('partials/form-styles', ['key' => "ec", 'value' => $value, 'i' => $i++ ])
                @endforeach
              </div>
            </div>
          </div>
          <!-- Second Column OR -->
          <div class="col-12 col-md-3">
            <div class="card bg-light">
              <div class="card-body">
                <?php $i = 1; ?>
                @foreach ($or as $value)
                  @include('partials/form-styles', ['key' => "or", 'value' => $value, 'i' => $i++ ])
                @endforeach
              </div>
            </div>
          </div>
          <!-- Third Column CA -->
          <div class="col-12 col-md-3">
            <div class="card bg-light">
              <div class="card-body">
                <?php $i = 1; ?>
                @foreach ($ca as $value)
                  @include('partials/form-styles', ['key' => "ca", 'value' => $value, 'i' => $i++ ])
                @endforeach
              </div>
            </div>
          </div>
          <!-- Fourth Column EA -->
          <div class="col-12 col-md-3">
            <div class="card bg-light">
              <div class="card-body">
                <?php $i = 1; ?>
                @foreach ($ea as $value)
                  @include('partials/form-styles', ['key' => "ea", 'value' => $value, 'i' => $i++ ])
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-center mt-3">
            <button type="button" onclick="learningStyles();" class="btn btn-dark btn-sm">Calcular</button>
          </div>
        </form>
        <h4 id="result" class="mt-3">Tu estilo de aprendizaje es: 
          <span class="badge badge-info text-uppercase"></span>
        </h4>
      </div>
    </div>
  </div>
@endsection