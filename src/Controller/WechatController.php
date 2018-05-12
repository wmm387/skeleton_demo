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

        'log' => [
            'level' => 'debug',
            'file' => __DIR__.'/wechat.log',
        ],
	];

	$app = Factory::officialAccount($config);

//	$app->server->push(function ($message) {
//		return "hello world!";
//	});

//    $app->template_message->getPrivateTemplates();

    $app->template_message->send([
        'touser' => 'oIwts0qGX0bcNkQw9lv0zz0wtGDg',
        'template_id' => 'RFTuKAc3efCU2Yjev2wzngZJ3brix8ymYFy8T0u2q6A',
        'url' => 'https://www.baidu.com',
        'data' => [
            'key1' => 'key1',
            'key2' => 'key2',
            'key3' => 'key3',
            'key4' => 'key4',
        ],
    ]);

	$response = $app->server->serve();

	return $response;

    }
}
