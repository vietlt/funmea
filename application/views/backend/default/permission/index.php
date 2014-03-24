<div class="container_12">

    <div class="grid_12">
        <h1>Quản trị Permission</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
    </div>

    <div class="grid_12" id="show-message">
    </div>

    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1>Danh sách Permisison</h1><span></span>
            </div>
            <div class="block-content">
                <ul id="list-roles" class="block-list with-icon">
                    <?foreach($all_permissions as $key => $value):?>
                        <li class="i-16-user-red" id="row-<?=$value->getPermission_id()?>">
                            <a href="javascript:void(0);" rel="tooltip-top" original-title="<?=$value->getPermission_desc()?>">
                                <?=$value->getPermission_name()?>
                            </a>
                            <span style="float:right;font-weight: bold">
                            <a id="alert" onclick="EditPermission(<?=$value->getPermission_id()?>)" href="javascript:void(0)">Sửa</a>&nbsp;&nbsp;&nbsp;
                            <a id="alert" onclick="DeletePermission(<?=$value->getPermission_id()?>)" href="javascript:void(0)">Xóa</a></span>
                        </li>
                    <?endforeach;?>
                </ul>
            </div>
        </div>
    </div>

    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1>Form permission</h1><span></span>
            </div>
            <form id="validate-form" class="block-content form" action="" method="post">
                <div class="_100">
                    <p>
                        <label for="select">Hành động</label>
                        <select id="permissionaction" name="permissionaction">
                            <option>Lựa chọn</option>
                            <?foreach($list_action as $value):?>
                                <option value="<?=$value?>"><?=$value?></option>
                            <?endforeach;?>
                        </select>
                    </p>
                </div>
                <div class="_100">
                    <p><label for="textfield">Tên quyền</label><input id="permissionname" name="permissionname" class="required" type="text" value="" /></p>
                </div>

                <div class="_100">
                    <p><label for="textarea">Mô tả</label><textarea id="permissiondesc" name="permissiondesc" class="required" rows="5" cols="40"></textarea></p>
                </div>

                <div class="clear"></div>
                <div class="block-actions">
                    <ul class="actions-left">
                        <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
                    </ul>
                    <ul class="actions-right">
                        <li><a href="javascript:void(0)" id="savepermission" class="button">Lưu lại</a></li>
                    </ul>
                </div>
            </form>
            <script defer src="<?=backend_js_url()?>/form_handle.js"></script>
        </div>
    </div>

    <div class="clear height-fix"></div>

</div>

