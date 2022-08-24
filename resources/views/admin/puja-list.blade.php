<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Puja List | Astro Pandit - </title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/site.min.css')}}" />
</head>

<body class="layout-row">
    @include('admin.sidebar')
    <div id="main" class="layout-column flex">
        @include('admin.header')
        <div id="content" class="flex">
            <div>
                <div class="page-hero page-container" id="page-hero">
                    <div class="padding d-flex">
                        <div class="page-title">
                            <h2 class="text-md text-highlight">Puja List</h2>
                            <small class="text-muted">Astropandit have puja </small>
                        </div>
                        <div class="flex"></div>
                        <div>
                            <a href="{{url('admin-panel/puja-creation')}}" class="btn btn-md text-muted"><span
                                    class="d-none d-sm-inline mx-1">Create Puja</span>
                                <i data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                </div>
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
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div id="invoice-list" data-plugin="invoice">
                            <div class="toolbar">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-icon btn-white" data-toggle="tooltip" title="Trash"
                                        id="btn-trash">
                                        <i data-feather="trash" class="text-muted"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-white sort hide" data-sort="item-title"
                                        data-toggle="tooltip" title="Sort">
                                        <i class="sorting"></i>
                                    </button>
                                </div>
                                <form class="flex">
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control form-control-theme form-control-sm search"
                                            placeholder="Search" required />
                                        <span class="input-group-append"><button class="btn btn-white no-border btn-sm"
                                                type="button">
                                                <span class="d-flex text-muted"><i
                                                        data-feather="search"></i></span></button></span>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-theme table-row v-middle">
                                    <thead>
                                        <tr>
                                            <th style="width: 20px"></th>
                                            <th class="text-muted sort sortable" data-sort="id"
                                                style="width: 40px; text-align: center">
                                                No.
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-badge"
                                                style="width: 60px">
                                                Name
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-company">
                                                Type
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-amount"
                                                style="width: 60px">
                                                Category
                                            </th>
                                            
                                            <!-- <th class="text-muted" >Description</th> -->
                                            <!-- <th class="text-muted" style="width: 120px">Advantage</th> -->
                                            <th class="text-muted" style="width: 120px">Icon/Image</th>
                                            <th class="text-muted" style="width: 120px">Date</th>
                                            <th class="text-muted" style="width: 120px">Action</th>
                                            <th style="width: 50px"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach(@$pujaList as $puja)
                                        <tr class="v-middle" data-id="20">
                                            <td>
                                                <label class="ui-check m-0"><input type="checkbox" name="id"
                                                        value="20" />
                                                    <i></i></label>
                                            </td>
                                            <td style="min-width: 30px; text-align: center">
                                                <small class="text-muted">  {{$puja->id}}</small>
                                            </td>
                                            <td>
                                                <span class="item-badge badge text-uppercase bg-success">     {{$puja->name}}</span>
                                            </td>
                                            <td class="flex">
                                                <a href="page.invoice.detail.html"
                                                    class="item-company ajax h-1x">{{$puja->type}}</a>
                                                <div class="item-mail text-muted h-1x d-none d-sm-block">
                                           
                                                </div>
                                            </td>
                                            <td>
                                            @if(@$puja->category == "small")
                                                <span class="item-company ajax h-1x">Normal</span>
                                                @elseif(@$puja->category == "medium")
                                                <span class="item-company ajax h-1x">Premium</span>
                                                @else
                                                <span class="item-company ajax h-1x">Grand</span>
                                                @endif
                                                
                                            </td>
                                            
                                            <!-- <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$puja->desc}}
                                                </div>
                                            </td> -->
                                            <!-- <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$puja->advantage}}
                                                </div>
                                            </td> -->
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                    <img src="{{$puja->image}}" alt="" style="widh:50px;height:50px;">
                                                
                                                </div>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$puja->created_at}}
                                                </div>
                                            </td>
                                           
                                            <td>
                                                <div class="item-action dropdown">
                                                    <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                        <a class="dropdown-item" onclick="poojaDetails({{$puja}})">See details </a>
                                                        <a href="{{'puja-edit'}}/{{$puja->id}}" class="dropdown-item edit" >Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <!-- <a class="dropdown-item trash" onclick="deletePooja({{$puja->id}})">Delete item</a> -->
                                                        <a class="dropdown-item trash" href="{{'puja-delete'}}/{{$puja->id}}" onclick="return confirm('Are you sure you want to delete this pooja')">Delete Pooja</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                      @endforeach
                                        <!-- <tr class="v-middle" data-id="11">
                                            <td>
                                                <label class="ui-check m-0"><input type="checkbox" name="id"
                                                        value="11" />
                                                    <i></i></label>
                                            </td>
                                            <td style="min-width: 30px; text-align: center">
                                                <small class="text-muted">11</small>
                                            </td>
                                            <td class="flex">
                                                <a href="page.invoice.detail.html"
                                                    class="item-company ajax h-1x">KissKiss</a>
                                                <div class="item-mail text-muted h-1x d-none d-sm-block">
                                                    kenneth-pierce@kisskiss.com
                                                </div>
                                            </td>
                                            <td>
                                                <span class="item-amount d-none d-sm-block text-sm">240</span>
                                            </td>
                                            <td>
                                                <span class="item-badge badge text-uppercase bg-success">Paid</span>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                    20 minutes ago
                                                </div>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown">
                                                    <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                        <a class="dropdown-item" href="#">See detail </a><a
                                                            class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex">
                            {!! $pujaList->appends(['sort' => 'id'])->links() !!}
                               
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="poojaInfoModel" class="modal fade  " data-backdrop="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Pooja Details</h5>
                    <!-- </div> -->
                    <button class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted"> Name</label><input type="text" class="form-control"
                                    id="name" placeholder="Name" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Image</label><input type="text"
                                    class="form-control" placeholder="Last name" id="image"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Category</label>
                                <input type="text" class="form-control" placeholder="Category" id="category" />
                                    <!-- <select class="form-control" name="category" id="category">
                                        <option value="small">Normal</option>
                                        <option value="medium">Premium</option>
                                        <option value="large">Grand</option>
                                    </select> -->
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Type</label><input type="text"
                                    class="form-control" placeholder="Last name" id="type"/>
                            </div>

                        </div>
                        <!-- <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="text-muted">Advantage <small></small></label><textarea 
                                    id="advantage" class="form-control" placeholder="Advantage"  ></textarea>
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="text-muted">Description<small></small></label><textarea
                                    class="form-control" placeholder="Description" id="desc" ></textarea>
                            </div>
                           
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="text-muted">Simplified<small></small></label><textarea
                                    id="pujasimplified" class="form-control" placeholder="Simplified" ></textarea   >
                            </div>
                           
                        </div> -->

                        <!-- <button type="submit" class="btn btn-primary">
                            Submit
                        </button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="deletePooja" class="modal fade" data-backdrop="true" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title text-md">Delete this pooja !</div><button class="close"
                        data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="p-4 text-center">
                    <p>Woohoo, you're going to delete pooja!</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button> 
                    <button type="button" class="btn btn-primary"  data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    function poojaDetails(userInfo) {
        $('#poojaInfoModel').modal('show');
        $("#name").val(userInfo.name);
        $("#image").val(userInfo.image);
        $("#type").val(userInfo.type);
        if(userInfo.category == "small"){
            $("#category").val("Normal");
        }
        else if(userInfo.category == "medium"){
            $("#category").val("Premium");
        }
        else{
            $("#category").val("Grand");
        }
        
        $("#advantage").text(userInfo.advantage);
        $("#desc").text(userInfo.desc);
        $("#pujasimplified").text(userInfo.pujasimplified);
        // alert(userInfo.mobile_number);
    }

    function deletePooja() {
        $('#deletePooja').modal('show');
    }

    function cancel() {
        $('#deletePooja').modal('hide');
    }
    
    </script>
    
    @include('admin.footer')
</body>

</html>