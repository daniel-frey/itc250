<?php include 'header.php';?>

    <div class="news">
        <div id="textblock">
            <div id="scramble"></div>
            <a href="1.php" target=_blank><span id="charsCustom1"></span></a><br>
            <a href="2.php" target=_blank><span id="charsCustom2"></span></a><br>
            <a href="3.php" target=_blank><span id="charsCustom3"></span></a>
            <span id="charsNumbers"></span><br>
            <span id="charsUppercase"></span>
            <span id="charsLowercase"></span>
            <div id="newClass"></div>
        </div>
    </div>
    <script>
        var tl = new TimelineMax({
            onUpdate: updateSlider
        });

        tl.to("#scramble", 3, {
                scrambleText: {
                    text: "All the news that's fit to read!",
                    chars: "lowerCase",
                    revealDelay: 0.5,
                    tweenLength: false,
                    ease: Linear.easeNone
                }
            })

            .to("#charsCustom1", 4, {
                scrambleText: {
                    text: "World",
                    chars: "lowercasse",
                    revealDelay: 0.5,
                    tweenLength: false,
                    ease: Linear.easeNone
                }
            })

            .to("#charsCustom2", 4, {
                scrambleText: {
                    text: "Technology",
                    chars: "lowercase",
                    revealDelay: 0.5,
                    tweenLength: false,
                    revealDelay: 0.5,
                    ease: Linear.easeNone
                }
            })

            .to("#charsCustom3", 4, {
                scrambleText: {
                    text: "National",
                    chars: "lowercase",
                    revealDelay: 0.5,
                    tweenLength: false,
                    revaelDelay: 0.5,
                    ease: Linear.easeNone
                }
            })

        $("#scrambleSlider").slider({
            range: false,
            min: 0,
            max: 1,
            step: .001,
            slide: function(event, ui) {
                tl.progress(ui.value).pause();
            },
            stop: function() {
                tl.play();
            }
        });

        function updateSlider() {
            $("#scrambleSlider").slider("value", tl.progress());
        }

    </script>

<?php include 'footer.php';?>
