

<div class="content-wrapper">

        <div class="row">

            <div  class="col-lg-12 grid-margin stretch-card">

                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title" style="font-size: xx-large">News</h4>
                        <a href="{{route('admin.news.create')}}" style="text-decoration:none;color: inherit;"><div class="btn btn-primary">Add News</div></a>

                        <p class="card-description">

                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        News Id
                                    </th>
                                    <th>
                                        News Name
                                    </th>
                                    <th>
                                        News Date
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Image Galery
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
                                            {{$rs->date}}
                                        </td>
                                        <td>
                                            {{$rs->description}}
                                        </td>
                                        <td>
                                            <a onclick="return !window.open(this.href,'','top=50 left=100 height=700,width=1100')" href="{{route('admin.image.index',['nid'=>$rs->id])}}"><i style="cursor: pointer;font-size: xx-large" class="nav-link mdi mdi-folder-multiple-image menu-icon-right"></i></a>
                                        </td>
                                        <td>
                                            <div  ><a class="btn btn-warning btn-rounded btn-fw" href="{{route('admin.news.edit',['id'=>$rs->id])}}">Edit</a></div>
                                        </td>

                                        <td>
                                            <div  ><a class="btn btn-danger btn-rounded btn-fw" href="{{route('admin.news.destroy',['id'=>$rs->id])}}">Delete</a></div>
                                        </td>

                                        <td >
                                            <div ><a class="btn btn-success btn-rounded btn-fw" href="{{route('admin.news.show',['id'=>$rs->id])}}">Show</a></div>

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

