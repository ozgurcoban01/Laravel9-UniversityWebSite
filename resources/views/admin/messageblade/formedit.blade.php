
<div class="content-wrapper">

    <div style="justify-content: center;align-items: center" class="row">
        <div  class="col-lg-6 grid-margin stretch-card">

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


                            <tr >
                                <td style="font-weight:bold;vertical-align: top;"><div>Message</div></td>
                                <td><?php echo nl2br($str); ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Created</td>
                                <td>{{$data->created_at}}</td>
                            </tr>

                            </tbody>
                        </table>
                       <form method="post" action="{{route('admin.message.update',['id'=>$data->id])}}" enctype="multipart/form-data">
                           @csrf
                           <div class="card">
                               <div class="card-body">
                                   <!-- ABOUTEVENT -->
                                   <div class="form-group">
                                       <label for="note">Note</label><br>
                                       <textarea id="note" name="note" placeholder="Note..."></textarea>

                                       <script>
                                           ClassicEditor
                                               .create( document.querySelector( '#note' ) )
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
                           <button type="submit" class="btn btn-primary me-2">Submit</button>
                       </form>

                        {{--BOTTOM BUTTONS--}}


                    </div>
                </div>
            </div>

        </div>



    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->

<!-- main-panel ends -->
