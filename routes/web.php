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
        \app\custom\Http\Controller\SAM::index();
    });

    $klein->get("/register", function () {
        app("SAM@registerUser", $_POST);
    });

    $klein->get("/login", function() {
        \app\custom\Http\Controller\SAM::login();
    });

    $klein->get("/logout", function() {
        \app\custom\Http\Controller\SAM::logout();
    });

    $klein->with("/[i:agency]", function ($request) use ($klein) {

        /*$klein->get("/dashboard", function($request) {
            view("dashboard");
        });*/

        $klein->get("/finances", function($request) {
            \app\custom\Http\Controller\Finances::get($request->agency);
        });

        $klein->get("/missions", function($request) {
            view("missions");
        });

        $klein->get("/mission", function($request) {
            view("mission");
        });

        $klein->get("/contracts", function($request) {
            view("contracts");
        });

        $klein->get("/locations", function($request) {
            view("locations");
        });

        $klein->get("/logistic", function($request) {
            view("logistic");
        });

        $klein->get("/newsat", function($request) {
            view("newsat");
        });
    });

    // add more routes here ...

    $klein->dispatch();