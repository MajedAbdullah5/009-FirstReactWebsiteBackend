<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//Chart Data Controller
$router->get('/chartData','ChartDataController@onAllSelect');

//Client Review Controller
$router->get('/clientReview','ClientReviewController@onSelectClient');

//Contact Table
$router->post('/onSelectContact','ContactController@onSelectContact');

//Course Table
$router->get('/onSelectCourse','CourseController@onSelectCourse');
$router->get('/courseHome','CourseController@onSelectFour');
$router->post('/courseDetails','CourseController@onSelectDetails');

//Footer Table
$router->get('/footer','FooterController@onFooterSelect');

//Home Etc Controller
$router->get('/homeEtc','HomeEtcController@onHomeEtcSelect');


//Video Controller
$router->get('/homeEtc','VideoController@onSelectVideo');

//Total project client
$router->get('/total-client-&-projects','TotalProjectClient@onSelectClient');

//tech desc
$router->get('/techDesc','TechDescController@techDesc');

//Home top title
$router->get('/homeTopTitle','HomeTopTitleController@homeTopTitle');


//Information Table
$router->get('/info','InformationController@onInformationSelect');

//Project Model
$router->get('/projects','ProjectController@onProjectSelect');
$router->get('/projectsHome','ProjectController@onSeletctThree');
$router->post('/projectsDetails','ProjectController@onSeletctDetails');


//Service Model
$router->get('/services','ServiceController@onServiceModel');
