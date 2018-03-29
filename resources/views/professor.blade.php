@extends('partials.layout')

@section('title', Lang::get('app.professorType'))

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>@lang('app.professorType')</h3>
        <div class="separator-alt"></div>
        <h5>@lang('app.instructions')</h5>
        <p>@lang('app.professorPage.descr')</p>
        <hr>
        <div class="row">
          <div class="card col-12 bg-light">
            <div class="card-body">
              <form id="professorForm" class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="A">@lang('app.professorPage.A')</label>
                    <select class="form-control" id="A" name="A">
                      <option value="1" selected>@lang('app.professorPage.a1')</option>
                      <option value="2">@lang('app.professorPage.a2')</option>
                      <option value="3">@lang('app.professorPage.a3')</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="B">@lang('app.professorPage.B')</label>
                    <select class="form-control" id="B" name="B">
                      <option value="1" selected>@lang('app.female')</option>
                      <option value="2">@lang('app.male')</option>
                      <option value="3">N/A</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="C">@lang('app.professorPage.C')</label>
                    <select class="form-control" id="C" name="C">
                      <option value="1" selected>@lang('app.beginner')</option>
                      <option value="2">@lang('app.intermediate')</option>
                      <option value="3">@lang('app.advanced')</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="D">@lang('app.professorPage.D')</label>
                    <select class="form-control" id="D" name="D">
                      <option value="1" selected>@lang('app.never')</option>
                      <option value="2">@lang('app.professorPage.o1')</option>
                      <option value="3">@lang('app.professorPage.o2')</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="E">@lang('app.professorPage.E')</label>
                    <select class="form-control" id="E" name="E">
                      <option value="1" selected>@lang('app.professorPage.dm')</option>
                      <option value="2">@lang('app.professorPage.nd')</option>
                      <option value="3">@lang('app.professorPage.o')</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="F">@lang('app.professorPage.F')</label>
                    <select class="form-control" id="F" name="F">
                      <option value="1" selected>@lang('app.low')</option>
                      <option value="2">@lang('app.averageO')</option>
                      <option value="3">@lang('app.high')</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="G">@lang('app.professorPage.G')</label>
                    <select class="form-control" id="G" name="G">
                      <option value="1" selected>@lang('app.never')</option>
                      <option value="2">@lang('app.sometimes')</option>
                      <option value="3">@lang('app.often')</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="H">@lang('app.professorPage.H')</label>
                    <select class="form-control" id="H" name="H">
                      <option value="1" selected>@lang('app.never')</option>
                      <option value="2">@lang('app.sometimes')</option>
                      <option value="3">@lang('app.often')</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-center mt-3">
                  <button type="button" onclick="professor();" class="btn btn-dark btn-sm">@lang('app.calculate')</button>
                </div>
              </form>
              <h4 id="result" class="mt-3">@lang('app.professorPage.result')
                <span class="badge badge-info text-uppercase"></span>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection