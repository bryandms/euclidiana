@extends('partials.layout')

@section('title', Lang::get('app.learningStyle'))

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>@lang('app.learningStyle')</h3>
        <div class="separator-alt"></div>
        <h5>@lang('app.instructions')</h5>
        <p>@lang('app.stylePage.descr')</p>
        <hr>
        <div class="row">
          <div class="card col-8 mx-auto bg-light">
            <div class="card-body">
              <form id="styleForm">
                @include('/partials/algorithm-selector')
                <div class="form-group">
                  <label for="campus">@lang('app.campus')</label>
                  <select class="form-control" id="campus" name="campus">
                    <option value="Paraiso" selected>Paraíso</option>
                    <option value="Turrialba">Turrialba</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="gender">@lang('app.gender')</label>
                  <select class="form-control" id="gender" name="gender">
                    <option value="F" selected>@lang('app.female')</option>
                    <option value="M">@lang('app.male')</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="average">@lang('app.average')</label>
                  <input type="text" class="form-control" id="average" name="average" placeholder="6.0"/>
                  <small id="error" class="form-text text-danger"></small>
                </div>
                <div class="col-12 d-flex justify-content-center mt-3">
                  <button type="button" onclick="learningStyle();" class="btn btn-dark btn-sm">@lang('app.calculate')</button>
                </div>
              </form>
              <h4 id="result" class="mt-3">
                @lang('app.stylePage.result')
                <span class="badge badge-info text-uppercase"></span>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection