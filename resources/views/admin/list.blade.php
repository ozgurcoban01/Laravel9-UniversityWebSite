

<div class="content-wrapper">

        <div class="row">

            <div  class="col-lg-12 grid-margin stretch-card">

                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title" style="font-size: xx-large">Persons</h4>
                        <a href="/admin/teachers/create" style="text-decoration:none;color: inherit;"><div class="btn btn-primary">Add Teacher</div></a>

                        <p class="card-description">

                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        User
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Gender
                                    </th>
                                    <th>
                                        Age
                                    </th>

                                    <th>
                                        Retire Date
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                    <th>
                                        Degree
                                    </th>
                                    <th>
                                        Lessons
                                    </th>
                                    <th>
                                        Description
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
                                            {{$rs->id}}
                                        </td>
                                        <td class="py-1">
                                            <img src="{{asset('assets')}}/images/faces/face1.jpg" alt="image"/>
                                        </td>

                                        <td>
                                            {{$rs->fname}} {{$rs->lname}}
                                        </td>

                                        <td>
                                            {{$rs->gender}}
                                        </td>
                                        <td>
                                            {{$rs->age}}
                                        </td>

                                        <td>
                                            {{$rs->rdate}}
                                        </td>
                                        <td>
                                            {{$rs->email}}
                                        </td>
                                        <td>
                                            {{$rs->degree}}
                                        </td>
                                        <td>
                                            {{$rs->lessons}}
                                        </td>
                                        <td>
                                            {{$rs->description}}
                                        </td>
                                        <td>
                                            <div  ><a  class="btn btn-warning btn-rounded btn-fw" href="/admin/teachers/edit/{{$rs->id}}">Edit</a></div>
                                        </td>
                                        <td>
                                            <div  ><a class="btn btn-danger btn-rounded btn-fw" onclick="return confirm('Deleting Are You Ok!!!')" href="/admin/teachers/delete/{{$rs->id}}">Delete</a></div>
                                        </td>
                                        <td >
                                            <div ><a class="btn btn-success btn-rounded btn-fw" href="/admin/teachers/show/{{$rs->id}}">Show</a></div>

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

