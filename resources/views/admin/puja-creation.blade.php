@include('admin.head')

<body class="layout-row" >
   @include('admin.sidebar')
    <div id="main" class="layout-column flex">
        @include('admin.header')
        <div id="content" class="flex">
            <div>
                <div class="page-hero page-container" id="page-hero">
                    <div class="padding d-flex">
                        <div class="page-title">
                            <h2 class="text-md text-highlight">Puja Creation</h2>
                            <small class="text-muted">upload your puja from here</small>
                        </div>
                        <div class="flex"></div>
                        <div>
                            <a href="{{url('admin-panel/puja-list')}}"><span class="d-none d-sm-inline mx-1">Puja list</span>
                                <i data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row">
                            <div class="col-sm-8 col-md-9">
                                
                                <!-- <p><strong>Fill flowing Details <Details></Details></strong></p> -->
                                <form method="post" action="{{url('admin-panel/puja-creation')}}"  enctype="multipart/form-data">
                                @csrf 
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Puja name</label><input type="text" name="pujaname" class="form-control"
                                                placeholder="Name" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Puja icon/Image</label><input type="file" class="form-control" name="pujaimage"
                                                placeholder="Enter date" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Type</label>
                                            <select class="form-control c-select" name="pujatype">
                                            <option>Select puja type</option>
                                            <option value="Ghar pe puja">Ghar pe puja</option>
                                            <option value="Online Puja">Online Puja</option>
                                            <option value="On request puja">On request puja</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Category</label><select name="pujacategory" class="form-control c-select">
                                            <option>Select puja category</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Premium">Premium</option>
                                            <option value="Grand">Grand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Puja Advantage</label><textarea onclick="ckeFunction()" type="text" name="pujaadvantage" rows="4" class="form-control"
                                                placeholder="Advantage" id="editor1"></textarea>
                                    </div> 
                                    <div class="form-group">
                                        <label> Puja Description</label><textarea  onclick="ckeFunction()" class="form-control" name="pujadescription" rows="4"
                                            placeholder="hmm.." id="editor2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label> Puja Description ( Hindi )</label><textarea  onclick="ckeFunction()" class="form-control" name="pujadescriptionhindi" rows="4"
                                            placeholder="hmm.." id="editor4"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">
                                       Next 
                                    </button>
                                   <!--  <a href="{{url('admin-panel/puja-creation-ecommerce')}}" class="btn btn-primary">Next</a> -->
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
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-success mx-1"></span>
                                                <span class="nav-text">On request Puja</span></a>
                                        </li> -->
                                        
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
    
    <script>
    function ckeFunction(){

        CKEDITOR.replace( 'editor1' ); // (In case of angular):__ declare var CKEDITOR: any; (If error occurs)
        CKEDITOR.replace( 'editor2' ); // (In case of angular):__ declare var CKEDITOR: any; (If error occurs)
        CKEDITOR.replace( 'editor3' ); // (In case of angular):__ declare var CKEDITOR: any; (If error occurs)
        CKEDITOR.replace( 'editor4' ); // (In case of angular):__ declare var CKEDITOR: any; (If error occurs)
    }
   
    </script>
    @include('admin.footer')
</body>
