<div class="modal fade" id="delete_basket_modal" tabindex="-1" role="dialog" aria-labelledby="delete_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Určitě chcete tento produkt vymazat?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/delete_from_basket" role="form">
                    <div class="form-group">

                        <div class="col-sm-10">
                            {{ csrf_field() }}
                            <input id="id" name="id" class="id form-control" type="hidden" value="">
                            <h5 class="title-name"></h5>
                        </div>
                    </div>
                </form>
                        <br>
                        <div class="modal-footer">
                            <input class="basket_delete btn btn-danger" type="submit" value="Odstranit">
                        </div>
            </div>
        </div>
    </div>
</div>