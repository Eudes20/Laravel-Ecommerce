@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_cumb',['title'=>'Create'])
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{--  <div class="card-title">Create size</div>  --}}
                            <div class="card-heder d-flex justify-content-between">
                                <div class="card-title">Create size</div>
                                <a href="{{ route('size.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                            </div>
                            <hr />
                            <form method="POST" class="insert_form" action="{{ route('size.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="preloader"></div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" />
                                        <span class="text-danger name"></span>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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

@endsection



