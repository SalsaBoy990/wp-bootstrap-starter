UPDATE wp_options SET option_value = replace(option_value, 'https://www.YOUR-DOMAIN-NAME.local', 'https://YOUR-DOMAIN-NAME.com') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE wp_posts SET guid = replace(guid, 'https://YOUR-DOMAIN-NAME.local','https://YOUR-DOMAIN-NAME.com');

UPDATE wp_posts SET post_content = replace(post_content, 'https://YOUR-DOMAIN-NAME.local', 'https://YOUR-DOMAIN-NAME.com');

UPDATE wp_postmeta SET meta_value = replace(meta_value,'https://YOUR-DOMAIN-NAME.local','https://YOUR-DOMAIN-NAME.com');

UPDATE wp_users SET user_url = replace(user_url,'https://YOUR-DOMAIN-NAME.local','https://YOUR-DOMAIN-NAME.com');

UPDATE wp_wc_admin_note_actions SET query = replace(query,'https://YOUR-DOMAIN-NAME.local','https://YOUR-DOMAIN-NAME.com');