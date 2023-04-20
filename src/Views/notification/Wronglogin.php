<?php
    class Wronglogin{
        function printError($display,$content){
            // echo "<h3 style='diplay:$display;position: relative;z-index:100;' class='text-center text-uppercase align-center text-white'>$content</h3>";
            echo "<div style='font-size:initial;diplay:$display;position:fixed;bottom:85%;right:50%;z-index:100;opacity:1;' class='m-0 toast' >
            <div class='toast-body bg-dark text-center text-white'>Thông báo</div>
            <div class='toast-body bg-dark text-center text-white'>
                $content
            </div>
          </div>";
        }
    }
?>
