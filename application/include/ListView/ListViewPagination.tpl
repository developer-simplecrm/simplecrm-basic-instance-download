{*

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 
 * SimpleCRM Basic instance is an extension to SuiteCRM 7.5.1 and SugarCRM Community Edition 6.5.20. It is developed by SimpleCRM (https://www.simplecrm.com.sg)
 * Copyright (C) 2016 - 2017 SimpleCRM
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/




*}


{assign var="alt_start" value=$navStrings.start}
{assign var="alt_next" value=$navStrings.next}
{assign var="alt_prev" value=$navStrings.previous}
{assign var="alt_end" value=$navStrings.end}

	<tr id='pagination'  role='presentation'>
		<td colspan='{if $prerow}{$colCount+1}{else}{$colCount}{/if}'>
			<table border='0' cellpadding='0' cellspacing='0' width='100%' class='paginationTable'>
				<tr>
					<td nowrap="nowrap" width='2%' class='paginationActionButtons'>
						{if $prerow}

                        {sugar_action_menu id=$link_select_id params=$selectLink}
					
						{/if}
						
						{sugar_action_menu id=$link_action_id params=$actionsLink}

                        { if $actionDisabledLink ne "" }<div class='selectActionsDisabled' id='select_actions_disabled_{$action_menu_location}'>{$actionDisabledLink}<span class='ab'></span></div>{/if}
						&nbsp;{$selectedObjectsSpan}		
					</td>
					<td  nowrap='nowrap' width='1%' align="right" class='paginationChangeButtons'>
						{if $pageData.urls.startPage}
							<!-- <button type='button' id='listViewStartButton_{$action_menu_location}' name='listViewStartButton' title='{$navStrings.start}' class='button' {if $prerow}onclick='return sListView.save_checks(0, "{$moduleString}");'{else} onClick='location.href="{$pageData.urls.startPage}"' {/if}> -->
							<!-- <i class="fa fa-backward" aria-hidden="true"></i> -->
                               	&nbsp;&nbsp;
								<a id="listViewStartButton_{$action_menu_location}"{if $prerow} onclick='return sListView.save_checks(0, "{$moduleString}");'{else} onClick='location.href="{$pageData.urls.startPage}"' {/if}>
								<!--{sugar_getimage name="start" ext=".png" alt=$navStrings.start other_attributes='align="absmiddle" border="0" '}-->

								<i class="fa fa-angle-double-left fa-2x pagination-icon-bottom" aria-hidden="true"></i>

								
								 </a>
								 &nbsp;&nbsp;
							<!-- </button> -->
						{else}
							<!-- <button type='button' id='listViewStartButton_{$action_menu_location}' name='listViewStartButton' title='{$navStrings.start}' class='button' disabled='disabled'>
							<i class="fa fa-backward" aria-hidden="true"></i> -->
 						    &nbsp;&nbsp;
							<a  id='listViewStartButton_{$action_menu_location}' disabled='disabled' style="color:#6d6d6d">
								{*{sugar_getimage name="start_off" ext=".png" alt=$navStrings.start other_attributes='align="absmiddle" border="0" '}*}
								<i class="fa fa-angle-double-left fa-2x pagination-icon-bottom-disabled" aria-hidden="true"></i>

								 </a>
								 &nbsp;&nbsp;
							<!-- </button> -->
						{/if}
						{if $pageData.urls.prevPage}
							<!-- <button type='button' id='listViewPrevButton_{$action_menu_location}' name='listViewPrevButton' title='{$navStrings.previous}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.prev}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.prevPage}"'{/if}>
							<i class="fa fa-arrow-left" aria-hidden="true"></i> -->
								 &nbsp;&nbsp;
								<a  id='listViewPrevButton_{$action_menu_location}' title='{$navStrings.previous}' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.prev}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.prevPage}"'{/if}>
								{*{sugar_getimage name="previous" ext=".png" alt=$navStrings.previous other_attributes='align="absmiddle" border="0" ' alt ="$alt_prev"}*}
								<i class="fa fa-angle-left fa-2x pagination-icon-bottom" aria-hidden="true"></i>

								</a>
								 &nbsp;&nbsp;

							<!-- </button> -->
						{else}
							<!-- <button type='button' id='listViewPrevButton_{$action_menu_location}' name='listViewPrevButton' class='button' title='{$navStrings.previous}' disabled='disabled'>
							<i class="fa fa-arrow-left" aria-hidden="true"></i> -->
								 &nbsp;&nbsp;
								<a id="listViewPrevButton_{$action_menu_location}" title='{$navStrings.previous}' disabled='disabled' style="color:#6d6d6d">
								{*{sugar_getimage name="previous_off" ext=".png" alt=$navStrings.previous other_attributes='align="absmiddle" border="0" '} *}
								<i class="fa fa-angle-left fa-2x pagination-icon-bottom-disabled" aria-hidden="true"></i>
								</a>
								 &nbsp;&nbsp;

							<!-- </button> -->
						{/if}
							<span class='pageNumbers'>({if $pageData.offsets.lastOffsetOnPage == 0}0{else}{$pageData.offsets.current+1}{/if} - {$pageData.offsets.lastOffsetOnPage} {$navStrings.of} {if $pageData.offsets.totalCounted}{$pageData.offsets.total}{else}{$pageData.offsets.total}{if $pageData.offsets.lastOffsetOnPage != $pageData.offsets.total}+{/if}{/if})</span>
						{if $pageData.urls.nextPage}
							<!-- <button type='button' id='listViewNextButton_{$action_menu_location}' name='listViewNextButton' title='{$navStrings.next}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.next}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.nextPage}"'{/if}>

							<i class="fa fa-arrow-right pagination-icon-bottom" aria-hidden="true"></i> -->
								 &nbsp;&nbsp;
								<a id="listViewNextButton_{$action_menu_location}" {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.next}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.nextPage}"'{/if}>
								{*{sugar_getimage name="next" ext=".png" alt=$navStrings.next other_attributes='align="absmiddle" border="0" ' alt ="$alt_next"}*}
								<i class="fa fa-angle-right fa-2x pagination-icon-bottom" aria-hidden="true"></i>
								</a>
								 &nbsp;&nbsp;								
							<!-- </button> -->
						{else}


							<!-- <button type='button' id='listViewNextButton_{$action_menu_location}' name='listViewNextButton' class='button' title='{$navStrings.next}' disabled='disabled'>
							<i class="fa fa-arrow-right pagination-icon-bottom" aria-hidden="true"></i> -->
								 &nbsp;&nbsp;
								<a id="listViewNextButton_{$action_menu_location}" title='{$navStrings.next}' disabled='disabled' style="color:#6d6d6d">
								{*{sugar_getimage name="next_off" ext=".png" alt=$navStrings.next other_attributes='align="absmiddle" border="0" '}
								*}
								<i class='fa fa-angle-right fa-2x pagination-icon-bottom-disabled' aria-hidden='true'></i>
								</a>
								 &nbsp;&nbsp;
							<!-- </button> -->
						{/if}
						{if $pageData.urls.endPage  && $pageData.offsets.total != $pageData.offsets.lastOffsetOnPage}

							<!-- <button type='button' id='listViewEndButton_{$action_menu_location}' name='listViewEndButton' title='{$navStrings.end}' class='button' {if $prerow}onclick='return sListView.save_checks("end", "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.endPage}"'{/if}>
								<i class="fa fa-forward" aria-hidden="true"></i> -->
								 &nbsp;&nbsp;
								<a id="listViewEndButton_{$action_menu_location}" {if $prerow}onclick='return sListView.save_checks("end", "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.endPage}"'{/if}>
								{*{sugar_getimage name="end" ext=".png" alt=$navStrings.end other_attributes='align="absmiddle" border="0" ' alt ="$alt_end"}
								*}
								<i class="fa fa-angle-double-right fa-2x pagination-icon-bottom" aria-hidden="true"></i>

								</a>
								 &nbsp;&nbsp;								
							<!-- </button> -->
						{elseif !$pageData.offsets.totalCounted || $pageData.offsets.total == $pageData.offsets.lastOffsetOnPage}

							<!-- <button type='button' id='listViewEndButton_{$action_menu_location}' name='listViewEndButton' title='{$navStrings.end}' class='button' disabled='disabled'>
							<i class="fa fa-forward" aria-hidden="true"></i> -->
							&nbsp;&nbsp;							
							<a id="listViewEndButton_{$action_menu_location}" disabled='disabled' title='{$navStrings.end}' style="color:#6d6d6d">
							 	{*{sugar_getimage name="end_off" ext=".png" alt=$navStrings.end other_attributes='align="absmiddle" '}*}
							 	<i class="fa fa-angle-double-right fa-2x pagination-icon-bottom-disabled" aria-hidden="true"></i>

							 	</a>
								 &nbsp;&nbsp;							
							<!-- </button> -->
						{/if}
					</td>
				</tr>
			</table>
		</td>
	</tr>
