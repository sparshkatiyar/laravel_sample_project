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
                        <div>
                            <a href="{{url('admin-panel/puja-list-ecommerce')}}"><span class="d-none d-sm-inline mx-1">Puja list Ecommerce</span>
                                <i data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row">
                            <div class="col-sm-8 col-md-9">
                                
                                <!-- <p><strong>Fill flowing Details <Details></Details></strong></p> -->
                                <form method="post" action="{{url('admin-panel/puja-creation-ecommerce')}}"  enctype="multipart/form-data">
                                @csrf 
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Puja name</label>
                                            <select class="form-control c-select" name="pujanameId">
                                                <option>select name</option>
                                                @foreach($pujaList as $puja)
                                                <option value="{{$puja->id}}">{{$puja->name}}</option>
                                                
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Puja base price</label><input type="text" class="form-control" name="baseprice"
                                                placeholder="Enter price" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Type</label>
                                            <select class="form-control c-select" name="pujatype">
                                            <option>select type</option>
                                            <option>Without Samagri</option>
                                            <option>With Samagri </option>
                                        
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Category</label><select name="pujacategory" class="form-control c-select">
                                            <option>select category</option>
                                            <option>small</option>
                                            <option>medium</option>
                                            <option>large</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Puja price</label><input type="text" name="price" class="form-control"
                                                placeholder="Total price" required />
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">
                                       Create 
                                    </button>
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
                                                <span class="nav-text">large</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-info mx-1"></span>
                                                <span class="nav-text">small</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-success mx-1"></span>
                                                <span class="nav-text">Medium</span></a>
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
</body>
