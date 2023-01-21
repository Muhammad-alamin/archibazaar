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
                <input type="text" class="form-control" name="supplier_name" id="supplier_name" value="" placeholder="Enter Supplier Name">
                @error('supplier_name')<i class="text-danger">{{$message}}</i>@enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Product name</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="product_name" id="product_name" value="" placeholder="Enter product name">
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
                            <option  value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Description</label>
            <div class="col-lg-9">
                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control text-3 h-auto py-2" name="description" required="" style="height: 159px;"></textarea>
                @error('description')<i class="text-danger">{{$message}}</i>@enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Specification</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="specification" id="specification" value="" placeholder="Enter your specification">
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
                        <option  @if(old('country',isset($professional)?$professional->location:null)  == $country->id) selected @endif value="{{$country->id}}">{{$country->country_name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('country')<i class="text-danger">{{$message}}</i>@enderror

            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Image</label>
            <div class="col-lg-9">
                    <input class="d-block" type="file" name="image" id="image">

            </div>
            @error('image')<i class="text-danger">{{$message}}</i>@enderror
        </div>

        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Multiple Image</label>
            <div class="col-lg-9">
                    <input class="d-block" type="file" name="multiple_image[]" id="multiple_image" multiple class="custom-file-input" >
            </div>
            @error('multiple_image')<i class="text-danger">{{$message}}</i>@enderror
        </div>


        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">catalogues</label>
            <div class="col-lg-9">
                <input class="d-block" type="file" name="catalogues" id="catalogues">
            </div>
            @error('catalogues')<i class="text-danger">{{$message}}</i>@enderror
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 ">Drawing file</label>
            <div class="col-lg-9">
                <input class="d-block" type="file" name="drawing_file" id="drawing_file">
            </div>							        </div>
            @error('drawing_file')<i class="text-danger">{{$message}}</i>@enderror
        </div>
        <div class="form-group row">
            <div class="form-group col-lg-9">

            </div>
            <div class="form-group col-lg-3">
                <input type="submit" value="submit" class="btn btn-dark btn-modern float-end" data-loading-text="Loading...">
            </div>
        </div>
    </div>
</section>
