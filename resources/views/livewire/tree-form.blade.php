<div class="container">
    <main>
        <div class="py-5 text-center">
            <img src="{{ asset('logos/krg.png') }}" alt="Logo" class="img-fluid mb-2 me-5" style="max-height: 100px;">
            <img src="{{ asset('logos/agri.jpeg') }}" alt="Logo" class="img-fluid mb-2 me-5" style="max-height: 100px;">
            <h2 class="mt-5">Adding a new Tree</h2>
            <p class="lead">
                Welcome to the Tree Selling Website! Use this form to add a new tree to our inventory. Please provide the tree's name, a detailed description, and any maintenance instructions. Don't forget to specify the stock and upload an image of the tree. This simple and elegant form ensures you can effortlessly add new trees to our collection.
                <a href="{{ route('index') }}">Click here to go back to list of trees.</a>
            </p>

        </div>

        <div class="row">

            <div class="col-md-8 offset-md-2">
                <div class="card shadow border-0">

                    <div class="card-body p-4">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="save" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tree Name</label>
                                <input type="text" class="form-control" id="name" wire:model="name">
                                @error('name') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" rows="3" wire:model="description"></textarea>
                                @error('description') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="maintenance_instructions" class="form-label">Maintenance Instructions</label>
                                <textarea class="form-control" id="maintenance_instructions" rows="3" wire:model="maintenance_instructions"></textarea>
                                @error('maintenance_instructions') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="stock" wire:model="stock">
                                @error('stock') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" wire:model="price">
                                @error('price') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" wire:model="image">
                                @error('image') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>

                <div style="margin-bottom: 200px;"></div>
            </div>
        </div>
    </main>



</div>
