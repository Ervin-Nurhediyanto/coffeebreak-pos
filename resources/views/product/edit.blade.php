<x-layoutes.product>
  <div class="row d-flex justify-content-center">
    <div class="col-8 col-md-4 my-2 mx-2 p-3 border border-r-card shadow-sm cursor-pointer">
      <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name', $product->name) }}" required>
    
            <!-- error message untuk name -->
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
          <label for="image">Image</label>
          @if ($product->image)
            <img class="image" src="/{{ $product->image }}" alt="product">
          @else
            <img class="image" src="{{ asset('/img/logo.png') }}" alt="product">
          @endif
          <input type="file" class="form-control @error('image') is-invalid @enderror"
                 name="image">

          <!-- error message untuk image -->
          @error('image')
          <div class="invalid-feedback" role="alert">
              {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="price">Price</label>
          <input type="number" class="form-control @error('price') is-invalid @enderror"
                 name="price" value="{{ old('price', $product->price) }}" required>
    
          <!-- error message untuk price -->
          @error('price')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="category">Category</label>
          <input type="text" class="form-control @error('category') is-invalid @enderror"
                 name="category" value="{{ old('category', $product->category) }}" required>
    
          <!-- error message untuk category -->
          @error('category')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="d-flex justify-content-center my-2">
          <a href="{{ route('product.index') }}" class="w-100 btn btn-md btn-secondary">Back</a>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="w-100 btn btn-md btn-primary">Update</button>
        </div>
      </form>
      <div class="d-flex justify-content-center my-2">
        <form
          class="w-100"
          onsubmit="return confirm('Apakah Anda Yakin ?');"
          action="{{ route('product.destroy', $product->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="w-100 btn btn-md btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</x-layoutes.product>