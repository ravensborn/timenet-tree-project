<div class="container mt-5">
    <main>
        <div class="py-5 text-center">
            <img src="{{ asset('logos/krg.png') }}" alt="Logo" class="img-fluid mb-2 me-5" style="max-height: 100px;">
            <img src="{{ asset('logos/agri.jpeg') }}" alt="Logo" class="img-fluid mb-2 me-5" style="max-height: 100px;">
            <h2 class="mt-5">Tree Collection</h2>
            <p class="lead">
                Browse through our extensive collection of trees. Each tree comes with detailed descriptions and maintenance instructions to help you care for them. Our selection includes a variety of species, each chosen for their unique characteristics and benefits. Whether you're looking to enhance your garden, create a shady retreat, or add some greenery to your space, we have the perfect tree for you.
                <a href="{{ route('tree.add') }}">Click here to add a new tree.</a>
            </p>
        </div>

        <div class="row">
            @foreach ($trees as $tree)
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-0 h-100">
                        <img src="{{ $tree->getFirstMediaUrl('cover') }}" style="max-height: 200px; object-fit: cover;" class="card-img-top" alt="{{ $tree->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tree->name }}</h5>
                            <p class="card-text">{{ Str::limit($tree->description, 100) }}</p>
                            <p class="card-text"><small class="text-muted">Stock: {{ $tree->stock }}</small></p>
                            <p class="card-text"><small class="text-muted">Price: {{ number_format($tree->price)}} IQD</small></p>
                            <button disabled href="#" class="btn btn-primary btn-sm" >View Details</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
          <div class="col">

              {{ $trees->links() }}
          </div>
        </div>
    </main>
</div>
