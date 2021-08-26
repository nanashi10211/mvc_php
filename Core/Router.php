<?php

class Router {
    /**
     * Routing table using array
     * @var array
     */
    protected $routes = [];

    /**
     * Parameters from the matched route
     * @var array
     */

     protected $params = [];

    /**
     * Add a route to the routing table
     * @return void
     */

    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }
    /**
     * Match the route to the routes in the routing table,
     * 
     * @return boolean true if a match found , false otherwise
     */
    public function match($url)
    {
        foreach ($this->routes as $route => $params)
        {
            if($url == $route) {
                $this->params = $params;
                return true;
            }

        }
        return false;

    }
    /**
     * Get current matched parameters
     * 
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * 
     *  GET all the routes from the routing table
     * 
     *  @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }


 //--------
}

