<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
  <title>Document</title>
</head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <center>
            <h5 class="">Pix by 5835512115</h5>
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"> </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="http://msecuredatalabs.com/business/img/mail_bg.jpg">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
                <div class="carousel-item "> <img class="d-block img-fluid w-100" src="https://www.infrascale.com/wp-content/uploads/jpg/img-bg-business-man-pushing-cloud-1920x1080.jpg">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
                <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://cdn.wonderfulengineering.com/wp-content/uploads/2014/04/code-wallpaper-38.jpg">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
              </div>
            </div>
          </center>
        </div>
        <div class="col-md-4">
          <h3 class="">&lt;&lt;&lt;&lt;&lt;Send Email&gt;&gt;&gt;&gt;&gt;</h3>
          <div class="row">
            <div class="col-md-12" >
            
            <form style="margin:25px;" method="post" action="/sendData">

{{csrf_field()}}
<div class="form-group">
<label for="Name">ถึง</label>
<input type="text" class="form-control"name="Name" placeholder="ชื่อผู้รับ">
</div>
<div class="form-group">
<label for="Email">อีเมลล์</label>
<input type="email" class="form-control"name="Email" placeholder="อีเมลล์ผู้รับ">
</div>
<div class="form-group">
<input type="text" class="form-control"name="top_message" placeholder="หัวข้อเรื่่อง">
</div>
<div class="form-group">
<textarea class="form-control" rows="10" name="textArea" placeholder="ข้อความ"></textarea>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">SentEmail</button>
  <p class="mt-3 mb-1 text-muted">© 5835512115</p>
</form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>