<style>
.student_update_modal{
    margin-top: 10rem;
}
 </style>
 <!-- student update modal -->
<div class="modal fade " id="updateStudentModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content student_update_modal">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      </div>
      <div class="modal-body ">
        <form id="update_student_form" method="post">
            <input type="hidden" name="update_student_id" id="update_student_id" placeholder="Update student id" autocomplete="off" style="font-size: 16px;">
            <input type="text" name="update_student_name" id="update_student_name" placeholder="Update student name" autocomplete="off" style="font-size: 16px;">
            <input type="text" name="update_student_lastname" id="update_student_lastname" placeholder="Update student lastname" autocomplete="off" style="font-size: 16px;">
            <input type="text" name="update_student_email" id="update_student_email" placeholder="Update student email" autocomplete="off" style="font-size: 16px;">
            <p class="update_student_email"></p>
        </form>
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin: 5px;">Close</button>
        <button type="button" id="updateStudentBtn" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>