@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('backendourworks/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('backendourworks?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('backendourworks/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('backendourworks/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="p-5">		

	<div class="table-responsive">
		<table class="table table-striped table-bordered " >
			<tbody>

			<tr>
				<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
				<td>{{ $row->id}} </td>

			</tr>

			<tr>
				<td width='30%' class='label-view text-right' >{{ SiteHelpers::activeLang('Image', (isset($fields['Image']['language'])? $fields['Image']['language'] : array())) }}</td>
				<td style="height:250px">{!! SiteHelpers::formatRows($row->Image,$fields['Image'],$row ) !!} </td>

			</tr>

			<tr>
				<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Title', (isset($fields['Title']['language'])? $fields['Title']['language'] : array())) }}</td>
				<td>{{ $row->Title}} </td>

			</tr>

			<tr>
				<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Short Description', (isset($fields['Link']['language'])? $fields['Link']['language'] : array())) }}</td>
				<td>{{ $row->shortDescription}} </td>

			</tr>

			<tr>
				<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date', (isset($fields['Date']['language'])? $fields['Date']['language'] : array())) }}</td>
				<td>{{ $row->Date}} </td>

			</tr>

			<tr>
				<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Slide', (isset($fields['slide']['language'])? $fields['slide']['language'] : array())) }}</td>
				<td>{{ $row->slide}} </td>

			</tr>

			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
