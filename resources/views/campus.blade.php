@extends('partials.layout')

@section('title', 'Recinto del estudiante')

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>Recinto</h3>
        <div class="separator-alt"></div>
        <h5>Instrucciones</h5>
        <p>Se pretende identificar el recinto de origen del estudiante (Paraíso o Turrialba). Para esto debe elegir su estilo de aprendizaje, su último promedio para matrícula y su sexo.</p>
        <div class="alert alert-info animated zoomInDown" role="alert">
          <div class="media">
              <i class="fas fa-info-circle fa-3x align-self-center mr-3"></i>
            <div class="media-body">
              <h5 class="mt-0">Información</h5>
              <p class="mb-0">Si no conoce su estilo de estilo de aprendizaje puede 
                realizar el test <a href="{{ route('styles') }}">aquí</a>.
              </p>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="card col-8 mx-auto bg-light">
            <div class="card-body">
              <form id="campusForm">
                <div class="form-group">
                  <label for="style">Estilo de aprendizaje</label>
                  <select class="form-control" id="style" name="style">
                    <option value="1" selected>Convergente</option>
                    <option value="2">Divergente</option>
                    <option value="3">Acomodador</option>
                    <option value="4">Asimilador</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="average">Promedio para matrícula</label>
                  <input type="text" class="form-control" id="average" name="average" placeholder="6.0"/>
                  <small id="error" class="form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="gender">Sexo</label>
                    <select class="form-control" id="gender" name="gender">
                      <option value="1" selected>Femenino</option>
                      <option value="2">Masculino</option>
                    </select>
                </div>
                <div class="col-12 d-flex justify-content-center mt-3">
                  <button type="button" onclick="campus();" class="btn btn-dark btn-sm">Calcular</button>
                </div>
              </form>
              <h4 id="result" class="mt-3">Tu recinto de origen es: 
                <span class="badge badge-info text-uppercase"></span>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection