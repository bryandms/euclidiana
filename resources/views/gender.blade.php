@extends('partials.layout')

@section('title', Lang::get('app.gender'))

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>@lang('app.gender')</h3>
        <div class="separator-alt"></div>
        <h5>@lang('app.instructions')</h5>
        <p>@lang('app.genderPage.descr')</p>
        <div class="alert alert-info animated zoomInDown" role="alert">
          <div class="media">
              <i class="fas fa-info-circle fa-3x align-self-center mr-3"></i>
            <div class="media-body">
              <h5 class="mt-0">@lang('app.information.title')</h5>
              <p class="mb-0">
                @lang('app.information.descr')
                <a href="{{ route('styles') }}">@lang('app.information.link')</a>.
              </p>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="card col-8 mx-auto bg-light">
            <div class="card-body">
              <form id="genderForm">
                @include('/partials/algorithm-selector')
                <div class="form-group">
                  <label for="style">@lang('app.learningStyle')</label>
                  <select class="form-control" id="style" name="style">
                    <option value="CONVERGENTE" selected>@lang('app.converging')</option>
                    <option value="DIVERGENTE">@lang('app.diverging')</option>
                    <option value="ACOMODADOR">@lang('app.accommodating')</option>
                    <option value="ASIMILADOR">@lang('app.assimilating')</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="campus">@lang('app.campus')</label>
                  <select class="form-control" id="campus" name="campus">
                    <option value="Paraiso" selected="">Paraíso</option>
                    <option value="Turrialba">Turrialba</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="average">@lang('app.average')</label>
                  <input type="text" class="form-control" id="average" name="average" placeholder="6.0"/>
                  <small id="error" class="form-text text-danger"></small>
                </div>
                <div class="col-12 d-flex justify-content-center mt-3">
                  <button type="button" onclick="getGender();" class="btn btn-dark btn-sm">@lang('app.calculate')</button>
                </div>
              </form>
              <h4 id="result" class="mt-3">@lang('app.genderPage.result')
                <span class="badge badge-info text-uppercase"></span>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection