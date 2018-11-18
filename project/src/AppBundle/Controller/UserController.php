<?php

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/users", name="users_index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function users(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository(User::class)->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/status/{id}", name="users_change_status")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function changeUsersStatus(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository(User::class)->find($id);
        $users = $em->getRepository(User::class)->findAll();

        $user->setIsActive(!$user->getisActive());

        $em->persist($user);
        $em->flush();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }
}