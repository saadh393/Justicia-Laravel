

		 {!! Form::open(array('url'=>'blogsmodel', 'class'=>'form-vertical','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> blogsmodel</legend>
									
									  <div class="form-group  " >
										<label for="ipt" class=" control-label "> Image    </label>									
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="Image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="Image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["Image"],"/uploads/blog/") !!}
						</div>
					 						
									  </div> 					
									  <div class="form-group  " >
										<label for="ipt" class=" control-label "> Title    </label>									
										  <input  type='text' name='Title' id='Title' value='{{ $row['Title'] }}' 
						     class='form-control form-control-sm ' /> 						
									  </div> 					
									  <div class="form-group  " >
										<label for="ipt" class=" control-label "> Description    </label>									
										  <textarea name='Description' rows='5' id='Description' class='form-control form-control-sm '  
				           >{{ $row['Description'] }}</textarea> 						
									  </div> 					
									  <div class="form-group  " >
										<label for="ipt" class=" control-label "> Link    </label>									
										  <input  type='text' name='Link' id='Link' value='{{ $row['Link'] }}' 
						     class='form-control form-control-sm ' /> 						
									  </div> 					
									  <div class="form-group  " >
										<label for="ipt" class=" control-label "> Date    </label>									
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('Date', $row['Date'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 						
									  </div> 
				</div>
				
				

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
