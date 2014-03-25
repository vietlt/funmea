$('#btn-post-video').click(function() {
    $.ajax({
        url: 'upload/save_video',
        type: 'post',
        data: $('#form-post-videos').serialize(),
        success: function(data) {
            if(data)
            	console.log('ok men');
            else
            	console.log('no girl');
        }
    });
});