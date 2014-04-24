/**
 * Created by Vietlt on 3/22/14.
 */
var form = $('#validate-form');
function resetDialog() {
    alertify.set({
        labels: {
            ok: "OK",
            cancel: "Cancel"
        },
        delay: 5000,
        buttonReverse: false,
        buttonFocus: "ok"
    });
}
//End Common ---------------------------------------------------------------------------------------------------------------------------------

//Begin form login
function CheckLogin(base_url) {
    var username = $('#username').val();
    var password = $('#password').val();
    var loginform = $('#login-form');
    var status = true;
    if (username.length == 0) {
        $('#username').addClass('error');
        var status = false;
    }
    if (password.length == 0) {
        $('#password').addClass('error');
        var status = false;
    }
    if (!status) {
        loginform.removeAlertBoxes();
        loginform.alertBox('Tài khoản hoặc mật khẩu không được để trống !', {
            type: 'error'
        });
    } else {
        $.ajax({
            url: base_url + 'backend/login/check_login',
            type: 'post',
            data: {
                username: username,
                password: password
            },
            dataType: 'json',
            success: function(data) {
                if (data.status) {
                    window.location.href = base_url + 'backend/home';
                } else {
                    loginform.removeAlertBoxes();
                    loginform.alertBox(data.result, {
                        type: 'error'
                    });
                }
            }
        });
    }
}

function GotoFormRecover() {
    var loginform = $('#login-form');
    var recoverform = $('#recover-form');
    $('.block-header h1').text('Khôi phục mật khẩu');
    loginform.fadeOut();
    $('.block-content').addClass('margin', '0');
    recoverform.fadeIn();
}

function ComeBack() {
    var loginform = $('#login-form');
    var recoverform = $('#recover-form');
    $('.block-header h1').text('Thông tin đăng nhập');
    loginform.fadeIn();
    $('.block-content').addClass('margin', '0');
    recoverform.fadeOut();
}
//End form login
//Begin form roles
$(document).on('click', '#saverole', function() {
    if ($("#validate-form").valid()) {
        $.ajax({
            url: 'roles/save',
            type: 'post',
            data: form.serialize(),
            dataType: 'json',
            success: function(data) {
                if (data.status) {
                    $('#list-roles').append('<li class="i-16-user-red" id="row-'+data.last_id+'"><a href="javascript:void(0);" rel="tooltip-top" original-title="' + $('#roledesc').val() + '">' + $('#rolename').val() + '</a>'+
                        '<span style="float:right;font-weight: bold">'+
                        '<a id="alert" onclick="EditRole('+data.last_id+')" href="javascript:void(0)">Sửa</a>&nbsp;&nbsp;&nbsp;' +
                        '<a id="alert" onclick="DeleteRole('+data.last_id+')" href="javascript:void(0)">Xóa</a></span>' +
                        '</li>');
                    alertify.success('Thêm mới thành công !');
                    form.resetForm();
                } else alertify.success('Thêm mới không thành công !');
            }
        });
    }
});
function DeleteRole(id) {
    resetDialog();
    alertify.confirm("Bạn đã chắc chắn thực hiện hành động này ?", function(e) {
        if (e) {
            $.ajax({
                url: 'roles/delete',
                type: 'post',
                data: {
                    roleid: id
                },
                success: function(data) {
                    if (data) {
                        $('#row-' + id).remove();
                        alertify.success('Xóa bản ghi thành công !');
                    } else alertify.error("Thực hiện hành động không thành công !");
                }
            });
        } else {
            alertify.error("Không làm gì cả");
        }
    });
    return false;
}
function EditRole()
{
    resetDialog();
    
}
//End form roles

//Begin form permission
$(document).on('click', '#savepermission', function() {
    if ($('#validate-form').valid()) {
        $.ajax({
            url: 'permission/save',
            type: 'post',
            data: form.serialize(),
            dataType: 'json',
            success: function(data) {
                if (data.status) {
                    alertify.success('Thêm mới thành công !');
                    $('#list-roles').append('<li class="i-16-user-red" id="row-'+data.last_id+'"><a href="javascript:void(0);" rel="tooltip-top" original-title="' + $('#permissiondesc').val() + '">' + $('#permissionname').val() + '</a>'+ 
                    '<span style="float:right;font-weight: bold">'+
                    '<a id="alert" onclick="EditPermission(<?=$value->getPermission_id()?>)" href="javascript:void(0)">Sửa</a>&nbsp;&nbsp;&nbsp;'+
                    '<a id="alert" onclick="DeletePermission('+data.last_id+')" href="javascript:void(0)">Xóa</a></span></li>');
                    form.resetForm();
                } else alertify.error('Thêm mới không thành công !');
            }
        });
    }
});
function DeletePermission(id) {
    resetDialog();
    alertify.confirm("Bạn đã chắc chắn thực hiện hành động này ?", function(e) {
        if (e) {
            $.ajax({
                url: 'permission/delete',
                type: 'post',
                data: {
                    permid: id
                },
                success: function(data) {
                    if (data) {
                        $('#row-' + id).remove();
                        alertify.success('Xóa bản ghi thành công !');
                    } else alertify.error("Thực hiện hành động không thành công !");
                }
            });
        } else {
            alertify.error("Không làm gì cả");
        }
    });
    return false;
}
//End form permission

//Begin form video
function DeleteVideo(id)
{
    console.log(id);
    resetDialog();
    alertify.confirm("Bạn đã chắc chắn thực hiện hành động này ?", function(e) {
        if (e) {
            $.ajax({
                url: 'video/delete',
                type: 'post',
                data: {
                    videoid: id
                },
                success: function(data) {
                    if (data) {
                        $('#row-' + id).remove();
                        alertify.success('Xóa bản ghi thành công !');
                    } else alertify.error("Thực hiện hành động không thành công !");
                }
            });
        } else {
            alertify.error("Không làm gì cả");
        }
    });
    return false;
}

//End form video


var alertBox = new ShowMessage();