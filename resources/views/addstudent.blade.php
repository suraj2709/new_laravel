@include('sidenav')
<div class="container box">
    <div class="box-header">
        Registration Form :
    </div>
    <br>
    <form action="admitstudent" method="post">
        {{ csrf_field() }}
        <div class='container'>
            <div class="row">
                <div class="col-sm-6"> 
            <div class="row">
                <div class="col-md-5">
                    Name <span class="red">*</span> :
                </div>
                <div class="col-md-7">
                    <input type='text' name="name" required="" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Mother's Name <span class="red">*</span>:
                </div>
                <div class="col-md-7">
                    <input type='text' required="" name="mother_name" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Father's Name <span class="red">*</span>:
                </div>
                <div class="col-md-7">
                    <input type='text' required="" name="father_name" class="form-control" >
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
                        <option value="{{$class->class_id}}">{{ $class->class}}</option>
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
                    <input type='radio' required="" value="male" name="gender" > Male&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='radio' required="" value="female" name="gender" > Female
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Contact (If Any) :
                </div>
                <div class="col-md-7">
                    <input type='text'  name='primary_contact' maxlength="10" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Fathers Con. <span class="red">*</span> :
                </div>
                <div class="col-md-7">
                    <input type='text' required="" name="father_contact" maxlength="10" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    Address :
                </div>
                <div class="col-md-7">
                    <input type='text' name="address" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    School :
                </div>
                <div class="col-md-7">
                    <input type='text' name="school" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <input type='submit' onclick="$(this).hide();" value="Submit" class="btn btn-primary" />
                </div>
            </div>
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