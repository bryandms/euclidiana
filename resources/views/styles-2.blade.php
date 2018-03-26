@extends('partials.layout')

@section('title', 'Estilo de aprendizaje del estudiante')

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>Estilo de aprendizaje</h3>
        <div class="separator-alt"></div>
        <h5>Instrucciones</h5>
        <p>Se pretende identificar el estilo de aprendizaje del estudiante. Para esto debe elegir su recinto de origen, sexo y promedio de matrícula.</p>
        <hr>
        <div class="row">
          <div class="card col-8 mx-auto bg-light">
            <div class="card-body">
              <form id="styleForm">
                <div class="form-group">
                  <label for="campus">Recinto</label>
                  <select class="form-control" id="campus" name="campus">
                    <option value="paraiso" selected>Paraíso</option>
                    <option value="turrialba">Turrialba</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="gender">Sexo</label>
                  <select class="form-control" id="gender" name="gender">
                    <option value="femenino" selected>Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="average">Promedio para matrícula</label>
                  <input type="text" class="form-control" id="average" name="average" placeholder="6.0"/>
                  <small id="error" class="form-text text-danger"></small>
                </div>
                <div class="col-12 d-flex justify-content-center mt-3">
                  <button type="button" onclick="learningStyle();" class="btn btn-dark btn-sm">Calcular</button>
                </div>
              </form>
              <h4 id="result" class="mt-3">Tu estilo de aprendizaje es: 
                <span class="badge badge-info text-uppercase"></span>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection