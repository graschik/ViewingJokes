<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Joke;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Joke controller.
 */
class JokeController extends Controller
{
    /**
     * Lists all joke entities.
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/jokes", name="joke_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jokes = $em->getRepository('AppBundle:Joke')->findAll();

        return $this->render('joke/index.html.twig', array(
            'jokes' => $jokes,
        ));
    }

    /**
     * Lists all joke entities.
     * @Route("/jokes/{category_id}", name="user_joke_index", defaults={"category_id"=null}, requirements={"category_id": "\d"})
     * @Method("GET")
     * @param Request $request
     * @param int $category_id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function userIndexAction(Request $request, $category_id)
    {
        $em = $this->getDoctrine()->getManager();

        $jokes = $em->getRepository('AppBundle:Joke')->findBy(['offered' => false]);

        $categoryName = null;

        if ($category_id != null) {
            $jokes = $em->getRepository('AppBundle:Joke')->findBy(['category' => $category_id, 'offered' => false]);
            $categoryName = $em->getRepository('AppBundle:Category')->find($category_id);
        }

        return $this->render('joke/user_index.html.twig', array(
            'jokes' => $jokes,
            'categories' => $em->getRepository('AppBundle:Category')->findAll(),
            'categoryName' => $categoryName,
        ));
    }

    /**
     * Creates a new joke entity.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/jokes/new", name="joke_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $joke = new Joke();
        $form = $this->createForm('AppBundle\Form\JokeType', $joke);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $joke->setOffered(false);
            $em->persist($joke);
            $em->flush();

            return $this->redirectToRoute('joke_show', array('id' => $joke->getId()));
        }

        return $this->render('joke/new.html.twig', array(
            'joke' => $joke,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new joke entity.
     *
     * @IsGranted("ROLE_USER")
     * @Route("/jokes/offer", name="joke_offer")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function offerJoke(Request $request)
    {
        $joke = new Joke();
        $form = $this->createForm('AppBundle\Form\JokeType', $joke);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $joke->setOffered(true);
            $em->persist($joke);
            $em->flush();

            return $this->redirectToRoute('user_joke_index');
        }

        return $this->render('joke/offer.html.twig', array(
            'joke' => $joke,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new joke entity.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Route("/jokes/accept/{id}", name="joke_accept")
     * @Method({"GET"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function acceptJoke(Request $request, $id)
    {
        $joke = $this->getDoctrine()->getRepository(Joke::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $joke->setOffered(false);

        $em->persist($joke);
        $em->flush();

        return $this->render('joke/index.html.twig', array(
            'jokes' => $em->getRepository(Joke::class)->findAll(),
        ));
    }

    /**
     * Finds and displays a joke entity.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/jokes/{id}", name="joke_show")
     * @Method("GET")
     * @param Joke $joke
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Joke $joke)
    {
        $deleteForm = $this->createDeleteForm($joke);

        return $this->render('joke/show.html.twig', array(
            'joke' => $joke,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing joke entity.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/jokes/{id}/edit", name="joke_edit")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param Joke $joke
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, Joke $joke)
    {
        $deleteForm = $this->createDeleteForm($joke);
        $editForm = $this->createForm('AppBundle\Form\JokeType', $joke);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('joke_edit', array('id' => $joke->getId()));
        }

        return $this->render('joke/edit.html.twig', array(
            'joke' => $joke,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a joke entity.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/jokes/{id}", name="joke_delete")
     * @Method("DELETE")
     * @param Request $request
     * @param Joke $joke
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Joke $joke)
    {
        $form = $this->createDeleteForm($joke);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($joke);
            $em->flush();
        }

        return $this->redirectToRoute('joke_index');
    }

    /**
     * Creates a form to delete a joke entity.
     *
     * @param Joke $joke The joke entity
     *
     * @return \Symfony\Component\Form\Form|\Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Joke $joke)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('joke_delete', array('id' => $joke->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
