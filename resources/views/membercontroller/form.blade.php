@extends('layouts.app')

@section('content')
<div class="page-header">
	<h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2>
</div>


{!! Form::open(array('url'=>'membercontroller?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
<div class="toolbar-nav">
	<div class="row">

		<div class="col-md-6 ">
			<div class="submitted-button">
				<button name="apply" class="tips btn btn-sm   " title="{{ __('core.btn_back') }}"><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
				<button name="save" class="tips btn btn-sm " id="saved-button" title="{{ __('core.btn_back') }}"><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button>
			</div>
		</div>
		<div class="col-md-6 text-right ">
			<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn   btn-sm " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>
		</div>
	</div>
</div>


<div class="p-5">
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	<div class="row">
		<div class="col-md-12">
			<fieldset>
				<legend> Member</legend>

				<div class="form-group row  ">
					<label for="Name" class=" control-label col-md-4 text-left"> Name </label>
					<div class="col-md-6">
						<input type='text' name='name' id='name' value='{{ $row['name'] }}'
							class='form-control form-control-sm ' />
					</div>
					<div class="col-md-2">

					</div>
				</div>
				<div class="form-group row  ">
					<label for="Designation" class=" control-label col-md-4 text-left"> Designation </label>
					<div class="col-md-6">
						<input type='text' name='designation' id='designation' value='{{ $row['designation'] }}'
							class='form-control form-control-sm ' />
					</div>
					<div class="col-md-2">

					</div>
				</div>
				<div class="form-group row  ">
					<label for="Short Description" class=" control-label col-md-4 text-left"> Short Description </label>
					<div class="col-md-6">
						<input type='text' name='short_description' id='short_description' value='{{ $row['short_description'] }}'
							class='form-control form-control-sm ' />
					</div>
					<div class="col-md-2">

					</div>
				</div>
				<div class="form-group row  ">
					<label for="Avater" class=" control-label col-md-4 text-left"> Avater </label>
					<div class="col-md-6">

						<div class="fileUpload btn ">
							<span> <i class="fa fa-camera"></i> </span>
							<div class="title"> Browse File </div>
							<input type="file" name="avater" class="upload" accept="image/x-png,image/gif,image/jpeg" />
						</div>
						<div class="avater-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["avater"],"/uploads/members/") !!}
						</div>

					</div>
					<div class="col-md-2">

					</div>
				</div>
			</fieldset>
		</div>

	</div>

	<input type="hidden" name="action_task" value="save" />

</div>
</div>
{!! Form::close() !!}

<script type="text/javascript">
	$(document).ready(function() {





		$('.removeMultiFiles').on('click', function() {
			var removeUrl = '{{ url("membercontroller/removefiles?file=")}}' + $(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl, function(response) {});
			$(this).parent('div').empty();
			return false;
		});

	});
</script>
@stop