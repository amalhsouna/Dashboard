<?php

namespace Utilisateur\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function adminAction()
    { 
        $userManager = $this->get('fos_user.user_manager');
        $userss = $userManager->findUsers();
        $users1 = array();
        $n = 0;
        foreach ($userss AS $user1 ) {

                $users1[$n]=$user1 ;
                $n = $n+1;

        }


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT a FROM UtilisateurBundle:Utilisateur a");
        $paginator = $this->get('knp_paginator');
        $users = $paginator->paginate($query,
         $this->get('request')->query->get('page', 1), 3);

        return $this->render('UtilisateurBundle:Liste:liste-admin.html.twig',array('users' =>$users,"nbreutil"=>$n));
    }
    public function supprimeAdminAction($id)
    {
        $userManager = $this->get('fos_user.user_manager');

// Pour charger un utilisateur
        $user = $userManager->findUserBy(array('id' => $id));
// Pour supprimer un utilisateur
        $userManager->deleteUser($user);
        return $this->redirect($this->generateUrl('admin_listeadmin'));
    }

}
