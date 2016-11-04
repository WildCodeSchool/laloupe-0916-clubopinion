<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/club')) {
            // club_index
            if (rtrim($pathinfo, '/') === '/club') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_club_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'club_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\ClubController::indexAction',  '_route' => 'club_index',);
            }
            not_club_index:

            // club_edit
            if (preg_match('#^/club/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_club_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_edit')), array (  '_controller' => 'ClubBundle\\Controller\\ClubController::editAction',));
            }
            not_club_edit:

            // club_delete
            if (preg_match('#^/club/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_club_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_delete')), array (  '_controller' => 'ClubBundle\\Controller\\ClubController::deleteAction',));
            }
            not_club_delete:

        }

        // club_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'club_homepage');
            }

            return array (  '_controller' => 'ClubBundle\\Controller\\ClubController::indexAction',  '_route' => 'club_homepage',);
        }

        if (0 === strpos($pathinfo, '/av3')) {
            // av3_index
            if (rtrim($pathinfo, '/') === '/av3') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_av3_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'av3_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\av3Controller::indexAction',  '_route' => 'av3_index',);
            }
            not_av3_index:

            // av3_edit
            if (preg_match('#^/av3/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_av3_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'av3_edit')), array (  '_controller' => 'ClubBundle\\Controller\\av3Controller::editAction',));
            }
            not_av3_edit:

            // av3_delete
            if (preg_match('#^/av3/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_av3_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'av3_delete')), array (  '_controller' => 'ClubBundle\\Controller\\av3Controller::deleteAction',));
            }
            not_av3_delete:

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact_index
            if (rtrim($pathinfo, '/') === '/contact') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contact_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contact_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\contactController::indexAction',  '_route' => 'contact_index',);
            }
            not_contact_index:

            // contact_edit
            if (preg_match('#^/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_contact_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_edit')), array (  '_controller' => 'ClubBundle\\Controller\\contactController::editAction',));
            }
            not_contact_edit:

            // contact_delete
            if (preg_match('#^/contact/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_contact_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_delete')), array (  '_controller' => 'ClubBundle\\Controller\\contactController::deleteAction',));
            }
            not_contact_delete:

        }

        if (0 === strpos($pathinfo, '/av')) {
            if (0 === strpos($pathinfo, '/av2')) {
                // av2_index
                if (rtrim($pathinfo, '/') === '/av2') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_av2_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'av2_index');
                    }

                    return array (  '_controller' => 'ClubBundle\\Controller\\av2Controller::indexAction',  '_route' => 'av2_index',);
                }
                not_av2_index:

                // av2_edit
                if (preg_match('#^/av2/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_av2_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'av2_edit')), array (  '_controller' => 'ClubBundle\\Controller\\av2Controller::editAction',));
                }
                not_av2_edit:

                // av2_delete
                if (preg_match('#^/av2/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_av2_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'av2_delete')), array (  '_controller' => 'ClubBundle\\Controller\\av2Controller::deleteAction',));
                }
                not_av2_delete:

            }

            if (0 === strpos($pathinfo, '/av1')) {
                // av1_index
                if (rtrim($pathinfo, '/') === '/av1') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_av1_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'av1_index');
                    }

                    return array (  '_controller' => 'ClubBundle\\Controller\\av1Controller::indexAction',  '_route' => 'av1_index',);
                }
                not_av1_index:

                // av1_edit
                if (preg_match('#^/av1/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_av1_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'av1_edit')), array (  '_controller' => 'ClubBundle\\Controller\\av1Controller::editAction',));
                }
                not_av1_edit:

                // av1_delete
                if (preg_match('#^/av1/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_av1_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'av1_delete')), array (  '_controller' => 'ClubBundle\\Controller\\av1Controller::deleteAction',));
                }
                not_av1_delete:

            }

        }

        if (0 === strpos($pathinfo, '/presentation')) {
            // presentation_index
            if (rtrim($pathinfo, '/') === '/presentation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_presentation_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'presentation_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\presentationController::indexAction',  '_route' => 'presentation_index',);
            }
            not_presentation_index:

            // presentation_edit
            if (preg_match('#^/presentation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_presentation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation_edit')), array (  '_controller' => 'ClubBundle\\Controller\\presentationController::editAction',));
            }
            not_presentation_edit:

            // presentation_delete
            if (preg_match('#^/presentation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_presentation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation_delete')), array (  '_controller' => 'ClubBundle\\Controller\\presentationController::deleteAction',));
            }
            not_presentation_delete:

        }

        if (0 === strpos($pathinfo, '/club_sup')) {
            // club_sup_index
            if (rtrim($pathinfo, '/') === '/club_sup') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_club_sup_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'club_sup_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\club_supController::indexAction',  '_route' => 'club_sup_index',);
            }
            not_club_sup_index:

            // club_sup_edit
            if (preg_match('#^/club_sup/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_club_sup_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_sup_edit')), array (  '_controller' => 'ClubBundle\\Controller\\club_supController::editAction',));
            }
            not_club_sup_edit:

            // club_sup_delete
            if (preg_match('#^/club_sup/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_club_sup_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_sup_delete')), array (  '_controller' => 'ClubBundle\\Controller\\club_supController::deleteAction',));
            }
            not_club_sup_delete:

        }

        if (0 === strpos($pathinfo, '/rcvl')) {
            // rcvl_index
            if (rtrim($pathinfo, '/') === '/rcvl') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rcvl_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rcvl_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\RcvlController::indexAction',  '_route' => 'rcvl_index',);
            }
            not_rcvl_index:

            // rcvl_edit
            if (preg_match('#^/rcvl/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_rcvl_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rcvl_edit')), array (  '_controller' => 'ClubBundle\\Controller\\RcvlController::editAction',));
            }
            not_rcvl_edit:

            // rcvl_delete
            if (preg_match('#^/rcvl/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_rcvl_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rcvl_delete')), array (  '_controller' => 'ClubBundle\\Controller\\RcvlController::deleteAction',));
            }
            not_rcvl_delete:

        }

        if (0 === strpos($pathinfo, '/ara')) {
            // ara_index
            if (rtrim($pathinfo, '/') === '/ara') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ara_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ara_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\AraController::indexAction',  '_route' => 'ara_index',);
            }
            not_ara_index:

            // ara_edit
            if (preg_match('#^/ara/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ara_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ara_edit')), array (  '_controller' => 'ClubBundle\\Controller\\AraController::editAction',));
            }
            not_ara_edit:

            // ara_delete
            if (preg_match('#^/ara/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ara_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ara_delete')), array (  '_controller' => 'ClubBundle\\Controller\\AraController::deleteAction',));
            }
            not_ara_delete:

        }

        if (0 === strpos($pathinfo, '/nosmembres')) {
            // pagemembre_index
            if (rtrim($pathinfo, '/') === '/nosmembres') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pagemembre_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pagemembre_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\PageMembreController::indexAction',  '_route' => 'pagemembre_index',);
            }
            not_pagemembre_index:

            // pagemembre_edit
            if (preg_match('#^/nosmembres/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pagemembre_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagemembre_edit')), array (  '_controller' => 'ClubBundle\\Controller\\PageMembreController::editAction',));
            }
            not_pagemembre_edit:

            // pagemembre_delete
            if (preg_match('#^/nosmembres/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pagemembre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagemembre_delete')), array (  '_controller' => 'ClubBundle\\Controller\\PageMembreController::deleteAction',));
            }
            not_pagemembre_delete:

        }

        if (0 === strpos($pathinfo, '/membres')) {
            // membres_index
            if (rtrim($pathinfo, '/') === '/membres') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_membres_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'membres_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\MembresController::indexAction',  '_route' => 'membres_index',);
            }
            not_membres_index:

            // membres_edit
            if (preg_match('#^/membres/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_membres_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membres_edit')), array (  '_controller' => 'ClubBundle\\Controller\\MembresController::editAction',));
            }
            not_membres_edit:

            // membres_delete
            if (preg_match('#^/membres/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_membres_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membres_delete')), array (  '_controller' => 'ClubBundle\\Controller\\MembresController::deleteAction',));
            }
            not_membres_delete:

        }

        if (0 === strpos($pathinfo, '/ev')) {
            if (0 === strpos($pathinfo, '/evrcvl')) {
                // evrcvl_index
                if (rtrim($pathinfo, '/') === '/evrcvl') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_evrcvl_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'evrcvl_index');
                    }

                    return array (  '_controller' => 'ClubBundle\\Controller\\EvRcvlController::indexAction',  '_route' => 'evrcvl_index',);
                }
                not_evrcvl_index:

                // evrcvl_edit
                if (preg_match('#^/evrcvl/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_evrcvl_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evrcvl_edit')), array (  '_controller' => 'ClubBundle\\Controller\\EvRcvlController::editAction',));
                }
                not_evrcvl_edit:

                // evrcvl_delete
                if (preg_match('#^/evrcvl/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_evrcvl_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evrcvl_delete')), array (  '_controller' => 'ClubBundle\\Controller\\EvRcvlController::deleteAction',));
                }
                not_evrcvl_delete:

            }

            if (0 === strpos($pathinfo, '/evara')) {
                // evara_index
                if (rtrim($pathinfo, '/') === '/evara') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_evara_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'evara_index');
                    }

                    return array (  '_controller' => 'ClubBundle\\Controller\\EvAraController::indexAction',  '_route' => 'evara_index',);
                }
                not_evara_index:

                // evara_edit
                if (preg_match('#^/evara/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_evara_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evara_edit')), array (  '_controller' => 'ClubBundle\\Controller\\EvAraController::editAction',));
                }
                not_evara_edit:

                // evara_delete
                if (preg_match('#^/evara/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_evara_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evara_delete')), array (  '_controller' => 'ClubBundle\\Controller\\EvAraController::deleteAction',));
                }
                not_evara_delete:

            }

            if (0 === strpos($pathinfo, '/evsup')) {
                // evsup_index
                if (rtrim($pathinfo, '/') === '/evsup') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_evsup_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'evsup_index');
                    }

                    return array (  '_controller' => 'ClubBundle\\Controller\\EvSupController::indexAction',  '_route' => 'evsup_index',);
                }
                not_evsup_index:

                // evsup_edit
                if (preg_match('#^/evsup/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_evsup_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evsup_edit')), array (  '_controller' => 'ClubBundle\\Controller\\EvSupController::editAction',));
                }
                not_evsup_edit:

                // evsup_delete
                if (preg_match('#^/evsup/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_evsup_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evsup_delete')), array (  '_controller' => 'ClubBundle\\Controller\\EvSupController::deleteAction',));
                }
                not_evsup_delete:

            }

            if (0 === strpos($pathinfo, '/evenements')) {
                // evenements_index
                if (rtrim($pathinfo, '/') === '/evenements') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_evenements_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'evenements_index');
                    }

                    return array (  '_controller' => 'ClubBundle\\Controller\\EvenementsController::indexAction',  '_route' => 'evenements_index',);
                }
                not_evenements_index:

                // evenements_edit
                if (preg_match('#^/evenements/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_evenements_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenements_edit')), array (  '_controller' => 'ClubBundle\\Controller\\EvenementsController::editAction',));
                }
                not_evenements_edit:

                // evenements_delete
                if (preg_match('#^/evenements/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_evenements_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenements_delete')), array (  '_controller' => 'ClubBundle\\Controller\\EvenementsController::deleteAction',));
                }
                not_evenements_delete:

            }

        }

        if (0 === strpos($pathinfo, '/araevenements')) {
            // araevenements_index
            if (rtrim($pathinfo, '/') === '/araevenements') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_araevenements_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'araevenements_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\AraEvenementsController::indexAction',  '_route' => 'araevenements_index',);
            }
            not_araevenements_index:

            // araevenements_edit
            if (preg_match('#^/araevenements/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_araevenements_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'araevenements_edit')), array (  '_controller' => 'ClubBundle\\Controller\\AraEvenementsController::editAction',));
            }
            not_araevenements_edit:

            // araevenements_delete
            if (preg_match('#^/araevenements/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_araevenements_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'araevenements_delete')), array (  '_controller' => 'ClubBundle\\Controller\\AraEvenementsController::deleteAction',));
            }
            not_araevenements_delete:

        }

        if (0 === strpos($pathinfo, '/supevenements')) {
            // supevenements_index
            if (rtrim($pathinfo, '/') === '/supevenements') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_supevenements_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supevenements_index');
                }

                return array (  '_controller' => 'ClubBundle\\Controller\\SupEvenementsController::indexAction',  '_route' => 'supevenements_index',);
            }
            not_supevenements_index:

            // supevenements_edit
            if (preg_match('#^/supevenements/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_supevenements_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supevenements_edit')), array (  '_controller' => 'ClubBundle\\Controller\\SupEvenementsController::editAction',));
            }
            not_supevenements_edit:

            // supevenements_delete
            if (preg_match('#^/supevenements/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_supevenements_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supevenements_delete')), array (  '_controller' => 'ClubBundle\\Controller\\SupEvenementsController::deleteAction',));
            }
            not_supevenements_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
