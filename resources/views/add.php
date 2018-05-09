<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sport Facile</title>
<style type="text/css">

    input.invalid {
        background-color: #ffdddd;
    }
    .box h4{
    position:relative;
    padding: 10px 20px;
    margin: 1px 0px;
    margin-left: +10px;
    font-size: 16px;
    line-height: 15px;
    font-weight:bold;
    color:#fff;
    background:#2CAFE0;
    /* css3 extras */
    text-shadow:0 1px 1px rgba(0,0,0,0.2);
    -webkit-box-shadow:0 1px 1px rgba(0,0,0,0.2);
       -moz-box-shadow:0 1px 1px rgba(0,0,0,0.2);
            box-shadow:0 1px 1px rgba(0,0,0,0.2);
    /* See "NOTE 1" */
    zoom:1;
}

.box h4:before{
    content:"";
    position:absolute;
    /* See "NOTE 2" */
    z-index:1;
    top:100%;
    left:0;
    border-width:0 10px 10px 0;
    border-style:solid;
    border-color:transparent #2CAFE0;
}

.box1 h4 {
    position:relative;
    padding: 10px 20px;
    margin: 10px 0px;
    margin-left: -30px;
    font-size: 25px;
    line-height:32px;
    font-weight:bold;
    color:#fff;
    background:#cc0000;
    /* css3 extras */
    text-shadow:0 1px 1px rgba(0,0,0,0.2);
    -webkit-box-shadow:0 1px 1px rgba(0,0,0,0.2);
       -moz-box-shadow:0 1px 1px rgba(0,0,0,0.2);
            box-shadow:0 1px 1px rgba(0,0,0,0.2);
    /* See "NOTE 1" */
    zoom:1;
}

.box1 h4:before,
.box1 h4:after {
    content:"";
    position:absolute;
    /* See "NOTE 2" */
    z-index:-1;
    top:100%;
    left:0;
    border-width:0 10px 10px 0;
    border-style:solid;
    border-color:transparent maroon;
}
#files {
  display: none;
}

.nnah{
    padding: 0;
    margin: 5px;
}

.nnahs{
    padding: 0;
}

.close{
    position: absolute;
    z-index: 1;
    font-size: 14px;
    margin-left: -5px;
    margin-top: -7px;
}

.close span{
    opacity: 1;
    color: #000;
}
body{
     background-image:url(/PFA/public/photos/back.jpg) ;
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
    padding: 0;
    margin: 0;

}
input {
  background-color: #fff;
}
</style>
<link rel="stylesheet" type="text/css" href="/PFA/public/css/add_form.css">
<script type="text/javascript" src="/PFA/js/jquery.js"></script>
        <script type="text/javascript" src="/PFA/js/jquery.min.js"></script>
<script type="text/javascript" src="/PFA/public/js/add_form.js"></script>
<script type="text/javascript" src="/PFA/public/js/images.js"></script>


</head>

<body id="page-top" class ="back">
  <?php include_once '../layouts/navbar.php' ?>
         <link href="/PFA/public/css/select.css" rel="stylesheet"/>
        <script src="/PFA/public/js/select.js"></script>
<script type="text/javascript">
        $(document).ready(function() { 
            $("#e1").select2();
            $("#e2").select2(); });
</script>
      <?php /*une vue permet de cree un nouveau evenement */?>
<div class="container">
    <div class="row">
        <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Etape 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-tasks"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <form role="form" action="/PFA/index.php?p=new" method="post">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                          <div class="row destacados">
                            <div class="col-md-11">
                              <div class="box1">
                                <h4 style="text-align: center;">Informations générales</h4>
                                <br><br>
                              </div>
                            </div>
                          </div>
                        <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                              <div class="box">
                                <h4 for="exampleInputEmail1">Titre de la competition: *</h4><br>
                              </div>
                                <input type="text" class="form-control in1" id="in1" required="true" placeholder="titre de competition" name="titre">
                            </div>
                            <br>
                            <div class="row">
                              <div class="box">
                                <h4 for="exampleInputEmail1">Slogon de la competition : </h4>
                                <br>
                              </div>
                                <input type="text" class="form-control"  placeholder="Slogon" name="slogn">
                            </div><br>
                            <div class="row">
                              <div class="box">
                                <h4>Type de sport :*</h4><br>
                                <select id="e1" style="width: 100%;" class="in2" name="type">
                                    <option name="type" value="">Selectionner le type</option>
                                    <option name="type" value="TN">Tennis</option>
                                    <option name="type" value="FB">Football</option>
                                    <option name="type" value="BB">Basket-ball</option>
                                    <option name="type" value="HN">Handball</option>
                                    <option name="type" value="VB">Volly-ball</option>
                                </select>
                              </div><br>
                            </div>
                             <div class="row">
                              <div class="box">
                                <h4 for="exampleInputEmail1">Lieu de la competition : *</h4>
                                <br>
                              </div>
                                <input type="text" class="form-control" id="in3" placeholder="Lieu" name="lieu">
                            </div><br>                            
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                              <div class="box">
                                  <h4 for="exampleInputEmail1">Détails à propos de la compétition :</h4>
                                  <br>
                              </div>
                              <textarea type="text" class="form-control"  rows="7" placeholder="Description" name="details" ></textarea>
                          </div><br>
                          <div class="row">
                              <div class="box">
                                  <h4 for="exampleInputEmail1">Règles spécifiques à la compétition : </h4>
                                  <br>
                              </div>
                              <textarea type="text" class="form-control" rows="7" placeholder="regles" name="regles" ></textarea>
                          </div>                          
                        </div>
                      </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div class="step44">
                          <div class="col-md-4">
                              <div class="row">
                              <div class="box">
                                <h4 for="exampleInputEmail1">Frais d'inscription : </h4>
                                <br>
                              </div>
                                <input type="number" class="form-control" placeholder="frais" name="frais">
                              </div><br>
                              <div class="row">
                              <div class="box">
                                <h4>Format de la premiere phase de competition :*</h4><br>
                                <select id="e2" style="width: 100%;" class="in4" name ="phase1">
                                    <option name ="phase1" value="">Selectionner le format</option>
                                    <option name ="phase1" value="1">Championnat</option>
                                    <option name ="phase1" value="2">Groupes</option>
                                    <option name ="phase1" value="3">Tableau à élimination directe</option>
                                    <option name ="phase1" value="4">Tableau multi-chances</option>
                                </select>
                              </div><br>
                              </div>
                              <div class="row">
                              <div class="form-group">
                                <label for="files" class="btn btn-info"><i class="glyphicon glyphicon-camera"></i> Ajouter des images </label>
                                <div class="cols-sm-12">
                                <input type="file" id="files" name="files[4]" multiple />
                                </div>
                              </div>                                
                              </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                          <div class="row">
                            <div class="col-md-5">
                              <div class="box">
                              <h4>Date de debut</h4><br>
                              <input type="date" name="dateDebut" class="form-control" placeholder="date de debut" />
                              </div>
                            </div>
                              <div class="col-md-1"></div>
                              <div class="col-md-5">
                                <div class="box">
                                  <h4>Date de fin</h4><br>
                                  <input type="date" name="dateFin" class="form-control" placeholder="date de fin" />
                                </div>
                              </div>
                          </div>
                          <div class="row"><br>
                                <div class="box col-md-5">
                                  <h4>Date limite d'inscription :</h4><br>
                                  <input type="date" name="limiteDate" class="form-control" placeholder="date de fin" />
                                </div>
                                <div class="col-md-1"></div>
                          <div class="row">
                                <div class="box col-md-5">
                                  <h4>Nombre max des equipes :</h4><br>
                                  <input type="number" name="nbrEquipes" class="form-control" placeholder="nombre max des equipes" />
                                </div>                            
                          </div><br>
                          </div>
                          <div class="row">
                          <div class="col-md-9"></div> 
                          <div class="col-md-2">
                                <button type="submit" class="btn btn-primary next-step">Valider</button>
                          </div>
                          <div class="col-md-1"></div>
                          </div>                            
                          <div class="row">
                          </div>                        
                        </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>
</body>
</html>
