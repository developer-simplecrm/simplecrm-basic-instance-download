<?php /* Smarty version 2.6.11, created on 2017-09-13 20:03:57
         compiled from custom/modules/Configurator/asterisk_configurator.tpl */ ?>
<script type='text/javascript' src='include/javascript/overlibmws.js'></script>
<BR>
<form name="ConfigureSettings" enctype='multipart/form-data' method="POST" action="index.php" onSubmit="return (add_checks(document.ConfigureSettings) && check_form('ConfigureSettings'));">
    <input type='hidden' name='action' value='asterisk_configurator'/>
    <input type='hidden' name='module' value='Configurator'/>
    <span class='error'><?php echo $this->_tpl_vars['error']['main']; ?>
</span>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>

            <td style="padding-bottom: 2px;">
                <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button"  type="submit"  name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " >
                &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " > 
                &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href = 'index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " > 
            </td>	
        </tr>
        <tr><td>
                <br>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                    <tr><th align="left" class="dataLabel" colspan="4"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_MANAGE_ASTERISK']; ?>
</h4></th>
                    </tr><tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_HOST']; ?>
: </td>
                                    <td width="25%" class="dataField">
                                        <?php if (empty ( $this->_tpl_vars['config']['asterisk_host'] )): ?>
                                            <?php $this->assign('asterisk_host', $this->_tpl_vars['asterisk_config']['asterisk_host']); ?>
                                        <?php else: ?>
                                            <?php $this->assign('asterisk_host', $this->_tpl_vars['config']['asterisk_host']); ?>
                                        <?php endif; ?>
                                        <input type='text' name='asterisk_host' size="45" value='<?php echo $this->_tpl_vars['asterisk_host']; ?>
'>
                                    </td>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_PORT']; ?>
: </td>
                                    <td width="25%" class="dataField">
                                        <?php if (empty ( $this->_tpl_vars['config']['asterisk_port'] )): ?>
                                            <?php $this->assign('asterisk_port', $this->_tpl_vars['asterisk_config']['asterisk_port']); ?>
                                        <?php else: ?>
                                            <?php $this->assign('asterisk_port', $this->_tpl_vars['config']['asterisk_port']); ?>
                                        <?php endif; ?>
                                        <input type='text' name='asterisk_port' size="45" value='<?php echo $this->_tpl_vars['asterisk_port']; ?>
'>
                                    </td>
                                </tr><tr>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_USER']; ?>
: </td>
                                    <td width="25%" class="dataField">
                                        <?php if (empty ( $this->_tpl_vars['config']['asterisk_user'] )): ?>
                                            <?php $this->assign('asterisk_user', $this->_tpl_vars['asterisk_config']['asterisk_user']); ?>
                                        <?php else: ?>
                                            <?php $this->assign('asterisk_user', $this->_tpl_vars['config']['asterisk_user']); ?>
                                        <?php endif; ?>
                                        <input type='text' name='asterisk_user' size="45" value='<?php echo $this->_tpl_vars['asterisk_user']; ?>
'>
                                    </td>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_SECRET']; ?>
: </td>
                                    <td width="25%" class="dataField">
                                        <?php if (empty ( $this->_tpl_vars['config']['asterisk_secret'] )): ?>
                                            <?php $this->assign('asterisk_secret', $this->_tpl_vars['asterisk_config']['asterisk_secret']); ?>
                                        <?php else: ?>
                                            <?php $this->assign('asterisk_secret', $this->_tpl_vars['config']['asterisk_secret']); ?>
                                        <?php endif; ?>
                                        <input type='text' name='asterisk_secret' size="45" value='<?php echo $this->_tpl_vars['asterisk_secret']; ?>
'>
                                    </td>
                                </tr><tr>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_CONTEXT']; ?>
: </td>
                                    <td width="25%" class="dataField">
                                        <?php if (empty ( $this->_tpl_vars['config']['asterisk_context'] )): ?>
                                            <?php $this->assign('asterisk_context', $this->_tpl_vars['asterisk_config']['asterisk_context']); ?>
                                        <?php else: ?>
                                            <?php $this->assign('asterisk_context', $this->_tpl_vars['config']['asterisk_context']); ?>
                                        <?php endif; ?>
                                        <input type='text' name='asterisk_context' size="45" value='<?php echo $this->_tpl_vars['asterisk_context']; ?>
'>
                                    </td>

                                </tr><tr>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_PREFIX']; ?>
: </td>
                                    <td width="25%" class="dataField">
                                        <?php if (empty ( $this->_tpl_vars['config']['asterisk_prefix'] )): ?>
                                            <?php $this->assign('asterisk_prefix', $this->_tpl_vars['asterisk_config']['asterisk_prefix']); ?>
                                        <?php else: ?>
                                            <?php $this->assign('asterisk_prefix', $this->_tpl_vars['config']['asterisk_prefix']); ?>
                                        <?php endif; ?>
                                        <input type='text' name='asterisk_prefix' size="45" value='<?php echo $this->_tpl_vars['asterisk_prefix']; ?>
'>
                                    </td>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_DIALINPREFIX']; ?>
: </td>
                                    <td width="25%" class="dataField">
                                        <?php if (empty ( $this->_tpl_vars['config']['asterisk_dialinPrefix'] )): ?>
                                            <?php $this->assign('asterisk_dialinPrefix', $this->_tpl_vars['asterisk_config']['asterisk_dialinPrefix']); ?>
                                        <?php else: ?>
                                            <?php $this->assign('asterisk_dialinPrefix', $this->_tpl_vars['config']['asterisk_dialinPrefix']); ?>
                                        <?php endif; ?>
                                        <input type='text' name='asterisk_dialinPrefix' size="45" value='<?php echo $this->_tpl_vars['asterisk_dialinPrefix']; ?>
'>
                                    </td>		
                                </tr><tr>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_EXPR']; ?>
: </td>
                                    <td width="25%" class="dataField">
                                        <?php if (empty ( $this->_tpl_vars['config']['asterisk_expr'] )): ?>
                                            <?php $this->assign('asterisk_expr', $this->_tpl_vars['asterisk_config']['asterisk_expr']); ?>
                                        <?php else: ?>
                                            <?php $this->assign('asterisk_expr', $this->_tpl_vars['config']['asterisk_expr']); ?>
                                        <?php endif; ?>
                                        <input type='text' name='asterisk_expr' size="45" value='<?php echo $this->_tpl_vars['asterisk_expr']; ?>
'>
                                    </td>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_SOAPUSER']; ?>
: </td>
                                    <td width="25%" class="dataField">
                                        <?php if (empty ( $this->_tpl_vars['config']['asterisk_soapuser'] )): ?>
                                            <?php $this->assign('asterisk_soapuser', $this->_tpl_vars['asterisk_config']['asterisk_soapuser']); ?>
                                        <?php else: ?>
                                            <?php $this->assign('asterisk_soapuser', $this->_tpl_vars['config']['asterisk_soapuser']); ?>
                                        <?php endif; ?>
                                        <input type='text' name='asterisk_soapuser' size="45" value='<?php echo $this->_tpl_vars['asterisk_soapuser']; ?>
'>
                                    </td>
                                </tr>

                                <!-- Added in yaii 2.0 -->

                    </tr><tr>
                        <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_DIALOUT_CHANNEL']; ?>
: </td>
                        <td width="25%" class="dataField">
                            <?php if (empty ( $this->_tpl_vars['config']['asterisk_dialout_channel'] )): ?>
                                <?php $this->assign('asterisk_dialout_channel', $this->_tpl_vars['asterisk_config']['asterisk_dialout_channel']); ?>
                            <?php else: ?>
                                <?php $this->assign('asterisk_dialout_channel', $this->_tpl_vars['config']['asterisk_dialout_channel']); ?>
                            <?php endif; ?>
                            <input type='text' name='asterisk_dialout_channel' size="45" value='<?php echo $this->_tpl_vars['asterisk_dialout_channel']; ?>
'>
                        </td>
                        <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_DIALIN_EXT_MATCH']; ?>
: </td>
                        <td width="25%" class="dataField">
                            <?php if (empty ( $this->_tpl_vars['config']['asterisk_dialin_ext_match'] )): ?>
                                <?php $this->assign('asterisk_dialin_ext_match', $this->_tpl_vars['asterisk_config']['asterisk_dialin_ext_match']); ?>
                            <?php else: ?>
                                <?php $this->assign('asterisk_dialin_ext_match', $this->_tpl_vars['config']['asterisk_dialin_ext_match']); ?>
                            <?php endif; ?>
                            <input type='text' name='asterisk_dialin_ext_match' size="45" value='<?php echo $this->_tpl_vars['asterisk_dialin_ext_match']; ?>
'>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_CALL_SUBJECT_INBOUND_ABBR']; ?>
: </td>
                        <td width="25%" class="dataField">
                            <?php if (empty ( $this->_tpl_vars['config']['asterisk_call_subject_inbound_abbr'] )): ?>
                                <?php $this->assign('asterisk_call_subject_inbound_abbr', $this->_tpl_vars['asterisk_config']['asterisk_call_subject_inbound_abbr']); ?>
                            <?php else: ?>
                                <?php $this->assign('asterisk_call_subject_inbound_abbr', $this->_tpl_vars['config']['asterisk_call_subject_inbound_abbr']); ?>
                            <?php endif; ?>
                            <input type='text' name='asterisk_call_subject_inbound_abbr' size="45" value='<?php echo $this->_tpl_vars['asterisk_call_subject_inbound_abbr']; ?>
'>
                        </td>
                        <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_CALL_SUBJECT_OUTBOUND_ABBR']; ?>
: </td>
                        <td width="25%" class="dataField">
                            <?php if (empty ( $this->_tpl_vars['config']['asterisk_call_subject_outbound_abbr'] )): ?>
                                <?php $this->assign('asterisk_call_subject_outbound_abbr', $this->_tpl_vars['asterisk_config']['asterisk_call_subject_outbound_abbr']); ?>
                            <?php else: ?>
                                <?php $this->assign('asterisk_call_subject_outbound_abbr', $this->_tpl_vars['config']['asterisk_call_subject_outbound_abbr']); ?>
                            <?php endif; ?>
                            <input type='text' name='asterisk_call_subject_outbound_abbr' size="45" value='<?php echo $this->_tpl_vars['asterisk_call_subject_outbound_abbr']; ?>
'>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_CALL_SUBJECT_MAX_LENGTH']; ?>
: </td>
                        <td width="25%" class="dataField">
                            <?php if (empty ( $this->_tpl_vars['config']['asterisk_call_subject_max_length'] )): ?>
                                <?php $this->assign('asterisk_call_subject_max_length', $this->_tpl_vars['asterisk_config']['asterisk_call_subject_max_length']); ?>
                            <?php else: ?>
                                <?php $this->assign('asterisk_call_subject_max_length', $this->_tpl_vars['config']['asterisk_call_subject_max_length']); ?>
                            <?php endif; ?>
                            <input type='text' name='asterisk_call_subject_max_length' size="45" value='<?php echo $this->_tpl_vars['asterisk_call_subject_max_length']; ?>
'>
                        </td>
                        <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_LISTENER_POLL_RATE']; ?>
: </td>
                        <td width="25%" class="dataField">
                            <?php if (empty ( $this->_tpl_vars['config']['asterisk_listener_poll_rate'] )): ?>
                                <?php $this->assign('asterisk_listener_poll_rate', $this->_tpl_vars['asterisk_config']['asterisk_listener_poll_rate']); ?>
                            <?php else: ?>
                                <?php $this->assign('asterisk_listener_poll_rate', $this->_tpl_vars['config']['asterisk_listener_poll_rate']); ?>
                            <?php endif; ?>
                            <input type='text' name='asterisk_listener_poll_rate' size="45" value='<?php echo $this->_tpl_vars['asterisk_listener_poll_rate']; ?>
'>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_ASTERISK_LOG_FILE']; ?>
: </td>
                        <td width="25%" class="dataField">
                            <?php if (empty ( $this->_tpl_vars['config']['asterisk_log_file'] )): ?>
                                <?php $this->assign('asterisk_log_file', $this->_tpl_vars['asterisk_config']['asterisk_log_file']); ?>
                            <?php else: ?>
                                <?php $this->assign('asterisk_log_file', $this->_tpl_vars['config']['asterisk_log_file']); ?>
                            <?php endif; ?>
                            <input type='text' name='asterisk_log_file' size="45" value='<?php echo $this->_tpl_vars['asterisk_log_file']; ?>
'>
                        </td>
                        <TD>&nbsp;</TD>
                        <td>&nbsp;</td>
                    </tr>

                    <!--
                    
                            <tr>
                                    <td nowrap width="10%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_LEFT_FIELD']; ?>
: </td>
                                    <td width="25%" class="dataField">
                    <?php if (empty ( $this->_tpl_vars['config']['left_field'] )): ?>
                        <?php $this->assign('left_field', $this->_tpl_vars['asterisk_config']['left_field']); ?>
                    <?php else: ?>
                        <?php $this->assign('left_field', $this->_tpl_vars['config']['left_field']); ?>
                    <?php endif; ?>
                            <input type='text' name='left_field' size="45" value='<?php echo $this->_tpl_vars['left_field']; ?>
'>
                    </td>
                    <TD>&nbsp;</TD>
            </tr>
            
                    -->

                </table>
            </td></tr>
    </table>	
    <td>
        <br>
        </table>
        <div style="padding-top: 2px;">
            <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button"  type="submit" name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " />
            &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " /> 
            &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href = 'index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
        </div>
        <?php echo $this->_tpl_vars['JAVASCRIPT']; ?>

