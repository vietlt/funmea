<div class="container_12">
    <div class="grid_12">
        <p><b><a href="<?=base_url('backend/video/add')?>" class="button" >+ Thêm video mới</a></b></p>
        <p>Danh sách tất cả các video của <a href="<?=base_url()?>" target="_blank">Funmea.com</a>.</p>
    </div>

    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1>Danh sách bài đăng video</h1><span></span>
            </div>
            <div class="block-content">
                <table id="table-example" class="table">
                    <thead>
                    <tr>
                        <th>Mã bài đăng</th>
                        <th>Video Code</th>
                        <th>Tiêu đề</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?if(isset($videos)):?>
                        <?foreach($videos as $key => $value):?>
                            <tr class="gradeX" id="row-<?=$value->post_id?>">
                                <td><?=$value->post_id?></td>
                                <td><?=$value->video_code?></td>
                                <td><?=$value->post_title?></td>
                                <td><a href="#" onclick="DeleteVideo(<?=$value->post_id?>)">Xóa</a> | <a href="#">Sửa</a></td>
                            </tr>
                        <?endforeach;?>
                    <?endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $().ready(function() {
        $('#table-example').dataTable({
            "aaSorting": [[ 4, "desc" ]],
        });
    });
</script>
