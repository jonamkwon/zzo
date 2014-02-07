<?php




class DealInfoDetailKo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $deal_id;
     
    /**
     *
     * @var string
     */
    public $main_name;
     
    /**
     *
     * @var string
     */
    public $name;
     
    /**
     *
     * @var string
     */
    public $special_name;
     
    /**
     *
     * @var string
     */
    public $onecut_name;
     
    /**
     *
     * @var string
     */
    public $contents;
     
    /**
     *
     * @var string
     */
    public $img_onecut;
     
    /**
     *
     * @var string
     */
    public $img_teaser;
     
    /**
     *
     * @var string
     */
    public $img_teaser2;
     
    /**
     *
     * @var string
     */
    public $img_point;
     
    /**
     *
     * @var string
     */
    public $img_detail;
     
    /**
     *
     * @var string
     */
    public $img_detail1;
     
    /**
     *
     * @var string
     */
    public $img_detail2;
     
    /**
     *
     * @var string
     */
    public $img_detail3;
     
    /**
     *
     * @var string
     */
    public $img_addr;
     
    /**
     *
     * @var string
     */
    public $img_addr_print;
     
    /**
     *
     * @var string
     */
    public $img_background;
     
    /**
     *
     * @var string
     */
    public $img_thumb;
     
    /**
     *
     * @var string
     */
    public $img_thumb_on;
     
    /**
     *
     * @var string
     */
    public $img_thumb_off;
     
    /**
     *
     * @var string
     */
    public $img_blind_on;
     
    /**
     *
     * @var string
     */
    public $img_blind_off;
     
    /**
     *
     * @var string
     */
    public $img_email;
     
    /**
     *
     * @var string
     */
    public $img_logo;
     
    /**
     *
     * @var string
     */
    public $img_banner1;
     
    /**
     *
     * @var string
     */
    public $img_banner2;
     
    /**
     *
     * @var string
     */
    public $img_banner3;
     
    /**
     *
     * @var string
     */
    public $img_banner4;
     
    /**
     *
     * @var string
     */
    public $img_banner5;
     
    /**
     *
     * @var string
     */
    public $color_bg;
     
    /**
     *
     * @var string
     */
    public $addr_location;
     
    /**
     *
     * @var string
     */
    public $addr_comment;
     
    /**
     *
     * @var string
     */
    public $notice_usage;
     
    /**
     *
     * @var string
     */
    public $notice_deal;
     
    /**
     *
     * @var string
     */
    public $comment_md;
     
    /**
     *
     * @var string
     */
    public $comment_md_event;
     
    /**
     *
     * @var string
     */
    public $comment_seller;
     
    /**
     *
     * @var string
     */
    public $comment_detail;
     
    /**
     *
     * @var string
     */
    public $special_info;
     
    /**
     *
     * @var string
     */
    public $comment_inside;
     
    /**
     *
     * @var string
     */
    public $img_thumb1;
     
    /**
     *
     * @var string
     */
    public $img_thumb2;
     
    /**
     *
     * @var string
     */
    public $img_thumb3;
     
    /**
     *
     * @var string
     */
    public $img_thumb4;
     
    /**
     *
     * @var string
     */
    public $img_thumb5;
     
    /**
     *
     * @var string
     */
    public $img_thumb6;
     
    /**
     *
     * @var string
     */
    public $img_app_onecut;
     
    /**
     *
     * @var string
     */
    public $img_deal_list;
     
    /**
     *
     * @var string
     */
    public $ad_name;
     
    /**
     *
     * @var string
     */
    public $ad_blind_name;
     
    /**
     *
     * @var string
     */
    public $ad_short_desc;
     
    /**
     *
     * @var string
     */
    public $ad_blind_short_desc;
     
    /**
     *
     * @var integer
     */
    public $blind_focus_type;
     
    /**
     *
     * @var string
     */
    public $line_summary;
     
    /**
     *
     * @var string
     */
    public $deal_construction;
     
    /**
     *
     * @var string
     */
    public $offline_etc_memo;
     
    /**
     *
     * @var string
     */
    public $highlight_color;
     
    /**
     *
     * @var string
     */
    public $deal_kind_string;
     
    /**
     *
     * @var string
     */
    public $coupon_message_text;
     
    /**
     *
     * @var string
     */
    public $img_deal_list1;
     
    /**
     *
     * @var string
     */
    public $img_deal_list2;
     
    /**
     *
     * @var integer
     */
    public $display_loc_no;
     
    /**
     *
     * @var string
     */
    public $display_loc_name;
     
    /**
     *
     * @var string
     */
    public $img_logo_blind;
     
    /**
     *
     * @var string
     */
    public $img_app_onecut_blind;
     
    /**
     *
     * @var string
     */
    public $img_deal_list1_blind;
     
    /**
     *
     * @var string
     */
    public $img_deal_list2_blind;
     
    /**
     *
     * @var integer
     */
    public $passenger_flag;
     
    /**
     *
     * @var string
     */
    public $caution_text;
     
    /**
     *
     * @var string
     */
    public $access_flag;
     
    /**
     *
     * @var string
     */
    public $refund_sale_duration_flag;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'deal_id' => 'deal_id', 
            'main_name' => 'main_name', 
            'name' => 'name', 
            'special_name' => 'special_name', 
            'onecut_name' => 'onecut_name', 
            'contents' => 'contents', 
            'img_onecut' => 'img_onecut', 
            'img_teaser' => 'img_teaser', 
            'img_teaser2' => 'img_teaser2', 
            'img_point' => 'img_point', 
            'img_detail' => 'img_detail', 
            'img_detail1' => 'img_detail1', 
            'img_detail2' => 'img_detail2', 
            'img_detail3' => 'img_detail3', 
            'img_addr' => 'img_addr', 
            'img_addr_print' => 'img_addr_print', 
            'img_background' => 'img_background', 
            'img_thumb' => 'img_thumb', 
            'img_thumb_on' => 'img_thumb_on', 
            'img_thumb_off' => 'img_thumb_off', 
            'img_blind_on' => 'img_blind_on', 
            'img_blind_off' => 'img_blind_off', 
            'img_email' => 'img_email', 
            'img_logo' => 'img_logo', 
            'img_banner1' => 'img_banner1', 
            'img_banner2' => 'img_banner2', 
            'img_banner3' => 'img_banner3', 
            'img_banner4' => 'img_banner4', 
            'img_banner5' => 'img_banner5', 
            'color_bg' => 'color_bg', 
            'addr_location' => 'addr_location', 
            'addr_comment' => 'addr_comment', 
            'notice_usage' => 'notice_usage', 
            'notice_deal' => 'notice_deal', 
            'comment_md' => 'comment_md', 
            'comment_md_event' => 'comment_md_event', 
            'comment_seller' => 'comment_seller', 
            'comment_detail' => 'comment_detail', 
            'special_info' => 'special_info', 
            'comment_inside' => 'comment_inside', 
            'img_thumb1' => 'img_thumb1', 
            'img_thumb2' => 'img_thumb2', 
            'img_thumb3' => 'img_thumb3', 
            'img_thumb4' => 'img_thumb4', 
            'img_thumb5' => 'img_thumb5', 
            'img_thumb6' => 'img_thumb6', 
            'img_app_onecut' => 'img_app_onecut', 
            'img_deal_list' => 'img_deal_list', 
            'ad_name' => 'ad_name', 
            'ad_blind_name' => 'ad_blind_name', 
            'ad_short_desc' => 'ad_short_desc', 
            'ad_blind_short_desc' => 'ad_blind_short_desc', 
            'blind_focus_type' => 'blind_focus_type', 
            'line_summary' => 'line_summary', 
            'deal_construction' => 'deal_construction', 
            'offline_etc_memo' => 'offline_etc_memo', 
            'highlight_color' => 'highlight_color', 
            'deal_kind_string' => 'deal_kind_string', 
            'coupon_message_text' => 'coupon_message_text', 
            'img_deal_list1' => 'img_deal_list1', 
            'img_deal_list2' => 'img_deal_list2', 
            'display_loc_no' => 'display_loc_no', 
            'display_loc_name' => 'display_loc_name', 
            'img_logo_blind' => 'img_logo_blind', 
            'img_app_onecut_blind' => 'img_app_onecut_blind', 
            'img_deal_list1_blind' => 'img_deal_list1_blind', 
            'img_deal_list2_blind' => 'img_deal_list2_blind', 
            'passenger_flag' => 'passenger_flag', 
            'caution_text' => 'caution_text', 
            'access_flag' => 'access_flag', 
            'refund_sale_duration_flag' => 'refund_sale_duration_flag'
        );
    }

}
