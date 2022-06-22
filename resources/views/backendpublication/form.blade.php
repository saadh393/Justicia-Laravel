@extends('layouts.app')

@section('content')
    <div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

    {!! Form::open(array('url'=>'backendpublication?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
    <div class="toolbar-nav">
        <div class="row">

            <div class="col-md-6 ">
                <div class="submitted-button">
                    <button name="apply" class="tips btn btn-sm   " title="{{ __('core.btn_back') }}"><i
                                class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
                    <button name="save" class="tips btn btn-sm " id="saved-button" title="{{ __('core.btn_back') }}"><i
                                class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button>
                </div>
            </div>
            <div class="col-md-6 text-right ">
                <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn   btn-sm "
                   title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>
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
                    <legend> Publication</legend>

                    <div class="form-group row invisible">
                        <label for="Id" class=" control-label col-md-4 text-left"> Id </label>
                        <div class="col-md-6">
                            <input type='text' name='id' id='id' value='{{ $row['id'] }}'
                                   class='form-control form-control-sm '/>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="Image" class=" control-label col-md-4 text-left"> Image </label>
                        <div class="col-md-6">

                            <div class="fileUpload btn ">
                                <span>  <i class="fa fa-camera"></i>  </span>
                                <div class="title"> Browse File</div>
                                <input type="file" name="Image" class="upload"
                                       accept="image/x-png,image/gif,image/jpeg"/>
                            </div>
                            <div class="Image-preview preview-upload">
                                {!! SiteHelpers::showUploadedFile( $row["Image"],"/uploads/publication/") !!}
                            </div>

                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="Title" class=" control-label col-md-4 text-left"> Title </label>
                        <div class="col-md-6">
                            <input type='text' name='Title' id='Title' value='{{ $row['Title'] }}'
                                   class='form-control form-control-sm '/>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="Downloadable File" class=" control-label col-md-4 text-left"> Downloadable File
                            <span class="asterix"> * </span></label>
                        <div class="col-md-6">

                            <div class="fileUpload btn ">
                                <span>  <i class="fa fa-copy"></i>  </span>
                                <div class="title"> Browse File</div>
                                <input type="file" name="Link" class="upload"/>
                            </div>
                            <div class="Link-preview preview-upload">
                                {!! SiteHelpers::showUploadedFile( $row["Link"],"/uploads/publication/files/") !!}
                            </div>

                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="form-group row  ">
                        <label for="Date" class=" control-label col-md-4 text-left"> Date </label>
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
                    <div class="form-group row  ">
                        <label for="Slide" class=" control-label col-md-4 text-left"> Slide </label>
                        <div class="col-md-6">
							<?php $slide = explode(",", $row['slide']); ?>

                            <input type='checkbox' name='slide[]' value='1' class=' minimal-green'
                                   @if(in_array('1',$slide))checked @endif
                            /> Show
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </fieldset>
            </div>

        </div>

        <input type="hidden" name="action_task" value="save"/>

    </div>
    </div>
    {!! Form::close() !!}

    <script type="text/javascript">
        $(document).ready(function () {


            $('.removeMultiFiles').on('click', function () {
                var removeUrl = '{{ url("backendpublication/removefiles?file=")}}' + $(this).attr('url');
                $(this).parent().remove();
                $.get(removeUrl, function (response) {
                });
                $(this).parent('div').empty();
                return false;
            });

        });
    </script>
@stop