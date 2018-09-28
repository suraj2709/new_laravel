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
                <div class="col-md-2">
                    Name <span class="red">*</span> :
                </div>
                <div class="col-md-3">
                    <input type='text' name="name" required="" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    Mother's Name <span class="red">*</span>:
                </div>
                <div class="col-md-3">
                    <input type='text' required="" name="mother_name" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    Father's Name <span class="red">*</span>:
                </div>
                <div class="col-md-3">
                    <input type='text' required="" name="father_name" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    Class <span class="red">*</span>:
                </div>
                <div class="col-md-3">
                    <input type='text' required="" name="class" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    Gender <span class="red">*</span> :
                </div>
                <div class="col-md-3">
                    <input type='radio' required="" value="male" name="gender" > Male&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='radio' required="" value="female" name="gender" > Female
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    Contact (If Any) :
                </div>
                <div class="col-md-3">
                    <input type='text'  name='primary_contact' maxlength="10" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    Fathers Con. <span class="red">*</span> :
                </div>
                <div class="col-md-3">
                    <input type='text' required="" name="father_contact" maxlength="10" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    Address :
                </div>
                <div class="col-md-3">
                    <input type='text' name="address" class="form-control" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5" style="text-align: center">
                    <input type='submit' value="Submit" class="btn btn-primary" />
                </div>
            </div>

        </div>
    </form>
    <br>
</div>
@include('footer')