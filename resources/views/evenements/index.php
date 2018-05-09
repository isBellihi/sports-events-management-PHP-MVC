<?php
foreach ($evens as $even) {
    echo $even->slogon.'<br>';
}

exit();?>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">

            <div class="col-sm-4 col-lg-4 col-md-4" >
                        <div class="thumbnail" style="height: 335px">
                            <!--<img src="/uploads/photos/{{$log->img1}}"  style="width: 350px;  height: 150px">-->
<div class="carousel slide" id="{{$log->id}}">

  <div class="carousel-inner">
    <div class="item active"><img alt="First slide" src="/uploads/photos/{{$log->img1}}"  style="width: 350px;  height: 150px"></div>
    <div class="item"><img alt="Second slide" src="/uploads/photos/{{$log->img2}}"  style="width: 350px;  height: 150px"></div>
    <div class="item"><img alt="Third slide" src="/uploads/photos/{{$log->img3}}"  style="width: 350px;  height: 150px"></div>
  </div>
  <a data-slide="prev" href="#{{$log->id}}" class="left carousel-control">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a data-slide="next" href="#{{$log->id}}" class="right carousel-control">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

                            <div class="caption" style="padding: 1px;color: #333; height: 150px">
                                <h4 class="pull-right"><strong>{{$log->prix}} DH</strong></h4>
                                <h4><a href="{{url('annonce/'.$log->id)}}">{{$log->titre}}</a>
                                </h4>
                                <div class="clearfix"></div>
                                <hr style="margin:3px 0 3px 0;">
                                <p>Categorie :{{$log->categorie->name}}<br/>
                                Region :{{$log->region->name}}<br/>
                                Ville :{{$log->ville->name}}<br/>
                               Posted <strong>{{$log->created_at->diffForHumans()}}</strong>

                                <a class="pull-right" href="{{url('annonce/'.$log->id)}}">
    plus de details...</a>
                                </p>
            <div class="clearfix"></div>
            <hr style="margin:3px 0 3px 0;">
                            </div>
                            <a href="{{url('annonce/'.$log->id.'#reserver')}}" class="btn btn-success pull-left"><i class="glyphicon glyphicon-send" style="margin-left: -10px"></i><b>  Réserver maintenant</b></a>
                            <div class="ratings" style="margin-left:5px ;margin-right: 5px; color:##301b1c">
                                <div   style=" font-size: 18px;margin-left: 230px"  >{{$log->reviews->count()}}<i class="glyphicon glyphicon-comment" style="margin-left: 5px"></i>
                                </div>

                            </div>

                        </div>


                    </div>



        </div>
    </div>
</div>