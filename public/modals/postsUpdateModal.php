<div class="modal fade overflow-auto" id="postUpdateModale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="margin-top: 50px; ">
    <div class="modal-dialog modal-dialog-centered " role="document" style="width:800px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Post</h5>
            </div>
            <div class="modal-body" id="updateModal">
                <form method="post" >
                    <input type="hidden" id="updatePostid" name="updatePostid"  placeholder="Post Title" autocomplete="off" style="font-size: 16px;">
                    <div class="input-field col s12">
                    <input type="text"  id="updatePostTtitle" name="updatePostTtitle" placeholder="Post Title" autocomplete="off" style="font-size: 16px;">
                    </div>
                    <span id="updatePostError"  class="text-danger"></span>
                    <textarea id="updatePostTextArea" name="updatePostTextArea"  placeholder="Body Post" style="font-size: 16px;"></textarea>
                </form>
            </div>
            <div class="modal-footer mb-5">
                <button type="button" class="btn btn-danger closeUpdateModalBtn" style="margin-left: 10px;">Close</button>
                <button type="button" id="updatePostBtn" name="updatePostBtn" class="btn btn-primary">Save changes</button>
            </div>
          
        </div>
    </div>
</div>

