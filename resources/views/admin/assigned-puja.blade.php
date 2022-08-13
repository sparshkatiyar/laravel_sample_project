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
                            <h2 class="text-md text-highlight">Assined Puja List</h2>
                            <small class="text-muted">Your booking puja assigned to pandit</small>
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
                                            <th class="text-muted" style="width: 120px">Date</th>
                                            <th class="text-muted" style="width: 120px">Action</th>
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
                                                    <span class="item-badge badge text-uppercase bg-success"> 
                                                        see details
                                                    </span>
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
                                        </tr>
                                      @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex">
                            {!! $bookingList->appends(['sort' => 'id'])->links() !!}
                               
                            </div>
                        </div>
                        <div id="pandit" class="modal fade" data-backdrop="true">
                            <div class="modal-dialog">
                          
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Assign Pandit</h5>
                                    </div>
                                    <div class="modal-body p-4">
                                        <form action="{{url('admin-panel/assing-pandit')}}" method="post">
                                            @csrf
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputState"
                                                    class="text-muted d-block">Pandit</label>
                                                    <select name="pandit_id"         class="custom-select">
                                                        <option selected="selected" >Choose...</option>
                                                        @foreach($panditList as $assign)
                                                        <option value="{{$assign->id}}">{{$assign->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                               
                                            </div>
                                            <input type="text" name="booking_id" id="booking_id" hidden >
                                            <button type="submit" class="btn btn-primary">
                                                Assign puja now
                                            </button>
                                        </form>
                                    </div>
                                </div>
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
</script>
</body>

</html>