
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ADD Announcement</h4>
                    <p class="card-description">
                        About Announcement
                    </p>
                    <form method="post" action="{{route('admin.faq.update',['id'=>$data->id])}}" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <!-- Event Name -->
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input required type="text" class="form-control" id="question" name="question" placeholder="About Announcement" value="{{$data->question}}">
                        </div>

                        <!-- ABOUTEVENT -->
                        <div class="form-group">
                            <label for="answer">Answer</label><br>
                            <textarea id="answer" name="answer" placeholder="Answer...">{!! $data->answer !!}</textarea>

                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="gender">Status</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input checked required type="radio" class="form-check-input" name="status" id="optionsRadios1" value="">
                                            Do not Change
                                            <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input required type="radio" class="form-check-input" name="status" id="optionsRadios2" value="False">
                                            False
                                            <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input required type="radio" class="form-check-input" name="status" id="optionsRadios2" value="True">
                                            True
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>

                    </form>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->

<!-- partial -->

<!-- main-panel ends -->
