<x-layoutes.product>
  <div class="row m-0 p-0 d-flex justify-content-center align-items-center bg-home">
    <div class="d-flex mt-2 justify-content-end">
      <button
        class="px-6 py-2 bg-primary text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
        <a href="{{ route('product.create') }}">New Product</a>
      </button>
    </div>
    @forelse ($products as $product)
    <div class="col-8 col-md-2 my-2 mx-2 border border-r-card shadow-sm cursor-pointer">
      <div class="d-flex justify-content-center my-2">
        <h2 class="text-white">{{ $product->name }}</h2>
      </div>
      <a
        href="{{ route('product.edit', $product->id) }}"
        {{-- class="btn btn-sm btn-primary"> --}}
        class="">
        @if ($product->image)
          <img class="image" src="/{{ $product->image }}" alt="product">
        @else
          <img class="image" src="{{ asset('/img/logo.png') }}" alt="product">
        @endif
      </a>
      <div class="d-flex justify-content-center my-2">
        <h2 class="text-info"><b>Rp{{ number_format($product->price, 0, ',', '.') }}</b></h2>
      </div>
    </div>
    @empty
      <div class="text-center text-mute text-white">
        Produk tidak tersedia
      </div>
    @endforelse

    <div class="bg-red">
      {{ $products->links() }}
    </div>
  </div>
</x-layoutes.product>