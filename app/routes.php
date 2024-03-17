<?php
//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('','User,register');
$this->addRoute('User/register','User,register');
$this->addRoute('User/login','User,login');
$this->addRoute('User/logout','User,logout');
$this->addRoute('Profile/create','Profile,create');
$this->addRoute('Profile/index','Profile,index');
$this->addRoute('Profile/modify','Profile,modify');
$this->addRoute('Publication/create','Publication,create');
$this->addRoute('Publication/list','Publication,list');
$this->addRoute('Publication/delete','Publication,delete');
$this->addRoute('Publication/edit','Publication,edit');
$this->addRoute('Publication/index','Publication,index');
$this->addRoute('Publication/search','Publication,search');
$this->addRoute('Publication/view/(?<id>\d+)$', 'Publication,viewPublication');
$this->addRoute('Comment/add/(?<publication_id>\d+)$', 'Comments,add');
$this->addRoute('Comment/edit/(?<comment_id>\d+)$', 'Comments,edit');
$this->addRoute('Comment/delete/(?<comment_id>\d+)$', 'Comments,delete');




