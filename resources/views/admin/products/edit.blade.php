@extends('admin.layouts.master')

@section('content')
<div role="main" class="main">
    <section role="main" class="content-body card-margin">

        <!-- start: page -->
        <div class="row">
            <div class="col-lg-8">
                <form id="form1" action="{{ route('admin.products.update', encrypt($product->id)) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Supplier name</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="supplier_name" id="supplier_name" value="{{old('supplier_name', isset(auth()->user()->name)?auth()->user()->name:null)}}" placeholder="Enter Supplier Name">
                                    @error('supplier_name')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Product name</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="product_name" id="product_name" value="{{old('product_name', isset($product)?$product->product_name:null)}}" placeholder="Enter product name">
                                    @error('product_name')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Product category</label>
                                <div class="col-lg-9">
                                    <div class="custom-select-1">
                                        <select id="user_time_zone" class="form-control text-3 h-auto py-2 valid" name="product_category" size="0" aria-invalid="false">
                                            <option selected="" disabled="" >Select Category</option>
                                            @foreach($categories as $key=>$category)
                                                <option  @if(old('category_id',isset($product)?$product->product_category_id:null)  == $category->id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Description</label>
                                <div class="col-lg-9">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control text-3 h-auto py-2" name="description" required="" style="height: 159px;">{{old('description', isset($product)?$product->description:null)}}</textarea>
                                    @error('description')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Specification</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="specification" id="specification" value="{{old('specification', isset($product)?$product->specification:null)}}" placeholder="Enter your specification">
                                    @error('specification')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Country </label>
                                <div class="col-lg-9">
                                    <div class="custom-select-1">
                                        <select id="user_time_zone" class="form-control text-3 h-auto py-2 valid" name="country" size="0" aria-invalid="false">
                                            <option selected="" disabled="" >Select Country</option>
                                            @foreach($countries as $key=>$country)
                                            <option  @if(old('country',isset($product)?$product->location:null)  == $country->id) selected @endif value="{{$country->id}}">{{$country->country_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('country')<i class="text-danger">{{$message}}</i>@enderror

                                </div>
                            </div>{{old('specification', isset($product)?$product->specification:null)}}

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Product size</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="product_size" id="product_size" value="{{old('product_size', isset($product)?$product->product_size:null)}}" placeholder="Enter product size">
                                    @error('product_size')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">contact supplier (Address/Number)</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="contact_supplier" id="contact_supplier" value="{{old('contact_supplier', isset($product)?$product->contact_supplier:null)}}" placeholder=" contact supplier">
                                    @error('contact supplier')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Regular price</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="regular_price" id="regular_price" value="{{old('regular_price', isset($product)?$product->regular_price:null)}}" placeholder="Enter product Regular price">
                                    @error('regular_price')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Discount_price</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="discount_price" id="discount_price" value="{{old('discount_price', isset($product)?$product->discount_price:null)}}" placeholder="Enter product Discount price">
                                    @error('discount_price')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Image</label>
                                <div class="col-lg-9">
                                <input class="d-block" type="file" name="image" id="image">
                                <br>
                                @if (isset($product))
                                <img src="{{asset($product->image)}}" style="width: 40px;">
                                @endif
                                </div>
                                @error('image')<i class="text-danger">{{$message}}</i>@enderror

                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2"> Multiole Image</label>
                                <div class="col-lg-9">
                                <input class="d-block" type="file" name="multiple_image[]" multiple class="custom-file-input" id="multiple_image">
                                <br>
                                @php($images = json_decode($product->multiple_image))
                                        @if(isset($images))
                                        @foreach($images as $eachimage)
                                        @if (isset($eachimage))
                                            <img src="{{asset('images/admin/products/multiple_image/'.$eachimage)}}" style="width:40px;">
                                        @endif
                                        @endforeach
                                        @endif
                                </div>
                                @error('multiple_image')<i class="text-danger">{{$message}}</i>@enderror

                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">catalogues</label>
                                <div class="col-lg-9">
                                    <input class="d-block" type="file" name="catalogues" id="catalogues">
                                    @if (isset($product))
                                <span style="width: 40px;">{{$product->drawing_file}}</span>
                                @endif
                                </div>
                                @error('catalogues')<i class="text-danger">{{$message}}</i>@enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Drawing file</label>
                                <div class="col-lg-9">
                                    <input class="d-block" type="file" name="drawing_file" id="drawing_file">
                                    @if (isset($product))
                                        <span style="width: 40px;">{{$product->drawing_file}}</span>
                                    @endif
                                </div>
                                @error('drawing_file')<i class="text-danger">{{$message}}</i>@enderror
                            </div>
                            <div class="form-group row">
                                <div class="form-group col-lg-9">

                                </div>
                                <div class="form-group col-lg-3">
                                    <input type="submit" value="Update" class="btn btn-dark btn-modern float-end" data-loading-text="Loading...">
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        <!-- end: page -->
    </section>
</div>

@endsection

