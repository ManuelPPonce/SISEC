<?php

function
 setActive($routeName){

    return request()->routeIs($routeName) ? 'active' : '';
 }

 class Paginator {

    private $_conn;
       private $_limit;
       private $_page;
       private $_query;
       private $_total;

}
