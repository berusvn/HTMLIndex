﻿<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="icon" type="image/png" href="image/favicon.ico">
		<title>Tôi Yêu Bạn</title>	    
        <link type="text/css" rel="stylesheet" href="./renxi/default.css">
        <link type="text/css" rel="stylesheet" href="./renxi/scroll.css">
		<script type="text/javascript" src="./renxi/jquery.min.js"></script>
		<script type="text/javascript" src="./renxi/jscex.min.js"></script>
		<script type="text/javascript" src="./renxi/jscex-parser.js"></script>
		<script type="text/javascript" src="./renxi/jscex-jit.js"></script>
		<script type="text/javascript" src="./renxi/jscex-builderbase.min.js"></script>
		<script type="text/javascript" src="./renxi/jscex-async.min.js"></script>
		<script type="text/javascript" src="./renxi/jscex-async-powerpack.min.js"></script>
		<script type="text/javascript" src="./renxi/functions.js" charset="utf-8"></script>
		<script type="text/javascript" src="./renxi/love.js" charset="utf-8"></script>
	    <style type="text/css">
<!--
.STYLE1 {color: #666666}
-->
        </style>
</head>
    <body scroll="no" style="overflow: hidden" bottom="50">
			<audio autoplay="autopaly">
					<source src="music/ido.mp3" type="audio/mp3">
			</audio>  
        <div id="main">
            <div id="error">Trình duyệt của bạn không được hỗ trợ. Để được hỗ trợ liên hệ buianhduc176@gmail.com. Hoặc sử dụng (<a href="http://www.google.cn/chrome">Chrome</a>) và (<a href="http://firefox.com/download/">Firefox</a>)</div>
             <div id="wrap">
                <div id="text">
			        <div id="code">
			      <font color="#3498db"><span class="say">Trọng Nghĩa,</span><br>
						<span class="say"> </span><br>
						<span class="say">Anh đã yêu cưng trên 1 chuyến xe bus :3</span><br>
						<span class="say">Cưng rất dễ thương !</span><br>
						<span class="say">Mỗi tội mất nết... :v !</span><br>
						<span class="say">Anh không ngờ chúng ta lại có những điểm giống nhau?</span><br>
						<span class="say">..."Từ khi yêu Trọng Nghĩa, Nghĩa mạnh mẽ hẳn lên"</span><br>
						<span class="say">Vy Nghĩa sẽ cứ sẽ chấp mà yêu Trọng Nghĩa &lt;3</span><br>
						<span class="say">Hãy cứ tin Nghĩa nhé. 'Vy Nghĩa sẽ chiếm lấy trái tim của Trọng Nghĩa' ---</span><br>
						<span class="say"> </span><br>
                        <span class="say"><span class="space"></span> -- Vy Nghĩa ❤ Trọng Nghĩa --</span></br><br><br><br>
						<span class="say"><b>© 2016 Vy Nghĩa Animation Desniger</b></span><br>
						<span class="say"><b>Facebook:</b> https://www.facebook.com/VyNghiaTN</span><br>
						<span class="say"><b>Đồ họa:</b> Nguyễn Quốc Huy</span><br>
						<span class="say"><b>Bài hát:</b> I Do - 991 </span>
			  </font><p></p>
      </div>
                </div>
                <div id="clock-box">
                    <span class="STYLE1"></span><font color="#FF0000">Vy Nghĩa ❤ Trọng Nghĩa</font>
<span class="STYLE1"> trong: <span>
                  <div id="clock"></div>
              </div>
                <canvas id="canvas" width="1100" height="680"></canvas>
            </div>
            
        </div>
    
    <script>
    </script>

    <script>
    (function(){
        var canvas = $('#canvas');
		
        if (!canvas[0].getContext) {
            $("#error").show();
            return false;        }

        var width = canvas.width();
        var height = canvas.height();        
        canvas.attr("width", width);
        canvas.attr("height", height);
        var opts = {
            seed: {
                x: width / 2 - 20,
                color: "rgb(190, 26, 37)",
                scale: 2
            },
            branch: [
                [535, 680, 570, 250, 500, 200, 30, 100, [
                    [540, 500, 455, 417, 340, 400, 13, 100, [
                        [450, 435, 434, 430, 394, 395, 2, 40]
                    ]],
                    [550, 445, 600, 356, 680, 345, 12, 100, [
                        [578, 400, 648, 409, 661, 426, 3, 80]
                    ]],
                    [539, 281, 537, 248, 534, 217, 3, 40],
                    [546, 397, 413, 247, 328, 244, 9, 80, [
                        [427, 286, 383, 253, 371, 205, 2, 40],
                        [498, 345, 435, 315, 395, 330, 4, 60]
                    ]],
                    [546, 357, 608, 252, 678, 221, 6, 100, [
                        [590, 293, 646, 277, 648, 271, 2, 80]
                    ]]
                ]] 
            ],
            bloom: {
                num: 700,
                width: 1080,
                height: 650,
            },
            footer: {
                width: 1200,
                height: 5,
                speed: 10,
            }
        }

        var tree = new Tree(canvas[0], width, height, opts);
        var seed = tree.seed;
        var foot = tree.footer;
        var hold = 1;

        canvas.click(function(e) {
            var offset = canvas.offset(), x, y;
            x = e.pageX - offset.left;
            y = e.pageY - offset.top;
            if (seed.hover(x, y)) {
                hold = 0; 
                canvas.unbind("click");
                canvas.unbind("mousemove");
                canvas.removeClass('hand');
            }
        }).mousemove(function(e){
            var offset = canvas.offset(), x, y;
            x = e.pageX - offset.left;
            y = e.pageY - offset.top;
            canvas.toggleClass('hand', seed.hover(x, y));
        });

        var seedAnimate = eval(Jscex.compile("async", function () {
            seed.draw();
            while (hold) {
                $await(Jscex.Async.sleep(10));
            }
            while (seed.canScale()) {
                seed.scale(0.95);
                $await(Jscex.Async.sleep(10));
            }
            while (seed.canMove()) {
                seed.move(0, 2);
                foot.draw();
                $await(Jscex.Async.sleep(10));
            }
        }));

        var growAnimate = eval(Jscex.compile("async", function () {
            do {
    	        tree.grow();
                $await(Jscex.Async.sleep(10));
            } while (tree.canGrow());
        }));

        var flowAnimate = eval(Jscex.compile("async", function () {
            do {
    	        tree.flower(2);
                $await(Jscex.Async.sleep(10));
            } while (tree.canFlower());
        }));

        var moveAnimate = eval(Jscex.compile("async", function () {
            tree.snapshot("p1", 240, 0, 610, 680);
            while (tree.move("p1", 500, 0)) {
                foot.draw();
                $await(Jscex.Async.sleep(10));
            }
            foot.draw();
            tree.snapshot("p2", 500, 0, 610, 680);

            canvas.parent().css("background", "url(" + tree.toDataURL('image/png') + ")");
            canvas.css("background", "#ffe");
            $await(Jscex.Async.sleep(300));
            canvas.css("background", "none");
        }));

        var jumpAnimate = eval(Jscex.compile("async", function () {
            var ctx = tree.ctx;
            while (true) {
                tree.ctx.clearRect(0, 0, width, height);
                tree.jump();
                foot.draw();
                $await(Jscex.Async.sleep(25));
            }
        }));

        var textAnimate = eval(Jscex.compile("async", function () {
		    var together = new Date();
		    together.setFullYear(2014,8 , 26); 			
		    together.setHours(0);							
		    together.setMinutes(0);				
		    together.setSeconds(0);					
		    together.setMilliseconds(0);			

		    $("#code").show().typewriter();
            $("#clock-box").fadeIn(500);
            while (true) {
                timeElapse(together);
                $await(Jscex.Async.sleep(1000));
            }
        }));

        var runAsync = eval(Jscex.compile("async", function () {
            $await(seedAnimate());
            $await(growAnimate());
            $await(flowAnimate());
            $await(moveAnimate());

            textAnimate().start();

            $await(jumpAnimate());
        }));

        runAsync().start();
    })();
    </script>
<div style="text-align:center;margin:0px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>© 2016 Vy Nghĩa Animation Desniger</p>
</div>


</body><div></div></html>