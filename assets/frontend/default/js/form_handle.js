//Begin form  upload video

$('#btn-post-video').click(function() {
    $.ajax({
        url: 'upload/save_video',
        type: 'post',
        data: $('#form-post-videos').serialize(),
        success: function(data) {
            if(data)
            {
            	dialog.msgSuccess('Đăng bài thành công , bài viết của bạn sẽ được lên trang chủ sau khi được kiểm duyệt !');
                $('#form-post-videos')[0].reset();
            }
            else
            {
                dialog.msgError('Đăng bài không thành công, mã video bạn vừa đăng có thể đã tồn tại . Vui lòng thử lại ^^');
            }
        }
    });
});

//End form  upload video