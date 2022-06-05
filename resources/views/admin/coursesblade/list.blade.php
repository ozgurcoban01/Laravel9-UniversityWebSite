

<div class="content-wrapper">

        <div class="row">

            <div  class="col-lg-12 grid-margin stretch-card">

                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title" style="font-size: xx-large">Courses</h4>
                        <a href="{{route('admin.courses.create')}}" style="text-decoration:none;color: inherit;"><div class="btn btn-primary">Add Course</div></a>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Course Id
                                    </th>
                                    <th>
                                        Course Name
                                    </th>
                                    <th>
                                        Course Teacher
                                    </th>
                                    <th>
                                        Course Price
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                    <th>
                                        Show
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <td>
                                            #{{$rs->id}}
                                        </td>
                                        <td>
                                            {{$rs->name}}
                                        </td>
                                        <td>
                                            {{$rs->teachers->fname}}
                                        </td>
                                        <td>
                                            {{$rs->price}}
                                        </td>
                                        <td>
                                            <div  ><a class="btn btn-warning btn-rounded btn-fw" href="{{route('admin.courses.edit',['id'=>$rs->id])}}">Edit</a></div>
                                        </td>

                                        <td>
                                            <div  ><a class="btn btn-danger btn-rounded btn-fw" href="{{route('admin.courses.destroy',['id'=>$rs->id])}}">Delete</a></div>
                                        </td>

                                        <td >
                                            <div ><a class="btn btn-success btn-rounded btn-fw" href="{{route('admin.courses.show',['id'=>$rs->id])}}">Show</a></div>

                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


<!-- main-panel ends -->

