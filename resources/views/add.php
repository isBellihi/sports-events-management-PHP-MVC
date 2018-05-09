<?php require_once '../../vendor/autoload.php';
        use Database\DB;
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sport Facile</title>

</head>
<body id="page-top">
  
      <?php include_once '../layouts/navbar.php' ?>
      <?php /*une vue permet de cree un nouveau evenement */
      $config = App\Config::getInstance()->get("db_hos");
      var_dump($config);?>
      <lu>
      <?php 
        $datas = DB::all('User');
         foreach ($datas as $data): ?>
         <h2><?= $data->username;?></h2>
        <li><?= $data->username;?></li>
        <li><?= $data->email;?></li>
      <?php endforeach;?>
    </lu>

         <br>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><h4>Nouveau Evenement</h4></div>
                <div class="well panel-body" >
                    <form class=" form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="#" style="margin-right:80px ">
                         <div class="form-group">
                            <label for="titre" class="col-md-4 control-label">Titre</label>
                            <div class="col-md-6">
                                <input placeholder="titre de l'evenement" id="titre" type="text" class="form-control" name="titre" value="" required autofocus>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="categorie_id" class="col-md-4 control-label">Categorie</label>

                            <div class="col-md-6">
                                <select id="categorie_id" name="categorie_id" class="form-control" required>
                                  <option value="">Selectionner la categorie</option>
                                    <option value="1">foot ball</option>
                                    <option value="2">pasket ball</option>
                                    <option value="3">tennes</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="region_id" class="col-md-4 control-label">Region</label>
 
                            <div class="col-md-6">
                                <select id="region_id" name="region_id" class="form-control" onchange="populate(this.id,'ville_id')" value="{{ old('old') }}" required>
                                    <option value="">Selectionner une region</option>
                                    <option value="1">souss massa</option>
                                    <option value="2">draa tafilalt</option>
                                </select>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label for="ville_id" class="col-md-4 control-label" >Ville</label>

                            <div class="col-md-6">
                                <select id="ville_id" name="ville_id" class="form-control" value="{{ old('old') }}">
                                    <option value="1">Agadir</option>
                                    <option value="2">Rabat</option>
                                    <option value="3">Casa blanca</option>
                                </select>
                            </div>
                        </div>

 <! ------------------------------------ Les Checkbox------------------------->

                           <div class="form-group">
                            <label for="iscuisine" class="col-md-4 control-label">Cuisine</label>

                            <div class="col-md-6" class="form-control" >
                                <label class="radio-inline"><input type="radio" name="iscuisine" value="1" required value="{{ old('old') }}">oui</label>
                                <label class="radio-inline"><input type="radio" name="iscuisine" value="0" >non</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="islavage" class="col-md-4 control-label">Machine à laver</label>

                            <div class="col-md-6" class="form-control">
                                <label class="radio-inline"><input type="radio" name="islavage" value="1" required value="{{ old('old') }}">oui</label>
                                <label class="radio-inline"><input type="radio" name="islavage" value="0" >non</label>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="iswifi" class="col-md-4 control-label">Wifi</label>

                            <div class="col-md-6" class="form-control">
                                <label class="radio-inline"><input type="radio" name="iswifi" value="1" required value="{{ old('old') }}">oui</label>
                                <label class="radio-inline"><input type="radio" name="iswifi" value="0" >non</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="istv" class="col-md-4 control-label">Télevision</label>

                            <div class="col-md-6" class="form-control">
                                <label class="radio-inline"><input type="radio" name="istv" value="1" required value="{{ old('old') }}">oui</label>
                                <label class="radio-inline"><input type="radio" name="istv" value="0" >non</label>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="isfumeur" class="col-md-4 control-label">Logement fumeur</label>

                            <div class="col-md-6" class="form-control">
                                <label class="radio-inline"><input type="radio" name="isfumeur" value="1" required value="{{ old('old') }}">oui</label>
                                <label class="radio-inline"><input type="radio" name="isfumeur" value="0">non</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="iswc" class="col-md-4 control-label">Salle de bain</label>

                            <div class="col-md-6" class="form-control">
                                <label class="radio-inline"><input type="radio" name="iswc" value="1" required value="{{ old('old') }}">oui</label>
                                <label class="radio-inline"><input type="radio" name="iswc" value="0">non</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ispiscine" class="col-md-4 control-label">Piscine</label>

                            <div class="col-md-6" class="form-control">
                                <label class="radio-inline"><input type="radio" name="ispiscine" value="1" required value="{{ old('old') }}">oui</label>
                                <label class="radio-inline"><input type="radio" name="ispiscine" value="0">non</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isanimale" class="col-md-4 control-label">Animaux acceptés</label>

                            <div class="col-md-6" class="form-control">
                                <label class="radio-inline"><input type="radio" name="isanimale" value="1" required value="{{ old('old') }}">oui</label>
                                <label class="radio-inline"><input type="radio" name="isanimale" value="0">non</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ishand" class="col-md-4 control-label">Pour familles/enfants</label>

                            <div class="col-md-6" class="form-control">
                                <label class="radio-inline"><input type="radio" name="ishand" value="1" required value="{{ old('old') }}">oui</label>
                                <label class="radio-inline"><input type="radio" name="ishand" value="0">non</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prix" class="col-md-4 control-label">Prix</label>

                            <div class="col-md-6">
                                <input id="prix"  type="text" class="form-control" name="prix" value="" required autofocus placeholder="**MAD**">
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" rows="8" cols="10"  required placeholder="description et reglement intérieur"></textarea>
                            </div>
                        </div>

                         <div class="form-group">
                        <label for="" class="col-md-4 control-label">Images</label>

                            <div class="col-md-6">
                              <input type="file" name="img1" value="{{old('old')}}" required>
                              <input type="file" name="img2" value="{{old('old')}}">
                              <input type="file" name="img3" value="{{old('old')}}">
                              <input type="file" name="img4" value="{{old('old')}}">
                              <input type="file" name="img5" value="{{old('old')}}">
                              <input type="file" name="img6" value="{{old('old')}}">
                            </div>
                        </div>

                        <center>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary "  >
                                    Enregistrer
                                </button></form>

                                <a href="{{url('logements')}}" class="btn btn-primary">Annuler</a>
                            </div></div>
                        </center>
        </div>
    </div>
</div>
</body>
</html>
