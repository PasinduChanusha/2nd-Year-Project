<?php
session_start();
function component($productname, $productid, $productimg){
    
    $element = "
    
    
                <form action=\"index.php\" method=\"post\">
                   <b>      
    <div class=\"third-type\">
        <div class=\"user-details\">
            <div class=\"user-avatar-thumbnail left-position\">
                <img class=\"left-position\" src=\"$productimg\" alt=\"Avatar\">
                <h5 class=\"left-position\"></h5>
            </div>
            <div class=\"user-login right-position\">
                <h5>14h</h5>
            </div>

        </div>
            <br /><br /><br /><br />
        <div class=\"details\">
            <p>$productid</p>
            </div>
        <div class=\"img-section clearfix\">
            <img src=\"$productimg\" alt=\"insta\">
        </div>
        <div class=\"container\" id=\"container-section\">
            <div class=\"icon-details left-position\">
                <a href=\"#\" id=\"comments-list\"><i class=\"fa fa-comments-o\"></i><span id=\"comment-count\"></span><span> comments</span></a>
            </div>
            <div class=\"icon-details right-position\">
                <a href=\"#\" id=\"likes\"></i></a><label id=\"likes-counter\"></label><span></span>
            </div>

            <div class=\"icon-details add-comments clearfix\">
                <a href=\"#\" id=\"add-comment\">Add Comment...</a>
            </div>
            <div id=\"enter-comments\">
            </div>
            <div id=\"comment-section\">
                
            </div>
        </div>
        <div class=\"clearfix\">
        </div>
        
    </div>
</b>
                </form>
           <br /><br /><br />
    ";
    echo $element;
}

?>
















