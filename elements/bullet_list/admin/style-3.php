<?php
if (!defined('ABSPATH')) {
	exit;
}
oxi_addons_user_capabilities();
global $wpdb;
$oxitype = sanitize_text_field($_GET['oxitype']);
$oxiid = (int) $_GET['styleid'];
$table_name = $wpdb->prefix . 'oxi_div_style';
$table_list = $wpdb->prefix . 'oxi_div_list';
if (!empty($_REQUEST['_wpnonce'])) {
	$nonce = $_REQUEST['_wpnonce'];
}
$listid = '';
$listitemdata = array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
	if (!wp_verify_nonce($nonce, 'oxi-addons-button-nonce')) {
		die('You do not have sufficient permissions to access this page.');
	} else {

		$data = 'oxi-addons-preview-BG |' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|'
				. '||'
				. oxi_addons_adm_help_padding_margin_senitize('oxi-BL-Padding')
				. oxi_addons_adm_help_padding_margin_senitize('oxi-BL-margin')
				. '||||||'
				. oxi_addons_adm_help_number_dtm_senitize('oxi-BL-number-font-size')
				. '||'
				. '||'
				. '||||||'
				. oxi_addons_adm_help_padding_margin_senitize('oxi-BL-number-margin')
				. 'oxi-BL-number-color |' . sanitize_hex_color($_POST['oxi-BL-number-color']) . '|'
				. 'xi-BL-number-bg-color |' . sanitize_text_field($_POST['oxi-BL-number-bg-color']) . '|'
				. 'oxi-BL-number-h-color |' . sanitize_hex_color($_POST['oxi-BL-number-h-color']) . '|'
				. 'oxi-BL-number-h-bg-color |' . sanitize_text_field($_POST['oxi-BL-number-h-bg-color']) . '|'
				. oxi_addons_adm_help_number_dtm_senitize('oxi-BL-content-font-size')
				. 'oxi-BL-content-color |' . sanitize_hex_color($_POST['oxi-BL-content-color']) . '|'
				. 'oxi-BL-content-bg-color |' . sanitize_text_field($_POST['oxi-BL-content-bg-color']) . '|'
				. OxiAddonsADMHelpFontSettingsSanitize('oxi-BL-content-font')
				. oxi_addons_adm_help_padding_margin_senitize('oxi-BL-content-padding')
				. oxi_addons_adm_help_padding_margin_senitize('oxi-BL-content-margin')
				. 'oxi-BL-content-h-color |' . sanitize_hex_color($_POST['oxi-BL-content-h-color']) . '|'
				. 'oxi-BL-content-h-bg-color |' . sanitize_text_field($_POST['oxi-BL-content-h-bg-color']) . '|'
				. oxi_addons_adm_help_padding_margin_senitize('oxi-BL-number-border-width')
				. OxiAddonsADMHelpBorderSanitize('oxi-BL-number-border') . '|'
				. oxi_addons_adm_help_padding_margin_senitize('oxi-BL-number-h-border-width')
				. OxiAddonsADMHelpBorderSanitize('oxi-BL-number-h-border') . '|'
				. 'oxi-BL-content-hover-scale |' . sanitize_text_field($_POST['oxi-BL-content-hover-scale']) . '|||'
				. oxi_addons_adm_help_number_dtm_senitize('oxi-BL-max-width')
				. oxi_addons_adm_help_single_size('oxi-BL-number-line-width')
				. oxi_addons_adm_help_single_size('oxi-BL-number-line-height')
				. oxi_addons_adm_help_padding_margin_senitize('oxi-BL-number-border-radius')
				. '||#||'
		;

		$data = sanitize_text_field($data);
		$wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
	}
}

if (!empty($_POST['OxiAddonsListFile']) && $_POST['OxiAddonsListFile'] == 'Submit') {
	if (!wp_verify_nonce($nonce, 'OxiAddonsListData-nonce')) {
		die('You do not have sufficient permissions to access this page.');
	} else {
		$oxilistid = (int) $_POST['oxilistid'];
		$data = 'oxi-BL-content-textbox ||#||' . sanitize_text_field($_POST['oxi-BL-content-textbox']) . '||#|| '
				. 'oxi-BL-content-link ||#||' . OxiAddonsAdminUrlConvert($_POST['oxi-BL-content-link']) . '||#|| '
				.'oxi-BL-content-icon ||#||' . sanitize_text_field($_POST['oxi-BL-content-icon']) . '||#|| ';

		;
		$data = sanitize_text_field($data);
		if ($oxilistid > 0) {
			$wpdb->query($wpdb->prepare("UPDATE $table_list SET files = %s WHERE id = %d", $data, $oxilistid));
		} else {
			$wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (styleid, type, files) VALUES (%d, %s, %s )", array($oxiid, 'oxi-addons', $data)));
		}
	}
}
if (!empty($_POST['OxiAddonsListFileDelete']) && is_numeric($_POST['oxi-item-id'])) {
	if (!wp_verify_nonce($nonce, 'OxiAddonsListFileDelete' . $oxitype . 'data')) {
		die('You do not have sufficient permissions to access this page.');
	} else {
		$item_id = (int) $_POST['oxi-item-id'];
		$wpdb->query($wpdb->prepare("DELETE FROM {$table_list} WHERE id = %d ", $item_id));
	}
}
if (!empty($_POST['OxiAddonsListFileEdit']) && is_numeric($_POST['oxi-item-id'])) {
//	echo 'asdfho';
	if (!wp_verify_nonce($nonce, 'OxiAddonsListFileEdit' . $oxitype . 'data')) {
		die('You do not have sufficient permissions to access this page.');
	} else {
		echo 'asdfho';
		$item_id = (int) $_POST['oxi-item-id'];
		$data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $item_id), ARRAY_A);
		$listitemdata = explode('||#||', $data['files']);
		$listid = $data['id'];

		echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#oxi-addons-list-data-modal").modal("show")  }, 500); });</script>';
	}
}

OxiDataAdminStyleNameChange();
$style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $oxiid), ARRAY_A);
$listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ", $oxiid), ARRAY_A);
$stylefiles = explode('||#||', $style['css']);
$styledata = explode('|', $stylefiles[0]);
//echo '<pre>';
//print_r($styledata);
//echo '</pre>';
?>

<div class="wrap">
	<?php echo OxiAddonsAdmAdminMenu($oxitype, '', '', ''); ?>
	<div class="oxi-addons-wrapper">
		<div class="oxi-addons-row">
			<div class="oxi-addons-style-20-spacer"></div>
			<div class="oxi-addons-style-left">
				<form method="post" id="oxi-addons-form-submit">
					<div class="oxi-addons-style-settings">

						<div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-1">
							<div class="oxi-addons-col-6">
								<div class="oxi-addons-content-div">
									<div class="oxi-head">
										General Settings
									</div>

									<div class="oxi-addons-content-div-body">
										<?php
//										echo oxi_addons_adm_help_MiniColor('oxi-BL-bg-color', $styledata[3], 'rgba', 'Background ', 'Set Your Background Color', 'false', '.oxi-addons-bullet-list-'.$oxiid .' .oxi-addons-bullet-list-full-content', 'background');
										
										echo oxi_addons_adm_help_number_dtm('oxi-BL-max-width', $styledata[175], $styledata[176], $styledata[177], 1, 'Max-width', 'Set Your Bullet List Max Width', 'false', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1', 'max-width');
										echo oxi_addons_adm_help_padding_margin('oxi-BL-Padding', 5, $styledata, 1, 'Padding', 'Set Your Content Padding', 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 ol.oxi-addons-list-ol', 'padding');
										echo oxi_addons_adm_help_padding_margin('oxi-BL-margin', 21, $styledata, 1, 'Margin', 'Set Your Content Margin', 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1', 'padding');
										?>
									</div>
								</div>
							
								<div class="oxi-addons-content-div">
									<div class="oxi-head">
										List Number
									</div>
									<div class="oxi-addons-content-div-body">
										<?php
										echo oxi_addons_adm_help_number_double_dtm('oxi-BL-number-line-width', $styledata[179], $styledata[180], $styledata[181], 'oxi-BL-number-line-height', $styledata[183], $styledata[184], $styledata[185], 1, 'Icon Width & Height', 'Set Your List Icon Width And Height', 'false');	
										echo oxi_addons_adm_help_number_dtm('oxi-BL-number-font-size', $styledata[43], $styledata[44], $styledata[45], 1, 'Font Size', 'Set Your List Icon Font Size', 'false', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a:before', 'font-size');
										echo oxi_addons_adm_help_MiniColor('oxi-BL-number-color', $styledata[73], '', 'Color', 'Set Your List Icon Color', 'false', '	.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:before', 'color');
										echo oxi_addons_adm_help_MiniColor('oxi-BL-number-bg-color', $styledata[75], 'rgba', 'Background Color', 'Set Your List Icon Background Color', 'false', '	.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:before', 'background');
										echo oxi_addons_adm_help_padding_margin('oxi-BL-number-border-width', 131, $styledata, 1, 'Border', 'Set Border for Your List Icon', 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a:before', 'border-width');
										echo OxiAddonsADMhelpBorder('oxi-BL-number-border', 147, $styledata, 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a:before', 'border-style');
										echo oxi_addons_adm_help_padding_margin('oxi-BL-number-margin', 57, $styledata, 1, 'Margin', 'Set Your List Number Margin', 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:before', 'margin');
										
										$NOJS = array(
											array('oxi-BL-number-line-width', 'Width'),
											array('oxi-BL-number-line-height', 'Height'),
										);
										echo OxiAddonsADMHelpNoJquery($NOJS);
										?>
									</div>
									<div class="oxi-head">
										List Number Hover
									</div>
									<div class="oxi-addons-content-div-body">
										<?php
										echo oxi_addons_adm_help_MiniColor('oxi-BL-number-h-color', $styledata[77], '', 'Color', 'Set Your List Number Hover Color', 'false', '	.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1:hover a:before', 'color');
										echo oxi_addons_adm_help_MiniColor('oxi-BL-number-h-bg-color', $styledata[79], 'rgba', 'Background Color', 'Set Your List Number Hover Background Color', 'false', '	.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1:hover a:before', 'background');
										echo oxi_addons_adm_help_padding_margin('oxi-BL-number-h-border-width', 151, $styledata, 1, 'Border', 'Set Border for your Button', 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a:hover:before', 'border-width');
										echo OxiAddonsADMhelpBorder('oxi-BL-number-h-border', 167, $styledata, 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a:hover:before', 'border-style');
										?>
									</div>
								</div>
							</div>
							<div class="oxi-addons-col-6">
								<div class="oxi-addons-content-div">
									<div class="oxi-head">
										List Content
									</div>
									<div class="oxi-addons-content-div-body">
										<?php
										echo oxi_addons_adm_help_number_dtm('oxi-BL-content-font-size', $styledata[81], $styledata[82], $styledata[83], 1, 'Font Size', 'Set Your List Font Size', 'false', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link', 'font-size');
										echo oxi_addons_adm_help_MiniColor('oxi-BL-content-color', $styledata[85], '', 'Color', 'Set Your List Color', 'false', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link', 'color');
										echo oxi_addons_adm_help_MiniColor('oxi-BL-content-bg-color', $styledata[87], 'rgba', 'Background Color', 'Set Your List Background Color', 'false', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link', 'background');
										echo OxiAddonsADMHelpFontSettings('oxi-BL-content-font', 89, $styledata, 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link');
										echo oxi_addons_adm_help_padding_margin('oxi-BL-content-padding', 95, $styledata, 1, 'Padding', 'Set Your List Padding', 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link', 'padding');
										echo oxi_addons_adm_help_padding_margin('oxi-BL-content-margin', 111, $styledata, 1, 'Margin', 'Set Your List Margin', 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link', 'margin');
										echo oxi_addons_adm_help_padding_margin('oxi-BL-number-border-radius', 187, $styledata, 1, 'Border Radius', 'Set Your List Content Border Radius', 'true', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link', 'border-radius');
										?>
									</div>
									<div class="oxi-head">
										List Content Hover
									</div>
									<div class="oxi-addons-content-div-body">
										<?php
										echo oxi_addons_adm_help_MiniColor('oxi-BL-content-h-color', $styledata[127], '', 'Color', 'Set Your List Content Hover Color', 'false', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:hover', 'color');
										echo oxi_addons_adm_help_MiniColor('oxi-BL-content-h-bg-color', $styledata[129], 'rgba', 'Background Color', 'Set Your List Content Hover Background Color', 'false', '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:hover', 'background');
										?>
									</div>
									<div class="oxi-head">
										Hover Scale
									</div>
									<div class="oxi-addons-content-div-body">
										<?php
										echo oxi_addons_adm_help_number('oxi-BL-content-hover-scale', $styledata[171], 0.001, 'Scale', 'Set Your Hover Scale', 'false');
										?>
									</div>
								</div>
							</div>
						</div>

						<div class="oxi-addons-setting-save">
							<?php echo oxiaddonssettingsavedtmmode(); ?>
							<button type="button" class="btn btn-danger" id="oxi-addons-setting-reload">Reset</button>
							<input type="submit" class="btn btn-success" name="data-submit" value="Save">
							<input type="hidden"  id="oxi-addons-preview-BG" name="oxi-addons-preview-BG" value="<?php $styledata[1] ?>">
							<?php wp_nonce_field("oxi-addons-button-nonce") ?>
						</div>

					</div>
				</form>
			</div>
			<div class="oxi-addons-style-right">
				<?php
				echo oxi_addons_list_modal_open('Add New List');
				echo oxi_addons_shortcode_namechange($oxiid, $style['name']);
				echo oxi_addons_shortcode_call($oxitype, $oxiid);

				echo oxi_addons_list_rearrange('List Rearrange', $listdata, 1, 'title');
				?>
			</div>
			<div class="oxi-addons-style-left-preview">
				<div class="oxi-addons-style-left-preview-heading">
					<div class="oxi-addons-style-left-preview-heading-left">
						Preview
					</div>
					<div class="oxi-addons-style-left-preview-heading-right">
						<?php echo oxi_addons_adm_help_preview_color($styledata[1]); ?>
					</div>
				</div>
				<div class="oxi-addons-preview-data" id="oxi-addons-preview-data">
					<?php echo oxi_bullet_list_style_3_shortcode($style, $listdata, 'admin'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="oxi-addons-list-data-modal">
    <form method="post">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Data Settings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
					<?php
					echo oxi_addons_adm_help_textbox('oxi-BL-content-icon', $listitemdata[5], 'Icon Unicode', 'Set The List Icon Unicode Code ', 'false');
                                     
					echo oxi_addons_adm_help_textbox('oxi-BL-content-textbox', $listitemdata[1], 'Text', 'Set Your List Text', 'false');
					echo oxi_addons_adm_help_textbox('oxi-BL-content-link', $listitemdata[3], 'Link', 'Set Your List Link', 'false');
					?>

                </div>
                <div class="modal-footer">
                    <input type="hidden" id="oxilistid" name="oxilistid" value="<?php echo $listid; ?>">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="OxiAddonsListFile" id="OxiAddonsListFile" value="Submit">
<?php wp_nonce_field("OxiAddonsListData-nonce") ?>
                </div>
            </div>
        </div>
    </form>
</div>	