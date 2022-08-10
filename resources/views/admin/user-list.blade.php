<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>userList | Astro user - </title>
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
                            <h2 class="text-md text-highlight">UserList</h2>
                            <small class="text-muted">Astrouser have user</small>
                        </div>
                        <div class="flex"></div>
                        <!-- <div>
                            <a href="{{url('admin-panel/user-creation')}}" class="btn btn-md text-muted"><span
                                    class="d-none d-sm-inline mx-1">Create user</span>
                                <i data-feather="arrow-right"></i></a>
                        </div> -->
                    </div>
                </div>
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
                                            <th class="text-muted sort sortable" style="width: 120px"
                                                data-sort="item-company">
                                                Name
                                            </th>
                                            <th class="text-muted" style="width: 120px">Mobile No</th>
                                            <th class="text-muted sort sortable" data-sort="item-amount"
                                                style="width: 60px">
                                                Email
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-badge"
                                                style="width: 60px">
                                                No.Booking
                                            </th>
                                            <!-- <th class="text-muted" >DOB</th>
                                            
                                            <th class="text-muted" style="width: 120px">Birth Place</th> -->
                                            <th class="text-muted" style="width: 120px">Date</th>
                                            <th class="text-muted" style="width: 120px">Action</th>
                                            <th style="width: 50px"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach(@$userList as $user)
                                        <tr class="v-middle" data-id="20">
                                            <td>
                                                <label class="ui-check m-0"><input type="checkbox" name="id"
                                                        value="20" />
                                                    <i></i></label>
                                            </td>
                                            <td style="min-width: 30px; text-align: center">
                                                <small class="text-muted"> {{$user->id}}</small>
                                            </td>
                                            <td class="flex">
                                                <a href="page.invoice.detail.html"
                                                    class="item-company ajax h-1x">{{$user->first_name}}</a>
                                                <div class="item-mail text-muted h-1x d-none d-sm-block">

                                                </div>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                    {{$user->country_code}}-{{$user->mobile_number}}
                                                </div>
                                            </td>
                                            <td>
                                                <span class="item-amount d-none d-sm-block text-sm">
                                                    {{$user->email}}</span>
                                            </td>
                                            <!-- <td>
                                                @if($user->gender ==1)
                                                    <span class="item-badge badge text-uppercase bg-success"> 
                                                        male
                                                    </span>
                                                @else 
                                                <span class="item-badge badge text-uppercase bg-success"> 
                                                        female
                                                    </span>   
                                                @endif
                                            </td> -->
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                    1
                                                </div>
                                            </td>

                                            <!-- <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$user->date_of_birth}}
                                                </div>
                                            </td> -->
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                    {{$user->created_at}}
                                                </div>
                                            </td>


                                            <td>
                                                <div class="item-action dropdown">
                                                    <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                        <a class="dropdown-item download"
                                                            onclick="viewUser({{$user}})">View </a>
                                                        <a class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item trash"
                                                            onclick="deleteUser({{$user->id}})">Delete item</a>
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
                                {!! $userList->appends(['sort' => 'id'])->links() !!}
                                <!-- {!! $userList->links() !!} -->
                                <ul class="pagination">
                                    <!-- <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous"><span
                                                aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span></a>
                                    </li> -->
                                    <!-- <li class="page-item active">
                                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                    </li> -->
                                    <!-- <li class="page-item active">
                                        <a class="page-link" href="#">1 <span class="sr-only">{!! $userList->links() !!}</span></a>
                                    </li> -->
                                    <!-- <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                   
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next"><span
                                                aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span></a>
                                    </li> -->
                                </ul>
                                <!-- <small class="text-muted py-2 mx-2">Total <span id="count">15</span> items</small> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="userInfoModel" class="modal fade  " data-backdrop="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> User Details</h5>
                    <!-- </div> -->
                    <button class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="text-muted"> Name</label><input type="text" class="form-control"
                                    id="first_name" placeholder="Name" />
                            </div>
                            <!-- <div class="form-group col-md-6">
                                <label class="text-muted">Last Name</label><input type="text"
                                    class="form-control" placeholder="Last name" />
                            </div> -->
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Email</label><input type="email" class="form-control"
                                    placeholder="Email" id="email" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Mobile No.</label><input type="phone" class="form-control"
                                    placeholder="Phone" id="mobile_number" />
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Birth Time <small></small></label><input type="text"
                                    id="birth_time" class="form-control" placeholder="Birth Time" id="birth_time" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Birth Place</label><input id="birth_place" type="text"
                                    class="form-control" placeholder="1234 Main St" />
                            </div>
                        </div>

                        <!-- <button type="submit" class="btn btn-primary">
                            Submit
                        </button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="deleteUser" class="modal fade" data-backdrop="true" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title text-md">Delete this user !</div><button class="close"
                        data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="p-4 text-center">
                    <p>Woohoo, you're going to delete user!</p>
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
    function viewUser(userInfo) {
        $('#userInfoModel').modal('show');
        $("#first_name").val(userInfo.first_name);
        $("#email").val(userInfo.email);
        $("#mobile_number").val(userInfo.mobile_number);
        $("#birth_time").val(userInfo.birth_time);
        $("#birth_place").val(userInfo.birth_place);
        // alert(userInfo.mobile_number);
    }

    function deleteUser() {
        $('#deleteUser').modal('show');
    }

    function cancel() {
        $('#deleteUser').modal('hide');
    }
    </script>

    @include('admin.footer')
</body>

</html>