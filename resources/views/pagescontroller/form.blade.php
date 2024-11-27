@extends('layouts.app')

@section('content')
<div class="page-header">
    <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2>
</div>

{!! Form::open(array('url'=>'pagescontroller?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
                <legend> Pages/Sections</legend>
                {!! Form::hidden('id', $row['id']) !!}
                <div class="form-group row  ">
                    <label for="Page Name" class=" control-label col-md-4 text-left"> Page Name </label>
                    <div class="col-md-6">
                        <input type='text' name='page_name' id='page_name' value='{{ $row['page_name'] }}' readonly
                            class='form-control form-control-sm ' />
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Title" class=" control-label col-md-4 text-left"> Title </label>
                    <div class="col-md-6">
                        <input type='text' name='title' id='title' value='{{ $row['title'] }}'
                            class='form-control form-control-sm ' />
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Description" class=" control-label col-md-4 text-left"> Description </label>
                    <div class="col-md-6">
                        <textarea name='description' rows='5' id='description' class='form-control form-control-sm '>{{ $row['description'] }}</textarea>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="Meta Image" class=" control-label col-md-4 text-left"> Meta Image </label>
                    <div class="col-md-6">

                        <div class="fileUpload btn ">
                            <span> <i class="fa fa-camera"></i> </span>
                            <div class="title"> Browse File </div>
                            <input type="file" name="meta_image" class="upload" accept="image/x-png,image/gif,image/jpeg" />
                        </div>
                        <div class="meta_image-preview preview-upload">
                            {!! SiteHelpers::showUploadedFile( $row["meta_image"],"/uploads/meta/") !!}
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

        const pathName = new URL(window.location.href).pathname;
        const pageName = pathName.split('/').pop();

        if(pageName == 'create') {
            $("#title").on('change', function() {
            var title = $(this).val();
            var slug = title.trim().replace(/\s+/g, '-').toLowerCase();
            $("#page_name").val(slug);
        });
        }

        

        $('.removeMultiFiles').on('click', function() {
            var removeUrl = '{{ url("pagescontroller/removefiles?file=")}}' + $(this).attr('url');
            $(this).parent().remove();
            $.get(removeUrl, function(response) {});
            $(this).parent('div').empty();
            return false;
        });

    });
</script>
@stop