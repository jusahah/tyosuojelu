<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

       
        <!-- include libraries(jQuery, bootstrap) -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

        <!-- include summernote css/js-->
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
                top: 24px;
                right: 26px;
                color: white;
                background-color: #AC5287;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
            }
            .highlightinsert {
                z-index: 99999;
                position: absolute;
                top: 52px;
                right: 26px;
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

        </style>
    </head>
    <body>
        <div class="container" style="background-color: #eee;">
            <div class="content" id="tyosuojelu" data-fordocument="tyosuojelu" style="width: 90%; color: #222; background-color: white;">
                <div class="documentheader" contenteditable="false">Työsuojelu</div>
                <button class="openeditor" contenteditable="false" data-isopen="0">Avaa editori</button>
                <button class="highlightinsert" contenteditable="false" data-isactive="0">Väritä lisäykset</button>
                <div class="contentforeditor">

                    <h1>Työsuojelun toimintaohjelma</h1>


                    <h3>@userinput($firmanNimi)</h3>
                    <hr>

                    <h4>Työsuojelun tavoitteet</h4><p>
                    Taata työntekijöille terveelliset ja turvalliset työolosuhteet ja ennaltaehkäistä työstä ja työympäristöstä johtuvia henkisiä ja fyysisiä terveyden haittoja. Ylläpitää ja edistää työntekijöiden henkistä ja fyysistä terveyttä.
                    Konkreettisina tavoitteina ovat mm. sairauspoissaolojen vähäisyys, persoonan ja työtehtävän kannalta sopivien työolosuhteiden ja työtehtävien tarjoaminen sekä liikuntaan kannustavan ilmapiirin luominen.
                    </p>
                    <h4>Työsuojelun vastuut ja toimivaltuudet</h4><p>
                    Työpaikan ja työympäristön työturvallisuudesta vastaa työnantaja. Työnantajan/ylimmän johdon vastuulla on luoda perusta työsuojeluasioiden hoitamiselle ja valvoa työsuojelutoimintaa
                    Työntekijöiden velvollisuus on noudattaa annettuja työ- ja toimintaohjeita. Työntekijöillä on oikeus tehdä työpaikan turvallisuutta ja terveellisyyttä koskevia ehdotuksia työnantajalle ja saada niistä palautetta.
                    </p>
                    <h4>Työympäristön kuvaus</h4><p>
                    Työtä tehdään kahdessa avotilassa ja muutamissa kahden hengen huoneissa. Lisäksi yksi työntekijä tekee osan viikosta etätyötä kotoaan. Työ on osalla henkilöstöä näyttöpäätetyötä ja osalla matkustamista (koulutuksiin ja esittelyihin liittyen) sekä näyttöpäätetyötä.
                    Työn vaaroja ja riskejä on arvioitu työterveyshuollon työpaikkaselvityksessä 10.9.2013. Viimeistään kesäkuussa 2014 tullaan tekemään työpaikan työsuojeluyhteistoiminnan edustajien toimesta Työturvallisuuslain mukainen työn vaarojen selvittäminen ja arviointi.
                    </p>
                    <h4>Työ- ja turvallisuusohjeet</h4><p>
                    Työpaikan turvallisuusohjeet, päihdeohjelmaohje/-lomake sekä työterveyshuollon ohjeet löytyvät koko henkilöstölle pilvipalvelussa jaetusta ”Työsuojelu ja työterveys” –kansiosta sekä paperisena Linnankadun 7. kerroksen toimiston isosta avotilasta kansiosta ”Työsuojelu & työterveys”.
                    </p>
                    <h4>Työsuojelun kehittämiskohteet</h4><p>
                    10.9.2013 tehdyn työterveyshuollon työpaikkaselvityksen mukaan tärkeimmät kehittämiskohteet olivat työergonomia, valaistus sekä työn terveellinen tauottaminen. Valaistusta on parannettu ja työfysioterapeutin ohjeita on otettu käyttöön. Jatkossa kehittämiskohteena on mm. taukojumppailuun kannustaminen ja ohjaaminen.
                    </p>
                    @userinput($firmanNimi)

                    <h4>Työsuojelun yhteistoiminta</h4><p>
                    Työnantaja on valinnut edustajakseen työsuojelun yhteistoimintaan työsuojelupäällikön ja työntekijät työsuojeluvaltuutetun sekä kaksi varavaltuutettua. Työntekijät ovat työnantajan kanssa yhteistoiminnassa suoraa työsuojelupäällikön kautta tai välillisesti työsuojeluvaltuutetun kautta, joka on yhteydessä työsuojelupäällikköön.
                    </p>
                    <h4>Työterveyshuolto</h4><p>
                    Työterveyshuollon palveluntuottajana toimii @userinput($laakari). Yhdessä palveluntuottajan kanssa on luotu työterveyshuollon toimintasuunnitelma ajalle 1.7.-31.12.2017. Työntekijät saavat lakisääteisen terveydenhuollon Elonista. Lisäksi yritys on ottanut IF vakuutusyhtiöstä vapaaehtoisen sairaanhoitovakuutuksen, joka korvaa työntekijöiden yleis- ja erikoislääkäritason hoito- ja tutkimuskustannuksia.
                    </p>
                    <h4>Työsuojeluasioiden huomiointi toiminnassa</h4><p>
                    Työsuojeluvaltuutettu käyttää 4 tuntia per 4 kalenteriviikkoa työsuojeluasioiden hoitoon. Neljännesvuosittaisissa koko yritystä koskevassa palaverissa käydään läpi työsuojelun tehdyt ja tulevat toimenpiteet.
                    </p>
                    <h4>Työolojen seuranta  </h4><p>
                    Lääkäriasema Eloni pitää kirjaa sairauspoissaoloista. Esille tulevat työn vaarat ja riskit dokumentoidaan, jatkossa dokumentointi suoritetaan riskienarviointilomakkeille työsuojeluvaltuutetun toimesta. Työntekijöiden mielipiteistä koskien työoloja pyritään olemaan jatkuvasti selvillä luomalla avoin vuorovaikutussuhde työnantajan ja työntekijän välille. 
                    </p>
                    <h4>Toimintaohjelman seuranta ja päivitys</h4><p>
                    Työsuojelupäällikkö vastaa toimintaohjelman seurannasta. Työsuojelupäällikön toimesta työsuojelun toimintaohjelma päivitetään vuosittain tai tarpeen vaatiessa useammin.
                    </p>

                    <span class="font-style: italic;">
                    Päiväys: {{$paivays}}</span>
            </div>



            </div>

            <div class="content" style="width: 90%; color: #222; background-color: white;" contenteditable="true">
                

<h1>Työsuojelun toimintaohjelma</h1>


<h3>{{$firmanNimi}}</h3>

<h4>Työsuojelun tavoitteet</h4><p>
Taata työntekijöille terveelliset ja turvalliset työolosuhteet ja ennaltaehkäistä työstä ja työympäristöstä johtuvia henkisiä ja fyysisiä terveyden haittoja. Ylläpitää ja edistää työntekijöiden henkistä ja fyysistä terveyttä.
Konkreettisina tavoitteina ovat mm. sairauspoissaolojen vähäisyys, persoonan ja työtehtävän kannalta sopivien työolosuhteiden ja työtehtävien tarjoaminen sekä liikuntaan kannustavan ilmapiirin luominen.
</p>
<h4>Työsuojelun vastuut ja toimivaltuudet</h4><p>
Työpaikan ja työympäristön työturvallisuudesta vastaa työnantaja. Työnantajan/ylimmän johdon vastuulla on luoda perusta työsuojeluasioiden hoitamiselle ja valvoa työsuojelutoimintaa
Työntekijöiden velvollisuus on noudattaa annettuja työ- ja toimintaohjeita. Työntekijöillä on oikeus tehdä työpaikan turvallisuutta ja terveellisyyttä koskevia ehdotuksia työnantajalle ja saada niistä palautetta.
</p>
<h4>Työympäristön kuvaus</h4><p>
Työtä tehdään kahdessa avotilassa ja muutamissa kahden hengen huoneissa. Lisäksi yksi työntekijä tekee osan viikosta etätyötä kotoaan. Työ on osalla henkilöstöä näyttöpäätetyötä ja osalla matkustamista (koulutuksiin ja esittelyihin liittyen) sekä näyttöpäätetyötä.
Työn vaaroja ja riskejä on arvioitu työterveyshuollon työpaikkaselvityksessä 10.9.2013. Viimeistään kesäkuussa 2014 tullaan tekemään työpaikan työsuojeluyhteistoiminnan edustajien toimesta Työturvallisuuslain mukainen työn vaarojen selvittäminen ja arviointi.
</p>
<h4>Työ- ja turvallisuusohjeet</h4><p>
Työpaikan turvallisuusohjeet, päihdeohjelmaohje/-lomake sekä työterveyshuollon ohjeet löytyvät koko henkilöstölle pilvipalvelussa jaetusta ”Työsuojelu ja työterveys” –kansiosta sekä paperisena Linnankadun 7. kerroksen toimiston isosta avotilasta kansiosta ”Työsuojelu & työterveys”.
</p>
<h4>Työsuojelun kehittämiskohteet</h4><p>
10.9.2013 tehdyn työterveyshuollon työpaikkaselvityksen mukaan tärkeimmät kehittämiskohteet olivat työergonomia, valaistus sekä työn terveellinen tauottaminen. Valaistusta on parannettu ja työfysioterapeutin ohjeita on otettu käyttöön. Jatkossa kehittämiskohteena on mm. taukojumppailuun kannustaminen ja ohjaaminen.
</p>


<h4>Työsuojelun yhteistoiminta</h4><p>
Työnantaja on valinnut edustajakseen työsuojelun yhteistoimintaan työsuojelupäällikön ja työntekijät työsuojeluvaltuutetun sekä kaksi varavaltuutettua. Työntekijät ovat työnantajan kanssa yhteistoiminnassa suoraa työsuojelupäällikön kautta tai välillisesti työsuojeluvaltuutetun kautta, joka on yhteydessä työsuojelupäällikköön.
</p>
<h4>Työterveyshuolto</h4><p>
Työterveyshuollon palveluntuottajana toimii {{$laakari}}. Yhdessä palveluntuottajan kanssa on luotu työterveyshuollon toimintasuunnitelma ajalle 1.7.-31.12.2017. Työntekijät saavat lakisääteisen terveydenhuollon Elonista. Lisäksi yritys on ottanut IF vakuutusyhtiöstä vapaaehtoisen sairaanhoitovakuutuksen, joka korvaa työntekijöiden yleis- ja erikoislääkäritason hoito- ja tutkimuskustannuksia.
</p>
<h4>Työsuojeluasioiden huomiointi toiminnassa</h4><p>
Työsuojeluvaltuutettu käyttää 4 tuntia per 4 kalenteriviikkoa työsuojeluasioiden hoitoon. Neljännesvuosittaisissa koko yritystä koskevassa palaverissa käydään läpi työsuojelun tehdyt ja tulevat toimenpiteet.
</p>
<h4>Työolojen seuranta  </h4><p>
{{$laakari}} pitää kirjaa sairauspoissaoloista. Esille tulevat työn vaarat ja riskit dokumentoidaan, jatkossa dokumentointi suoritetaan riskienarviointilomakkeille työsuojeluvaltuutetun toimesta. Työntekijöiden mielipiteistä koskien työoloja pyritään olemaan jatkuvasti selvillä luomalla avoin vuorovaikutussuhde työnantajan ja työntekijän välille. 
</p>
<h4>Toimintaohjelman seuranta ja päivitys</h4><p>
Työsuojelupäällikkö vastaa toimintaohjelman seurannasta. Työsuojelupäällikön toimesta työsuojelun toimintaohjelma päivitetään vuosittain tai tarpeen vaatiessa useammin.
</p>

<span class="font-style: italic;">
Päiväys: {{$paivays}}</span>



            </div>

        </div>

    <script>
        var HIGHLIGHT_CLASS = 'dynamicinsert';

        $(document).ready(function() {

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




    </script>    
    </body>
</html>
