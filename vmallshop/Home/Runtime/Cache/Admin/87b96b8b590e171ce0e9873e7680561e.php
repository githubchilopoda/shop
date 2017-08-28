<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/vmallshop/index.php/Admin/User/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [姓名]
						&nbsp;&nbsp;班级：<input size="10" type="text" name="classid" value="<?php echo ($_POST['classid']); ?>"/>
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			
			<li><a class="edit" href="/vmallshop/index.php/Admin/User/edit/user_id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"  width="550" height="380" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10" orderField="user_id" <?php if($_REQUEST['_order']== 'user_id'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>用户id</th>
				
				<th width="20" orderField="user_name" <?php if($_REQUEST['_order']== 'user_name'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>用户名</th>
				
				
				<th width="20" >真实姓名</th>
				
				<th width="20" >性别</th>
				
				<th width="20" >用户邮箱</th>
				<th width="20" >用户注册时间</th>
				<th width="20" >用户最后登录ip</th>
				<th width="20" >用户最后登录时间</th>
				<th width="20" >用户密保答案</th>
				<th width="20" >密保关联id</th>
				<th width="20" orderField="user_lock
				" <?php if($_REQUEST['_order']== 'user_lock'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>是否锁定</th>
				
				
				
				
			</tr>
			
			
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="item_id" rel="<?php echo ($vo["user_id"]); ?>">
					<td><?php echo ($vo["user_id"]); ?></td>
					<td><?php echo ($vo["user_name"]); ?></td>
					<td><?php echo ($vo["true_name"]); ?></td>
					<td><?php if($vo['user_sex'] == 0): ?>女士<?php else: ?>{男士}<?php endif; ?></td>
					<td><?php echo ($vo["user_email"]); ?></td>
					<td><?php echo (date('Y-m-d H:i;s',$vo["user_login_time"])); ?></td>
					<td><?php echo (long2ip($vo["admin_last_ip"])); ?></td>
					<td><?php echo (date('Y-m-d H:i;s',$vo["user_last_time"])); ?></td>
					<td><?php echo ($vo["user_answer"]); ?></td>
					<td><?php echo ($vo["secure_id"]); ?></td>
					 <?php if($vo["user_lock"] == 0): ?><td>可登录</td>
					 
					 <?php else: ?>
					     <td>不可登录</td><?php endif; ?>
					
					
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak(<?php echo (C("TMPL_L_DELIM")); ?>numPerPage:this.value<?php echo (C("TMPL_R_DELIM")); ?>)">
				<option value="10" <?php if($numPerPage == 10): ?>selected<?php endif; ?>>10</option>
				<option value="15" <?php if($numPerPage == 15): ?>selected<?php endif; ?>>15</option>
				<option value="20" <?php if($numPerPage == 20): ?>selected<?php endif; ?>>20</option>
				<option value="25" <?php if($numPerPage == 25): ?>selected<?php endif; ?>>25</option>
				<option value="30" <?php if($numPerPage == 30): ?>selected<?php endif; ?>>30</option>
			</select>
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>