<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="/admin/teachers/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" class="form-control" name="f_name" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" class="form-control" name="l_name" placeholder="Last Name">
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age" placeholder="Age">
                    </div>

                    <div  class="form-group">
                        <label for="degree">Degree</label>
                        <select style="color: white" class="form-control" name="degree" >
                            <option disabled selected>Select</option>
                            <option>Profesor</option>
                            <option>Associate Professor</option>
                            <option>Research Assistant</option>
                            <option >Teaching Officer</option>

                        </select>
                    </div>

                    <div  class="form-group">
                        <label for="faculty">Faculty</label>
                        <select style="color: white" class="form-control" name="faculty" >
                            <option disabled selected>Select</option>
                            <option>Engineer</option>
                            <option>Law</option>
                            <option>Medicine</option>
                            <option>Economics</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="article">Articles</label>
                        <textarea class="form-control" name="article" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="enter_date">Enter Date</label>
                        <input type="date" class="form-control" name="enter_date">
                    </div>

                    <div class="form-group">
                        <label for="lessons_id">Lessons Id</label>
                        <input type="numbermd" class="form-control" name="lessons_id">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" rows="4"></textarea>
                    </div>




                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
