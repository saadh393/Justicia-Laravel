@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'publicationmodel?return='.$return, 'class'=>'form-vertical validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm   "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm "  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn   btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
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
	<ul class="nav nav-tabs form-tab"><li class=" nav-item "><a href="#AddNewPublication" data-toggle="tab" class="nav-link active">Add New Publication</a></li>
				</ul><div class="tab-content"><div class="tab-pane m-t active" id="AddNewPublication"> 
									
									  <div class="form-group  " >
										<label for="ipt" class=" control-label "> Image    </label>									
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="Image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="Image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["Image"],"/uploads/publication/") !!}
						</div>
					 						
									  </div> 					
									  <div class="form-group  " >
										<label for="ipt" class=" control-label "> Title    </label>									
										  <input  type='text' name='Title' id='Title' value='{{ $row['Title'] }}' 
						     class='form-control form-control-sm ' /> 						
									  </div> 					
									  <div class="form-group  " >
										<label for="ipt" class=" control-label "> DownloadLink    </label>									
										  <input  type='text' name='DownloadLink' id='DownloadLink' value='{{ $row['DownloadLink'] }}' 
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
				
				
	
		</div>
		
		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("publicationmodel/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop