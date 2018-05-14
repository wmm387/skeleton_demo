<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {

        $username = $request->request->get('userName');
        $password = $request->request->get('password');
        $type = $request->request->get('type');

        $test  =$request->getContent();
        $data = json_encode($test);


//        $data  = array();
//        foreach ($test as $item) {
//            array_push($data, $item);
//        }



//        if ($username === 'root' && $password === 'root') {
//            $data = array('status' => 'ok', 'type' => $type, 'currentAuthority' => 'admin');
//        } else {
//            $data = array('status' => 'error', 'type' => $type, 'currentAuthority' => 'guest');
//        }

        return new Response($data);

    }
}
