<?php
function pa_icomoon_composer($settings, $value) {

   $out = '<input id="pa_icomoon_textbox" name="'.$settings['param_name'].'" class="wpb_vc_param_value  '
   .$settings['param_name'].' '.$settings['type'].'_field" type="hidden" value="'
             .$value.'">';

	$out .= "<script>jQuery(document).ready(function() { jQuery('input[name=\"iconfonts_name\"]').click(function(){ jQuery('#pa_icomoon_textbox').val(jQuery(this).val()) ; });  } );</script>";
   $out .= '<div id="retinaicon-form" class="webnus-iconfonts-wrapper">

	<div class="webnus-icons-list-wrapper">
		<ul class="webnus-icons-list">
			<li><input type="radio" name="iconfonts_name" id="none" value="none"><label for="none"><i class="none" style="font-size:9px;">None</i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-add-vectorpoint" value="icon-software-add-vectorpoint"><label for="icon-software-add-vectorpoint"><i class="icon-software-add-vectorpoint" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-box-oval" value="icon-software-box-oval"><label for="icon-software-box-oval"><i class="icon-software-box-oval" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-box-polygon" value="icon-software-box-polygon"><label for="icon-software-box-polygon"><i class="icon-software-box-polygon" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-box-rectangle" value="icon-software-box-rectangle"><label for="icon-software-box-rectangle"><i class="icon-software-box-rectangle" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-box-roundedrectangle" value="icon-software-box-roundedrectangle"><label for="icon-software-box-roundedrectangle"><i class="icon-software-box-roundedrectangle" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-character" value="icon-software-character"><label for="icon-software-character"><i class="icon-software-character" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-crop" value="icon-software-crop"><label for="icon-software-crop"><i class="icon-software-crop" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-eyedropper" value="icon-software-eyedropper"><label for="icon-software-eyedropper"><i class="icon-software-eyedropper" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-allcaps" value="icon-software-font-allcaps"><label for="icon-software-font-allcaps"><i class="icon-software-font-allcaps" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-baseline-shift" value="icon-software-font-baseline-shift"><label for="icon-software-font-baseline-shift"><i class="icon-software-font-baseline-shift" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-horizontal-scale" value="icon-software-font-horizontal-scale"><label for="icon-software-font-horizontal-scale"><i class="icon-software-font-horizontal-scale" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-kerning" value="icon-software-font-kerning"><label for="icon-software-font-kerning"><i class="icon-software-font-kerning" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-leading" value="icon-software-font-leading"><label for="icon-software-font-leading"><i class="icon-software-font-leading" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-size" value="icon-software-font-size"><label for="icon-software-font-size"><i class="icon-software-font-size" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-smallcapital" value="icon-software-font-smallcapital"><label for="icon-software-font-smallcapital"><i class="icon-software-font-smallcapital" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-smallcaps" value="icon-software-font-smallcaps"><label for="icon-software-font-smallcaps"><i class="icon-software-font-smallcaps" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-strikethrough" value="icon-software-font-strikethrough"><label for="icon-software-font-strikethrough"><i class="icon-software-font-strikethrough" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-tracking" value="icon-software-font-tracking"><label for="icon-software-font-tracking"><i class="icon-software-font-tracking" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-underline" value="icon-software-font-underline"><label for="icon-software-font-underline"><i class="icon-software-font-underline" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-font-vertical-scale" value="icon-software-font-vertical-scale"><label for="icon-software-font-vertical-scale"><i class="icon-software-font-vertical-scale" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-horizontal-align-center" value="icon-software-horizontal-align-center"><label for="icon-software-horizontal-align-center"><i class="icon-software-horizontal-align-center" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-horizontal-align-left" value="icon-software-horizontal-align-left"><label for="icon-software-horizontal-align-left"><i class="icon-software-horizontal-align-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-horizontal-align-right" value="icon-software-horizontal-align-right"><label for="icon-software-horizontal-align-right"><i class="icon-software-horizontal-align-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-horizontal-distribute-center" value="icon-software-horizontal-distribute-center"><label for="icon-software-horizontal-distribute-center"><i class="icon-software-horizontal-distribute-center" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-horizontal-distribute-left" value="icon-software-horizontal-distribute-left"><label for="icon-software-horizontal-distribute-left"><i class="icon-software-horizontal-distribute-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-horizontal-distribute-right" value="icon-software-horizontal-distribute-right"><label for="icon-software-horizontal-distribute-right"><i class="icon-software-horizontal-distribute-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-indent-firstline" value="icon-software-indent-firstline"><label for="icon-software-indent-firstline"><i class="icon-software-indent-firstline" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-indent-left" value="icon-software-indent-left"><label for="icon-software-indent-left"><i class="icon-software-indent-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-indent-right" value="icon-software-indent-right"><label for="icon-software-indent-right"><i class="icon-software-indent-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-lasso" value="icon-software-lasso"><label for="icon-software-lasso"><i class="icon-software-lasso" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layers1" value="icon-software-layers1"><label for="icon-software-layers1"><i class="icon-software-layers1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layers2" value="icon-software-layers2"><label for="icon-software-layers2"><i class="icon-software-layers2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout" value="icon-software-layout"><label for="icon-software-layout"><i class="icon-software-layout" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-2columns" value="icon-software-layout-2columns"><label for="icon-software-layout-2columns"><i class="icon-software-layout-2columns" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-3columns" value="icon-software-layout-3columns"><label for="icon-software-layout-3columns"><i class="icon-software-layout-3columns" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-4boxes" value="icon-software-layout-4boxes"><label for="icon-software-layout-4boxes"><i class="icon-software-layout-4boxes" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-4columns" value="icon-software-layout-4columns"><label for="icon-software-layout-4columns"><i class="icon-software-layout-4columns" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-4lines" value="icon-software-layout-4lines"><label for="icon-software-layout-4lines"><i class="icon-software-layout-4lines" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-8boxes" value="icon-software-layout-8boxes"><label for="icon-software-layout-8boxes"><i class="icon-software-layout-8boxes" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header" value="icon-software-layout-header"><label for="icon-software-layout-header"><i class="icon-software-layout-header" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-2columns" value="icon-software-layout-header-2columns"><label for="icon-software-layout-header-2columns"><i class="icon-software-layout-header-2columns" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-3columns" value="icon-software-layout-header-3columns"><label for="icon-software-layout-header-3columns"><i class="icon-software-layout-header-3columns" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-4boxes" value="icon-software-layout-header-4boxes"><label for="icon-software-layout-header-4boxes"><i class="icon-software-layout-header-4boxes" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-4columns" value="icon-software-layout-header-4columns"><label for="icon-software-layout-header-4columns"><i class="icon-software-layout-header-4columns" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-complex" value="icon-software-layout-header-complex"><label for="icon-software-layout-header-complex"><i class="icon-software-layout-header-complex" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-complex2" value="icon-software-layout-header-complex2"><label for="icon-software-layout-header-complex2"><i class="icon-software-layout-header-complex2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-complex3" value="icon-software-layout-header-complex3"><label for="icon-software-layout-header-complex3"><i class="icon-software-layout-header-complex3" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-complex4" value="icon-software-layout-header-complex4"><label for="icon-software-layout-header-complex4"><i class="icon-software-layout-header-complex4" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-sideleft" value="icon-software-layout-header-sideleft"><label for="icon-software-layout-header-sideleft"><i class="icon-software-layout-header-sideleft" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-header-sideright" value="icon-software-layout-header-sideright"><label for="icon-software-layout-header-sideright"><i class="icon-software-layout-header-sideright" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-sidebar-left" value="icon-software-layout-sidebar-left"><label for="icon-software-layout-sidebar-left"><i class="icon-software-layout-sidebar-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-layout-sidebar-right" value="icon-software-layout-sidebar-right"><label for="icon-software-layout-sidebar-right"><i class="icon-software-layout-sidebar-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-magnete" value="icon-software-magnete"><label for="icon-software-magnete"><i class="icon-software-magnete" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-pages" value="icon-software-pages"><label for="icon-software-pages"><i class="icon-software-pages" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paintbrush" value="icon-software-paintbrush"><label for="icon-software-paintbrush"><i class="icon-software-paintbrush" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paintbucket" value="icon-software-paintbucket"><label for="icon-software-paintbucket"><i class="icon-software-paintbucket" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paintroller" value="icon-software-paintroller"><label for="icon-software-paintroller"><i class="icon-software-paintroller" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph" value="icon-software-paragraph"><label for="icon-software-paragraph"><i class="icon-software-paragraph" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph-align-left" value="icon-software-paragraph-align-left"><label for="icon-software-paragraph-align-left"><i class="icon-software-paragraph-align-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph-align-right" value="icon-software-paragraph-align-right"><label for="icon-software-paragraph-align-right"><i class="icon-software-paragraph-align-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph-center" value="icon-software-paragraph-center"><label for="icon-software-paragraph-center"><i class="icon-software-paragraph-center" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph-justify-all" value="icon-software-paragraph-justify-all"><label for="icon-software-paragraph-justify-all"><i class="icon-software-paragraph-justify-all" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph-justify-center" value="icon-software-paragraph-justify-center"><label for="icon-software-paragraph-justify-center"><i class="icon-software-paragraph-justify-center" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph-justify-left" value="icon-software-paragraph-justify-left"><label for="icon-software-paragraph-justify-left"><i class="icon-software-paragraph-justify-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph-justify-right" value="icon-software-paragraph-justify-right"><label for="icon-software-paragraph-justify-right"><i class="icon-software-paragraph-justify-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph-space-after" value="icon-software-paragraph-space-after"><label for="icon-software-paragraph-space-after"><i class="icon-software-paragraph-space-after" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-paragraph-space-before" value="icon-software-paragraph-space-before"><label for="icon-software-paragraph-space-before"><i class="icon-software-paragraph-space-before" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-pathfinder-exclude" value="icon-software-pathfinder-exclude"><label for="icon-software-pathfinder-exclude"><i class="icon-software-pathfinder-exclude" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-pathfinder-intersect" value="icon-software-pathfinder-intersect"><label for="icon-software-pathfinder-intersect"><i class="icon-software-pathfinder-intersect" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-pathfinder-subtract" value="icon-software-pathfinder-subtract"><label for="icon-software-pathfinder-subtract"><i class="icon-software-pathfinder-subtract" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-pathfinder-unite" value="icon-software-pathfinder-unite"><label for="icon-software-pathfinder-unite"><i class="icon-software-pathfinder-unite" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-pen" value="icon-software-pen"><label for="icon-software-pen"><i class="icon-software-pen" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-pen-add" value="icon-software-pen-add"><label for="icon-software-pen-add"><i class="icon-software-pen-add" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-pen-remove" value="icon-software-pen-remove"><label for="icon-software-pen-remove"><i class="icon-software-pen-remove" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-pencil" value="icon-software-pencil"><label for="icon-software-pencil"><i class="icon-software-pencil" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-polygonallasso" value="icon-software-polygonallasso"><label for="icon-software-polygonallasso"><i class="icon-software-polygonallasso" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-reflect-horizontal" value="icon-software-reflect-horizontal"><label for="icon-software-reflect-horizontal"><i class="icon-software-reflect-horizontal" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-reflect-vertical" value="icon-software-reflect-vertical"><label for="icon-software-reflect-vertical"><i class="icon-software-reflect-vertical" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-remove-vectorpoint" value="icon-software-remove-vectorpoint"><label for="icon-software-remove-vectorpoint"><i class="icon-software-remove-vectorpoint" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-scale-expand" value="icon-software-scale-expand"><label for="icon-software-scale-expand"><i class="icon-software-scale-expand" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-scale-reduce" value="icon-software-scale-reduce"><label for="icon-software-scale-reduce"><i class="icon-software-scale-reduce" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-selection-oval" value="icon-software-selection-oval"><label for="icon-software-selection-oval"><i class="icon-software-selection-oval" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-selection-polygon" value="icon-software-selection-polygon"><label for="icon-software-selection-polygon"><i class="icon-software-selection-polygon" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-selection-rectangle" value="icon-software-selection-rectangle"><label for="icon-software-selection-rectangle"><i class="icon-software-selection-rectangle" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-selection-roundedrectangle" value="icon-software-selection-roundedrectangle"><label for="icon-software-selection-roundedrectangle"><i class="icon-software-selection-roundedrectangle" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-shape-oval" value="icon-software-shape-oval"><label for="icon-software-shape-oval"><i class="icon-software-shape-oval" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-shape-polygon" value="icon-software-shape-polygon"><label for="icon-software-shape-polygon"><i class="icon-software-shape-polygon" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-shape-rectangle" value="icon-software-shape-rectangle"><label for="icon-software-shape-rectangle"><i class="icon-software-shape-rectangle" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-shape-roundedrectangle" value="icon-software-shape-roundedrectangle"><label for="icon-software-shape-roundedrectangle"><i class="icon-software-shape-roundedrectangle" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-slice" value="icon-software-slice"><label for="icon-software-slice"><i class="icon-software-slice" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-transform-bezier" value="icon-software-transform-bezier"><label for="icon-software-transform-bezier"><i class="icon-software-transform-bezier" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-vector-box" value="icon-software-vector-box"><label for="icon-software-vector-box"><i class="icon-software-vector-box" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-vector-composite" value="icon-software-vector-composite"><label for="icon-software-vector-composite"><i class="icon-software-vector-composite" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-vector-line" value="icon-software-vector-line"><label for="icon-software-vector-line"><i class="icon-software-vector-line" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-vertical-align-bottom" value="icon-software-vertical-align-bottom"><label for="icon-software-vertical-align-bottom"><i class="icon-software-vertical-align-bottom" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-vertical-align-center" value="icon-software-vertical-align-center"><label for="icon-software-vertical-align-center"><i class="icon-software-vertical-align-center" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-vertical-align-top" value="icon-software-vertical-align-top"><label for="icon-software-vertical-align-top"><i class="icon-software-vertical-align-top" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-vertical-distribute-bottom" value="icon-software-vertical-distribute-bottom"><label for="icon-software-vertical-distribute-bottom"><i class="icon-software-vertical-distribute-bottom" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-vertical-distribute-center" value="icon-software-vertical-distribute-center"><label for="icon-software-vertical-distribute-center"><i class="icon-software-vertical-distribute-center" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-software-vertical-distribute-top" value="icon-software-vertical-distribute-top"><label for="icon-software-vertical-distribute-top"><i class="icon-software-vertical-distribute-top" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-anticlockwise" value="icon-arrows-anticlockwise"><label for="icon-arrows-anticlockwise"><i class="icon-arrows-anticlockwise" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-anticlockwise-dashed" value="icon-arrows-anticlockwise-dashed"><label for="icon-arrows-anticlockwise-dashed"><i class="icon-arrows-anticlockwise-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-button-down" value="icon-arrows-button-down"><label for="icon-arrows-button-down"><i class="icon-arrows-button-down" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-button-off" value="icon-arrows-button-off"><label for="icon-arrows-button-off"><i class="icon-arrows-button-off" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-button-on" value="icon-arrows-button-on"><label for="icon-arrows-button-on"><i class="icon-arrows-button-on" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-button-up" value="icon-arrows-button-up"><label for="icon-arrows-button-up"><i class="icon-arrows-button-up" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-check" value="icon-arrows-check"><label for="icon-arrows-check"><i class="icon-arrows-check" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-check" value="icon-arrows-circle-check"><label for="icon-arrows-circle-check"><i class="icon-arrows-circle-check" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-down" value="icon-arrows-circle-down"><label for="icon-arrows-circle-down"><i class="icon-arrows-circle-down" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-downleft" value="icon-arrows-circle-downleft"><label for="icon-arrows-circle-downleft"><i class="icon-arrows-circle-downleft" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-downright" value="icon-arrows-circle-downright"><label for="icon-arrows-circle-downright"><i class="icon-arrows-circle-downright" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-left" value="icon-arrows-circle-left"><label for="icon-arrows-circle-left"><i class="icon-arrows-circle-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-minus" value="icon-arrows-circle-minus"><label for="icon-arrows-circle-minus"><i class="icon-arrows-circle-minus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-plus" value="icon-arrows-circle-plus"><label for="icon-arrows-circle-plus"><i class="icon-arrows-circle-plus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-remove" value="icon-arrows-circle-remove"><label for="icon-arrows-circle-remove"><i class="icon-arrows-circle-remove" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-right" value="icon-arrows-circle-right"><label for="icon-arrows-circle-right"><i class="icon-arrows-circle-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-up" value="icon-arrows-circle-up"><label for="icon-arrows-circle-up"><i class="icon-arrows-circle-up" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-upleft" value="icon-arrows-circle-upleft"><label for="icon-arrows-circle-upleft"><i class="icon-arrows-circle-upleft" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-circle-upright" value="icon-arrows-circle-upright"><label for="icon-arrows-circle-upright"><i class="icon-arrows-circle-upright" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-clockwise" value="icon-arrows-clockwise"><label for="icon-arrows-clockwise"><i class="icon-arrows-clockwise" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-clockwise-dashed" value="icon-arrows-clockwise-dashed"><label for="icon-arrows-clockwise-dashed"><i class="icon-arrows-clockwise-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-compress" value="icon-arrows-compress"><label for="icon-arrows-compress"><i class="icon-arrows-compress" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-deny" value="icon-arrows-deny"><label for="icon-arrows-deny"><i class="icon-arrows-deny" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-diagonal" value="icon-arrows-diagonal"><label for="icon-arrows-diagonal"><i class="icon-arrows-diagonal" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-diagonal2" value="icon-arrows-diagonal2"><label for="icon-arrows-diagonal2"><i class="icon-arrows-diagonal2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-down" value="icon-arrows-down"><label for="icon-arrows-down"><i class="icon-arrows-down" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-down-double" value="icon-arrows-down-double"><label for="icon-arrows-down-double"><i class="icon-arrows-down-double" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-downleft" value="icon-arrows-downleft"><label for="icon-arrows-downleft"><i class="icon-arrows-downleft" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-downright" value="icon-arrows-downright"><label for="icon-arrows-downright"><i class="icon-arrows-downright" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-down" value="icon-arrows-drag-down"><label for="icon-arrows-drag-down"><i class="icon-arrows-drag-down" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-down-dashed" value="icon-arrows-drag-down-dashed"><label for="icon-arrows-drag-down-dashed"><i class="icon-arrows-drag-down-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-horiz" value="icon-arrows-drag-horiz"><label for="icon-arrows-drag-horiz"><i class="icon-arrows-drag-horiz" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-left" value="icon-arrows-drag-left"><label for="icon-arrows-drag-left"><i class="icon-arrows-drag-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-left-dashed" value="icon-arrows-drag-left-dashed"><label for="icon-arrows-drag-left-dashed"><i class="icon-arrows-drag-left-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-right" value="icon-arrows-drag-right"><label for="icon-arrows-drag-right"><i class="icon-arrows-drag-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-right-dashed" value="icon-arrows-drag-right-dashed"><label for="icon-arrows-drag-right-dashed"><i class="icon-arrows-drag-right-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-up" value="icon-arrows-drag-up"><label for="icon-arrows-drag-up"><i class="icon-arrows-drag-up" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-up-dashed" value="icon-arrows-drag-up-dashed"><label for="icon-arrows-drag-up-dashed"><i class="icon-arrows-drag-up-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-drag-vert" value="icon-arrows-drag-vert"><label for="icon-arrows-drag-vert"><i class="icon-arrows-drag-vert" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-exclamation" value="icon-arrows-exclamation"><label for="icon-arrows-exclamation"><i class="icon-arrows-exclamation" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-expand" value="icon-arrows-expand"><label for="icon-arrows-expand"><i class="icon-arrows-expand" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-expand-diagonal1" value="icon-arrows-expand-diagonal1"><label for="icon-arrows-expand-diagonal1"><i class="icon-arrows-expand-diagonal1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-expand-horizontal1" value="icon-arrows-expand-horizontal1"><label for="icon-arrows-expand-horizontal1"><i class="icon-arrows-expand-horizontal1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-expand-vertical1" value="icon-arrows-expand-vertical1"><label for="icon-arrows-expand-vertical1"><i class="icon-arrows-expand-vertical1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-fit-horizontal" value="icon-arrows-fit-horizontal"><label for="icon-arrows-fit-horizontal"><i class="icon-arrows-fit-horizontal" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-fit-vertical" value="icon-arrows-fit-vertical"><label for="icon-arrows-fit-vertical"><i class="icon-arrows-fit-vertical" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-glide" value="icon-arrows-glide"><label for="icon-arrows-glide"><i class="icon-arrows-glide" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-glide-horizontal" value="icon-arrows-glide-horizontal"><label for="icon-arrows-glide-horizontal"><i class="icon-arrows-glide-horizontal" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-glide-vertical" value="icon-arrows-glide-vertical"><label for="icon-arrows-glide-vertical"><i class="icon-arrows-glide-vertical" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-hamburger1" value="icon-arrows-hamburger1"><label for="icon-arrows-hamburger1"><i class="icon-arrows-hamburger1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-hamburger-2" value="icon-arrows-hamburger-2"><label for="icon-arrows-hamburger-2"><i class="icon-arrows-hamburger-2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-horizontal" value="icon-arrows-horizontal"><label for="icon-arrows-horizontal"><i class="icon-arrows-horizontal" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-info" value="icon-arrows-info"><label for="icon-arrows-info"><i class="icon-arrows-info" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-alt" value="icon-arrows-keyboard-alt"><label for="icon-arrows-keyboard-alt"><i class="icon-arrows-keyboard-alt" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-cmd" value="icon-arrows-keyboard-cmd"><label for="icon-arrows-keyboard-cmd"><i class="icon-arrows-keyboard-cmd" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-delete" value="icon-arrows-keyboard-delete"><label for="icon-arrows-keyboard-delete"><i class="icon-arrows-keyboard-delete" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-down" value="icon-arrows-keyboard-down"><label for="icon-arrows-keyboard-down"><i class="icon-arrows-keyboard-down" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-left" value="icon-arrows-keyboard-left"><label for="icon-arrows-keyboard-left"><i class="icon-arrows-keyboard-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-return" value="icon-arrows-keyboard-return"><label for="icon-arrows-keyboard-return"><i class="icon-arrows-keyboard-return" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-right" value="icon-arrows-keyboard-right"><label for="icon-arrows-keyboard-right"><i class="icon-arrows-keyboard-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-shift" value="icon-arrows-keyboard-shift"><label for="icon-arrows-keyboard-shift"><i class="icon-arrows-keyboard-shift" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-tab" value="icon-arrows-keyboard-tab"><label for="icon-arrows-keyboard-tab"><i class="icon-arrows-keyboard-tab" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-keyboard-up" value="icon-arrows-keyboard-up"><label for="icon-arrows-keyboard-up"><i class="icon-arrows-keyboard-up" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-left" value="icon-arrows-left"><label for="icon-arrows-left"><i class="icon-arrows-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-left-double-32" value="icon-arrows-left-double-32"><label for="icon-arrows-left-double-32"><i class="icon-arrows-left-double-32" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-minus" value="icon-arrows-minus"><label for="icon-arrows-minus"><i class="icon-arrows-minus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-move" value="icon-arrows-move"><label for="icon-arrows-move"><i class="icon-arrows-move" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-move2" value="icon-arrows-move2"><label for="icon-arrows-move2"><i class="icon-arrows-move2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-move-bottom" value="icon-arrows-move-bottom"><label for="icon-arrows-move-bottom"><i class="icon-arrows-move-bottom" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-move-left" value="icon-arrows-move-left"><label for="icon-arrows-move-left"><i class="icon-arrows-move-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-move-right" value="icon-arrows-move-right"><label for="icon-arrows-move-right"><i class="icon-arrows-move-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-move-top" value="icon-arrows-move-top"><label for="icon-arrows-move-top"><i class="icon-arrows-move-top" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-plus" value="icon-arrows-plus"><label for="icon-arrows-plus"><i class="icon-arrows-plus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-question" value="icon-arrows-question"><label for="icon-arrows-question"><i class="icon-arrows-question" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-remove" value="icon-arrows-remove"><label for="icon-arrows-remove"><i class="icon-arrows-remove" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-right" value="icon-arrows-right"><label for="icon-arrows-right"><i class="icon-arrows-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-right-double" value="icon-arrows-right-double"><label for="icon-arrows-right-double"><i class="icon-arrows-right-double" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-rotate" value="icon-arrows-rotate"><label for="icon-arrows-rotate"><i class="icon-arrows-rotate" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-rotate-anti" value="icon-arrows-rotate-anti"><label for="icon-arrows-rotate-anti"><i class="icon-arrows-rotate-anti" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-rotate-anti-dashed" value="icon-arrows-rotate-anti-dashed"><label for="icon-arrows-rotate-anti-dashed"><i class="icon-arrows-rotate-anti-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-rotate-dashed" value="icon-arrows-rotate-dashed"><label for="icon-arrows-rotate-dashed"><i class="icon-arrows-rotate-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-shrink" value="icon-arrows-shrink"><label for="icon-arrows-shrink"><i class="icon-arrows-shrink" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-shrink-diagonal1" value="icon-arrows-shrink-diagonal1"><label for="icon-arrows-shrink-diagonal1"><i class="icon-arrows-shrink-diagonal1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-shrink-diagonal2" value="icon-arrows-shrink-diagonal2"><label for="icon-arrows-shrink-diagonal2"><i class="icon-arrows-shrink-diagonal2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-shrink-horizonal2" value="icon-arrows-shrink-horizonal2"><label for="icon-arrows-shrink-horizonal2"><i class="icon-arrows-shrink-horizonal2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-shrink-horizontal1" value="icon-arrows-shrink-horizontal1"><label for="icon-arrows-shrink-horizontal1"><i class="icon-arrows-shrink-horizontal1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-shrink-vertical1" value="icon-arrows-shrink-vertical1"><label for="icon-arrows-shrink-vertical1"><i class="icon-arrows-shrink-vertical1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-shrink-vertical2" value="icon-arrows-shrink-vertical2"><label for="icon-arrows-shrink-vertical2"><i class="icon-arrows-shrink-vertical2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-sign-down" value="icon-arrows-sign-down"><label for="icon-arrows-sign-down"><i class="icon-arrows-sign-down" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-sign-left" value="icon-arrows-sign-left"><label for="icon-arrows-sign-left"><i class="icon-arrows-sign-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-sign-right" value="icon-arrows-sign-right"><label for="icon-arrows-sign-right"><i class="icon-arrows-sign-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-sign-up" value="icon-arrows-sign-up"><label for="icon-arrows-sign-up"><i class="icon-arrows-sign-up" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slide-down1" value="icon-arrows-slide-down1"><label for="icon-arrows-slide-down1"><i class="icon-arrows-slide-down1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slide-down2" value="icon-arrows-slide-down2"><label for="icon-arrows-slide-down2"><i class="icon-arrows-slide-down2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slide-left1" value="icon-arrows-slide-left1"><label for="icon-arrows-slide-left1"><i class="icon-arrows-slide-left1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slide-left2" value="icon-arrows-slide-left2"><label for="icon-arrows-slide-left2"><i class="icon-arrows-slide-left2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slide-right1" value="icon-arrows-slide-right1"><label for="icon-arrows-slide-right1"><i class="icon-arrows-slide-right1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slide-right2" value="icon-arrows-slide-right2"><label for="icon-arrows-slide-right2"><i class="icon-arrows-slide-right2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slide-up1" value="icon-arrows-slide-up1"><label for="icon-arrows-slide-up1"><i class="icon-arrows-slide-up1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slide-up2" value="icon-arrows-slide-up2"><label for="icon-arrows-slide-up2"><i class="icon-arrows-slide-up2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slim-down" value="icon-arrows-slim-down"><label for="icon-arrows-slim-down"><i class="icon-arrows-slim-down" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slim-down-dashed" value="icon-arrows-slim-down-dashed"><label for="icon-arrows-slim-down-dashed"><i class="icon-arrows-slim-down-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slim-left" value="icon-arrows-slim-left"><label for="icon-arrows-slim-left"><i class="icon-arrows-slim-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slim-left-dashed" value="icon-arrows-slim-left-dashed"><label for="icon-arrows-slim-left-dashed"><i class="icon-arrows-slim-left-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slim-right" value="icon-arrows-slim-right"><label for="icon-arrows-slim-right"><i class="icon-arrows-slim-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slim-right-dashed" value="icon-arrows-slim-right-dashed"><label for="icon-arrows-slim-right-dashed"><i class="icon-arrows-slim-right-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slim-up" value="icon-arrows-slim-up"><label for="icon-arrows-slim-up"><i class="icon-arrows-slim-up" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-slim-up-dashed" value="icon-arrows-slim-up-dashed"><label for="icon-arrows-slim-up-dashed"><i class="icon-arrows-slim-up-dashed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-check" value="icon-arrows-square-check"><label for="icon-arrows-square-check"><i class="icon-arrows-square-check" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-down" value="icon-arrows-square-down"><label for="icon-arrows-square-down"><i class="icon-arrows-square-down" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-downleft" value="icon-arrows-square-downleft"><label for="icon-arrows-square-downleft"><i class="icon-arrows-square-downleft" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-downright" value="icon-arrows-square-downright"><label for="icon-arrows-square-downright"><i class="icon-arrows-square-downright" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-left" value="icon-arrows-square-left"><label for="icon-arrows-square-left"><i class="icon-arrows-square-left" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-minus" value="icon-arrows-square-minus"><label for="icon-arrows-square-minus"><i class="icon-arrows-square-minus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-plus" value="icon-arrows-square-plus"><label for="icon-arrows-square-plus"><i class="icon-arrows-square-plus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-remove" value="icon-arrows-square-remove"><label for="icon-arrows-square-remove"><i class="icon-arrows-square-remove" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-right" value="icon-arrows-square-right"><label for="icon-arrows-square-right"><i class="icon-arrows-square-right" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-up" value="icon-arrows-square-up"><label for="icon-arrows-square-up"><i class="icon-arrows-square-up" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-upleft" value="icon-arrows-square-upleft"><label for="icon-arrows-square-upleft"><i class="icon-arrows-square-upleft" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-square-upright" value="icon-arrows-square-upright"><label for="icon-arrows-square-upright"><i class="icon-arrows-square-upright" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-squares" value="icon-arrows-squares"><label for="icon-arrows-squares"><i class="icon-arrows-squares" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-stretch-diagonal1" value="icon-arrows-stretch-diagonal1"><label for="icon-arrows-stretch-diagonal1"><i class="icon-arrows-stretch-diagonal1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-stretch-diagonal2" value="icon-arrows-stretch-diagonal2"><label for="icon-arrows-stretch-diagonal2"><i class="icon-arrows-stretch-diagonal2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-stretch-diagonal3" value="icon-arrows-stretch-diagonal3"><label for="icon-arrows-stretch-diagonal3"><i class="icon-arrows-stretch-diagonal3" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-stretch-diagonal4" value="icon-arrows-stretch-diagonal4"><label for="icon-arrows-stretch-diagonal4"><i class="icon-arrows-stretch-diagonal4" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-stretch-horizontal1" value="icon-arrows-stretch-horizontal1"><label for="icon-arrows-stretch-horizontal1"><i class="icon-arrows-stretch-horizontal1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-stretch-horizontal2" value="icon-arrows-stretch-horizontal2"><label for="icon-arrows-stretch-horizontal2"><i class="icon-arrows-stretch-horizontal2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-stretch-vertical1" value="icon-arrows-stretch-vertical1"><label for="icon-arrows-stretch-vertical1"><i class="icon-arrows-stretch-vertical1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-stretch-vertical2" value="icon-arrows-stretch-vertical2"><label for="icon-arrows-stretch-vertical2"><i class="icon-arrows-stretch-vertical2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-switch-horizontal" value="icon-arrows-switch-horizontal"><label for="icon-arrows-switch-horizontal"><i class="icon-arrows-switch-horizontal" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-switch-vertical" value="icon-arrows-switch-vertical"><label for="icon-arrows-switch-vertical"><i class="icon-arrows-switch-vertical" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-up" value="icon-arrows-up"><label for="icon-arrows-up"><i class="icon-arrows-up" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-up-double-33" value="icon-arrows-up-double-33"><label for="icon-arrows-up-double-33"><i class="icon-arrows-up-double-33" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-upleft" value="icon-arrows-upleft"><label for="icon-arrows-upleft"><i class="icon-arrows-upleft" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-upright" value="icon-arrows-upright"><label for="icon-arrows-upright"><i class="icon-arrows-upright" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-arrows-vertical" value="icon-arrows-vertical"><label for="icon-arrows-vertical"><i class="icon-arrows-vertical" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag" value="icon-ecommerce-bag"><label for="icon-ecommerce-bag"><i class="icon-ecommerce-bag" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag-check" value="icon-ecommerce-bag-check"><label for="icon-ecommerce-bag-check"><i class="icon-ecommerce-bag-check" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag-cloud" value="icon-ecommerce-bag-cloud"><label for="icon-ecommerce-bag-cloud"><i class="icon-ecommerce-bag-cloud" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag-download" value="icon-ecommerce-bag-download"><label for="icon-ecommerce-bag-download"><i class="icon-ecommerce-bag-download" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag-minus" value="icon-ecommerce-bag-minus"><label for="icon-ecommerce-bag-minus"><i class="icon-ecommerce-bag-minus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag-plus" value="icon-ecommerce-bag-plus"><label for="icon-ecommerce-bag-plus"><i class="icon-ecommerce-bag-plus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag-refresh" value="icon-ecommerce-bag-refresh"><label for="icon-ecommerce-bag-refresh"><i class="icon-ecommerce-bag-refresh" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag-remove" value="icon-ecommerce-bag-remove"><label for="icon-ecommerce-bag-remove"><i class="icon-ecommerce-bag-remove" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag-search" value="icon-ecommerce-bag-search"><label for="icon-ecommerce-bag-search"><i class="icon-ecommerce-bag-search" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bag-upload" value="icon-ecommerce-bag-upload"><label for="icon-ecommerce-bag-upload"><i class="icon-ecommerce-bag-upload" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-banknote" value="icon-ecommerce-banknote"><label for="icon-ecommerce-banknote"><i class="icon-ecommerce-banknote" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-banknotes" value="icon-ecommerce-banknotes"><label for="icon-ecommerce-banknotes"><i class="icon-ecommerce-banknotes" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket" value="icon-ecommerce-basket"><label for="icon-ecommerce-basket"><i class="icon-ecommerce-basket" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket-check" value="icon-ecommerce-basket-check"><label for="icon-ecommerce-basket-check"><i class="icon-ecommerce-basket-check" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket-cloud" value="icon-ecommerce-basket-cloud"><label for="icon-ecommerce-basket-cloud"><i class="icon-ecommerce-basket-cloud" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket-download" value="icon-ecommerce-basket-download"><label for="icon-ecommerce-basket-download"><i class="icon-ecommerce-basket-download" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket-minus" value="icon-ecommerce-basket-minus"><label for="icon-ecommerce-basket-minus"><i class="icon-ecommerce-basket-minus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket-plus" value="icon-ecommerce-basket-plus"><label for="icon-ecommerce-basket-plus"><i class="icon-ecommerce-basket-plus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket-refresh" value="icon-ecommerce-basket-refresh"><label for="icon-ecommerce-basket-refresh"><i class="icon-ecommerce-basket-refresh" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket-remove" value="icon-ecommerce-basket-remove"><label for="icon-ecommerce-basket-remove"><i class="icon-ecommerce-basket-remove" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket-search" value="icon-ecommerce-basket-search"><label for="icon-ecommerce-basket-search"><i class="icon-ecommerce-basket-search" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-basket-upload" value="icon-ecommerce-basket-upload"><label for="icon-ecommerce-basket-upload"><i class="icon-ecommerce-basket-upload" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-bath" value="icon-ecommerce-bath"><label for="icon-ecommerce-bath"><i class="icon-ecommerce-bath" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart" value="icon-ecommerce-cart"><label for="icon-ecommerce-cart"><i class="icon-ecommerce-cart" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-check" value="icon-ecommerce-cart-check"><label for="icon-ecommerce-cart-check"><i class="icon-ecommerce-cart-check" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-cloud" value="icon-ecommerce-cart-cloud"><label for="icon-ecommerce-cart-cloud"><i class="icon-ecommerce-cart-cloud" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-content" value="icon-ecommerce-cart-content"><label for="icon-ecommerce-cart-content"><i class="icon-ecommerce-cart-content" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-download" value="icon-ecommerce-cart-download"><label for="icon-ecommerce-cart-download"><i class="icon-ecommerce-cart-download" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-minus" value="icon-ecommerce-cart-minus"><label for="icon-ecommerce-cart-minus"><i class="icon-ecommerce-cart-minus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-plus" value="icon-ecommerce-cart-plus"><label for="icon-ecommerce-cart-plus"><i class="icon-ecommerce-cart-plus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-refresh" value="icon-ecommerce-cart-refresh"><label for="icon-ecommerce-cart-refresh"><i class="icon-ecommerce-cart-refresh" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-remove" value="icon-ecommerce-cart-remove"><label for="icon-ecommerce-cart-remove"><i class="icon-ecommerce-cart-remove" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-search" value="icon-ecommerce-cart-search"><label for="icon-ecommerce-cart-search"><i class="icon-ecommerce-cart-search" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cart-upload" value="icon-ecommerce-cart-upload"><label for="icon-ecommerce-cart-upload"><i class="icon-ecommerce-cart-upload" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-cent" value="icon-ecommerce-cent"><label for="icon-ecommerce-cent"><i class="icon-ecommerce-cent" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-colon" value="icon-ecommerce-colon"><label for="icon-ecommerce-colon"><i class="icon-ecommerce-colon" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-creditcard" value="icon-ecommerce-creditcard"><label for="icon-ecommerce-creditcard"><i class="icon-ecommerce-creditcard" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-diamond" value="icon-ecommerce-diamond"><label for="icon-ecommerce-diamond"><i class="icon-ecommerce-diamond" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-dollar" value="icon-ecommerce-dollar"><label for="icon-ecommerce-dollar"><i class="icon-ecommerce-dollar" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-euro" value="icon-ecommerce-euro"><label for="icon-ecommerce-euro"><i class="icon-ecommerce-euro" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-franc" value="icon-ecommerce-franc"><label for="icon-ecommerce-franc"><i class="icon-ecommerce-franc" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-gift" value="icon-ecommerce-gift"><label for="icon-ecommerce-gift"><i class="icon-ecommerce-gift" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-graph1" value="icon-ecommerce-graph1"><label for="icon-ecommerce-graph1"><i class="icon-ecommerce-graph1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-graph2" value="icon-ecommerce-graph2"><label for="icon-ecommerce-graph2"><i class="icon-ecommerce-graph2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-graph3" value="icon-ecommerce-graph3"><label for="icon-ecommerce-graph3"><i class="icon-ecommerce-graph3" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-graph-decrease" value="icon-ecommerce-graph-decrease"><label for="icon-ecommerce-graph-decrease"><i class="icon-ecommerce-graph-decrease" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-graph-increase" value="icon-ecommerce-graph-increase"><label for="icon-ecommerce-graph-increase"><i class="icon-ecommerce-graph-increase" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-guarani" value="icon-ecommerce-guarani"><label for="icon-ecommerce-guarani"><i class="icon-ecommerce-guarani" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-kips" value="icon-ecommerce-kips"><label for="icon-ecommerce-kips"><i class="icon-ecommerce-kips" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-lira" value="icon-ecommerce-lira"><label for="icon-ecommerce-lira"><i class="icon-ecommerce-lira" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-megaphone" value="icon-ecommerce-megaphone"><label for="icon-ecommerce-megaphone"><i class="icon-ecommerce-megaphone" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-money" value="icon-ecommerce-money"><label for="icon-ecommerce-money"><i class="icon-ecommerce-money" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-naira" value="icon-ecommerce-naira"><label for="icon-ecommerce-naira"><i class="icon-ecommerce-naira" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-pesos" value="icon-ecommerce-pesos"><label for="icon-ecommerce-pesos"><i class="icon-ecommerce-pesos" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-pound" value="icon-ecommerce-pound"><label for="icon-ecommerce-pound"><i class="icon-ecommerce-pound" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt" value="icon-ecommerce-receipt"><label for="icon-ecommerce-receipt"><i class="icon-ecommerce-receipt" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-bath" value="icon-ecommerce-receipt-bath"><label for="icon-ecommerce-receipt-bath"><i class="icon-ecommerce-receipt-bath" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-cent" value="icon-ecommerce-receipt-cent"><label for="icon-ecommerce-receipt-cent"><i class="icon-ecommerce-receipt-cent" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-dollar" value="icon-ecommerce-receipt-dollar"><label for="icon-ecommerce-receipt-dollar"><i class="icon-ecommerce-receipt-dollar" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-euro" value="icon-ecommerce-receipt-euro"><label for="icon-ecommerce-receipt-euro"><i class="icon-ecommerce-receipt-euro" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-franc" value="icon-ecommerce-receipt-franc"><label for="icon-ecommerce-receipt-franc"><i class="icon-ecommerce-receipt-franc" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-guarani" value="icon-ecommerce-receipt-guarani"><label for="icon-ecommerce-receipt-guarani"><i class="icon-ecommerce-receipt-guarani" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-kips" value="icon-ecommerce-receipt-kips"><label for="icon-ecommerce-receipt-kips"><i class="icon-ecommerce-receipt-kips" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-lira" value="icon-ecommerce-receipt-lira"><label for="icon-ecommerce-receipt-lira"><i class="icon-ecommerce-receipt-lira" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-naira" value="icon-ecommerce-receipt-naira"><label for="icon-ecommerce-receipt-naira"><i class="icon-ecommerce-receipt-naira" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-pesos" value="icon-ecommerce-receipt-pesos"><label for="icon-ecommerce-receipt-pesos"><i class="icon-ecommerce-receipt-pesos" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-pound" value="icon-ecommerce-receipt-pound"><label for="icon-ecommerce-receipt-pound"><i class="icon-ecommerce-receipt-pound" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-rublo" value="icon-ecommerce-receipt-rublo"><label for="icon-ecommerce-receipt-rublo"><i class="icon-ecommerce-receipt-rublo" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-rupee" value="icon-ecommerce-receipt-rupee"><label for="icon-ecommerce-receipt-rupee"><i class="icon-ecommerce-receipt-rupee" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-tugrik" value="icon-ecommerce-receipt-tugrik"><label for="icon-ecommerce-receipt-tugrik"><i class="icon-ecommerce-receipt-tugrik" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-won" value="icon-ecommerce-receipt-won"><label for="icon-ecommerce-receipt-won"><i class="icon-ecommerce-receipt-won" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-yen" value="icon-ecommerce-receipt-yen"><label for="icon-ecommerce-receipt-yen"><i class="icon-ecommerce-receipt-yen" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-receipt-yen2" value="icon-ecommerce-receipt-yen2"><label for="icon-ecommerce-receipt-yen2"><i class="icon-ecommerce-receipt-yen2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-recept-colon" value="icon-ecommerce-recept-colon"><label for="icon-ecommerce-recept-colon"><i class="icon-ecommerce-recept-colon" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-rublo" value="icon-ecommerce-rublo"><label for="icon-ecommerce-rublo"><i class="icon-ecommerce-rublo" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-rupee" value="icon-ecommerce-rupee"><label for="icon-ecommerce-rupee"><i class="icon-ecommerce-rupee" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-safe" value="icon-ecommerce-safe"><label for="icon-ecommerce-safe"><i class="icon-ecommerce-safe" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-sale" value="icon-ecommerce-sale"><label for="icon-ecommerce-sale"><i class="icon-ecommerce-sale" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-sales" value="icon-ecommerce-sales"><label for="icon-ecommerce-sales"><i class="icon-ecommerce-sales" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-ticket" value="icon-ecommerce-ticket"><label for="icon-ecommerce-ticket"><i class="icon-ecommerce-ticket" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-tugriks" value="icon-ecommerce-tugriks"><label for="icon-ecommerce-tugriks"><i class="icon-ecommerce-tugriks" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-wallet" value="icon-ecommerce-wallet"><label for="icon-ecommerce-wallet"><i class="icon-ecommerce-wallet" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-won" value="icon-ecommerce-won"><label for="icon-ecommerce-won"><i class="icon-ecommerce-won" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-yen" value="icon-ecommerce-yen"><label for="icon-ecommerce-yen"><i class="icon-ecommerce-yen" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ecommerce-yen2" value="icon-ecommerce-yen2"><label for="icon-ecommerce-yen2"><i class="icon-ecommerce-yen2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-accelerator" value="icon-basic-accelerator"><label for="icon-basic-accelerator"><i class="icon-basic-accelerator" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-alarm" value="icon-basic-alarm"><label for="icon-basic-alarm"><i class="icon-basic-alarm" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-anchor" value="icon-basic-anchor"><label for="icon-basic-anchor"><i class="icon-basic-anchor" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-anticlockwise" value="icon-basic-anticlockwise"><label for="icon-basic-anticlockwise"><i class="icon-basic-anticlockwise" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-archive" value="icon-basic-archive"><label for="icon-basic-archive"><i class="icon-basic-archive" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-archive-full" value="icon-basic-archive-full"><label for="icon-basic-archive-full"><i class="icon-basic-archive-full" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-ban" value="icon-basic-ban"><label for="icon-basic-ban"><i class="icon-basic-ban" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-battery-charge" value="icon-basic-battery-charge"><label for="icon-basic-battery-charge"><i class="icon-basic-battery-charge" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-battery-empty" value="icon-basic-battery-empty"><label for="icon-basic-battery-empty"><i class="icon-basic-battery-empty" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-battery-full" value="icon-basic-battery-full"><label for="icon-basic-battery-full"><i class="icon-basic-battery-full" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-battery-half" value="icon-basic-battery-half"><label for="icon-basic-battery-half"><i class="icon-basic-battery-half" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-bolt" value="icon-basic-bolt"><label for="icon-basic-bolt"><i class="icon-basic-bolt" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-book" value="icon-basic-book"><label for="icon-basic-book"><i class="icon-basic-book" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-book-pen" value="icon-basic-book-pen"><label for="icon-basic-book-pen"><i class="icon-basic-book-pen" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-book-pencil" value="icon-basic-book-pencil"><label for="icon-basic-book-pencil"><i class="icon-basic-book-pencil" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-bookmark" value="icon-basic-bookmark"><label for="icon-basic-bookmark"><i class="icon-basic-bookmark" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-calculator" value="icon-basic-calculator"><label for="icon-basic-calculator"><i class="icon-basic-calculator" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-calendar" value="icon-basic-calendar"><label for="icon-basic-calendar"><i class="icon-basic-calendar" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-cards-diamonds" value="icon-basic-cards-diamonds"><label for="icon-basic-cards-diamonds"><i class="icon-basic-cards-diamonds" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-cards-hearts" value="icon-basic-cards-hearts"><label for="icon-basic-cards-hearts"><i class="icon-basic-cards-hearts" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-case" value="icon-basic-case"><label for="icon-basic-case"><i class="icon-basic-case" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-chronometer" value="icon-basic-chronometer"><label for="icon-basic-chronometer"><i class="icon-basic-chronometer" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-clessidre" value="icon-basic-clessidre"><label for="icon-basic-clessidre"><i class="icon-basic-clessidre" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-clock" value="icon-basic-clock"><label for="icon-basic-clock"><i class="icon-basic-clock" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-clockwise" value="icon-basic-clockwise"><label for="icon-basic-clockwise"><i class="icon-basic-clockwise" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-cloud" value="icon-basic-cloud"><label for="icon-basic-cloud"><i class="icon-basic-cloud" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-clubs" value="icon-basic-clubs"><label for="icon-basic-clubs"><i class="icon-basic-clubs" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-compass" value="icon-basic-compass"><label for="icon-basic-compass"><i class="icon-basic-compass" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-cup" value="icon-basic-cup"><label for="icon-basic-cup"><i class="icon-basic-cup" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-diamonds" value="icon-basic-diamonds"><label for="icon-basic-diamonds"><i class="icon-basic-diamonds" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-display" value="icon-basic-display"><label for="icon-basic-display"><i class="icon-basic-display" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-download" value="icon-basic-download"><label for="icon-basic-download"><i class="icon-basic-download" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-exclamation" value="icon-basic-exclamation"><label for="icon-basic-exclamation"><i class="icon-basic-exclamation" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-eye" value="icon-basic-eye"><label for="icon-basic-eye"><i class="icon-basic-eye" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-eye-closed" value="icon-basic-eye-closed"><label for="icon-basic-eye-closed"><i class="icon-basic-eye-closed" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-female" value="icon-basic-female"><label for="icon-basic-female"><i class="icon-basic-female" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-flag1" value="icon-basic-flag1"><label for="icon-basic-flag1"><i class="icon-basic-flag1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-flag2" value="icon-basic-flag2"><label for="icon-basic-flag2"><i class="icon-basic-flag2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-floppydisk" value="icon-basic-floppydisk"><label for="icon-basic-floppydisk"><i class="icon-basic-floppydisk" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-folder" value="icon-basic-folder"><label for="icon-basic-folder"><i class="icon-basic-folder" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-folder-multiple" value="icon-basic-folder-multiple"><label for="icon-basic-folder-multiple"><i class="icon-basic-folder-multiple" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-gear" value="icon-basic-gear"><label for="icon-basic-gear"><i class="icon-basic-gear" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-geolocalize-01" value="icon-basic-geolocalize-01"><label for="icon-basic-geolocalize-01"><i class="icon-basic-geolocalize-01" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-geolocalize-05" value="icon-basic-geolocalize-05"><label for="icon-basic-geolocalize-05"><i class="icon-basic-geolocalize-05" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-globe" value="icon-basic-globe"><label for="icon-basic-globe"><i class="icon-basic-globe" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-gunsight" value="icon-basic-gunsight"><label for="icon-basic-gunsight"><i class="icon-basic-gunsight" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-hammer" value="icon-basic-hammer"><label for="icon-basic-hammer"><i class="icon-basic-hammer" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-headset" value="icon-basic-headset"><label for="icon-basic-headset"><i class="icon-basic-headset" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-heart" value="icon-basic-heart"><label for="icon-basic-heart"><i class="icon-basic-heart" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-heart-broken" value="icon-basic-heart-broken"><label for="icon-basic-heart-broken"><i class="icon-basic-heart-broken" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-helm" value="icon-basic-helm"><label for="icon-basic-helm"><i class="icon-basic-helm" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-home" value="icon-basic-home"><label for="icon-basic-home"><i class="icon-basic-home" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-info" value="icon-basic-info"><label for="icon-basic-info"><i class="icon-basic-info" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-ipod" value="icon-basic-ipod"><label for="icon-basic-ipod"><i class="icon-basic-ipod" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-joypad" value="icon-basic-joypad"><label for="icon-basic-joypad"><i class="icon-basic-joypad" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-key" value="icon-basic-key"><label for="icon-basic-key"><i class="icon-basic-key" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-keyboard" value="icon-basic-keyboard"><label for="icon-basic-keyboard"><i class="icon-basic-keyboard" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-laptop" value="icon-basic-laptop"><label for="icon-basic-laptop"><i class="icon-basic-laptop" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-life-buoy" value="icon-basic-life-buoy"><label for="icon-basic-life-buoy"><i class="icon-basic-life-buoy" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-lightbulb" value="icon-basic-lightbulb"><label for="icon-basic-lightbulb"><i class="icon-basic-lightbulb" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-link" value="icon-basic-link"><label for="icon-basic-link"><i class="icon-basic-link" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-lock" value="icon-basic-lock"><label for="icon-basic-lock"><i class="icon-basic-lock" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-lock-open" value="icon-basic-lock-open"><label for="icon-basic-lock-open"><i class="icon-basic-lock-open" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-magic-mouse" value="icon-basic-magic-mouse"><label for="icon-basic-magic-mouse"><i class="icon-basic-magic-mouse" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-magnifier" value="icon-basic-magnifier"><label for="icon-basic-magnifier"><i class="icon-basic-magnifier" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-magnifier-minus" value="icon-basic-magnifier-minus"><label for="icon-basic-magnifier-minus"><i class="icon-basic-magnifier-minus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-magnifier-plus" value="icon-basic-magnifier-plus"><label for="icon-basic-magnifier-plus"><i class="icon-basic-magnifier-plus" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-mail" value="icon-basic-mail"><label for="icon-basic-mail"><i class="icon-basic-mail" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-mail-multiple" value="icon-basic-mail-multiple"><label for="icon-basic-mail-multiple"><i class="icon-basic-mail-multiple" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-mail-open" value="icon-basic-mail-open"><label for="icon-basic-mail-open"><i class="icon-basic-mail-open" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-mail-open-text" value="icon-basic-mail-open-text"><label for="icon-basic-mail-open-text"><i class="icon-basic-mail-open-text" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-male" value="icon-basic-male"><label for="icon-basic-male"><i class="icon-basic-male" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-map" value="icon-basic-map"><label for="icon-basic-map"><i class="icon-basic-map" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-message" value="icon-basic-message"><label for="icon-basic-message"><i class="icon-basic-message" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-message-multiple" value="icon-basic-message-multiple"><label for="icon-basic-message-multiple"><i class="icon-basic-message-multiple" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-message-txt" value="icon-basic-message-txt"><label for="icon-basic-message-txt"><i class="icon-basic-message-txt" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-mixer2" value="icon-basic-mixer2"><label for="icon-basic-mixer2"><i class="icon-basic-mixer2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-mouse" value="icon-basic-mouse"><label for="icon-basic-mouse"><i class="icon-basic-mouse" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-notebook" value="icon-basic-notebook"><label for="icon-basic-notebook"><i class="icon-basic-notebook" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-notebook-pen" value="icon-basic-notebook-pen"><label for="icon-basic-notebook-pen"><i class="icon-basic-notebook-pen" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-notebook-pencil" value="icon-basic-notebook-pencil"><label for="icon-basic-notebook-pencil"><i class="icon-basic-notebook-pencil" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-paperplane" value="icon-basic-paperplane"><label for="icon-basic-paperplane"><i class="icon-basic-paperplane" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-pencil-ruler" value="icon-basic-pencil-ruler"><label for="icon-basic-pencil-ruler"><i class="icon-basic-pencil-ruler" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-pencil-ruler-pen" value="icon-basic-pencil-ruler-pen"><label for="icon-basic-pencil-ruler-pen"><i class="icon-basic-pencil-ruler-pen" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-photo" value="icon-basic-photo"><label for="icon-basic-photo"><i class="icon-basic-photo" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-picture" value="icon-basic-picture"><label for="icon-basic-picture"><i class="icon-basic-picture" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-picture-multiple" value="icon-basic-picture-multiple"><label for="icon-basic-picture-multiple"><i class="icon-basic-picture-multiple" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-pin1" value="icon-basic-pin1"><label for="icon-basic-pin1"><i class="icon-basic-pin1" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-pin2" value="icon-basic-pin2"><label for="icon-basic-pin2"><i class="icon-basic-pin2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-postcard" value="icon-basic-postcard"><label for="icon-basic-postcard"><i class="icon-basic-postcard" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-postcard-multiple" value="icon-basic-postcard-multiple"><label for="icon-basic-postcard-multiple"><i class="icon-basic-postcard-multiple" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-printer" value="icon-basic-printer"><label for="icon-basic-printer"><i class="icon-basic-printer" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-question" value="icon-basic-question"><label for="icon-basic-question"><i class="icon-basic-question" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-rss" value="icon-basic-rss"><label for="icon-basic-rss"><i class="icon-basic-rss" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-server" value="icon-basic-server"><label for="icon-basic-server"><i class="icon-basic-server" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-server2" value="icon-basic-server2"><label for="icon-basic-server2"><i class="icon-basic-server2" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-server-cloud" value="icon-basic-server-cloud"><label for="icon-basic-server-cloud"><i class="icon-basic-server-cloud" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-server-download" value="icon-basic-server-download"><label for="icon-basic-server-download"><i class="icon-basic-server-download" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-server-upload" value="icon-basic-server-upload"><label for="icon-basic-server-upload"><i class="icon-basic-server-upload" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-settings" value="icon-basic-settings"><label for="icon-basic-settings"><i class="icon-basic-settings" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-share" value="icon-basic-share"><label for="icon-basic-share"><i class="icon-basic-share" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-sheet" value="icon-basic-sheet"><label for="icon-basic-sheet"><i class="icon-basic-sheet" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-sheet-multiple" value="icon-basic-sheet-multiple"><label for="icon-basic-sheet-multiple"><i class="icon-basic-sheet-multiple" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-sheet-pen" value="icon-basic-sheet-pen"><label for="icon-basic-sheet-pen"><i class="icon-basic-sheet-pen" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-sheet-pencil" value="icon-basic-sheet-pencil"><label for="icon-basic-sheet-pencil"><i class="icon-basic-sheet-pencil" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-sheet-txt" value="icon-basic-sheet-txt"><label for="icon-basic-sheet-txt"><i class="icon-basic-sheet-txt" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-signs" value="icon-basic-signs"><label for="icon-basic-signs"><i class="icon-basic-signs" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-smartphone" value="icon-basic-smartphone"><label for="icon-basic-smartphone"><i class="icon-basic-smartphone" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-spades" value="icon-basic-spades"><label for="icon-basic-spades"><i class="icon-basic-spades" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-spread" value="icon-basic-spread"><label for="icon-basic-spread"><i class="icon-basic-spread" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-spread-bookmark" value="icon-basic-spread-bookmark"><label for="icon-basic-spread-bookmark"><i class="icon-basic-spread-bookmark" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-spread-text" value="icon-basic-spread-text"><label for="icon-basic-spread-text"><i class="icon-basic-spread-text" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-spread-text-bookmark" value="icon-basic-spread-text-bookmark"><label for="icon-basic-spread-text-bookmark"><i class="icon-basic-spread-text-bookmark" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-star" value="icon-basic-star"><label for="icon-basic-star"><i class="icon-basic-star" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-tablet" value="icon-basic-tablet"><label for="icon-basic-tablet"><i class="icon-basic-tablet" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-target" value="icon-basic-target"><label for="icon-basic-target"><i class="icon-basic-target" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-todo" value="icon-basic-todo"><label for="icon-basic-todo"><i class="icon-basic-todo" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-todo-pen" value="icon-basic-todo-pen"><label for="icon-basic-todo-pen"><i class="icon-basic-todo-pen" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-todo-pencil" value="icon-basic-todo-pencil"><label for="icon-basic-todo-pencil"><i class="icon-basic-todo-pencil" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-todo-txt" value="icon-basic-todo-txt"><label for="icon-basic-todo-txt"><i class="icon-basic-todo-txt" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-todolist-pen" value="icon-basic-todolist-pen"><label for="icon-basic-todolist-pen"><i class="icon-basic-todolist-pen" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-todolist-pencil" value="icon-basic-todolist-pencil"><label for="icon-basic-todolist-pencil"><i class="icon-basic-todolist-pencil" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-trashcan" value="icon-basic-trashcan"><label for="icon-basic-trashcan"><i class="icon-basic-trashcan" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-trashcan-full" value="icon-basic-trashcan-full"><label for="icon-basic-trashcan-full"><i class="icon-basic-trashcan-full" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-trashcan-refresh" value="icon-basic-trashcan-refresh"><label for="icon-basic-trashcan-refresh"><i class="icon-basic-trashcan-refresh" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-trashcan-remove" value="icon-basic-trashcan-remove"><label for="icon-basic-trashcan-remove"><i class="icon-basic-trashcan-remove" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-upload" value="icon-basic-upload"><label for="icon-basic-upload"><i class="icon-basic-upload" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-usb" value="icon-basic-usb"><label for="icon-basic-usb"><i class="icon-basic-usb" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-video" value="icon-basic-video"><label for="icon-basic-video"><i class="icon-basic-video" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-watch" value="icon-basic-watch"><label for="icon-basic-watch"><i class="icon-basic-watch" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-webpage" value="icon-basic-webpage"><label for="icon-basic-webpage"><i class="icon-basic-webpage" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-webpage-img-txt" value="icon-basic-webpage-img-txt"><label for="icon-basic-webpage-img-txt"><i class="icon-basic-webpage-img-txt" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-webpage-multiple" value="icon-basic-webpage-multiple"><label for="icon-basic-webpage-multiple"><i class="icon-basic-webpage-multiple" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-webpage-txt" value="icon-basic-webpage-txt"><label for="icon-basic-webpage-txt"><i class="icon-basic-webpage-txt" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basic-world" value="icon-basic-world"><label for="icon-basic-world"><i class="icon-basic-world" style="font-size:30px;"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-wand" value="ti-wand"><label for="ti-wand"><i class="ti-wand"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-volume" value="ti-volume"><label for="ti-volume"><i class="ti-volume"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-user" value="ti-user"><label for="ti-user"><i class="ti-user"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-unlock" value="ti-unlock"><label for="ti-unlock"><i class="ti-unlock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-unlink" value="ti-unlink"><label for="ti-unlink"><i class="ti-unlink"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-trash" value="ti-trash"><label for="ti-trash"><i class="ti-trash"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-thought" value="ti-thought"><label for="ti-thought"><i class="ti-thought"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-target" value="ti-target"><label for="ti-target"><i class="ti-target"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-tag" value="ti-tag"><label for="ti-tag"><i class="ti-tag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-tablet" value="ti-tablet"><label for="ti-tablet"><i class="ti-tablet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-star" value="ti-star"><label for="ti-star"><i class="ti-star"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-spray" value="ti-spray"><label for="ti-spray"><i class="ti-spray"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-signal" value="ti-signal"><label for="ti-signal"><i class="ti-signal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-shopping-cart" value="ti-shopping-cart"><label for="ti-shopping-cart"><i class="ti-shopping-cart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-shopping-cart-full" value="ti-shopping-cart-full"><label for="ti-shopping-cart-full"><i class="ti-shopping-cart-full"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-settings" value="ti-settings"><label for="ti-settings"><i class="ti-settings"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-search" value="ti-search"><label for="ti-search"><i class="ti-search"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-zoom-in" value="ti-zoom-in"><label for="ti-zoom-in"><i class="ti-zoom-in"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-zoom-out" value="ti-zoom-out"><label for="ti-zoom-out"><i class="ti-zoom-out"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-cut" value="ti-cut"><label for="ti-cut"><i class="ti-cut"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-ruler" value="ti-ruler"><label for="ti-ruler"><i class="ti-ruler"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-ruler-pencil" value="ti-ruler-pencil"><label for="ti-ruler-pencil"><i class="ti-ruler-pencil"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-ruler-alt" value="ti-ruler-alt"><label for="ti-ruler-alt"><i class="ti-ruler-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-bookmark" value="ti-bookmark"><label for="ti-bookmark"><i class="ti-bookmark"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-bookmark-alt" value="ti-bookmark-alt"><label for="ti-bookmark-alt"><i class="ti-bookmark-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-reload" value="ti-reload"><label for="ti-reload"><i class="ti-reload"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-plus" value="ti-plus"><label for="ti-plus"><i class="ti-plus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pin" value="ti-pin"><label for="ti-pin"><i class="ti-pin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pencil" value="ti-pencil"><label for="ti-pencil"><i class="ti-pencil"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pencil-alt" value="ti-pencil-alt"><label for="ti-pencil-alt"><i class="ti-pencil-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-paint-roller" value="ti-paint-roller"><label for="ti-paint-roller"><i class="ti-paint-roller"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-paint-bucket" value="ti-paint-bucket"><label for="ti-paint-bucket"><i class="ti-paint-bucket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-na" value="ti-na"><label for="ti-na"><i class="ti-na"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-mobile" value="ti-mobile"><label for="ti-mobile"><i class="ti-mobile"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-minus" value="ti-minus"><label for="ti-minus"><i class="ti-minus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-medall" value="ti-medall"><label for="ti-medall"><i class="ti-medall"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-medall-alt" value="ti-medall-alt"><label for="ti-medall-alt"><i class="ti-medall-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-marker" value="ti-marker"><label for="ti-marker"><i class="ti-marker"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-marker-alt" value="ti-marker-alt"><label for="ti-marker-alt"><i class="ti-marker-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-up" value="ti-arrow-up"><label for="ti-arrow-up"><i class="ti-arrow-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-right" value="ti-arrow-right"><label for="ti-arrow-right"><i class="ti-arrow-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-left" value="ti-arrow-left"><label for="ti-arrow-left"><i class="ti-arrow-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-down" value="ti-arrow-down"><label for="ti-arrow-down"><i class="ti-arrow-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-lock" value="ti-lock"><label for="ti-lock"><i class="ti-lock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-location-arrow" value="ti-location-arrow"><label for="ti-location-arrow"><i class="ti-location-arrow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-link" value="ti-link"><label for="ti-link"><i class="ti-link"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout" value="ti-layout"><label for="ti-layout"><i class="ti-layout"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layers" value="ti-layers"><label for="ti-layers"><i class="ti-layers"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layers-alt" value="ti-layers-alt"><label for="ti-layers-alt"><i class="ti-layers-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-key" value="ti-key"><label for="ti-key"><i class="ti-key"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-import" value="ti-import"><label for="ti-import"><i class="ti-import"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-image" value="ti-image"><label for="ti-image"><i class="ti-image"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-heart" value="ti-heart"><label for="ti-heart"><i class="ti-heart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-heart-broken" value="ti-heart-broken"><label for="ti-heart-broken"><i class="ti-heart-broken"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-hand-stop" value="ti-hand-stop"><label for="ti-hand-stop"><i class="ti-hand-stop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-hand-open" value="ti-hand-open"><label for="ti-hand-open"><i class="ti-hand-open"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-hand-drag" value="ti-hand-drag"><label for="ti-hand-drag"><i class="ti-hand-drag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-folder" value="ti-folder"><label for="ti-folder"><i class="ti-folder"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-flag" value="ti-flag"><label for="ti-flag"><i class="ti-flag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-flag-alt" value="ti-flag-alt"><label for="ti-flag-alt"><i class="ti-flag-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-flag-alt-2" value="ti-flag-alt-2"><label for="ti-flag-alt-2"><i class="ti-flag-alt-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-eye" value="ti-eye"><label for="ti-eye"><i class="ti-eye"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-export" value="ti-export"><label for="ti-export"><i class="ti-export"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-exchange-vertical" value="ti-exchange-vertical"><label for="ti-exchange-vertical"><i class="ti-exchange-vertical"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-desktop" value="ti-desktop"><label for="ti-desktop"><i class="ti-desktop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-cup" value="ti-cup"><label for="ti-cup"><i class="ti-cup"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-crown" value="ti-crown"><label for="ti-crown"><i class="ti-crown"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-comments" value="ti-comments"><label for="ti-comments"><i class="ti-comments"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-comment" value="ti-comment"><label for="ti-comment"><i class="ti-comment"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-comment-alt" value="ti-comment-alt"><label for="ti-comment-alt"><i class="ti-comment-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-close" value="ti-close"><label for="ti-close"><i class="ti-close"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-clip" value="ti-clip"><label for="ti-clip"><i class="ti-clip"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-angle-up" value="ti-angle-up"><label for="ti-angle-up"><i class="ti-angle-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-angle-right" value="ti-angle-right"><label for="ti-angle-right"><i class="ti-angle-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-angle-left" value="ti-angle-left"><label for="ti-angle-left"><i class="ti-angle-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-angle-down" value="ti-angle-down"><label for="ti-angle-down"><i class="ti-angle-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-check" value="ti-check"><label for="ti-check"><i class="ti-check"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-check-box" value="ti-check-box"><label for="ti-check-box"><i class="ti-check-box"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-camera" value="ti-camera"><label for="ti-camera"><i class="ti-camera"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-announcement" value="ti-announcement"><label for="ti-announcement"><i class="ti-announcement"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-brush" value="ti-brush"><label for="ti-brush"><i class="ti-brush"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-briefcase" value="ti-briefcase"><label for="ti-briefcase"><i class="ti-briefcase"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-bolt" value="ti-bolt"><label for="ti-bolt"><i class="ti-bolt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-bolt-alt" value="ti-bolt-alt"><label for="ti-bolt-alt"><i class="ti-bolt-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-blackboard" value="ti-blackboard"><label for="ti-blackboard"><i class="ti-blackboard"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-bag" value="ti-bag"><label for="ti-bag"><i class="ti-bag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-move" value="ti-move"><label for="ti-move"><i class="ti-move"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrows-vertical" value="ti-arrows-vertical"><label for="ti-arrows-vertical"><i class="ti-arrows-vertical"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrows-horizontal" value="ti-arrows-horizontal"><label for="ti-arrows-horizontal"><i class="ti-arrows-horizontal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-fullscreen" value="ti-fullscreen"><label for="ti-fullscreen"><i class="ti-fullscreen"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-top-right" value="ti-arrow-top-right"><label for="ti-arrow-top-right"><i class="ti-arrow-top-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-top-left" value="ti-arrow-top-left"><label for="ti-arrow-top-left"><i class="ti-arrow-top-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-circle-up" value="ti-arrow-circle-up"><label for="ti-arrow-circle-up"><i class="ti-arrow-circle-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-circle-right" value="ti-arrow-circle-right"><label for="ti-arrow-circle-right"><i class="ti-arrow-circle-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-circle-left" value="ti-arrow-circle-left"><label for="ti-arrow-circle-left"><i class="ti-arrow-circle-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrow-circle-down" value="ti-arrow-circle-down"><label for="ti-arrow-circle-down"><i class="ti-arrow-circle-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-angle-double-up" value="ti-angle-double-up"><label for="ti-angle-double-up"><i class="ti-angle-double-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-angle-double-right" value="ti-angle-double-right"><label for="ti-angle-double-right"><i class="ti-angle-double-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-angle-double-left" value="ti-angle-double-left"><label for="ti-angle-double-left"><i class="ti-angle-double-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-angle-double-down" value="ti-angle-double-down"><label for="ti-angle-double-down"><i class="ti-angle-double-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-zip" value="ti-zip"><label for="ti-zip"><i class="ti-zip"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-world" value="ti-world"><label for="ti-world"><i class="ti-world"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-wheelchair" value="ti-wheelchair"><label for="ti-wheelchair"><i class="ti-wheelchair"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-view-list" value="ti-view-list"><label for="ti-view-list"><i class="ti-view-list"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-view-list-alt" value="ti-view-list-alt"><label for="ti-view-list-alt"><i class="ti-view-list-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-view-grid" value="ti-view-grid"><label for="ti-view-grid"><i class="ti-view-grid"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-uppercase" value="ti-uppercase"><label for="ti-uppercase"><i class="ti-uppercase"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-upload" value="ti-upload"><label for="ti-upload"><i class="ti-upload"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-underline" value="ti-underline"><label for="ti-underline"><i class="ti-underline"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-truck" value="ti-truck"><label for="ti-truck"><i class="ti-truck"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-timer" value="ti-timer"><label for="ti-timer"><i class="ti-timer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-ticket" value="ti-ticket"><label for="ti-ticket"><i class="ti-ticket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-thumb-up" value="ti-thumb-up"><label for="ti-thumb-up"><i class="ti-thumb-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-thumb-down" value="ti-thumb-down"><label for="ti-thumb-down"><i class="ti-thumb-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-text" value="ti-text"><label for="ti-text"><i class="ti-text"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-stats-up" value="ti-stats-up"><label for="ti-stats-up"><i class="ti-stats-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-stats-down" value="ti-stats-down"><label for="ti-stats-down"><i class="ti-stats-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-split-v" value="ti-split-v"><label for="ti-split-v"><i class="ti-split-v"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-split-h" value="ti-split-h"><label for="ti-split-h"><i class="ti-split-h"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-smallcap" value="ti-smallcap"><label for="ti-smallcap"><i class="ti-smallcap"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-shine" value="ti-shine"><label for="ti-shine"><i class="ti-shine"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-shift-right" value="ti-shift-right"><label for="ti-shift-right"><i class="ti-shift-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-shift-left" value="ti-shift-left"><label for="ti-shift-left"><i class="ti-shift-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-shield" value="ti-shield"><label for="ti-shield"><i class="ti-shield"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-notepad" value="ti-notepad"><label for="ti-notepad"><i class="ti-notepad"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-server" value="ti-server"><label for="ti-server"><i class="ti-server"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-quote-right" value="ti-quote-right"><label for="ti-quote-right"><i class="ti-quote-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-quote-left" value="ti-quote-left"><label for="ti-quote-left"><i class="ti-quote-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pulse" value="ti-pulse"><label for="ti-pulse"><i class="ti-pulse"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-printer" value="ti-printer"><label for="ti-printer"><i class="ti-printer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-power-off" value="ti-power-off"><label for="ti-power-off"><i class="ti-power-off"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-plug" value="ti-plug"><label for="ti-plug"><i class="ti-plug"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pie-chart" value="ti-pie-chart"><label for="ti-pie-chart"><i class="ti-pie-chart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-paragraph" value="ti-paragraph"><label for="ti-paragraph"><i class="ti-paragraph"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-panel" value="ti-panel"><label for="ti-panel"><i class="ti-panel"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-package" value="ti-package"><label for="ti-package"><i class="ti-package"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-music" value="ti-music"><label for="ti-music"><i class="ti-music"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-music-alt" value="ti-music-alt"><label for="ti-music-alt"><i class="ti-music-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-mouse" value="ti-mouse"><label for="ti-mouse"><i class="ti-mouse"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-mouse-alt" value="ti-mouse-alt"><label for="ti-mouse-alt"><i class="ti-mouse-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-money" value="ti-money"><label for="ti-money"><i class="ti-money"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-microphone" value="ti-microphone"><label for="ti-microphone"><i class="ti-microphone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-menu" value="ti-menu"><label for="ti-menu"><i class="ti-menu"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-menu-alt" value="ti-menu-alt"><label for="ti-menu-alt"><i class="ti-menu-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-map" value="ti-map"><label for="ti-map"><i class="ti-map"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-map-alt" value="ti-map-alt"><label for="ti-map-alt"><i class="ti-map-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-loop" value="ti-loop"><label for="ti-loop"><i class="ti-loop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-location-pin" value="ti-location-pin"><label for="ti-location-pin"><i class="ti-location-pin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-list" value="ti-list"><label for="ti-list"><i class="ti-list"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-light-bulb" value="ti-light-bulb"><label for="ti-light-bulb"><i class="ti-light-bulb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-Italic" value="ti-Italic"><label for="ti-Italic"><i class="ti-Italic"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-info" value="ti-info"><label for="ti-info"><i class="ti-info"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-infinite" value="ti-infinite"><label for="ti-infinite"><i class="ti-infinite"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-id-badge" value="ti-id-badge"><label for="ti-id-badge"><i class="ti-id-badge"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-hummer" value="ti-hummer"><label for="ti-hummer"><i class="ti-hummer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-home" value="ti-home"><label for="ti-home"><i class="ti-home"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-help" value="ti-help"><label for="ti-help"><i class="ti-help"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-headphone" value="ti-headphone"><label for="ti-headphone"><i class="ti-headphone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-harddrives" value="ti-harddrives"><label for="ti-harddrives"><i class="ti-harddrives"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-harddrive" value="ti-harddrive"><label for="ti-harddrive"><i class="ti-harddrive"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-gift" value="ti-gift"><label for="ti-gift"><i class="ti-gift"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-game" value="ti-game"><label for="ti-game"><i class="ti-game"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-filter" value="ti-filter"><label for="ti-filter"><i class="ti-filter"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-files" value="ti-files"><label for="ti-files"><i class="ti-files"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-file" value="ti-file"><label for="ti-file"><i class="ti-file"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-eraser" value="ti-eraser"><label for="ti-eraser"><i class="ti-eraser"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-envelope" value="ti-envelope"><label for="ti-envelope"><i class="ti-envelope"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-download" value="ti-download"><label for="ti-download"><i class="ti-download"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-direction" value="ti-direction"><label for="ti-direction"><i class="ti-direction"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-direction-alt" value="ti-direction-alt"><label for="ti-direction-alt"><i class="ti-direction-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-dashboard" value="ti-dashboard"><label for="ti-dashboard"><i class="ti-dashboard"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-stop" value="ti-control-stop"><label for="ti-control-stop"><i class="ti-control-stop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-shuffle" value="ti-control-shuffle"><label for="ti-control-shuffle"><i class="ti-control-shuffle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-play" value="ti-control-play"><label for="ti-control-play"><i class="ti-control-play"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-pause" value="ti-control-pause"><label for="ti-control-pause"><i class="ti-control-pause"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-forward" value="ti-control-forward"><label for="ti-control-forward"><i class="ti-control-forward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-backward" value="ti-control-backward"><label for="ti-control-backward"><i class="ti-control-backward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-cloud" value="ti-cloud"><label for="ti-cloud"><i class="ti-cloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-cloud-up" value="ti-cloud-up"><label for="ti-cloud-up"><i class="ti-cloud-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-cloud-down" value="ti-cloud-down"><label for="ti-cloud-down"><i class="ti-cloud-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-clipboard" value="ti-clipboard"><label for="ti-clipboard"><i class="ti-clipboard"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-car" value="ti-car"><label for="ti-car"><i class="ti-car"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-calendar" value="ti-calendar"><label for="ti-calendar"><i class="ti-calendar"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-book" value="ti-book"><label for="ti-book"><i class="ti-book"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-bell" value="ti-bell"><label for="ti-bell"><i class="ti-bell"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-basketball" value="ti-basketball"><label for="ti-basketball"><i class="ti-basketball"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-bar-chart" value="ti-bar-chart"><label for="ti-bar-chart"><i class="ti-bar-chart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-bar-chart-alt" value="ti-bar-chart-alt"><label for="ti-bar-chart-alt"><i class="ti-bar-chart-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-back-right" value="ti-back-right"><label for="ti-back-right"><i class="ti-back-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-back-left" value="ti-back-left"><label for="ti-back-left"><i class="ti-back-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-arrows-corner" value="ti-arrows-corner"><label for="ti-arrows-corner"><i class="ti-arrows-corner"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-archive" value="ti-archive"><label for="ti-archive"><i class="ti-archive"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-anchor" value="ti-anchor"><label for="ti-anchor"><i class="ti-anchor"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-align-right" value="ti-align-right"><label for="ti-align-right"><i class="ti-align-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-align-left" value="ti-align-left"><label for="ti-align-left"><i class="ti-align-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-align-justify" value="ti-align-justify"><label for="ti-align-justify"><i class="ti-align-justify"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-align-center" value="ti-align-center"><label for="ti-align-center"><i class="ti-align-center"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-alert" value="ti-alert"><label for="ti-alert"><i class="ti-alert"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-alarm-clock" value="ti-alarm-clock"><label for="ti-alarm-clock"><i class="ti-alarm-clock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-agenda" value="ti-agenda"><label for="ti-agenda"><i class="ti-agenda"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-write" value="ti-write"><label for="ti-write"><i class="ti-write"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-window" value="ti-window"><label for="ti-window"><i class="ti-window"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-widgetized" value="ti-widgetized"><label for="ti-widgetized"><i class="ti-widgetized"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-widget" value="ti-widget"><label for="ti-widget"><i class="ti-widget"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-widget-alt" value="ti-widget-alt"><label for="ti-widget-alt"><i class="ti-widget-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-wallet" value="ti-wallet"><label for="ti-wallet"><i class="ti-wallet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-video-clapper" value="ti-video-clapper"><label for="ti-video-clapper"><i class="ti-video-clapper"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-video-camera" value="ti-video-camera"><label for="ti-video-camera"><i class="ti-video-camera"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-vector" value="ti-vector"><label for="ti-vector"><i class="ti-vector"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-themify-logo" value="ti-themify-logo"><label for="ti-themify-logo"><i class="ti-themify-logo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-themify-favicon" value="ti-themify-favicon"><label for="ti-themify-favicon"><i class="ti-themify-favicon"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-themify-favicon-alt" value="ti-themify-favicon-alt"><label for="ti-themify-favicon-alt"><i class="ti-themify-favicon-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-support" value="ti-support"><label for="ti-support"><i class="ti-support"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-stamp" value="ti-stamp"><label for="ti-stamp"><i class="ti-stamp"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-split-v-alt" value="ti-split-v-alt"><label for="ti-split-v-alt"><i class="ti-split-v-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-slice" value="ti-slice"><label for="ti-slice"><i class="ti-slice"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-shortcode" value="ti-shortcode"><label for="ti-shortcode"><i class="ti-shortcode"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-shift-right-alt" value="ti-shift-right-alt"><label for="ti-shift-right-alt"><i class="ti-shift-right-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-shift-left-alt" value="ti-shift-left-alt"><label for="ti-shift-left-alt"><i class="ti-shift-left-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-ruler-alt-2" value="ti-ruler-alt-2"><label for="ti-ruler-alt-2"><i class="ti-ruler-alt-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-receipt" value="ti-receipt"><label for="ti-receipt"><i class="ti-receipt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pin2" value="ti-pin2"><label for="ti-pin2"><i class="ti-pin2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pin-alt" value="ti-pin-alt"><label for="ti-pin-alt"><i class="ti-pin-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pencil-alt2" value="ti-pencil-alt2"><label for="ti-pencil-alt2"><i class="ti-pencil-alt2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-palette" value="ti-palette"><label for="ti-palette"><i class="ti-palette"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-more" value="ti-more"><label for="ti-more"><i class="ti-more"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-more-alt" value="ti-more-alt"><label for="ti-more-alt"><i class="ti-more-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-microphone-alt" value="ti-microphone-alt"><label for="ti-microphone-alt"><i class="ti-microphone-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-magnet" value="ti-magnet"><label for="ti-magnet"><i class="ti-magnet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-line-double" value="ti-line-double"><label for="ti-line-double"><i class="ti-line-double"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-line-dotted" value="ti-line-dotted"><label for="ti-line-dotted"><i class="ti-line-dotted"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-line-dashed" value="ti-line-dashed"><label for="ti-line-dashed"><i class="ti-line-dashed"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-width-full" value="ti-layout-width-full"><label for="ti-layout-width-full"><i class="ti-layout-width-full"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-width-default" value="ti-layout-width-default"><label for="ti-layout-width-default"><i class="ti-layout-width-default"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-width-default-alt" value="ti-layout-width-default-alt"><label for="ti-layout-width-default-alt"><i class="ti-layout-width-default-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-tab" value="ti-layout-tab"><label for="ti-layout-tab"><i class="ti-layout-tab"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-tab-window" value="ti-layout-tab-window"><label for="ti-layout-tab-window"><i class="ti-layout-tab-window"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-tab-v" value="ti-layout-tab-v"><label for="ti-layout-tab-v"><i class="ti-layout-tab-v"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-tab-min" value="ti-layout-tab-min"><label for="ti-layout-tab-min"><i class="ti-layout-tab-min"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-slider" value="ti-layout-slider"><label for="ti-layout-slider"><i class="ti-layout-slider"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-slider-alt" value="ti-layout-slider-alt"><label for="ti-layout-slider-alt"><i class="ti-layout-slider-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-sidebar-right" value="ti-layout-sidebar-right"><label for="ti-layout-sidebar-right"><i class="ti-layout-sidebar-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-sidebar-none" value="ti-layout-sidebar-none"><label for="ti-layout-sidebar-none"><i class="ti-layout-sidebar-none"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-sidebar-left" value="ti-layout-sidebar-left"><label for="ti-layout-sidebar-left"><i class="ti-layout-sidebar-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-placeholder" value="ti-layout-placeholder"><label for="ti-layout-placeholder"><i class="ti-layout-placeholder"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-menu" value="ti-layout-menu"><label for="ti-layout-menu"><i class="ti-layout-menu"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-menu-v" value="ti-layout-menu-v"><label for="ti-layout-menu-v"><i class="ti-layout-menu-v"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-menu-separated" value="ti-layout-menu-separated"><label for="ti-layout-menu-separated"><i class="ti-layout-menu-separated"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-menu-full" value="ti-layout-menu-full"><label for="ti-layout-menu-full"><i class="ti-layout-menu-full"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-media-right-alt" value="ti-layout-media-right-alt"><label for="ti-layout-media-right-alt"><i class="ti-layout-media-right-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-media-right" value="ti-layout-media-right"><label for="ti-layout-media-right"><i class="ti-layout-media-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-media-overlay" value="ti-layout-media-overlay"><label for="ti-layout-media-overlay"><i class="ti-layout-media-overlay"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-media-overlay-alt" value="ti-layout-media-overlay-alt"><label for="ti-layout-media-overlay-alt"><i class="ti-layout-media-overlay-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-media-overlay-alt-2" value="ti-layout-media-overlay-alt-2"><label for="ti-layout-media-overlay-alt-2"><i class="ti-layout-media-overlay-alt-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-media-left-alt" value="ti-layout-media-left-alt"><label for="ti-layout-media-left-alt"><i class="ti-layout-media-left-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-media-left" value="ti-layout-media-left"><label for="ti-layout-media-left"><i class="ti-layout-media-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-media-center-alt" value="ti-layout-media-center-alt"><label for="ti-layout-media-center-alt"><i class="ti-layout-media-center-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-media-center" value="ti-layout-media-center"><label for="ti-layout-media-center"><i class="ti-layout-media-center"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-list-thumb" value="ti-layout-list-thumb"><label for="ti-layout-list-thumb"><i class="ti-layout-list-thumb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-list-thumb-alt" value="ti-layout-list-thumb-alt"><label for="ti-layout-list-thumb-alt"><i class="ti-layout-list-thumb-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-list-post" value="ti-layout-list-post"><label for="ti-layout-list-post"><i class="ti-layout-list-post"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-list-large-image" value="ti-layout-list-large-image"><label for="ti-layout-list-large-image"><i class="ti-layout-list-large-image"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-line-solid" value="ti-layout-line-solid"><label for="ti-layout-line-solid"><i class="ti-layout-line-solid"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-grid4" value="ti-layout-grid4"><label for="ti-layout-grid4"><i class="ti-layout-grid4"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-grid3" value="ti-layout-grid3"><label for="ti-layout-grid3"><i class="ti-layout-grid3"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-grid2" value="ti-layout-grid2"><label for="ti-layout-grid2"><i class="ti-layout-grid2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-grid2-thumb" value="ti-layout-grid2-thumb"><label for="ti-layout-grid2-thumb"><i class="ti-layout-grid2-thumb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-cta-right" value="ti-layout-cta-right"><label for="ti-layout-cta-right"><i class="ti-layout-cta-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-cta-left" value="ti-layout-cta-left"><label for="ti-layout-cta-left"><i class="ti-layout-cta-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-cta-center" value="ti-layout-cta-center"><label for="ti-layout-cta-center"><i class="ti-layout-cta-center"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-cta-btn-right" value="ti-layout-cta-btn-right"><label for="ti-layout-cta-btn-right"><i class="ti-layout-cta-btn-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-cta-btn-left" value="ti-layout-cta-btn-left"><label for="ti-layout-cta-btn-left"><i class="ti-layout-cta-btn-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-column4" value="ti-layout-column4"><label for="ti-layout-column4"><i class="ti-layout-column4"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-column3" value="ti-layout-column3"><label for="ti-layout-column3"><i class="ti-layout-column3"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-column2" value="ti-layout-column2"><label for="ti-layout-column2"><i class="ti-layout-column2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-accordion-separated" value="ti-layout-accordion-separated"><label for="ti-layout-accordion-separated"><i class="ti-layout-accordion-separated"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-accordion-merged" value="ti-layout-accordion-merged"><label for="ti-layout-accordion-merged"><i class="ti-layout-accordion-merged"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-accordion-list" value="ti-layout-accordion-list"><label for="ti-layout-accordion-list"><i class="ti-layout-accordion-list"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-ink-pen" value="ti-ink-pen"><label for="ti-ink-pen"><i class="ti-ink-pen"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-info-alt" value="ti-info-alt"><label for="ti-info-alt"><i class="ti-info-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-help-alt" value="ti-help-alt"><label for="ti-help-alt"><i class="ti-help-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-headphone-alt" value="ti-headphone-alt"><label for="ti-headphone-alt"><i class="ti-headphone-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-hand-point-up" value="ti-hand-point-up"><label for="ti-hand-point-up"><i class="ti-hand-point-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-hand-point-right" value="ti-hand-point-right"><label for="ti-hand-point-right"><i class="ti-hand-point-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-hand-point-left" value="ti-hand-point-left"><label for="ti-hand-point-left"><i class="ti-hand-point-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-hand-point-down" value="ti-hand-point-down"><label for="ti-hand-point-down"><i class="ti-hand-point-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-gallery" value="ti-gallery"><label for="ti-gallery"><i class="ti-gallery"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-face-smile" value="ti-face-smile"><label for="ti-face-smile"><i class="ti-face-smile"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-face-sad" value="ti-face-sad"><label for="ti-face-sad"><i class="ti-face-sad"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-credit-card" value="ti-credit-card"><label for="ti-credit-card"><i class="ti-credit-card"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-skip-forward" value="ti-control-skip-forward"><label for="ti-control-skip-forward"><i class="ti-control-skip-forward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-skip-backward" value="ti-control-skip-backward"><label for="ti-control-skip-backward"><i class="ti-control-skip-backward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-record" value="ti-control-record"><label for="ti-control-record"><i class="ti-control-record"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-control-eject" value="ti-control-eject"><label for="ti-control-eject"><i class="ti-control-eject"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-comments-smiley" value="ti-comments-smiley"><label for="ti-comments-smiley"><i class="ti-comments-smiley"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-brush-alt" value="ti-brush-alt"><label for="ti-brush-alt"><i class="ti-brush-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-youtube" value="ti-youtube"><label for="ti-youtube"><i class="ti-youtube"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-vimeo" value="ti-vimeo"><label for="ti-vimeo"><i class="ti-vimeo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-twitter" value="ti-twitter"><label for="ti-twitter"><i class="ti-twitter"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-time" value="ti-time"><label for="ti-time"><i class="ti-time"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-tumblr" value="ti-tumblr"><label for="ti-tumblr"><i class="ti-tumblr"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-skype" value="ti-skype"><label for="ti-skype"><i class="ti-skype"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-share" value="ti-share"><label for="ti-share"><i class="ti-share"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-share-alt" value="ti-share-alt"><label for="ti-share-alt"><i class="ti-share-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-rocket" value="ti-rocket"><label for="ti-rocket"><i class="ti-rocket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pinterest" value="ti-pinterest"><label for="ti-pinterest"><i class="ti-pinterest"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-new-window" value="ti-new-window"><label for="ti-new-window"><i class="ti-new-window"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-microsoft" value="ti-microsoft"><label for="ti-microsoft"><i class="ti-microsoft"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-list-ol" value="ti-list-ol"><label for="ti-list-ol"><i class="ti-list-ol"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-linkedin" value="ti-linkedin"><label for="ti-linkedin"><i class="ti-linkedin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-sidebar-2" value="ti-layout-sidebar-2"><label for="ti-layout-sidebar-2"><i class="ti-layout-sidebar-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-grid4-alt" value="ti-layout-grid4-alt"><label for="ti-layout-grid4-alt"><i class="ti-layout-grid4-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-grid3-alt" value="ti-layout-grid3-alt"><label for="ti-layout-grid3-alt"><i class="ti-layout-grid3-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-grid2-alt" value="ti-layout-grid2-alt"><label for="ti-layout-grid2-alt"><i class="ti-layout-grid2-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-column4-alt" value="ti-layout-column4-alt"><label for="ti-layout-column4-alt"><i class="ti-layout-column4-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-column3-alt" value="ti-layout-column3-alt"><label for="ti-layout-column3-alt"><i class="ti-layout-column3-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-layout-column2-alt" value="ti-layout-column2-alt"><label for="ti-layout-column2-alt"><i class="ti-layout-column2-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-instagram" value="ti-instagram"><label for="ti-instagram"><i class="ti-instagram"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-google" value="ti-google"><label for="ti-google"><i class="ti-google"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-github" value="ti-github"><label for="ti-github"><i class="ti-github"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-flickr" value="ti-flickr"><label for="ti-flickr"><i class="ti-flickr"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-facebook" value="ti-facebook"><label for="ti-facebook"><i class="ti-facebook"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-dropbox" value="ti-dropbox"><label for="ti-dropbox"><i class="ti-dropbox"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-dribbble" value="ti-dribbble"><label for="ti-dribbble"><i class="ti-dribbble"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-apple" value="ti-apple"><label for="ti-apple"><i class="ti-apple"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-android" value="ti-android"><label for="ti-android"><i class="ti-android"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-save" value="ti-save"><label for="ti-save"><i class="ti-save"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-save-alt" value="ti-save-alt"><label for="ti-save-alt"><i class="ti-save-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-yahoo" value="ti-yahoo"><label for="ti-yahoo"><i class="ti-yahoo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-wordpress" value="ti-wordpress"><label for="ti-wordpress"><i class="ti-wordpress"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-vimeo-alt" value="ti-vimeo-alt"><label for="ti-vimeo-alt"><i class="ti-vimeo-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-twitter-alt" value="ti-twitter-alt"><label for="ti-twitter-alt"><i class="ti-twitter-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-tumblr-alt" value="ti-tumblr-alt"><label for="ti-tumblr-alt"><i class="ti-tumblr-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-trello" value="ti-trello"><label for="ti-trello"><i class="ti-trello"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-stack-overflow" value="ti-stack-overflow"><label for="ti-stack-overflow"><i class="ti-stack-overflow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-soundcloud" value="ti-soundcloud"><label for="ti-soundcloud"><i class="ti-soundcloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-sharethis" value="ti-sharethis"><label for="ti-sharethis"><i class="ti-sharethis"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-sharethis-alt" value="ti-sharethis-alt"><label for="ti-sharethis-alt"><i class="ti-sharethis-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-reddit" value="ti-reddit"><label for="ti-reddit"><i class="ti-reddit"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-pinterest-alt" value="ti-pinterest-alt"><label for="ti-pinterest-alt"><i class="ti-pinterest-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-microsoft-alt" value="ti-microsoft-alt"><label for="ti-microsoft-alt"><i class="ti-microsoft-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-linux" value="ti-linux"><label for="ti-linux"><i class="ti-linux"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-jsfiddle" value="ti-jsfiddle"><label for="ti-jsfiddle"><i class="ti-jsfiddle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-joomla" value="ti-joomla"><label for="ti-joomla"><i class="ti-joomla"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-html5" value="ti-html5"><label for="ti-html5"><i class="ti-html5"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-flickr-alt" value="ti-flickr-alt"><label for="ti-flickr-alt"><i class="ti-flickr-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-email" value="ti-email"><label for="ti-email"><i class="ti-email"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-drupal" value="ti-drupal"><label for="ti-drupal"><i class="ti-drupal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-dropbox-alt" value="ti-dropbox-alt"><label for="ti-dropbox-alt"><i class="ti-dropbox-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-css3" value="ti-css3"><label for="ti-css3"><i class="ti-css3"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-rss" value="ti-rss"><label for="ti-rss"><i class="ti-rss"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="ti-rss-alt" value="ti-rss-alt"><label for="ti-rss-alt"><i class="ti-rss-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-album" value="pe-7s-album"><label for="pe-7s-album"><i class="pe-7s-album"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-arc" value="pe-7s-arc"><label for="pe-7s-arc"><i class="pe-7s-arc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-back-2" value="pe-7s-back-2"><label for="pe-7s-back-2"><i class="pe-7s-back-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-bandaid" value="pe-7s-bandaid"><label for="pe-7s-bandaid"><i class="pe-7s-bandaid"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-car" value="pe-7s-car"><label for="pe-7s-car"><i class="pe-7s-car"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-diamond" value="pe-7s-diamond"><label for="pe-7s-diamond"><i class="pe-7s-diamond"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-door-lock" value="pe-7s-door-lock"><label for="pe-7s-door-lock"><i class="pe-7s-door-lock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-eyedropper" value="pe-7s-eyedropper"><label for="pe-7s-eyedropper"><i class="pe-7s-eyedropper"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-female" value="pe-7s-female"><label for="pe-7s-female"><i class="pe-7s-female"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-gym" value="pe-7s-gym"><label for="pe-7s-gym"><i class="pe-7s-gym"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-hammer" value="pe-7s-hammer"><label for="pe-7s-hammer"><i class="pe-7s-hammer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-headphones" value="pe-7s-headphones"><label for="pe-7s-headphones"><i class="pe-7s-headphones"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-helm" value="pe-7s-helm"><label for="pe-7s-helm"><i class="pe-7s-helm"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-hourglass" value="pe-7s-hourglass"><label for="pe-7s-hourglass"><i class="pe-7s-hourglass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-leaf" value="pe-7s-leaf"><label for="pe-7s-leaf"><i class="pe-7s-leaf"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-magic-wand" value="pe-7s-magic-wand"><label for="pe-7s-magic-wand"><i class="pe-7s-magic-wand"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-male" value="pe-7s-male"><label for="pe-7s-male"><i class="pe-7s-male"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-map-2" value="pe-7s-map-2"><label for="pe-7s-map-2"><i class="pe-7s-map-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-next-2" value="pe-7s-next-2"><label for="pe-7s-next-2"><i class="pe-7s-next-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-paint-bucket" value="pe-7s-paint-bucket"><label for="pe-7s-paint-bucket"><i class="pe-7s-paint-bucket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-pendrive" value="pe-7s-pendrive"><label for="pe-7s-pendrive"><i class="pe-7s-pendrive"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-photo" value="pe-7s-photo"><label for="pe-7s-photo"><i class="pe-7s-photo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-piggy" value="pe-7s-piggy"><label for="pe-7s-piggy"><i class="pe-7s-piggy"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-plugin" value="pe-7s-plugin"><label for="pe-7s-plugin"><i class="pe-7s-plugin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-refresh-2" value="pe-7s-refresh-2"><label for="pe-7s-refresh-2"><i class="pe-7s-refresh-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-rocket" value="pe-7s-rocket"><label for="pe-7s-rocket"><i class="pe-7s-rocket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-settings" value="pe-7s-settings"><label for="pe-7s-settings"><i class="pe-7s-settings"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-shield" value="pe-7s-shield"><label for="pe-7s-shield"><i class="pe-7s-shield"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-smile" value="pe-7s-smile"><label for="pe-7s-smile"><i class="pe-7s-smile"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-usb" value="pe-7s-usb"><label for="pe-7s-usb"><i class="pe-7s-usb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-vector" value="pe-7s-vector"><label for="pe-7s-vector"><i class="pe-7s-vector"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-wine" value="pe-7s-wine"><label for="pe-7s-wine"><i class="pe-7s-wine"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-cloud-upload" value="pe-7s-cloud-upload"><label for="pe-7s-cloud-upload"><i class="pe-7s-cloud-upload"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-cash" value="pe-7s-cash"><label for="pe-7s-cash"><i class="pe-7s-cash"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-close" value="pe-7s-close"><label for="pe-7s-close"><i class="pe-7s-close"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-bluetooth" value="pe-7s-bluetooth"><label for="pe-7s-bluetooth"><i class="pe-7s-bluetooth"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-cloud-download" value="pe-7s-cloud-download"><label for="pe-7s-cloud-download"><i class="pe-7s-cloud-download"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-way" value="pe-7s-way"><label for="pe-7s-way"><i class="pe-7s-way"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-close-circle" value="pe-7s-close-circle"><label for="pe-7s-close-circle"><i class="pe-7s-close-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-id" value="pe-7s-id"><label for="pe-7s-id"><i class="pe-7s-id"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-angle-up" value="pe-7s-angle-up"><label for="pe-7s-angle-up"><i class="pe-7s-angle-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-wristwatch" value="pe-7s-wristwatch"><label for="pe-7s-wristwatch"><i class="pe-7s-wristwatch"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-angle-up-circle" value="pe-7s-angle-up-circle"><label for="pe-7s-angle-up-circle"><i class="pe-7s-angle-up-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-world" value="pe-7s-world"><label for="pe-7s-world"><i class="pe-7s-world"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-angle-right" value="pe-7s-angle-right"><label for="pe-7s-angle-right"><i class="pe-7s-angle-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-volume" value="pe-7s-volume"><label for="pe-7s-volume"><i class="pe-7s-volume"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-angle-right-circle" value="pe-7s-angle-right-circle"><label for="pe-7s-angle-right-circle"><i class="pe-7s-angle-right-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-users" value="pe-7s-users"><label for="pe-7s-users"><i class="pe-7s-users"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-angle-left" value="pe-7s-angle-left"><label for="pe-7s-angle-left"><i class="pe-7s-angle-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-user-female" value="pe-7s-user-female"><label for="pe-7s-user-female"><i class="pe-7s-user-female"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-angle-left-circle" value="pe-7s-angle-left-circle"><label for="pe-7s-angle-left-circle"><i class="pe-7s-angle-left-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-up-arrow" value="pe-7s-up-arrow"><label for="pe-7s-up-arrow"><i class="pe-7s-up-arrow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-angle-down" value="pe-7s-angle-down"><label for="pe-7s-angle-down"><i class="pe-7s-angle-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-switch" value="pe-7s-switch"><label for="pe-7s-switch"><i class="pe-7s-switch"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-angle-down-circle" value="pe-7s-angle-down-circle"><label for="pe-7s-angle-down-circle"><i class="pe-7s-angle-down-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-scissors" value="pe-7s-scissors"><label for="pe-7s-scissors"><i class="pe-7s-scissors"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-wallet" value="pe-7s-wallet"><label for="pe-7s-wallet"><i class="pe-7s-wallet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-safe" value="pe-7s-safe"><label for="pe-7s-safe"><i class="pe-7s-safe"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-volume2" value="pe-7s-volume2"><label for="pe-7s-volume2"><i class="pe-7s-volume2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-volume1" value="pe-7s-volume1"><label for="pe-7s-volume1"><i class="pe-7s-volume1"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-voicemail" value="pe-7s-voicemail"><label for="pe-7s-voicemail"><i class="pe-7s-voicemail"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-video" value="pe-7s-video"><label for="pe-7s-video"><i class="pe-7s-video"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-user" value="pe-7s-user"><label for="pe-7s-user"><i class="pe-7s-user"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-upload" value="pe-7s-upload"><label for="pe-7s-upload"><i class="pe-7s-upload"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-unlock" value="pe-7s-unlock"><label for="pe-7s-unlock"><i class="pe-7s-unlock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-umbrella" value="pe-7s-umbrella"><label for="pe-7s-umbrella"><i class="pe-7s-umbrella"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-trash" value="pe-7s-trash"><label for="pe-7s-trash"><i class="pe-7s-trash"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-tools" value="pe-7s-tools"><label for="pe-7s-tools"><i class="pe-7s-tools"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-timer" value="pe-7s-timer"><label for="pe-7s-timer"><i class="pe-7s-timer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-ticket" value="pe-7s-ticket"><label for="pe-7s-ticket"><i class="pe-7s-ticket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-target" value="pe-7s-target"><label for="pe-7s-target"><i class="pe-7s-target"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-sun" value="pe-7s-sun"><label for="pe-7s-sun"><i class="pe-7s-sun"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-study" value="pe-7s-study"><label for="pe-7s-study"><i class="pe-7s-study"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-stopwatch" value="pe-7s-stopwatch"><label for="pe-7s-stopwatch"><i class="pe-7s-stopwatch"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-star" value="pe-7s-star"><label for="pe-7s-star"><i class="pe-7s-star"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-speaker" value="pe-7s-speaker"><label for="pe-7s-speaker"><i class="pe-7s-speaker"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-signal" value="pe-7s-signal"><label for="pe-7s-signal"><i class="pe-7s-signal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-shuffle" value="pe-7s-shuffle"><label for="pe-7s-shuffle"><i class="pe-7s-shuffle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-shopbag" value="pe-7s-shopbag"><label for="pe-7s-shopbag"><i class="pe-7s-shopbag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-share" value="pe-7s-share"><label for="pe-7s-share"><i class="pe-7s-share"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-server" value="pe-7s-server"><label for="pe-7s-server"><i class="pe-7s-server"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-search" value="pe-7s-search"><label for="pe-7s-search"><i class="pe-7s-search"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-film" value="pe-7s-film"><label for="pe-7s-film"><i class="pe-7s-film"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-science" value="pe-7s-science"><label for="pe-7s-science"><i class="pe-7s-science"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-disk" value="pe-7s-disk"><label for="pe-7s-disk"><i class="pe-7s-disk"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-ribbon" value="pe-7s-ribbon"><label for="pe-7s-ribbon"><i class="pe-7s-ribbon"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-repeat" value="pe-7s-repeat"><label for="pe-7s-repeat"><i class="pe-7s-repeat"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-refresh" value="pe-7s-refresh"><label for="pe-7s-refresh"><i class="pe-7s-refresh"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-add-user" value="pe-7s-add-user"><label for="pe-7s-add-user"><i class="pe-7s-add-user"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-refresh-cloud" value="pe-7s-refresh-cloud"><label for="pe-7s-refresh-cloud"><i class="pe-7s-refresh-cloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-paperclip" value="pe-7s-paperclip"><label for="pe-7s-paperclip"><i class="pe-7s-paperclip"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-radio" value="pe-7s-radio"><label for="pe-7s-radio"><i class="pe-7s-radio"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-note2" value="pe-7s-note2"><label for="pe-7s-note2"><i class="pe-7s-note2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-print" value="pe-7s-print"><label for="pe-7s-print"><i class="pe-7s-print"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-network" value="pe-7s-network"><label for="pe-7s-network"><i class="pe-7s-network"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-prev" value="pe-7s-prev"><label for="pe-7s-prev"><i class="pe-7s-prev"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-mute" value="pe-7s-mute"><label for="pe-7s-mute"><i class="pe-7s-mute"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-power" value="pe-7s-power"><label for="pe-7s-power"><i class="pe-7s-power"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-medal" value="pe-7s-medal"><label for="pe-7s-medal"><i class="pe-7s-medal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-portfolio" value="pe-7s-portfolio"><label for="pe-7s-portfolio"><i class="pe-7s-portfolio"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-like2" value="pe-7s-like2"><label for="pe-7s-like2"><i class="pe-7s-like2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-plus" value="pe-7s-plus"><label for="pe-7s-plus"><i class="pe-7s-plus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-left-arrow" value="pe-7s-left-arrow"><label for="pe-7s-left-arrow"><i class="pe-7s-left-arrow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-play" value="pe-7s-play"><label for="pe-7s-play"><i class="pe-7s-play"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-key" value="pe-7s-key"><label for="pe-7s-key"><i class="pe-7s-key"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-plane" value="pe-7s-plane"><label for="pe-7s-plane"><i class="pe-7s-plane"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-joy" value="pe-7s-joy"><label for="pe-7s-joy"><i class="pe-7s-joy"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-photo-gallery" value="pe-7s-photo-gallery"><label for="pe-7s-photo-gallery"><i class="pe-7s-photo-gallery"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-pin" value="pe-7s-pin"><label for="pe-7s-pin"><i class="pe-7s-pin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-phone" value="pe-7s-phone"><label for="pe-7s-phone"><i class="pe-7s-phone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-plug" value="pe-7s-plug"><label for="pe-7s-plug"><i class="pe-7s-plug"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-pen" value="pe-7s-pen"><label for="pe-7s-pen"><i class="pe-7s-pen"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-right-arrow" value="pe-7s-right-arrow"><label for="pe-7s-right-arrow"><i class="pe-7s-right-arrow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-paper-plane" value="pe-7s-paper-plane"><label for="pe-7s-paper-plane"><i class="pe-7s-paper-plane"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-delete-user" value="pe-7s-delete-user"><label for="pe-7s-delete-user"><i class="pe-7s-delete-user"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-paint" value="pe-7s-paint"><label for="pe-7s-paint"><i class="pe-7s-paint"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-bottom-arrow" value="pe-7s-bottom-arrow"><label for="pe-7s-bottom-arrow"><i class="pe-7s-bottom-arrow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-notebook" value="pe-7s-notebook"><label for="pe-7s-notebook"><i class="pe-7s-notebook"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-note" value="pe-7s-note"><label for="pe-7s-note"><i class="pe-7s-note"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-next" value="pe-7s-next"><label for="pe-7s-next"><i class="pe-7s-next"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-news-paper" value="pe-7s-news-paper"><label for="pe-7s-news-paper"><i class="pe-7s-news-paper"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-musiclist" value="pe-7s-musiclist"><label for="pe-7s-musiclist"><i class="pe-7s-musiclist"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-music" value="pe-7s-music"><label for="pe-7s-music"><i class="pe-7s-music"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-mouse" value="pe-7s-mouse"><label for="pe-7s-mouse"><i class="pe-7s-mouse"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-more" value="pe-7s-more"><label for="pe-7s-more"><i class="pe-7s-more"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-moon" value="pe-7s-moon"><label for="pe-7s-moon"><i class="pe-7s-moon"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-monitor" value="pe-7s-monitor"><label for="pe-7s-monitor"><i class="pe-7s-monitor"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-micro" value="pe-7s-micro"><label for="pe-7s-micro"><i class="pe-7s-micro"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-menu" value="pe-7s-menu"><label for="pe-7s-menu"><i class="pe-7s-menu"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-map" value="pe-7s-map"><label for="pe-7s-map"><i class="pe-7s-map"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-map-marker" value="pe-7s-map-marker"><label for="pe-7s-map-marker"><i class="pe-7s-map-marker"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-mail" value="pe-7s-mail"><label for="pe-7s-mail"><i class="pe-7s-mail"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-mail-open" value="pe-7s-mail-open"><label for="pe-7s-mail-open"><i class="pe-7s-mail-open"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-mail-open-file" value="pe-7s-mail-open-file"><label for="pe-7s-mail-open-file"><i class="pe-7s-mail-open-file"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-magnet" value="pe-7s-magnet"><label for="pe-7s-magnet"><i class="pe-7s-magnet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-loop" value="pe-7s-loop"><label for="pe-7s-loop"><i class="pe-7s-loop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-look" value="pe-7s-look"><label for="pe-7s-look"><i class="pe-7s-look"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-lock" value="pe-7s-lock"><label for="pe-7s-lock"><i class="pe-7s-lock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-lintern" value="pe-7s-lintern"><label for="pe-7s-lintern"><i class="pe-7s-lintern"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-link" value="pe-7s-link"><label for="pe-7s-link"><i class="pe-7s-link"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-like" value="pe-7s-like"><label for="pe-7s-like"><i class="pe-7s-like"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-light" value="pe-7s-light"><label for="pe-7s-light"><i class="pe-7s-light"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-less" value="pe-7s-less"><label for="pe-7s-less"><i class="pe-7s-less"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-keypad" value="pe-7s-keypad"><label for="pe-7s-keypad"><i class="pe-7s-keypad"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-junk" value="pe-7s-junk"><label for="pe-7s-junk"><i class="pe-7s-junk"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-info" value="pe-7s-info"><label for="pe-7s-info"><i class="pe-7s-info"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-home" value="pe-7s-home"><label for="pe-7s-home"><i class="pe-7s-home"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-help2" value="pe-7s-help2"><label for="pe-7s-help2"><i class="pe-7s-help2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-help1" value="pe-7s-help1"><label for="pe-7s-help1"><i class="pe-7s-help1"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-graph3" value="pe-7s-graph3"><label for="pe-7s-graph3"><i class="pe-7s-graph3"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-graph2" value="pe-7s-graph2"><label for="pe-7s-graph2"><i class="pe-7s-graph2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-graph1" value="pe-7s-graph1"><label for="pe-7s-graph1"><i class="pe-7s-graph1"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-graph" value="pe-7s-graph"><label for="pe-7s-graph"><i class="pe-7s-graph"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-global" value="pe-7s-global"><label for="pe-7s-global"><i class="pe-7s-global"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-gleam" value="pe-7s-gleam"><label for="pe-7s-gleam"><i class="pe-7s-gleam"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-glasses" value="pe-7s-glasses"><label for="pe-7s-glasses"><i class="pe-7s-glasses"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-gift" value="pe-7s-gift"><label for="pe-7s-gift"><i class="pe-7s-gift"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-folder" value="pe-7s-folder"><label for="pe-7s-folder"><i class="pe-7s-folder"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-flag" value="pe-7s-flag"><label for="pe-7s-flag"><i class="pe-7s-flag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-filter" value="pe-7s-filter"><label for="pe-7s-filter"><i class="pe-7s-filter"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-file" value="pe-7s-file"><label for="pe-7s-file"><i class="pe-7s-file"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-expand1" value="pe-7s-expand1"><label for="pe-7s-expand1"><i class="pe-7s-expand1"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-exapnd2" value="pe-7s-exapnd2"><label for="pe-7s-exapnd2"><i class="pe-7s-exapnd2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-edit" value="pe-7s-edit"><label for="pe-7s-edit"><i class="pe-7s-edit"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-drop" value="pe-7s-drop"><label for="pe-7s-drop"><i class="pe-7s-drop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-drawer" value="pe-7s-drawer"><label for="pe-7s-drawer"><i class="pe-7s-drawer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-download" value="pe-7s-download"><label for="pe-7s-download"><i class="pe-7s-download"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-display2" value="pe-7s-display2"><label for="pe-7s-display2"><i class="pe-7s-display2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-display1" value="pe-7s-display1"><label for="pe-7s-display1"><i class="pe-7s-display1"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-diskette" value="pe-7s-diskette"><label for="pe-7s-diskette"><i class="pe-7s-diskette"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-date" value="pe-7s-date"><label for="pe-7s-date"><i class="pe-7s-date"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-cup" value="pe-7s-cup"><label for="pe-7s-cup"><i class="pe-7s-cup"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-culture" value="pe-7s-culture"><label for="pe-7s-culture"><i class="pe-7s-culture"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-crop" value="pe-7s-crop"><label for="pe-7s-crop"><i class="pe-7s-crop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-credit" value="pe-7s-credit"><label for="pe-7s-credit"><i class="pe-7s-credit"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-copy-file" value="pe-7s-copy-file"><label for="pe-7s-copy-file"><i class="pe-7s-copy-file"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-config" value="pe-7s-config"><label for="pe-7s-config"><i class="pe-7s-config"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-compass" value="pe-7s-compass"><label for="pe-7s-compass"><i class="pe-7s-compass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-comment" value="pe-7s-comment"><label for="pe-7s-comment"><i class="pe-7s-comment"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-coffee" value="pe-7s-coffee"><label for="pe-7s-coffee"><i class="pe-7s-coffee"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-cloud" value="pe-7s-cloud"><label for="pe-7s-cloud"><i class="pe-7s-cloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-clock" value="pe-7s-clock"><label for="pe-7s-clock"><i class="pe-7s-clock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-check" value="pe-7s-check"><label for="pe-7s-check"><i class="pe-7s-check"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-chat" value="pe-7s-chat"><label for="pe-7s-chat"><i class="pe-7s-chat"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-cart" value="pe-7s-cart"><label for="pe-7s-cart"><i class="pe-7s-cart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-camera" value="pe-7s-camera"><label for="pe-7s-camera"><i class="pe-7s-camera"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-call" value="pe-7s-call"><label for="pe-7s-call"><i class="pe-7s-call"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-calculator" value="pe-7s-calculator"><label for="pe-7s-calculator"><i class="pe-7s-calculator"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-browser" value="pe-7s-browser"><label for="pe-7s-browser"><i class="pe-7s-browser"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-box2" value="pe-7s-box2"><label for="pe-7s-box2"><i class="pe-7s-box2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-box1" value="pe-7s-box1"><label for="pe-7s-box1"><i class="pe-7s-box1"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-bookmarks" value="pe-7s-bookmarks"><label for="pe-7s-bookmarks"><i class="pe-7s-bookmarks"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-bicycle" value="pe-7s-bicycle"><label for="pe-7s-bicycle"><i class="pe-7s-bicycle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-bell" value="pe-7s-bell"><label for="pe-7s-bell"><i class="pe-7s-bell"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-battery" value="pe-7s-battery"><label for="pe-7s-battery"><i class="pe-7s-battery"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-ball" value="pe-7s-ball"><label for="pe-7s-ball"><i class="pe-7s-ball"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-back" value="pe-7s-back"><label for="pe-7s-back"><i class="pe-7s-back"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-attention" value="pe-7s-attention"><label for="pe-7s-attention"><i class="pe-7s-attention"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-anchor" value="pe-7s-anchor"><label for="pe-7s-anchor"><i class="pe-7s-anchor"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-albums" value="pe-7s-albums"><label for="pe-7s-albums"><i class="pe-7s-albums"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-alarm" value="pe-7s-alarm"><label for="pe-7s-alarm"><i class="pe-7s-alarm"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="pe-7s-airplay" value="pe-7s-airplay"><label for="pe-7s-airplay"><i class="pe-7s-airplay"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-mobile" value="icon-mobile"><label for="icon-mobile"><i class="icon-mobile"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-laptop" value="icon-laptop"><label for="icon-laptop"><i class="icon-laptop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-desktop" value="icon-desktop"><label for="icon-desktop"><i class="icon-desktop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-tablet" value="icon-tablet"><label for="icon-tablet"><i class="icon-tablet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-phone" value="icon-phone"><label for="icon-phone"><i class="icon-phone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-document" value="icon-document"><label for="icon-document"><i class="icon-document"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-documents" value="icon-documents"><label for="icon-documents"><i class="icon-documents"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-search" value="icon-search"><label for="icon-search"><i class="icon-search"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-clipboard" value="icon-clipboard"><label for="icon-clipboard"><i class="icon-clipboard"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-newspaper" value="icon-newspaper"><label for="icon-newspaper"><i class="icon-newspaper"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-notebook" value="icon-notebook"><label for="icon-notebook"><i class="icon-notebook"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-book-open" value="icon-book-open"><label for="icon-book-open"><i class="icon-book-open"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-browser" value="icon-browser"><label for="icon-browser"><i class="icon-browser"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-calendar" value="icon-calendar"><label for="icon-calendar"><i class="icon-calendar"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-presentation" value="icon-presentation"><label for="icon-presentation"><i class="icon-presentation"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-picture" value="icon-picture"><label for="icon-picture"><i class="icon-picture"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-pictures" value="icon-pictures"><label for="icon-pictures"><i class="icon-pictures"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-video" value="icon-video"><label for="icon-video"><i class="icon-video"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-camera" value="icon-camera"><label for="icon-camera"><i class="icon-camera"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-printer" value="icon-printer"><label for="icon-printer"><i class="icon-printer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-toolbox" value="icon-toolbox"><label for="icon-toolbox"><i class="icon-toolbox"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-briefcase" value="icon-briefcase"><label for="icon-briefcase"><i class="icon-briefcase"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-wallet" value="icon-wallet"><label for="icon-wallet"><i class="icon-wallet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-gift" value="icon-gift"><label for="icon-gift"><i class="icon-gift"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-bargraph" value="icon-bargraph"><label for="icon-bargraph"><i class="icon-bargraph"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-grid" value="icon-grid"><label for="icon-grid"><i class="icon-grid"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-expand" value="icon-expand"><label for="icon-expand"><i class="icon-expand"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-focus" value="icon-focus"><label for="icon-focus"><i class="icon-focus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-edit" value="icon-edit"><label for="icon-edit"><i class="icon-edit"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-adjustments" value="icon-adjustments"><label for="icon-adjustments"><i class="icon-adjustments"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-ribbon" value="icon-ribbon"><label for="icon-ribbon"><i class="icon-ribbon"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-hourglass" value="icon-hourglass"><label for="icon-hourglass"><i class="icon-hourglass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-lock" value="icon-lock"><label for="icon-lock"><i class="icon-lock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-megaphone" value="icon-megaphone"><label for="icon-megaphone"><i class="icon-megaphone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-shield" value="icon-shield"><label for="icon-shield"><i class="icon-shield"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-trophy" value="icon-trophy"><label for="icon-trophy"><i class="icon-trophy"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-flag" value="icon-flag"><label for="icon-flag"><i class="icon-flag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-map" value="icon-map"><label for="icon-map"><i class="icon-map"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-puzzle" value="icon-puzzle"><label for="icon-puzzle"><i class="icon-puzzle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-basket" value="icon-basket"><label for="icon-basket"><i class="icon-basket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-envelope" value="icon-envelope"><label for="icon-envelope"><i class="icon-envelope"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-streetsign" value="icon-streetsign"><label for="icon-streetsign"><i class="icon-streetsign"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-telescope" value="icon-telescope"><label for="icon-telescope"><i class="icon-telescope"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-gears" value="icon-gears"><label for="icon-gears"><i class="icon-gears"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-key" value="icon-key"><label for="icon-key"><i class="icon-key"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-paperclip" value="icon-paperclip"><label for="icon-paperclip"><i class="icon-paperclip"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-attachment" value="icon-attachment"><label for="icon-attachment"><i class="icon-attachment"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-pricetags" value="icon-pricetags"><label for="icon-pricetags"><i class="icon-pricetags"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-lightbulb" value="icon-lightbulb"><label for="icon-lightbulb"><i class="icon-lightbulb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-layers" value="icon-layers"><label for="icon-layers"><i class="icon-layers"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-pencil" value="icon-pencil"><label for="icon-pencil"><i class="icon-pencil"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-tools" value="icon-tools"><label for="icon-tools"><i class="icon-tools"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-tools-2" value="icon-tools-2"><label for="icon-tools-2"><i class="icon-tools-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-scissors" value="icon-scissors"><label for="icon-scissors"><i class="icon-scissors"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-paintbrush" value="icon-paintbrush"><label for="icon-paintbrush"><i class="icon-paintbrush"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-magnifying-glass" value="icon-magnifying-glass"><label for="icon-magnifying-glass"><i class="icon-magnifying-glass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-circle-compass" value="icon-circle-compass"><label for="icon-circle-compass"><i class="icon-circle-compass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-linegraph" value="icon-linegraph"><label for="icon-linegraph"><i class="icon-linegraph"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-mic" value="icon-mic"><label for="icon-mic"><i class="icon-mic"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-strategy" value="icon-strategy"><label for="icon-strategy"><i class="icon-strategy"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-beaker" value="icon-beaker"><label for="icon-beaker"><i class="icon-beaker"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-caution" value="icon-caution"><label for="icon-caution"><i class="icon-caution"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-recycle" value="icon-recycle"><label for="icon-recycle"><i class="icon-recycle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-anchor" value="icon-anchor"><label for="icon-anchor"><i class="icon-anchor"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-profile-male" value="icon-profile-male"><label for="icon-profile-male"><i class="icon-profile-male"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-profile-female" value="icon-profile-female"><label for="icon-profile-female"><i class="icon-profile-female"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-bike" value="icon-bike"><label for="icon-bike"><i class="icon-bike"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-wine" value="icon-wine"><label for="icon-wine"><i class="icon-wine"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-hotairballoon" value="icon-hotairballoon"><label for="icon-hotairballoon"><i class="icon-hotairballoon"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-globe" value="icon-globe"><label for="icon-globe"><i class="icon-globe"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-genius" value="icon-genius"><label for="icon-genius"><i class="icon-genius"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-map-pin" value="icon-map-pin"><label for="icon-map-pin"><i class="icon-map-pin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-dial" value="icon-dial"><label for="icon-dial"><i class="icon-dial"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-chat" value="icon-chat"><label for="icon-chat"><i class="icon-chat"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-heart" value="icon-heart"><label for="icon-heart"><i class="icon-heart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-cloud" value="icon-cloud"><label for="icon-cloud"><i class="icon-cloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-upload" value="icon-upload"><label for="icon-upload"><i class="icon-upload"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-download" value="icon-download"><label for="icon-download"><i class="icon-download"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-target" value="icon-target"><label for="icon-target"><i class="icon-target"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-hazardous" value="icon-hazardous"><label for="icon-hazardous"><i class="icon-hazardous"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-piechart" value="icon-piechart"><label for="icon-piechart"><i class="icon-piechart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-speedometer" value="icon-speedometer"><label for="icon-speedometer"><i class="icon-speedometer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-global" value="icon-global"><label for="icon-global"><i class="icon-global"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-compass" value="icon-compass"><label for="icon-compass"><i class="icon-compass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-lifesaver" value="icon-lifesaver"><label for="icon-lifesaver"><i class="icon-lifesaver"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-clock" value="icon-clock"><label for="icon-clock"><i class="icon-clock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-aperture" value="icon-aperture"><label for="icon-aperture"><i class="icon-aperture"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-quote" value="icon-quote"><label for="icon-quote"><i class="icon-quote"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-scope" value="icon-scope"><label for="icon-scope"><i class="icon-scope"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-alarmclock" value="icon-alarmclock"><label for="icon-alarmclock"><i class="icon-alarmclock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-refresh" value="icon-refresh"><label for="icon-refresh"><i class="icon-refresh"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-happy" value="icon-happy"><label for="icon-happy"><i class="icon-happy"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-sad" value="icon-sad"><label for="icon-sad"><i class="icon-sad"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-googleplus" value="icon-googleplus"><label for="icon-googleplus"><i class="icon-googleplus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-rss" value="icon-rss"><label for="icon-rss"><i class="icon-rss"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-tumblr" value="icon-tumblr"><label for="icon-tumblr"><i class="icon-tumblr"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="icon-dribbble" value="icon-dribbble"><label for="icon-dribbble"><i class="icon-dribbble"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-user" value="sl-user"><label for="sl-user"><i class="sl-user"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-people" value="sl-people"><label for="sl-people"><i class="sl-people"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-user-female" value="sl-user-female"><label for="sl-user-female"><i class="sl-user-female"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-user-follow" value="sl-user-follow"><label for="sl-user-follow"><i class="sl-user-follow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-user-following" value="sl-user-following"><label for="sl-user-following"><i class="sl-user-following"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-user-unfollow" value="sl-user-unfollow"><label for="sl-user-unfollow"><i class="sl-user-unfollow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-login" value="sl-login"><label for="sl-login"><i class="sl-login"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-logout" value="sl-logout"><label for="sl-logout"><i class="sl-logout"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-emotsmile" value="sl-emotsmile"><label for="sl-emotsmile"><i class="sl-emotsmile"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-phone" value="sl-phone"><label for="sl-phone"><i class="sl-phone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-call-end" value="sl-call-end"><label for="sl-call-end"><i class="sl-call-end"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-call-in" value="sl-call-in"><label for="sl-call-in"><i class="sl-call-in"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-call-out" value="sl-call-out"><label for="sl-call-out"><i class="sl-call-out"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-map" value="sl-map"><label for="sl-map"><i class="sl-map"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-location-pin" value="sl-location-pin"><label for="sl-location-pin"><i class="sl-location-pin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-direction" value="sl-direction"><label for="sl-direction"><i class="sl-direction"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-directions" value="sl-directions"><label for="sl-directions"><i class="sl-directions"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-compass" value="sl-compass"><label for="sl-compass"><i class="sl-compass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-layers" value="sl-layers"><label for="sl-layers"><i class="sl-layers"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-menu" value="sl-menu"><label for="sl-menu"><i class="sl-menu"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-list" value="sl-list"><label for="sl-list"><i class="sl-list"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-options-vertical" value="sl-options-vertical"><label for="sl-options-vertical"><i class="sl-options-vertical"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-options" value="sl-options"><label for="sl-options"><i class="sl-options"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-arrow-down" value="sl-arrow-down"><label for="sl-arrow-down"><i class="sl-arrow-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-arrow-left" value="sl-arrow-left"><label for="sl-arrow-left"><i class="sl-arrow-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-arrow-right" value="sl-arrow-right"><label for="sl-arrow-right"><i class="sl-arrow-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-arrow-up" value="sl-arrow-up"><label for="sl-arrow-up"><i class="sl-arrow-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-arrow-up-circle" value="sl-arrow-up-circle"><label for="sl-arrow-up-circle"><i class="sl-arrow-up-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-arrow-left-circle" value="sl-arrow-left-circle"><label for="sl-arrow-left-circle"><i class="sl-arrow-left-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-arrow-right-circle" value="sl-arrow-right-circle"><label for="sl-arrow-right-circle"><i class="sl-arrow-right-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-arrow-down-circle" value="sl-arrow-down-circle"><label for="sl-arrow-down-circle"><i class="sl-arrow-down-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-check" value="sl-check"><label for="sl-check"><i class="sl-check"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-clock" value="sl-clock"><label for="sl-clock"><i class="sl-clock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-plus" value="sl-plus"><label for="sl-plus"><i class="sl-plus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-close" value="sl-close"><label for="sl-close"><i class="sl-close"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-trophy" value="sl-trophy"><label for="sl-trophy"><i class="sl-trophy"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-screen-smartphone" value="sl-screen-smartphone"><label for="sl-screen-smartphone"><i class="sl-screen-smartphone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-screen-desktop" value="sl-screen-desktop"><label for="sl-screen-desktop"><i class="sl-screen-desktop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-plane" value="sl-plane"><label for="sl-plane"><i class="sl-plane"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-notebook" value="sl-notebook"><label for="sl-notebook"><i class="sl-notebook"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-mustache" value="sl-mustache"><label for="sl-mustache"><i class="sl-mustache"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-mouse" value="sl-mouse"><label for="sl-mouse"><i class="sl-mouse"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-magnet" value="sl-magnet"><label for="sl-magnet"><i class="sl-magnet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-energy" value="sl-energy"><label for="sl-energy"><i class="sl-energy"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-disc" value="sl-disc"><label for="sl-disc"><i class="sl-disc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-cursor" value="sl-cursor"><label for="sl-cursor"><i class="sl-cursor"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-cursor-move" value="sl-cursor-move"><label for="sl-cursor-move"><i class="sl-cursor-move"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-crop" value="sl-crop"><label for="sl-crop"><i class="sl-crop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-chemistry" value="sl-chemistry"><label for="sl-chemistry"><i class="sl-chemistry"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-speedometer" value="sl-speedometer"><label for="sl-speedometer"><i class="sl-speedometer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-shield" value="sl-shield"><label for="sl-shield"><i class="sl-shield"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-screen-tablet" value="sl-screen-tablet"><label for="sl-screen-tablet"><i class="sl-screen-tablet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-magic-wand" value="sl-magic-wand"><label for="sl-magic-wand"><i class="sl-magic-wand"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-hourglass" value="sl-hourglass"><label for="sl-hourglass"><i class="sl-hourglass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-graduation" value="sl-graduation"><label for="sl-graduation"><i class="sl-graduation"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-ghost" value="sl-ghost"><label for="sl-ghost"><i class="sl-ghost"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-game-controller" value="sl-game-controller"><label for="sl-game-controller"><i class="sl-game-controller"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-fire" value="sl-fire"><label for="sl-fire"><i class="sl-fire"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-eyeglass" value="sl-eyeglass"><label for="sl-eyeglass"><i class="sl-eyeglass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-envelope-open" value="sl-envelope-open"><label for="sl-envelope-open"><i class="sl-envelope-open"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-envelope-letter" value="sl-envelope-letter"><label for="sl-envelope-letter"><i class="sl-envelope-letter"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-bell" value="sl-bell"><label for="sl-bell"><i class="sl-bell"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-badge" value="sl-badge"><label for="sl-badge"><i class="sl-badge"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-anchor" value="sl-anchor"><label for="sl-anchor"><i class="sl-anchor"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-wallet" value="sl-wallet"><label for="sl-wallet"><i class="sl-wallet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-vector" value="sl-vector"><label for="sl-vector"><i class="sl-vector"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-speech" value="sl-speech"><label for="sl-speech"><i class="sl-speech"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-puzzle" value="sl-puzzle"><label for="sl-puzzle"><i class="sl-puzzle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-printer" value="sl-printer"><label for="sl-printer"><i class="sl-printer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-present" value="sl-present"><label for="sl-present"><i class="sl-present"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-playlist" value="sl-playlist"><label for="sl-playlist"><i class="sl-playlist"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-pin" value="sl-pin"><label for="sl-pin"><i class="sl-pin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-picture" value="sl-picture"><label for="sl-picture"><i class="sl-picture"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-handbag" value="sl-handbag"><label for="sl-handbag"><i class="sl-handbag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-globe-alt" value="sl-globe-alt"><label for="sl-globe-alt"><i class="sl-globe-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-globe" value="sl-globe"><label for="sl-globe"><i class="sl-globe"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-folder-alt" value="sl-folder-alt"><label for="sl-folder-alt"><i class="sl-folder-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-folder" value="sl-folder"><label for="sl-folder"><i class="sl-folder"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-film" value="sl-film"><label for="sl-film"><i class="sl-film"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-feed" value="sl-feed"><label for="sl-feed"><i class="sl-feed"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-drop" value="sl-drop"><label for="sl-drop"><i class="sl-drop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-drawer" value="sl-drawer"><label for="sl-drawer"><i class="sl-drawer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-minus" value="sl-minus"><label for="sl-minus"><i class="sl-minus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-event" value="sl-event"><label for="sl-event"><i class="sl-event"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-exclamation" value="sl-exclamation"><label for="sl-exclamation"><i class="sl-exclamation"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-organization" value="sl-organization"><label for="sl-organization"><i class="sl-organization"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-docs" value="sl-docs"><label for="sl-docs"><i class="sl-docs"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-doc" value="sl-doc"><label for="sl-doc"><i class="sl-doc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-diamond" value="sl-diamond"><label for="sl-diamond"><i class="sl-diamond"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-cup" value="sl-cup"><label for="sl-cup"><i class="sl-cup"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-calculator" value="sl-calculator"><label for="sl-calculator"><i class="sl-calculator"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-bubbles" value="sl-bubbles"><label for="sl-bubbles"><i class="sl-bubbles"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-briefcase" value="sl-briefcase"><label for="sl-briefcase"><i class="sl-briefcase"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-book-open" value="sl-book-open"><label for="sl-book-open"><i class="sl-book-open"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-basket-loaded" value="sl-basket-loaded"><label for="sl-basket-loaded"><i class="sl-basket-loaded"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-basket" value="sl-basket"><label for="sl-basket"><i class="sl-basket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-bag" value="sl-bag"><label for="sl-bag"><i class="sl-bag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-action-undo" value="sl-action-undo"><label for="sl-action-undo"><i class="sl-action-undo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-action-redo" value="sl-action-redo"><label for="sl-action-redo"><i class="sl-action-redo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-wrench" value="sl-wrench"><label for="sl-wrench"><i class="sl-wrench"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-umbrella" value="sl-umbrella"><label for="sl-umbrella"><i class="sl-umbrella"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-trash" value="sl-trash"><label for="sl-trash"><i class="sl-trash"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-tag" value="sl-tag"><label for="sl-tag"><i class="sl-tag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-support" value="sl-support"><label for="sl-support"><i class="sl-support"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-frame" value="sl-frame"><label for="sl-frame"><i class="sl-frame"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-size-fullscreen" value="sl-size-fullscreen"><label for="sl-size-fullscreen"><i class="sl-size-fullscreen"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-size-actual" value="sl-size-actual"><label for="sl-size-actual"><i class="sl-size-actual"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-shuffle" value="sl-shuffle"><label for="sl-shuffle"><i class="sl-shuffle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-share-alt" value="sl-share-alt"><label for="sl-share-alt"><i class="sl-share-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-share" value="sl-share"><label for="sl-share"><i class="sl-share"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-rocket" value="sl-rocket"><label for="sl-rocket"><i class="sl-rocket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-question" value="sl-question"><label for="sl-question"><i class="sl-question"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-pie-chart" value="sl-pie-chart"><label for="sl-pie-chart"><i class="sl-pie-chart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-pencil" value="sl-pencil"><label for="sl-pencil"><i class="sl-pencil"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-note" value="sl-note"><label for="sl-note"><i class="sl-note"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-loop" value="sl-loop"><label for="sl-loop"><i class="sl-loop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-home" value="sl-home"><label for="sl-home"><i class="sl-home"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-grid" value="sl-grid"><label for="sl-grid"><i class="sl-grid"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-graph" value="sl-graph"><label for="sl-graph"><i class="sl-graph"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-microphone" value="sl-microphone"><label for="sl-microphone"><i class="sl-microphone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-music-tone-alt" value="sl-music-tone-alt"><label for="sl-music-tone-alt"><i class="sl-music-tone-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-music-tone" value="sl-music-tone"><label for="sl-music-tone"><i class="sl-music-tone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-earphones-alt" value="sl-earphones-alt"><label for="sl-earphones-alt"><i class="sl-earphones-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-earphones" value="sl-earphones"><label for="sl-earphones"><i class="sl-earphones"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-equalizer" value="sl-equalizer"><label for="sl-equalizer"><i class="sl-equalizer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-like" value="sl-like"><label for="sl-like"><i class="sl-like"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-dislike" value="sl-dislike"><label for="sl-dislike"><i class="sl-dislike"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-control-start" value="sl-control-start"><label for="sl-control-start"><i class="sl-control-start"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-control-rewind" value="sl-control-rewind"><label for="sl-control-rewind"><i class="sl-control-rewind"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-control-play" value="sl-control-play"><label for="sl-control-play"><i class="sl-control-play"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-control-pause" value="sl-control-pause"><label for="sl-control-pause"><i class="sl-control-pause"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-control-forward" value="sl-control-forward"><label for="sl-control-forward"><i class="sl-control-forward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-control-end" value="sl-control-end"><label for="sl-control-end"><i class="sl-control-end"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-volume-1" value="sl-volume-1"><label for="sl-volume-1"><i class="sl-volume-1"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-volume-2" value="sl-volume-2"><label for="sl-volume-2"><i class="sl-volume-2"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-volume-off" value="sl-volume-off"><label for="sl-volume-off"><i class="sl-volume-off"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-calendar" value="sl-calendar"><label for="sl-calendar"><i class="sl-calendar"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-bulb" value="sl-bulb"><label for="sl-bulb"><i class="sl-bulb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-chart" value="sl-chart"><label for="sl-chart"><i class="sl-chart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-ban" value="sl-ban"><label for="sl-ban"><i class="sl-ban"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-bubble" value="sl-bubble"><label for="sl-bubble"><i class="sl-bubble"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-camrecorder" value="sl-camrecorder"><label for="sl-camrecorder"><i class="sl-camrecorder"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-camera" value="sl-camera"><label for="sl-camera"><i class="sl-camera"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-cloud-download" value="sl-cloud-download"><label for="sl-cloud-download"><i class="sl-cloud-download"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-cloud-upload" value="sl-cloud-upload"><label for="sl-cloud-upload"><i class="sl-cloud-upload"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-envelope" value="sl-envelope"><label for="sl-envelope"><i class="sl-envelope"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-eye" value="sl-eye"><label for="sl-eye"><i class="sl-eye"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-flag" value="sl-flag"><label for="sl-flag"><i class="sl-flag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-heart" value="sl-heart"><label for="sl-heart"><i class="sl-heart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-info" value="sl-info"><label for="sl-info"><i class="sl-info"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-key" value="sl-key"><label for="sl-key"><i class="sl-key"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-link" value="sl-link"><label for="sl-link"><i class="sl-link"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-lock" value="sl-lock"><label for="sl-lock"><i class="sl-lock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-lock-open" value="sl-lock-open"><label for="sl-lock-open"><i class="sl-lock-open"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-magnifier" value="sl-magnifier"><label for="sl-magnifier"><i class="sl-magnifier"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-magnifier-add" value="sl-magnifier-add"><label for="sl-magnifier-add"><i class="sl-magnifier-add"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-magnifier-remove" value="sl-magnifier-remove"><label for="sl-magnifier-remove"><i class="sl-magnifier-remove"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-paper-clip" value="sl-paper-clip"><label for="sl-paper-clip"><i class="sl-paper-clip"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-paper-plane" value="sl-paper-plane"><label for="sl-paper-plane"><i class="sl-paper-plane"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-power" value="sl-power"><label for="sl-power"><i class="sl-power"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-refresh" value="sl-refresh"><label for="sl-refresh"><i class="sl-refresh"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-reload" value="sl-reload"><label for="sl-reload"><i class="sl-reload"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-settings" value="sl-settings"><label for="sl-settings"><i class="sl-settings"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-star" value="sl-star"><label for="sl-star"><i class="sl-star"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-symbol-female" value="sl-symbol-female"><label for="sl-symbol-female"><i class="sl-symbol-female"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-symbol-male" value="sl-symbol-male"><label for="sl-symbol-male"><i class="sl-symbol-male"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-target" value="sl-target"><label for="sl-target"><i class="sl-target"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-credit-card" value="sl-credit-card"><label for="sl-credit-card"><i class="sl-credit-card"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-paypal" value="sl-paypal"><label for="sl-paypal"><i class="sl-paypal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-tumblr" value="sl-social-tumblr"><label for="sl-social-tumblr"><i class="sl-social-tumblr"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-twitter" value="sl-social-twitter"><label for="sl-social-twitter"><i class="sl-social-twitter"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-facebook" value="sl-social-facebook"><label for="sl-social-facebook"><i class="sl-social-facebook"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-instagram" value="sl-social-instagram"><label for="sl-social-instagram"><i class="sl-social-instagram"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-linkedin" value="sl-social-linkedin"><label for="sl-social-linkedin"><i class="sl-social-linkedin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-pinterest" value="sl-social-pinterest"><label for="sl-social-pinterest"><i class="sl-social-pinterest"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-github" value="sl-social-github"><label for="sl-social-github"><i class="sl-social-github"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-google" value="sl-social-google"><label for="sl-social-google"><i class="sl-social-google"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-reddit" value="sl-social-reddit"><label for="sl-social-reddit"><i class="sl-social-reddit"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-skype" value="sl-social-skype"><label for="sl-social-skype"><i class="sl-social-skype"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-dribbble" value="sl-social-dribbble"><label for="sl-social-dribbble"><i class="sl-social-dribbble"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-behance" value="sl-social-behance"><label for="sl-social-behance"><i class="sl-social-behance"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-foursqare" value="sl-social-foursqare"><label for="sl-social-foursqare"><i class="sl-social-foursqare"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-soundcloud" value="sl-social-soundcloud"><label for="sl-social-soundcloud"><i class="sl-social-soundcloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-spotify" value="sl-social-spotify"><label for="sl-social-spotify"><i class="sl-social-spotify"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-stumbleupon" value="sl-social-stumbleupon"><label for="sl-social-stumbleupon"><i class="sl-social-stumbleupon"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-youtube" value="sl-social-youtube"><label for="sl-social-youtube"><i class="sl-social-youtube"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="sl-social-dropbox" value="sl-social-dropbox"><label for="sl-social-dropbox"><i class="sl-social-dropbox"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_heart" value="li_heart"><label for="li_heart"><i class="li_heart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_cloud" value="li_cloud"><label for="li_cloud"><i class="li_cloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_star" value="li_star"><label for="li_star"><i class="li_star"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_tv" value="li_tv"><label for="li_tv"><i class="li_tv"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_sound" value="li_sound"><label for="li_sound"><i class="li_sound"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_video" value="li_video"><label for="li_video"><i class="li_video"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_trash" value="li_trash"><label for="li_trash"><i class="li_trash"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_user" value="li_user"><label for="li_user"><i class="li_user"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_key" value="li_key"><label for="li_key"><i class="li_key"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_search" value="li_search"><label for="li_search"><i class="li_search"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_settings" value="li_settings"><label for="li_settings"><i class="li_settings"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_camera" value="li_camera"><label for="li_camera"><i class="li_camera"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_tag" value="li_tag"><label for="li_tag"><i class="li_tag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_lock" value="li_lock"><label for="li_lock"><i class="li_lock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_bulb" value="li_bulb"><label for="li_bulb"><i class="li_bulb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_pen" value="li_pen"><label for="li_pen"><i class="li_pen"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_diamond" value="li_diamond"><label for="li_diamond"><i class="li_diamond"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_display" value="li_display"><label for="li_display"><i class="li_display"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_location" value="li_location"><label for="li_location"><i class="li_location"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_eye" value="li_eye"><label for="li_eye"><i class="li_eye"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_bubble" value="li_bubble"><label for="li_bubble"><i class="li_bubble"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_stack" value="li_stack"><label for="li_stack"><i class="li_stack"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_cup" value="li_cup"><label for="li_cup"><i class="li_cup"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_phone" value="li_phone"><label for="li_phone"><i class="li_phone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_news" value="li_news"><label for="li_news"><i class="li_news"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_mail" value="li_mail"><label for="li_mail"><i class="li_mail"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_like" value="li_like"><label for="li_like"><i class="li_like"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_photo" value="li_photo"><label for="li_photo"><i class="li_photo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_note" value="li_note"><label for="li_note"><i class="li_note"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_clock" value="li_clock"><label for="li_clock"><i class="li_clock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_paperplane" value="li_paperplane"><label for="li_paperplane"><i class="li_paperplane"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_params" value="li_params"><label for="li_params"><i class="li_params"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_banknote" value="li_banknote"><label for="li_banknote"><i class="li_banknote"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_data" value="li_data"><label for="li_data"><i class="li_data"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_music" value="li_music"><label for="li_music"><i class="li_music"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_megaphone" value="li_megaphone"><label for="li_megaphone"><i class="li_megaphone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_study" value="li_study"><label for="li_study"><i class="li_study"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_lab" value="li_lab"><label for="li_lab"><i class="li_lab"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_food" value="li_food"><label for="li_food"><i class="li_food"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_t-shirt" value="li_t-shirt"><label for="li_t-shirt"><i class="li_t-shirt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_fire" value="li_fire"><label for="li_fire"><i class="li_fire"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_clip" value="li_clip"><label for="li_clip"><i class="li_clip"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_shop" value="li_shop"><label for="li_shop"><i class="li_shop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_calendar" value="li_calendar"><label for="li_calendar"><i class="li_calendar"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_vallet" value="li_vallet"><label for="li_vallet"><i class="li_vallet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_vynil" value="li_vynil"><label for="li_vynil"><i class="li_vynil"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_truck" value="li_truck"><label for="li_truck"><i class="li_truck"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="li_world" value="li_world"><label for="li_world"><i class="li_world"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-glass" value="fa-glass"><label for="fa-glass"><i class="fa-glass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-music" value="fa-music"><label for="fa-music"><i class="fa-music"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-search" value="fa-search"><label for="fa-search"><i class="fa-search"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-envelope-o" value="fa-envelope-o"><label for="fa-envelope-o"><i class="fa-envelope-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-heart" value="fa-heart"><label for="fa-heart"><i class="fa-heart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-star" value="fa-star"><label for="fa-star"><i class="fa-star"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-star-o" value="fa-star-o"><label for="fa-star-o"><i class="fa-star-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-user" value="fa-user"><label for="fa-user"><i class="fa-user"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-film" value="fa-film"><label for="fa-film"><i class="fa-film"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-th-large" value="fa-th-large"><label for="fa-th-large"><i class="fa-th-large"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-th" value="fa-th"><label for="fa-th"><i class="fa-th"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-th-list" value="fa-th-list"><label for="fa-th-list"><i class="fa-th-list"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-check" value="fa-check"><label for="fa-check"><i class="fa-check"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-close" value="fa-close"><label for="fa-close"><i class="fa-close"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-search-plus" value="fa-search-plus"><label for="fa-search-plus"><i class="fa-search-plus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-search-minus" value="fa-search-minus"><label for="fa-search-minus"><i class="fa-search-minus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-power-off" value="fa-power-off"><label for="fa-power-off"><i class="fa-power-off"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-signal" value="fa-signal"><label for="fa-signal"><i class="fa-signal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-gear" value="fa-gear"><label for="fa-gear"><i class="fa-gear"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-trash-o" value="fa-trash-o"><label for="fa-trash-o"><i class="fa-trash-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-home" value="fa-home"><label for="fa-home"><i class="fa-home"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-o" value="fa-file-o"><label for="fa-file-o"><i class="fa-file-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-clock-o" value="fa-clock-o"><label for="fa-clock-o"><i class="fa-clock-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-road" value="fa-road"><label for="fa-road"><i class="fa-road"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-download" value="fa-download"><label for="fa-download"><i class="fa-download"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-circle-o-down" value="fa-arrow-circle-o-down"><label for="fa-arrow-circle-o-down"><i class="fa-arrow-circle-o-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-circle-o-up" value="fa-arrow-circle-o-up"><label for="fa-arrow-circle-o-up"><i class="fa-arrow-circle-o-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-inbox" value="fa-inbox"><label for="fa-inbox"><i class="fa-inbox"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-play-circle-o" value="fa-play-circle-o"><label for="fa-play-circle-o"><i class="fa-play-circle-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-rotate-right" value="fa-rotate-right"><label for="fa-rotate-right"><i class="fa-rotate-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-refresh" value="fa-refresh"><label for="fa-refresh"><i class="fa-refresh"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-list-alt" value="fa-list-alt"><label for="fa-list-alt"><i class="fa-list-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-lock" value="fa-lock"><label for="fa-lock"><i class="fa-lock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-flag" value="fa-flag"><label for="fa-flag"><i class="fa-flag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-headphones" value="fa-headphones"><label for="fa-headphones"><i class="fa-headphones"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-volume-off" value="fa-volume-off"><label for="fa-volume-off"><i class="fa-volume-off"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-volume-down" value="fa-volume-down"><label for="fa-volume-down"><i class="fa-volume-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-volume-up" value="fa-volume-up"><label for="fa-volume-up"><i class="fa-volume-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-qrcode" value="fa-qrcode"><label for="fa-qrcode"><i class="fa-qrcode"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-barcode" value="fa-barcode"><label for="fa-barcode"><i class="fa-barcode"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tag" value="fa-tag"><label for="fa-tag"><i class="fa-tag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tags" value="fa-tags"><label for="fa-tags"><i class="fa-tags"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-book" value="fa-book"><label for="fa-book"><i class="fa-book"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bookmark" value="fa-bookmark"><label for="fa-bookmark"><i class="fa-bookmark"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-print" value="fa-print"><label for="fa-print"><i class="fa-print"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-camera" value="fa-camera"><label for="fa-camera"><i class="fa-camera"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-font" value="fa-font"><label for="fa-font"><i class="fa-font"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bold" value="fa-bold"><label for="fa-bold"><i class="fa-bold"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-italic" value="fa-italic"><label for="fa-italic"><i class="fa-italic"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-text-height" value="fa-text-height"><label for="fa-text-height"><i class="fa-text-height"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-text-width" value="fa-text-width"><label for="fa-text-width"><i class="fa-text-width"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-align-left" value="fa-align-left"><label for="fa-align-left"><i class="fa-align-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-align-center" value="fa-align-center"><label for="fa-align-center"><i class="fa-align-center"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-align-right" value="fa-align-right"><label for="fa-align-right"><i class="fa-align-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-align-justify" value="fa-align-justify"><label for="fa-align-justify"><i class="fa-align-justify"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-list" value="fa-list"><label for="fa-list"><i class="fa-list"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-outdent" value="fa-outdent"><label for="fa-outdent"><i class="fa-outdent"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-indent" value="fa-indent"><label for="fa-indent"><i class="fa-indent"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-video-camera" value="fa-video-camera"><label for="fa-video-camera"><i class="fa-video-camera"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-picture-o" value="fa-picture-o"><label for="fa-picture-o"><i class="fa-picture-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pencil" value="fa-pencil"><label for="fa-pencil"><i class="fa-pencil"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-map-marker" value="fa-map-marker"><label for="fa-map-marker"><i class="fa-map-marker"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-adjust" value="fa-adjust"><label for="fa-adjust"><i class="fa-adjust"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tint" value="fa-tint"><label for="fa-tint"><i class="fa-tint"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-edit" value="fa-edit"><label for="fa-edit"><i class="fa-edit"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pencil-square-o" value="fa-pencil-square-o"><label for="fa-pencil-square-o"><i class="fa-pencil-square-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-share-square-o" value="fa-share-square-o"><label for="fa-share-square-o"><i class="fa-share-square-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-check-square-o" value="fa-check-square-o"><label for="fa-check-square-o"><i class="fa-check-square-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrows" value="fa-arrows"><label for="fa-arrows"><i class="fa-arrows"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-step-backward" value="fa-step-backward"><label for="fa-step-backward"><i class="fa-step-backward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-fast-backward" value="fa-fast-backward"><label for="fa-fast-backward"><i class="fa-fast-backward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-backward" value="fa-backward"><label for="fa-backward"><i class="fa-backward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-play" value="fa-play"><label for="fa-play"><i class="fa-play"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pause" value="fa-pause"><label for="fa-pause"><i class="fa-pause"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-stop" value="fa-stop"><label for="fa-stop"><i class="fa-stop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-forward" value="fa-forward"><label for="fa-forward"><i class="fa-forward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-fast-forward" value="fa-fast-forward"><label for="fa-fast-forward"><i class="fa-fast-forward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-step-forward" value="fa-step-forward"><label for="fa-step-forward"><i class="fa-step-forward"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-eject" value="fa-eject"><label for="fa-eject"><i class="fa-eject"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chevron-left" value="fa-chevron-left"><label for="fa-chevron-left"><i class="fa-chevron-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chevron-right" value="fa-chevron-right"><label for="fa-chevron-right"><i class="fa-chevron-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-plus-circle" value="fa-plus-circle"><label for="fa-plus-circle"><i class="fa-plus-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-minus-circle" value="fa-minus-circle"><label for="fa-minus-circle"><i class="fa-minus-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-times-circle" value="fa-times-circle"><label for="fa-times-circle"><i class="fa-times-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-check-circle" value="fa-check-circle"><label for="fa-check-circle"><i class="fa-check-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-question-circle" value="fa-question-circle"><label for="fa-question-circle"><i class="fa-question-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-info-circle" value="fa-info-circle"><label for="fa-info-circle"><i class="fa-info-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-crosshairs" value="fa-crosshairs"><label for="fa-crosshairs"><i class="fa-crosshairs"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-times-circle-o" value="fa-times-circle-o"><label for="fa-times-circle-o"><i class="fa-times-circle-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-check-circle-o" value="fa-check-circle-o"><label for="fa-check-circle-o"><i class="fa-check-circle-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-ban" value="fa-ban"><label for="fa-ban"><i class="fa-ban"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-left" value="fa-arrow-left"><label for="fa-arrow-left"><i class="fa-arrow-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-right" value="fa-arrow-right"><label for="fa-arrow-right"><i class="fa-arrow-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-up" value="fa-arrow-up"><label for="fa-arrow-up"><i class="fa-arrow-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-down" value="fa-arrow-down"><label for="fa-arrow-down"><i class="fa-arrow-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-share" value="fa-share"><label for="fa-share"><i class="fa-share"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-expand" value="fa-expand"><label for="fa-expand"><i class="fa-expand"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-compress" value="fa-compress"><label for="fa-compress"><i class="fa-compress"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-plus" value="fa-plus"><label for="fa-plus"><i class="fa-plus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-minus" value="fa-minus"><label for="fa-minus"><i class="fa-minus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-asterisk" value="fa-asterisk"><label for="fa-asterisk"><i class="fa-asterisk"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-exclamation-circle" value="fa-exclamation-circle"><label for="fa-exclamation-circle"><i class="fa-exclamation-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-gift" value="fa-gift"><label for="fa-gift"><i class="fa-gift"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-leaf" value="fa-leaf"><label for="fa-leaf"><i class="fa-leaf"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-fire" value="fa-fire"><label for="fa-fire"><i class="fa-fire"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-eye" value="fa-eye"><label for="fa-eye"><i class="fa-eye"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-eye-slash" value="fa-eye-slash"><label for="fa-eye-slash"><i class="fa-eye-slash"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-warning" value="fa-warning"><label for="fa-warning"><i class="fa-warning"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-plane" value="fa-plane"><label for="fa-plane"><i class="fa-plane"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-calendar" value="fa-calendar"><label for="fa-calendar"><i class="fa-calendar"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-random" value="fa-random"><label for="fa-random"><i class="fa-random"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-comment" value="fa-comment"><label for="fa-comment"><i class="fa-comment"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-magnet" value="fa-magnet"><label for="fa-magnet"><i class="fa-magnet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chevron-up" value="fa-chevron-up"><label for="fa-chevron-up"><i class="fa-chevron-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chevron-down" value="fa-chevron-down"><label for="fa-chevron-down"><i class="fa-chevron-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-retweet" value="fa-retweet"><label for="fa-retweet"><i class="fa-retweet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-shopping-cart" value="fa-shopping-cart"><label for="fa-shopping-cart"><i class="fa-shopping-cart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-folder" value="fa-folder"><label for="fa-folder"><i class="fa-folder"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-folder-open" value="fa-folder-open"><label for="fa-folder-open"><i class="fa-folder-open"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrows-v" value="fa-arrows-v"><label for="fa-arrows-v"><i class="fa-arrows-v"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrows-h" value="fa-arrows-h"><label for="fa-arrows-h"><i class="fa-arrows-h"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bar-chart" value="fa-bar-chart"><label for="fa-bar-chart"><i class="fa-bar-chart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-camera-retro" value="fa-camera-retro"><label for="fa-camera-retro"><i class="fa-camera-retro"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-key" value="fa-key"><label for="fa-key"><i class="fa-key"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-gears" value="fa-gears"><label for="fa-gears"><i class="fa-gears"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-comments" value="fa-comments"><label for="fa-comments"><i class="fa-comments"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-thumbs-o-up" value="fa-thumbs-o-up"><label for="fa-thumbs-o-up"><i class="fa-thumbs-o-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-thumbs-o-down" value="fa-thumbs-o-down"><label for="fa-thumbs-o-down"><i class="fa-thumbs-o-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-star-half" value="fa-star-half"><label for="fa-star-half"><i class="fa-star-half"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-heart-o" value="fa-heart-o"><label for="fa-heart-o"><i class="fa-heart-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sign-out" value="fa-sign-out"><label for="fa-sign-out"><i class="fa-sign-out"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-thumb-tack" value="fa-thumb-tack"><label for="fa-thumb-tack"><i class="fa-thumb-tack"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-external-link" value="fa-external-link"><label for="fa-external-link"><i class="fa-external-link"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sign-in" value="fa-sign-in"><label for="fa-sign-in"><i class="fa-sign-in"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-trophy" value="fa-trophy"><label for="fa-trophy"><i class="fa-trophy"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-github-square" value="fa-github-square"><label for="fa-github-square"><i class="fa-github-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-upload" value="fa-upload"><label for="fa-upload"><i class="fa-upload"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-lemon-o" value="fa-lemon-o"><label for="fa-lemon-o"><i class="fa-lemon-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-phone" value="fa-phone"><label for="fa-phone"><i class="fa-phone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-square-o" value="fa-square-o"><label for="fa-square-o"><i class="fa-square-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bookmark-o" value="fa-bookmark-o"><label for="fa-bookmark-o"><i class="fa-bookmark-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-phone-square" value="fa-phone-square"><label for="fa-phone-square"><i class="fa-phone-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-twitter" value="fa-twitter"><label for="fa-twitter"><i class="fa-twitter"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-facebook" value="fa-facebook"><label for="fa-facebook"><i class="fa-facebook"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-github" value="fa-github"><label for="fa-github"><i class="fa-github"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-unlock" value="fa-unlock"><label for="fa-unlock"><i class="fa-unlock"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-credit-card" value="fa-credit-card"><label for="fa-credit-card"><i class="fa-credit-card"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-feed" value="fa-feed"><label for="fa-feed"><i class="fa-feed"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hdd-o" value="fa-hdd-o"><label for="fa-hdd-o"><i class="fa-hdd-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bullhorn" value="fa-bullhorn"><label for="fa-bullhorn"><i class="fa-bullhorn"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bell" value="fa-bell"><label for="fa-bell"><i class="fa-bell"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-certificate" value="fa-certificate"><label for="fa-certificate"><i class="fa-certificate"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-o-right" value="fa-hand-o-right"><label for="fa-hand-o-right"><i class="fa-hand-o-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-o-left" value="fa-hand-o-left"><label for="fa-hand-o-left"><i class="fa-hand-o-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-o-up" value="fa-hand-o-up"><label for="fa-hand-o-up"><i class="fa-hand-o-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-o-down" value="fa-hand-o-down"><label for="fa-hand-o-down"><i class="fa-hand-o-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-circle-left" value="fa-arrow-circle-left"><label for="fa-arrow-circle-left"><i class="fa-arrow-circle-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-circle-right" value="fa-arrow-circle-right"><label for="fa-arrow-circle-right"><i class="fa-arrow-circle-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-circle-up" value="fa-arrow-circle-up"><label for="fa-arrow-circle-up"><i class="fa-arrow-circle-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-circle-down" value="fa-arrow-circle-down"><label for="fa-arrow-circle-down"><i class="fa-arrow-circle-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-globe" value="fa-globe"><label for="fa-globe"><i class="fa-globe"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-wrench" value="fa-wrench"><label for="fa-wrench"><i class="fa-wrench"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tasks" value="fa-tasks"><label for="fa-tasks"><i class="fa-tasks"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-filter" value="fa-filter"><label for="fa-filter"><i class="fa-filter"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-briefcase" value="fa-briefcase"><label for="fa-briefcase"><i class="fa-briefcase"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrows-alt" value="fa-arrows-alt"><label for="fa-arrows-alt"><i class="fa-arrows-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-group" value="fa-group"><label for="fa-group"><i class="fa-group"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-link" value="fa-link"><label for="fa-link"><i class="fa-link"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cloud" value="fa-cloud"><label for="fa-cloud"><i class="fa-cloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-flask" value="fa-flask"><label for="fa-flask"><i class="fa-flask"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-scissors" value="fa-scissors"><label for="fa-scissors"><i class="fa-scissors"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-files-o" value="fa-files-o"><label for="fa-files-o"><i class="fa-files-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-paperclip" value="fa-paperclip"><label for="fa-paperclip"><i class="fa-paperclip"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-floppy-o" value="fa-floppy-o"><label for="fa-floppy-o"><i class="fa-floppy-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-square" value="fa-square"><label for="fa-square"><i class="fa-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-reorder" value="fa-reorder"><label for="fa-reorder"><i class="fa-reorder"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-list-ul" value="fa-list-ul"><label for="fa-list-ul"><i class="fa-list-ul"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-list-ol" value="fa-list-ol"><label for="fa-list-ol"><i class="fa-list-ol"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-strikethrough" value="fa-strikethrough"><label for="fa-strikethrough"><i class="fa-strikethrough"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-underline" value="fa-underline"><label for="fa-underline"><i class="fa-underline"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-table" value="fa-table"><label for="fa-table"><i class="fa-table"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-magic" value="fa-magic"><label for="fa-magic"><i class="fa-magic"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-truck" value="fa-truck"><label for="fa-truck"><i class="fa-truck"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pinterest" value="fa-pinterest"><label for="fa-pinterest"><i class="fa-pinterest"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-google-plus" value="fa-google-plus"><label for="fa-google-plus"><i class="fa-google-plus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-money" value="fa-money"><label for="fa-money"><i class="fa-money"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-caret-down" value="fa-caret-down"><label for="fa-caret-down"><i class="fa-caret-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-caret-up" value="fa-caret-up"><label for="fa-caret-up"><i class="fa-caret-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-caret-left" value="fa-caret-left"><label for="fa-caret-left"><i class="fa-caret-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-caret-right" value="fa-caret-right"><label for="fa-caret-right"><i class="fa-caret-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-columns" value="fa-columns"><label for="fa-columns"><i class="fa-columns"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort" value="fa-sort"><label for="fa-sort"><i class="fa-sort"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-unsorted" value="fa-unsorted"><label for="fa-unsorted"><i class="fa-unsorted"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-desc" value="fa-sort-desc"><label for="fa-sort-desc"><i class="fa-sort-desc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-down" value="fa-sort-down"><label for="fa-sort-down"><i class="fa-sort-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-asc" value="fa-sort-asc"><label for="fa-sort-asc"><i class="fa-sort-asc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-up" value="fa-sort-up"><label for="fa-sort-up"><i class="fa-sort-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-envelope" value="fa-envelope"><label for="fa-envelope"><i class="fa-envelope"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-linkedin" value="fa-linkedin"><label for="fa-linkedin"><i class="fa-linkedin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-rotate-left" value="fa-rotate-left"><label for="fa-rotate-left"><i class="fa-rotate-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-legal" value="fa-legal"><label for="fa-legal"><i class="fa-legal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-dashboard" value="fa-dashboard"><label for="fa-dashboard"><i class="fa-dashboard"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-comment-o" value="fa-comment-o"><label for="fa-comment-o"><i class="fa-comment-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-comments-o" value="fa-comments-o"><label for="fa-comments-o"><i class="fa-comments-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bolt" value="fa-bolt"><label for="fa-bolt"><i class="fa-bolt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sitemap" value="fa-sitemap"><label for="fa-sitemap"><i class="fa-sitemap"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-umbrella" value="fa-umbrella"><label for="fa-umbrella"><i class="fa-umbrella"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-clipboard" value="fa-clipboard"><label for="fa-clipboard"><i class="fa-clipboard"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-lightbulb-o" value="fa-lightbulb-o"><label for="fa-lightbulb-o"><i class="fa-lightbulb-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-exchange" value="fa-exchange"><label for="fa-exchange"><i class="fa-exchange"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cloud-download" value="fa-cloud-download"><label for="fa-cloud-download"><i class="fa-cloud-download"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cloud-upload" value="fa-cloud-upload"><label for="fa-cloud-upload"><i class="fa-cloud-upload"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-user-md" value="fa-user-md"><label for="fa-user-md"><i class="fa-user-md"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-stethoscope" value="fa-stethoscope"><label for="fa-stethoscope"><i class="fa-stethoscope"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-suitcase" value="fa-suitcase"><label for="fa-suitcase"><i class="fa-suitcase"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bell-o" value="fa-bell-o"><label for="fa-bell-o"><i class="fa-bell-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-coffee" value="fa-coffee"><label for="fa-coffee"><i class="fa-coffee"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cutlery" value="fa-cutlery"><label for="fa-cutlery"><i class="fa-cutlery"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-text-o" value="fa-file-text-o"><label for="fa-file-text-o"><i class="fa-file-text-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-building-o" value="fa-building-o"><label for="fa-building-o"><i class="fa-building-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hospital-o" value="fa-hospital-o"><label for="fa-hospital-o"><i class="fa-hospital-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-ambulance" value="fa-ambulance"><label for="fa-ambulance"><i class="fa-ambulance"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-medkit" value="fa-medkit"><label for="fa-medkit"><i class="fa-medkit"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-fighter-jet" value="fa-fighter-jet"><label for="fa-fighter-jet"><i class="fa-fighter-jet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-beer" value="fa-beer"><label for="fa-beer"><i class="fa-beer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-h-square" value="fa-h-square"><label for="fa-h-square"><i class="fa-h-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-plus-square" value="fa-plus-square"><label for="fa-plus-square"><i class="fa-plus-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-angle-double-left" value="fa-angle-double-left"><label for="fa-angle-double-left"><i class="fa-angle-double-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-angle-double-right" value="fa-angle-double-right"><label for="fa-angle-double-right"><i class="fa-angle-double-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-angle-double-up" value="fa-angle-double-up"><label for="fa-angle-double-up"><i class="fa-angle-double-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-angle-double-down" value="fa-angle-double-down"><label for="fa-angle-double-down"><i class="fa-angle-double-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-angle-left" value="fa-angle-left"><label for="fa-angle-left"><i class="fa-angle-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-angle-right" value="fa-angle-right"><label for="fa-angle-right"><i class="fa-angle-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-angle-up" value="fa-angle-up"><label for="fa-angle-up"><i class="fa-angle-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-angle-down" value="fa-angle-down"><label for="fa-angle-down"><i class="fa-angle-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-desktop" value="fa-desktop"><label for="fa-desktop"><i class="fa-desktop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-laptop" value="fa-laptop"><label for="fa-laptop"><i class="fa-laptop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tablet" value="fa-tablet"><label for="fa-tablet"><i class="fa-tablet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mobile" value="fa-mobile"><label for="fa-mobile"><i class="fa-mobile"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-circle-o" value="fa-circle-o"><label for="fa-circle-o"><i class="fa-circle-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-quote-left" value="fa-quote-left"><label for="fa-quote-left"><i class="fa-quote-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-quote-right" value="fa-quote-right"><label for="fa-quote-right"><i class="fa-quote-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-spinner" value="fa-spinner"><label for="fa-spinner"><i class="fa-spinner"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-circle" value="fa-circle"><label for="fa-circle"><i class="fa-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-reply" value="fa-reply"><label for="fa-reply"><i class="fa-reply"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-github-alt" value="fa-github-alt"><label for="fa-github-alt"><i class="fa-github-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-folder-o" value="fa-folder-o"><label for="fa-folder-o"><i class="fa-folder-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-folder-open-o" value="fa-folder-open-o"><label for="fa-folder-open-o"><i class="fa-folder-open-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-smile-o" value="fa-smile-o"><label for="fa-smile-o"><i class="fa-smile-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-frown-o" value="fa-frown-o"><label for="fa-frown-o"><i class="fa-frown-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-meh-o" value="fa-meh-o"><label for="fa-meh-o"><i class="fa-meh-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-gamepad" value="fa-gamepad"><label for="fa-gamepad"><i class="fa-gamepad"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-keyboard-o" value="fa-keyboard-o"><label for="fa-keyboard-o"><i class="fa-keyboard-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-flag-o" value="fa-flag-o"><label for="fa-flag-o"><i class="fa-flag-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-flag-checkered" value="fa-flag-checkered"><label for="fa-flag-checkered"><i class="fa-flag-checkered"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-terminal" value="fa-terminal"><label for="fa-terminal"><i class="fa-terminal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-code" value="fa-code"><label for="fa-code"><i class="fa-code"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mail-reply-all" value="fa-mail-reply-all"><label for="fa-mail-reply-all"><i class="fa-mail-reply-all"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-reply-all" value="fa-reply-all"><label for="fa-reply-all"><i class="fa-reply-all"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-star-half-o" value="fa-star-half-o"><label for="fa-star-half-o"><i class="fa-star-half-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-location-arrow" value="fa-location-arrow"><label for="fa-location-arrow"><i class="fa-location-arrow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-crop" value="fa-crop"><label for="fa-crop"><i class="fa-crop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-code-fork" value="fa-code-fork"><label for="fa-code-fork"><i class="fa-code-fork"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chain-broken" value="fa-chain-broken"><label for="fa-chain-broken"><i class="fa-chain-broken"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-question" value="fa-question"><label for="fa-question"><i class="fa-question"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-info" value="fa-info"><label for="fa-info"><i class="fa-info"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-exclamation" value="fa-exclamation"><label for="fa-exclamation"><i class="fa-exclamation"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-superscript" value="fa-superscript"><label for="fa-superscript"><i class="fa-superscript"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-subscript" value="fa-subscript"><label for="fa-subscript"><i class="fa-subscript"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-eraser" value="fa-eraser"><label for="fa-eraser"><i class="fa-eraser"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-puzzle-piece" value="fa-puzzle-piece"><label for="fa-puzzle-piece"><i class="fa-puzzle-piece"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-microphone" value="fa-microphone"><label for="fa-microphone"><i class="fa-microphone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-microphone-slash" value="fa-microphone-slash"><label for="fa-microphone-slash"><i class="fa-microphone-slash"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-shield" value="fa-shield"><label for="fa-shield"><i class="fa-shield"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-calendar-o" value="fa-calendar-o"><label for="fa-calendar-o"><i class="fa-calendar-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-fire-extinguisher" value="fa-fire-extinguisher"><label for="fa-fire-extinguisher"><i class="fa-fire-extinguisher"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-rocket" value="fa-rocket"><label for="fa-rocket"><i class="fa-rocket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-maxcdn" value="fa-maxcdn"><label for="fa-maxcdn"><i class="fa-maxcdn"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chevron-circle-left" value="fa-chevron-circle-left"><label for="fa-chevron-circle-left"><i class="fa-chevron-circle-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chevron-circle-right" value="fa-chevron-circle-right"><label for="fa-chevron-circle-right"><i class="fa-chevron-circle-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chevron-circle-up" value="fa-chevron-circle-up"><label for="fa-chevron-circle-up"><i class="fa-chevron-circle-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chevron-circle-down" value="fa-chevron-circle-down"><label for="fa-chevron-circle-down"><i class="fa-chevron-circle-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-html5" value="fa-html5"><label for="fa-html5"><i class="fa-html5"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-css3" value="fa-css3"><label for="fa-css3"><i class="fa-css3"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-anchor" value="fa-anchor"><label for="fa-anchor"><i class="fa-anchor"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-unlock-alt" value="fa-unlock-alt"><label for="fa-unlock-alt"><i class="fa-unlock-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bullseye" value="fa-bullseye"><label for="fa-bullseye"><i class="fa-bullseye"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-ellipsis-h" value="fa-ellipsis-h"><label for="fa-ellipsis-h"><i class="fa-ellipsis-h"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-ellipsis-v" value="fa-ellipsis-v"><label for="fa-ellipsis-v"><i class="fa-ellipsis-v"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-rss-square" value="fa-rss-square"><label for="fa-rss-square"><i class="fa-rss-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-play-circle" value="fa-play-circle"><label for="fa-play-circle"><i class="fa-play-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-ticket" value="fa-ticket"><label for="fa-ticket"><i class="fa-ticket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-minus-square" value="fa-minus-square"><label for="fa-minus-square"><i class="fa-minus-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-minus-square-o" value="fa-minus-square-o"><label for="fa-minus-square-o"><i class="fa-minus-square-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-level-up" value="fa-level-up"><label for="fa-level-up"><i class="fa-level-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-level-down" value="fa-level-down"><label for="fa-level-down"><i class="fa-level-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-check-square" value="fa-check-square"><label for="fa-check-square"><i class="fa-check-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pencil-square" value="fa-pencil-square"><label for="fa-pencil-square"><i class="fa-pencil-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-external-link-square" value="fa-external-link-square"><label for="fa-external-link-square"><i class="fa-external-link-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-share-square" value="fa-share-square"><label for="fa-share-square"><i class="fa-share-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-compass" value="fa-compass"><label for="fa-compass"><i class="fa-compass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-toggle-down" value="fa-toggle-down"><label for="fa-toggle-down"><i class="fa-toggle-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-toggle-up" value="fa-toggle-up"><label for="fa-toggle-up"><i class="fa-toggle-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-toggle-right" value="fa-toggle-right"><label for="fa-toggle-right"><i class="fa-toggle-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-euro" value="fa-euro"><label for="fa-euro"><i class="fa-euro"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-gbp" value="fa-gbp"><label for="fa-gbp"><i class="fa-gbp"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-usd" value="fa-usd"><label for="fa-usd"><i class="fa-usd"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-rupee" value="fa-rupee"><label for="fa-rupee"><i class="fa-rupee"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cny" value="fa-cny"><label for="fa-cny"><i class="fa-cny"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-yen" value="fa-yen"><label for="fa-yen"><i class="fa-yen"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-ruble" value="fa-ruble"><label for="fa-ruble"><i class="fa-ruble"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-won" value="fa-won"><label for="fa-won"><i class="fa-won"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-btc" value="fa-btc"><label for="fa-btc"><i class="fa-btc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file" value="fa-file"><label for="fa-file"><i class="fa-file"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-text" value="fa-file-text"><label for="fa-file-text"><i class="fa-file-text"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-alpha-asc" value="fa-sort-alpha-asc"><label for="fa-sort-alpha-asc"><i class="fa-sort-alpha-asc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-alpha-desc" value="fa-sort-alpha-desc"><label for="fa-sort-alpha-desc"><i class="fa-sort-alpha-desc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-amount-asc" value="fa-sort-amount-asc"><label for="fa-sort-amount-asc"><i class="fa-sort-amount-asc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-amount-desc" value="fa-sort-amount-desc"><label for="fa-sort-amount-desc"><i class="fa-sort-amount-desc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-numeric-asc" value="fa-sort-numeric-asc"><label for="fa-sort-numeric-asc"><i class="fa-sort-numeric-asc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sort-numeric-desc" value="fa-sort-numeric-desc"><label for="fa-sort-numeric-desc"><i class="fa-sort-numeric-desc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-thumbs-up" value="fa-thumbs-up"><label for="fa-thumbs-up"><i class="fa-thumbs-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-thumbs-down" value="fa-thumbs-down"><label for="fa-thumbs-down"><i class="fa-thumbs-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-youtube" value="fa-youtube"><label for="fa-youtube"><i class="fa-youtube"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-xing" value="fa-xing"><label for="fa-xing"><i class="fa-xing"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-xing-square" value="fa-xing-square"><label for="fa-xing-square"><i class="fa-xing-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-youtube-play" value="fa-youtube-play"><label for="fa-youtube-play"><i class="fa-youtube-play"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-dropbox" value="fa-dropbox"><label for="fa-dropbox"><i class="fa-dropbox"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-stack-overflow" value="fa-stack-overflow"><label for="fa-stack-overflow"><i class="fa-stack-overflow"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-instagram" value="fa-instagram"><label for="fa-instagram"><i class="fa-instagram"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-flickr" value="fa-flickr"><label for="fa-flickr"><i class="fa-flickr"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-adn" value="fa-adn"><label for="fa-adn"><i class="fa-adn"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bitbucket" value="fa-bitbucket"><label for="fa-bitbucket"><i class="fa-bitbucket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bitbucket-square" value="fa-bitbucket-square"><label for="fa-bitbucket-square"><i class="fa-bitbucket-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tumblr" value="fa-tumblr"><label for="fa-tumblr"><i class="fa-tumblr"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-long-arrow-down" value="fa-long-arrow-down"><label for="fa-long-arrow-down"><i class="fa-long-arrow-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-long-arrow-up" value="fa-long-arrow-up"><label for="fa-long-arrow-up"><i class="fa-long-arrow-up"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-long-arrow-left" value="fa-long-arrow-left"><label for="fa-long-arrow-left"><i class="fa-long-arrow-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-long-arrow-right" value="fa-long-arrow-right"><label for="fa-long-arrow-right"><i class="fa-long-arrow-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-apple" value="fa-apple"><label for="fa-apple"><i class="fa-apple"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-windows" value="fa-windows"><label for="fa-windows"><i class="fa-windows"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-android" value="fa-android"><label for="fa-android"><i class="fa-android"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-linux" value="fa-linux"><label for="fa-linux"><i class="fa-linux"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-dribbble" value="fa-dribbble"><label for="fa-dribbble"><i class="fa-dribbble"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-skype" value="fa-skype"><label for="fa-skype"><i class="fa-skype"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-foursquare" value="fa-foursquare"><label for="fa-foursquare"><i class="fa-foursquare"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-trello" value="fa-trello"><label for="fa-trello"><i class="fa-trello"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-female" value="fa-female"><label for="fa-female"><i class="fa-female"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-male" value="fa-male"><label for="fa-male"><i class="fa-male"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-gratipay" value="fa-gratipay"><label for="fa-gratipay"><i class="fa-gratipay"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sun-o" value="fa-sun-o"><label for="fa-sun-o"><i class="fa-sun-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-moon-o" value="fa-moon-o"><label for="fa-moon-o"><i class="fa-moon-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-archive" value="fa-archive"><label for="fa-archive"><i class="fa-archive"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bug" value="fa-bug"><label for="fa-bug"><i class="fa-bug"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-vk" value="fa-vk"><label for="fa-vk"><i class="fa-vk"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-weibo" value="fa-weibo"><label for="fa-weibo"><i class="fa-weibo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-renren" value="fa-renren"><label for="fa-renren"><i class="fa-renren"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pagelines" value="fa-pagelines"><label for="fa-pagelines"><i class="fa-pagelines"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-stack-exchange" value="fa-stack-exchange"><label for="fa-stack-exchange"><i class="fa-stack-exchange"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-circle-o-right" value="fa-arrow-circle-o-right"><label for="fa-arrow-circle-o-right"><i class="fa-arrow-circle-o-right"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-arrow-circle-o-left" value="fa-arrow-circle-o-left"><label for="fa-arrow-circle-o-left"><i class="fa-arrow-circle-o-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-toggle-left" value="fa-toggle-left"><label for="fa-toggle-left"><i class="fa-toggle-left"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-dot-circle-o" value="fa-dot-circle-o"><label for="fa-dot-circle-o"><i class="fa-dot-circle-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-wheelchair" value="fa-wheelchair"><label for="fa-wheelchair"><i class="fa-wheelchair"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-vimeo-square" value="fa-vimeo-square"><label for="fa-vimeo-square"><i class="fa-vimeo-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-turkish-lira" value="fa-turkish-lira"><label for="fa-turkish-lira"><i class="fa-turkish-lira"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-plus-square-o" value="fa-plus-square-o"><label for="fa-plus-square-o"><i class="fa-plus-square-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-space-shuttle" value="fa-space-shuttle"><label for="fa-space-shuttle"><i class="fa-space-shuttle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-slack" value="fa-slack"><label for="fa-slack"><i class="fa-slack"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-envelope-square" value="fa-envelope-square"><label for="fa-envelope-square"><i class="fa-envelope-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-wordpress" value="fa-wordpress"><label for="fa-wordpress"><i class="fa-wordpress"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-openid" value="fa-openid"><label for="fa-openid"><i class="fa-openid"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-university" value="fa-university"><label for="fa-university"><i class="fa-university"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mortar-board" value="fa-mortar-board"><label for="fa-mortar-board"><i class="fa-mortar-board"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-yahoo" value="fa-yahoo"><label for="fa-yahoo"><i class="fa-yahoo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-google" value="fa-google"><label for="fa-google"><i class="fa-google"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-reddit" value="fa-reddit"><label for="fa-reddit"><i class="fa-reddit"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-stumbleupon-circle" value="fa-stumbleupon-circle"><label for="fa-stumbleupon-circle"><i class="fa-stumbleupon-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-stumbleupon" value="fa-stumbleupon"><label for="fa-stumbleupon"><i class="fa-stumbleupon"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-delicious" value="fa-delicious"><label for="fa-delicious"><i class="fa-delicious"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-digg" value="fa-digg"><label for="fa-digg"><i class="fa-digg"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pied-piper" value="fa-pied-piper"><label for="fa-pied-piper"><i class="fa-pied-piper"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pied-piper-alt" value="fa-pied-piper-alt"><label for="fa-pied-piper-alt"><i class="fa-pied-piper-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-drupal" value="fa-drupal"><label for="fa-drupal"><i class="fa-drupal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-joomla" value="fa-joomla"><label for="fa-joomla"><i class="fa-joomla"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-language" value="fa-language"><label for="fa-language"><i class="fa-language"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-fax" value="fa-fax"><label for="fa-fax"><i class="fa-fax"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-building" value="fa-building"><label for="fa-building"><i class="fa-building"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-child" value="fa-child"><label for="fa-child"><i class="fa-child"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-paw" value="fa-paw"><label for="fa-paw"><i class="fa-paw"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-spoon" value="fa-spoon"><label for="fa-spoon"><i class="fa-spoon"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cube" value="fa-cube"><label for="fa-cube"><i class="fa-cube"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cubes" value="fa-cubes"><label for="fa-cubes"><i class="fa-cubes"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-behance" value="fa-behance"><label for="fa-behance"><i class="fa-behance"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-behance-square" value="fa-behance-square"><label for="fa-behance-square"><i class="fa-behance-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-steam" value="fa-steam"><label for="fa-steam"><i class="fa-steam"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-steam-square" value="fa-steam-square"><label for="fa-steam-square"><i class="fa-steam-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-recycle" value="fa-recycle"><label for="fa-recycle"><i class="fa-recycle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-car" value="fa-car"><label for="fa-car"><i class="fa-car"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-taxi" value="fa-taxi"><label for="fa-taxi"><i class="fa-taxi"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tree" value="fa-tree"><label for="fa-tree"><i class="fa-tree"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-spotify" value="fa-spotify"><label for="fa-spotify"><i class="fa-spotify"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-deviantart" value="fa-deviantart"><label for="fa-deviantart"><i class="fa-deviantart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-soundcloud" value="fa-soundcloud"><label for="fa-soundcloud"><i class="fa-soundcloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-database" value="fa-database"><label for="fa-database"><i class="fa-database"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-pdf-o" value="fa-file-pdf-o"><label for="fa-file-pdf-o"><i class="fa-file-pdf-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-word-o" value="fa-file-word-o"><label for="fa-file-word-o"><i class="fa-file-word-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-excel-o" value="fa-file-excel-o"><label for="fa-file-excel-o"><i class="fa-file-excel-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-powerpoint-o" value="fa-file-powerpoint-o"><label for="fa-file-powerpoint-o"><i class="fa-file-powerpoint-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-picture-o" value="fa-file-picture-o"><label for="fa-file-picture-o"><i class="fa-file-picture-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-zip-o" value="fa-file-zip-o"><label for="fa-file-zip-o"><i class="fa-file-zip-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-sound-o" value="fa-file-sound-o"><label for="fa-file-sound-o"><i class="fa-file-sound-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-video-o" value="fa-file-video-o"><label for="fa-file-video-o"><i class="fa-file-video-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-file-code-o" value="fa-file-code-o"><label for="fa-file-code-o"><i class="fa-file-code-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-vine" value="fa-vine"><label for="fa-vine"><i class="fa-vine"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-codepen" value="fa-codepen"><label for="fa-codepen"><i class="fa-codepen"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-jsfiddle" value="fa-jsfiddle"><label for="fa-jsfiddle"><i class="fa-jsfiddle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-support" value="fa-support"><label for="fa-support"><i class="fa-support"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-circle-o-notch" value="fa-circle-o-notch"><label for="fa-circle-o-notch"><i class="fa-circle-o-notch"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-rebel" value="fa-rebel"><label for="fa-rebel"><i class="fa-rebel"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-ge" value="fa-ge"><label for="fa-ge"><i class="fa-ge"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-git-square" value="fa-git-square"><label for="fa-git-square"><i class="fa-git-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-git" value="fa-git"><label for="fa-git"><i class="fa-git"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-yc-square" value="fa-yc-square"><label for="fa-yc-square"><i class="fa-yc-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tencent-weibo" value="fa-tencent-weibo"><label for="fa-tencent-weibo"><i class="fa-tencent-weibo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-qq" value="fa-qq"><label for="fa-qq"><i class="fa-qq"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-weixin" value="fa-weixin"><label for="fa-weixin"><i class="fa-weixin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-send" value="fa-send"><label for="fa-send"><i class="fa-send"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-send-o" value="fa-send-o"><label for="fa-send-o"><i class="fa-send-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-history" value="fa-history"><label for="fa-history"><i class="fa-history"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-circle-thin" value="fa-circle-thin"><label for="fa-circle-thin"><i class="fa-circle-thin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-header" value="fa-header"><label for="fa-header"><i class="fa-header"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-paragraph" value="fa-paragraph"><label for="fa-paragraph"><i class="fa-paragraph"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sliders" value="fa-sliders"><label for="fa-sliders"><i class="fa-sliders"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-share-alt" value="fa-share-alt"><label for="fa-share-alt"><i class="fa-share-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-share-alt-square" value="fa-share-alt-square"><label for="fa-share-alt-square"><i class="fa-share-alt-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bomb" value="fa-bomb"><label for="fa-bomb"><i class="fa-bomb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-soccer-ball-o" value="fa-soccer-ball-o"><label for="fa-soccer-ball-o"><i class="fa-soccer-ball-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tty" value="fa-tty"><label for="fa-tty"><i class="fa-tty"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-binoculars" value="fa-binoculars"><label for="fa-binoculars"><i class="fa-binoculars"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-plug" value="fa-plug"><label for="fa-plug"><i class="fa-plug"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-slideshare" value="fa-slideshare"><label for="fa-slideshare"><i class="fa-slideshare"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-twitch" value="fa-twitch"><label for="fa-twitch"><i class="fa-twitch"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-yelp" value="fa-yelp"><label for="fa-yelp"><i class="fa-yelp"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-newspaper-o" value="fa-newspaper-o"><label for="fa-newspaper-o"><i class="fa-newspaper-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-wifi" value="fa-wifi"><label for="fa-wifi"><i class="fa-wifi"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-calculator" value="fa-calculator"><label for="fa-calculator"><i class="fa-calculator"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-paypal" value="fa-paypal"><label for="fa-paypal"><i class="fa-paypal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-google-wallet" value="fa-google-wallet"><label for="fa-google-wallet"><i class="fa-google-wallet"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cc-visa" value="fa-cc-visa"><label for="fa-cc-visa"><i class="fa-cc-visa"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cc-mastercard" value="fa-cc-mastercard"><label for="fa-cc-mastercard"><i class="fa-cc-mastercard"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cc-discover" value="fa-cc-discover"><label for="fa-cc-discover"><i class="fa-cc-discover"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cc-amex" value="fa-cc-amex"><label for="fa-cc-amex"><i class="fa-cc-amex"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cc-paypal" value="fa-cc-paypal"><label for="fa-cc-paypal"><i class="fa-cc-paypal"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cc-stripe" value="fa-cc-stripe"><label for="fa-cc-stripe"><i class="fa-cc-stripe"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bell-slash" value="fa-bell-slash"><label for="fa-bell-slash"><i class="fa-bell-slash"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bell-slash-o" value="fa-bell-slash-o"><label for="fa-bell-slash-o"><i class="fa-bell-slash-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-trash" value="fa-trash"><label for="fa-trash"><i class="fa-trash"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-copyright" value="fa-copyright"><label for="fa-copyright"><i class="fa-copyright"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-at" value="fa-at"><label for="fa-at"><i class="fa-at"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-eyedropper" value="fa-eyedropper"><label for="fa-eyedropper"><i class="fa-eyedropper"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-paint-brush" value="fa-paint-brush"><label for="fa-paint-brush"><i class="fa-paint-brush"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-birthday-cake" value="fa-birthday-cake"><label for="fa-birthday-cake"><i class="fa-birthday-cake"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-area-chart" value="fa-area-chart"><label for="fa-area-chart"><i class="fa-area-chart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pie-chart" value="fa-pie-chart"><label for="fa-pie-chart"><i class="fa-pie-chart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-line-chart" value="fa-line-chart"><label for="fa-line-chart"><i class="fa-line-chart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-lastfm" value="fa-lastfm"><label for="fa-lastfm"><i class="fa-lastfm"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-lastfm-square" value="fa-lastfm-square"><label for="fa-lastfm-square"><i class="fa-lastfm-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-toggle-off" value="fa-toggle-off"><label for="fa-toggle-off"><i class="fa-toggle-off"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-toggle-on" value="fa-toggle-on"><label for="fa-toggle-on"><i class="fa-toggle-on"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bicycle" value="fa-bicycle"><label for="fa-bicycle"><i class="fa-bicycle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bus" value="fa-bus"><label for="fa-bus"><i class="fa-bus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-ioxhost" value="fa-ioxhost"><label for="fa-ioxhost"><i class="fa-ioxhost"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-angellist" value="fa-angellist"><label for="fa-angellist"><i class="fa-angellist"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cc" value="fa-cc"><label for="fa-cc"><i class="fa-cc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sheqel" value="fa-sheqel"><label for="fa-sheqel"><i class="fa-sheqel"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-meanpath" value="fa-meanpath"><label for="fa-meanpath"><i class="fa-meanpath"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-buysellads" value="fa-buysellads"><label for="fa-buysellads"><i class="fa-buysellads"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-connectdevelop" value="fa-connectdevelop"><label for="fa-connectdevelop"><i class="fa-connectdevelop"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-dashcube" value="fa-dashcube"><label for="fa-dashcube"><i class="fa-dashcube"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-forumbee" value="fa-forumbee"><label for="fa-forumbee"><i class="fa-forumbee"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-leanpub" value="fa-leanpub"><label for="fa-leanpub"><i class="fa-leanpub"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sellsy" value="fa-sellsy"><label for="fa-sellsy"><i class="fa-sellsy"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-shirtsinbulk" value="fa-shirtsinbulk"><label for="fa-shirtsinbulk"><i class="fa-shirtsinbulk"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-simplybuilt" value="fa-simplybuilt"><label for="fa-simplybuilt"><i class="fa-simplybuilt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-skyatlas" value="fa-skyatlas"><label for="fa-skyatlas"><i class="fa-skyatlas"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cart-plus" value="fa-cart-plus"><label for="fa-cart-plus"><i class="fa-cart-plus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cart-arrow-down" value="fa-cart-arrow-down"><label for="fa-cart-arrow-down"><i class="fa-cart-arrow-down"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-diamond" value="fa-diamond"><label for="fa-diamond"><i class="fa-diamond"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-ship" value="fa-ship"><label for="fa-ship"><i class="fa-ship"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-user-secret" value="fa-user-secret"><label for="fa-user-secret"><i class="fa-user-secret"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-motorcycle" value="fa-motorcycle"><label for="fa-motorcycle"><i class="fa-motorcycle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-street-view" value="fa-street-view"><label for="fa-street-view"><i class="fa-street-view"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-heartbeat" value="fa-heartbeat"><label for="fa-heartbeat"><i class="fa-heartbeat"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-venus" value="fa-venus"><label for="fa-venus"><i class="fa-venus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mars" value="fa-mars"><label for="fa-mars"><i class="fa-mars"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mercury" value="fa-mercury"><label for="fa-mercury"><i class="fa-mercury"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-intersex" value="fa-intersex"><label for="fa-intersex"><i class="fa-intersex"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-transgender" value="fa-transgender"><label for="fa-transgender"><i class="fa-transgender"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-transgender-alt" value="fa-transgender-alt"><label for="fa-transgender-alt"><i class="fa-transgender-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-venus-double" value="fa-venus-double"><label for="fa-venus-double"><i class="fa-venus-double"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mars-double" value="fa-mars-double"><label for="fa-mars-double"><i class="fa-mars-double"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-venus-mars" value="fa-venus-mars"><label for="fa-venus-mars"><i class="fa-venus-mars"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mars-stroke" value="fa-mars-stroke"><label for="fa-mars-stroke"><i class="fa-mars-stroke"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mars-stroke-v" value="fa-mars-stroke-v"><label for="fa-mars-stroke-v"><i class="fa-mars-stroke-v"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mars-stroke-h" value="fa-mars-stroke-h"><label for="fa-mars-stroke-h"><i class="fa-mars-stroke-h"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-neuter" value="fa-neuter"><label for="fa-neuter"><i class="fa-neuter"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-genderless" value="fa-genderless"><label for="fa-genderless"><i class="fa-genderless"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-facebook-official" value="fa-facebook-official"><label for="fa-facebook-official"><i class="fa-facebook-official"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-whatsapp" value="fa-whatsapp"><label for="fa-whatsapp"><i class="fa-whatsapp"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-server" value="fa-server"><label for="fa-server"><i class="fa-server"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-user-plus" value="fa-user-plus"><label for="fa-user-plus"><i class="fa-user-plus"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-user-times" value="fa-user-times"><label for="fa-user-times"><i class="fa-user-times"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hotel" value="fa-hotel"><label for="fa-hotel"><i class="fa-hotel"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-viacoin" value="fa-viacoin"><label for="fa-viacoin"><i class="fa-viacoin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-train" value="fa-train"><label for="fa-train"><i class="fa-train"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-subway" value="fa-subway"><label for="fa-subway"><i class="fa-subway"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-medium" value="fa-medium"><label for="fa-medium"><i class="fa-medium"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-yc" value="fa-yc"><label for="fa-yc"><i class="fa-yc"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-optin-monster" value="fa-optin-monster"><label for="fa-optin-monster"><i class="fa-optin-monster"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-opencart" value="fa-opencart"><label for="fa-opencart"><i class="fa-opencart"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-expeditedssl" value="fa-expeditedssl"><label for="fa-expeditedssl"><i class="fa-expeditedssl"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-battery-full" value="fa-battery-full"><label for="fa-battery-full"><i class="fa-battery-full"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-battery-three-quarters" value="fa-battery-three-quarters"><label for="fa-battery-three-quarters"><i class="fa-battery-three-quarters"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-battery-half" value="fa-battery-half"><label for="fa-battery-half"><i class="fa-battery-half"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-battery-quarter" value="fa-battery-quarter"><label for="fa-battery-quarter"><i class="fa-battery-quarter"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-battery-empty" value="fa-battery-empty"><label for="fa-battery-empty"><i class="fa-battery-empty"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mouse-pointer" value="fa-mouse-pointer"><label for="fa-mouse-pointer"><i class="fa-mouse-pointer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-i-cursor" value="fa-i-cursor"><label for="fa-i-cursor"><i class="fa-i-cursor"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-object-group" value="fa-object-group"><label for="fa-object-group"><i class="fa-object-group"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-object-ungroup" value="fa-object-ungroup"><label for="fa-object-ungroup"><i class="fa-object-ungroup"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sticky-note" value="fa-sticky-note"><label for="fa-sticky-note"><i class="fa-sticky-note"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-sticky-note-o" value="fa-sticky-note-o"><label for="fa-sticky-note-o"><i class="fa-sticky-note-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cc-jcb" value="fa-cc-jcb"><label for="fa-cc-jcb"><i class="fa-cc-jcb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-cc-diners-club" value="fa-cc-diners-club"><label for="fa-cc-diners-club"><i class="fa-cc-diners-club"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-clone" value="fa-clone"><label for="fa-clone"><i class="fa-clone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-balance-scale" value="fa-balance-scale"><label for="fa-balance-scale"><i class="fa-balance-scale"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hourglass-o" value="fa-hourglass-o"><label for="fa-hourglass-o"><i class="fa-hourglass-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hourglass-start" value="fa-hourglass-start"><label for="fa-hourglass-start"><i class="fa-hourglass-start"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hourglass-half" value="fa-hourglass-half"><label for="fa-hourglass-half"><i class="fa-hourglass-half"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hourglass-end" value="fa-hourglass-end"><label for="fa-hourglass-end"><i class="fa-hourglass-end"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hourglass" value="fa-hourglass"><label for="fa-hourglass"><i class="fa-hourglass"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-rock-o" value="fa-hand-rock-o"><label for="fa-hand-rock-o"><i class="fa-hand-rock-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-stop-o" value="fa-hand-stop-o"><label for="fa-hand-stop-o"><i class="fa-hand-stop-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-scissors-o" value="fa-hand-scissors-o"><label for="fa-hand-scissors-o"><i class="fa-hand-scissors-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-lizard-o" value="fa-hand-lizard-o"><label for="fa-hand-lizard-o"><i class="fa-hand-lizard-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-spock-o" value="fa-hand-spock-o"><label for="fa-hand-spock-o"><i class="fa-hand-spock-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-pointer-o" value="fa-hand-pointer-o"><label for="fa-hand-pointer-o"><i class="fa-hand-pointer-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hand-peace-o" value="fa-hand-peace-o"><label for="fa-hand-peace-o"><i class="fa-hand-peace-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-trademark" value="fa-trademark"><label for="fa-trademark"><i class="fa-trademark"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-registered" value="fa-registered"><label for="fa-registered"><i class="fa-registered"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-creative-commons" value="fa-creative-commons"><label for="fa-creative-commons"><i class="fa-creative-commons"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-gg" value="fa-gg"><label for="fa-gg"><i class="fa-gg"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-gg-circle" value="fa-gg-circle"><label for="fa-gg-circle"><i class="fa-gg-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tripadvisor" value="fa-tripadvisor"><label for="fa-tripadvisor"><i class="fa-tripadvisor"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-odnoklassniki" value="fa-odnoklassniki"><label for="fa-odnoklassniki"><i class="fa-odnoklassniki"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-odnoklassniki-square" value="fa-odnoklassniki-square"><label for="fa-odnoklassniki-square"><i class="fa-odnoklassniki-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-get-pocket" value="fa-get-pocket"><label for="fa-get-pocket"><i class="fa-get-pocket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-wikipedia-w" value="fa-wikipedia-w"><label for="fa-wikipedia-w"><i class="fa-wikipedia-w"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-safari" value="fa-safari"><label for="fa-safari"><i class="fa-safari"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-chrome" value="fa-chrome"><label for="fa-chrome"><i class="fa-chrome"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-firefox" value="fa-firefox"><label for="fa-firefox"><i class="fa-firefox"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-opera" value="fa-opera"><label for="fa-opera"><i class="fa-opera"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-internet-explorer" value="fa-internet-explorer"><label for="fa-internet-explorer"><i class="fa-internet-explorer"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-tv" value="fa-tv"><label for="fa-tv"><i class="fa-tv"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-contao" value="fa-contao"><label for="fa-contao"><i class="fa-contao"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-500px" value="fa-500px"><label for="fa-500px"><i class="fa-500px"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-amazon" value="fa-amazon"><label for="fa-amazon"><i class="fa-amazon"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-calendar-plus-o" value="fa-calendar-plus-o"><label for="fa-calendar-plus-o"><i class="fa-calendar-plus-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-calendar-minus-o" value="fa-calendar-minus-o"><label for="fa-calendar-minus-o"><i class="fa-calendar-minus-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-calendar-times-o" value="fa-calendar-times-o"><label for="fa-calendar-times-o"><i class="fa-calendar-times-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-calendar-check-o" value="fa-calendar-check-o"><label for="fa-calendar-check-o"><i class="fa-calendar-check-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-industry" value="fa-industry"><label for="fa-industry"><i class="fa-industry"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-map-pin" value="fa-map-pin"><label for="fa-map-pin"><i class="fa-map-pin"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-map-signs" value="fa-map-signs"><label for="fa-map-signs"><i class="fa-map-signs"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-map-o" value="fa-map-o"><label for="fa-map-o"><i class="fa-map-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-map" value="fa-map"><label for="fa-map"><i class="fa-map"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-commenting" value="fa-commenting"><label for="fa-commenting"><i class="fa-commenting"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-commenting-o" value="fa-commenting-o"><label for="fa-commenting-o"><i class="fa-commenting-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-houzz" value="fa-houzz"><label for="fa-houzz"><i class="fa-houzz"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-vimeo" value="fa-vimeo"><label for="fa-vimeo"><i class="fa-vimeo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-black-tie" value="fa-black-tie"><label for="fa-black-tie"><i class="fa-black-tie"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-fonticons" value="fa-fonticons"><label for="fa-fonticons"><i class="fa-fonticons"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-reddit-alien" value="fa-reddit-alien"><label for="fa-reddit-alien"><i class="fa-reddit-alien"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-edge" value="fa-edge"><label for="fa-edge"><i class="fa-edge"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-credit-card-alt" value="fa-credit-card-alt"><label for="fa-credit-card-alt"><i class="fa-credit-card-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-codiepie" value="fa-codiepie"><label for="fa-codiepie"><i class="fa-codiepie"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-modx" value="fa-modx"><label for="fa-modx"><i class="fa-modx"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-fort-awesome" value="fa-fort-awesome"><label for="fa-fort-awesome"><i class="fa-fort-awesome"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-usb" value="fa-usb"><label for="fa-usb"><i class="fa-usb"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-product-hunt" value="fa-product-hunt"><label for="fa-product-hunt"><i class="fa-product-hunt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-mixcloud" value="fa-mixcloud"><label for="fa-mixcloud"><i class="fa-mixcloud"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-scribd" value="fa-scribd"><label for="fa-scribd"><i class="fa-scribd"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pause-circle" value="fa-pause-circle"><label for="fa-pause-circle"><i class="fa-pause-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-pause-circle-o" value="fa-pause-circle-o"><label for="fa-pause-circle-o"><i class="fa-pause-circle-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-stop-circle" value="fa-stop-circle"><label for="fa-stop-circle"><i class="fa-stop-circle"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-stop-circle-o" value="fa-stop-circle-o"><label for="fa-stop-circle-o"><i class="fa-stop-circle-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-shopping-bag" value="fa-shopping-bag"><label for="fa-shopping-bag"><i class="fa-shopping-bag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-shopping-basket" value="fa-shopping-basket"><label for="fa-shopping-basket"><i class="fa-shopping-basket"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hashtag" value="fa-hashtag"><label for="fa-hashtag"><i class="fa-hashtag"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bluetooth" value="fa-bluetooth"><label for="fa-bluetooth"><i class="fa-bluetooth"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-bluetooth-b" value="fa-bluetooth-b"><label for="fa-bluetooth-b"><i class="fa-bluetooth-b"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-percent" value="fa-percent"><label for="fa-percent"><i class="fa-percent"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-gitlab" value="fa-gitlab"><label for="fa-gitlab"><i class="fa-gitlab"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-wpbeginner" value="fa-wpbeginner"><label for="fa-wpbeginner"><i class="fa-wpbeginner"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-wpforms" value="fa-wpforms"><label for="fa-wpforms"><i class="fa-wpforms"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-envira" value="fa-envira"><label for="fa-envira"><i class="fa-envira"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-universal-access" value="fa-universal-access"><label for="fa-universal-access"><i class="fa-universal-access"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-wheelchair-alt" value="fa-wheelchair-alt"><label for="fa-wheelchair-alt"><i class="fa-wheelchair-alt"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-question-circle-o" value="fa-question-circle-o"><label for="fa-question-circle-o"><i class="fa-question-circle-o"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-blind" value="fa-blind"><label for="fa-blind"><i class="fa-blind"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-audio-description" value="fa-audio-description"><label for="fa-audio-description"><i class="fa-audio-description"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-volume-control-phone" value="fa-volume-control-phone"><label for="fa-volume-control-phone"><i class="fa-volume-control-phone"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-braille" value="fa-braille"><label for="fa-braille"><i class="fa-braille"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-assistive-listening-systems" value="fa-assistive-listening-systems"><label for="fa-assistive-listening-systems"><i class="fa-assistive-listening-systems"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-american-sign-language-interpreting" value="fa-american-sign-language-interpreting"><label for="fa-american-sign-language-interpreting"><i class="fa-american-sign-language-interpreting"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-hard-of-hearing" value="fa-hard-of-hearing"><label for="fa-hard-of-hearing"><i class="fa-hard-of-hearing"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-glide" value="fa-glide"><label for="fa-glide"><i class="fa-glide"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-glide-g" value="fa-glide-g"><label for="fa-glide-g"><i class="fa-glide-g"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-signing" value="fa-signing"><label for="fa-signing"><i class="fa-signing"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-low-vision" value="fa-low-vision"><label for="fa-low-vision"><i class="fa-low-vision"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-viadeo" value="fa-viadeo"><label for="fa-viadeo"><i class="fa-viadeo"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-viadeo-square" value="fa-viadeo-square"><label for="fa-viadeo-square"><i class="fa-viadeo-square"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-snapchat" value="fa-snapchat"><label for="fa-snapchat"><i class="fa-snapchat"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-snapchat-ghost" value="fa-snapchat-ghost"><label for="fa-snapchat-ghost"><i class="fa-snapchat-ghost"></i></label></li>
			<li><input type="radio" name="iconfonts_name" id="fa-snapchat-square" value="fa-snapchat-square"><label for="fa-snapchat-square"><i class="fa-snapchat-square"></i></label></li>
		</ul>
	</div>
	</div><script type="text/javascript">jQuery(document).ready(function(){  var val = jQuery("#pa_icomoon_textbox").val();  jQuery("#"+val).trigger("click"); });</script>';

	return $out;
}

if ( class_exists( 'Vc_Manager' ) ) :
	vc_add_shortcode_param('pa_iconfonts', 'pa_icomoon_composer');
endif;