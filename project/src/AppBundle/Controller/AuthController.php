<?php

declare(strict_types=1);

namespace AppBundle\Controller;


use AppBundle\Form\LoginForm;
use AppBundle\Form\SignupForm;
use AppBundle\Service\FormHandler;
use AppBundle\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends Controller
{
    private $formHandler;

    private $userService;

    public function __construct(FormHandler $formHandler, UserService $userService)
    {
        $this->formHandler = $formHandler;
        $this->userService = $userService;
    }

    /**
     * @Route("/login",name="login")
     *
     * @param Request $request
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        $form = $this->createForm(LoginForm::class);
        if ($this->formHandler->handle($form, $request)){
            return $this->redirectToRoute('user_joke_index');
        }
        $authenticationError = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('auth/signin.html.twig', [
            'form' => $form->createView(),
            'authenticationError' => $authenticationError,
            'lastUsername' => $lastUsername
        ]);
    }

    /**
     * @Route("/signup",name="signup")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return Response
     */
    public function signup(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $form = $this->createForm(SignupForm::class);
        if ($this->formHandler->handle($form, $request)) {
            $user = $form->getData();
            $password = $passwordEncoder->encodePassword($user, $user->getRepeatPassword());
            $user->setPassword($password);
            $user->setRepeatPassword('');
            $user->setRoles(['ROLE_USER']);
            $this->userService->save($user);
            return $this->redirectToRoute('joke_index');
        }
        return $this->render('auth/signup.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(){}
}
