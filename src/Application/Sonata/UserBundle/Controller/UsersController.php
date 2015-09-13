<?php
/**
 * Created by PhpStorm.
 * User: viralpatel
 * Date: 2015-09-13
 * Time: 3:57 PM
 */

namespace Application\Sonata\UserBundle\Controller;


use Application\Sonata\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class UsersController extends Controller
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
    /**
     * @return array
     * @View()
     */
    public function getUsersAction()
    {
        $users = $this->getDoctrine()->getRepository('ApplicationSonataUserBundle:User')->findAll();

        return array('users' => $users);
    }

    /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="ApplicationSonataUserBundle:User")
     */
    public function getUserAction(User $user)
    {
        return array('user'=> $user);
    }
}