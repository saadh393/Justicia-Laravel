{!! Form::open(array('url'=>'backendourworks', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

@if(Session::has('messagetext'))

{!! Session::get('messagetext') !!}

@endif
<ul class="parsley-error-list">
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>


<div class="col-md-6">
	<fieldset>
		<legend> Basic Info</legend>
		{!! Form::hidden('id', $row['id']) !!}
		<div class="form-group row">
			<label for="Title" class="control-label col-md-4 text-left">Title</label>
		</div>
		<div class="form-group row">
			<div class="col-md-6">
				<input type='text' name='Title' id='Title' value='{{ $row['Title'] }}' class='form-control form-control-sm' />
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<div class="form-group row">
			<label for="ShortDescription" class="control-label col-md-4 text-left">ShortDescription</label>
		</div>
		<div class="form-group row">
			<div class="col-md-6">
				<textarea name='shortDescription' rows='5' id='shortDescription' class='form-control form-control-sm'>{{ $row['shortDescription'] }}</textarea>
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<div class="form-group row">
			<label for="Link" class="control-label col-md-4 text-left">Link</label>
		</div>
		<div class="form-group row">
			<div class="col-md-6">
				<input type='text' name='Link' id='Link' value='{{ $row['Link'] }}' class='form-control form-control-sm' />
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<div class="form-group row">
			<label for="Slide" class="control-label col-md-4 text-left">Slide</label>
		</div>
		<div class="form-group row">
			<div class="col-md-6">
				<?php $slide = explode(",", $row['slide']); ?>
				<input type='checkbox' name='slide[]' value='1' class=' minimal-green' @if(in_array('1',$slide))checked @endif /> Show
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<div class="form-group row">
			<label for="Date" class="control-label col-md-4 text-left">Date</label>
		</div>
		<div class="form-group row">
			<div class="col-md-6">
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('Date', $row['Date'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
						<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<div class="form-group row">
			<label for="Category" class="control-label col-md-4 text-left">Category</label>
		</div>
		<div class="form-group row">
			<div class="col-md-6">
				<?php $Category = explode(',', $row['Category']);
				$Category_opt = array('capacity_building' => 'Capacity Building', 'research' => 'Research', 'meeting' => 'Meeting',); ?>
				<select name='Category' rows='5' class='select2 '>
					<?php
					foreach ($Category_opt as $key => $val) {
						echo "<option  value ='$key' " . ($row['Category'] == $key ? " selected='selected' " : '') . ">$val</option>";
					}
					?>
				</select>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</fieldset>
</div>

<div class="col-md-6">
	<fieldset>
		<legend> Advanced Info</legend>

		<div class="form-group row  ">
			<label for="Image" class=" control-label col-md-4 text-left"> Image </label>
			<div class="col-md-6">

				<div class="fileUpload btn ">
					<span> <i class="fa fa-camera"></i> </span>
					<div class="title"> Browse File </div>
					<input type="file" name="Image" class="upload" accept="image/x-png,image/gif,image/jpeg" />
				</div>
				<div class="Image-preview preview-upload">
					{!! SiteHelpers::showUploadedFile( $row["Image"],"/uploads/blog/") !!}
				</div>

			</div>
			<div class="col-md-2">

			</div>
		</div>
		<div class="form-group row  ">
			<label for="Description" class=" control-label col-md-4 text-left"> Description </label>
			<div class="col-md-6">
				<textarea name='description' rows='5' id='editor' class='form-control form-control-sm editor '>{{ $row['description'] }}</textarea>
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