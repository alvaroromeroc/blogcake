<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<header class="row">
    <div class="header-image"><?= $this->Html->image('cake.logo.svg') ?></div>
    <div class="header-title">
        <h1>Welcome to CakePHP <?= Configure::version() ?> Red Velvet. Build fast. Grow solid.</h1>
    </div>
</header>


<div class="row">
    <div class="columns large-4">
        <i class="icon support">P</i>
        <h3>Help and Bug Reports</h3>
        <ul>
            <li class="bullet cutlery">
                <a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
                <ul><li>Live chat about CakePHP</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://cakesf.herokuapp.com/">Slack</a>
                <ul><li>CakePHP Slack support</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://github.com/cakephp/cakephp/issues">CakePHP Issues</a>
                <ul><li>CakePHP issues and pull requests</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://discourse.cakephp.org/">CakePHP Forum</a>
                <ul><li>CakePHP official discussion forum</li></ul>
            </li>
        </ul>
    </div>
    <div class="columns large-4">
        <i class="icon docs">r</i>
        <h3>Docs and Downloads</h3>
        <ul>
            <li class="bullet cutlery">
                <a href="https://api.cakephp.org/3.0/">CakePHP API</a>
                <ul><li>Quick Reference</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://book.cakephp.org/3.0/en/">CakePHP Documentation</a>
                <ul><li>Your Rapid Development Cookbook</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://bakery.cakephp.org">The Bakery</a>
                <ul><li>Everything CakePHP</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://plugins.cakephp.org">CakePHP plugins repo</a>
                <ul><li>A comprehensive list of all CakePHP plugins created by the community</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://github.com/cakephp/">CakePHP Code</a>
                <ul><li>For the Development of CakePHP Git repository, Downloads</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://github.com/FriendsOfCake/awesome-cakephp">CakePHP Awesome List</a>
                <ul><li>A curated list of amazingly awesome CakePHP plugins, resources and shiny things.</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://www.cakephp.org">CakePHP</a>
                <ul><li>The Rapid Development Framework</li></ul>
            </li>
        </ul>
    </div>
    <div class="columns large-4">
        <i class="icon training">s</i>
        <h3>Training and Certification</h3>
        <ul>
            <li class="bullet cutlery">
                <a href="https://cakefoundation.org/">Cake Software Foundation</a>
                <ul><li>Promoting development related to CakePHP</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://training.cakephp.org/">CakePHP Training</a>
                <ul><li>Learn to use the CakePHP framework</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://certification.cakephp.org/">CakePHP Certification</a>
                <ul><li>Become a certified CakePHP developer</li></ul>
            </li>
        </ul>
    </div>
</div>

</body>
</html>
