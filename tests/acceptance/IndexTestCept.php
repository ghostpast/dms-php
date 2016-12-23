<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Посещение главной страницы');
$I->amOnPage('/');
$I->see('Сайт автосалона');
