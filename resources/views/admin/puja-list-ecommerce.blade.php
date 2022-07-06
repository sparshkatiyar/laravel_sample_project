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
                                            <th class="text-muted sort sortable"  data-sort="item-company">
                                                Samagri Price
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-amount"
                                                >
                                                samll  puja rice
                                            </th>
                                            <th class="text-muted sort sortable" data-sort="item-badge"
                                                >
                                                Name
                                            </th>
                                            <th class="text-muted" style="width: 120px">Base price</th>
                                            <th class="text-muted" style="width: 120px">Large Puja price</th>
                                            <!-- <th class="text-muted" style="width: 120px">Icon/Image</th> -->
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
                                            <td class="flex">
                                                <a href="page.invoice.detail.html"
                                                    class="item-company ajax h-1x">{{$puja->puja_samagri_price}}</a>
                                                <div class="item-mail text-muted h-1x d-none d-sm-block">
                                           
                                                </div>
                                            </td>
                                            <td>
                                                <span class="item-amount d-none d-sm-block text-sm">  
                                                       {{$puja->puja_price_samall}}</span>
                                            </td>
                                            <td>
                                                <span class="item-badge badge text-uppercase bg-success"> 
                                                        {{$puja->puja_id->name}}
                                                    
                                                </span>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$puja->puja_base_price}}
                                                </div>
                                            </td>
                                            <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$puja->puja_price_large}}
                                                </div>
                                            </td>
                                            <!-- <td class="no-wrap">
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                {{$puja->image}}.
                                                </div>
                                            </td> -->
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
                                <ul class="pagination">
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
                                <small class="text-muted py-2 mx-2">Total <span id="count">15</span> items</small>
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