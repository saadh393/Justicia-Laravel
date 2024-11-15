@extends('layouts.app')

@section('content')
<div class="page-header">
    <h2>{{ $pageTitle }} <small> {{ $pageNote }} </small> </h2>
</div>

<div class="p-5">
    <table class="table table-hover">
        <thead>
            <tr>

                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col" style="width: 40%;">Message</th>
                <th scope="col">Submission Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach($referrals as $record)
            <tr id="row-class-{{$record->id}}">
                <td class="py-4">{{ $record->name }}</td>
                <td>{{ $record->email }}</td>
                <td>{{ $record->contact }}</td>
                <td style="width: 40%;">{{ $record->message }}</td>
                <td>{{ $record->created_at }}</td>
                <td style="display: flex; gap:10px; height:100%">
                    <button
                        onclick="stateUpdate({{ $record->id }});"
                        type="button"
                        class="btn "
                        style="background-color: {{ $record->pending ? '#009688' : '#ff9800' }};color: white;">
                        {{ $record->pending ? 'Reviewed' : 'Pending' }}
                    </button>
                    <button onclick="deleteThis({{ $record->id }});" type="button" class="btn btn-danger text-white">Delete</button>
                </td>

            </tr>

            @endforeach

        </tbody>
    </table>


</div>

<script>
    function deleteThis(_id) {
        // var total = $('input[class="ids"]:checkbox:checked').length;
        Swal.fire({
            title: 'Confirm ?',
            text: ' Are u sure deleting this record ? ',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, please',
            cancelButtonText: 'cancel'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: '/referral/' + _id,
                    type: 'DELETE',
                    success: (data) => {
                        Swal.fire('Saved!', '', 'success');
                        $('#row-class-' + _id).remove()
                    }

                })
            }
        })
    }

    function stateUpdate(_id) {
        // var total = $('input[class="ids"]:checkbox:checked').length;
        Swal.fire({
            title: 'Confirm ?',
            text: ' Are you sure updating this record ? ',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, please',
            cancelButtonText: 'cancel'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: '/referral/' + _id,
                    type: 'PATCH',
                    success: (data) => {
                        Swal.fire('Saved!', '', 'success');
                        // relod the page
                        location.reload();
                    }

                })
            }
        })
    }
</script>
@endsection