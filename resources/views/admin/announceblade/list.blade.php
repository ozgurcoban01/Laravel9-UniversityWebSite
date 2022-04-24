

<div class="content-wrapper">

        <div class="row">

            <div  class="col-lg-12 grid-margin stretch-card">

                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title" style="font-size: xx-large">Announcements</h4>
                        <a href="{{route('admin.announce.create')}}" style="text-decoration:none;color: inherit;"><div class="btn btn-primary">Add Announcement</div></a>

                        <p class="card-description">

                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Announcement Id
                                    </th>
                                    <th>
                                        Announcement Description
                                    </th>
                                    <th>
                                        Announcement Date
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
                                            {{$rs->description}}
                                        </td>
                                        <td>
                                            {{$rs->sdate}}
                                        </td>
                                        <td>
                                            <div  ><a  class="btn btn-warning btn-rounded btn-fw" href="{{route('admin.announce.edit',['id'=>$rs->id])}}">Edit</a></div>
                                        </td>

                                        <td>
                                            <div  ><a class="btn btn-danger btn-rounded btn-fw" href="{{route('admin.announce.destroy',['id'=>$rs->id])}}"  >Delete</a></div>
                                        </td>

                                        <td >
                                            <div ><a class="btn btn-success btn-rounded btn-fw" href="{{route('admin.announce.show',['id'=>$rs->id])}}">Show</a></div>

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

