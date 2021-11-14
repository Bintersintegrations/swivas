@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.min.css')}}">
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.shop.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-0">
                            <div class="card-body">
                                <div class="dashboard-box">
                                    <h3>Add Product Variant</h3>
                                    <form action="{{route('shop.product.variant',[$shop,$product])}}" method="POST">@csrf
                                        
                                        <div class="row mt-3">
                                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Product Name</label>
                                                    <input type="text" name="name" value="{{$product->name}}" readonly class="form-control" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control" rows="3" name="description" placeholder="Some details about the product" readonly required>{{$product->name}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="categories" class="form-label">Select Category :</label>
                                                    <select class="form-control select2" id="category" name="categories[]" disabled multiple required>
                                                        
                                                        @foreach ($product->categories() as $child)
                                                            <option value="{{$child->id}}" selected data-attrib="{{$child->atributes->pluck('slug')}}">{{$child->name}}</option>    
                                                        @endforeach
                                                            
                                                        
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-6">
                                                        <label class="mb-0 mr-1">Available Quantity:</label>
                                                        <input class="form-control" type="number" value="1" name="quantity" required>
                                                        
                                                    </div>
                                                    <div class=" mb-3 col-6">
                                                        <label for="price" class="mb-0 mr-1">Price :</label>
                                                        <div class="input-group mb-3px-0">
                                                            <input type="number" name="price" value="0" id="price" class="form-control" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">{{$shop->country->currency_symbol}}</span>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-6">
                                                        <label class="mb-0 mr-1">Min Purchase Quantity:</label>
                                                        <input class="form-control" type="number" value="{{$product->min_qty}}"  name="min_qty">
                                                        <small>Leave empty if no maximum</small>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-0 mr-1">Max Purchase Quantity:</label>
                                                        <input class="form-control" type="number" value="{{$product->max_qty}}" name="max_qty">
                                                        <small>Leave empty if no maximum</small>
                                                    </div> 
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-12">
                                                        <div class="form-check pl-0">
                                                            <input class="radio_animated form-check-input mt-1 " type="checkbox" name="offer" id="offer" value="1">
                                                            <label class="form-check-label" for="offer">
                                                                Add Offers / Promo Price
                                                            </label>
                                                        </div>
                                                    </div>   
                                                </div>
                                                <div id="offer-block" class="row no-gutters mt-3" style="display: none">
                                                    <div class=" mb-3 col-4">
                                                        <label for="offer_price" class="mb-0 mr-1">Price :</label>
                                                        <div class="input-group mb-3 px-0">
                                                            <input type="number" name="sale_price" value="0" id="offer_price" class="form-control ">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">{{$shop->country->currency_symbol}}</span>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="form-group col-4 ">
                                                        <label class="mb-0 mr-1">Start Date:</label>
                                                        <input class="form-control" type="text" value="" name="start_date" id="start_date">
                                                    </div>
                                                    <div class="form-group col-4 ">
                                                        <label class="mb-0 mr-1">End Date:</label>
                                                        <input class="form-control" type="text" value="" name="end_date" id="end_date">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-check pl-0">
                                                            <input class="radio_animated form-check-input mt-1 " type="checkbox" name="group" id="group" value="1" @if($product->grouped_products && count($product->grouped_products)) selected @endif>
                                                            <label class="form-check-label" for="group">
                                                                Allow Customers to buy this product alone
                                                            </label>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="row" id="group-block" style="display: none;">
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label" for="group">Select Grouped Items</label>
                                                        <select class="form-control select2 w-100" name="group_items[]" id="group_items" multiple style="width: 100%">
                                                            @forelse ($shop->products as $product)
                                                                <option value="{{$product->id}}" @if($product->grouped_products && in_array($product->id,$product->grouped_products)) selected @endif>{{$product->name}}</option>
                                                            @empty
                                                                
                                                            @endforelse
                                                        </select>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label" for="related">Related Products</label>
                                                        <select class="form-control select2" name="related[]" id="related" multiple>
                                                            @forelse ($shop->products as $product)
                                                                <option value="{{$product->id}}" @if($product->related_products && in_array($product->id,$product->related_products)) selected @endif>{{$product->name}}</option>
                                                            @empty
                                                                
                                                            @endforelse
                                                        </select>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label" for="boughtTogether">Frequently Bought Together</label>
                                                        <select class="form-control select2" name="bought_together[]" id="boughtTogether" multiple>
                                                            @forelse ($shop->products as $product)
                                                                <option value="{{$product->id}}" @if($product->bought_together && in_array($product->id,$product->bought_together)) selected @endif>{{$product->name}}</option>
                                                            @empty
                                                                
                                                            @endforelse
                                                        </select>
                                                    </div> 
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                                <div class="add-product">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="mb-1">Add Image</p>
                                                            <label class="d-block">Image</label>
                                                            
                                                            
                                                            <ul class="file-upload-product">
                                                                <li>
                                                                    <input id="thumbnail1" class="form-control" type="hidden" name="images[]">
                                                                    <div class="box-input-file lfm d-inline-flex" data-input="thumbnail1" data-preview="holder1" id="holder1" >
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>  
                                                                <li>
                                                                    <input id="thumbnail2" class="form-control" type="hidden" name="images[]">
                                                                    <div class="box-input-file lfm d-inline-flex" data-input="thumbnail2" data-preview="holder2" id="holder2">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <input id="thumbnail3" class="form-control" type="hidden" name="images[]">
                                                                    <div class="box-input-file lfm d-inline-flex" data-input="thumbnail3" data-preview="holder3" id="holder3">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <input id="thumbnail4" class="form-control" type="hidden" name="images[]">
                                                                    <div class="box-input-file lfm d-inline-flex" data-input="thumbnail4" data-preview="holder4" id="holder4">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>      
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <h4 class="my-3">Attributes</h4>
                                                        <div class="row">
                                                            @forelse ($product->atributes() as $atribute)
                                                                @if ($atribute->element == 'textbox')
                                                                    <div class="form-group col-6 atributes {{$atribute->slug}}">
                                                                        <label class="mb-0 mr-1">{{$atribute->description}}:</label>
                                                                        <input class="form-control" type="text" name="atributes[{{$atribute->slug}}]" id="{{$atribute->slug}}">
                                                                    </div>
                                                                @endif
                                                                @if ($atribute->element == 'select')
                                                                    <div class="form-group col-6 atributes {{$atribute->slug}}">
                                                                        <label class="mb-0 mr-1">{{$atribute->description}}:</label>
                                                                        <select class="form-control select2" name="atributes[{{$atribute->slug}}]" id="{{$atribute->slug}}" multiple>
                                                                            <option value="0">Select</option>
                                                                            @forelse ($atribute->options as $option)
                                                                                <option value="{{$option->name}}">{{$option->name}}</option>
                                                                            @empty
                                                                                <option disabled>No Options</option>
                                                                            @endforelse
                                                                        </select>
                                                                    </div>
                                                                @endif
                                                            @empty
                                                                
                                                            @endforelse
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-sm btn-solid btn-dark" name="save" value="draft">Save product</button>
                                                <button type="submit" class="btn btn-sm btn-solid" name="save" value="publish">Publish product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<!--  dashboard section end -->
@include('layouts.frontend.media')
@endsection

@push('scripts')
    
    <script src="{{asset('assets/js/date-picker.js')}}"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>

    
    <script>
        var route_prefix = "/laravel-filemanager";
        $('.lfm').each(function() {
            $(this).filemanager('image', {prefix: route_prefix});
        });
    </script>
    
    
    
    <script>
        {{-- offer --}}
        $('#offer').change(function(){
            if($(this).is(':checked')){
                $('#offer-block').show();
            }
            else{
                $('#offer-block').hide();
            }
            
        })
        $('#group').change(function(){
            if($(this).is(':checked')){
                $('#group-block').hide();
            }else{
                $('#group_items').select2();
                $('#group-block').show();
            }
        })
        {{-- offer  --}}
        $('#start_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#end_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
        {{-- color --}}
        $(document).on('click','.color-palette',function(){
            $(this).closest('.dropdown').find('.color_selected').css('background-color', $(this).css('background-color'));;
            $(this).closest('.dropdown').find('.color_value').val($(this).attr('data-color'));
        });
        
        
        {{-- atribute change by category --}}
        $(document).on('change','#category',function(){
            $('.atributes').hide();
            $('option:selected', this).each(function(){
                let attrib_array = JSON.parse($(this).attr('data-attrib'))
                if(attrib_array.length){
                    attrib_array.forEach(function(value){
                        $('.'+value).show();
                    })
                }
            })
            // attr('data-attrib'))
            // changeAtributes($('option:selected', this).attr('data-attrib'));
        });
        function changeAtributes(atributes){
            // let attribArray = atributes
            console.log(atributes)
            // JSON.parse(atributes).forEach(function(value){
            //     $('.'+value).show();
            // })
                
        }
        $('.select2').select2();
        
    </script>
@endpush