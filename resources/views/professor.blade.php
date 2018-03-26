@extends('partials.layout')

@section('title', 'Tipo de profesor')

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>Tipo de profesor</h3>
        <div class="separator-alt"></div>
        <h5>Instrucciones</h5>
        <p>Se pretende identificar el tipo o nivel del profesor (principiante, intermedio, avanzado). Para esto debe elegir las características que coincidan con el profesor.</p>
        <hr>
        <div class="row">
          <div class="card col-12 bg-light">
            <div class="card-body">
              <form id="professorForm" class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="A">Edad</label>
                    <select class="form-control" id="A" name="A">
                      <option value="1" selected>Menor o igual a 30 años</option>
                      <option value="2">Entre 31 a 55 años</option>
                      <option value="3">Mayor o igual a 56 años</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="B">Sexo</label>
                    <select class="form-control" id="B" name="B">
                      <option value="f" selected>Femenino</option>
                      <option value="m">Masculino</option>
                      <option value="na">N/A</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="C">Evaluación propia como profesor</label>
                    <select class="form-control" id="C" name="C">
                      <option value="b" selected>Principiante</option>
                      <option value="i">Intermedio</option>
                      <option value="a">Avanzado</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="D">Cantidad de veces impartiendo el curso</label>
                    <select class="form-control" id="D" name="D">
                      <option value="1" selected>Nunca</option>
                      <option value="2">1 a 5 veces</option>
                      <option value="3">Más de 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="E">Disciplina</label>
                    <select class="form-control" id="E" name="E">
                      <option value="dm" selected>Toma de decisiones</option>
                      <option value="nd">Diseñador de redes</option>
                      <option value="o">Otro</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="F">Habilidad usando computadoras</label>
                    <select class="form-control" id="F" name="F">
                      <option value="l" selected>Bajas</option>
                      <option value="a">Promedias</option>
                      <option value="h">Altas</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="G">Experiencia con tecnologías web para la enseñanza</label>
                    <select class="form-control" id="G" name="G">
                      <option value="n" selected>Nunca</option>
                      <option value="s">Aveces</option>
                      <option value="o">A menudo</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="H">Frecuencia utilizando sitios web</label>
                    <select class="form-control" id="H" name="H">
                      <option value="n" selected>Nunca</option>
                      <option value="s">Aveces</option>
                      <option value="o">A menudo</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-center mt-3">
                  <button type="button" onclick="professor();" class="btn btn-dark btn-sm">Calcular</button>
                </div>
              </form>
              <h4 id="result" class="mt-3">El tipo de profesor es: 
                <span class="badge badge-info text-uppercase"></span>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection