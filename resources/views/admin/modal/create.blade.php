<div id="new_product__form" >
    <form action="/create_product" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <input class="form-control" type="text" name="nazev" placeholder="Název produktu" value="{{ old('nazev') }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="popis" placeholder="Popis produktu" value="{{ old('popis') }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="cena" placeholder="Cena" value="{{ old('cena') }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="file" name="image_url" placeholder="Obrázek">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>