<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?$this->load->block_view('global/head')?>
</head>
<body>
<span class="biglines">&nbsp;</span>
<!-- Wrapper -->
<div id="wrapper_sec">

	<?$this->load->block_view('global/header')?>
	<?$this->load->block_view('global/slider')?>
	<?=$layout_content?>
    
</div>
<div class="clear"></div>
    <?$this->load->block_view('global/footer')?>
</body>
</html>
