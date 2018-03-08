<?php include 'header.php';?>

    <div class="news">
        <div id="textblock">
            <div id="scramble"></div>
            <a href="1.php" target=_blank><span id="charsCustom1"></span></a><br>
            <a href="2.php" target=_blank><span id="charsCustom2"></span></a><br>
            <a href="3.php" target=_blank><span id="charsCustom3"></span></a><br>
            <a href="4.php" target=_blank><span id="charsCustom4"></span></a><br>
            <a href="5.php" target=_blank><span id="charsCustom5"></span></a><br>
            <a href="6.php" target=_blank><span id="charsCustom6"></span></a><br>
            <a href="7.php" target=_blank><span id="charsCustom7"></span></a><br>
            <a href="8.php" target=_blank><span id="charsCustom8"></span></a><br>
            <a href="9.php" target=_blank><span id="charsCustom9"></span></a><br>
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
                    text: "Local",
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
        
            .to("#charsCustom4", 4, {
                scrambleText: {
                    text: "Technology",
                    chars: "lowercase",
                    revealDelay: 0.5,
                    tweenLength: false,
                    revaelDelay: 0.5,
                    ease: Linear.easeNone
                }
            })
        
            .to("#charsCustom5", 4, {
                scrambleText: {
                    text: "Health",
                    chars: "lowercase",
                    revealDelay: 0.5,
                    tweenLength: false,
                    revaelDelay: 0.5,
                    ease: Linear.easeNone
                }
            })

            .to("#charsCustom6", 4, {
                scrambleText: {
                    text: "Business",
                    chars: "lowercase",
                    revealDelay: 0.5,
                    tweenLength: false,
                    revaelDelay: 0.5,
                    ease: Linear.easeNone
                }
            })

            .to("#charsCustom7", 4, {
                scrambleText: {
                    text: "Sports",
                    chars: "lowercase",
                    revealDelay: 0.5,
                    tweenLength: false,
                    revaelDelay: 0.5,
                    ease: Linear.easeNone
                }
            })

            .to("#charsCustom8", 4, {
                scrambleText: {
                    text: "Science",
                    chars: "lowercase",
                    revealDelay: 0.5,
                    tweenLength: false,
                    revaelDelay: 0.5,
                    ease: Linear.easeNone
                }
            })

            .to("#charsCustom9", 4, {
                scrambleText: {
                    text: "Entertainment",
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
