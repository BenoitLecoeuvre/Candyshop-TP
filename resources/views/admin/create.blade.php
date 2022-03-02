@extends ('layouts.admin')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Créer un produit</h1>
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

                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                
                        <div class="mb-3">
                            <label for="name">Nom</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('title') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="desc">Description</label>
                            <textarea name="description" id="desc" class="form-control">{{ old('synopsys') }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="prix">Prix</label>
                            <input type="number" name="prix" id="prix" class="form-control" value="{{ old('duration') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="bestproduct">Coup de coeur: </label>
                            <input type="radio" name="bestproduct" id="bestproduct" class="form-radio" value="1"> Oui
                            <input type="radio" name="bestproduct" id="bestproduct" class="form-radio" value="0"> Non
                        </div>
                        
                        <div class="mb-3">
                            <label for="category">Catégorie</label>
                            <select name="category" id="category" class="form-select">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>        
                
                        <button class="btn btn-primary mt-3">Ajouter</button>
                    </form>
                </div>
                
            </div>
    </div>   
</main>
@endsection