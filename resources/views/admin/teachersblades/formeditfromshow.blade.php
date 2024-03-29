
<div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit {{$data->degree}} {{$data->fname}} {{$data->lname}}</h4>
                        <p class="card-description">
                            Form For Change <span style="font-weight: bold">Id: {{$data->id}}</span> Who is <span style="font-weight: bold">{{$data->fname}} {{$data->lname}}</span>
                        </p>
                        <form method="post" action="{{route('admin.teachers.supdate',['id'=>$data->id])}}" enctype="multipart/form-data" class="forms-sample">
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
                                <label for="rdate">Retire Date</label>
                                <input type="date" class="form-control" id="rdate" name="rdate" value="{{$data->rdate}}">
                            </div>

                            <!-- ABOUT HER -->
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">About Academical</h4>
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <select required name="degree" class="js-example-basic-single w-100">
                                                <option selected disabled>{{$data->degree}}</option>
                                                @foreach($degree as $rs)
                                                    <option value="{{$rs->name}}">{{$rs->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Faculty</label>
                                            <select required name="faculties_id" class="js-example-basic-multiple w-100" >
                                                @foreach($facultylist as $rs)
                                                    <option value="{{$rs->id}}" >{{$rs->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- DESCRIPTION -->
                            <div class="form-group">
                                <label for="description">Description</label><br>
                                <textarea rows = "15" cols = "60" id="description" name="description" placeholder=" This Description ...">{!! $data->description !!}</textarea>
                                <script>
                                    $('#description').summernote({

                                        tabsize: 2,
                                        height: 120,
                                        toolbar: [
                                            ['style', ['style']],
                                            ['font', ['bold', 'underline', 'clear']],
                                            ['color', ['color']],
                                            ['para', ['ul', 'ol', 'paragraph']],
                                            ['table', ['table']],
                                            ['insert', ['link', 'picture', 'video']],
                                            ['view', ['fullscreen', 'codeview', 'help']]
                                        ]
                                    });
                                </script>
                            </div>
                            <!-- IMAGE -->
                            <!-- IMAGE -->
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image"name="image">
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

<!-- main-panel ends -->
