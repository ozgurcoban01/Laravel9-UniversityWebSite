

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
                                        Comment Id
                                    </th>
                                    <th>
                                        Comment Teacher
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Comment Status
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
                                        @foreach($teacher as $ts)
                                            @if($ts->id==$rs->teacher_id)
                                                <td>
                                                    {{$ts->fname}} {{$ts->lname}}
                                                </td>
                                            @endif
                                        @endforeach
                                        <td>
                                            {{$rs->user->name}}
                                        </td>
                                        <td>
                                            {{$rs->subject}}
                                        </td>
                                        <td>
                                            {{$rs->status}}
                                        </td>
                                        <td>
                                            <div  ><a class="btn btn-danger btn-rounded btn-fw" href="{{route('admin.comment.destroy',['id'=>$rs->id])}}">Delete</a></div>
                                        </td>
                                        <td >
                                            <div ><a class="btn btn-success btn-rounded btn-fw" href="{{route('admin.comment.show',['id'=>$rs->id])}}">Show</a></div>
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

