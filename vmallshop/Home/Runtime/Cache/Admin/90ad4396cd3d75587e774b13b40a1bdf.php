<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/Link/insert/navTabId/listlink/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>ID:</dt>
				<dd><input type="text"  style="width:100%" name="link_id"/></dd>
			</dl>
			
			<dl>
				<dt>URL:</dt>
				<dd><input type="text" class="required url"  style="width:100%" name="link_url"/></dd>
			</dl>
			
			<dl>
				<dt>名称:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="link_name"/></dd>
			</dl>
			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>