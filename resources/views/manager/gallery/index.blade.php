@extends('manager.layout')

@section('content')

<h4 class="mb-4">📸 Gallery Manager</h4>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif


<div class="container-fluid px-4">

    <div class="row">
        <!-- Upload Card -->
        <div class="col-md-3">
            <div class="card p-3 shadow-sm">
                <h6 class="mb-3">Upload New Image</h6>

                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="file" name="image" class="form-control mb-3" required>

                    <button class="btn btn-warning w-100">
                        Upload Image
                    </button>
                </form>
            </div>
        </div>

        <!-- Gallery Images -->
        <div class="col-md-9">
            <div class="card p-3 shadow-sm">
                <h6 class="mb-3">All Images</h6>

                <div class="row">
                    <!-- @forelse($images as $img)
                    <div class="col-md-4 mb-3">
                        <div class="card border-0 shadow-sm">

                            <img src="{{ asset('gallery/'.$img->image) }}" class="img-fluid rounded">

                            <div class="p-2">
                                <form action="{{ route('gallery.delete', $img->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm w-100">
                                        Delete
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                    @empty
                    <p>No images found</p>
                    @endforelse -->

                    <div id="gallery-list" class="row">
                        @foreach($images as $img)
                        <div class="col-md-4 mb-3 gallery-item" data-id="{{ $img->id }}">
                            <div class="card shadow-sm">

                                <img src="{{ asset('gallery/'.$img->image) }}" class="img-fluid">

                                <div class="p-2">
                                    <form action="{{ route('gallery.delete', $img->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button onclick="return confirm('Delete this image?')" class="btn btn-danger btn-sm w-100">
                                            Delete
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<script id="dragjs">
    let el = document.getElementById('gallery-list');

    Sortable.create(el, {
        animation: 150,

        onEnd: function() {
            let order = [];

            document.querySelectorAll('.gallery-item').forEach((item, index) => {
                order.push({
                    id: item.dataset.id,
                    position: index + 1
                });
            });

            fetch("{{ route('gallery.sort') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    order: order
                })
            });
        }
    });
</script>
@endpush