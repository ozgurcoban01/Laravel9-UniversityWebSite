<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div>

                        <form method="post" action="{{route('admin.settings.update',['id'=>$data->id])}}" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-general-tab" data-bs-toggle="tab" data-bs-target="#nav-general" type="button" role="tab" aria-controls="nav-general" aria-selected="true">General</button>
                                    <button class="nav-link" id="nav-smtp-tab" data-bs-toggle="tab" data-bs-target="#nav-smtp" type="button" role="tab" aria-controls="nav-smtp" aria-selected="false">SMTP</button>
                                    <button class="nav-link" id="nav-social-tab" data-bs-toggle="tab" data-bs-target="#nav-social" type="button" role="tab" aria-controls="nav-social" aria-selected="false">Social</button>
                                    <button class="nav-link" id="nav-aboutus-tab" data-bs-toggle="tab" data-bs-target="#nav-aboutus" type="button" role="tab" aria-controls="nav-aboutus" aria-selected="false">About us</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact us</button>
                                    <button class="nav-link" id="nav-references-tab" data-bs-toggle="tab" data-bs-target="#nav-references" type="button" role="tab" aria-controls="nav-references" aria-selected="false">Referenced</button>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input  type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$data->title}}">
                                    </div>

                                    <!-- keywords -->
                                    <div class="form-group">
                                        <label for="keywords">Keywords</label>
                                        <input  type="text" class="form-control" id="keywords" name="keywords" placeholder="Keywords..." value="{{$data->keywords}}">
                                    </div>

                                    <!-- keywords -->
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input  type="text" class="form-control" id="description" name="description" placeholder="Description..." value="{{$data->description}}">
                                    </div>

                                    <!-- FIRST NAME -->
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input  type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$data->address}}">
                                    </div>

                                    <!-- FIRST NAME -->
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input  type="tel" class="form-control" id="phone" name="phone" value="{{$data->phone}}">
                                    </div>

                                    <!-- FIRST NAME -->
                                    <div class="form-group">
                                        <label for="phone">Fax</label>
                                        <input  type="text" class="form-control" id="fax" name="fax" value="{{$data->fax}}">
                                    </div>

                                    <!-- FIRST NAME -->
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input  type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" value="{{$data->email}}">
                                    </div>

                                    <!-- FIRST NAME -->
                                    <div class="form-group">
                                        <label for="icon">Icon</label>
                                        <input  type="file" class="form-control" id="icon" name="icon" value="{{$data->icon}}">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-smtp" role="tabpanel" aria-labelledby="nav-smtp-tab">
                                    <div class="form-group">
                                        <label for="smtpserver">SMTP Server</label>
                                        <input  type="text" class="form-control" id="smtpserver" name="smtpserver" placeholder="SMTP Server" value="{{$data->smtpserver}}">
                                    </div>

                                    <!-- title -->
                                    <div class="form-group">
                                        <label for="smtpemail">SMTP E-mail</label>
                                        <input  type="text" class="form-control" id="smtpemail" name="smtpemail" placeholder="SMTP E-mail" value="{{$data->smtpemail}}">
                                    </div>

                                    <!-- title -->
                                    <div class="form-group">
                                        <label for="smtppassword">SMTP Password</label>
                                        <input  type="text" class="form-control" id="smtppassword" name="smtppassword" placeholder="SMTP Password" value="{{$data->smtppassword}}">
                                    </div>

                                    <!-- title -->
                                    <div class="form-group">
                                        <label for="smtpport">SMTP Port</label>
                                        <input  type="text" class="form-control" id="smtpport" name="smtpport" placeholder="SMTP Port" value="{{$data->smtpport}}">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input  type="text" class="form-control" id="facebook" name="facebook" value="{{$data->facebook}}">
                                    </div>

                                    <!-- FIRST NAME -->
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input  type="text" class="form-control" id="instagram" name="instagram" value="{{$data->instagram}}">
                                    </div>

                                    <!-- FIRST NAME -->
                                    <div class="form-group">
                                        <label for="youtube">Youtube</label>
                                        <input  type="text" class="form-control" id="youtube" name="youtube" value="{{$data->youtube}}">
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="nav-aboutus" role="tabpanel" aria-labelledby="nav-aboutus-tab">
                                    <div class="form-group">
                                        <label for="aboutus"></label><br>
                                        <textarea id="aboutus" name="aboutus" placeholder=" This AboutUs ...">{!! $data->aboutus !!}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#aboutus' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="form-group">
                                        <label for="contact"></label><br>
                                        <textarea id="contact" name="contact" placeholder="Contact us ...">{!! $data->contact !!}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#contact' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab">
                                    <div class="form-group">
                                        <label for="references"></label><br>
                                        <textarea id="references" name="references" placeholder="References...">{!! $data->references !!}</textarea>

                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#references' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>

                                </div>

                            </div>


                            <button style="margin: 20px 0 0 0" type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

