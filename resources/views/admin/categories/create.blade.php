@extends('admin_views.layout.master')

@section('admin_content')


<div class="section-admin container-fluid">
    <div class="row admin text-center">
        <div class="col-md-12">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                    <div class="row">
                        <div class="">
                            <div class="review-content-section">
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Category">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center custom-pro-edt-ds">
                                <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                    </button>
                                <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        </div>
    </div>
</div>

@endsection
