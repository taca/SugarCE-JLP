{*
/******************************************************************************
 * SugarCRM Japanese Language Pack is developed by Masaki Fukuitsu (SugarAndSalt).
 * Copyright (C) 2011-2012 Masaki Fukuitsu (SugarAndSalt).
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation.
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
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarUser.jp" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarUser.jp".
*****************************************************************************/

*}
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%' class="dataField">
<input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_postalcode" value="{$fields.{{$displayParams.key}}_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_city" value="{$fields.{{$displayParams.key}}_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_street" value="{$fields.{{$displayParams.key}}_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_country" value="{$fields.{{$displayParams.key}}_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
〒 {$fields.{{$displayParams.key}}_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.{{$displayParams.key}}_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.{{$displayParams.key}}_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.{{$displayParams.key}}_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.{{$displayParams.key}}_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
{{if !empty($displayParams.enableConnectors)}}
<td class="dataField">
{{sugarvar_connector view='DetailView'}} 
</td>
{{/if}}
<td class='dataField' width='1%'>
{{* 
This is custom code that you may set to show on the second column of the address
table.  An example would be the "Copy" button present from the Accounts detailview.
See modules/Accounts/views/view.detail.php to see the value being set 
*}}
{$custom_code_{{$displayParams.key}}}
</td>
</tr>
</table>