


<div class="content-wrapper">

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-6 grid-margin stretch-card">

            <div class="card">


                <div class="card-body">

                    <h4 style="font-size:xx-large" class="card-title">#{{$data->id}} {{$data->name}} </h4>

                    {{--ABOUT EVENT SHOW PHP--}}
                    <?php ob_start(); ?>
                    <div>{{$data->aboutfaculty}}</div>
                    <?php $str = ob_get_clean(); ?>

                    <div class="table-responsive">
                        <table style="font-size:medium" class="table table-hover">

                            <tbody>
                            <tr>
                                <td style="font-weight:bold">Id</td>
                                <td>#{{$data->id}}</td>

                            </tr>
                            <tr>
                                <td style="font-weight:bold">Name</td>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr >
                                <td style="font-weight:bold;vertical-align: top;"><div>About</div></td>
                                <td><?php echo nl2br($str); ?></td>
                            </tr>
                            <tr >
                                <td style="font-weight:bold;vertical-align: top;"><div>Categorise</div></td>
                                <td>{{\App\Http\Controllers\AdminPanel\FacultyController::getParentsTree($data,$data->name)}}</td>
                            </tr>

                            <tr>
                                <td style="font-weight:bold;vertical-align: top;"><div>Teachers</div></td>

                                <td>
                                    <a onclick="return !window.open(this.href,'','top=50 left=100 height=700,width=1100')" href="{{route('admin.faculty.teacherlist',['id'=>$data ->id])}}"><i style="cursor: pointer;font-size: xx-large" class="nav-link mdi mdi-account-search menu-icon-right"></i></a>
                                </td>


                            </tr>


                            @if($data->image)
                                <tr>
                                    <td style="font-weight:bold;vertical-align: top;">Banner Image</td>
                                    <td><img style="height: 100px;width: 200px;border-radius: 5%" src="{{Storage::url($data->image)}}" alt="image"></td>
                                </tr>
                            @endif
                            <tr>
                                <td style="font-weight:bold">Created</td>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Updated</td>
                                <td >{{$data->updated_at}}</td>
                            </tr>


                            </tbody>
                        </table>

                        {{--BOTTOM BUTTONS--}}
                        <div style="margin: 5px">
                            <a href="{{route('admin.faculty.sedit',['id'=>$data->id])}}" style="text-decoration:none;color: inherit;">
                                <div class="btn btn-warning btn-rounded btn-fw" style="margin: 5px">Edit Faculty</div>
                            </a>

                            <a href="{{route('admin.faculty.destroy',['id'=>$data->id])}}"  style="text-decoration:none;color: inherit;">
                                <div class="btn btn-danger btn-rounded btn-fw" style="margin: 5px">Delete Faculty</div>
                            </a>

                            <a href="{{route('admin.faculty.list')}}"  style="text-decoration:none;color: inherit;">
                                <div class="btn btn-success btn-rounded btn-fw" style="margin: 5px">List Page</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->

<!-- main-panel ends -->
