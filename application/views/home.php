<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		$(document).ready(function() {
		    function checkWidth() {
		        var windowsize = $(window).width();
		        if (windowsize < 420) {
		        	$("#tagVote").attr("src","<?php echo base_url();?>assets/image/tagVote_mobile.jpg");
		        } else {
		        	$("#tagVote").attr("src","<?php echo base_url();?>assets/image/tagVote.jpg");
		        }
		    }
		    checkWidth();

		    $(window).resize(checkWidth);
		});
		
	</script>
</head>
<body>
	<div class="container-fluid" style="">
		<div class="row">
			<img src="<?php echo base_url();?>assets/image/logo.jpg" class="img-responsive">
		</div>
	</div>

	<nav class="navbar navbar-default navbar-static-top" role="navigation">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	        </div>
	        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
	            <ul class="nav navbar-nav">
	                <li><a href="index.html"><img src="<?php echo base_url();?>assets/image/icon_home.png">หน้าหลัก</a></li>
	                <li><a href="girl_All.html"><img src="<?php echo base_url();?>assets/image/icon_star.png">VOTE สวยวิ๊ง</a></li>
	                <li><a class="not-active" href="#"><img src="<?php echo base_url();?>assets/image/icon_star.png">VOTE ใสว๊าว</a></li>
	                <li><a href="video.html"><img src="<?php echo base_url();?>assets/image/icon_video.png">วิดีโอคลิป</a></li>
	                <li><a href="content.html"><img src="<?php echo base_url();?>assets/image/icon_v.png">จุดเริ่มต้นของผิวสวย</a></li>
	                <li><a href="reward.html"><img src="<?php echo base_url();?>assets/image/icon_cup.png">กติการางวัล</a></li>
	                <li><a href="announce.html"><img src="<?php echo base_url();?>assets/image/icon_vote.png">ประกาสผลโหวต</a></li>
	            </ul>
	        </div>
	    </div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<a href="girl_All.html"><img src="<?php echo base_url();?>assets/image/banner.jpg" class="img-responsive"></a>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<img id="tagVote" src="<?php echo base_url();?>assets/image/tagVote.jpg" class="img-responsive">
		</div>
	</div>

	<div class="row" style="padding-top:10px">
		<ul  align="center" style="padding-left:20px;">
	    	<li>
		    	<a href="girl_detail.html">
	    		<div id="fram" class="center-block">
					<div id="imGirl"><img src="<?php echo base_url();?>assets/image/VC1.jpg"></div>
				</div>
				<div style="margin-top:-22%">
				<?php 
					for ($x = 1; $x <= $score[0]->score; $x++) {
				?>
					    <img src="<?php echo base_url();?>assets/image/star.png">
				<?php
					} 
				?>
				</div>
				<div id="vc_text">VC 1</div>
				<div id="vc_text2">มุก</div>	
		    	</a>
	    	</li>
	    	<li>
	    		<a href="girl_detail.html">
				<div id="fram" class="center-block">
					<div id="imGirl"><img src="<?php echo base_url();?>assets/image/VC2.jpg"></div>
				</div>
				<div style="margin-top:-22%">
				<?php 
					for ($x = 1; $x <= $score[1]->score; $x++) {
				?>
					    <img src="<?php echo base_url();?>assets/image/star.png">
				<?php
					} 
				?>
				</div>
				<div id="vc_text">VC 2</div>
				<div id="vc_text2">ออม</div>
	    		</a>
	    	</li>
	    	<li>
	    		<a href="girl_detail.html">
				<div id="fram" class="center-block">
					<div id="imGirl"><img src="<?php echo base_url();?>assets/image/VC3.jpg"></div>
				</div>
				<div style="margin-top:-22%">
				<?php 
					for ($x = 1; $x <= $score[2]->score; $x++) {
				?>
					    <img src="<?php echo base_url();?>assets/image/star.png">
				<?php
					} 
				?>
				</div>
				<div id="vc_text">VC 3</div>
				<div id="vc_text2">จีน</div>
	    		</a>
	    	</li>
	    	<li>
	    		<a href="girl_detail.html">
				<div id="fram" class="center-block">
					<div id="imGirl"><img src="<?php echo base_url();?>assets/image/VC4.jpg"></div>
				</div>
				<div style="margin-top:-22%">
				<?php 
					for ($x = 1; $x <= $score[3]->score; $x++) {
				?>
					    <img src="<?php echo base_url();?>assets/image/star.png">
				<?php
					} 
				?>
				</div>
				<div id="vc_text">VC 4</div>
				<div id="vc_text2">บิ๊มบั๊ม</div>
	    		</a>
	    	</li>
	    	<li>
	    		<a href="girl_detail.html">
				<div id="fram" class="center-block">
					<div id="imGirl"><img src="<?php echo base_url();?>assets/image/VC5.jpg"></div>
				</div>
				<div style="margin-top:-22%">
				<?php 
					for ($x = 1; $x <= $score[4]->score; $x++) {
				?>
					    <img src="<?php echo base_url();?>assets/image/star.png">
				<?php
					} 
				?>
				</div>
				<div id="vc_text">VC 5</div>
				<div id="vc_text2">มาย</div>
	    		</a>
	    	</li>
	    	<li>
	    		<a href="girl_detail.html">
				<div id="fram" class="center-block">
					<div id="imGirl"><img src="<?php echo base_url();?>assets/image/VC6.jpg"></div>
				</div>
				<div style="margin-top:-22%">
				<?php 
					for ($x = 1; $x <= $score[5]->score; $x++) {
				?>
					    <img src="<?php echo base_url();?>assets/image/star.png">
				<?php
					} 
				?>
				</div>
				<div id="vc_text">VC 6</div>
				<div id="vc_text2">เจน</div>
	    		</a>
				
	    	</li>
	    	<li>
	    		<a href="girl_detail.html">
				<div id="fram" class="center-block">
					<div id="imGirl"><img src="<?php echo base_url();?>assets/image/VC7.jpg"></div>
				</div>
				<div style="margin-top:-22%">
				<?php 
					for ($x = 1; $x <= $score[6]->score; $x++) {
				?>
					    <img src="<?php echo base_url();?>assets/image/star.png">
				<?php
					} 
				?>
				</div>
				<div id="vc_text">VC 7</div>
				<div id="vc_text2">เชอร์รี่</div>
	    		</a>
	    	</li>
	    </ul>
	</div>
	<div class="col-sm-12" style="padding-bottom: 30px;">
		<div class="col-sm-6" style="padding: 0;">
				<img src="<?php echo base_url();?>assets/image/content_bar2.jpg" class="img-responsive">
				<?php
					foreach ($content as $content) {
				?>
						<div>
			    			<table>
			    				<tr>
			    					<td width="30%" align="top">
			    						<img src="<?php echo base_url();?>assets/image/<?php echo $content->img_path; ?>" class="img-responsive">			
			    					</td>
			    					<td style="text-align:left; padding-left:10px;" width="60%">
			    						<span style="color:#4EA7B8; font-size:1.5em; font-weight: bold;"><?php echo $content->title; ?></span><br>
					    				<span style="color:#797A7A; font-size:1.4em;"><?php echo substr($content->description, 0,400); ?></span>
					    				<div align="right"><a href="content_detail.html"><img src="<?php echo base_url();?>assets/image/bt_more.jpg"></a></div>
			    					</td>
			    				</tr>
			    			</table>
			    		</div>
				<?php
					}
				?>
	    		
		</div>
		<div class="col-sm-6" style="padding: 0;" >
			<div data-example-id="responsive-embed-4by3-iframe-youtube" style="max-width: 410px;max-height: 310px;background-size:cover;background-image:url(<?php echo base_url();?>assets/image/content_video2.jpg)">
				<div class="embed-responsive embed-responsive-4by3" style="padding-bottom:100%">
					<iframe class="embed-responsive-item" style="width:97%;height:66%;padding-top:12%;padding-left:5%;" src="https://www.youtube.com/embed/WN1whNYwyrg" ></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<img src="<?php echo base_url();?>assets/image/footpage.jpg" class="img-responsive">
		</div>
	</div>

</body>
</html>