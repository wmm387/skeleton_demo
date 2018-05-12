<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EasyWeChat\Factory;

class WechatController extends Controller
{
    /**
     * @Route("/wechat", name="wechat")
     */
    public function index()
    {
	$config = [
		'app_id' => 'wx9dde0694c01cc015',
		'secret' => '294fe7ec5853bf407664973fa4d580b0',

		'response_type' => 'array',
	];

	$app = Factory::officialAccount($config);

	$app->server->push(function ($message) {
		return "hello world!";
	});

	$response = $app->server->serve();

	return $response;

    }
}
