<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Graphic Design Work";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<!-- Popup Window START -->
<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    Whoa! I haven't finished this page yet, just email me at:
    <a href="mailto:contact@deadfyre.com?" target="_top" style="color: white;"><strong>contact@deadfyre.com</strong></a>
    Or you can slide into my DMs on discord @<b>Drix#8197</b> 😉
</div>
<!-- Popup Window END -->

<!-- Gallery START -->
<div class="container gallery-container">
    <h1>Graphic Showcase</h1>
    <p class="page-description text-center">Created using Adobe Photoshop, Illustrator & Cinema 4D.</p>
    <div class="tz-gallery">
        <div class="row">
        <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/grim-reapers.jpg">
                    <img src="images/graphic_design/grim-reapers.jpg" alt="Grim Reapers Logo">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/Käldr-Beasts.jpg">
                    <img src="images/graphic_design/Käldr-Beasts.jpg" alt="Käldr Beasts Logo">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/OTL.jpg">
                    <img src="images/graphic_design/OTL.jpg" alt="OTL Esports">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/Bk.jpg">
                    <img src="images/graphic_design/Bk.jpg" alt="Bk. Logo">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/infinity8.jpg">
                    <img src="images/graphic_design/infinity8.jpg" alt="Infinity 8">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/spacelips.jpg">
                    <img src="images/graphic_design/spacelips.jpg" alt="Space Lips">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/3DAurora.jpg">
                    <img src="images/graphic_design/3DAurora.jpg" alt="3D Aurora Logo">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/Bazz.jpg">
                    <img src="images/graphic_design/Bazz.jpg" alt="Bazz Logo">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/happynowRemake.jpg">
                    <img src="images/graphic_design/happynowRemake.jpg" alt="Happy Now Remake">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/drixsupreme.jpg">
                    <img src="images/graphic_design/drixsupreme.jpg" alt="Drix Supreme">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/jke.jpg">
                    <img src="images/graphic_design/jke.jpg" alt="Jke Logo">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/rlbanners.jpg">
                    <img src="images/graphic_design/rlbanners.jpg" alt="Rocket League Banners">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/glitch.jpg">
                    <img src="images/graphic_design/glitch.jpg" alt="Glitchy">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/R3DYT.jpg">
                    <img src="images/graphic_design/R3DYT.jpg" alt="R3D Water Esports">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/TLKfortnite.jpg">
                    <img src="images/graphic_design/TLKfortnite.jpg" alt="TLK Fortnite">
                </a>
            </div>
            

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/TLKHead.png">
                    <img src="images/graphic_design/TLKHead.png" alt="TLK Head">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/TLKKnight.png">
                    <img src="images/graphic_design/TLKKnight.png" alt="TLK Knight">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/TLK.jpg">
                    <img src="images/graphic_design/TLK.jpg" alt="TLK">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/RETRO.jpg">
                    <img src="images/graphic_design/RETRO.jpg" alt="Retro">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/zep.png">
                    <img src="images/graphic_design/zep.png" alt="Zep Logo">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/bogan.jpg">
                    <img src="images/graphic_design/bogan.jpg" alt="Bogan Logo">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/Shadowland.png">
                    <img src="images/graphic_design/Shadowland.png" alt="Shadowland Logo">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/soldier.jpg">
                    <img src="images/graphic_design/soldier.jpg" alt="Soldier">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/PaintedLight.jpg">
                    <img src="images/graphic_design/PaintedLight.jpg" alt="Painted Light">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/code.jpg">
                    <img src="images/graphic_design/code.jpg" alt="Code">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/film.jpg">
                    <img src="images/graphic_design/film.jpg" alt="Film">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/hop gems.jpg">
                    <img src="images/graphic_design/hop gems.jpg" alt="Hop Gems">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/boganrl offline.jpg">
                    <img src="images/graphic_design/boganrl offline.jpg" alt="BoganRL Offline Banner">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/painted scope.png">
                    <img src="images/graphic_design/painted scope.png" alt="Painted Scope">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/drix in style.jpg">
                    <img src="images/graphic_design/drix in style.jpg" alt="Drix In Style">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/splosive.jpg">
                    <img src="images/graphic_design/splosive.jpg" alt="Splosive">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/hatchet.jpg">
                    <img src="images/graphic_design/hatchet.jpg" alt="Hatchet">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/freedom.jpg">
                    <img src="images/graphic_design/freedom.jpg" alt="Freedom">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/yt bg1.jpg">
                    <img src="images/graphic_design/yt bg1.jpg" alt="YouTube BG">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/yt bg2.jpg">
                    <img src="images/graphic_design/yt bg2.jpg" alt="YouTube BG">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/dream different.jpg">
                    <img src="images/graphic_design/dream different.jpg" alt="Dream Different">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/drix wallpaper.jpg">
                    <img src="images/graphic_design/drix wallpaper.jpg" alt="Drix Wallpaper">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/eos gaming.jpg">
                    <img src="images/graphic_design/eos gaming.jpg" alt="EOS Gaming">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/its dylan.jpg">
                    <img src="images/graphic_design/its dylan.jpg" alt="It's Dylan">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/gold eye.jpg">
                    <img src="images/graphic_design/gold eye.jpg" alt="Gold Eye">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/mini-me.jpg">
                    <img src="images/graphic_design/mini-me.jpg" alt="Mini-Me">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/sexy.jpg">
                    <img src="images/graphic_design/sexy.jpg" alt="Sexy">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/bokeh.jpg">
                    <img src="images/graphic_design/bokeh.jpg" alt="Bokeh">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/nixture.png">
                    <img src="images/graphic_design/nixture.png" alt="Nixture">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/shooting stars.jpg">
                    <img src="images/graphic_design/shooting stars.jpg" alt="Shooting Stars">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/suit.jpg">
                    <img src="images/graphic_design/suit.jpg" alt="Suit">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/outcome.jpg">
                    <img src="images/graphic_design/outcome.jpg" alt="Outcome">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/drix character.jpg">
                    <img src="images/graphic_design/drix character.jpg" alt="Drix Character">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/nature survivalist.jpg">
                    <img src="images/graphic_design/nature survivalist.jpg" alt="Nature's Survivalist">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/faceless.jpg">
                    <img src="images/graphic_design/faceless.jpg" alt="Faceless">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/retro colour.jpg">
                    <img src="images/graphic_design/retro colour.jpg" alt="Retro Colour">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/lost planet.jpg">
                    <img src="images/graphic_design/lost planet.jpg" alt="Lost Planet">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/pop art.jpg">
                    <img src="images/graphic_design/pop art.jpg" alt="Pop Art">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/fyreisland.jpg">
                    <img src="images/graphic_design/fyreisland.jpg" alt="Fyreisland">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/graphic_design/graphic editor.jpg">
                <img src="images/graphic_design/graphic editor.jpg" alt="Graphic Editor">
            </a>
        </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/pavillin channel.jpg">
                    <img src="images/graphic_design/pavillin channel.jpg" alt="Pavillin Channel Banner">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/wide sea.jpg">
                    <img src="images/graphic_design/wide sea.jpg" alt="Wide Sea">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/graphic_design/green mountain.jpg">
                <img src="images/graphic_design/green mountain.jpg" alt="Green Mountain">
            </a>
        </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/second world patrol.jpg">
                    <img src="images/graphic_design/second world patrol.jpg" alt="Second World Patrol">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/slender.jpg">
                    <img src="images/graphic_design/slender.jpg" alt="Slender">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/p.jpg">
                    <img src="images/graphic_design/p.jpg" alt="P">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/headless.jpg">
                    <img src="images/graphic_design/headless.jpg" alt="Headless">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/parallel lines.jpg">
                    <img src="images/graphic_design/parallel lines.jpg" alt="Parallel Lines">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="images/graphic_design/bluist.jpg">
                <img src="images/graphic_design/bluist.jpg" alt="Bluist">
            </a>
        </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/truro jr rangers.jpg">
                    <img src="images/graphic_design/truro jr rangers.jpg" alt="Truro Jr. Rangers">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/pavillin wallpaper.jpg">
                    <img src="images/graphic_design/pavillin wallpaper.jpg" alt="Pavillin Wallpaper">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/og.jpg">
                    <img src="images/graphic_design/og.jpg" alt="OG Gaming">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/graphic_design/shadow.jpg">
                    <img src="images/graphic_design/shadow.jpg" alt="Shadow">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/graphic_design/snow manip.jpg">
                    <img src="images/graphic_design/snow manip.jpg" alt="Snow Manipulation">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Gallery END -->

<?php include 'footer.php'; ?>