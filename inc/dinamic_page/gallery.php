	  
<div id="topPage" class="row">
    <div class="page-header text-right">
      <h1>Our photo gallery</h1>
    </div>
</div>

<div class="row"><!-- Section gallery 1 -->
	<div class="col-sm-6">
    	<a href="#callPreview" role="button" data-toggle="modal" data-target=".preview-image"><img title="Image 1. Click to zoom" class="img-responsive img-thumbnail" src="img/programming-l.jpg"></a>
    </div>
	<div class="col-sm-6">
    	<div class="row">
        	<div class="col-sm-6">
       	    	<a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Apple-Computer-l.jpg" ></a>
            </div>
        	<div class="col-sm-6">
       	    	<a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Books-l.jpg"></a>
            </div>
        </div><br />
    	<div class="row">
        	<div class="col-sm-6">
       	    	<a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Apple-Computer-l.jpg" ></a>
            </div>
        	<div class="col-sm-6">
       	    	<a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Books-l.jpg"></a>
            </div>
        </div>
    </div>
</div><br />

<?php for($d=0; $d<3; $d++){ ?>
<div class="row"><!-- Section gallery 2,3,4 -->
    <div class="col-sm-3">
        <a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Minimalistic-Trees-l.jpg" ></a>
    </div>
    <div class="col-sm-3">
        <a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/programming-l.jpg"></a>
    </div>
    <div class="col-sm-3">
        <a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Minimalistic-Trees-l.jpg" ></a>
    </div>
    <div class="col-sm-3">
        <a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Books-l.jpg"></a>
    </div>
</div><br />
<?php }; ?>

<div class="row"><!-- Section gallery 5 -->
	<div class="col-sm-6">
    	<div class="row">
        	<div class="col-sm-6">
       	    	<a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Apple-Computer-l.jpg" ></a>
            </div>
        	<div class="col-sm-6">
       	    	<a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Books-l.jpg"></a>
            </div>
        </div><br />
    	<div class="row">
        	<div class="col-sm-6">
       	    	<a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Apple-Computer-l.jpg" ></a>
            </div>
        	<div class="col-sm-6">
       	    	<a href="#"><img title="Image Caption" class="img-responsive img-thumbnail" src="img/Books-l.jpg"></a>
            </div>
        </div>
    </div>
	<div class="col-sm-6">
    	<a href="#" ><img title="Image 1" class="img-responsive img-thumbnail" src="img/programming-l.jpg"></a>
    </div>    
</div><br />

<!-- Image Preview -->
<div id="callPreview" class="modal fade preview-image" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">  
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Image Caption Road here.</h4>
    	</div>            
        <div class="modal-body">
          <img title="Image 1" class="img-responsive img-thumbnail" src="img/programming-l.jpg">
        </div>
	</div>     
  </div>
</div>
