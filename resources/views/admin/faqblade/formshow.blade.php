


<div class="content-wrapper">

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-12 grid-margin stretch-card">

            <div class="card">


                <div class="card-body">

                    <h4 style="font-size:xx-large" class="card-title">#{{$data->id}} {{$data->question}} </h4>


                    <div class="table-responsive">
                        <table style="font-size:medium" class="table table-hover">

                            <tbody>
                            <tr>
                                <td style="font-weight:bold">FAQ Id</td>
                                <td>#{{$data->id}}</td>

                            </tr>
                            <tr>
                                <td style="font-weight:bold">Question</td>
                                <td>{{$data->question}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Answer</td>
                                <td>{!! $data->answer !!}</td>
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
                            <a href="{{route('admin.faq.sedit',['id'=>$data->id])}}" style="text-decoration:none;color: inherit;">
                                <div class="btn btn-warning btn-rounded btn-fw" style="margin: 5px">Edit Event</div>
                            </a>

                            <a href="{{route('admin.faq.destroy',['id'=>$data->id])}}"  style="text-decoration:none;color: inherit;">
                                <div class="btn btn-danger btn-rounded btn-fw" style="margin: 5px">Delete Event</div>
                            </a>

                            <a href="{{route('admin.faq.list')}}"  style="text-decoration:none;color: inherit;">
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
