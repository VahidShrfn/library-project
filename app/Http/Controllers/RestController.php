<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class RestController extends BaseController
{
    public function index()
    {
        return 'Dear Vahid! <br>
                This is a brief - but fairly enough - introduction to Restful Web API:<br>
                <b>"An address (a url) in your app that returns data in form of JSON/XML."</b>
                <br><br>
                REST API just returns data in form of JSON or XML because most of the 
                REST clients are programs, unlike web applications <br>which their responses
                are generally view (HTML+CSS) because they are intended for human viewers.
                This is the fundamental <br>difference between a REST API and a web application.
                <br> 
                This way the Rest Url (also called Rest resource) can be called from a web client,
                android client, another server (PHP, Java, etc) <br>and that\'s the first 
                principle (constraint) of the RestApi: Uniform Interface.
                You\'ve provided a Uniform url for all your clients of <br>any type.
                    <br><br>
                Current url (/api/test) is a bit different from other addresses in your web app.
                The value returned by the controller method behind <br>this url has been passed 
                directly to your browser (client) rather to be used to find a web page. 
                But isn\'t exactly Restful yet, because <br>I haven\'nt followed this principle. 
                <br>Can you find out where I\'ve violated that?!!
                A hint: I want this message to be easily readable in your browser!';
    }
}
