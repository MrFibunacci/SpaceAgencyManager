<?php
    /*-------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | This file is where you may define all of the routes that are handled
    | by your application. Just tell Framy the URIs it should respond
    | to using a Closure or controller method. Build something great!
    |
    */

    use \app\framework\Component\Route\Klein\Klein;

    $klein = new Klein();

    $klein->get("/", function(){
        view("index");
    });

    $klein->get("/register", function () {
        app("SAM@registerUser", $_POST);
    });

    $klein->get("/login", function () {
        app("SAM@login", $_POST);
    });



    $klein->get("/dashboard", function() {
        view("dashboard");
    });

    $klein->get("/finances", function() {
        view("finances");
    });

    $klein->get("/missions", function() {
        view("missions");
    });

    $klein->get("/contracts", function() {
        view("contracts");
    });

    $klein->get("/locations", function() {
        view("locations");
    });

    $klein->get("/transport", function() {
        view("transport");
    });

/*$klein->with("/[:agency]", function ($request) use ($klein) {
    $klein->get("/dashboard", function() {
        view("dashboard" );
    });
});*/

    // add more routes here ...

    $klein->dispatch();