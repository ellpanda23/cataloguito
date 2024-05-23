<div>
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <input class="form-control" placeholder="¿Que estas buscando?" wire:model="search">
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Extracto</th>
                        <th>Precio</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->extract }}</td>
                            <td>${{ $product->price }}</td>

                            <td width="10px">
                                @can('admin.products.edit')
                                    <a class="btn btn-primary" href="{{ route('admin.products.edit', $product) }}">Editar</a>
                                @endcan
                            </td>


                            <td width="10px">
                                @can('admin.products.destroy')
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger" type="submit">Eliminar</button>

                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$products->links()}}
        </div>
    </div>
</div>
