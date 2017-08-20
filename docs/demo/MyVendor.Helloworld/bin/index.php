<?php
/**
 * This file is part of the BEAR.Sunday package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
use BEAR\Sunday\Extension\Application\AppInterface;
use Doctrine\Common\Annotations\AnnotationRegistry;
use MyVendor\HelloWorld\AppModule;
use Ray\Di\Injector;

require dirname(__DIR__) . '/vendor/autoload.php';
AnnotationRegistry::registerLoader('class_exists');

$app = (new Injector(new AppModule))->getInstance(AppInterface::class);
try {
    $page = $app
        ->resource
        ->get
        ->uri('page://self/index')(['name' => 'BEAR.Sunday'])
        ->transfer($app->responder, $_SERVER);
} catch (\Exception $e) {
    error_log($e);
    exit(1);
}
