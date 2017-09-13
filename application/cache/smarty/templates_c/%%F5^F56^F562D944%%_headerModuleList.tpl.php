<?php /* Smarty version 2.6.11, created on 2017-09-13 21:18:28
         compiled from themes/SuiteR/tpls/_headerModuleList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_link', 'themes/SuiteR/tpls/_headerModuleList.tpl', 209, false),array('modifier', 'count', 'themes/SuiteR/tpls/_headerModuleList.tpl', 493, false),)), $this); ?>
		

<script type="text/javascript">
 <?php echo '
/*$(document).ajaxStart(function(){
    $(\'#loading\').show();
 }).ajaxStop(function(){
    $(\'#loading\').hide();
 });

*/

		function quickcreatemultiplefunction() {

		SUGAR.ajaxUI.submitForm("EditView");
		window.top.location.reload();
		$("#quiccreateframe").attr("src", "");
		}

$(document).ready(function(){
		$(".closequickcreate").click(function(){
		$("#quiccreateframe").attr("src", "");
		})

		$(".quickacreateclick").click(function(){
		var qid=(this.id);

		if(qid=="quickcreateaccount")
		{
		$("#quiccreateframe").attr("src", "index.php?module=Accounts&action=EditView&return_module=Accounts&return_action=DetailView");
		}else if(qid=="quickcreatecontact")
		{
		$("#quiccreateframe").attr("src", "index.php?module=Contacts&action=EditView&return_module=Contacts&return_action=DetailView");
		}else if(qid=="quickcreateopportunity")
		{
		$("#quiccreateframe").attr("src", "index.php?module=Opportunities&action=EditView&return_module=Opportunities&return_action=DetailView");
		}else if(qid=="quickcreatelead")
		{
		$("#quiccreateframe").attr("src", "index.php?module=Leads&action=EditView&return_module=Leads&return_action=DetailView");
		}else if(qid=="quickcreatedocument")
		{
		$("#quiccreateframe").attr("src", "index.php?module=Documents&action=EditView&return_module=Documents&return_action=DetailView");
		}else if(qid=="quickcreatecall")
		{
		$("#quiccreateframe").attr("src", "index.php?module=Calls&action=EditView&return_module=Calls&return_action=DetailView");
		}else if(qid=="quickcreatetask")
		{
		$("#quiccreateframe").attr("src", "index.php?module=Tasks&action=EditView&return_module=Tasks&return_action=DetailView");
		}
		$("#quiccreateframe").show();
		})


		$("#quiccreateframe").load(function (e) {
		$(\'#quiccreateframe\').contents().find("#SAVE_HEADER").attr("onclick", "var _form = document.getElementById(\'EditView\'); _form.action.value=\'Save\'; if(check_form(\'EditView\'))quickcreatemultiplefunction();return false;");
		$(\'#quiccreateframe\').contents().find("#SAVE_FOOTER").attr("onclick", "var _form = document.getElementById(\'EditView\'); _form.action.value=\'Save\'; if(check_form(\'EditView\'))quickcreatemultiplefunction();return false;");

		$(\'#quiccreateframe\').contents().find(\'footer\').hide();  
		$(\'#quiccreateframe\').contents().find(\'.navbar-fixed-top\').hide();  
		$(\'#quiccreateframe\').contents().find(\'#CANCEL_HEADER\').hide();  
		$(\'#quiccreateframe\').contents().find(\'#CANCEL_FOOTER\').hide();  

		//$(\'#quiccreateframe\').contents().find(\'#EditView\').submit(function() { 
		//$("#quiccreateframe").attr("src", "");
		//e.preventDefault();
		//window.parent.jQuery(\'#quickcreatemodal\').modal(\'hide\');
		//window.parent.jQuery(\'#quiccreateframe\').hide();
		//return true; //return false prevents submit
		//});
		});
				
			
  
//	$(\'#SAVE_HEADER\').click(function(e){
//	if ($(\'.required\').length)
//	{
//	alert($(\'#quiccreateframe\').length);
//	}
//	else
//	{
//	alert("not exist");
//	}
//	})
//$(\'#quiccreateframe\').load(function() {
  
  // $(\'#quiccreateframe\').contents().find(\'#EditView\').submit(function() {
  // return false;
  // });
  // });


//$(\'#SAVE_HEADER\').click(function(e){
	//e.preventDefault();
	//window.parent.jQuery(\'#quickcreatemodal\').modal(\'hide\');
	//window.parent.jQuery(\'#quiccreateframe\').hide();
//})

    
 
    
        $(".slide-toggle").click(function(){
            $(".box").animate({
                width: "toggle"
            });
        });
              
  /*  $(".slide-toggle").click(function(){
     var check=$(\'.box\').css(\'display\');
 
    var i=1;
	if(check == \'block\')
	{
	alert(i++);
	$(".search-change-icon").html("<i class=\'fa fa-times-circle fa-lg\' aria-hidden=\'true\'></i>");
	}else
	{
	$(".search-change-icon").html("<i class=\'fa fa-search fa-lg\' aria-hidden=\'true\'></i>");
	}
	})    
    */
    
      
    });
    
    
		$(document).click(function () {
		$(\'#quickcreatetop\').click(function(event){
        $("#quickcreatetopul").slideDown();
		});
		});

		$(document).on("click", function () {
		$("#quickcreatetopul").hide();
		});
    '; ?>

   
</script>




<!--Start Responsive Top Navigation Menu -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header" >


            <a class="navbar-brand simple-logo" href="index.php?module=Home&action=index">            <img src="themes/SuiteR/images/imgpsh_fullsize35.png" title="<?php echo $this->_tpl_vars['APP']['LBL_BROWSER_TITLE']; ?>
" class="img-responsive"/>
            </a>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile_menu" style="background-color:transparent !important;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <div id="mobileheader">
                <div id="modulelinks">
                    <?php $_from = $this->_tpl_vars['moduleTopMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['MODULE_TAB']): ?>
                            <span class="modulename" data-toggle="dropdown" aria-expanded="false"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module']), $this);?>
</span>
                            <?php if ($this->_tpl_vars['name'] != 'Home'): ?>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if (count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
                                        <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                            <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                                <li><a></a><span>&nbsp;</span></li>
                                            <?php else: ?>
                                                <li><a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
"><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</a></li>
                                            <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
                <form id="searchmobile" onsubmit="return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()" action="index.php" name="UnifiedSearch">
                    <input class="form-control" type="hidden" value="UnifiedSearch" name="action">
                    <input class="form-control" type="hidden" value="Home" name="module">
                    <input class="form-control" type="hidden" value="false" name="search_form">
                    <input class="form-control" type="hidden" value="false" name="advanced">
                <span class="input-group-btn">
                    <input id="query_string" class="form-control" type="text" placeholder="Search..." name="query_string">
                </span>
                </form>
                <div id="mobilegloballinks">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-option-vertical"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <?php $_from = $this->_tpl_vars['GCLS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gcl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gcl']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcl_key'] => $this->_tpl_vars['GCL']):
        $this->_foreach['gcl']['iteration']++;
?>
                            <li role="presentation">
                                <a id="<?php echo $this->_tpl_vars['gcl_key']; ?>
_link" href="<?php echo $this->_tpl_vars['GCL']['URL']; ?>
"<?php if (! empty ( $this->_tpl_vars['GCL']['ONCLICK'] )): ?> onclick="<?php echo $this->_tpl_vars['GCL']['ONCLICK']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['GCL']['LABEL']; ?>
</a>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                        <li role="presentation"><a role="menuitem" id="logout_link" href='<?php echo $this->_tpl_vars['LOGOUT_LINK']; ?>
' class='utilsLink'><?php echo $this->_tpl_vars['LOGOUT_LABEL']; ?>
</a></li>
                    </ul>
                </div>
                <div id="userlinks_head" class="navbar-toggle collapsed">
                    <a href="javascript:void(0)" id="userlinks_togglemobilesearch"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="hidden-xs hidden-sm" id="bs-example-navbar-collapse-1">
            <?php if ($this->_tpl_vars['USE_GROUP_TABS']): ?>
                <ul class="nav navbar-nav">
                    <?php $this->assign('groupSelected', false); ?>
                    <?php $_from = $this->_tpl_vars['moduleTopMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['MODULE_TAB']): ?>
                            <li class="topnav">
                                <?php if ($this->_tpl_vars['name'] != 'Home'): ?>
                                    <span class="currentTabLeft">&nbsp;</span>
                                    <span class="currentTab" style="color:#ffffff !important;"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module']), $this);?>
</span>
                                    <span>&nbsp;</span>
                                <?php endif; ?>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if (count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
                                        <h3 class="home_h3"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
</h3>
                                        <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                            <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                                <li><a></a><span>&nbsp;</span></li>
                                            <?php else: ?>
                                                <li ><a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
"><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</a></li>
                                            <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
                                    <h3 class="recent_h3"><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</h3>
                                    <?php $_from = $this->_tpl_vars['recentRecords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                                            <div class="recently_viewed_link_container">
                                                <li class="recentlinks_topedit">
                                                    <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></a>
                                                </li>
                                                <li class="recentlinks_top" role="presentation">
                                                    <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
" accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
" href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</a>
                                                </li>
                                            </div>
                                        <?php endif; ?>
                                        <?php endforeach; else: ?>
                                        <?php echo $this->_tpl_vars['APP']['NTC_NO_ITEMS_DISPLAY']; ?>

                                    <?php endif; unset($_from); ?>
                                    <h3 class="recent_h3"><?php echo $this->_tpl_vars['APP']['LBL_FAVORITES']; ?>
</h3>
                                    <?php $_from = $this->_tpl_vars['favoriteRecords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                                            <div class="recently_viewed_link_container">
                                                <li class="recentlinks_topedit">
                                                    <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></a>
                                                </li>
                                                <li class="recentlinks_top" role="presentation">
                                                    <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
" accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
" href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</a>
                                                </li>
                                            </div>
                                        <?php endif; ?>
                                        <?php endforeach; else: ?>
                                        <?php echo $this->_tpl_vars['APP']['NTC_NO_ITEMS_DISPLAY']; ?>

                                    <?php endif; unset($_from); ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php $_from = $this->_tpl_vars['groupTabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groupList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group'] => $this->_tpl_vars['modules']):
        $this->_foreach['groupList']['iteration']++;
?>
                        <?php ob_start(); ?>parentTab=<?php echo $this->_tpl_vars['group'];  $this->_smarty_vars['capture']['extraparams'] = ob_get_contents();  $this->assign('extraparams', ob_get_contents());ob_end_clean(); ?>
                        <li class="topnav">
                            <span class="notCurrentTabLeft">&nbsp;</span><span class="notCurrentTab">
                            <a href="#" id="grouptab_<?php echo ($this->_foreach['groupList']['iteration']-1); ?>
" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->_tpl_vars['group']; ?>
</a>
                            <span class="notCurrentTabRight">&nbsp;</span>
                            <ul class="dropdown-menu" role="menu" <?php if (($this->_foreach['groupList']['iteration'] == $this->_foreach['groupList']['total'])): ?> class="All"<?php endif; ?>>
                                <?php $_from = $this->_tpl_vars['modules']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modulekey'] => $this->_tpl_vars['module']):
?>
                                    <li>
                                        <?php ob_start(); ?>moduleTab_<?php echo ($this->_foreach['moduleList']['iteration']-1); ?>
_<?php echo $this->_tpl_vars['module'];  $this->_smarty_vars['capture']['moduleTabId'] = ob_get_contents();  $this->assign('moduleTabId', ob_get_contents());ob_end_clean(); ?>
                                        <?php echo smarty_function_sugar_link(array('id' => $this->_tpl_vars['moduleTabId'],'module' => $this->_tpl_vars['modulekey'],'data' => $this->_tpl_vars['module'],'extraparams' => $this->_tpl_vars['extraparams']), $this);?>

                                    </li>
                                <?php endforeach; endif; unset($_from); ?>
                                <?php $_from = $this->_tpl_vars['modules']['extra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submodule'] => $this->_tpl_vars['submodulename']):
?>
                                    <li><a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['submodule'],'link_only' => 1,'extraparams' => $this->_tpl_vars['extraparams']), $this);?>
"><?php echo $this->_tpl_vars['submodulename']; ?>
</a></li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav" style="margin-left:10px;">
                    <?php $_from = $this->_tpl_vars['moduleTopMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['MODULE_TAB']): ?>
                            <li class="topnav">
                                <?php if ($this->_tpl_vars['name'] != 'Home'): ?>
                                    <span class="currentTabLeft">&nbsp;</span>
                                    <span class="dropdown-toggle headerlinks currentTab"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module']), $this);?>
</span><span>&nbsp;</span>
                                <?php endif; ?>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if (count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
                                        <h3 class="home_h3"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
</h3>
                                        <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                            <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                                <li><a></a><span>&nbsp;</span></li>
                                            <?php else: ?>
                                                <li ><a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
" ><span><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</span></a></li>
                                            <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
                                    <h3 class="recent_h3"><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</h3>
                                    <?php $_from = $this->_tpl_vars['recentRecords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                                            <div class="recently_viewed_link_container">
                                                <li class="recentlinks_topedit"><a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></a></li>
                                                <li class="recentlinks_top" role="presentation">
                                                    <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
"
                                                       accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                                       href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
">
                                                        <?php echo $this->_tpl_vars['item']['item_summary_short']; ?>

                                                    </a>
                                                </li>
                                            </div>
                                        <?php endif; ?>
                                        <?php endforeach; else: ?>
                                        <?php echo $this->_tpl_vars['APP']['NTC_NO_ITEMS_DISPLAY']; ?>

                                    <?php endif; unset($_from); ?>
                                    <h3 class="recent_h3"><?php echo $this->_tpl_vars['APP']['LBL_FAVORITES']; ?>
</h3>
                                    <?php $_from = $this->_tpl_vars['favoriteRecords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                                            <div class="recently_viewed_link_container">
                                                <li class="recentlinks_topedit">
                                                    <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></a>
                                                </li>
                                                <li class="recentlinks_top" role="presentation">
                                                    <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
" accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
" href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</a>
                                                </li>
                                            </div>
                                        <?php endif; ?>
                                        <?php endforeach; else: ?>
                                        <?php echo $this->_tpl_vars['APP']['NTC_NO_ITEMS_DISPLAY']; ?>

                                    <?php endif; unset($_from); ?>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="topnav">
                                <?php if ($this->_tpl_vars['name'] != 'Home'): ?>
                                    <span class="notCurrentTabLeft">&nbsp;</span>
                                    <span class="dropdown-toggle headerlinks notCurrentTab"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module']), $this);?>
</span><span class="notCurrentTabRight">&nbsp;</span>
                                <?php endif; ?>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if (count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
                                        <h3 class="home_h3"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
</h3>
                                        <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                            <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                                <li><a></a><span>&nbsp;</span></li>
                                            <?php else: ?>
                                                <li><a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
"><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</a></li>
                                            <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
                                    <h3 class="recent_h3"><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</h3>
                                    <?php $_from = $this->_tpl_vars['recentRecords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                                            <div class="recently_viewed_link_container">
                                                <li class="recentlinks_topedit"><a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></a></li>
                                                <li class="recentlinks_top" role="presentation">
                                                    <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
"
                                                       accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                                       href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
">
                                                        <?php echo $this->_tpl_vars['item']['item_summary_short']; ?>

                                                    </a>
                                                </li>
                                            </div>
                                        <?php endif; ?>
                                        <?php endforeach; else: ?>
                                        <?php echo $this->_tpl_vars['APP']['NTC_NO_ITEMS_DISPLAY']; ?>

                                    <?php endif; unset($_from); ?>
                                    <h3 class="recent_h3"><?php echo $this->_tpl_vars['APP']['LBL_FAVORITES']; ?>
</h3>
                                    <?php $_from = $this->_tpl_vars['favoriteRecords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                                            <div class="recently_viewed_link_container">
                                                <li class="recentlinks_topedit">
                                                    <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" style="margin-left:10px;"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></a>
                                                </li>
                                                <li class="recentlinks_top" role="presentation">
                                                    <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
" accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
" href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</a>
                                                </li>
                                            </div>
                                        <?php endif; ?>
                                        <?php endforeach; else: ?>
                                        <?php echo $this->_tpl_vars['APP']['NTC_NO_ITEMS_DISPLAY']; ?>

                                    <?php endif; unset($_from); ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php if (count ( $this->_tpl_vars['moduleExtraMenu'] ) > 0): ?>
                        <li class="dropdown-toggle moremenu ">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="bigmenu">
                                    <?php $_from = $this->_tpl_vars['moduleExtraMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
                                        <li><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module']), $this);?>
</li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </div>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
            
   			<?php 
	global $current_user;
			$profile_path_img="index.php?entryPoint=download&amp;id=".$current_user->id."_user_profile_c&amp;type=Users";
			$profile_path="upload/".$current_user->id."_user_profile_c";
			$this->assign("profile_path_tpl", "$profile_path");
			 ?>
		<!--	<div id="globalLinks" class="dropdown nav navbar-nav navbar-right"> -->
			<div id="globalLinks" class="dropdown navbar-nav navbar-right" style="padding:6px">
			<li id="usermenu" class="dropdown-toggle" aria-expanded="true">
			<?php if (file_exists ( $this->_tpl_vars['profile_path_tpl'] )): ?>
			<a href='index.php?module=Users&action=DetailView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
' style="padding-top:9px" class="profile-icon-hd" ><div class="profile_pic" style='background-image:url(<?php echo $profile_path_img; ?>)'>
			</div>
			</a>
			<?php else: ?>
			<div class="profile_pic" style="margin-top:3px"><a href='index.php?module=Users&action=DetailView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
' style="padding-top:9px" data-letters="<?php echo $this->_tpl_vars['FIRST_LETTER_CURRENT_USER']; ?>
" class="profile-icon-hd">			</a></div>
			<?php endif; ?>
			</li>
			<div class="admin-mobile">
			<a href="javascript:void(0)" id="usermenucollapsed" class="dropdown-toggle " data-toggle="dropdown" aria-expanded="true">

			<i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>

			</a></div>
		
			<ul class="dropdown-menu custom-profile-menu" role="menu" aria-labelledby="dropdownMenu1" >
			<li style="text-align:center;">
			

			<?php if (file_exists ( $this->_tpl_vars['profile_path_tpl'] )): ?>
			<a href='index.php?module=Users&action=DetailView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
' style="padding-top:9px;max-width:100% !important;"><div class="profile_pic_big" style='border:1px solid #D9DADA;background-image:url(<?php echo $profile_path_img; ?>)'></div></a>
			<?php else: ?>
			<div class="profile_pic_big" ><a href='index.php?module=Users&action=DetailView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
' style="padding-top:0px;max-width:100% !important" data-letters-big="<?php echo $this->_tpl_vars['FIRST_LETTER_CURRENT_USER']; ?>
">	</a></div>
			<?php endif; ?>
			</li>
			<li style="text-align:center"><strong><?php echo $this->_tpl_vars['CURRENT_USER']; ?>
</strong></li>
			<li style="text-align:center"><?php echo $this->_tpl_vars['CURRENT_USER_EMAIL']; ?>
</li>
			
			<li>
			<div  style="text-align:center;padding:0px 0px 0px 0px">
				

			<?php if (count($this->_tpl_vars['GCLS']) > 1): ?>
			<?php $this->assign('link_size', "col-sm-6"); ?>
			<?php else: ?>
			<?php $this->assign('link_size', "col-sm-12"); ?>
			<?php endif; ?>
			<?php $_from = $this->_tpl_vars['GCLS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gcl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gcl']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcl_key'] => $this->_tpl_vars['GCL']):
        $this->_foreach['gcl']['iteration']++;
?>
			
			<a role="menuitem" style="float:left; color:#2767A8 !important;max-width:100% !important;" id="<?php echo $this->_tpl_vars['gcl_key']; ?>
_link" class="<?php echo $this->_tpl_vars['link_size']; ?>
"  href="<?php echo $this->_tpl_vars['GCL']['URL']; ?>
"<?php if (! empty ( $this->_tpl_vars['GCL']['ONCLICK'] )): ?> onclick="<?php echo $this->_tpl_vars['GCL']['ONCLICK']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['GCL']['LABEL']; ?>
</a>
			<?php endforeach; endif; unset($_from); ?>
			</div>
			</li>
			
			<li ><br></li>
			<li style="margin:0px;"><div style="padding:10px;background-color: whitesmoke;"><a role="menuitem"  id="logout_link" href='<?php echo $this->_tpl_vars['LOGOUT_LINK']; ?>
' class='utilsLink custom-logout-link btn btn-xs' style="padding:3px"><?php echo $this->_tpl_vars['LOGOUT_LABEL']; ?>
</a></div></li>
			
			</ul>
			</div>

   
   
             <div id="quickcreatetop" class="dropdown nav navbar-nav navbar-right">
                <a class="dropdown-toggle" aria-expanded="false" id="quickcreatetoplink">
                    <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
              </a>
                <ul class="dropdown-menu" role="menu" id="quickcreatetopul">
                
                
                
                
                    
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#quickcreatemodal" id="quickcreateaccount" class="quickacreateclick"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_ACCOUNT']; ?>
</a></li>
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#quickcreatemodal" id="quickcreatecontact" class="quickacreateclick"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CONTACT']; ?>
</a></li>
					<li><a  href="javascript:void(0)" data-toggle="modal" data-target="#quickcreatemodal" id="quickcreateopportunity" class="quickacreateclick"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_OPPORTUNITY']; ?>
</a></li>
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#quickcreatemodal" id="quickcreatelead" class="quickacreateclick"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_LEAD']; ?>
</a></li>
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#quickcreatemodal" id="quickcreatedocument" class="quickacreateclick"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_DOCUMENT']; ?>
</a></li>
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#quickcreatemodal" id="quickcreatecall" class="quickacreateclick"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CALL']; ?>
</a></li>
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#quickcreatemodal" id="quickcreatetask" class="quickacreateclick"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_TASK']; ?>
</a></li>

                </ul>
            </div>
            
         
        
           
            <div id="desktop_notifications" class="dropdown nav navbar-nav navbar-right">
                                <a class="notification_link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="fa fa-bell fa-lg" aria-hidden="true" style="color:white">

                </span>
                <span class="custom_bedge"><span class="alert_count" >0</span></span>                
                
				</a>
                <div id="alerts" class="dropdown-menu" role="menu"><?php echo $this->_tpl_vars['APP']['LBL_EMAIL_ERROR_VIEW_RAW_SOURCE']; ?>
</div>
            </div>
        </div>

 

<div class="nav navbar-nav navbar-right ">
<div class="custom-search-button">
<a class="slide-toggle"><span class="search-change-icon"><i class="fa fa-search fa-lg" aria-hidden="true"></i></span></a>
</div> 
</div>
		<div class="box dropdown nav navbar-nav navbar-right" style="float:left;overflow: hidden;display: none;margin-right:0px !important
		">	 
			 <div id="search " >
 
                <button id="searchbutton" class="dropdown-toggle btn btn-default" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                </button>
                <div  class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <form id="searchformdropdown" name='UnifiedSearch' action='index.php' onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                        <input type="hidden" class="form-control" name="action" value="UnifiedSearch">
                        <input type="hidden" class="form-control" name="module" value="Home">
                        <input type="hidden" class="form-control" name="search_form" value="false">
                        <input type="hidden" class="form-control" name="advanced" value="false">
                        <div class="input-group">
                            <input type="text" class="form-control"  name="query_string" id="query_string" placeholder="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
..." value="<?php echo $this->_tpl_vars['SEARCH']; ?>
" />
                            <span class="input-group-btn">
                                <button  type="submit" class="btn btn-default" ><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <form id="searchform" class="navbar-form navbar-right" name='UnifiedSearch' action='index.php' onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                <input type="hidden" class="form-control" name="action" value="UnifiedSearch">
                <input type="hidden" class="form-control" name="module" value="Home">
                <input type="hidden" class="form-control" name="search_form" value="false">
                <input type="hidden" class="form-control" name="advanced" value="false">
                <div class="input-group" style="margin-right: -24px !important;">
                    <input type="text" class="form-control custom_search_input"  name="query_string" id="query_string" placeholder="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
..." value="<?php echo $this->_tpl_vars['SEARCH']; ?>
"  />
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default" style="display:none" ><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                    </span>
                </div>
            </form>    
</div>



        <div class="collapse navbar-collapse hidden-lg hidden-md" id="mobile_menu">
            <?php $_from = $this->_tpl_vars['groupTabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groupList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group'] => $this->_tpl_vars['modules']):
        $this->_foreach['groupList']['iteration']++;
?>
                <?php if (($this->_foreach['groupList']['iteration'] == $this->_foreach['groupList']['total'])): ?>
                <?php ob_start(); ?>parentTab=<?php echo $this->_tpl_vars['group'];  $this->_smarty_vars['capture']['extraparams'] = ob_get_contents();  $this->assign('extraparams', ob_get_contents());ob_end_clean(); ?>
                                <?php $_from = $this->_tpl_vars['modules']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modulekey'] => $this->_tpl_vars['module']):
?>
                                    <?php if ($this->_tpl_vars['modulekey'] != 'Home' && $this->_tpl_vars['modulekey'] != 'Calendar'): ?>
                                        <li style="float:right;">
                                            <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['modulekey'],'action' => 'EditView','link_only' => 1), $this);?>
"><span class="glyphicon glyphicon-plus"></span></a>
                                        </li>
                                    <?php endif; ?>
                                    <li>
                                        <?php ob_start(); ?>moduleTab_<?php echo ($this->_foreach['moduleList']['iteration']-1); ?>
_<?php echo $this->_tpl_vars['module'];  $this->_smarty_vars['capture']['moduleTabId'] = ob_get_contents();  $this->assign('moduleTabId', ob_get_contents());ob_end_clean(); ?>
                                        <?php echo smarty_function_sugar_link(array('id' => $this->_tpl_vars['moduleTabId'],'module' => $this->_tpl_vars['modulekey'],'data' => $this->_tpl_vars['module'],'extraparams' => $this->_tpl_vars['extraparams']), $this);?>

                                    </li>
                                <?php endforeach; endif; unset($_from); ?>
                                <?php $_from = $this->_tpl_vars['modules']['extra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submodule'] => $this->_tpl_vars['submodulename']):
?>
                                    <li style="float:right;">
                                        <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['modulekey'],'action' => 'EditView','link_only' => 1), $this);?>
"><span class="glyphicon glyphicon-plus"></span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['submodule'],'link_only' => 1,'extraparams' => $this->_tpl_vars['extraparams']), $this);?>
"><?php echo $this->_tpl_vars['submodulename']; ?>
</a>
                                    </li>
                                <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </div>
</nav>
<!--Start Page content -->



  <!-- Modal -->
  <div class="modal fade" id="quickcreatemodal" role="dialog">
      <div class="modal-dialog modal-lg" >
      <div class="modal-content" >
 
       
        <div class="modal-body quickcreatebody">
        
        <button type="button" class="close closequickcreate" data-dismiss="modal">&times;</button>
         
         <iframe id="quiccreateframe" src="" width="100%" height="600" style="border:0px">
     </iframe>
   <?php 
//   include("include/EditView/EditView.tpl");
    ?>
          <button type="button" class="btn btn-default closequickcreate" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
