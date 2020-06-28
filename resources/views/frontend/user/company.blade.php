@extends('frontend.layouts.app')

@section ('title', trans('labels.backend.companies.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.companies.management') }}</h1>
@endsection

@section('content')

<div class="row">

	 <form action="/companyapps{id}" method="post">
        {{csrf_field()}}
	<div class="col-md-5 col-md-offset-4">
		<div class="form-group">
			<label>Select Company to Proceed</label>
			<select name="country_id" class="form-control box-size" required>
            
             @if (count($companyapps) > 0)
                        @foreach ($companyapps as $companyapps)
                          <option value="{{ $companyapps->id}}">{{ $companyapps->app_name}}</option>
                           @endforeach
                     @endif
          </select>
           
		</div>
	</div>
	<div class="col-md-5 col-md-offset-4">
		<div class="form-group">
			<button type="submit" class="btn btn-block btn-primary">Proceed</button>
		</div>
	</div>
	 </form>
</div>
@endsection
