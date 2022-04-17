<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="font-size:xx-large">ADD TEACHER</h4>

                <form  class="forms-sample" action="/admin/teachers/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label style="font-size:large"  for="fname">First Name</label>
                        <input required type="text" class="form-control" name="fname" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <label style="font-size:large"  for="lname">Last Name</label>
                        <input required type="text" class="form-control" name="lname" placeholder="Last Name">
                    </div>

                    <div  class="form-group">
                        <label style="font-size:large"  for="f_name">Gender</label><br>
                        <div style="padding: 0 0 0 10px">
                            <input required  type="radio" id="Male" name="gender" value="Male">
                            <label style="padding: 5px 10px 0 0; font-size:medium; color: #9ca3af" for="Male">Male</label>
                            <input required  type="radio" id="Female" name="gender" value="Female">
                            <label style="padding: 5px 0 0 0; font-size:medium; color: #9ca3af"  for="Female">Female</label>
                        </div>
                    </div>

                    <div  class="form-group">
                        <label style="font-size:large" for="birthday">Birthday</label><br>
                        <input required class="form-control" type="date" id="bdate" name="bdate">
                    </div>

                    <div  class="form-group">
                        <label style="font-size:large" for="birthday">Retire Date</label><br>
                        <input class="form-control" type="date" id="rdate" name="rdate">
                    </div>

                    <div class="form-group">
                        <label style="font-size:large"  for="email">E-mail</label>
                        <input required type="email" class="form-control" name="email" placeholder="example@email.com">
                    </div>

                    <div  class="form-group">
                        <label for="cars">Degree</label>
                        <select required class="form-control" style="color: white" name="degree">
                            <option value="Professor">Professor</option>
                            <option value="Associate Professor">Associate Professor</option>
                            <option value="Assistant Professor">Assistant Professor</option>
                            <option value="Research Assistant">Research Assistant</option>
                            <option value="Instructor">Instructor</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label style="font-size:large"  for="f_name">Lessons</label>
                        <input required type="textarea" class="form-control" name="lessons" placeholder="Lesson1,Lesson2">
                    </div>

                    <div class="form-group">
                        <label style="font-size:large"  for="f_name">Description</label>
                        <textarea class="form-control" name="description" rows="4"></textarea>
                    </div>




                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
