
<div class="content-wrapper">

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-12 grid-margin stretch-card">

            <div class="card">


                <div class="card-body">

                    <h4 style="font-size:xx-large" class="card-title">#{{$data->id}} {{$data->name}} </h4>

                    <div class="table-responsive">
                        <table style="font-size:medium" class="table table-hover">

                            <tbody>
                            <tr>
                                <td style="font-weight:bold">User Id</td>
                                <td>#{{$data->id}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">User Name</td>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">User Email</td>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">User Role</td>
                                <td>
                                    @foreach($data->roles as $role)
                                        {{$role->name}}<a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}">[X]</a>-
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Created</td>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <form method="post" enctype="multipart/form-data" class="forms-sample" action="{{route('admin.user.addrole',['id'=>$data->id])}}">
                        @csrf
                        <input type="hidden" name="user" value="{{$data->id}}">
                        <div class="form-group">
                            <select name="role">
                                @foreach($roles as $role)
                                    @if($data->id!=$role->user_id)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary me-2" type="submit">Add Role</button>
                    </form>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->

<!-- main-panel ends -->
