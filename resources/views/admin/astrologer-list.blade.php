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
                                                    <a class="dropdown-item download"  href="#">View </a>
                                                    <a  class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash">Delete item</a>
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
                               
                            </div>
                        </div>
                        <div id="modal" class="modal fade" data-backdrop="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">New invoice</h5>
                                    </div>
                                    <div class="modal-body p-4">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">First Name</label><input type="text"
                                                        class="form-control" placeholder="First name" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Last Name</label><input type="text"
                                                        class="form-control" placeholder="Last name" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Email</label><input type="email"
                                                        class="form-control" placeholder="Email" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">Password <small>(Register
                                                            account)</small></label><input type="password"
                                                        class="form-control" placeholder="Password" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted">Address</label><input type="text"
                                                    class="form-control" placeholder="1234 Main St" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-muted">City</label><input type="text"
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState"
                                                        class="text-muted d-block">State</label><select
                                                        class="custom-select">
                                                        <option selected="selected">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label class="text-muted">Zip</label><input type="text"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.footer')
</body>

</html>