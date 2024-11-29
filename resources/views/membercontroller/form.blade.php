@extends('layouts.app')

<style>
	.expertise-container {
		max-width: 100%;
	}

	.expertise-chips-container {
		display: flex;
		flex-wrap: wrap;
		gap: 8px;
		margin-bottom: 10px;
	}

	.expertise-chip {
		display: inline-flex;
		align-items: center;
		padding: 4px 8px;
		border-radius: 16px;
		font-size: 0.875rem;
		font-weight: 500;
	}

	.expertise-chip-text {
		margin-right: 8px;
	}

	.expertise-chip-remove {
		background: none;
		border: none;
		cursor: pointer;
		font-size: 1.2rem;
		line-height: 1;
		padding: 0;
		margin-left: 4px;
	}

	.expertise-chip-remove:hover {
		color: red;
	}

	.expertise-chip-blue {
		background-color: #e6f2ff;
		color: #1e40af;
	}

	.expertise-chip-green {
		background-color: #f0fdf4;
		color: #166534;
	}

	.expertise-chip-purple {
		background-color: #f3e8ff;
		color: #6b21a8;
	}

	.expertise-chip-pink {
		background-color: #fdf2f8;
		color: #9d174d;
	}

	.expertise-chip-orange {
		background-color: #fff7ed;
		color: #9a3412;
	}

	.expertise-chip-teal {
		background-color: #f0fdfa;
		color: #115e59;
	}

	.expertise-input {
		width: 100%;
		padding: 6px 12px;
		font-size: 0.875rem;
	}
</style>

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
					<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
					<div class="col-md-6">
						<input type='text' name='id' id='id' value="{{ $row['id'] }}"
							class='form-control form-control-sm ' />
					</div>
					<div class="col-md-2">

					</div>
				</div>
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

						<div class="fileUpload btn " style="height: 20px;">
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
				<div class="form-group row expertise-container">
					<label for="Expertise" class="control-label col-md-4 text-left">Expertise</label>
					<div class="col-md-6">
						<div id="expertise-chips-container" class="expertise-chips-container"></div>
						<input type='text'
							name='expertise_input'
							id='expertise-input'
							class='form-control form-control-sm expertise-input'
							placeholder="Type expertise and press Enter or comma" />
						<input type="hidden"
							name="expertise"
							id="expertise-hidden-input"
							value="{{ $row['expertise'] ?? '' }}">
					</div>
				</div>
			</fieldset>
		</div>

	</div>

	<input type="hidden" name="action_task" value="save" />

</div>
</div>
{!! Form::close() !!}

<script>
document.addEventListener('DOMContentLoaded', function() {
    const expertiseInput = document.getElementById('expertise-input');
    const chipsContainer = document.getElementById('expertise-chips-container');
    const hiddenInput = document.getElementById('expertise-hidden-input');
    
    // Color classes for chips
    const chipColors = [
        'expertise-chip-blue',
        'expertise-chip-green', 
        'expertise-chip-purple',
        'expertise-chip-pink',
        'expertise-chip-orange',
        'expertise-chip-teal'
    ];

    // Initialize chips from hidden input
    function initializeChips() {
        // Clear existing chips
        chipsContainer.innerHTML = '';
        
        // Get value from hidden input
        const initialValue = hiddenInput.value.trim();
        if (initialValue) {
            // Split by comma, trim each item, and filter out empty strings
            const expertises = initialValue.split(',')
                .map(e => e.trim())
                .filter(e => e);
            
            // Add each expertise as a chip
            expertises.forEach(addChip);
        }
    }

    // Get random color class for chip
    function getRandomColorClass() {
        return chipColors[Math.floor(Math.random() * chipColors.length)];
    }

    // Create chip element
    function createChipElement(expertise) {
        const colorClass = getRandomColorClass();
        
        const chipWrapper = document.createElement('div');
        chipWrapper.className = `expertise-chip ${colorClass}`;
        
        const chipText = document.createElement('span');
        chipText.textContent = expertise;
        chipText.className = 'expertise-chip-text';
        
        const removeButton = document.createElement('button');
        removeButton.innerHTML = '&times;';
        removeButton.className = 'expertise-chip-remove';
        removeButton.addEventListener('click', () => removeChip(expertise, chipWrapper));
        
        chipWrapper.appendChild(chipText);
        chipWrapper.appendChild(removeButton);
        
        return chipWrapper;
    }

    // Add chip to container
    function addChip(expertise) {
        if (!expertise || getExistingChips().includes(expertise)) return;
        
        const chipElement = createChipElement(expertise);
        chipsContainer.appendChild(chipElement);
        updateHiddenInput();
    }

    // Remove chip from container
    function removeChip(expertise, chipElement) {
        chipsContainer.removeChild(chipElement);
        updateHiddenInput();
    }

    // Get current list of chips
    function getExistingChips() {
        return Array.from(chipsContainer.children).map(chip => 
            chip.querySelector('.expertise-chip-text').textContent
        );
    }

    // Update hidden input with comma-separated list
    function updateHiddenInput() {
        const chips = getExistingChips();
		if(chips.length == 0){
			hiddenInput.value = "";
		}else{
			hiddenInput.value = chips.join(',');
		}
        expertiseInput.value = ''; // Clear input after adding
    }

    // Event listener for input
    expertiseInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ',') {
            e.preventDefault();
            const expertise = this.value.trim();
            if (expertise) {
                addChip(expertise);
            }
        }
    });

    // Initialize chips on page load
    initializeChips();
});
</script>

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