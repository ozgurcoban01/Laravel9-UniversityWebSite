
<div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADD FAQ</h4>
                        <p class="card-description">
                            About Question and Answer
                        </p>
                        <form method="post" action="{{route('admin.faq.store')}}" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <!-- Event Name -->
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input required type="text" class="form-control" id="question" name="question" placeholder="About Announcement" >
                            </div>

                            <!-- ABOUTEVENT -->
                            <div class="form-group">
                                <label for="answer">Answer</label><br>
                                <textarea id="answer" name="answer" placeholder="Answer..."></textarea>

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

                            <button type="submit" class="btn btn-primary me-2">Submit</button>

                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>

