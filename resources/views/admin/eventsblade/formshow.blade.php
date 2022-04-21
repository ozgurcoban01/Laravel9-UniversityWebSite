


<div class="content-wrapper">

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-6 grid-margin stretch-card">

            <div class="card">


                <div class="card-body">
                    <a href="{{route('admin.events.edit',['id'=>$data->id])}}" style="text-decoration:none;color: inherit;"><div class="btn btn-warning btn-rounded btn-fw">Edit Event</div></a>
                    <a href="{{route('admin.events.destroy',['id'=>$data->id])}}"  style="text-decoration:none;color: inherit;"><div class="btn btn-danger btn-rounded btn-fw">Delete Event</div></a>
                    <h4 style="font-size:xx-large" class="card-title">{{$data->fname}} {{$data->lname}}</h4>

                    <div class="table-responsive">
                        <table style="font-size:medium" class="table table-hover">

                            <tbody>
                            <tr>
                                <td style="font-weight:bold">Event Id</td>
                                <td>#{{$data->id}}</td>

                            </tr>
                            <tr>
                                <td style="font-weight:bold">Name</td>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Location</td>
                                <td>{{$data->location}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Start Date</td>
                                <td>{{$data->sdate}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">End Time</td>
                                <td>{{$data->edate}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">End Date</td>
                                <td>{{$data->stime}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">End Time</td>
                                <td>{{$data->etime}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Description</td>
                                <td>{{$data->description}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">About Event</td>
                                <td>{{$data->aboutevent}}</td>
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
