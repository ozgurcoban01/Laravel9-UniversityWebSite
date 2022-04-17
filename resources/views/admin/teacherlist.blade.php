
<div class="content-wrapper">
    <div class="page-header">
        <h3 style="font-size: xx-large" class="page-title"> TEACHER LIST </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th> <div style="font-size: x-large">Id</div> </th>
                                <th> <div style="font-size: x-large">User</div> </th>
                                <th> <div style="font-size: x-large">First Name</div> </th>
                                <th> <div style="font-size: x-large">Last Name</div> </th>
                                <th> <div style="font-size: x-large">Gender</div> </th>
                                <th> <div style="font-size: x-large">Degree</div> </th>
                                <th> <div style="font-size: x-large">Age</div> </th>
                                <th> <div style="font-size: x-large">Retire Date</div> </th>
                                <th> <div style="font-size: x-large">Edit</div> </th>
                                <th> <div style="font-size: x-large">Delete</div> </th>
                                <th> <div style="font-size: x-large;color: #0a53be">Show</div> </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td class="py-1">
                                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                    </td>
                                    <td>{{$rs->fname}}</td>
                                    <td>{{$rs->lname}}</td>
                                    <td>{{$rs->gender}}</td>
                                    <td>
                                        <div style="font-weight: bolder;padding:0 0 1em 0">{{$rs->degree}}</div>

                                    </td>
                                    <td>{{$rs->age}}</td>
                                    <td>{{$rs->rdate}}</td>
                                    <th> <div style="font-size: medium;color: #0a53be" ><a  class="btn btn-outline-warning btn-icon-text" href="/admin/teachers/edit/{{$rs->id}}">Edit</a></div> </th>
                                    <th> <div style="font-size: medium;color: #0a53be" ><a  class="btn btn-outline-danger btn-icon-text" href="/admin/teachers/delete/{{$rs->id}}">Delete</a></div> </th>
                                    <th> <div style="font-size: medium;color: #0a53be" ><a  class="btn btn-outline-primary btn-icon-text" href="/admin/teachers/show/{{$rs->id}}">Show</a></div> </th>
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
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->


