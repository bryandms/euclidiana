@extends('partials.layout')

@section('title', Lang::get('app.home.title'))

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>Euclidiana<small class="text-muted"> @lang('app.home.description')</small></h3>
        <div class="separator-alt"></div>
        <div class="row">
          <!-- Learning styles -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0">
                  <i class="fas fa-book fa-2x mb-2"></i><br>@lang('app.styles')
                </h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">@lang('app.stylesDescr')</h6>
              </div>
            </div>
          </div>
          <!-- Campus -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0">
                  <i class="fas fa-building fa-2x mb-2"></i><br>@lang('app.campus')
                </h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">@lang('app.campusDescr')</h6>
              </div>
            </div>
          </div>
          <!-- Gender -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0">
                  <i class="fas fa-transgender fa-2x mb-2"></i><br>@lang('app.gender')
                </h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">@lang('app.genderDescr')</h6>
              </div>
            </div>
          </div>
          <!-- Learning Style -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0">
                  <i class="fas fa-graduation-cap fa-2x mb-2"></i><br>@lang('app.learningStyle')
                </h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">@lang('app.learningStyleDescr')</h6>
              </div>
            </div>
          </div>
          <!-- Professor's type -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0">
                  <i class="fas fa-user fa-2x mb-2"></i><br>@lang('app.professorType')
                </h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">@lang('app.professorTypeDescr')</h6>
              </div>
            </div>
          </div>
          <!-- Network -->
          <div class="col-12 col-md-4 my-2">
            <div class="card text-center bg-light">
              <div class="card-body">
                <h5 class="card-title mb-0">
                  <i class="fas fa-cloud fa-2x mb-2"></i><br>@lang('app.networkClass')
                </h5>
                <div class="separator"></div>
                <h6 class="card-subtitle my-2 text-muted">@lang('app.networkClassDescr')</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection