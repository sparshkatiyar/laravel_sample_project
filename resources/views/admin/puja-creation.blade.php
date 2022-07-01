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
                                <form>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Puja name</label><input type="text" class="form-control"
                                                placeholder="Name" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Puja icon/Image</label><input type="file" class="form-control"
                                                placeholder="Enter date" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Puja Advantage</label><select class="form-control c-select">
                                            <option></option>
                                            <option>Website Errors</option>
                                            <option>Product Services</option>
                                            <option>Login/Signup Problem</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label> Puja Description</label><textarea class="form-control" rows="4"
                                            placeholder="hmm.."></textarea>
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
