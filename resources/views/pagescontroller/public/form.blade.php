

		 {!! Form::open(array('url'=>'pagescontroller', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Pages/Sections</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Page Name" class=" control-label col-md-4 text-left"> Page Name </label>
										<div class="col-md-6">
										  <input  type='text' name='page_name' id='page_name' value='{{ $row['page_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title </label>
										<div class="col-md-6">
										  <input  type='text' name='title' id='title' value='{{ $row['title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Description" class=" control-label col-md-4 text-left"> Description </label>
										<div class="col-md-6">
										  <textarea name='description' rows='5' id='description' class='form-control form-control-sm '  
				           >{{ $row['description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Meta Image" class=" control-label col-md-4 text-left"> Meta Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="meta_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="meta_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["meta_image"],"/uploads/meta/") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
