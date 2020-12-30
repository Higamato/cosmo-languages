<?php
return [
/**
 * @TranslationFile FRENCH
 * @authors HeyJack
 * @helpers [
        https://morgan-lee.cc - English / Base Translations
        https://zeodev.cc - Dutch
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
    'navbar' => [
        'profile' => 'Profil',
        'visit_profile' => 'Visitez et mettez à jour votre profil!',

        'management' => 'La gestion',
        'manage_cosmo' => 'Gérez Cosmo en tant qu\'administrateur.',

        'logout' => 'Se déconnecter',
        'login' => 'S\'identifier',

        'welcome_back' => 'Nous saluons le retour :username',
        'notifications' => 'Notifications'
    ],


    'core' => [
        'home' => 'Accueil',
        'staff' => 'Personnel',
        'threads' => 'Fils',
        'browse_threads' => 'Parcourir tous les fils',
        'viewing_thread' => 'Affichage du fil',
        'forums' => 'Forums',
        'terms' => 'Conditions d\'utilisation',
        'store' => 'Boutique',
        'success' => 'Succès!',
        'failed' => 'Échoué!',
        'checkout' => 'Checkout',
        'users' => 'Utilisateurs',
        'board' => 'Planche',
        'edit' => 'Éditer',

        'licensed_to' => 'Autorisé à :licensee',
        'created_by' => 'Créé par :author',

        'theme_specific' => [
            'group_members' => 'Les membres du groupe',
            'online_members' => 'Membres en ligne',
            'in-game_members' => 'Membres en jeu',
            'join_steam-group' => 'Rejoignez notre groupe Steam',
            'players_online' => 'Joueurs en ligne',
            'join_servers' => 'Rejoignez notre <span>Les serveurs</span>',
            'join_discord' => 'Rejoignez notre <span>Discord</span>',
        ]
    ],

    'store' => [
        'browse_packages' => 'Parcourir les packages pour :server!',
        'checkout' => 'Checkout',
        'permanent' => 'Permanent',
        'non-permanent' => 'Non Permanent',
        'login_to-checkout' => 'Connectez-vous pour payer',

        'coupon-code' => 'Code promo',
        'enter_coupon-code' => 'Entrer le code coupon',
        'gift-purchase' => 'Acheter comme cadeau',
        'enter_steamId' => 'Entrez l\'identifiant Steam',

        'finalize_purchase' => 'Finalisez votre achat',
        'tos_agree' => 'Vous acceptez par la présente nos <a href="'.route('store.tos').'">Conditions d\'utilisation</a>', // Translate around the link
        'checkout_with-paypal' => 'Payer avec PayPal',

        'complete_purchase' => 'Terminez votre achat',
        'checking_out-package' => 'Vous êtes en train de vérifier :package', //"You are checking out package: VIP"
        'package_price' => 'Prix du package',

        'sub-total' => 'Sous-totaux',
        'total' => 'Total: :sign:price',
        'servers' => 'Serveurs',

        'monthly_goal' => 'Objectif mensuel de Doantion',
        'table' => [
            'top_donations' => 'Top dons',
            'recent_donations' => 'Dons récents',
            'name' => 'Nom',
            'amount' => 'Montant',
            'package' => 'Package',
        ],

        'select_server' => 'Sélectionner un serveur',

        'success' => [
            'success' => 'Paiement réussi!',
            'msg' => 'Vous recevrez votre colis sous peu ...'
        ],
        'fail' => [
            'fail' => 'Le paiement a échoué!',
            'msg' => 'Le paiement a échoué .... veuillez réessayer plus tard',
        ],

        'sale' => [
            'time-left' => 'Temps restant: :time',
            'info' => '<b>Dépêchez-vous</b> et prenez nos produits en solde! <span>:percentage% OFF</span>',
            'go_to_store' => 'ALLER AU MAGASIN',
        ],
    ],

    'forums' => [
        'polls' => 'Sondages',
        'polls_desc' => 'Donnez votre avis au sein de la communauté',
        'unanswered_polls' => 'Sondage (s) sans réponse',

        'search' => 'Rechercher',
        'search_desc' => 'Parcourir les forums!',

        'recent_activity' => 'Activité récente',
        'recent_desc' => 'Activité récente de nos communautés',

        'latest_threads' => 'Dernières discussions',
        'latest_threads-desc' => 'Les derniers fils de discussion de nos communautés',

        'latest_posts' => 'Derniers messages',
        'latest_posts-desc' => 'Derniers messages de nos communautés',

        'replies' => 'Réponses',

        'threads' => [
            'locked' => 'VERROUILLÉ',
            'pinned' => 'ÉPINGLÉ',

            'edit_thread' => 'Modifier le fil de discussion',
            'editing_thread' => 'Modification du fil de discussion',
            'pin_thread' => 'Filetage d\'épingle',
            'unpin_thread' => 'Retirer le fil de discussion',
            'lock_thread' => 'Verrouiller le fil',
            'unlock_thread' => 'Déverrouiller la discussion',
            'move_thread' => 'Déplacer le fil de discussion',
            'delete_thread'=> 'Supprimer le fil de discussion',

            'create_thread' => 'Créer un fil de discussion',
            'update_thread' => 'Create Thread',
            'thread_title' => 'Titre de la discussion',
            'post_reply' => 'Publier',

            'created_at' => 'Créé à',

            'posted_by' => 'Publié par:',

            'locked_no_reply' => 'Ce fil a été verrouillé, vous ne pouvez plus y répondre!',
        ],
        'posts' => [
            'edit_post' => 'Modifier le message',
            'update_post' => 'Mettre à jour le message'
        ]
    ],

    'users' => [
        'search_users' => 'Rechercher des utilisateurs ...',
        'no_users-found' => 'Aucun utilisateur trouvé',

        'pills' => [
            'home'=> 'Accueil',
            'comments' => 'Commentaires',
            'threads' => 'Fils de discussion',
            'achievements' => 'Réalisations',
            'edit' => 'Modifier le profil',
        ],

        'welcome_to_profile' => 'Bienvenue sur mon profil!',

        'user_joined' => 'Utilisateur joint',
        'comment' => 'Commenter',
        'editing_comment' => 'Modification du commentaire',

        'edit' => [
            'display_name' => 'Afficher le nom',
            'avatar_image' => 'Image de l\'avatar',
            'background_image' => 'Image d\'arrière-plan',
            'biography' => 'Biographie',
            'signature' => 'Signature',
            'sync_steam' => 'Synchroniser avec Steam',
            'sync_discord' => 'Synchroniser avec Discord',
        ],

        'achievements' => [
            'unlock_more' => 'Déverrouiller plus ...',
            'default' => 'Pour débloquer plus de succès, continuez à utiliser les forums et autres fonctionnalités.',
            'achievement_unlocked' => 'Ce succès a été déverrouillé'
        ],
    ],

    'actions' => [
        'close' => 'Fermer',
        'save_changes' => 'Enregistrer les modifications',
        'go_back' => 'Revenir en arrière',
        'submit' => 'Soumettre',
        'post' => 'Publier',
        'create' => 'Créer',
        'update' => 'Mettre à jour',
        'delete' => 'Supprimer'
    ],

    'notifications' => [
        'new_notif' => 'NOUVEAU',
        'notifications' => 'Notifications',
        'mark_all_as_read' => 'Tout marquer comme lu',
        'delete_all' => 'Supprimer tout',
        'no_notifications' => 'Vous n\'avez aucune notification',

        'reply_to_thread' => ':username d\'utilisateur a répondu à votre fil de discussion',
        'unlocked_achievement' => 'Vous avez déverrouillé le succès: :achievement',
        'profile_comment' => ':username a commenté votre profil!',
        'profile_like' => ':username d\'utilisateur a :state profil!',
        'thread_action' => ':admin has :action your thread: :title',
        'manage' => 'Gérez vos notifications en suspens',
    ],

    'toastr_alerts' => [
        'mark_notifications' => 'Vous avez marqué toutes vos notifications comme lues!',
        'cleared_notifications' => 'Vous avez effacé toutes vos notifications!',

        'update_post' => 'Message mis à jour avec succès',
        'delete_post' => 'Message supprimé avec succès',

        'create_thread' => 'Nouveau fil de discussion créé avec succès',
        'update_thread' => 'Fil de discussion mis à jour avec succès',
        'delete_thread' => 'Suppression réussie du fil de discussion!',
        'pin_thread' => 'Thead a été épinglé avec succès!',
        'unpin_thread' => 'L\'épinglage de la tête a réussi!',
        'lock_thread' => 'Thead verrouillé avec succès!',
        'unlock_thread' => 'Thead déverrouillé avec succès!',
        'move_thread' => 'Fil de discussion déplacé avec succès!',

        'application_cache' => 'Vider le cache de l \' application! ',

        'create_board' => 'Tableau créé avec succès',
        'update_board' => 'Tableau mis à jour avec succès',
        'delete_board' => 'Suppression du tableau avec succès!',
        'move_board' => 'Tri des tableaux avec succès!',

        'create_category' => 'Nouvelle catégorie créée avec succès',
        'update_category' => 'Catégorie mise à jour avec succès',
        'delete_category' => 'Suppression réussie de la catégorie!',

        'create_poll' => 'Démarrage réussi d\'un nouveau sondage',
        'update_poll' => 'Mise à jour réussie du sondage',
        'delete_poll' => 'Suppression du sondage avec succès!',
        'open_poll' => 'Définir avec succès le statut du sondage à ouvrir!',
        'close_poll' => 'Définir avec succès le statut du sondage sur fermé!',

        'update_configurations' => 'Mise à jour réussie de toutes les configurations générales!',
        'update_meta' => 'Mise à jour réussie de toutes les méta configurations!',
        'update_integration' => 'Mise à jour réussie de toutes les configurations d\'intégration!',
        'update_theme' => 'Thème global mis à jour avec succès!',
        'update_settings' => 'Mise à jour réussie de toutes les configurations de magasin!',
        'update_tos' => 'Conditions d\'utilisation mises à jour avec succès!',

        'create_role' => 'Création réussie d\'un nouveau rôle',
        'update_role' => 'Rôle mis à jour avec succès!',
        'delete_role' => 'Rôle supprimé avec succès!',

        'update_user' => 'Utilisateur mis à jour avec succès!',

        'create_feature' => 'Création réussie d\'une nouvelle fonctionnalité!',
        'update_feature' => 'Fonctionnalité mise à jour avec succès!',
        'delete_feature' => 'Fonction supprimée avec succès!',

        'create_footer-link' => 'Création d\'un nouveau lien de pied de page avec succès!',
        'update_footer-link' => 'Lien de pied de page mis à jour avec succès!',
        'delete_footer-link' => 'Lien de pied de page supprimé avec succès!',

        'create_nav-link' => 'Création d\'un nouveau lien de navigation avec succès!',
        'update_nav-link' => 'Lien de navigation mis à jour avec succès!',
        'delete_nav-link' => 'Lien de navigation supprimé avec succès',

        'create_server' => 'Un nouveau serveur a été créé avec succès!',
        'update_server' => 'Serveur mis à jour avec succès!',
        'delete_server' => 'Serveur supprimé avec succès!',

        'create_coupon' => 'Un nouveau code de réduction a été créé avec succès!',
        'update_coupon' => 'Code de réduction mis à jour avec succès!',
        'delete_coupon' => 'Code coupon supprimé avec succès!',

        'invalid_coupon-code' => 'Ce code promo est invalide!',
        'unusable_coupon-code' => 'Ce code promo ne peut pas être utilisé sur ce package!',
        'invalid_gift-steamId' => 'Ce SteamID est invalide!',

        'create_package' => 'Création d\'un nouveau package de magasin avec succès!',
        'update_package' => 'Package mis à jour avec succès!',
        'delete_package' => 'Package supprimé avec succès!',

        'create_sale' => 'Une nouvelle vente en magasin a bien été ajoutée',
        'update_sale' => 'Vente magasin mise à jour réussie!',
        'delete_sale' => 'Vente magasin supprimée avec succès!',

        'create_comment' => 'Commentaire posté avec succès!',
        'update_comment' => 'Commentaire mis à jour avec succès!',
        'delete_comment' => 'Commentaire supprimé avec succès!',

        'like_own_profile' => 'Désolé, vous ne pouvez pas aimer votre propre profil :)',
        'remove_like' => 'Suppression réussie comme pour le profil de :username d \' utilisateur! ',
        'create_like' => 'Aimé avec succès:username\'s utilisateur! ',

        'update_profile' => 'Profil mis à jour avec succès!',
    ],


    'management' => [
        'navigation' => [
            'dashboard' => 'Tableau de bord',

            'general' => 'Général',
            'configuration' => 'Configuration',
            'meta' => 'Meta',
            'users' => 'Utilisateurs',
            'roles' => 'Rôles',

            'index' => 'Index',
            'components' => [
                'components' => 'Composants',
                'nav-links' => 'Liens de navigation',
                'features' => 'Caractéristiques',
                'servers' => 'Serveurs',
                'integrations' => 'Intégrations',
                'footer-links' => 'Liens de pied de page'
            ],
            'theme' => 'Thème',

            'forums' => 'Forums',
            'categories' => 'Catégories',
            'boards' => 'Boards',
            'polls' => 'Sondages',

            'store' => 'Stocker',
            'settings' => 'Paramètres',
            'packages' => [
                'packages' => 'Paquets',
                'create' => 'Créer',
                'manage' => 'Gérer'
            ],
            'coupon_code' => 'Code de réduction',
            'sales' => 'Ventes',
            'tos' => 'TOS',
            'transactions' => 'Transactions',
            'profile' => 'Profil',
            'exit_management' => 'Gestion des sorties',
            'logout' => 'Déconnexion',
        ],

        'core' => [
            'clear_cache' => 'Vider le cache',
            'check_for_updates' => 'Vérifier les mises à jour',

            'dashboard_title' => 'Tableau de bord',
            'dashboard_small' => 'Statistiques de la page',

            'configurations_title' => 'Configurations',
            'configurations_small' => 'Gérer la configuration',

            'meta_title' => 'Meta',
            'meta_small' => 'Gérer la méta du site',

            'users_title' => 'Utilisateurs',
            'users_small' => 'Gérer les utilisateurs',
            'users_search' => 'Rechercher des utilisateurs ...',
            'users_role' => 'Rôle',

            'create_new_role' => 'Créer un nouveau rôle',
            'roles_role-name' => 'Nom du rôle',
            'roles_role-display' => 'Affichage des rôles',
            'roles_role-color' => 'Couleur du rôle',

            'create_new_nav' => 'Créer un nouveau lien',
            'nav_name' => 'Nom du lien',
            'nav_icon' => 'Icône de lien',
            'nav_color' => 'Couleur du lien',
            'nav_url' => 'URL du lien',
            'nav_category' => 'Catégorie de lien',

            'create_new_feature' => 'Créer une nouvelle fonctionnalité',
            'feature_name' => 'Nom de la fonction',
            'feature_icon' => 'Icône de fonctionnalité',
            'feature_color' => 'Couleur caractéristique',
            'feature_content' => 'Contenu de la fonctionnalité',

            'create_new_server' => 'Créer un nouveau serveur',
            'server_name' => 'Nom du serveur',
            'server_icon' => 'Icône du serveur',
            'server_color' => 'Couleur du serveur',
            'server_image' => 'Image du serveur',
            'server_ip' => 'IP du serveur',
            'server_port' => 'Port du serveur',
            'server_description' => 'Description du serveur',

            'enable_steam-group_statistics' => 'Activer les statistiques du groupe Steam',
            'enable_discord-widget' => 'Activer le widget Discord',
            'enable_widget-bot' => 'Activer le bot de widget',
            'enable_discord-sync' => 'Activer Discord Sync',

            'create_new_link' => 'Créer un nouveau lien',
            'link_name' => 'Nom du lien',
            'link_url' => 'URL du lien',
            'link_category' => 'Catégorie de lien',

            'theme_title' => 'Thème',
            'theme_small' => 'Gérer les thèmes',

            'create_new_category' => 'Créer une nouvelle catégorie',
            'category_name' => 'Nom de la catégorie',
            'category_desc' => 'Description de la catégorie',

            'create_new_board' => 'Créer un nouveau tableau',
            'board_name' => 'Nom du tableau',
            'board_icon' => 'Icône de la carte',
            'board_color' => 'Couleur de la carte',
            'board_desc' => 'Description de la carte',
            'board_category' => 'Catégorie du forum',
            'board_permission_roles' => 'Rôles avec accès',

            'create_new_poll' => 'Créer un nouveau sondage',
            'poll_title' => 'Titre du sondage',
            'poll_description' => 'Description du sondage',
            'poll_icon' => 'Icône de sondage',
            'poll_answers' => 'Réponses au sondage',
            'poll_answer' => 'Réponse au sondage',

            'store_settings_title' => 'Paramètres du magasin',
            'store_settings_small' => 'Gérer les paramètres du magasin',

            'enable_monthly_goal' => 'Activer l\'objectif mensuel',
            'Monthly_goal' => 'Objectif mensuel',
            'display_top_recent-donations' => 'Afficher les dons principaux et récents',

            'paypal_client_id' => 'ID client PayPal',
            'paypal_client_secret' => 'Secret du client PayPal',
            'paypal_webhook_id' => 'Identifiant PayPal Webhook',

            'enable_chargeback-bans' => 'Activer les interdictions de rétrofacturation',
            'chargeback-ban' => '<code> Activer les interdictions de rétrofacturation </code> - Lorsqu\'un utilisateur tente d\'initier une rétrofacturation via paypal, nous interdirons automatiquement l\'utilisation

