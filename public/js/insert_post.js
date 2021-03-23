// insert
var isLoading = false;
document.addEventListener('click', function () {
    $(document).ready(function () {
        $(document).on('click', '#postsinsertBtn', function (e) {
            e.preventDefault();
            if (!isLoading) {
                let posttitle = $('input#posttitle').val();
                let mainTextArea = $('#mainTextArea').val();
                CKEDITOR.instances["mainTextArea"].updateElement();
                if (posttitle.length == '') {
                    $('input#posttitle').focus();
                    return false;
                }

                if (mainTextArea.length == '') {
                    $('textarea#mainTextArea').focus();
                    return false;
                }
                isLoading = true;
                $.ajax({
                    url: "../../app/insertPostController/insertPost.php",
                    type: 'post',
                    data: {
                        posttitle: posttitle,
                        mainTextArea: mainTextArea,
                    },
                    success: function (data) {
                        $('#successMessage').html("Uploading post...");
                        $("#postsinsertBtn").attr("disabled", true);
                        setInterval(function () {
                            location.reload();
                        }, 5000);
                        isLoading = false;
                    }
                });
            }
        });

    });

});

// ------------------------------------ fetch-----------------------------------
$(document).ready(function () {
    $(document).on("click", ".fetchUpdatePost", function (e) {
        e.preventDefault();
        let id = $(this).attr("id");
        $.ajax({
            url: "../../app/insertPostController/fetchPost.php",
            method: "post",
            data: { id: id },
            dataType: 'json',
            success: function (data) {
                $('input#updatePostid').val(data[0]);
                $('input#updatePostTtitle').val(data[1]);
                $('textarea#updatePostTextArea').val(data[2]);
                CKEDITOR.replace('updatePostTextArea');
            }
        });
    });

});


//----------------------------------- update-------------------------------------
document.addEventListener('click', function () {
    $(document).ready(function () {
        $(document).on('click', '#updatePostBtn', function (e) {
            e.preventDefault();
            CKEDITOR.instances["updatePostTextArea"].updateElement();
            if (!isLoading) {
                let updatePostid = $('input#updatePostid').val();
                let updatePostTtitle = $('input#updatePostTtitle').val();
                let updatePostTextArea = $('#updatePostTextArea').val();
                if (updatePostid.length == '') {
                    $('input#updatePostid').focus();
                    return false;
                }
                if (updatePostTtitle.length == '') {
                    $('input#updatePostTtitle').focus();
                    return false;
                }

                if (updatePostTextArea.length == '') {
                    $('textarea#updatePostTextArea').focus();
                    return false;
                }
                isLoading = true;
                $.ajax({
                    url: "../../app/insertPostController/updatePost.php",
                    method: 'post',
                    data: {
                        updatePostid:updatePostid,
                        updatePostTtitle: updatePostTtitle,
                        updatePostTextArea: updatePostTextArea,
                    },
                    success: function (data) {
                        $('#updatePostError').html("Updating post...");
                        $("#updatePostBtn").attr("disabled", true);
                        setInterval(function () {
                            location.reload();
                        }, 5000);
                        isLoading = false;
                    }
                });
            }
        });
    });
});
// close modal
$(document).ready(function () {
    $(".closeUpdateModalBtn").click(function () {
        $("#postUpdateModale.close").click();
        location.reload();
    });
});


