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
                                            <option>Ghar pe puja</option>
                                            <option>Online Puja</option>
                                            <option>On request puja</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Category</label><select name="pujacategory" class="form-control c-select">
                                            <option>Select puja category</option>
                                            <option>small</option>
                                            <option>medium</option>
                                            <option>large</option>
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
                                        <label> Puja Simplified</label><textarea onclick="ckeFunction()" class="form-control" name="pujasimplified" rows="4"
                                            placeholder="hmm.." id="editor3"></textarea>
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
    
    <script>
    function ckeFunction(){

        CKEDITOR.replace( 'editor1' ); // (In case of angular):__ declare var CKEDITOR: any; (If error occurs)
        CKEDITOR.replace( 'editor2' ); // (In case of angular):__ declare var CKEDITOR: any; (If error occurs)
        CKEDITOR.replace( 'editor3' ); // (In case of angular):__ declare var CKEDITOR: any; (If error occurs)
    }
   
    </script>
    @include('admin.footer')
</body>
