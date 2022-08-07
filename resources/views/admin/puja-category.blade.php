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
                            <h2 class="text-md text-highlight">Puja Category</h2>
                            <small class="text-muted">Add content of category</small>
                        </div>
                        <div class="flex"></div>
                        <div>
                            <a href="{{url('admin-panel/puja-category')}}"><span class="d-none d-sm-inline mx-1">Puja list</span>
                                <i data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row">
                            <div class="col-sm-8 col-md-9">
                                
                                <!-- <p><strong>Fill flowing Details <Details></Details></strong></p> -->
                                <form method="post" action="{{url('admin-panel/puja-category')}}"  enctype="multipart/form-data">
                                @csrf 
                                    
                                   
                                    <div class="form-group">
                                        <label>Puja with samagry</label><textarea onclick="ckeFunction()" type="text" name="category_samagri" rows="4" class="form-control"
                                                placeholder="Advantage">{{$category_samagri->name_desc}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label> Puja without samagry</label><textarea  onclick="ckeFunction()" class="form-control" name="category_wsamagri" rows="4"
                                            placeholder="hmm.." >{{$category_wsamagri->name_desc}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label> Puja all</label><textarea onclick="ckeFunction()" class="form-control" name="category_all" rows="4"
                                            placeholder="hmm.." >{{$category_all->name_desc}}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                       Save
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
