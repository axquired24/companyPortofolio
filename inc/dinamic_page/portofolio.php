<!-- Section 1 -->
	  
<div id="topPage" class="row">
    <div class="page-header text-right">
      <h1><span class="label label-success">Portofolio</span> <small>Pages.</small></h1>
    </div>
</div>

<?php for($c=0; $c<3; $c++){ ?>	
<div class="row">
    <?php for($d=0; $d<3; $d++){ ?>	  
    <div class="col-md-4">
      <h3>Title this work</h3>
      <p>
        <img src="img/Apple-Computer-l.jpg" alt="Work 1" class="img-responsive" />
        <br />
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <?php } ?>
</div>
<?php } ?>


<div align="center">
<ul class="pagination pagination-lg">
  <li><a href="#">&laquo;</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
</div>