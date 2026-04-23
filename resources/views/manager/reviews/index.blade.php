@extends('manager.layout')

@section('content')
<div class="container mt-4">

    <h3 class="mb-4">Manage Reviews</h3>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($reviews as $review)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $review->name }}</td>

                        <td style="max-width:250px;">
                            {{ $review->message }}
                        </td>

                        <td class="text-center">
                            ⭐ {{ $review->rating ?? 'N/A' }}
                        </td>

                        <td class="text-center">
                            @if($review->status == 1)
                            <span class="badge bg-success">Approved</span>
                            @else
                            <span class="badge bg-warning">Pending</span>
                            @endif
                        </td>

                        <td class="text-center">

                            {{-- APPROVE BUTTON --}}
                            @if($review->status == 0)
                            <form action="{{ route('manager.reviews.approve', $review->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn btn-sm btn-success">
                                    Approve
                                </button>
                            </form>
                            @endif

                            {{-- DELETE BUTTON --}}
                            <form action="{{ route('manager.reviews.delete', $review->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this review?')">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">No Reviews Found</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection