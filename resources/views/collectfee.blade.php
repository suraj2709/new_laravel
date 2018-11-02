@include('sidenav')
<div class="container box">
    <div class="box-header">
        <strong>Collect Fees :</strong>
    </div>
    <br>
    <div class="row">
        <div class="col-3 col-lg-2">
            <label >Class : </label>
        </div>
        <div class="col-9 col-lg-3">
            <select class="form-control stu_class">
                <option value="0">Select</option>
                @foreach($class as $class)
                    <option value="{{$class->class_id}}">{{ $class->class}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-3 col-lg-2">
            <label >Name : </label>
        </div>
        <div class="col-9 col-lg-3">
            <div id="student_list">
            <select class="form-control">
                <option value="">Select</option>
            </select>
                </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-3 col-lg-2">
            <label >Amount : </label>
        </div>
        <div class="col-9 col-lg-3">
            <input type="text" class="form-control" id="amount" required="" readonly="true">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 col-lg-5" style="text-align:center">
            <input type="button" class="btn btn-primary" value="Pay"><br><br>
            <span style="font-style: italic">OR</span><br><br>
            <a href="collectfeebyscholar" style="color:blue   ;">Pay by Scholar Number</a>
        </div>
    </div>
    <br>
</div>
<script>
$('.stu_class').change(function(){
    var stu_class = $('.stu_class').val();
    $.ajax({
            type: "GET",
            url: "<?php echo URL::to('/'); ?>/searchstudentbyclass/",
            data: "class_id=" + stu_class ,
            dataType: "html",
            success: function (data)
            {
                $('#student_list').html(data);
            }
        });
});


</script>
@include('footer')