<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 11/6/13
 * Time: 1:55 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;


class MyController {

    public function firstAction($name)
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        return new Response("Hello, ".$name);#$this->render('AcmeDemoBundle:Welcome:index.html.twig');
    }

}