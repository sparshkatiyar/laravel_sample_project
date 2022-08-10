<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>panditList | Astro Pandit - </title>
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
                            <h2 class="text-md text-highlight">PanditList</h2>
                            <small class="text-muted">Astropandit have pandit</small>
                        </div>
                        <div class="flex"></div>
                        <!-- <div>
                            <a href="{{url('admin-panel/pandit-creation')}}" class="btn btn-md text-muted"><span
                                    class="d-none d-sm-inline mx-1">Create pandit</span>
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
                                                Name
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-badge"
                                                style="width: 60px">
                                                Phone
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-amount"
                                                style="width: 60px">
                                                Email
                                            </th>
                                            
                                            <th class="text-muted" >No  Pooja Performed</th>
                                            <!-- <th class="text-muted" style="width: 120px">Skill Primary</th>
                                            <th class="text-muted" style="width: 120px">Skill  Secondary</th> -->
                                            <th class="text-muted" style="width: 120px">Date</th>
                                            <th class="text-muted" style="width: 120px">Action</th>
                                            <th style="width: 50px"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach(@$panditList as $pandit)
                                        <tr class="v-middle" data-id="20">
                                            <td>
                                                <label class="ui-check m-0"><input type="checkbox" name="id"
                                                        value="20" />
                                                    <i></i></label>
                                            </td>
                                            <td style="min-width: 30px; text-align: center">
                                                <small class="text-muted">  {{$pandit->id}}</small>
                                            </td>
                                            <td class="flex">
                                                <a href="page.invoice.detail.html"
                                                    class="item-company ajax h-1x">{{$pandit->name}}</a>
                                                <div class="item-mail text-muted h-1x d-none d-sm-block">
                                           
                                                </div>
                                            </td>
                                            <td>
                                                <span  style="min-width: 120px;"class="item-amount d-none d-sm-block text-sm">     N/A</span>
                                            </td>
                                            <td>
                                                <span class="item-amount d-none d-sm-block text-sm">     {{$pandit->email}}</span>
                                            </td>
                                            <td>
                                                <span style="min-width: 60px;" class="item-amount d-none d-sm-block text-sm">     N/A</span>
                                            </td>
                                            <td>
                                                <span class="item-date text-muted text-sm d-none d-md-block">                {{$pandit->created_at}}</span>
                                            </td>
                                            <!-- <td>
                                                @if($pandit->gender ==1)
                                                    <span class="item-badge badge text-uppercase bg-success"> 
                                                        male
                                                    </span>
                                                @else 
                                                <span class="item-badge badge text-uppercase bg-success"> 
                                                        female
                                                    </span>   
                                                @endif
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$pandit->dob}}
                                                </div>
                                            </td> -->
                                            <!-- <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$pandit->skill_primary}}
                                                </div>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$pandit->skill_secondry}}
                                                </div>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$pandit->image}}
                                                </div>
                                            </td> -->
                                            
                                           
                                            <td>
                                                <div class="item-action dropdown">
                                                    <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                    <a class="dropdown-item download"  onclick="viewPandit({{$pandit}})">View </a>
                                                    <a  class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash" onclick="deletePandit({{$pandit->id}})">Delete item</a>
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
                            {!! $panditList->appends(['sort' => 'id'])->links() !!}
                                <!-- <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous"><span
                                                aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next"><span
                                                aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span></a>
                                    </li>
                                </ul>
                                <small class="text-muted py-2 mx-2">Total <span id="count">15</span> items</small> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="panditInfoModel" class="modal fade  " data-backdrop="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Pandit Details</h5>
                    <!-- </div> -->
                    <button class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted"> Name</label><input type="text" class="form-control"
                                    id="first_name" placeholder="Name" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Email</label><input type="email" class="form-control"
                                placeholder="Email" id="email" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">DOB</label><input type="text"
                                    class="form-control" placeholder="Last name" id="dob"/>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Gender.</label><input type="phone" class="form-control"
                                    placeholder="Phone" id="gender" />
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="text-muted">Register As</label><input type="text"
                                    class="form-control" placeholder="Last name" id="reg_as"/>
                            </div>
                            

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Primary Skill <small></small></label><input type="text"
                                    class="form-control" placeholder="Primary Skill" id="skill_primary" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Secondry Skill</label><input id="skill_secondry" type="text"
                                    class="form-control" placeholder="Secondry Skill" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Primary Skill <small></small></label><input type="text"
                                    class="form-control" placeholder="Primary Skill" id="consult_time" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Secondry Skill</label><input id="other_platform" type="text"
                                    class="form-control" placeholder="Secondry Skill" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Primary Skill <small></small></label><input type="text"
                                    class="form-control" placeholder="Primary Skill" id="app_or_website" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">UID No.</label><input id="uid_number" type="text"
                                    class="form-control" placeholder="UID No." />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Experies <small></small></label><input type="text"
                                    class="form-control" placeholder="Experties" id="experties" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Chat Charge</label><input id="charge_chat" type="text"
                                    class="form-control" placeholder="Chat charge" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">Call Charge<small></small></label><input type="text"
                                    class="form-control" placeholder="Call Charge id="charge_call" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">Video Chage</label><input id="charge_video" type="text"
                                    class="form-control" placeholder="Video Charge" />
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

    <div id="deletePandit" class="modal fade" data-backdrop="true" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title text-md">Delete this pandit !</div><button class="close"
                        data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="p-4 text-center">
                    <p>Woohoo, you're going to delete paandit!</p>
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
    function viewPandit(panditInfo) {
        $('#panditInfoModel').modal('show');
        $("#name").val(panditInfo.name);
        $("#email").val(panditInfo.email);
        $("#reg_as").val( panditInfo.reg_as);
        $("#skill_primary").val(panditInfo.skill_primary);
        $("#gender").val(panditInfo.gender);
        $("#dob").val(panditInfo.dob);
        $("#skill_secondry").val(panditInfo.skill_secondry);
        $("#consult_time").val(panditInfo.consult_time);
        $("#other_platform").val(panditInfo.other_platform);
        $("#app_or_website").val(panditInfo.app_or_website);
        $("#uid_number").val(panditInfo.uid_number);
        $("#experties").val(panditInfo.experties);
        $("#charge_chat").val(panditInfo.charge_chat);
        $("#charge_call").val(panditInfo.charge_call);
        $("#charge_video").val(panditInfo.charge_video);
        
    }

    function deletePandit() {
        $('#deletePandit').modal('show');
    }

    function cancel() {
        $('#deletePandit').modal('hide');
    }
    </script>
    @include('admin.footer')
</body>

</html>