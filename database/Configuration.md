```sql
CREATE TABLE `configuration`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
    `faveicon` varchar(256) null,
	`author` varchar(100) null,
	`description` text null,
	`title` varchar(100) null,
	`logo_white` varchar(256) null,
	`logo_black` varchar(256) null,
	`hero_background_image` varchar(256) null,
	`hero_text1` varchar(256) null,
	`hero_text2` varchar(256) null,
	`hero_text_button1` varchar(100) null,
	`demo_url` text null,
	`hero_text_button2` varchar(100) null,
	`hero_banner_image` varchar(256) null,
	`service_text1` varchar(256) null,
	`service_text2` varchar(256) null,
	`service_background_image` varchar(256) null,
	`pricing_text1` varchar(256) null,
	`pricing_text2` varchar(256) null,
	`pricing_text3` text null,
	`pricing_text_button_daily` varchar(100) null,
	`pricing_text_button_monthly` varchar(100) null,
	`pricing_text_button_yearly` varchar(100) null,
	`pricing_text1_daily` varchar(256) null,
	`pricing_text2_daily` varchar(256) null,
	`pricing_text3_daily` varchar(256) null,
	`pricing_text4_daily` varchar(256) null,
	`pricing_text_button_trial` varchar(100) null,
	`pricing_text1_monthly` varchar(256) null,
	`pricing_text2_monthly` varchar(256) null,
	`pricing_text3_monthly` varchar(256) null,
	`pricing_text4_monthly` varchar(256) null,
	`pricing_text1_yearly` varchar(256) null,
	`pricing_text2_yearly` varchar(256) null,
	`pricing_text3_yearly` varchar(256) null,
	`pricing_text4_yearly` varchar(256) null,
	`subscribe_text1` varchar(256) null,
	`subscribe_text2` varchar(256) null,
	`subscribe_text3` varchar(256) null,
	`subscribe_text_button1` varchar(100) null,
	`subscribe_text_watch_demo` varchar(256) null,
	`brand_text1` varchar(256) null,
	`brand_text2` varchar(256) null,
	`footer_text1` varchar(256) null,
	`copyright` varchar(256) null
)
```