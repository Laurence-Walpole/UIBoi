<?php
include 'UIBoi/AutoLoader.php';

use UiBoi\Components\TextBox;
use UIBoi\Form;

$form = new Form('test', 'test', 'test', 'test', '', '');
$txtBox = new TextBox('txtbox1', '', 'txtbox1', 'txtbox');
$form->addComponent($txtBox);

$form->draw();