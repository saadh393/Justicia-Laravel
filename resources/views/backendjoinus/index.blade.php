@extends('layouts.app')

@section('content')
<div class="page-header">
    <h2>{{ $pageTitle }} <br> <small> {{ $pageNote }} </small> </h2>
</div>

<div class="p-5">
    <table class="table table-hover">
        <thead>
        <tr>

            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Submission Date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($joinsData as $record)
            <tr id="row-class-{{$record->id}}">
                <td class="py-4">{{ $record->name }}</td>
                <td>{{ $record->email }}</td>
                <td>{{ $record->phone }}</td>
                <td>{{ $record->created_at }}</td>
                <td>
                    <button  onclick="deleteThis({{ $record->id }});" type="button" class="btn btn-danger">Delete</button>
                </td>
{{--                onclick="deleteThis({{ $record->id }});"
--}}
            </tr>

        @endforeach

        </tbody>
    </table>


</div>
    <script>

        function deleteThis(_id){
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
                        url : '/backendpublication/'+ _id,
                        type : 'DELETE',
                        success : (data) => {
                            Swal.fire('Saved!', '', 'success');
                            $('#row-class-'+_id).remove()
                        }

                    })
                }
            })
        }
    </script>

@endsection
