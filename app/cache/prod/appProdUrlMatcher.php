<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/categorie')) {
            // categorie
            if (rtrim($pathinfo, '/') === '/categorie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorie');
                }

                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie',);
            }

            // categorie_show
            if (preg_match('#^/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::showAction',));
            }

            // categorie_new
            if ($pathinfo === '/categorie/new') {
                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
            }

            // categorie_create
            if ($pathinfo === '/categorie/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categorie_create;
                }

                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
            }
            not_categorie_create:

            // categorie_edit
            if (preg_match('#^/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::editAction',));
            }

            // categorie_update
            if (preg_match('#^/categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categorie_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_update')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::updateAction',));
            }
            not_categorie_update:

            // categorie_delete
            if (preg_match('#^/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categorie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\CategorieController::deleteAction',));
            }
            not_categorie_delete:

        }

        if (0 === strpos($pathinfo, '/offres')) {
            // offres
            if (rtrim($pathinfo, '/') === '/offres') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'offres');
                }

                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::indexAction',  '_route' => 'offres',);
            }

            // offres_show
            if (preg_match('#^/offres/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offres_show')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::showAction',));
            }

            // offres_new
            if ($pathinfo === '/offres/new') {
                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::newAction',  '_route' => 'offres_new',);
            }

            // offres_create
            if ($pathinfo === '/offres/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offres_create;
                }

                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::createAction',  '_route' => 'offres_create',);
            }
            not_offres_create:

            // offres_edit
            if (preg_match('#^/offres/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offres_edit')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::editAction',));
            }

            // offres_update
            if (preg_match('#^/offres/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_offres_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offres_update')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::updateAction',));
            }
            not_offres_update:

            // offres_delete
            if (preg_match('#^/offres/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_offres_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offres_delete')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\OffresController::deleteAction',));
            }
            not_offres_delete:

        }

        if (0 === strpos($pathinfo, '/produit')) {
            // produit_ajout
            if ($pathinfo === '/produit/ajout-produit') {
                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\ProduitController::AjoutproduitAction',  '_route' => 'produit_ajout',);
            }

            // produit_liste
            if ($pathinfo === '/produit/liste-produit') {
                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\ProduitController::listeproduitAction',  '_route' => 'produit_liste',);
            }

            // produit_detail
            if (0 === strpos($pathinfo, '/produit/detail-produit') && preg_match('#^/produit/detail\\-produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_detail')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\ProduitController::detailproduitAction',));
            }

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact_ajout
            if ($pathinfo === '/contact/ajout-contact') {
                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\ContactController::AjoutcontactAction',  '_route' => 'contact_ajout',);
            }

            // contact_liste
            if ($pathinfo === '/contact/liste-contact') {
                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\ContactController::ListecontactAction',  '_route' => 'contact_liste',);
            }

            // contact_detail
            if (0 === strpos($pathinfo, '/contact/detail-contact') && preg_match('#^/contact/detail\\-contact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_detail')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\ContactController::detailcontactAction',));
            }

            // contact_modifier
            if (0 === strpos($pathinfo, '/contact/modifier-contact') && preg_match('#^/contact/modifier\\-contact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_modifier')), array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\ContactController::modifiercontactAction',));
            }

        }

        // suivi_vente_index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::indexAction',  '_route' => 'suivi_vente_index',);
        }

        // suivi_vente_admin
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'suivi_vente_admin');
            }

            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::adminAction',  '_route' => 'suivi_vente_admin',);
        }

        // admin_listeadmin
        if ($pathinfo === '/liste-admin') {
            return array (  '_controller' => 'Utilisateur\\UtilisateurBundle\\Controller\\DefaultController::adminAction',  '_route' => 'admin_listeadmin',);
        }

        // admin_supprimeadmin
        if (0 === strpos($pathinfo, '/supprimeradmin') && preg_match('#^/supprimeradmin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_supprimeadmin')), array (  '_controller' => 'Utilisateur\\UtilisateurBundle\\Controller\\DefaultController::supprimeAdminAction',));
        }

        // suivi_vente_chef
        if ($pathinfo === '/chef') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::chefAction',  '_route' => 'suivi_vente_chef',);
        }

        // suivi_test_chef
        if ($pathinfo === '/testvente') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::testventeAction',  '_route' => 'suivi_test_chef',);
        }

        // lite_vente_chef
        if ($pathinfo === '/liste-vente') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::listesventeAction',  '_route' => 'lite_vente_chef',);
        }

        // oc_global_resultat-resultat1
        if ($pathinfo === '/resultatrecherche1') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::ResultatAction',  '_route' => 'oc_global_resultat-resultat1',);
        }

        // PDF_categ
        if ($pathinfo === '/pdf-categories') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\PDFController::pdfcatAction',  '_route' => 'PDF_categ',);
        }

        if (0 === strpos($pathinfo, '/chart')) {
            // stat_bar
            if ($pathinfo === '/chartbar') {
                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\ChartController::profitsHistoryAction',  '_route' => 'stat_bar',);
            }

            // stat_admin
            if ($pathinfo === '/chartline') {
                return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\ChartController::VentestatAction',  '_route' => 'stat_admin',);
            }

        }

        // recette_liste
        if ($pathinfo === '/liste-recette') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\RecetteController::indexAction',  '_route' => 'recette_liste',);
        }

        // recette_resultat
        if ($pathinfo === '/resultat-recette') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\RecetteController::ResultatAction',  '_route' => 'recette_resultat',);
        }

        // your_own_calendar_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'your_own_calendar_homepage')), array (  '_controller' => 'Your\\OwnCalendarBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/calendar')) {
            // calendar_index
            if ($pathinfo === '/calendar') {
                return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::indexAction',  '_route' => 'calendar_index',);
            }

            // calendar_event_list
            if ($pathinfo === '/calendar/list') {
                return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listAction',  '_route' => 'calendar_event_list',);
            }

            if (0 === strpos($pathinfo, '/calendar/by_')) {
                // calendar_event_list_by_day
                if (0 === strpos($pathinfo, '/calendar/by_day') && preg_match('#^/calendar/by_day/(?P<year>[^/]++)/(?P<month>[^/]++)/(?P<day>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_list_by_day')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listByDayAction',));
                }

                // calendar_event_list_by_week
                if (0 === strpos($pathinfo, '/calendar/by_week') && preg_match('#^/calendar/by_week/(?P<year>[^/]++)/(?P<month>[^/]++)/(?P<day>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_list_by_week')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listByWeekAction',));
                }

                // calendar_event_list_by_month
                if (0 === strpos($pathinfo, '/calendar/by_month') && preg_match('#^/calendar/by_month/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_list_by_month')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listByMonthAction',));
                }

            }

            // calendar_event_add
            if ($pathinfo === '/calendar/add') {
                return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::addAction',  '_route' => 'calendar_event_add',);
            }

            // calendar_event_edit
            if (preg_match('#^/calendar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_edit')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::editAction',));
            }

            // calendar_event_delete
            if (preg_match('#^/calendar/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_delete')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::deleteAction',));
            }

            // calendar_mini_calendar
            if (0 === strpos($pathinfo, '/calendar/mini') && preg_match('#^/calendar/mini/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_mini_calendar')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CalendarController::showMiniAction',));
            }

            if (0 === strpos($pathinfo, '/calendar/category')) {
                // calendar_category_edit
                if (preg_match('#^/calendar/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_category_edit')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CategoryController::editAction',));
                }

                // calendar_category_delete
                if (preg_match('#^/calendar/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_category_delete')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CategoryController::deleteAction',));
                }

                // calendar_category_add
                if ($pathinfo === '/calendar/category/add') {
                    return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CategoryController::addAction',  '_route' => 'calendar_category_add',);
                }

            }

            if (0 === strpos($pathinfo, '/calendar/settings')) {
                // calendar_settings_update
                if ($pathinfo === '/calendar/settings/update') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_calendar_settings_update;
                    }

                    return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\SettingsController::updateAction',  '_route' => 'calendar_settings_update',);
                }
                not_calendar_settings_update:

                // calendar_settings
                if ($pathinfo === '/calendar/settings') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_calendar_settings;
                    }

                    return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\SettingsController::indexAction',  '_route' => 'calendar_settings',);
                }
                not_calendar_settings:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/liste_groupe')) {
            // fos_user_group_list
            if ($pathinfo === '/liste_groupe/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/liste_groupe/new') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/liste_groupe/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/liste_groupe/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }

            // fos_user_group_delete
            if (preg_match('#^/liste_groupe/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
