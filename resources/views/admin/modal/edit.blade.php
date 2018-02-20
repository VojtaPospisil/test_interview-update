<div class="modal fade" id="edit_modal"  role="dialog" aria-labelledby="edit_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Upravit produkt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/update_product" role="form">
                    <div class="form-group">

                        <div class="col-sm-10">
                            {{ csrf_field() }}
                            <input id="id" name="id" class="id form-control" type="hidden">
                            <label for="title">Název produktu</label>
                            <input id="title" name="title" class="title form-control" type="text">
                            <label for="desc">Popis produktu</label>
                            <input id="desc" name="desc" class="desc form-control" type="text">
                            <label for="price">Cena produktu</label>
                            <input id="price" name="price" class="price form-control" type="number">
                            <img id="image_modal" class="image_modal" src="">
                            <input id="image" name="image" class="image form-control" type="file">
                        </div>

                        </div>
                        <br>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" value="Uložit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

