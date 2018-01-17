<?php

/**
 *  Front Controller
 *  PHP 7.2.0 (cli)
 *  17/01/2018
 *  Sheraz Ali (Developer) https://github.com/sherazali123
 */

class Router {

    /**
     *  An associative array to manage routing table
     *  @var array
     */
    protected $routes = [];

    /**
     *  paramters from the matched route
     *  @var array
     */
    protected $params = [];

    /**
     *  Add a route to the routing table
     *  @param string the name of the route
     *  @param array parameters to control controller, action and others
     *  
     *  @return void
     */
     public function add($route, $params)
     {
        $this->routes[$route] = $params;
     }

     /**
      * Get all the routes from the routing table
      *
      * @return array 
      */
      public function getRoutes()
      {
        return $this->routes;
      }

      /**
       *  Match the url with routes in the routing table and 
       *  return true if the url is correct and found in the table
       *  @param string the url to match
       *
       *  @return boolean decide if the url is found in table
       */
       public function match($url)
       {
           foreach($this->routes as $route => $params){

                if($url === $route){
                    $this->params = $params;
                    return true;
                }

           }
           return false;
       }

       /**
        *  get the list of params matched with url
        *   
        *  @return array 
        */
        public function getParams()
        {
            return $this->params;
        }
}


?>