


<div class="content-wrapper">

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-6 grid-margin stretch-card">

            <div class="card">


                <div class="card-body">

                    <h4 style="font-size:xx-large" class="card-title">#{{$data->id}} {{$data->name}} </h4>
                    <h4>{{$data->description}}</h4>

                    {{--ABOUT EVENT SHOW PHP--}}
                    <?php ob_start(); ?>
                    <div>{{$data->aboutannounce}}</div>
                    <?php $str = ob_get_clean(); ?>

                    <div class="table-responsive">
                        <table style="font-size:medium" class="table table-hover">

                            <tbody>
                            <tr>
                                <td style="font-weight:bold">Announcement Id</td>
                                <td>#{{$data->id}}</td>

                            </tr>
                            <tr>
                                <td style="font-weight:bold">Announcement Description</td>
                                <td>{{$data->description}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Start Date</td>
                                <td>{{$data->sdate}}</td>
                            </tr>

                            @if($data->udate)
                                <tr>
                                    <td style="font-weight:bold">Update Date</td>
                                    <td>{{$data->udate}}</td>
                                </tr>
                            @endif

                            <tr >
                                <td style="font-weight:bold;vertical-align: top;"><div>About Announcement</div></td>
                                <td><?php echo nl2br($str); ?></td>
                            </tr>
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
                            <a href="{{route('admin.announce.sedit',['id'=>$data->id])}}" style="text-decoration:none;color: inherit;">
                                <div class="btn btn-warning btn-rounded btn-fw" style="margin: 5px">Edit Event</div>
                            </a>

                            <a href="{{route('admin.announce.destroy',['id'=>$data->id])}}"  style="text-decoration:none;color: inherit;">
                                <div class="btn btn-danger btn-rounded btn-fw" style="margin: 5px">Delete Event</div>
                            </a>

                            <a href="{{route('admin.announce.list')}}"  style="text-decoration:none;color: inherit;">
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
