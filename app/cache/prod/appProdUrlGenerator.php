<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorie/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorie/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorie/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offres/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offres_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/offres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offres_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offres/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offres_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offres/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offres_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/offres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offres_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/offres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'offres_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/offres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\ProduitController::AjoutproduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produit/ajout-produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\ProduitController::listeproduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produit/liste-produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\ProduitController::detailproduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produit/detail-produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\ContactController::AjoutcontactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact/ajout-contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\ContactController::ListecontactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact/liste-contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\ContactController::detailcontactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contact/detail-contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\ContactController::modifiercontactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contact/modifier-contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suivi_vente_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suivi_vente_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_listeadmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Utilisateur\\UtilisateurBundle\\Controller\\DefaultController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste-admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_supprimeadmin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Utilisateur\\UtilisateurBundle\\Controller\\DefaultController::supprimeAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimeradmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suivi_vente_chef' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::chefAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/chef',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suivi_test_chef' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::testventeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/testvente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lite_vente_chef' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::listesventeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste-vente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_global_resultat-resultat1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::ResultatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resultatrecherche1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'PDF_categ' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\PDFController::pdfcatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pdf-categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stat_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\ChartController::profitsHistoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/chartbar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stat_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\ChartController::VentestatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/chartline',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recette_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\RecetteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste-recette',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recette_resultat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\RecetteController::ResultatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resultat-recette',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'your_own_calendar_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Your\\OwnCalendarBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_event_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendar/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_event_list_by_day' => array (  0 =>   array (    0 => 'year',    1 => 'month',    2 => 'day',  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listByDayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'day',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'month',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'year',    ),    3 =>     array (      0 => 'text',      1 => '/calendar/by_day',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_event_list_by_week' => array (  0 =>   array (    0 => 'year',    1 => 'month',    2 => 'day',  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listByWeekAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'day',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'month',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'year',    ),    3 =>     array (      0 => 'text',      1 => '/calendar/by_week',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_event_list_by_month' => array (  0 =>   array (    0 => 'year',    1 => 'month',  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listByMonthAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'month',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'year',    ),    2 =>     array (      0 => 'text',      1 => '/calendar/by_month',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_event_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendar/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_event_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_event_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_mini_calendar' => array (  0 =>   array (    0 => 'year',    1 => 'month',  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CalendarController::showMiniAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'month',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'year',    ),    2 =>     array (      0 => 'text',      1 => '/calendar/mini',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/calendar/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/calendar/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_category_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CategoryController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendar/category/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_settings_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\SettingsController::updateAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendar/settings/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_settings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BladeTester\\CalendarBundle\\Controller\\SettingsController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendar/settings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_group_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_groupe/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_group_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste_groupe/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_group_show' => array (  0 =>   array (    0 => 'groupName',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'groupName',    ),    1 =>     array (      0 => 'text',      1 => '/liste_groupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_group_edit' => array (  0 =>   array (    0 => 'groupName',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'groupName',    ),    2 =>     array (      0 => 'text',      1 => '/liste_groupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_group_delete' => array (  0 =>   array (    0 => 'groupName',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'groupName',    ),    2 =>     array (      0 => 'text',      1 => '/liste_groupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
