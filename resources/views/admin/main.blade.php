@extends('layouts.app')

@section('content')
    <div class="product container">
        <div class="row">
            <div class="product__sidebar col-md-3">
                <ul class="menu">
                    <a href="/orders"><li>Objednávky</li></a>
                    <a href="/customers"><li>Zakazníci</li></a>
                    <a href="#"><li>Slevy</li></a>
                     <button type="button" id="new_product" class="btn btn-primary">
                         <span class="fas fa-plus">Nový produkt</span>
                     </button>
                </ul>
               @include('admin.modal.create')
                <br>
               @include('admin.sessions')
            </div>
            <div class="product__items col-md-9">
                @include('admin.products')
            </div>
        </div>
    </div>
    @include('admin.modal.create')
    @include('admin.modal.edit')
    @include('admin.modal.delete')
@endsection