@include('sidenav')
<div class="container box">
    <div class="box-header">
        <strong>All Students :</strong>
    </div>
    <br>
    <div class='container-fluid'>
        <input class="form-control" id="searchdata" type="text" placeholder="Search.."><br>
        <table class="table table-condensed table-hover" id="student_list">
            <thead>
            <th>S.No.</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Class</th>
            <th>School</th>
            <th>Contact</th>
            <th>Action</th>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($allstudents as $a)
                <tr class="filter_student">
                    <td align='center'>{{ $i }}</td>
                    <td>{{ $a->student_name }}</td>
                    <td>{{ $a->father_name }}</td>
                    <td>{{ $a->class }}</td>
                    <td>{{ $a->school }}</td>
                    <td>{{ $a->father_contact }}</td>
                    <td align='center'>
                        <form id="updateform{{$i}}" method="post" action="updatestudent">
                            {{ csrf_field() }}
                            <input type='hidden' id="r_id{{$i}}" name="r_id" value='{{ $a->r_id }}' >&nbsp;<a href="#" onclick="$('#updateform{{$i}}').submit()" style="color:black">
                                <span class="fa fa-edit" onclick=""></span></a>
                            
                        </form>
                        <a href='#' onclick="deactivate({{ $i }})" style="color:black;"><i class="fa fa-user-times"></i></a>&nbsp;
                    </td>
                    <?php $i++; ?>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div id='modal-warning'>
    <div id='modal-head'>
        <div id='modal-heading'>

        </div>
        <a href='#' id='modal-close'><i class="fa fa-close" style="float:right;margin-right:2%;margin-top: -4%;"></i></a>
    </div>
    <div id="modal-body">
        <br>
        Are you sure want to deactivate this student ??
        <form action='deactivatestudent' method="post">
            {{ csrf_field() }}
            <input type='hidden' id='d_r_id' name='r_id' />
            <br>
            <input type='submit' class="btn btn-success btn-xs" value="Yes">&nbsp;
            <input type='button' class="btn btn-danger btn-xs" onclick="$('#modal-warning').hide();" value="No">
        </form>
    </div>
</div>
<script>
            function deactivate(s_id){
            var r_id = $('#r_id' + s_id).val();
                    $('#d_r_id').val(r_id);
                    $('#modal-heading').text('Deactivate Student');
                    $('#modal-warning').show();
            }

    $('#modal-close').click(function(){
    $('#modal-warning').hide();
    });
            $(document).ready(function(){
    $("#searchdata").on("keyup", function() {
    var value = $(this).val().toLowerCase();
            $("#student_list .filter_student").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > - 1)
    });
    });
            });
</script>

@include('footer')