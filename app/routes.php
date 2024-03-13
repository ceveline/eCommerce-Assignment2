<?php
//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('User/register','User,register');
$this->addRoute('User/login','User,login');
$this->addRoute('User/logout','User,logout');
$this->addRoute('Profile/create','Profile,create');
$this->addRoute('Profile/index','Profile,index');
$this->addRoute('Profile/modify','Profile,modify');
