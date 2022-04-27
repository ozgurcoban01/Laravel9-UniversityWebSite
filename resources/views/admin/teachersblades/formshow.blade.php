


<div class="content-wrapper">
    <div style="margin: 10px;position: absolute;margin: 0 0 0 180px">
        <div>
            @if($data->image)
                <img style=" box-shadow: 0px 0px 26px 12px rgba(0,0,0,0.24);border-radius:100px;width: 200px;height: 200px"src="{{Storage::url($data->image)}}" alt="image"/>
            @endif

            <div style="margin: 20px 35px">
                <a href="{{route('admin.teachers.sedit',['id'=>$data->id])}}" style="text-decoration:none;color: inherit;"><div class="btn btn-warning">Edit Teacher</div></a>
            </div>
            <div style="margin: 20px 25px">
                <a href="{{route('admin.teachers.destroy',['id'=>$data->id])}}" style="text-decoration:none;color: inherit;"><div class="btn btn-danger">Delete Teacher</div></a>
            </div>
            <div style="margin: 20px 45px">
                <a href="{{route('admin.teachers.list')}}" style="text-decoration:none;color: inherit;"><div class="btn btn-success">List Page</div></a>
            </div>
        </div>
    </div>

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-6 grid-margin stretch-card">



            <div class="card">


                <div class="card-body">
                    <h4 style="font-size:xx-large" class="card-title">{{$data->fname}} {{$data->lname}}</h4>

                    <div class="table-responsive">
                        <table style="font-size:medium" class="table table-hover">

                            <tbody>
                            <tr>
                                <td style="font-weight:bold">Id</td>
                                <td>#{{$data->id}}</td>

                            </tr>
                            <tr>
                                <td style="font-weight:bold">Name</td>
                                <td>{{$data->fname}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Surname</td>
                                <td>{{$data->lname}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Gender</td>
                                <td>{{$data->gender}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Age</td>
                                <td>{{$data->age}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Birth Date</td>
                                <td>{{$data->bdate}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Retire Date</td>
                                <td>{{$data->rdate}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">E-mail</td>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Degree</td>
                                <td>{{$data->degree}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Faculty</td>
                                <td>{{$data->lessons}}</td>

                            <tr>
                                <td style="font-weight:bold">Description</td>
                                <td><a onclick="return !window.open(this.href,'','top=50 left=100 height=700,width=1100')" href="{{route('admin.teachers.description',['id'=>$data ->id])}}"><i style="cursor: pointer;font-size: xx-large" class="nav-link mdi mdi-message-text menu-icon-right"></i></a></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Created</td>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Updated</td>
                                <td>{{$data->updated_at}}</td>
                            </tr>


                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>



    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->

<!-- main-panel ends -->
