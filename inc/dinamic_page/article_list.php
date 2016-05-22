<div id="topPage" class="row">
    <div class="page-header text-right">
      <h1 class="text-center text-success"><span class="glyphicon glyphicon-align-justify pull-right"></span> Article <small>list</small></h1>
    </div>
</div>
<div class="row">
	<div class="col-md-8">
    <?php for($d=0; $d<2; $d++){ ?>
    	<div class="row">    
            <div class="col-md-6"><div class="well">
              <h3 class="text-center"><span class="glyphicon glyphicon-flash pull-right"></span> Title this work</h3>
              <p>
                <img src="img/Apple-Computer-l.jpg" alt="Work 1" class="img-responsive img-thumbnail" />
                <br />
                <div class="alert alert-dismissable">
                      Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </div>
              <p><a class="btn btn-default" href="?ur=dinamic_page/article_full" role="button">View details &raquo;</a> <a href="#" class="pull-right">11 July 2014</a></p>        
              </p>            
            </div></div> <!--well & col-md-6 -->
            <div class="col-md-6"><div class="well">
              <h3 class="text-center"><span class="glyphicon glyphicon-flash pull-right"></span> Title this work</h3>
              <p>
                <img src="img/Minimalistic-Trees-l.jpg" alt="Work 1" class="img-responsive img-thumbnail" />
                <br />
                <div class="alert alert-dismissable">
                      Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </div>
              <p><a class="btn btn-default" href="?ur=dinamic_page/article_full" role="button">View details &raquo;</a> <a href="#" class="pull-right">11 July 2014</a></p>        
              </p>            
            </div></div> <!--well & col-md-6 -->
		</div>
    <?php }; ?>           
    </div> <!-- col-md-8 -->
    
    <div class="col-md-4"> <!-- Sidebar -->
    	<div class="page-header text-right"><h3>Article Categories</h3></div>
        <div class="list-group">
        	<?php for($a=0; $a<7; $a++){ ?>
        	<a href="#" class="list-group-item"><span class="glyphicon glyphicon-tag pull-right"></span> Category <?php echo $a+1; ?></a>
            <?php }; ?>
        </div>

    	<div class="page-header text-right"><h3>Most read</h3></div>
        <div class="list-group">
        	<?php for($a=0; $a<7; $a++){ ?>
        	<a href="#" class="list-group-item">
            	<h4 class="list-group-item-heading">Title of article <?php echo $a+1; ?></h4>
                <p class="list-group-item-text">Mauris eleifend nulla eget mauris. Sed cursus quam id felis. Curabitur posuere quam vel...</p>
            </a>
            <?php }; ?>
        </div> <?php // AxQuired24; ?>       
    </div><!-- col-md-4 -->
</div><!-- row-->
