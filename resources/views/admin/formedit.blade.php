
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit {{$data->degree}} {{$data->fname}} {{$data->lname}}</h4>
                        <p class="card-description">
                            Form For Change <span style="font-weight: bold">Id: {{$data->id}}</span> Who is <span style="font-weight: bold">{{$data->fname}} {{$data->lname}}</span>
                        </p>
                        <form method="post" action="/admin/teachers/update/{{$data->id}}" class="forms-sample">
                        @csrf
                        <!-- FIRST NAME -->
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input required type="text" class="form-control" id="fname" name="fname" value="{{$data->fname}}" >
                            </div>
                            <!-- LAST NAME -->
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input value="{{$data->lname}}" type="text" class="form-control" id="lname" name="lname" ">
                            </div>
                            <!-- GENDER -->
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" id="optionsRadios4"disabled="" checked="">
                                                {{$data->gender}}
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label  class="form-check-label">
                                                <input type="radio" required class="form-check-input" name="gender" id="optionsRadios1" value="Male" >
                                                Male
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio"required class="form-check-input" name="gender" id="optionsRadios2" value="Female">
                                                Female
                                                <i class="input-helper"></i></label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- EMAIL -->
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input value="{{$data->email}}" type="email" name="email" class="form-control" id="email" >
                            </div>
                            <!-- B DATE -->
                            <div class="form-group">
                                <label for="bdate">Birth Date</label>
                                <input required type="date" class="form-control" id="bdate" name="bdate" value="{{$data->bdate}}">
                            </div>
                            <!-- R DATE -->
                            <div class="form-group">
                                <label for="rdate">Birth Date</label>
                                <input required type="date" class="form-control" id="rdate" name="rdate" value="{{$data->rdate}}">
                            </div>

                            <!-- ABOUT HER -->
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">About Academical</h4>
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <select required name="degree" class="js-example-basic-single w-100">
                                                <option selected value="Professor">{{$data->degree}}</option>
                                                <option value="Professor">Professor</option>
                                                <option value="Associate Professor">Associate Professor</option>
                                                <option value="Assistant Professor">Assistant Professor</option>
                                                <option value="Research Assistant">Research Assistant</option>
                                                <option value="Prelector">Prelector</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Lessons</label>
                                            <select  required name="lessons" class="js-example-basic-multiple w-100">
                                                <option selected value="Computer">{{$data->lessons}}</option>
                                                <option value="Computer">Computer</option>
                                                <option value="Architect">Architect</option>
                                                <option value="Machine">Machine</option>
                                                <option value="Electric">Electric</option>
                                                <option value="Civil">Civil</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- DESCRIPTION -->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input value="{{$data->description}}" type="text" class="form-control" id="description" name="description">
                            </div>


                            <button type="submit" class="btn btn-primary me-2">Update</button>

                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->