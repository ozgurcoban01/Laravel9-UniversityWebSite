
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
                                    $('#answer').summernote({

                                        tabsize: 2,
                                        height: 120,
                                        toolbar: [
                                            ['style', ['style']],
                                            ['font', ['bold', 'underline', 'clear']],
                                            ['color', ['color']],
                                            ['para', ['ul', 'ol', 'paragraph']],
                                            ['table', ['table']],
                                            ['insert', ['link', 'picture', 'video']],
                                            ['view', ['fullscreen', 'codeview', 'help']]
                                        ]
                                    });
                                </script>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>

                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>

