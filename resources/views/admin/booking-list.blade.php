<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pooja Booking | Astro user - </title>
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
                            <h2 class="text-md text-highlight">BookingList</h2>
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
                                            <th class="text-muted sort sortable" style="width: 120px" data-sort="item-company">
                                                Puja Name
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-amount"
                                                style="width: 100px">
                                                Order price
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-badge"
                                                style="width: 60px">
                                                Address
                                            </th>
                                            <th class="text-muted" >UserInfo</th>
                                            <th class="text-muted" style="width: 120px">Payment info</th>
                                            <th class="text-muted" style="width: 120px">Assign pandit</th>
                                            <th class="text-muted" style="width: 120px">Pooja Date/Time</th>
                                            <!-- <th class="text-muted" style="width: 120px">Action</th> -->
                                            <th style="width: 50px"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach(@$bookingList as $user)
                                        <tr class="v-middle" data-id="20">
                                            <td>
                                                <label class="ui-check m-0"><input type="checkbox" name="id"
                                                        value="20" />
                                                    <i></i></label>
                                            </td>
                                            <td style="min-width: 30px; text-align: center">
                                                <small class="text-muted">  {{$user->id}}</small>
                                            </td>
                                            <td class="flex">
                                                <a href="page.invoice.detail.html"
                                                    class="item-company ajax h-1x">{{$user->ecomm_puja_id->puja_id->name}}</a>
                                                <div class="item-mail text-muted h-1x d-none d-sm-block">
                                           
                                                </div>
                                            </td>
                                            <td>
                                                <span class="item-amount d-none d-sm-block text-sm"> {{$user->price_total}}/-</span>
                                            </td>
                                            <td>
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                    <a class="item-badge badge text-uppercase bg-success" onclick="addressDetails({{$user->address_id}})"> 
                                                        see details
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                    <a class="item-badge badge text-uppercase bg-success" onclick="userDetails({{$user->user_details}})"> 
                                                        see details
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                    <span class="item-badge badge text-uppercase bg-success"> 
                                                        see details
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                @if($user->pandit_id)
                                                    <button class="btn w-sm mb-1 btn-success"> 
                                                        see details
                                                    </button>
                                                @else 
                                                    <button value="{{$user->id}}" class="btn w-sm mb-1 btn-outline-warning assing"  > 
                                                        assign pandit
                                                    </button>   
                                                @endif
                                                    
                                                </div>
                                            </td>
                                            
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$user->created_at}}
                                                </div>
                                            </td>
                                            

                                        </tr>
                                      @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex">
                            {!! $bookingList->appends(['sort' => 'id'])->links() !!}
                               
                            </div>
                        </div>
                       
                        <div id="modalToast" class="modal fade" data-backdrop="false">
                            <div class="modal-dialog">
                            <div class="alert alert-success" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-line join="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg> <span class="mx-2">Pandit assign to ecoomerce puja is successful !!</span></div>
                               
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

    <div id="addressInfoModel" class="modal fade  " data-backdrop="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Address Details</h5>
                    <!-- </div> -->
                    <button class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="text-muted">Contact Name</label><input type="text" class="form-control"
                                    id="contact_name" placeholder="Contact Name" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Contact Number</label><input type="text"
                                    class="form-control" placeholder="Contact  Number" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Flat No</label><input type="text" class="form-control"
                                    placeholder="Flat No" id="flat_no" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Locality No.</label><input type="text" class="form-control"
                                    placeholder="Phone" id="locality_no" />
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">City <small></small></label><input type="text"
                                    id="city" class="form-control" placeholder="City" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Pincode</label><input id="pincode" type="text"
                                    class="form-control" placeholder="1234 Main St" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Town <small></small></label><input type="text"
                                    class="form-control" placeholder="City" id="town" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">State</label><input id="state" type="text"
                                    class="form-control" placeholder="1234 Main St" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="text-muted">Locality Address <small></small></label><input type="text"
                                    class="form-control" placeholder="City" id="address" />
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
    
    @include('admin.footer')
    <script>
  
    $(document).ready(function(){
        $(".assing").click(function(){
            var puaj_id = $(this).attr('value');
            $("#booking_id").val(puaj_id);           
            $('#pandit').modal('show');
            // $('#modalToast').modal('show').delay(2000).fadeOut();
    
        
        });
    });
    function userDetails(userInfo) {
        $('#userInfoModel').modal('show');
        $("#first_name").val(userInfo.first_name);
        $("#email").val(userInfo.email);
        $("#mobile_number").val(userInfo.mobile_number);
        $("#birth_time").val(userInfo.birth_time);
        $("#birth_place").val(userInfo.birth_place);
    }

    function paymentDetails(userInfo) {
        $('#paymentInfoModel').modal('show');
        $("#name").val(userInfo.name);
        $("#image").val(userInfo.image);
        $("#type").val(userInfo.type);
    }

    function addressDetails(userInfo) {
        $('#addressInfoModel').modal('show');
        $("#contact_name").val(userInfo.contact_name);
        $("#contact_no").val(userInfo.contact_no);
        $("#flat_no").val(userInfo.flat_no);
        $("#locality_no").val(userInfo.locality_no);
        $("#city").val(userInfo.city);
        $("#pincode").val(userInfo.pincode);
        $("#address").val(userInfo.address);
        $("#town").val(userInfo.town);
        $("#state").val(userInfo.state);
    }
</script>
</body>

</html>