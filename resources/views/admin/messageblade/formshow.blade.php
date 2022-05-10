
<div class="content-wrapper">

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-12 grid-margin stretch-card">

            <div class="card">


                <div class="card-body">

                    <h4 style="font-size:xx-large" class="card-title">#{{$data->id}} {{$data->name}} </h4>


                    {{--ABOUT EVENT SHOW PHP--}}
                    <?php ob_start(); ?>
                    <div>{{$data->message}}</div>
                    <?php $str = ob_get_clean(); ?>

                    <div class="table-responsive">
                        <table style="font-size:medium" class="table table-hover">

                            <tbody>
                            <tr>
                                <td style="font-weight:bold">Message Id</td>
                                <td>#{{$data->id}}</td>

                            </tr>
                            <tr>
                                <td style="font-weight:bold">Message Name</td>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Message Status</td>
                                <td>{{$data->status}}</td>
                            </tr>


                            <tr >
                                <td style="font-weight:bold;vertical-align: top;"><div>Message</div></td>
                                <td><?php echo nl2br($str); ?></td>
                            </tr>
                            @if($data->note!=null)
                                <tr>
                                    <td style="font-weight:bold">Message Note</td>
                                    <td>{!! $data->note !!}</td>
                                </tr>
                            @endif
                            <tr>
                                <td style="font-weight:bold">Created</td>
                                <td>{{$data->created_at}}</td>
                            </tr>


                            </tbody>
                        </table>

                        {{--BOTTOM BUTTONS--}}
                        <div style="margin: 5px">
                            <a href="{{route('admin.message.edit',['id'=>$data->id])}}" style="text-decoration:none;color: inherit;">
                                <div class="btn btn-warning btn-rounded btn-fw" style="margin: 5px">Edit Event</div>
                            </a>

                            <a href="{{route('admin.message.destroy',['id'=>$data->id])}}"  style="text-decoration:none;color: inherit;">
                                <div class="btn btn-danger btn-rounded btn-fw" style="margin: 5px">Delete Event</div>
                            </a>

                            <a href="{{route('admin.message.list')}}"  style="text-decoration:none;color: inherit;">
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
