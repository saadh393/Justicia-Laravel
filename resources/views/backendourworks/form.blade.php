@extends('layouts.app')

@section('content')
<div class="page-header">
	<h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2>
</div>

{!! Form::open(array('url'=>'backendourworks?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
		<div class="col-md-6">
			<fieldset>
				<legend> Basic Info</legend>
				{!! Form::hidden('id', $row['id']) !!}
				<div class="form-group ">
					<label for="Title" class=" control-label col-md-12 text-left"> Title </label>
					<div class="col-md-12">
						<input type='text' name='Title' id='Title' value='{{ $row['Title'] }}' class='form-control form-control-sm w-full' />
					</div>
				</div>

				<div class="form-group ">
					<label for="ShortDescription" class=" control-label col-md-12 text-left"> ShortDescription </label>
					<div class="col-md-12 w-full">
						<textarea name='shortDescription' rows='5' id='shortDescription' class='form-control form-control-sm  w-full'>{{ $row['shortDescription'] }}</textarea>
					</div>
				</div>

				{{-- <div class="form-group ">
					<label for="Link" class=" control-label col-md-4 text-left"> Link </label>
					<div class="col-md-6">
						<input type='text' name='Link' id='Link' value='{{ $row['Link'] }}'
							class='form-control form-control-sm ' />
					</div>
				</div> --}}
				
				<div class="form-group">
					<label for="Image" class=" control-label col-md-4 text-left"> Image </label>
					<div class="w-full">

						<div class="fileUpload btn ">
							<span> <i class="fa fa-camera"></i> </span>
							<div class="title"> Browse File </div>
							<input type="file" name="Image" class="upload" accept="image/x-png,image/gif,image/jpeg" />
						</div>
						<div class="Image-preview preview-upload max-w-full ">
							{!! SiteHelpers::showUploadedFile( $row["Image"],"/uploads/blog/") !!}
						</div>

					</div>
				
				</div>

				<hr/>

				<div class="row">
					<div class="form-group col-md-2">
						<label for="Slide" class=" control-label col-md-4 text-left"> Slide </label>
						<div class="">
							<?php $slide = explode(",", $row['slide']); ?>

							<input type='checkbox' name='slide[]' value='1' class=' minimal-green' @if(in_array('1',$slide))checked @endif /> Show
						</div>
						
					</div>
					<div class="form-group col-md-5">
						<label for="Date" class=" control-label  text-left"> Date </label>
						<div class="">

							<div class="input-group input-group-sm m-b" style="width:150px !important;">
								{!! Form::text('Date', $row['Date'],array('class'=>'form-control form-control-sm date')) !!}
								<div class="input-group-append">
									<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group col-md-5">
						<div class="">
							<label for="Category" class=" control-label col-md-4 text-left"> Category </label>

							<?php $Category = explode(',', $row['Category']);
							$Category_opt = array('capacity_building' => 'Capacity Building',  'research' => 'Research',  'meeting' => 'Meeting',); ?>
							<select name='Category' rows='5' class='select2 '>
								<?php
								foreach ($Category_opt as $key => $val) {
									echo "<option  value ='$key' " . ($row['Category'] == $key ? " selected='selected' " : '') . ">$val</option>";
								}
								?></select>
						</div>
						
					</div>					
				</div>
			</fieldset>
		</div>
		
		<div class="col-md-6">
			<fieldset style="height: 100%">
				<legend> Advanced Info</legend>

				
				<div class="form-group " >
					<label for="Description" class=" control-label col-md-4 text-left" style="font-weight: bold; padding-left: 0; padding-bottom: 5px; height: 100%"> Description </label>
					<div class="w-full" style="height: 100%">
						<textarea name='description' rows='5' id='editor' class='form-control form-control-sm editor ' style="height: 100%">{{ $row['description'] }}</textarea>
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
			var removeUrl = '{{ url("backendourworks/removefiles?file=")}}' + $(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl, function(response) {});
			$(this).parent('div').empty();
			return false;
		});

	});
</script>
@stop