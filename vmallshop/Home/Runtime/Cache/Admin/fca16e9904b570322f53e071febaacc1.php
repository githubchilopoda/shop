<?php if (!defined('THINK_PATH')) exit();?><//商品新添加界面>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/Admin/insert/navTabId/listadmin/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"  ><?php  ?>
		<div class="pageFormContent" layoutH="60">
			
			<!--<dl>
				<dt>商品编号:</dt>
				<dd><input type="text" class="required digits"  minlength="11" maxlength="11" style="width:100%" name="goods_no"/></dd>
			</dl>-->
			
			
			
			<dl>
				<dt>管理员姓名:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="admin_name"/></dd>
			</dl>
			<dl>
				<dt>密码:</dt>
				<dd><input type="password" class="required"  style="width:100%" name="admin_pwd" id="pwd"/></dd>
			</dl>
			
			<dl>
				<dt>重置密码:</dt>
				<dd><input type="password" class="required"  style="width:100%" name="admin_pwd"  equalto="#pwd"/></dd>
			</dl>
			
			<p>
			<label>是否锁定：</label>
		   <select class="combox required" name="admin_lock" id="w_combox_city" ref="w_combox_area" >
		       <option value="0">可登陆</option>
			   <option value="1">不可登陆</option>
			   
	      </select>
          </p>
			<div class="divider"></div>
		 
		
			 
		    
			  <table>
				   <caption><b>角色选择：</b></caption>
				   <?php if(is_array($role_data)): $i = 0; $__LIST__ = $role_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?><tr>
				     <td>
					 <label><input type="checkbox"   style="width:20%" name="role_id[]" value="<?php echo ($role["role_id"]); ?>"/><?php echo ($role["role_name"]); ?>
					 </label>
					 </td>
				   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			 </table>
         
		  
		  </div>
		  
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>