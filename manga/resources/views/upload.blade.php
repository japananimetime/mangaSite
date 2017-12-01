@extends('layouts.app')

@section('content')
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="align-self-center col-md-6 text-white">
          <h1 class="text-center text-md-left display-3"></h1>
          <p class="lead"></p>
        </div>
        <div class="col-md-6" id="book">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Upload manga
                <br> </h3>
              <form method="POST" action="http://api.ddnsking.com:8080/api/v1/manga" enctype="multipart/form-data">              	
                {{ csrf_field() }}
                <div class="form-group"> <label>Title</label>
                  <input class="form-control" placeholder="Input the title, please" name="title"> </div>
                <div class="form-group"> <label>Author</label>
                  <input type="text" class="form-control" placeholder="Family name and actual name" name="author"> </div>
                <div class="form-group"> <label>Description</label>
                  <input type="text" class="form-control h-25" placeholder="2" name="description"> </div>
                <fieldset class="form-group"> <label class="form-control-label">Volumes</label>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="1" aria-describedby="basic-addon1" name="volumes"> </div>
                </fieldset>
                <fieldset class="form-group"> <label class="form-control-label">Chapters</label>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="1" aria-describedby="basic-addon1" name="chapters"> </div>
                </fieldset>
                <fieldset class="form-group"> <label class="form-control-label">Cover</label>
                  <div class="input-group">
                    <input type="file" class="form-control" placeholder="" aria-describedby="basic-addon1" name="cover"> </div>
                </fieldset>
                <div class="form-group">
                  <input type="hidden" class="form-control" value="<?php $ldate = date('Y-m-d H:i:s');echo $ldate;?>"name="uploadDate"> </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="uploaderID" value="{{Auth::user()->id}}"> </div>
                <button type="submit" class="btn mt-2 btn-outline-dark">Upload</button>
              </form>
            </div>
          </div>
        </div>
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
