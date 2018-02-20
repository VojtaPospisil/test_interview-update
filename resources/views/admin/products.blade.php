
    <div>
        <div class="row m-2">
            @foreach($products as $product)
                <div class="product col-m-3 m-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $product -> title }}</h4>
                            <img class="product__img" src="{{ $product->image_path }}" alt="product">
                            <h5>Cena: {{ $product -> price }} Kč</h5>
                            <p>Popis: {{ $product -> description }}</p>
                            <form class="" action="" method="post">
                                {{ csrf_field() }}
                                <input data-productid="{{ $product -> product_id }}"  type="hidden" name="product_id" class="product_id" value="{{ $product -> product_id }}">
                                <input data-user="{{ Auth::user()['id'] }}"  type="hidden" name="user_id" class="user_id" value="{{ Auth::user()['id'] }}">
                            </form>
                            <button href="#"  class="edit_modal btn btn-primary btn-sm" data-id="{{$product->id}}" data-title="{{$product->title}}" data-desc="{{$product->description}}" data-price="{{$product->price}}" data-image="{{ $product->image_path }}">
                                <span class="glyphicon glyphicon-trash">Upravit</span>
                            </button>

                            <button href="#" class="delete_modal btn btn-danger btn-sm" data-id="{{$product->id}}" data-title="{{$product->title}}" data-desc="{{$product->description}}" data-price="{{$product->price}}" data-image="{{ $product->image_path }}">
                                <span class="fa fa-trash">Odstranit</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
