@include('sidenav')
<div class="container box">
    <div class="box-header">
        Update Form :
    </div>
    <br>
    <form action="updatetudentbyrollno" method="post">
        {{ csrf_field() }}
        <div class='container'>
            <div class="row">
                <div class="col-sm-6"> 
            <div class="row">
                @foreach($stu_det as $a)
                <div class="col-md-5">
                    Name <span class="red">*</span> :
                </div>
                <div class="col-md-7">
                    <input type="hidden" name="r_id" value="{{$a->r_id}}" >
                    <input type='text' name="name" value="{{ $a->student_name }}" required="" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Mother's Name <span class="red">*</span>:
                </div>
                <div class="col-md-7">
                    <input type='text' required="" name="mother_name" value="{{$a->mothers_name}}" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Father's Name <span class="red">*</span>:
                </div>
                <div class="col-md-7">
                    <input type='text' required="" name="father_name" value="{{ $a->father_name}}" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Class <span class="red">*</span>:
                </div>
                <div class="col-md-7">
                    <select name="class" class="form-control">
                        <option value="">Select</option>
                        @foreach($class as $class)
                        <option value="{{$class->class_id}}" <?php if($a->class == $class->class_id){ echo "Selected"; } ?> >{{ $class->class}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Gender <span class="red">*</span> :
                </div>
                <div class="col-md-7">
                    <input type='radio' required="" value="male" <?php if($a->gender == "male"){ echo "checked='checked'"; } ?> name="gender" > Male&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='radio' required="" value="female" <?php if($a->gender == "female"){ echo "checked='checked'"; } ?> name="gender" > Female
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Contact (If Any) :
                </div>
                <div class="col-md-7">
                    <input type='text'  name='primary_contact' value="{{$a->primary_contact}}" maxlength="10" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Fathers Con. <span class="red">*</span> :
                </div>
                <div class="col-md-7">
                    <input type='text' required="" name="father_contact" maxlength="10" value="{{$a->father_contact}}" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Address :
                </div>
                <div class="col-md-7">
                    <input type='text' name="address" value="{{$a->Address}}" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    School :
                </div>
                <div class="col-md-7">
                    <input type='text' name="school" value="{{$a->school}}" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <input type='submit' onclick="$(this).hide();" value="Submit" class="btn btn-primary" />
                </div>
            </div>
            @endforeach()
            </div>
                <div class="col-sm-6">
                    @if (count($errors) > 0)
                    <div class = "alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
        </div>
        </div>
    </form>
    <br>
</div>
@include('footer')