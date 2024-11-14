{!! Form::open(array('url'=>'membercontroller', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

@if(Session::has('messagetext'))

{!! Session::get('messagetext') !!}

@endif
<ul class="parsley-error-list">
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>


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

<div style="clear:both"></div>


<div class="form-group">
	<label class="col-sm-4 text-right">&nbsp;</label>
	<div class="col-sm-8">
		<button type="submit" name="apply" class="btn btn-default btn-sm"><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
		<button type="submit" name="submit" class="btn btn-default btn-sm"><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
	</div>

</div>
<input type="hidden" name="action_task" value="public" />
{!! Form::close() !!}

<script type="text/javascript">
	$(document).ready(function() {



		$('.removeCurrentFiles').on('click', function() {
			var removeUrl = $(this).attr('href');
			$.get(removeUrl, function(response) {});
			$(this).parent('div').empty();
			return false;
		});

	});
</script>