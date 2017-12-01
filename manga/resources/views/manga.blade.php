@extends('layouts.app')

@section('content')

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid d-block" src="http://images.ddns.net:8080/{{$manga->releaser_id}}/{{$manga->cover}}" height='600' width='350'>
        </div>
        <div class="col-md-6">
          <h1 class="display-3">{{$manga->title}}</h1>
          <h1 class="">Author: {{$manga->author}}</h1>
          <div class="row">
            <div class="col-md-3">
              <ul class="">
                <li>Volumes: {{$manga->volumes}}</li>
                <li>Chapters:{{$manga->chapters}}</li>
              </ul>
            </div>
            <div class="col-md-9">              
              <ul class="text-right" style='list-style-type: none;'>
                <li>Downloaded: {{$manga->downloaded}}</li>
                <li>Date: {{$manga->date_add}}</li>
                <li>Uploaded by: {{$manga->releaser_id}}</li>
              </ul>
              <div class="progress">
                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
              </div>
            </div>
          </div>         
          <div class="blockquote">
            <p>Description:</p>
            <div class="blockquote-footer">{{$manga->descripton}}</div>
          </div>  
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
          
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
         <div id="disqus_thread"></div>
      </div>
    </div>
  </div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://japananimetime-ddns-net.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Made by Shinrai Hikaro aka japananimetime, 2017
              <br> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
@endsection