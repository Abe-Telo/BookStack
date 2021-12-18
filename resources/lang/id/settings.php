<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Pengaturan',
    'settings_save' => 'Simpan Pengaturan',
    'settings_save_success' => 'Pengaturan disimpan',

    // App Settings
    'app_customization' => 'Kustomisasi',
    'app_features_security' => 'Fitur & Keamanan',
    'app_name' => 'Nama aplikasi',
    'app_name_desc' => 'Nama ini ditampilkan di tajuk dan di semua email yang dikirim oleh sistem.',
    'app_name_header' => 'Tampilkan nama di header',
    'app_public_access' => 'Akses publik',
    'app_public_access_desc' => 'Mengaktifkan opsi ini akan memungkinkan pengunjung, yang tidak masuk, untuk mengakses konten dalam contoh BookStack Anda.',
    'app_public_access_desc_guest' => 'Akses untuk pengunjung umum dapat dikontrol melalui pengguna "Tamu".',
    'app_public_access_toggle' => 'Izinkan akses publik',
    'app_public_viewing' => 'Izinkan tontonan publik?',
    'app_secure_images' => 'Unggahan Gambar Keamanan Lebih Tinggi',
    'app_secure_images_toggle' => 'Aktifkan unggahan gambar dengan keamanan lebih tinggi',
    'app_secure_images_desc' => 'Untuk alasan performa, semua gambar bersifat publik. Opsi ini menambahkan string acak yang sulit ditebak di depan url gambar. Pastikan indeks direktori tidak diaktifkan untuk mencegah akses mudah.',
    'app_editor' => 'Halaman Editor',
    'app_editor_desc' => 'Pilih editor mana yang akan digunakan oleh semua pengguna untuk mengedit halaman.',
    'app_custom_html' => 'Kustom Konten HTML Head',
    'app_custom_html_desc' => 'Konten apa pun yang ditambahkan di sini akan dimasukkan ke bagian bawah <head> bagian dari setiap halaman. Ini berguna untuk mengganti gaya atau menambahkan kode analitik.',
    'app_custom_html_disabled_notice' => 'Kustom konten HTML Head dinonaktifkan pada halaman pengaturan ini untuk memastikan setiap perubahan yang mengganggu dapat dikembalikan.',
    'app_logo' => 'Logo Aplikasi',
    'app_logo_desc' => 'Gambar ini seharusnya memiliki ketinggian 43px Gambar besar akan diperkecil.',
    'app_primary_color' => 'Warna Utama Aplikasi',
    'app_primary_color_desc' => 'Menyetel warna utama untuk aplikasi termasuk spanduk, tombol, dan tautan.',
    'app_homepage' => 'Beranda Aplikasi',
    'app_homepage_desc' => 'Pilih tampilan untuk ditampilkan di beranda alih-alih tampilan default. Izin halaman diabaikan untuk halaman yang dipilih.',
    'app_homepage_select' => 'Pilih halaman',
    'app_footer_links' => 'Link Footer',
    'app_footer_links_desc' => 'Tambahkan link untuk ditampilkan dalam footer situs. Ini akan ditampilkan di bagian bawah kebanyakan halaman, termasuk yang tidak memerlukan login. Anda dapat menggunakan label "trans::<key>" untuk menggunakan terjemahan yang ditentukan sistem. Sebagai contoh: Menggunakan "trans::common.privacy_policy" akan memberikan teks terjemahan "Privacy Policy" dan akan memberikan teks "Terms of Service".terjemahan trans::common.terms_of_service".',
    'app_footer_links_label' => 'Link Label',
    'app_footer_links_url' => 'Link URL',
    'app_footer_links_add' => 'Tambahkan Link Footer',
    'app_disable_comments' => 'Nonaktifkan Komentar',
    'app_disable_comments_toggle' => 'Nonaktifkan komentar',
    'app_disable_comments_desc' => 'Menonaktifkan komentar di semua halaman dalam aplikasi. <br> Komentar yang ada tidak ditampilkan.',

    // Color settings
    'content_colors' => 'Warna Konten',
    'content_colors_desc' => 'Menyetel warna untuk semua elemen dalam hierarki organisasi halaman. Disarankan memilih warna dengan kecerahan yang mirip dengan warna default agar mudah dibaca.',
    'bookshelf_color' => 'Warna Rak',
    'book_color' => 'Warna Buku',
    'chapter_color' => 'Warna Bab',
    'page_color' => 'Warna Halaman',
    'page_draft_color' => 'Warna Halaman Draf',

    // Registration Settings
    'reg_settings' => 'Pendaftaran',
    'reg_enable' => 'Aktifkan Pendaftaran',
    'reg_enable_toggle' => 'Aktifkan Pendaftaran',
    'reg_enable_desc' => 'Saat pendaftaran diaktifkan, pengguna akan dapat mendaftar sendiri sebagai pengguna aplikasi. Setelah pendaftaran, mereka diberi peran pengguna default tunggal.',
    'reg_default_role' => 'Peran pengguna default setelah pendaftaran',
    'reg_enable_external_warning' => 'Opsi di atas diabaikan saat otentikasi LDAP atau SAML eksternal aktif. Akun pengguna untuk anggota yang tidak ada akan dibuat secara otomatis jika otentikasi, terhadap sistem eksternal yang digunakan, berhasil.',
    'reg_email_confirmation' => 'Konfirmasi email',
    'reg_email_confirmation_toggle' => 'Memerlukan konfirmasi email',
    'reg_confirm_email_desc' => 'Jika batasan domain digunakan maka konfirmasi email akan diperlukan dan opsi ini akan diabaikan.',
    'reg_confirm_restrict_domain' => 'Pembatasan Domain',
    'reg_confirm_restrict_domain_desc' => 'Masukkan daftar domain email yang dipisahkan dengan koma yang ingin Anda batasi pendaftarannya. Pengguna akan dikirimi email untuk mengonfirmasi alamat mereka sebelum diizinkan untuk berinteraksi dengan aplikasi. <br> Perhatikan bahwa pengguna akan dapat mengubah alamat email mereka setelah pendaftaran berhasil.',
    'reg_confirm_restrict_domain_placeholder' => 'Tidak ada batasan yang ditetapkan',

    // Maintenance settings
    'maint' => 'Pemeliharaan',
    'maint_image_cleanup' => 'Gambar Bersihkan',
    'maint_image_cleanup_desc' => 'Pindai halaman & konten revisi untuk memeriksa gambar dan gambar mana yang saat ini digunakan dan gambar mana yang berlebihan. Pastikan Anda membuat database lengkap dan cadangan gambar sebelum menjalankan ini.',
    'maint_delete_images_only_in_revisions' => 'Hapus juga gambar yang hanya ada di revisi halaman lama',
    'maint_image_cleanup_run' => 'Jalankan Pembersihan',
    'maint_image_cleanup_warning' => ':count ditemukan gambar yang berpotensi tidak digunakan. Anda yakin ingin menghapus gambar-gambar ini?',
    'maint_image_cleanup_success' => ':count gambar yang mungkin tidak digunakan ditemukan dan dihapus!',
    'maint_image_cleanup_nothing_found' => 'Tidak ada gambar yang tidak digunakan ditemukan, Tidak ada yang dihapus!',
    'maint_send_test_email' => 'Kirim Email Tes',
    'maint_send_test_email_desc' => 'Ini mengirimkan email percobaan ke alamat email Anda yang ditentukan di profil Anda.',
    'maint_send_test_email_run' => 'Kirim email tes',
    'maint_send_test_email_success' => 'Email dikirim ke :address',
    'maint_send_test_email_mail_subject' => 'Uji Email',
    'maint_send_test_email_mail_greeting' => 'Pengiriman email sepertinya berhasil!',
    'maint_send_test_email_mail_text' => 'Selamat! Saat Anda menerima pemberitahuan email ini, pengaturan email Anda tampaknya telah dikonfigurasi dengan benar.',
    'maint_recycle_bin_desc' => 'Rak, buku, bab & halaman yang dihapus dikirim ke recycle bin sehingga dapat dipulihkan atau dihapus secara permanen. Item lama di recycle bin dapat dihapus secara otomatis setelah beberapa saat tergantung pada konfigurasi sistem.',
    'maint_recycle_bin_open' => 'Buka Tempat Sampah',

    // Recycle Bin
    'recycle_bin' => 'Tempat Sampah',
    'recycle_bin_desc' => 'Di sini Anda dapat memulihkan item yang telah dihapus atau memilih untuk menghapusnya secara permanen dari sistem. Daftar ini tidak difilter, tidak seperti daftar aktivitas serupa di sistem tempat filter izin diterapkan.',
    'recycle_bin_deleted_item' => 'Item yang Dihapus',
    'recycle_bin_deleted_parent' => 'Induk',
    'recycle_bin_deleted_by' => 'Dihapus Oleh',
    'recycle_bin_deleted_at' => 'Waktu Penghapusan',
    'recycle_bin_permanently_delete' => 'Hapus Permanen',
    'recycle_bin_restore' => 'Mengembalikan',
    'recycle_bin_contents_empty' => 'Hapus Secara Permanen',
    'recycle_bin_empty' => 'Kosongkan Tempat Sampah',
    'recycle_bin_empty_confirm' => 'Ini akan menghancurkan secara permanen semua item di tempat sampah termasuk konten yang ada di dalam setiap item. Anda yakin ingin mengosongkan tempat sampah?',
    'recycle_bin_destroy_confirm' => 'Tindakan ini akan menghapus item ini secara permanen, bersama dengan elemen turunan apa pun yang tercantum di bawah, dari sistem dan Anda tidak akan dapat memulihkan konten ini. Anda yakin ingin menghapus item ini secara permanen?',
    'recycle_bin_destroy_list' => 'Item yang akan Dihancurkan',
    'recycle_bin_restore_list' => 'Item yang akan Dipulihkan',
    'recycle_bin_restore_confirm' => 'Tindakan ini akan memulihkan item yang dihapus, termasuk semua elemen anak, ke lokasi aslinya. Jika lokasi asli telah dihapus, dan sekarang berada di keranjang sampah, item induk juga perlu dipulihkan.',
    'recycle_bin_restore_deleted_parent' => 'Induk item ini juga telah dihapus. Ini akan tetap dihapus sampai induknya juga dipulihkan.',
    'recycle_bin_restore_parent' => 'Pulihkan Induk',
    'recycle_bin_destroy_notification' => 'Total :count item dari tempat sampah.',
    'recycle_bin_restore_notification' => 'Total :count item yang dipulihkan dari tempat sampah.',

    // Audit Log
    'audit' => 'Log Audit',
    'audit_desc' => 'Log audit ini menampilkan daftar aktivitas yang dilacak dalam sistem. Daftar ini tidak difilter, tidak seperti daftar aktivitas serupa di sistem tempat filter izin diterapkan.',
    'audit_event_filter' => 'Filter Peristiwa',
    'audit_event_filter_no_filter' => 'Tanpa Filter',
    'audit_deleted_item' => 'Item yang Dihapus',
    'audit_deleted_item_name' => 'Nama :name',
    'audit_table_user' => 'Pengguna',
    'audit_table_event' => 'Peristiwa',
    'audit_table_related' => 'Item atau Detail Terkait',
    'audit_table_ip' => 'IP Address',
    'audit_table_date' => 'Tanggal Kegiatan',
    'audit_date_from' => 'Rentang Tanggal Dari',
    'audit_date_to' => 'Rentang Tanggal Sampai',

    // Role Settings
    'roles' => 'Peran',
    'role_user_roles' => 'Peran Pengguna',
    'role_create' => 'Buat Peran Baru',
    'role_create_success' => 'Peran berhasil dibuat',
    'role_delete' => 'Hapus Peran',
    'role_delete_confirm' => 'Ini akan menghapus peran dengan nama \':roleName\'.',
    'role_delete_users_assigned' => 'Peran ini memiliki :userCount pengguna yang ditugaskan padanya. Jika Anda ingin memindahkan pengguna dari peran ini pilih peran baru di bawah.',
    'role_delete_no_migration' => "Jangan migrasikan pengguna",
    'role_delete_sure' => 'Anda yakin ingin menghapus peran ini?',
    'role_delete_success' => 'Peran berhasil dihapus',
    'role_edit' => 'Edit Peran',
    'role_details' => 'Detail Peran',
    'role_name' => 'Nama peran',
    'role_desc' => 'Deskripsi Singkat Peran',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'Otentikasi Eksternal IDs',
    'role_system' => 'Izin Sistem',
    'role_manage_users' => 'Kelola pengguna',
    'role_manage_roles' => 'Kelola peran & izin peran',
    'role_manage_entity_permissions' => 'Kelola semua izin buku, bab & halaman',
    'role_manage_own_entity_permissions' => 'Kelola izin di buku, bab & halaman sendiri',
    'role_manage_page_templates' => 'Kelola template halaman',
    'role_access_api' => 'Akses Sistem API',
    'role_manage_settings' => 'Kelola setelan aplikasi',
    'role_export_content' => 'Export content',
    'role_asset' => 'Izin Aset',
    'roles_system_warning' => 'Ketahuilah bahwa akses ke salah satu dari tiga izin di atas dapat memungkinkan pengguna untuk mengubah hak mereka sendiri atau orang lain dalam sistem. Hanya tetapkan peran dengan izin ini untuk pengguna tepercaya.',
    'role_asset_desc' => 'Izin ini mengontrol akses default ke aset dalam sistem. Izin pada Buku, Bab, dan Halaman akan menggantikan izin ini.',
    'role_asset_admins' => 'Admin secara otomatis diberi akses ke semua konten tetapi opsi ini dapat menampilkan atau menyembunyikan opsi UI.',
    'role_all' => 'Semua',
    'role_own' => 'Sendiri',
    'role_controlled_by_asset' => 'Dikendalikan oleh aset tempat mereka diunggah',
    'role_save' => 'Simpan Peran',
    'role_update_success' => 'Peran berhasil diperbarui',
    'role_users' => 'Peran berhasil diperbarui',
    'role_users_none' => 'Saat ini tidak ada pengguna yang ditugaskan untuk peran ini',

    // Users
    'users' => 'Pengguna',
    'user_profile' => 'Profil Pengguna',
    'users_add_new' => 'Tambahkan pengguna baru',
    'users_search' => 'Cari Pengguna',
    'users_latest_activity' => 'Aktivitas Terbaru',
    'users_details' => 'Detail Pengguna',
    'users_details_desc' => 'Tetapkan nama tampilan dan alamat email untuk pengguna ini. Alamat email akan digunakan untuk masuk ke aplikasi.',
    'users_details_desc_no_email' => 'Tetapkan nama tampilan untuk pengguna ini agar orang lain dapat mengenalinya.',
    'users_role' => 'Peran Pengguna',
    'users_role_desc' => 'Pilih peran mana yang akan ditetapkan untuk pengguna ini. Jika pengguna ditetapkan ke beberapa peran, izin dari peran tersebut akan bertumpuk dan mereka akan menerima semua kemampuan dari peran yang ditetapkan.',
    'users_password' => 'Kata Sandi Pengguna',
    'users_password_desc' => 'Atur kata sandi yang digunakan untuk masuk ke aplikasi. Panjangnya minimal harus 6 karakter.',
    'users_send_invite_text' => 'Anda dapat memilih untuk mengirimi pengguna ini email undangan yang memungkinkan mereka menyetel sandi mereka sendiri, atau Anda dapat menyetel sandi mereka sendiri.',
    'users_send_invite_option' => 'Kirim email undangan pengguna',
    'users_external_auth_id' => 'Otentikasi Eksternal ID',
    'users_external_auth_id_desc' => 'Ini adalah ID yang digunakan untuk mencocokkan pengguna ini saat berkomunikasi dengan sistem otentikasi eksternal Anda.',
    'users_password_warning' => 'Hanya isi di bawah ini jika Anda ingin mengubah kata sandi Anda.',
    'users_system_public' => 'Pengguna ini mewakili semua pengguna tamu yang mengunjungi instance Anda. Ini tidak dapat digunakan untuk masuk tetapi ditetapkan secara otomatis.',
    'users_delete' => 'Hapus pengguna',
    'users_delete_named' => 'Hapus Pengguna :userName',
    'users_delete_warning' => 'Ini sepenuhnya akan menghapus pengguna ini dengan nama \':userName\' dari sistem.',
    'users_delete_confirm' => 'Apakah Anda yakin ingin menghapus pengguna ini?',
    'users_migrate_ownership' => 'Migrasikan Kepemilikan',
    'users_migrate_ownership_desc' => 'Pilih pengguna di sini jika Anda ingin pengguna lain menjadi pemilik semua item yang saat ini dimiliki oleh pengguna ini.',
    'users_none_selected' => 'Tidak ada pengguna yang dipilih',
    'users_delete_success' => 'Pengguna berhasil dihapus',
    'users_edit' => 'Edit Pengguna',
    'users_edit_profile' => 'Edit Profil',
    'users_edit_success' => 'Pengguna berhasil diperbarui',
    'users_avatar' => 'Abatar Pengguna',
    'users_avatar_desc' => 'Pilih gambar untuk mewakili pengguna ini. berukuran 256px.',
    'users_preferred_language' => 'Bahasa Pilihan',
    'users_preferred_language_desc' => 'Opsi ini akan mengubah bahasa yang digunakan untuk antarmuka pengguna aplikasi. Ini tidak akan memengaruhi konten yang dibuat pengguna.',
    'users_social_accounts' => 'Akun Sosial',
    'users_social_accounts_info' => 'Di sini Anda dapat menghubungkan akun Anda yang lain untuk login yang lebih cepat dan mudah. Memutuskan akun di sini tidak mencabut akses resmi sebelumnya. Cabut akses dari pengaturan profil Anda pada akun sosial yang terhubung.',
    'users_social_connect' => 'Hubungkan Akun',
    'users_social_disconnect' => 'Putuskan Sambungan Akun',
    'users_social_connected' => ':socialAccount akun berhasil dilampirkan ke profil Anda.',
    'users_social_disconnected' => ':socialAccount akun berhasil diputuskan dari profil Anda.',
    'users_api_tokens' => 'Token API',
    'users_api_tokens_none' => 'Tidak ada token API yang telah dibuat untuk pengguna ini',
    'users_api_tokens_create' => 'Buat Token',
    'users_api_tokens_expires' => 'Kedaluwarsa',
    'users_api_tokens_docs' => 'Dokumentasi API',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Buat Token API',
    'user_api_token_name' => 'Nama',
    'user_api_token_name_desc' => 'Berikan token Anda nama yang dapat dibaca sebagai pengingat masa depan akan tujuan yang dimaksudkan.',
    'user_api_token_expiry' => 'Tanggal kadaluarsa',
    'user_api_token_expiry_desc' => 'Setel tanggal token ini kedaluwarsa. Setelah tanggal ini, permintaan yang dibuat menggunakan token ini tidak akan berfungsi lagi. Mengosongkan bidang ini akan menetapkan masa berlaku 100 tahun ke depan.',
    'user_api_token_create_secret_message' => 'Segera setelah membuat token ini, "Token ID" & "Token Secret" akan dibuat dan ditampilkan. Rahasianya hanya akan ditampilkan satu kali jadi pastikan untuk menyalin nilainya ke tempat yang aman dan terlindungi sebelum melanjutkan.',
    'user_api_token_create_success' => 'Token API berhasil dibuat',
    'user_api_token_update_success' => 'Token API berhasil diperbarui',
    'user_api_token' => 'Token API',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Ini adalah sebuah pengenal yang dihasilkan oleh sistem yang tidak dapat disunting untuk token ini yang perlu untuk disediakan dalam permintaan API.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'Ini adalah rahasia yang dihasilkan sistem untuk token ini yang perlu disediakan dalam permintaan API. Ini hanya akan ditampilkan kali ini jadi salin nilai ini ke tempat yang aman dan terlindungi.',
    'user_api_token_created' => 'Token dibuat :timeAgo',
    'user_api_token_updated' => 'Token diperbarui :timeAgo',
    'user_api_token_delete' => 'Hapus Token',
    'user_api_token_delete_warning' => 'Ini akan sepenuhnya menghapus token API ini dengan nama \': tokenName\' dari sistem.',
    'user_api_token_delete_confirm' => 'Anda yakin ingin menghapus token API ini?',
    'user_api_token_delete_success' => 'Token API berhasil dihapus',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Katalan',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
