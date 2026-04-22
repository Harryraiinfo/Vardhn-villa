@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h3>Manage Reviews</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Message</th>
                <th>Rating</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($reviews as $review)
            <tr>
                <td>{{ $review->name }}</td>
                <td>{{ $review->message }}</td>
                <td>{{ $review->rating }}</td>

                <td>
                    @if($review->status == 1)
                        <span class="text-success">Approved</span>
                    @else
                        <span class="text-danger">Pending</span>
                    @endif
                </td>

                <td>
                    @if($review->status == 0)
                        <form action="{{ route('review.approve', $review->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-success btn-sm">Approve</button>
                        </form>
                    @endif

                    <form action="{{ route('review.delete', $review->id) }}" method="POST" style="margin-top:5px;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection