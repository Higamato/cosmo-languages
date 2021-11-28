<?php
return [
/**
 * @TranslationFile ENGLISH
 * @authors Morgan, Zeo
 * @helpers [
        https://morgan-lee.cc - English / Base Translations
        https://zeodev.cc - Dutch
        https://steamcommunity.com/id/higamato/ - Turkish
    ],
 * @file cosmo.php
 * @version 1.0.0

 * Welcome Translator!
 * Thank you for being one of the very few people willing to translate our new addon Cosmo.
 * This translation file is the only one you'll need to translate, as everything you need is located below.
 * Please take your time to ensure everything is correct and appropriate.
 * Upon sending this file back to the authors, please make sure to add your name next to the @helpers property so you can be properly credited.
 * With any notification messages and or success messages, please feel free to come up with your own slogan as long as it sends the same message.
 * if you see a string with a comment next to it, that's to give you more context.
 * Any string with a :variable name is referring to the variable passed into the message. (LEAVE THE VARIABLES)

 * How to translate
 * You'll see two strings, please only translate the string on the right side of the arrow as seen below
 * 'search' => 'ENTER YOUR TRANSLATION HERE',
 * Please also make sure that all of the strings you edit end with a comma (,)
 * If you need to use an apostrophe (') please escape it with a backslash (\) as seen below
 * 'example' => 'You\'re awesome!',
 **/

// TRANSLATIONS START //

    // Dark Rewrite
    'dxrk' => [
        'steam_title' => 'Steam Grup Istatistikleri',
        'steam_desc' => 'Gün geçtikçe büyüyen steam grubumuza katılmak için :here \'a tıkla',
        'join_server' => 'Sunucuya Katıl',
    ],


    'errors' => [
        'no_api_key' => 'Steam API key ayarlanmamış',
        'failed' => 'Sunucu bilgilerini almak başarısız oldu.'
    ],

    'navbar' => [
        'profile' => 'Profil',
        'visit_profile' => 'Profilinizi ziyaret edin ve güncelleyin!',

        'management' => 'Yönetim',
        'manage_cosmo' => 'Cosmo\'yu admin olarak ayarla.',

        'logout' => 'Çıkış',
        'login' => 'Giriş',

        'welcome_back' => 'Tekrar Hoşgeldin, :username',
        'notifications' => 'Bildirimler'
    ],


    'core' => [
        'home' => 'Anasayfa',
        'staff' => 'Yetkili',
        'threads' => 'Konular',
        'browse_threads' => 'Bütün Konuları Görüntüle',
        'viewing_thread' => 'Konu Görüntüleniyor',
        'forums' => 'Forumlar',
        'terms' => 'Kullanım Şartları',
        'store' => 'Mağaza',
        'success' => 'Başarılı!',
        'failed' => 'Başarısız!',
        'checkout' => 'Ödeme',
        'users' => 'Kullanıcılar',
        'board' => 'Pano',
        'edit' => 'Düzenle',

        'licensed_to' => ':licensee üzerine lisanslı',
        'created_by' => ':author tarafından yapıldı',

        'theme_specific' => [
            'group_members' => 'Grup Üyeleri',
            'online_members' => 'Çevrimiçi Üyeler',
            'in-game_members' => 'Oyuniçi Üyeler',
            'join_steam-group' => 'Steam grubumuza katıl',
            'players_online' => 'Çevrimiçi Oyuncular',
            'join_servers' => 'Sunucularımız <span>Katıl</span>',
            'join_discord' => 'Discordumuza <span>Katıl</span>',
        ],

        'confirmation' => 'Emin misin?',
        'cancel' => 'Iptal',
    ],

    'store' => [
        'browse_packages' => ':server sunucusu için paketlere gözat!',
        'checkout' => 'Ödeme',
        'permanent' => 'Kalıcı',
        'non-permanent' => 'Geçici',
        'login_to-checkout' => 'Ödeme için giriş yap',

        'coupon-code' => 'Kupon Kodu',
        'enter_coupon-code' => 'Kupon Kodu Gir',
        'gift-purchase' => 'Hediye olarak satın al',
        'enter_steamId' => 'Steam ID Gir',

        'finalize_purchase' => 'Alışverişini tamamla',
        'tos_agree' => 'Bu vesile ile bizim <a href="'.route('store.tos').'">Kullanım Şartlarımızı</a> kabul ediyorsun', // Translate around the link
        'checkout_with-paypal' => 'Paypal Ile Öde',

        'complete_purchase' => 'Alışverişini tamamla',
        'checking_out-package' => 'You are checking out :package', //"You are checking out package: VIP"
        'package_price' => 'Package Price',

        'sub-total' => 'Ara Toplam',
        'total' => 'Toplam: :sign:price',
        'servers' => 'Sunucular',

        'monthly_goal' => 'Aylık Bağış Hedefi',
        'table' => [
            'top_donations' => 'En Yüksek Bağışlar',
            'recent_donations' => 'En Yeni Bağışlar',
            'name' => 'Isim',
            'amount' => 'Miktar',
            'package' => 'Paket',
        ],

        'select_server' => 'Gözat',
        'store_select_server' => 'Gözat',

        'success' => [
            'success' => 'Ödeme Başarılı!',
            'msg' => 'Yakında paketin eline geçer...'
        ],
        'fail' => [
            'fail' => 'Ödeme Başarısız!',
            'msg' => 'Ödeme başarısız.... lütfen tekrar deneyiniz',
        ],

        'cancel' => [
            'cancel' => 'Ödeme Iptal Edildi!',
            'msg' => 'Ödemen başarıyla iptal edildi'
        ],

        'sale' => [
            'time-left' => 'Kalan Zaman: :time',
            'info' => '<b>Çabuk ol</b> ve indirimdeki ürünleri kap! <span>:percentage% Indirimli</span>',
            'go_to_store' => 'MAĞAZAYA GIT',
        ],
    ],

    'forums' => [
        'polls' => 'Anketler',
        'polls_desc' => 'Toplulukta söz sahibi ol ',
        'unanswered_polls' => 'Cevaplanmış Anketler',

        'search' => 'Araştır',
        'search_desc' => 'Forumlara gözat!',

        'recent_activity' => 'Son Etkinlik',
        'recent_desc' => 'Komünitemizin son aktivitesi',

        'latest_threads' => 'Son Konular',
        'latest_threads-desc' => 'Komünitemizin son konuları',

        'latest_posts' => 'Son Gönderiler',
        'latest_posts-desc' => 'Komünitemizin son gönderileri',

        'replies' => 'Cevaplar',

        'threads' => [
            'locked' => 'KILITLENMIS',
            'pinned' => 'SABITLENMIS',

            'edit_thread' => 'Konuyu düzenle',
            'editing_thread' => 'Konu Düzenleniyor',
            'pin_thread' => 'Konuyu Sabitle',
            'unpin_thread' => 'Konunun Sabitlemesini Kaldır',
            'lock_thread' => 'Konuyu Kilitle',
            'unlock_thread' => 'Konunun Kilidini Aç',
            'move_thread' => 'Konuyu Taşı',
            'delete_thread'=> 'Konuyu Sil',

            'create_thread' => 'Konu Aç',
            'update_thread' => 'Konuyu Güncelle',
            'thread_title' => 'Konu Başlığı',
            'post_reply' => 'Gönder',

            'created_at' => 'Oluşturulma Tarihi ',

            'posted_by' => 'Gönderen Kişi: ',

            'locked_no_reply' => 'Bu konu kilitlenmiş. Artık bu konuyu cevaplayamazsın!',
        ],
        'posts' => [
            'editing_post' => 'Gönderi Düzenleniyor',
            'update_post' => 'Gönderiyi Güncelle',
            'delete_post' => 'Gönderiyi Sil'
        ]
    ],

    'users' => [
        'search_users' => 'Kullanıcı Ara...',
        'no_users-found' => 'Kullanıcı bulunamadı',

        'pills' => [
            'home'=> 'Anasayfa',
            'comments' => 'Yorumlar',
            'threads' => 'Konular',
            'achievements' => 'Başarımlar',
            'edit' => 'Profili Düzenle',
        ],

        'welcome_to_profile' => 'Profilime hoşgeldin!',

        'user_joined' => 'Kullanıcı Katıldı',
        'comment' => 'Yorum At',
        'editing_comment' => 'Yorum Düzenleniyor',

        'edit' => [
            'display_name' => 'Gözüken Isim',
            'avatar_image' => 'Avatar Fotoğrafı',
            'background_image' => 'Arkaplan Fotoğrafı',
            'biography' => 'Biyografi',
            'signature' => 'Imza',
            'sync_steam' => 'Steam ile eşleştir',
            'sync_discord' => 'Discord ile eşleştir',
        ],

        'achievements' => [
            'unlock_more' => 'Daha fazlasını aç...',
            'default' => 'Daha fazla başarım açmak için forumları ve diğer özellkleri kullanmaya devam et.',
            'achievement_unlocked' => 'This achievement was unlocked' // "This achievement was unlocked" 1 day ago
        ],
    ],

    'actions' => [
        'close' => 'Kapat',
        'save_changes' => 'Değişiklikleri Kaydet',
        'go_back' => 'Geri Git',
        'submit' => 'Gönder',
        'post' => 'Gönder',
        'create' => 'Oluştur',
        'update' => 'Güncelle',
        'delete' => 'Sil'
    ],

    'notifications' => [
        'new_notif' => 'YENI',
        'notifications' => 'Bildirimler',
        'mark_all_as_read' => 'Hepsini okundu işaretle',
        'delete_all' => 'Hepsini Sil',
        'no_notifications' => 'Hiç bir bildirimin yok',

        'reply_to_thread' => ':username senin konuna cevap verdi',
        'unlocked_achievement' => ':achievement başarımını açtın',
        'profile_comment' => ':username profiline yorum bıraktı!',
        'profile_like' => ':username profiline :state yaptı!',
        'thread_action' => ':admin senin :title başlıklı konunu :action',
        'manage' => 'Muhteşem bildirimlerini yönet',
    ],

    'toastr_alerts' => [
        'marked_notifications' => 'Bütün bildirimlerini okundu olarak işaretledin!',
        'cleared_notifications' => 'Bütün bildirimlerini sildin!',

        'update_post' => 'Gönderi başarı ile güncellendi',
        'delete_post' => 'Gönderi başarı ile silindi',

        'create_thread' => 'Başarıyla yeni konu oluşturuldu',
        'update_thread' => 'Başarıyla konu güncellendi',
        'delete_thread' => 'Başarıyla konu silindi!',
        'pin_thread' => 'Başarıyla konu sabitlendi!',
        'unpin_thread' => 'Başarıyla konunun sabiti kaldırıldı!',
        'lock_thread' => 'Başarıyla konu kilitlendi!',
        'unlock_thread' => 'Başarıyla konunun kilidi açıldı!',
        'move_thread' => 'Başarıyla konu taşındı!',

        'application_cache' => 'Uygulama önbelleği temizlendi!',

        'create_board' => 'Başarıyla pano oluşturuldu',
        'update_board' => 'Başarıyla pano güncellendi',
        'delete_board' => 'Başarıyla pano silindi!',
        'move_board' => 'Başarıyla panolar sıralandı!',

        'create_category' => 'Başarıyla yeni katagori oluşturuldu',
        'update_category' => 'Başarıyla katagori güncellendi',
        'delete_category' => 'Başarıyla katagori silindi!',

        'create_poll' => 'Başarıyla yeni anket başlatıldı',
        'update_poll' => 'Başarıyla anket güncellendi',
        'delete_poll' => 'Başarıyla anket silindi!',
        'open_poll' => 'Başarıyla anketin durumu açık olarak ayarlandı!',
        'close_poll' => 'Başarıyla anketin durumu kapalı olarak ayarlandı!',

        'update_configurations' => 'Başarıyla bütün genel konfigürasyonlar güncellendi!',
        'update_meta' => 'Başarıyla bütün meta konfigürasyonlar güncellendi!',
        'update_integration' => 'Başarıyla bütün entagrasyon konfirigasyonları güncellendi!',
        'update_theme' => 'Başarıyla global tema güncellendi!',
        'update_settings' => 'Başarıyla bütün mağaza konfigürasyonları güncellendi!',
        'update_tos' => 'Başarıyla Kullanım Şartları güncellendi!',

        'create_role' => 'Başarıyla yeni rol oluşturuldu',
        'update_role' => 'Başarıyla rol güncellendi!',
        'delete_role' => 'Başarıyla rol silindi!',

        'update_user' => 'Başarıyla kullanıcı güncellendi!',

        'create_feature' => 'Başarıyla yeni özellik oluşturuldu!',
        'update_feature' => 'Başarıyla özellik güncellendi!',
        'delete_feature' => 'Başarıyla özellik silindi!',

        'create_footer-link' => 'Başarıyla yeni footer link oluşturuldu!',
        'update_footer-link' => 'Başarıyla footer link güncellendi!',
        'delete_footer-link' => 'Başarıyla footer link silindi!',

        'create_nav-link' => 'Başarıyla yeni navigasyon linki oluşturuldu!',
        'update_nav-link' => 'Başarıyla navigasyon linki güncellendi!',
        'delete_nav-link' => 'Başarıyla navigasyon linki silindi',

        'create_server' => 'Başarıyla yeni sunucu oluşturuldu!',
        'update_server' => 'Başarıyla sunucu güncellendi!',
        'delete_server' => 'Başarıyla sunucu silindi!',

        'create_coupon' => 'Başarıyla yeni kupon kodu oluşturuldu!',
        'update_coupon' => 'Başarıyla kupon kodu güncellendi!',
        'delete_coupon' => 'Başarıyla kupon kodu silindi!',

        'invalid_coupon-code' => 'Bu kupon kodu geçersiz!',
        'unusable_coupon-code' => 'Bu kupon kodu bu pakette kullanılamaz!',
        'invalid_gift-steamId' => 'SteamID geçersiz!',

        'create_package' => 'Başarıyla yeni mağaza paketi oluşturuldu!',
        'update_package' => 'Başarıyla paket güncellendi!',
        'delete_package' => 'Başarıyla paket silindi!',

        'create_sale' => 'Başarıyla yeni mağaza indirimi eklendi',
        'update_sale' => 'Başarıyla mağaza indirimi güncellendi!',
        'delete_sale' => 'Başarıyla mağaza indirimi silindi!',

        'create_comment' => 'Başarıyla yorum gönderildi!',
        'update_comment' => 'Başarıyla yorum güncellendi!',
        'delete_comment' => 'Başarıyla yorum silindi!',

        'like_own_profile' => 'Üzgünüm, kendi profilini beğenemezsin :)',
        'remove_like' => 'Başarıyla :username kişisinin profilindeki beğenmenizi geri çektiniz!',
        'create_like' => 'Başarıyla :username kişisinin profilini beğendiniz!',

        'update_profile' => 'Profil başarıyla güncellendi!',
    ],


    'management' => [
        'navigation' => [
            'dashboard' => 'Panel',

            'general' => 'Genel',
            'configuration' => 'Konfigrasyonlar',
            'meta' => 'Meta',
            'users' => 'Kullanıcılar',
            'roles' => 'Rolller',

            'index' => 'Index',
            'components' => [
                'components' => 'Bileşenler',
                'nav-links' => 'Nav Linkleri',
                'features' => 'Özellikler',
                'servers' => 'Sunucular',
                'integrations' => 'Entegrasyonlar',
                'footer-links' => 'Footer Linkleri'
            ],
            'theme' => 'Tema',

            'forums' => 'Forumlar',
            'categories' => 'Kategoriler',
            'boards' => 'Panolar',
            'polls' => 'Anketler',

            'store' => 'Mağaza',
            'settings' => 'Ayarlar',
            'packages' => [
                'packages' => 'Paketler',
                'create' => 'Oluştur',
                'manage' => 'Yönet'
            ],
            'coupon_code' => 'Kupon Kodu',
            'sales' => 'Indirimler',
            'tos' => 'TOS',
            'transactions' => 'İşlemler',
            'profile' => 'Profil',
            'exit_management' => 'Yönetmeden Çık',
            'logout' => 'Çıkış Yap',
        ],

        'core' => [
            'clear_cache' => 'Önbelleği temizle',
            'check_for_updates' => 'Güncellemeleri kontrol et',

            'dashboard_title' => 'Panel',
            'dashboard_small' => 'Sayfa Istatistikleri',

            'configurations_title' => 'Konfigürasyonlar',
            'configurations_small' => 'Konfigürasyonları Yönet',

            'meta_title' => 'Meta',
            'meta_small' => 'Sitenin Meta\'sını yönet',

            'users_title' => 'Kullanıcılar',
            'users_small' => 'Kullanıcılar Yönet',
            'users_search' => 'Kullanıcı Ara...',
            'users_role' => 'Rol',

            'create_new_role' => 'Yeni rol oluştur',
            'roles_role-name' => 'Rol Ismi',
            'roles_role-display' => 'Rol Görüntüsü',
            'roles_role-color' => 'Rol Rengi',

            'create_new_nav' => 'Yeni link oluştur',
            'nav_name' => 'Link Ismi',
            'nav_icon' => 'Link Ikonu',
            'nav_color' => 'Link Rengi',
            'nav_url' => 'Link URL',
            'nav_category' => 'Link Kategorisi',

            'create_new_feature' => 'Yeni özellik ekle',
            'feature_name' => 'Özellik Ismi',
            'feature_icon' => 'Özellik Ikonu',
            'feature_color' => 'Özellik Rengi',
            'feature_content' => 'Özellik Içeriği',

            'create_new_server' => 'Yeni sunucu oluştur',
            'server_name' => 'Sunucu Ismi',
            'server_icon' => 'Sunucu Ismi',
            'server_color' => 'Sunucu Rengi',
            'server_image' => 'Sunucu Resmi',
            'server_ip' => 'Sunucu IP',
            'server_port' => 'Sunucu Portu',
            'server_description' => 'Sunucu Açıklaması',

            'enable_steam-group_statistics' => 'Steam Grup İstatistiklerini Etkinleştir ',
            'enable_discord-widget' => 'Discord Widgetları Etkinleştir',
            'enable_widget-bot' => 'Widget Botu Etkinleştir',
            'enable_discord-sync' => 'Discord Senkronizasyonunu Etkinleştir',

            'create_new_link' => 'Yeni link oluştur',
            'link_name' => 'Link Ismi',
            'link_url' => 'Link URL',
            'link_category' => 'Link Kategorisi',

            'theme_title' => 'Tema',
            'theme_small' => 'Temaları Yönet',

            'create_new_category' => 'Yeni Kategori Oluştur',
            'category_name' => 'Kategori Ismi',
            'category_desc' => 'Kategori Açıklaması',

            'create_new_board' => 'Yeni Pano Oluştur',
            'board_name' => 'Pano Ismi',
            'board_icon' => 'Pano Ikonu',
            'board_color' => 'Pano Rengi',
            'board_desc' => 'Pano Açıklaması',
            'board_category' => 'Pano Kategorisi',
            'board_permission_roles' => 'Erişebilecek Roller',

            'create_new_poll' => 'Yeni anket oluştur',
            'poll_title' => 'Anket Başlığı',
            'poll_description' => 'Anket Açıklaması',
            'poll_icon' => 'Anket Ikonu',
            'poll_answers' => 'Anket Cevapları',
            'poll_answer' => 'Anket Cevabı',

            'store_settings_title' => 'Mağaza Ayarları',
            'store_settings_small' => 'Mağaza Ayarlarını Yönet',

            'enable_monthly_goal' => 'Aylık Hedefi Etkinleştir',
            'monthly_goal' => 'Aylık Hedef',
            'display_top_recent-donations' => 'En İyi ve Son Bağışları Görüntüle',

            'paypal_client_id' => 'PayPal Client ID',
            'paypal_client_secret' => 'PayPal Client Secret',
            'paypal_webhook_id' => 'PayPal Webhook ID',

            'enable_chargeback-bans' => 'Chargeback banlarını etkinleştir',
            'chargeback-ban' => '<code>Chargeback banlarını etkinleştir</code> - Eğer kişi parasını paypal aracılığı ile geri çekerse biz otomatik olarak websitenize girmesini yasaklayacağız.',

            'package_title' => 'Paketler',
            'package_small' => 'Paket Oluştur',
            'create_new_package' => 'Yeni Paket Oluştur!',
            'package_name' => 'Paket Ismi',
            'package_price' => 'Paket Fiyatı',
            'package_image' => 'Paket Resmi',
            'package_servers' => 'Sunucular',
            'package_category' => 'Kategori',
            'package_description' => 'Paket Açıklaması',

            'create_new_coupon' => 'Yeni kupon oluştur',
            'coupon_code' => 'Kupon Kodu',
            'coupon_percentage' => 'Yüzde',
            'coupon_packages' => 'Paketler',
            'coupon_packages_info' => 'Bunlar, bu kodun kullanılabileceği paketlerdir. ',
            'coupon_package_use-amt' => 'Kullanım Miktarı',
            'coupon_package_use-amt_info' => 'Kuponun kaç kere kullanılabileceği. 0 sınırsızdır',
            'coupon_package_start-date' => 'Başlangıç Tarihi',
            'coupon_package_start-date_info' => 'Bu tarih geçtiğinde bu kupon aktif olacaktır',
            'coupon_package_end-date' => 'Son Kullanma Tarihi',
            'coupon_package_end-date_info' => 'Bu tarihten sonra kupon kullanılamaz hale gelecektir',

            'create_new_sale' => 'Yeni indirim oluştur',
            'sale_title' => 'Indirim Başlığı',
            'sale_percentage' => 'Indirim Yüzdesi',
            'sale_packages' => 'Indirimdeki Paketler',
            'sale_start-date' => 'Başlangıç Tarihi',
            'sale_end-date' => 'Geçerlilik Sonu',

            'update_terms' => 'Kullanım Şartlarını Güncelle',

            'disable_maintenance' => 'Bakımı Devre Dışı Bırak',
            'enable_maintenance' => 'Bakımı Etkinleştir',

            'reinstall' => 'Yeniden Kur',
            'reinstall_confirm' => 'Uygulamayı yeniden kurmak istediğinize emin misiniz?',

            'toggle_dark_mode' => 'Karanlık Modu Aç/Kapa',

            'yearly_sales' => 'Yıllık Indirimler',
            'monthly_sales' => 'Aylık Indirimler',

            'stats' => [
                'earnings' => [
                    'total' => 'Toplam Kazanç',
                    'monthly' => 'Aylık Kazanç',
                    'weekly' => 'Haftalık Kazanç',
                    'daily' => 'Günlük Kazanç',
                ],
                'total_packages' => 'Toplam Paketler',
                'total_purchases' => 'Toplam Satın Alımlar',
                'forum' => [
                    'categories' => 'Toplam Kategoriler',
                    'boards' => 'Toplam Panolar',
                    'threads' => 'Toplam Konular',
                ],
                'users' => 'Toplam Kullanıcılar',
                'roles' => 'Toplam Roller',
                'tickets' => 'Destek Biletlerini Aç',
            ],
        ],

        'save_configurations' => 'Konfigürasyonları Kaydet',

    ]
];
