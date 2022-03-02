@extends ('layouts.admin')

@section ('content')
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Produits</h1>
                        <a class="btn btn-primary" href="/admin/produits/creer">Créer un produit</a>
                    </div>

                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>
                                        <img width="80" src=" {{ $product->image }}" alt="">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->prix }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/admin/produits/{{ $product->id }}/modifier">Modifier</a>
                                        <a class="btn btn-danger" href="/admin/produits/{{ $product->id }}/supprimer">Supprimer</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </main>
@endsection
