<select class="form-control stu_class" name="stu_name" id="student_name">
    <option value="0">Select</option>
    @foreach($studentbyclass as $s)
    <option value="{{$s->r_id}}">{{$s->student_name}}</option>
    @endforeach
</select>

<script>
$('#student_name').change(function (){
    var num = $('#student_name').val();
    if(num == 0){
    $('#amount').attr("readonly",true);
    }else{
        $('#amount').attr("readonly",false);
    }
});
</script>