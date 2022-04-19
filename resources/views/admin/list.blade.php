

<!-- partial:partials/_settings-panel.html -->


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Striped Table</h4>
                        <p class="card-description">
                            Add class <code>.table-striped</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        User
                                    </th>
                                    <th>
                                        First name
                                    </th>
                                    <th>
                                        Last Name
                                    </th>
                                    <th>
                                        Gender
                                    </th>
                                    <th>
                                        Age
                                    </th>

                                    <th>
                                        Retire Date
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                    <th>
                                        Degree
                                    </th>
                                    <th>
                                        Lessons
                                    </th>
                                    <th>
                                        Description
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
                                            {{$rs->id}}
                                        </td>
                                        <td class="py-1">
                                            <img src="{{asset('assets')}}/images/faces/face1.jpg" alt="image"/>
                                        </td>

                                        <td>
                                            {{$rs->fname}}
                                        </td>
                                        <td>
                                            {{$rs->lname}}
                                        </td>
                                        <td>
                                            {{$rs->gender}}
                                        </td>
                                        <td>
                                            {{$rs->age}}
                                        </td>

                                        <td>
                                            {{$rs->rdate}}
                                        </td>
                                        <td>
                                            {{$rs->email}}
                                        </td>
                                        <td>
                                            {{$rs->degree}}
                                        </td>
                                        <td>
                                            {{$rs->lessons}}
                                        </td>
                                        <td>
                                            {{$rs->description}}
                                        </td>
                                        <td>
                                            <div ><a class="btn btn-warning btn-icon-text" href="/admin/teachers/edit/{{$rs->id}}">Edit</a></div>
                                        </td>
                                        <td>
                                            <div ><a class="btn btn-danger btn-icon-text" href="/admin/teachers/delete/{{$rs->id}}">Delete</a></div>
                                        </td>
                                        <td >
                                            <div ><a class="btn btn-success btn-icon-text" href="/admin/teachers/show/{{$rs->id}}">Show</a></div>

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

    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
</div>
<!-- main-panel ends -->

