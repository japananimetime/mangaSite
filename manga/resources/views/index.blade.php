@extends('layouts.app')

@section('content')
  <div class="p-5">
    <div class="container">    	
    	<?php $i = 1; 
    		$first = 1;
        $j=0;?>
		@foreach ($mangas as $manga) 
			<?php $i = $i+1;?>
    		<?php if ($i == 5 || ($i == 2 && $first == 1)){?>	    			
    	<div class="row">   			
    		<?php };?>
	  		<div class="col-md-3">
          <?php //echo '<pre>'; print_r($cover); echo '</pre>';?>

            <?php if ($covers[$j]->_id == $manga->id){ ?>
    	  			<a href='http://japananimetime.ddns.net/manga/{{$manga->id}}'><img src='http://images.ddns.net:8080/{{$manga->releaser_id}}/{{$covers[$j]->name}}' width='200' height='300'>
    	  			<br>
            <?php }?>
	  			{{$manga->title}}</a>
	  		</div>
    		 <?php  if ($i == 5):
         $i = 1;?>
			</div>
			<?php else:        
          $i = $i + 1; 
          $j = $j + 1; 
          endif
      ?>
			<?php $first = 0;?>	

		@endforeach
		<?php if($i != 0){?>			
		<?php }?>
    	</div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Made by Shinrai Hikaro aka japananimetime, 2017
              <br>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
@endsection