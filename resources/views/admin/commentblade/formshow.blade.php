
<div class="content-wrapper">

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-12 grid-margin stretch-card">

            <div class="card">


                <div class="card-body">

                    <h4 style="font-size:xx-large" class="card-title">#{{$data->id}} {{$data->name}} </h4>


                    {{--ABOUT EVENT SHOW PHP--}}
                    <?php ob_start(); ?>
                    <div>{{$data->review}}</div>
                    <?php $str = ob_get_clean(); ?>

                    <div class="table-responsive">
                        <table style="font-size:medium" class="table table-hover">

                            <tbody>
                            <tr>
                                <td style="font-weight:bold">Comment Id</td>
                                <td>#{{$data->id}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Name</td>
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">IP</td>
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Teacher</td>
                                <td>{{$teacher->fname}} {{$teacher->lname}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Comment Rate</td>
                                <td>{{$data->rate}}</td>
                            </tr>
                            <tr >
                                <td style="font-weight:bold;vertical-align: top;"><div>Review</div></td>
                                <td><?php echo nl2br($str); ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Created</td>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Comment Status</td>
                                <td>
                                    <form action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <select name="status">
                                            <option value="True">True</option>
                                            <option value="False">False</option>
                                        </select><br><br>
                                        <button type="submit" class="btn btn-warning btn-rounded btn-fw">Send</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        {{--BOTTOM BUTTONS--}}
                        <div style="margin: 5px">
                            <a href="{{route('admin.comment.list')}}"  style="text-decoration:none;color: inherit;">
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
