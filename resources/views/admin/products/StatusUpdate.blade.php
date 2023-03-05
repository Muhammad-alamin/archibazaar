@extends('admin.layouts.master')

@section('content')
<div role="main" class="main">
    <section role="main" class="content-body card-margin">

        <!-- start: page -->
        <div class="row">
            <div class="col-lg-8">
                <form id="form1" action="{{ route('admin.products.status.update', encrypt($product->id)) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <section class="card">
                        <header class="card-header">
                            <div class="card-actions">
                                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            </div>

                            <h2 class="card-title">Product</h2>
                        </header>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-4 control-label text-sm-right pt-2">Approval  :</label>
                                <div class="form-check" style="margin-left: 20px; margin-top: 5px;">
                                    <input type="radio" @if(old('product_approval',isset($product)?$product->product_approval:null)  == 'Approved') checked @endif name="product_approval" class="form-check-input" value="Approved" id="Approved">
                                    <label  for="active">Active</label>
                                </div>

                                <div class="form-check" style="margin-left: 20px; margin-top: 5px;">
                                    <input type="radio" @if(old('product_approval',isset($product)?$product->product_approval:null)  == 'Unapproved') checked @endif name="product_approval" class="form-check-input" value="Unapproved" id="Unapproved">
                                    <label for="inactive">Inactive</label>
                                </div>
                                @error('product_approval')<i class="text-danger">{{ $message }}</i>@enderror
                            </div>
                        </div>
                    </section>
                    <footer class="card-footer text-right">
                        <button class="btn btn-dark">Submit </button>
                    </footer>
                </form>
            </div>
        <!-- end: page -->
    </section>
</div>

@endsection

