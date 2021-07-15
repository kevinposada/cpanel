@extends('layouts.main', ['activePage' => 'productsmanindex', 'titlePage' => 'Products Management'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Productos</h4>
                    <p class="card-category">Productos registrados</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('productsmanage.create') }}" class="btn btn-sm btn-facebook">Añadir producto</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Titulo</th>
                          <th>Descripcion</th>
                          <th>Precio</th>
                          <th>Created_at</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody>
                          @foreach ($products as $product)
                            <tr>
                              <td>{{ $product->id }}</td>
                              <td>{{ $product->title }}</td>
                              <td>{{ Str::limit($product->descripcion, 50) }}</td>
                              <td>{{ $product->price }}</td>
                              <td>{{ $product->created_at }}</td>
                              <td class="td-actions text-right">
                                @can('productsmanage.show')
                                  <a href="{{ route('productsmanage.show', $product->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                @endcan
                                @can('productsmanage.edit')
                                  <a href="{{ route('productsmanage.edit', $product->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                @endcan
                                @can('productsmanage.destroy')
                                  <form action="{{ route('productsmanage.destroy', $product->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" rel="tooltip">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </form>
                                @endcan
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer mr-auto">
                    {{ $products->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection