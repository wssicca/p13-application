<?php

/*
 * This file is part of the P13 package.
 * 
 * (c) Wagner Sicca <wssicca@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require '..' . DIRECTORY_SEPARATOR . 'bootstrap.php';

try {
    $app = p13\core\Application::getInstance();
    $app->run();
} catch (Exception $e) {
    echo "<h1>Exceção capturada</h1>";
    echo "<p>Mensagem: {$e->getMessage()}</p>";
    echo "<p>Arquivo: {$e->getFile()}:{$e->getLine()}</p>";
    echo "<code>{$e->getTraceAsString()}</code>";
}