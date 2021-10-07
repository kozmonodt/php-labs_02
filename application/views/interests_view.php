<div id="content">
    <script type="text/javascript" src="/js/print_list.js"></script>
    <p id="laba">Мои интересы</p>   
        <?php
            //Print anchor list
            echo "<UL>";
            while($hobbie = current($data)){
                echo "<LI><a href=\"#".key($data)."\">".key($data)."</a></LI>";
                next($data);
            }
            reset($data);
            echo "</UL>";
            //Print text
            while($hobbie = current($data)){
                echo "<p id=\"".key($data)."\">".$hobbie."</p>";
                next($data);
            }
        ?>
    
</div>