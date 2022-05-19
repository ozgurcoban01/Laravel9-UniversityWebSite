

<div class="content-wrapper">

        <div class="row">

            <div  class="col-lg-12 grid-margin stretch-card">

                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title" style="font-size: xx-large">Messages</h4>


                        <p class="card-description">

                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        User Id
                                    </th>
                                    <th>
                                        User Name
                                    </th>
                                    <th>
                                        User E-mail
                                    </th>
                                    <th>
                                        User Degree
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
                                            {{$rs->email}}
                                        </td>
                                        <td>
                                            @foreach($rs->roles as $role)
                                                {{$role->name}}
                                            @endforeach
                                        </td>
                                        <td>
                                            <div  ><a class="btn btn-danger btn-rounded btn-fw" href="{{route('admin.user.destroy',['id'=>$rs->id])}}"  >Delete</a></div>
                                        </td>

                                        <td >
                                            <div ><a class="btn btn-success btn-rounded btn-fw" href="{{route('admin.user.show',['id'=>$rs->id])}}">Show</a></div>

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

