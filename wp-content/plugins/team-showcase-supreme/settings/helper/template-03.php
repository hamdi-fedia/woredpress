<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery("#wpm_effect_appearance").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_03:hover { transform:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_image_radius").on("change", function () {
            var value = jQuery(this).val() + "%";
            jQuery("<style type='text/css'>.wpm_6310_team_style_03 { border-radius:" + value + "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value + "; -webkit-border-radius:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_border_width").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_03 { border-width:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_border_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_03  { border-color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_image_hover_background").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_03:hover .wpm_6310_team_style_03_caption { background:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_box_shadow_width, #wpm_box_shadow_blur, #wpm_box_shadow_color").on("change", function () {
            var spread = jQuery("#wpm_box_shadow_width").val() + "px";
            var blur = (parseInt(jQuery("#wpm_box_shadow_blur").val()) * 2) + "px";
            var color = jQuery("#wpm_box_shadow_color").val().replace(/\+/g, ' ');
            color = color.split(':');
            jQuery("<style type='text/css'> .wpm_6310_team_style_03 { box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -moz-box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -webkit-box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -ms-box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -o-box-shadow: 0 0 " + blur + " " + spread + " " + color + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_font_size").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_03 .wpm_6310_team_style_03_title { font-size:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });

        jQuery("#wpm_member_font_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_03 .wpm_6310_team_style_03_title, .wpm_6310_team_style_03 .wpm_6310_team_style_03_title a { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_font_hover_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_03:hover .wpm_6310_team_style_03_title { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_font_weight").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_03 .wpm_6310_team_style_03_title { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_member_text_transform").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>.wpm_6310_team_style_03 .wpm_6310_team_style_03_title { text-transform:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_jquery_heading_font").on("change", function () {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.wpm_6310_team_style_03 .wpm_6310_team_style_03_title { font-family:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_heading_line_height").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_03 .wpm_6310_team_style_03_title { line-height:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_font_size").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_03_designation { font-size:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_font_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_03_designation { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_font_hover_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_03:hover .wpm_6310_team_style_03_designation { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });

        jQuery("#wpm_designation_font_weight").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_03_designation { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_text_transform").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .wpm_6310_team_style_03_designation { text-transform:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_jquery_designation_font").on("change", function () {
            var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>.wpm_6310_team_style_03_designation { font-family:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_designation_line_height").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_03_designation { line-height:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#social_from_content").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.wpm_6310_team_style_03_designation { padding-bottom:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_icon_width").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_03 .wpm_6310_team_style_03_social li a { width:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_icon_height").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'> .wpm_6310_team_style_03 .wpm_6310_team_style_03_social li a { height:" + value + "; line-height:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_border_width").on("change", function () {
            var value = jQuery(this).val() + "px !important";
            jQuery("<style type='text/css'>.wpm_6310_team_style_03 .wpm_6310_team_style_03_social li a { border-width:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
        jQuery("#wpm_social_border_radius").on("change", function () {
            var value = jQuery(this).val() + "%";
            jQuery("<style type='text/css'> .wpm_6310_team_style_03 .wpm_6310_team_style_03_social li a { border-radius:" + value + "; -moz-border-radius:" + value + "; -webkit-border-radius:" + value + "; -o-border-radius:" + value + "; -ms-border-radius:" + value + "; } </style>").appendTo(".wpm_6310_tabs_panel_preview");
        });
    });
</script>
