	<div id="layout">
        <div id="content">
            <div id="pageTitle" class="spacedOut">
                <h2>Dem cakes be da shit</h2>
            </div>
            
            <div id="nonJsBanner" class="spacedOut">
                <img src="images/sprinkles.jpg" alt="The Little Cake Maker">
            </div>
            <div id="slider" class="pix_diapo banner spacedOut">
                <img id="imgChanger" src="images/sprinkles.jpg" alt="The Little Cake Maker" />    
            </div>
            
        </div>
        
        <div id="footer-root"></div>
    
    </div>
    <div id='footer' class="two-col">
		This is the footer.
	</div>
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!--
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
    -->
    <script src="js/index.js"></script>
    <script>
    $(document).ready(function () {
        if (screen.width>854) {
            load_banner();
        }
    });
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>