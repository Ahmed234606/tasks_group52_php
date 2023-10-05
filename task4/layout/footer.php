<?php
include 'usersData/Data.php'
?>

</section>
<div id="footer">
    <div id ="news" >
        <ul>
         <marquee>
         <?php foreach( $datafooder as $data ) : ?>         
            <li><a href=""> <?php echo $data?></a></li>
            <?php endforeach ?>
            </marquee>
        </ul>
    </div>  
</div>
</div>

</body>  
</html>