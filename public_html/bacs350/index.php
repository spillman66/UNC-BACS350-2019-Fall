<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'Project 2';
    
    $page_title = "Madi's Project";
    
    $content = '
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            This is my page for project 2! I am not sure where to go from here...
        </p>
        <p> 
            It is a custom information manager.
        </p>
        <p> 
            Different rooms within this PHP app will contain different types of info.
        </p>
        
        <ul>
            <li>
                <a href="demo">Code Demos</a>
            </li>
            <li>
                <a href="pattern">Design Patterns</a>
            </li>
            <li>
                <a href="project">Projects</a>
            </li>
        </ul>
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
