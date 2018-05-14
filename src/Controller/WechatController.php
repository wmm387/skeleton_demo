<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
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
//    	$config = [
//    		'app_id' => 'wx9dde0694c01cc015',
//    		'secret' => '294fe7ec5853bf407664973fa4d580b0',
//
//    		'response_type' => 'array',
//
//            'log' => [
//                'level' => 'debug',
//                'file' => __DIR__.'/wechat.log',
//            ],
//    	];
//
//    	$app = Factory::officialAccount($config);
//
//    	$app->server->push(function ($message) {
//    		return "hello world!";
//    	});
//
//        $app->template_message->getPrivateTemplates();
//
//        $app->template_message->send([
//            'touser' => 'oIwts0qGX0bcNkQw9lv0zz0wtGDg',
//            'template_id' => 'Q9PRvDO1sz9c2iXHIohkpgCl8aGNF60nFA7Y_Z_BhxU',
//            'url' => 'https://www.baidu.com',
//            'data' => [
//                'result' => ['您已提交领奖申请','#F00'],
//                'withdrawMoney' => ['value' => 'xxxx元', 'color' => '#550038'],
//                'withdrawTime' => '2013-10-10 12:22:22',
//                'cardInfo' => 'xx银行(尾号xxxx)',
//                'arrivedTime' => '预计xxxxxxx',
//                'remark' => '预计将于xxxx到达您的银行卡',
//            ],
//        ]);
//
//    	$response = $app->server->serve();
//
//    	return $response;

//        $redis = new \Redis();
//        $redis->connect('127.0.0.1',6379);
//        $redis->auth('123456');
//        $data = $redis->get('name');
//
//        return new Response($data);


    }
}
