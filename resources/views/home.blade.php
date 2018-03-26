@extends('partials.layout')

@section('title', 'Inicio')

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>Euclidiana<small class="text-muted"> Descubre lo que puede hacer Euclidiana por ti</small></h3>
        <div class="separator-alt"></div>
        <div class="row">
          <!-- Learning styles -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0"><i class="fas fa-book fa-2x mb-2"></i><br>Estilos de aprendizaje</h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">Descubre tu estilo de aprendizaje con el cálculo de distancia de euclideana</h6>
              </div>
            </div>
          </div>
          <!-- Enclosure -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0"><i class="fas fa-building fa-2x mb-2"></i><br>Recinto</h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">Identificar tu recinto de la UCR basado en tu información de estudiante</h6>
              </div>
            </div>
          </div>
          <!-- Gender -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0"><i class="fas fa-transgender fa-2x mb-2"></i><br>Sexo</h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">Identificar tu sexo basado en tu información de estudiante</h6>
              </div>
            </div>
          </div>
          <!-- Gender -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0"><i class="fas fa-graduation-cap fa-2x mb-2"></i><br>Estilo de aprendizaje</h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">Identificar tu estilo de aprendizaje basado en tu información de estudiante</h6>
              </div>
            </div>
          </div>
          <!-- Teacher's type -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0"><i class="fas fa-user fa-2x mb-2"></i><br>Tipo de profesor</h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">Identificar el tipo de un profesor basado en la información del profesor</h6>
              </div>
            </div>
          </div>
          <!-- Network -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0"><i class="fas fa-cloud fa-2x mb-2"></i><br>Clase de red</h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">Identificar la clase de una red (A/B) según algunas características de la misma</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection