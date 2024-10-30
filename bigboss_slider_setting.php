<html>
<head>
<style>
.setting-bigboss{
	width:90%;
	height:auto;
	}
.left-area-bigboss{
	width:50%;
	height:auto;
	float:left;
	}
.right-area-bigboss{
	width:30%;
	height:auto;
	float: right;
	}	

.bigboss-slider-setting{
	width:100%;
	height:auto;
	border:4px double #000;
	margin-top:10px;
	float:left;
	padding:20px;
	}
.reset-bb{
  box-shadow: 2px 2px #666!important;
  box-sizing: border-box!important;
  margin: 0px;
  padding: 3px 9px!important;
  border: 1px solid #fbfbfb!important;
  cursor:pointer!important;
}
.bbslider-video{
	width:95%;
	height:auto;
	margin:0 auto;
	}
.bbslider-video h1{
	text-align:center;
	}
.bigboss-slider-setting h1{
	margin-top:10px;
	color:#030;
	}


</style>


</head>
<body>
<div class="setting-bigboss">
	<h1 align="center">Bigboss slider Setting Page</h1>    
    <div class="left-area-bigboss">
    
  
    
    <form method="post" class="bigboss-slider-setting" action="options.php">
      <?php if(isset($POST['basicsave'])){
		
		update_option('bliser-width');
		update_option('bliser-height');
		update_option('bliser-images');
		update_option('bbbg-color');
		update_option('bbtitle-font');
		update_option('bbtitle-color');
		update_option('bbcontent-font');
		update_option('bbcontent-color');
		update_option('bbslider-f-family');
		
		echo "<div class='updated'>Save Changed</div>" ;		
		
    }?>
  
    <h3>Slider Basic setting</h3>
     <?php wp_nonce_field('update-options'); ?>
    <input type="hidden" name="action" value="update"/>
    <input type="hidden" name="page_options" value="bliser-width,bliser-height,bliser-images,bbbg-color,bbtitle-font,bbtitle-color,bbcontent-font,bbcontent-color,bbslider-f-family" />
    
    	<label>Slider Width</label>
        <input type="text" name="bliser-width" value="<?php echo get_option('bliser-width');?>" />px</br></br>
        
        <label>Slider Height</label>
        <input type="text" name="bliser-height" value="<?php echo get_option('bliser-height');?>" />px</br></br>
        
        <label>Image Size</label>
        <input type="text" name="bliser-images" value="<?php echo get_option('bliser-images');?>" />px</br></br>
    
    	<label>Slider Background</label>
        <input type="color" name="bbbg-color" value="<?php echo get_option('bbbg-color');?>" /></br></br>
        
        <label>Title Font Size</label>
         <input type="number" name="bbtitle-font" value="<?php echo get_option('bbtitle-font');?>" />px</br></br>
         
         <label>Title Color : </label>
        <input type="color" name="bbtitle-color" value="<?php echo get_option('bbtitle-color');?>" /></br></br>
         
         <label>Content Font Size</label>
         <input type="number" name="bbcontent-font" value="<?php echo get_option('bbcontent-font');?>" />px</br></br>
         
          <label>Content Color : </label>
        <input type="color" name="bbcontent-color" value="<?php echo get_option('bbcontent-color');?>" /></br></br>
        
        <label>Font family : </label>
        <select name="bbslider-f-family">
        
        	<option><?php echo get_option('bbslider-f-family');?></option>
        
        	<option>Verdana, Geneva, sans-serif</option>
            <option>Arial, Helvetica, sans-serif</option>
            <option>Georgia, "Times New Roman", Times, serif</option>
            <option>"Courier New", Courier, monospace</option>
            <option>"Palatino Linotype", "Book Antiqua", Palatino, serif</option>
        
        
        
        </select></br></br>
        
        
        
        <input type="submit" class="reset-bb" name="basicsave" value="Save" />
        <input type="reset" class="reset-bb" name="bsreset" value="Reset" />
   
    
    </form>

    
    
   
    
    
     <form method="post" class="bigboss-slider-setting">
     <h3>Slider animation setting</h3>
    
    	<label>AutoPlay : </label>
        <select name="playb">
        
        	
            <option>True</option>
            <option>False</option>
        
        </select><br/><br/>
        
        <label>Auto Play Interval : </label>
        <select name="playinter">
        
        	
            <option>7000</option>
            <option>6000</option>
            <option>5000</option>
            <option>4000</option>
            <option>3000</option>
            <option>2000</option>
        
        </select><br/><br/>
        
        
          <label>Slide Duration : </label>
        <select name="playinter">
        
        	<option>900</option>
            <option>800</option>
            <option>700</option>
            <option>600</option>
            <option>500</option>
            <option>300</option>
            <option>200</option>
        
        </select><br/><br/>
        
        
        
        <input type="submit" class="reset-bb" name="anisave" value="Save" />
         <input type="reset" class="reset-bb" name="bsreset" value="Reset" />
         <?php 
         
         	if(isset($_POST['anisave'])){
			
			echo "<br/> <span style='color:#ff000; line-height:25px; padding:5px; margin:10px 0;'>
			Bigboss Slider Setting option is only for Premuium version <a href='http://bigbosstheme.com' target='_blank'>Click here to Upgrade premium version</a> </span>  " ;
			
			}
	
	
	 ?>
    
    </form>
    
    <div class="bbslider-video">
    <h1>How to use Bigboss slider in you Wp site .. </h1>
    
   <iframe width="600" height="480" src="https://www.youtube.com/embed/U_fv3z-m5so?rel=0" frameborder="0" allowfullscreen>
   </iframe>
    
    
    
    </div>
    
    </div>
    
    <div class="right-area-bigboss">
    	<div class="bigboss-slider-setting">
    	<h4>Plugin name : Bigboss Slider</h4>
        <h4>Plugin Author : bulbul bigboss</h4>
        <h5>Setting option is only available on premium version</h5>
        <h5><a href="http://bigbosstheme.com" target="_blank">Click here to Upgrade premium version</a></h5>
        <h4><a href="http://bigbosstheme.com/bigboss-slider-demo" target="_blank">Click here to See Live Demo </a></h4>
        <h4><a href="https://youtu.be/U_fv3z-m5so" target="_blank">Click here to See Video Tutorial </a></h4>
        
        <h4>use this code to show bigboss slider plugin in template  </br> <blockquote>< ?php bigboss_slider() ; ? ></blockquote> <br/>
        Or use in any page please use this sortcode <quote>[bigboss_slider]</quote> <br/>
        
        
        </h4>
        
        
        </div>
    
    
    </div>
    
    
    
    
    
    
   </div> 
    

</body>


</html>