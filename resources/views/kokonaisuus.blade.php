<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

       
        <!-- include libraries(jQuery, bootstrap) -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
        <script src="{{asset('js/bootstrap.js')}}"></script> 

        <!-- include summernote css/js-->
        <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
        
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
      <a class="navbar-brand" href="#">Tyoturvallisuussuunnitelma.fi</a>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        

        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Päihteet <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#paihdeohjelma_scroll">Päihdeohjelma</a></li>
            <li><a href="#paihdeohjelma_lomake1_scroll">Lomake 1 (puheeksiotto)</a></li>
            <li><a href="#paihdeohjelma_lomake2_scroll">Lomake 2 (hoitositoumus)</a></li>
            <li><a href="#paihdeohjelma_lomake3_scroll">Lomake 3 (kuntoutus)</a></li>
            <li><a href="#paihdeohjelma_lomake4_scroll">Lomake 4 (varoitus)</a><li>
          </ul>         
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Työsuojelu<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#tyosuojelu_scroll">Toimintaohjelma</a></li>
            
          </ul>         
        </li>         
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Riskiarviot <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#riskiarvio_suunnittelu_scroll">Arvioinnin suunnittelu</a></li>
            <li><a href="#riskiarvio_kohdevalinta_scroll">Kohteiden valinta</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#riskiarvio_ergonomia_scroll">Arviolomake (ergonomia)</a></li>
            <li><a href="#riskiarvio_fysikaaliset_scroll">Arviolomake (fysikaaliset)</a></li>
            <li><a href="#riskiarvio_henkiset_scroll">Arviolomake (henkiset)</a></li>
            <li><a href="#riskiarvio_tapaturmat_scroll">Arviolomake (tapaturmat)</a></li>
            <li><a href="#riskiarvio_kemialliset_scroll">Arviolomake (kemialliset)</a></li>
            
          </ul>         
        </li>  

        <li class=""><a href="#yleiset_scroll">Yleiset säädökset</a></li>    

      </ul>
	     <ul class="nav navbar-nav navbar-right" style="margin-right: 24px;">
	        <li><a class="btn btn-primary" id="valmisbutton" href="#" style="color: white;">Valmis!</a></li>

	      </ul>      


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <div class="container" style="background-color: #eee; min-width: 982px;">
        <div id="paihdeohjelma_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div>    
        @include('paihteet.paihdeohjelma')
        <div id="paihdeohjelma_lomake1_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div>  
        @include('paihteet.lomake1')
        <div id="paihdeohjelma_lomake2_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div>  
        @include('paihteet.lomake2')
        <div id="paihdeohjelma_lomake3_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div>  
        @include('paihteet.lomake3')
        <div id="paihdeohjelma_lomake4_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div>  
        @include('paihteet.lomake4')

        <div id="tyosuojelu_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div>  
        @include('tyosuojelu.toimintaohjelma')

        <div id="riskiarvio_kohdevalinta_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div> 
        @include('riskiarviot.kohteiden_valinta')
        <div id="riskiarvio_suunnittelu_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div> 
        @include('riskiarviot.arvioinnin_suunnittelu')
        <div id="riskiarvio_ergonomia_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div> 
        @include('riskiarviot.ergonomia')
        <div id="riskiarvio_fysikaaliset_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div> 
        @include('riskiarviot.fysikaaliset')
        <div id="riskiarvio_henkiset_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div> 
        @include('riskiarviot.henkiset')
        <div id="riskiarvio_tapaturmat_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div> 
        @include('riskiarviot.tapaturmat')
        <div id="riskiarvio_kemialliset_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div> 
        @include('riskiarviot.kemialliset')


        <hr>
        <div id="yleiset_scroll" style="visibility: hidden; height: 32px; width: 100%;"></div> 
        @include('yleiset')
        <hr>


    
    
    


        </div>
    <footer class="footer">
      <div class="container" style="text-align: center;">
        <p class="text-muted">Tyoturvallisuussuunnitelma.fi tuottaa syöttämiesi tietojen pohjalta pinkan työturvallisuusdokumentteja yrityksesi käyttöön! <br>
            Palvelun tuottajat: <a href="http://nollaversio.fi">Nollaversio IT</a> ja <a href="http://lyyti.fi">Lyyti Oy</a></p>
      </div>
    </footer>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script>
        var HIGHLIGHT_CLASS = 'dynamicinsert';

        $(document).ready(function() {

            swal('Tarkista ja muokkaa dokumentit!', 'Työsuojeludokumentit on nyt generoitu. Voit yhä tehdä haluamiasi muokkauksia "Avaa editori"-painikkeen kautta. Voit muokata, poistaa ja lisätä tekstiä. Vältä kuitenkin suurten rakenteellisten muutosten tekemistä.', 'info');


          // Later lets move these into some collapsed event listener that listens clicks globally
          // and dispatches from there using event.target  
          $('.openeditor').on('click', function(e) {
            // Find the wrapping content area
            console.log("Click open editor button");
            var $button = $(e.target);
            var contentID = $button.closest('.content').attr('id');

            if (contentID) {
                return toggleEditor(contentID); // We pass only id so function can be easily tested & called
            }

            throw "Openeditor button did not have content area wrapping it?? (contentID: " + contentID + ")";
            
          });
          $('.highlightinsert').on('click', function(e) {
            // Find the wrapping content area
            console.log("Click highlight button");
            var $button = $(e.target);
            var contentID = $button.closest('.content').attr('id');

            if (contentID) {
                return toggleHighlight(contentID); // We pass only id so function can be easily tested & called
            }

            throw "Highlight button did not have content area wrapping it?? (contentID: " + contentID + ")";
            
          });

          $('#valmisbutton').on('click', function() {
            // Fetch all HTML from DOM forms
            // Enter email where download link will eventually be sent
            // Send data as one huge batch to node.js server which builds pdf
            openEmailModal();
            
          });

        });

        function toggleEditor(contentID) {
            console.log("DEV: Toggling editor for content area: " + contentID);

            var $content = $('#' + contentID);
            var $button  = $content.find('.openeditor'); // Get the button that needs visual update

            // Button holds the knowledge whether editor is currently open
            if ($button.data('isopen').toString() === "0") {
                // Open editor
                console.log("DEV: Open editor...");
                $content.find('.contentforeditor').summernote();
                $button.data('isopen', '1');
                $button.empty().append('Sulje editori');
                // Hide the highlight button
                $content.find('.highlightinsert').hide();
            } else {
                console.log("DEV: Close editor...");
                $content.find('.contentforeditor').summernote('destroy');
                $button.data('isopen', '0');
                $button.empty().append('Avaa editori'); 
                // Show the highlight button again
                $content.find('.highlightinsert').show();
               
            }

        }

        function toggleHighlight(contentID) {
            console.log("DEV: Toggling highlight for content area: " + contentID);

            var $content = $('#' + contentID);
            var $button  = $content.find('.highlightinsert'); // Get the button that needs visual update

            if ($button.data('isactive').toString() === "0") {

                $button.data('isactive', '1');
                $button.empty().append('Poista väritys');
                $content.find('.' + HIGHLIGHT_CLASS).addClass('varita');
            } else {
               $button.data('isactive', '0');
               $content.find('.' + HIGHLIGHT_CLASS).removeClass('varita');
               $button.empty().append('Väritä lisäykset');
            }



        }

        function openEmailModal() {

            var validateEmail = function(email) {
                email = email.trim();

                if (!email || email === '' || email.length < 4 || email.indexOf('@') === -1) {
                    return false;
                }
                return true; // Seems legit... 
            }

            swal({   
                title: "Kirjoita sähköpostiosoitteesi",   
                text: "PDF-tiedostojen tuottaminen palvelimemme toimesta saattaa kestää. Jos urakka vie aikaa, lähetämme sinulle latauslinkin sähköpostiisi. Lähtökohtaisesti saat latauslinkin heti käyttöösi.",   
                type: "input",  
                showCancelButton: true,   
                closeOnConfirm: false, 
                closeOnCancel: true,
                confirmButtonText: "Lähetä",
                cancelButtonText: 'Peruuta' 
            }, function(email) {
                if (!email) return true;
                if (!validateEmail(email)) {
                    console.warn("Email is messed up");
                    // I dunno if its necessary to skip to next eval loop run but what the heck
                    swal.showInputError('Email-osoite virheellinen!');
                    return false;
                }

                // All is good

                // req is either null or jQuery promise
                var req = getAndSendAway(email);
                if (req) {
                    swal('Lähetys lähti matkaan...', 'Odota hetki... lähetys on parhaillaan käynnissä!', 'info');
                    req.done(function(responseObj) {
                        console.log(responseObj);
                        swal({
                            title: 'Lähetys suoritettu', 
                            text: 'Latauslinkki: ' + responseObj.link,
                            type: 'success',
                            confirmButtonText: 'Lataa zip-tiedosto',
                            cancelButtonText: 'Sulje',
                            closeOnCancel: true,
                            closeOnConfirm: true
                        }, function(isConfirm) {
                            if (isConfirm) {
                                window.location = responseObj.link
                            } 
                            return true;
                        });
                    });
                    req.fail(function() {
                        swal('Lähetys keskeytyi tai epäonnistui', 'Tietoja ei onnistettu lähettämään!', 'error');
                    });
                } else {
                    swal('Tapahtui virhe!', 'Emme onnistuneet parsimaan HTML-puusta tarvittavia tietoja. Ota yhteys palvelun ylläpitäjään.', 'error');
                }
                
            });
        }

        function getAndSendAway(email) {

            var htmls = [];
            // Find those content items that are meant to be sent
            var sendableItems = $('.tobesend');

            // Then simply get HTML for each
            $.each(sendableItems, function(i, item) {
                item = $(item);
                console.log(item);
                // We not do want buttons so lets take only editor content area
                var htmlWrapper = item.find('.contentforeditor');
                console.log(htmlWrapper.html());
                var contentName = item.data('fordocument');
                htmls.push({
                    name: contentName,
                    html: htmlWrapper.html()
                });
            });

            if (htmls.length === 0) {
                console.warn("HTML LENGTH IS ZERO! NOTHING TO SEND TO SERVER!");
                return null;
            }
            // For testing

            

            return sendWithAjax(email, htmls);
        
        }

        function sendWithAjax(email, htmls2) {
            var req = $.ajax({
              method: "POST",
              dataType: "json",
              url: "{{$nodeURL}}",
              //url: "{{route('receivedata')}}",
              data: { email: email, htmls: JSON.stringify(htmls2) }
            });

            return req;
        }




    </script> 

    </body>
</html>
