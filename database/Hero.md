```sql
CREATE TABLE `hero`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`background_image` varchar(256) null,
	`text1` varchar(400) null,
	`text2` varchar(400) null,
	`text_button1` varchar(256) null,
	`demo_url` varchar(400) null,
	`text_button2` varchar(256) null,
	`banner_image` varchar(256) null,
	`dot_image1` varchar(256) null,
	`dot_image2` varchar(256) null
)
```