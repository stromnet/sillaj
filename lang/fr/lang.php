<?php
// French translation 2006-01-17 18:18 
define('STR_PHP_LOCALE_WIN_SILLAJ', 'fr');
define('STR_PHP_LOCALE_NIX_SILLAJ', 'fr_FR');

// global
define(             'STR_ERROR_TITLE_SILLAJ', 'Erreur');
define('STR_EDIT_ACCOUNT_NOT_ALLOWED_SILLAJ', 'Modification de compte interdite');
define(           'STR_MESSAGE_TITLE_SILLAJ', 'Information');
define(                 'STR_PROJECT_SILLAJ', 'Projet');
define(                    'STR_TASK_SILLAJ', 'Activité');
define(          'STR_GRAPH_DISABLED_SILLAJ', 'Graphiques inactifs (voir config.php)');

// Menu
$arrMenu = array(
               'index.php' => array('strMenu' => 'Mon temps',    'strTip' => 'Saisie des temps', 'booDisplay' => true),    
             'project.php' => array('strMenu' => 'Projets',      'strTip' => 'Édition des projets', 'booDisplay' => true),
                'task.php' => array('strMenu' => 'Activités',    'strTip' => 'Édition des activités', 'booDisplay' => true),
              'report.php' => array('strMenu' => 'Rapports',     'strTip' => 'Rapports hebdomadaires, mensuels...', 'booDisplay' => true),    
                'user.php' => array('strMenu' => 'Utilisateur',  'strTip' => 'Gestion du compte', 'booDisplay' => true),                
              'logout.php' => array('strMenu' => 'Quitter',       'strTip' => 'Se déconnecter', 'booDisplay' => true),
               'event.php' => array('strMenu' => 'Événements',   'strTip' => '', 'booDisplay' => false), // menu virtuel mais utilisé pour mettre automatiquement le titre de la page
              'search.php' => array('strMenu' => 'Chercher',     'strTip' => '', 'booDisplay' => false),  // menu virtuel "
               'gantt.php' => array('strMenu' => 'Gantt',        'strTip' => '', 'booDisplay' => false),  // menu virtuel "
                'tool.php' => array('strMenu' => 'Outils',       'strTip' => 'Outils', 'booDisplay' => false)// menu virtuel (temp)
                    
           );                                                   

// index
define(    'STR_CALENDAR_SILLAJ', 'Calendrier');
define(    'STR_NEXT_DAY_SILLAJ', 'Jour suivant');
define(    'STR_PREV_DAY_SILLAJ', 'Jour précédent');
define(  'STR_NEXT_MONTH_SILLAJ', 'Mois suivant');
define(  'STR_PREV_MONTH_SILLAJ', 'Mois précédent');
define(    'STR_BAD_DATE_SILLAJ', 'Date invalide');
define(       'STR_EVENT_SILLAJ', 'événement');
define(      'STR_EVENTS_SILLAJ', 'événements');
           
// login
define(  'STR_LOGIN_PAGE_TITLE_SILLAJ', 'Login');
define(          'STR_NO_LOGIN_SILLAJ', 'Login absent');
define(       'STR_NO_PASSWORD_SILLAJ', 'Mot de passe absent');

// class Project
define(         'STR_PROJECT_CREATED_SILLAJ', 'Projet créé');
define(        'STR_PROJECT_MODIFIED_SILLAJ', 'Projet modifié');
define(         'STR_PROJECT_DELETED_SILLAJ', 'Projet supprimé');
define('STR_PROJECT_EDIT_NOT_ALLOWED_SILLAJ', "Interdiction d'éditer/visualiser ce projet");
define(       'STR_PROJECT_NOT_FOUND_SILLAJ', 'Aucun projet');
define(         'STR_NO_PROJECT_NAME_SILLAJ', 'Pas de nom pour le projet');

// class Task
define(         'STR_TASK_CREATED_SILLAJ', 'Activité créée');
define(        'STR_TASK_MODIFIED_SILLAJ', 'Activité modifiée');
define(         'STR_TASK_DELETED_SILLAJ', 'Activité supprimée');
define('STR_TASK_EDIT_NOT_ALLOWED_SILLAJ', "Interdiction d'éditer/visualiser cette activité");
define(       'STR_TASK_NOT_FOUND_SILLAJ', 'Aucune activité');
define(         'STR_NO_TASK_NAME_SILLAJ', "Pas de nom pour l'activité");

// class Authent
define(        'STR_NO_AUTHENT_SILLAJ', 'Authentification impossible. Vérifiez le login et le mot de passe');
define('STR_UNEXPECTED_AUTHENT_SILLAJ', "Problème d'authentification");

// class User
define(   'STR_ACCOUNT_CREATED_SILLAJ', 'Compte créé');
define(  'STR_ACCOUNT_MODIFIED_SILLAJ', 'Compte modifié');
define(         'STR_NO_IDPASS_SILLAJ', 'Vous devez fournir un login et un mot de passe pour être enregistré');
define(     'STR_MISSING_EMAIL_SILLAJ', 'Vous devez fournir une adresse de courriel valide');

// class Event
define(         'STR_EVENT_CREATED_SILLAJ', 'Événement créé');
define(      'STR_NO_TASK_SELECTED_SILLAJ', "Pas d'activité sélectionnée");
define(   'STR_NO_PROJECT_SELECTED_SILLAJ', 'Pas de projet sélectionné');
define(         'STR_NO_TIME_INPUT_SILLAJ', "Pas d'information de durée entrée");
define(         'STR_EVENT_DELETED_SILLAJ', 'Événement supprimé');
define(        'STR_EVENT_MODIFIED_SILLAJ', 'Événement modifié');
define('STR_EVENT_EDIT_NOT_ALLOWED_SILLAJ', "Impossible d'éditer cet événement");
define(       'STR_EVENT_NOT_FOUND_SILLAJ', 'Événement non trouvé ou non modifiable');
define(     'STR_NO_EVENT_SELECTED_SILLAJ', "Pas d'événement sélectionné");
define(      'STR_NO_DATE_SELECTED_SILLAJ', 'Pas de date sélectionnée');
define(        'STR_BAD_TIME_INPUT_SILLAJ', 'Fin avant début');
define(        'STR_BAD_TIME_VALUE_SILLAJ', 'Les valeurs de temps doivent être numériques');
define('STR_PROJECTTASK_EVENT_NOT_FOUND_SILLAJ', "Pas de projet ou d'activité");
define(     'STR_KEYWORD_NOT_FOUND_SILLAJ', 'Saisir un mot clé pour la recherche');

//class Report
define(     'STR_ERROR_MISSING_DATE_SILLAJ', STR_NO_DATE_SELECTED_SILLAJ);
define(     'STR_ERROR_MISSING_USER_SILLAJ', 'Utilisateur non spécifié');
define( 'STR_ERROR_USER_NOT_ALLOWED_SILLAJ', 'Utilisateur non autorisé');
define(        'STR_BAD_DATE_FORMAT_SILLAJ', 'Format de date incorrect dans config.php');

// Mail
define(  'STR_MAIL_INVALID_ADDRESS_SILLAJ', 'Adresse de courriel invalide');
define('STR_MAIL_ADDRESS_NOT_FOUND_SILLAJ', 'Adresse de courriel absente de la liste des utilisateurs');
define(          'STR_MAIL_SUBJECT_SILLAJ', 'Votre mot de passe');
define(             'STR_MAIL_BODY_SILLAJ', "Votre mot de passe a été réinitialisé.\nLogin : %s\nMot de passe : %s");
define(            'STR_MAIL_ERROR_SILLAJ', "Erreur d'envoi du message :");
define(          'STR_MAIL_SUCCESS_SILLAJ', 'Message envoyé à');
define(       'STR_MAIL_PAGE_TITLE_SILLAJ', 'Envoi du mot de passe');

// Gantt
define(   'STR_GANTT_CSIM_ALT_TASK_SILLAJ', 'Voir le diagramme de Gantt pour cette activité');
define('STR_GANTT_CSIM_ALT_PROJECT_SILLAJ', 'Voir le diagramme de Gantt pour ce projet');
?>