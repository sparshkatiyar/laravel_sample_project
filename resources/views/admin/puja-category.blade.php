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

                        <!-- <div>
                            <a href="{{url('admin-panel/puja-category')}}"><span class="d-none d-sm-inline mx-1">Puja list</span>
                                <i data-feather="arrow-right"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row">
                            <div class="col-sm-8 col-md-9">
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
                                <!-- <p><strong>Fill flowing Details <Details></Details></strong></p> -->
                                <form method="post" action="{{url('admin-panel/puja-category')}}"  enctype="multipart/form-data" id="create-pooja-category">
                                @csrf 
                                   <div class="form-group">
                                        <label>Select Pooja<span class="text-danger">*</span></label>
                                        <select name="pujaname" class="form-control c-select" required>
                                        <option value="">Select pooja Name</option>
                                        @if(!empty($allpooja))
                                        @foreach($allpooja as $pooja)
                                        <option value="{{$pooja->id}}"@if(!empty($poojacat) && $poojacat->pooja_id==$pooja->id) selected @endif>{{$pooja->name ?? ''}}</option>
                                        @endforeach
                                        @endif
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Standard<span class="text-danger">*</span></label>
                                        <textarea  type="text" name="standard_pooja" rows="4" class="form-control"
                                                placeholder="Standard" required>{{@$category_samagri->standard_pooja}}
                                        </textarea>
                                    </div> -->

                                    <div class="form-group">
                                    <label>Standard<span class="text-danger">*</span></label><textarea   class="form-control" name="standard_pooja" rows="4"
                                            placeholder="Standard">{{!empty($poojacat) ? $poojacat->standard_pooja : ''}}</textarea>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Premium<span class="text-danger">*</span></label>
                                        <textarea  type="text" name="premium_pooja" rows="4" class="form-control"
                                                placeholder="Premium" required>{{@$category_samagri->premium_pooja}}
                                        </textarea>
                                    </div> -->
                                    <div class="form-group">
                                    <label>Premium<span class="text-danger">*</span></label><textarea   class="form-control" name="premium_pooja" rows="4"
                                            placeholder="Premium">{{!empty($poojacat) ? $poojacat->premium_pooja : ''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                    <label>Grand<span class="text-danger">*</span></label><textarea   class="form-control" name="grand_pooja" rows="4"
                                            placeholder="Grand">{{!empty($poojacat) ? $poojacat->grand_pooja : ''}}</textarea>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Grand<span class="text-danger">*</span></label>
                                        <textarea  type="text" name="grand_pooja" rows="4" class="form-control"
                                                placeholder="Grand" required>
                                        </textarea>
                                    </div> -->

                                    <!-- <div class="form-group">
                                        <label>Puja with samagry<span class="text-danger">*</span></label>
                                        <textarea  type="text" name="category_samagri" rows="4" class="form-control"  placeholder="Puja with samagry" required>
                                        </textarea>
                                    </div> -->
                                    <!-- Standard Pooja samagry -->
                                    <div class="form-group">
                                        <label>Standard Puja with samagri<span class="text-danger">*</span></label><textarea   class="form-control" name="standard_category_samagri" rows="4"
                                            placeholder="Puja with samagry">{{!empty($poojacat) ? $poojacat->category_samagri : ''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Standard Puja without samagri<span class="text-danger">*</span></label><textarea   class="form-control" name="standard_category_wsamagri" rows="4"
                                            placeholder="Puja without samagry">{{!empty($poojacat) ? $poojacat->category_wsamagri : ''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Standard Puja all<span class="text-danger">*</span></label>
                                        <textarea  class="form-control" name="standard_category_all" rows="4"
                                            placeholder="Puja all">{{!empty($poojacat) ? $poojacat->category_all : ''}}</textarea>
                                    </div>
                                    <!-- End section -->

                                    <!-- Premium Pooja samagry -->
                                    <div class="form-group">
                                        <label>Premium Puja with samagri<span class="text-danger">*</span></label><textarea   class="form-control" name="premium_category_samagri" rows="4"
                                            placeholder="Puja with samagry">{{!empty($poojacat) ? $poojacat->premium_category_samagri : ''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Premium Puja without samagri<span class="text-danger">*</span></label><textarea   class="form-control" name="premium_category_wsamagri" rows="4"
                                            placeholder="Puja without samagry">{{!empty($poojacat) ? $poojacat->premium_category_wsamagri : ''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Premium Puja all<span class="text-danger">*</span></label>
                                        <textarea  class="form-control" name="premium_category_all" rows="4"
                                            placeholder="Puja all">{{!empty($poojacat) ? $poojacat->premium_category_all : ''}}</textarea>
                                    </div>
                                    <!-- End Section -->

                                    <!-- Grand Pooja samagry -->
                                    <div class="form-group">
                                        <label>Grand Puja with samagri<span class="text-danger">*</span></label><textarea   class="form-control" name="grand_category_samagri" rows="4"
                                            placeholder="Puja with samagry">{{!empty($poojacat) ? $poojacat->grand_category_samagri : ''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Grand Puja without samagri<span class="text-danger">*</span></label><textarea   class="form-control" name="grand_category_wsamagri" rows="4"
                                            placeholder="Puja without samagry">{{!empty($poojacat) ? $poojacat->grand_category_wsamagri : ''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Grand Puja all<span class="text-danger">*</span></label>
                                        <textarea  class="form-control" name="grand_category_all" rows="4"
                                            placeholder="Puja all">{{!empty($poojacat) ? $poojacat->grand_category_all : ''}}</textarea>
                                    </div>
                                    <!-- End Section -->
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
                                                <span class="nav-text">Standard</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-info mx-1"></span>
                                                <span class="nav-text">Premium</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span
                                                    class="badge badge-circle text-success mx-1"></span>
                                                <span class="nav-text">Grand</span></a>
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
