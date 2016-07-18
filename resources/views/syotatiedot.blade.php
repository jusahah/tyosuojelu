<!DOCTYPE html>
<html>
    <head>
        <title>Työsuojelu-dokumentit helposti yrityksesi käyttöön!</title>

       
        <!-- include libraries(jQuery, bootstrap) -->
        <link href="{{asset('css/bootstrap_journal.css')}}" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
        <script src="{{asset('js/bootstrap.js')}}"></script> 

        <!-- include summernote css/js-->
        <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
                background-color: #eee;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-family: 'Arial';
            }

            .container {
                background-color: #ddd;
                margin-top: 48px;

            }

            .content {
                padding: 16px;
                text-align: left;
                display: inline-block;
                margin-top: 48px;
                margin-bottom: 4px;
                position: relative;
            }

            .title {
                font-size: 96px;
            }

            p {
                color: #333;
            }

            .documentheader {
                z-index: 99999;
                position: absolute;
                top: -22px;
                left: 0px;
                font-size: 11px;
                color: white;
                background-color: #4C4F53;
                padding: 3px; 
                font-weight: bold;
            }

            .openeditor {
                z-index: 99999;
                position: absolute;
                top: -28px;
                right: 0px;
                color: white;
                background-color: #AC5287;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
            }
            .highlightinsert {
                z-index: 99999;
                position: absolute;
                top: -28px;
                right: 126px;
                color: white;
                background-color: #C26565;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
            }

            .varita {
                background-color: #C26565;
                width: 100%;
            }

            #valmisbutton:hover{
            	background-color: #71843F;
            }
            .riskitable tr td:nth-child(1) {
                width: 30%;
            }
            .riskitable tr td:nth-child(2) {
                width: 8%;
                text-align: center;

            }
            .riskitable tr td:nth-child(3) {
                width: 8%;
                text-align: center;
            }
            .riskitable tr td:nth-child(4) {
                width: 8%;
                text-align: center;
            }  




            .riskitable2 tr td:nth-child(1) {
                width: 30%;
            }
            .riskitable2 tr td:nth-child(2) {
                width: 8%;
                text-align: center;

            }
            .riskitable2 tr td:nth-child(3) {
                width: 30%;
                
            }
            .riskitable2 tr td:nth-child(4) {
                width: 8%;
                text-align: center;
            } 
            .riskitable2 tr td:nth-child(5) {
                width: 8%;
                text-align: center;
            } 
            .riskitable2 tr {
                height: 40px;
            }



            .valintakohdetable tr {
                height: 40px;
            }

            .valintakohdetable tr td:nth-child(1) {
                width: 20%;
            }
            .valintakohdetable tr td:nth-child(2) {
                width: 60%;
            }
            .valintakohdetable tr td:nth-child(3) {
                width: 20%;
            }    

            .star {
                color: red;
            }           

        </style>
    </head>
    <body><nav class="navbar navbar-default navbar-fixed-top" style="z-index: 9999999;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="position: relative;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Tyosuojelu.com</a>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        

        <li class="dropdown active">
          <li class="" id="disclaimermodal"><a href="#">Disclaimer</a></li>  
    

      </ul>
     


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container" style="background-color: #eee; min-width: 982px;">
            <div class="content" id="riskiarvio_suunnittelu" data-fordocument="riskiarvio_suunnittelu" style="width: 90%; color: #222; position: relative; background-color: white;">

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <span style="font-size: 11px; color: #444; position: absolute; top: 16px; right: 18px;">Tähdellä<span class="star">*</span> merkityt pakollisia</span>
  <h3>Yrityksesi tiedot</h3>
<form method="post" action="{{route('generate')}}">
  <fieldset class="form-group">
    <label for="formGroupExampleInput">Yrityksen nimi<span class="star">*</span></label>
    <input type="text" name="firmanNimi" value="{{old('firmanNimi')}}" class="form-control" id="formGroupExampleInput" placeholder="Saarioinen">
  </fieldset>
  <fieldset class="form-group">
    <label for="formGroupExampleInput2">Yrityksen osoite (toimitilat)<span class="star">*</span></label>
    <input type="text" class="form-control" value="{{old('firmanOsoite')}}"  id="formGroupExampleInput2" name="firmanOsoite" placeholder="Matinkatu 7, Espoo">
  </fieldset>
  <fieldset class="form-group">
    <label for="formGroupExampleInput2">Työterveyslääkäri<span class="star">*</span></label>
    <input type="text" class="form-control" value="{{old('laakari')}}"  id="formGroupExampleInput2" name="laakari" placeholder="Lääkäriasema Mehiläinen">
  </fieldset>  
  <fieldset class="form-group">
    <label for="formGroupExampleInput2">Vakuutusyhtiö (jossa työntekijät vakuutettu)<span class="star">*</span></label>
    <input type="text" class="form-control" value="{{old('vakuutusyhtio')}}"  id="formGroupExampleInput2" name="vakuutusyhtio" placeholder="Suomen Lähivakuutus">
  </fieldset>   
  <fieldset class="form-group">
    <label for="formGroupExampleInput2">Työsuojeluvaltuutettu<span class="star">*</span></label>
    <input type="text" class="form-control" value="{{old('tyosuojeluvaltuutettu')}}"  id="formGroupExampleInput2" name="tyosuojeluvaltuutettu" placeholder="Matti Meikäläinen">
  </fieldset> 
  <fieldset class="form-group">
    <label for="formGroupExampleInput2">Työsuojeluvaravaltuutettu<span class="star">*</span></label>
    <input type="text" class="form-control" value="{{old('tyosuojeluvaravaltuutettu')}}"  id="formGroupExampleInput2" name="tyosuojeluvaravaltuutettu" placeholder="Maija Meikäläinen">
  </fieldset>   

  <hr>
  <h3>Generointiasetukset</h3>
    <fieldset class="form-group">
    <label for="formGroupExampleInput2">Riskiarvioiden vakiovalinnat</label>
    <select class="form-control" name="riskiasetus">
        <option value="ei">Ei riskejä</option>
       <!-- <option value="random">Random</option>
        <option value="kaikki">Toimistotyö on vaarallista! (ns. hupivaihtoehto)</option>
        -->
    </select>
    <span style="font-size: 12px;" id="helpBlock" class="help-block">Toistaiseksi vain "Ei riskejä" valittavana. Lisäämme tähän eri vaihtoehtoja myöhemmin!</span>
  </fieldset>   
  <!--
  <fieldset class="form-group">
    <label for="formGroupExampleInput2">PDF-dokumenttien header-teksti (max. 1024 merkkiä)</label>
    <input type="text" class="form-control" value="{{old('docheader')}}" id="formGroupExampleInput2" name="docheader" placeholder="Nollaversio IT | työsuojeludokumentointi">
  </fieldset>  
  <fieldset class="form-group">
    <label for="formGroupExampleInput2">PDF-dokumenttien footer-teksti (max. 1024 merkkiä)</label>
    <input type="text" class="form-control" value="{{old('docfooter')}}" id="formGroupExampleInput2" name="docfooter" placeholder="Top secret - arkistoitava huolella">
    <span style="font-size: 12px;" id="helpBlock" class="help-block"><i>Footer sisältää automaattisesti generoidut sivunumerot, päiväyksen ja dokumentin nimen vakiona. Sinun ei välttämättä siis tarvitse lisätä lainkaan omaa footer-tekstiä.</span>
  </fieldset>  
  -->
  <hr>
  <button class="btn btn-primary" type="submit">Generoi pohjat</button>   
</form>  



</div>
    
    


</div>
    <footer class="footer" style="background-color: #eee;">
      <div class="container" style="text-align: center; background-color: #eee;">
        <p class="text-muted">Tyosuojelu.com generoi syöttämiesi tietojen pohjalta pinkan työturvallisuusdokumentteja yrityksesi käyttöön! <br>
            Palvelun totetus: <a target="_blank" href="http://nollaversio.fi">Nollaversio IT </a> | Palvelun dokumenttipohjat: <a href="http://lyyti.fi" target="_blank" >Lyyti Oy</a></p>
      </div>
      <hr>
    </footer>
     <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script>
    $('#disclaimermodal').on('click', function() {
        swal("Disclaimer", "Palvelu on toteutettu, jotta keskisuurten yritysten ei tarvitsisi vääntää mahdotonta määrää työsuojeludokumentteja MS Wordilla omakätisesti. Palvelu on epävirallinen. Palvelun käyttö omalla vastuulla.", "warning");
    });

    </script>
    </body>
</html>
