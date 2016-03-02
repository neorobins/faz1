<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script type="text/javascript">
    swfobject.registerObject("myFlashContent", "9.0.0");
</script>

<!-- Main content -->
<section class="content">

    <div align="center" class='embed-responsive embed-responsive-4by3'>
        <div class="embed-responsive-item">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%" id="myFlashContent">
                <param name="movie" value="<?= base_url(); ?>files/flash/main.swf"/>
                <param name="play" value="true"/>
                <param name="scale" value="exactfit"/>
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="<?= base_url(); ?>files/flash/main.swf" width="100%"
                        height="100%">
                    <param name="play" value="true"/>
                    <param name="scale" value="exactfit"/>
                    <!--<![endif]-->
                    <a href="http://www.adobe.com/go/getflashplayer">
                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"
                             alt="Get Adobe Flash player"/>
                    </a>
                    <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
        </div>
    </div>

</section><!-- /.content -->