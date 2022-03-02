@extends ('layouts.admin')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Modifier le produit</h1>
            </div>
                <div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0 list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="/admin/{{ $product->id }}" method="post">
                        @csrf @method('put')
                        <input type="text" name="name" placeholder="Nom..." class="form-control"
                               value="{{ old('name', $product->name) }}">
                
                        <button class="btn btn-primary mt-3">Modifier</button>
                    </form>
                </div>
                
            </div>
    </div>   
</main>
@endsection