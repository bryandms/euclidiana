@extends('partials.layout')

@section('title', Lang::get('app.styles'))

@section('content')
  <div class="row">
    <div class="card col-12">
      <div class="card-body">
        <h3>@lang('app.learningStyle')</h3>
        <div class="separator-alt"></div>
        <h5>@lang('app.instructions')</h5>
        <p>@lang('app.stylesPage.descr1')</p>
        <p>@lang('app.stylesPage.descr2')</p>
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
            <button type="button" onclick="learningStyles();" class="btn btn-dark btn-sm">@lang('app.calculate')</button>
          </div>
        </form>
        <h4 id="result" class="mt-3">@lang('app.stylesPage.result')
          <span class="badge badge-info text-uppercase"></span>
        </h4>
      </div>
    </div>
  </div>
@endsection