<x-layoutes.product>
  <div class="row d-flex justify-content-center">
    <div class="col-8 col-md-4 my-2 mx-2 p-3 border border-r-card shadow-sm cursor-pointer">
      <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"
                   name="name" required>
    
            <!-- error message untuk name -->
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
          <label for="image">Image</label>
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
                 name="price" required>
    
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
                 name="category" required>
    
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
          <button type="submit" class="w-100 btn btn-md btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</x-layoutes.product>