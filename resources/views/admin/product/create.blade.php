@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_cumb',['title'=>'Product Create'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Add Product</div>
                            <hr />
                            <form class="insert_form product_insert_form" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="preloader"></div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="" class=" col-form-label">Name</label>
                                        @include('admin.product.components.input',[
                                            'name' => 'product_name',
                                            'type' => 'text'
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Brand</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'brand',
                                            'attributes' => '',
                                            'class' => 'multiple-select',
                                            'collection' => $brands,
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Main Category</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'product_main_category_id',
                                            'attributes' => '',
                                            'class' => 'multiple-select product_main_category',
                                            'collection' => $maincategories,
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Category</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'product_category_id',
                                            'attributes' => 'multiple',
                                            'class' => 'multiple-select product_category',
                                            'collection' => $categories,
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Sub Category</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'product_sub_category_id',
                                            'attributes' => 'multiple',
                                            'class' => 'multiple-select product_sub_category',
                                            'collection' => $sub_categories,
                                        ])
                                    </div>
                                    
                                    {{-- <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Writer</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'writer_id',
                                            'attributes' => 'multiple',
                                            'class' => 'multiple-select',
                                            'collection' => $writers,
                                            'action' => route('writer.store'),
                                            'fields' => [
                                                ['name' => 'name','type' => 'text'],
                                                ['name' => 'description','type' => 'textarea'],
                                                ['name' => 'image','type' => 'file'],
                                            ]
                                        ])
                                    </div> --}}
                                    
                                    {{-- <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Publication</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'publication_id',
                                            'attributes' => 'multiple',
                                            'class' => 'multiple-select',
                                            'collection' => $publications,
                                            'action' => route('publication.store'),
                                            'fields' => [
                                                ['name' => 'name','type' => 'text'],
                                                ['name' => 'image','type' => 'file'],
                                                ['name' => 'description','type' => 'textarea'],
                                            ]
                                        ])
                                    </div> --}}
                                    
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Color</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'color_id',
                                            'attributes' => 'multiple',
                                            'class' => 'multiple-select',
                                            'collection' => $colors,
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Size</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'size_id',
                                            'attributes' => 'multiple',
                                            'class' => 'multiple-select',
                                            'collection' => $sizes,
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Unit</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'unit_id',
                                            'attributes' => 'multiple',
                                            'class' => 'multiple-select',
                                            'collection' => $units,
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Vendor</label>
                                        @include('admin.product.components.select',[
                                            'name' => 'vendor_id',
                                            'attributes' => 'multiple',
                                            'class' => 'multiple-select',
                                            'collection' => $vendors,
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="" class=" col-form-label">Price</label>
                                        @include('admin.product.components.input',[
                                            'name' => 'price',
                                            'type' => 'number',
                                            'attr' => "step='0.01'"
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="" class=" col-form-label">Tax</label>
                                        @include('admin.product.components.input',[
                                            'name' => 'tax',
                                            'type' => 'number'
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="" class=" col-form-label">Discount</label>
                                        @include('admin.product.components.input',[
                                            'name' => 'discount',
                                            'type' => 'text'
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="" class=" col-form-label">Expiration Date</label>
                                        @include('admin.product.components.input',[
                                            'name' => 'expiration_date',
                                            'type' => 'date'
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="" class=" col-form-label">Stock</label>
                                        @include('admin.product.components.input',[
                                            'name' => 'stock',
                                            'type' => 'number'
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="" class=" col-form-label">Alert Quantity</label>
                                        @include('admin.product.components.input',[
                                            'name' => 'alert_quantity',
                                            'type' => 'number'
                                        ])
                                    </div>
                                    
                                    <div class="col-12"></div>
                                    
                                    <div class="form-group col-md-6 col-xl-6">
                                        <label for="" class=" col-form-label">Description</label>
                                        <div class="">
                                            {{-- <input type="number" class="form-control"  placeholder="Alert" /> --}}
                                            <textarea name="description" class="form-control" id="mytextarea1" cols="30" rows="10"></textarea>
                                            <span class="text-danger description"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xl-6">
                                        <label for="" class=" col-form-label">Features</label>
                                        <div class="">
                                            {{-- <input type="number" class="form-control"  placeholder="Alert" /> --}}
                                            <textarea name="features" class="form-control" id="mytextarea2" cols="30" rows="10"></textarea>
                                            <span class="text-danger features"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xl-6">
                                        <label for="" class=" col-form-label">Thumb Image</label>
                                        @include('admin.product.components.input',[
                                            'name' => 'thumb_image',
                                            'type' => 'file',
                                            'attr' => ''
                                        ])
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xl-6">
                                        <label for="" class=" col-form-label">Related Image</label>
                                        @include('admin.product.components.input',[
                                            'name' => 'related_images',
                                            'type' => 'file',
                                            'attr' => 'multiple'
                                        ])
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Staus</label>
                                        <div class="">
                                            <select name="status"  class="form-control">
                                                @foreach ($status as $item)
                                                    <option value="{{ $item->serial }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger status"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6  col-xl-4">
                                        <label for="" class="col-form-label">Free Delivery</label>
                                        <div class="">
                                            <select name="free_delivery"  class="form-control">
                                                <option value="false">Off</option>
                                                <option value="true">On</option>
                                            </select>
                                            <span class="text-danger status"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label"></label>
                                    <div class="">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @include("admin.includes.form")
                    </div>
                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

    @push('ccss')
        <link href="/contents/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
        <link href="/contents/admin/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.css" />
    @endpush

    @push('cjs')
        <script src="/contents/admin/plugins/select2/js/select2.min.js"></script>
        <script src="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.min.js"></script>
        {{-- <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script> --}}

        <script>
            $('.multiple-select').select2({
                // theme: 'bootstrap4',
                // width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
            // tinymce.init({
            //     selector: '#mytextarea1'
            // });
            // tinymce.init({
            //     selector: '#mytextarea2'
            // });
            $('#mytextarea1').summernote({
                height: 400,
                tabsize: 2
            });

            $('#mytextarea2').summernote({
                height: 400,
                tabsize: 2
            });

            $('#selectmain_category_id').on('change',function(){
                let value = $(this).val();
                $.get("/admin/product/get-all-cateogory-selected-by-main-category/"+value,(res)=>{
                    $('#selectcategory_id').html(res);
                })
            })
        </script>

        <script>

        </script>
    @endpush


@endsection



