@include('admin.head')
<body class="layout-row">
@include('admin.sidebar')
    <div id="main" class="layout-column flex">
        @include('admin.header')
        <div id="content" class="flex">
            <div>
                <div class="page-hero page-container" id="page-hero">
                    <div class="padding d-flex">
                        <div class="page-title">
                            <h2 class="text-md text-highlight">Puja Creation Ecommerce</h2>
                            <small class="text-muted">wih price puja </small>
                        </div>
                        <div class="flex"></div>
                        <!-- <div>
                            <a href="{{url('admin-panel/puja-list-ecommerce')}}"><span class="d-none d-sm-inline mx-1">Puja list Ecommerce</span>
                                <i data-feather="arrow-right"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row">
                            <div class="col-sm-8 col-md-9">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong>{{ $message }}</strong>
                                </div>
                    
                                @endif

                                @if ($message = Session::get('error'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                            <strong>{{ $message }}</strong>
                                    </div>
                                    
                                @endif
                                <!-- <p><strong>Fill flowing Details <Details></Details></strong></p> -->
                                <form method="post" action="{{url('admin-panel/puja-creation-ecommerce')}}"  enctype="multipart/form-data">
                                @csrf 
                                    @if(!empty($pujaecomm))
                                    <input type="hidden" name="price_id" value="{{$pujaecomm->id}}">
                                    @endif
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Puja name</label>
                                            <select class="form-control c-select" name="pujanameId">
                                                <option>select name</option>
                                                @foreach($pujaList as $puja)
                                                <option value="{{$puja->id}}"@if(!empty($pujaecomm) && $pujaecomm->puja_id==$puja->id) selected @endif>{{$puja->name}}</option>
                                                
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Puja base price</label><input type="text" class="form-control" name="baseprice"
                                                placeholder="Enter price" value="{{!empty($pujaecomm) ? $pujaecomm->puja_base_price : ''}}" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>With Samagri price</label><input type="text" class="form-control" name="samagriprice"
                                                placeholder="Enter price" value="{{!empty($pujaecomm) ? $pujaecomm->puja_samagri_price : ''}}" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Without samagri price</label><input type="text" class="form-control" name="wsamagriprice"
                                                placeholder="Enter price" value="{{!empty($pujaecomm) ? $pujaecomm->puja_wsamagri_price : ''}}" required />
                                        </div>
                                        
                                        
                                        <!-- <div class="col-sm-6">
                                            <label>Category</label><select name="pujacategory" class="form-control c-select">
                                            <option>select category</option>
                                            <option>small</option>
                                            <option>medium</option>
                                            <option>large</option>
                                            </select>
                                        </div> -->
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Standard puja price</label><input type="text" class="form-control" name="samallpujaprice"
                                                placeholder="Enter price" value="{{!empty($pujaecomm) ? $pujaecomm->puja_price_samall : ''}}" required />
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <label>Premium puja price</label><input type="text" class="form-control" name="mediumpujaprice"
                                                placeholder="Enter price" value="{{!empty($pujaecomm) ? $pujaecomm->puja_price_medium : ''}}" required />
                                        </div>
                                     
                                    </div>                                    
                                    <div class="form-group row">
                                        
                                        
                                        <div class="col-sm-6">
                                            <label>Grand puja price</label><input type="text" class="form-control" name="largepujaprice"
                                                placeholder="Enter price" value="{{!empty($pujaecomm) ? $pujaecomm->puja_price_large : ''}}" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label>All puja price</label><input type="text" class="form-control" name="allpujaprice"
                                                placeholder="Enter price" value="{{!empty($pujaecomm) ? $pujaecomm->puja_price_all : ''}}" required />
                                        </div>
                                    </div>                                    
                                    
                                    <button type="submit" class="btn btn-primary">
                                       Next 
                                    </button>
                                    <!-- <a href="{{url('admin-panel/puja-category')}}" class="btn btn-primary">Next</a> -->
                                </form>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="card">
                                    <div class="p-3 text-muted">Type</div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-primary mx-1"></span>
                                                <span class="nav-text">Ghar pe puja</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-info mx-1"></span>
                                                <span class="nav-text">Online Puja</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-success mx-1"></span>
                                                <span class="nav-text">On request Puja</span></a>
                                        </li>
                                        
                                    </ul>
                                    <div class="p-3 text-muted">Category</div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-primary mx-1"></span>
                                                <span class="nav-text">Standard</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-info mx-1"></span>
                                                <span class="nav-text">Premium</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-success mx-1"></span>
                                                <span class="nav-text">Grand</span></a>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</body>
