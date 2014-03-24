<div class="container_12">

    <div class="grid_12">
        <h1>Quản trị nhóm người dùng</h1>
    </div>

    <div class="grid_12" id="show-message">
    </div>

    <div class="grid_6">
            <div class="block-border">
                <div class="block-header">
                    <h1>Danh sách nhóm người dùng</h1><span></span>
                </div>
                <div class="block-content">
                    <ul id="list-roles" class="block-list with-icon">
                        <?foreach($all_roles as $key => $value):?>
                            <li class="i-16-user-red" id="row-<?=$value->getRole_id()?>"><a href="javascript:void(0);" rel="tooltip-top" original-title="<?=$value->getRole_description()?>"><?=$value->getRole_name()?></a>
                                <span style="float:right;font-weight: bold">
                                <a id="alert" onclick="EditRole(<?=$value->getRole_id()?>)" href="javascript:void(0)">Sửa</a>&nbsp;&nbsp;&nbsp;
                                <a id="alert" onclick="DeleteRole(<?=$value->getRole_id()?>)" href="javascript:void(0)">Xóa</a></span>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
                <div class="block-content dark-bg">
                    <p>Visit the <a href="list_block.html">Block List</a> page to see the other types of block lists.</p>
                </div>
            </div>
        </div>

    <div class="grid_6">
            <div class="block-border">
                <div class="block-header">
                    <h1>Thêm mới nhóm người dùng</h1><span></span>
                </div>
                <form id="validate-form" class="block-content form" action="dashboard.html" method="post">
                    <p class="inline-mini-label">
                        <label for="title">Tên nhóm :</label>
                    <p><input type="text" id="rolename" name="rolename" class="required"></p>
                    </p>
                    <p class="inline-mini-label">
                        <label for="post">Mô tả :</label>
                    <p><textarea type="text" id="roledesc" name="roledesc" class="required" rows="4"></textarea></p>
                    </p>
                    </p>
                    <div class="clear"></div>

                    <!-- Buttons with actionbar  -->
                    <div class="block-actions">
                        <ul class="actions-left">
                            <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Cancel</a></li>
                        </ul>
                        <ul class="actions-right">
                            <li><a href="javascript:void(0)" class="button" id="saverole">Lưu lại</a></li>
                        </ul>
                    </div> <!--! end of #block-actions -->
                </form>
                <script defer src="<?=backend_js_url()?>/form_handle.js"></script>
            </div>
        </div>

    <div class="clear height-fix"></div>
</div>
