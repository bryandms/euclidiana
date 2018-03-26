@extends('partials.layout')

@section('title', 'Clase de red')

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>Clase de red</h3>
        <div class="separator-alt"></div>
        <h5>Instrucciones</h5>
        <p>Se pretende identificar la clase a la que pertenece una red (A/B). Para esto debe elegir las caracteísticas de la red.</p>
        <hr>
        <div class="row">
          <div class="card col-8 mx-auto bg-light">
            <div class="card-body">
              <form id="networkForm">
                <div class="form-group">
                  <label for="reliability">Confibialidad</label>
                  <select class="form-control" id="reliability" name="reliability">
                    <option value="2" selected>Baja</option>
                    <option value="3">Media</option>
                    <option value="4">Alta</option>
                    <option value="5">Muy alta</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="net_links">Número de enlaces</label>
                  <select class="form-control" id="net_links" name="net_links">
                    <option value="7" selected>7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="capacity">Capacidad</label>
                    <select class="form-control" id="capacity" name="capacity">
                      <option value="1" selected>Baja</option>
                      <option value="2">Media</option>
                      <option value="3">Alta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cost">Costo</label>
                    <select class="form-control" id="cost" name="cost">
                      <option value="1" selected>Bajo</option>
                      <option value="2">Medio</option>
                      <option value="3">Alto</option>
                    </select>
                </div>
                <div class="col-12 d-flex justify-content-center mt-3">
                  <button type="button" onclick="network();" class="btn btn-dark btn-sm">Calcular</button>
                </div>
              </form>
              <h4 id="result" class="mt-3">La clase de la red es: 
                <span class="badge badge-info text-uppercase"></span>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection