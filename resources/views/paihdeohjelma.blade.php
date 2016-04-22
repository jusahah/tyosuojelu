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
      <a class="navbar-brand" href="#">Yhdenvertaisuussuunnitelma.fi</a>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Turvallisuus</a></li>

        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Päihteet <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Päihdeohjelma</a></li>
            <li><a href="#">Lomake 1 (puheeksiotto)</a></li>
            <li><a href="#">Lomake 2 (hoitositoumus)</a></li>
            <li><a href="#">Lomake 3 (kuntoutus)</a></li>
            <li><a href="#">Lomake 4 (varoitus)</a><li>
          </ul>         
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Riskiarviot <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Riskiarviot</a></li>
            <li><a href="#">Lomake 1 (puheeksiotto)</a></li>
            <li><a href="#">Lomake 2 (hoitositoumus)</a></li>
            <li><a href="#">Lomake 3 (kuntoutus)</a></li>
          </ul>         
        </li>  
        <li class=""><a href="#">Syrjintä</a></li>  
        <li class=""><a href="#">Yleiset säädökset</a></li>    

      </ul>
	     <ul class="nav navbar-nav navbar-right" style="margin-right: 24px;">
	        <li><a class="btn btn-primary" id="valmisbutton" href="#" style="color: white;">Valmis!</a></li>

	      </ul>      


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <div class="container" style="background-color: #eee; min-width: 982px;">
            <div class="content" id="paihdeohjelma" data-fordocument="paihdeohjelma" style="width: 90%; color: #222; background-color: white;">
                <div class="documentheader" contenteditable="false">Päihdeohjelma</div>
                <button class="openeditor" contenteditable="false" data-isopen="0">Avaa editori</button>
                <button class="highlightinsert" contenteditable="false" data-isactive="0">Väritä lisäykset</button>
                <div class="contentforeditor"><p lang="en-GB">
    <h1>@userinput($firmanNimi):n päihdeohjelma</h1>
</p>
<p lang="fi-FI">
    <strong>Periaatteet </strong>
</p>
<p lang="en-GB">
    <a name="OLE_LINK3"></a>
    <a name="OLE_LINK4"></a>
    Me täällä yrityksessä @userinput($firmanNimi) olemme sitoutuneet varmistamaan turvallisen, terveellisen ja tuottavan työpaikan jokaiselle työntekijällemme. Tätä tarkoitusta
    varten on voimassa tämä päihdeohjelma. Päihdeohjelmaa laadittaessa on kuunneltu koko henkilöstöä ja annettu kaikille työntekijöille mahdollisuus
    ilmaista näkemyksensä ja mielipiteensä.
</p>
<p lang="fi-FI">
    Päihdeohjelmamme tavoitteena on tukea työntekijöiden työkykyä ja ehkäistä päihdehaittoja sekä ohjata tarkoituksenmukaiseen toimintaan
    päihdehaittatilanteissa. Päihdeohjelmaa toteutetaan tiedotuksella, koulutuksella, valmennuksella sekä henkilöstön ja työterveyshuollon toimenpiteillä
    samoin kuin suunnitelmallisella seurannalla ja arvioinnilla. Päihdeohjelma tulee saattaa jokaisen työntekijän tiedoksi.
</p>
<p lang="en-GB">
    Päihteillä tässä tarkoitetaan kaikkia päihtymistarkoituksessa käytettyjä aineita. @userinput($firmanNimi):ssa ei työaikana ja työtehtävissä saa käyttää, pitää hallussa, jakaa
    tai myydä alkoholia. @userinput($firmanNimi):ssa ei myöskään saa työskennellä eikä työpaikalla saa olla päihtyneenä. Huumeiden, lääkkeiden päihdekäytön, anabolisten steroidien
    sekä muiden laissa kiellettyjen päihdyttävien aineiden ja lääkeaineiden laittoman käytön kielto koskee myös työpaikkaamme. Tupakoinnin suhteen noudatetaan
    tupakkalakia ja sovittuja käytäntöjä (kirjaa käytäntö tähän).
</p>
<p lang="en-GB">
    Päihdehaittatilanteella tarkoitetaan tilanteita, joissa alkoholin tai muun päihteen vaikutus uhkaa tai haittaa yksilön omaa tai toisen työntekijän työtä,
    työkykyä, työturvallisuutta, työpaikan ilmapiiriä, työn tuloksia tai työnantajan mainetta.
</p>
<p lang="en-GB">
    Päihdehaittojen ennaltaehkäisyn toimenpiteet, tiedotus, koulutus, valmennus ja seuranta, kuvataan alempana. Jos ennaltaehkäisystä huolimatta vapaa-ajan
    päihdekäytön seurauksena työssä ilmenee ongelmia tai jos työpaikallamme on henkilö päihtyneenä, toimitaan alempana kuvattujen ohjeiden mukaisesti.
</p>
<p lang="fi-FI">
    Jokainen työntekijä on ensisijaisesti itse vastuussa työkyvystään, mutta esimiehellä on vastuu ja velvollisuus määritellä työntekijöiden työkunto
    työturvallisuuden näkökulmasta. Päihdeohjelmassa kuvataan kunkin toimijan vastuut ja tehtävät päihdehaittojen ehkäisyssä sekä seurantamenetelmät ja
    seuraukset noudattamatta jättämisestä.
</p>
<p lang="fi-FI">
    @userinput($firmanNimi):n periaate on, että päihdehaittatilanteissa asia käsitellään viipymättä, rakentavasti ja tasapuolisesti. Tämä edellyttää, että henkilöstölle ja
    esimiehille järjestetään tiedotusta ja koulutusta alkoholiriskeistä työhyvinvoinnille sekä valmennusta, jotta kukin osaa toimia ohjeiden mukaan.
</p>
<p lang="fi-FI">
    <strong>Päihdeohjelman kohde</strong>
</p>
<p lang="fi-FI">
    @userinput($firmanNimi):ssa olemme tietoisia siitä, että alkoholin käyttö ja sen aiheuttamat haitat riskeeraavat työkykyä, työturvallisuutta ja työn tuloksia. Alkoholihaitat
    voivat vaikuttaa kenen tahansa työhön missä tahansa työtehtävässä. Muiden päihteiden suhteen noudatetaan Suomen lakia ja tätä päihdeohjelmaa.
</p>
<p lang="fi-FI">
    Päihdeohjelma koskee jokaista @userinput($firmanNimi):n työntekijää sekä soveltuvin osin alihankkijoita samoin kuin @userinput($firmanNimi):n alueella vierailevia henkilöitä. Päihdeohjelma koskee
    myös etä- ja matkatöissä olevia kaikkialla, missä työnantajan työsuojeluvastuu on voimassa.
</p>
<p lang="fi-FI">
    Työpaikan järjestämissä juhlatilaisuuksissa noudatetaan vastuullisen alkoholitarjoilun ohjeita. Työpaikan ulkopuolisissa työtehtävissä ja työmatkoilla
    olemme työpaikkamme edustajia, mikä edellyttää asiallista ja vastuullista käyttäytymistä myös alkoholin suhteen.
</p>
<p lang="fi-FI">
    Päihdeohjelman noudattaminen tarkoittaa tehtäviä ja vastuita, joiden toteutumista seurataan vuosittain kehityskeskusteluissa.
</p>
<p lang="fi-FI">
    <strong>Päämäärä ja tavoitteet</strong>
</p>
<p lang="fi-FI">
    Päihdeohjelman päämääränä on päihdehaitaton työpaikka. Tähän päästään seuraavien osatavoitteiden avulla:
</p>
<ul>
    <li>
        <p lang="fi-FI">
            Ehkäisemme päihdehaittoja eli päihteistä aiheutuvia kielteisiä seurauksia työpaikalle ja yksilölle.
        </p>
    </li>
    <li>
        <p lang="en-GB">
            Tuemme henkilöstöä välttämään alkoholin riskikäyttöä ja pysymään kohtuukäytössä tai raittiina sekä välttämään muiden päihteiden käyttöä.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Ohjeistamme päihdehaittojen ehkäisyn ja päihdeongelmiin puuttumisen käytännöt.
        </p>
    </li>
</ul>
<p lang="en-GB">
    <strong>Vastuiden ja tehtävien tarkistuslistat</strong>
</p>
<p lang="fi-FI">
    Kullekin työntekijäryhmälle on listattu omat vastuunsa ja tehtävänsä. Päihdeohjelman toteutumista ja siihen tehtäviä tarvittavia korjaustoimia
    tarkastellaan esimiehen kanssa kehityskeskustelussa.
</p>
<p lang="en-GB">
    <strong>Työnantajan edustajan vastuulla on</strong>
</p>
<ul>
    <li>
        <p lang="fi-FI">
            nimittää päihdehaitattomasta työpaikasta vastaavat henkilöt (päihdetyöryhmä/ esimiehet) toimimaan päihdeohjelman toimeenpanossa
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            huolehtia, että
        </p>
        <ul>
            <li>
                <p lang="fi-FI">
                    päihdeohjelma otetaan käyttöön ja juurrutetaan työpaikan käytäntöihin
                </p>
            </li>
            <li>
                <p lang="fi-FI">
                    päihdehaittatilanteisiin puututaan välittömästi
                </p>
            </li>
            <li>
                <p lang="en-GB">
                    päihdehaittatilanteita käsitellään luottamuksellisesti, kannustavasti ja tasapuolisesti
                </p>
            </li>
        </ul>
    </li>
    <li>
        <p lang="fi-FI">
            varmistaa, että
        </p>
        <ul>
            <li>
                <p lang="fi-FI">
                    henkilöstö tuntee talon päihdeohjelman ja omat tehtävänsä siinä
                </p>
            </li>
            <li>
                <p lang="fi-FI">
                    päihtyneen työntekijän tai päihdeongelmaisen työntekijän kanssa toimitaan ohjeiden mukaan
                </p>
            </li>
            <li>
                <p lang="fi-FI">
                    työpaikan tilaisuuksissa noudatetaan vastuullisen alkoholitarjoilun ohjetta
                </p>
            </li>
        </ul>
    </li>
    <li>
        <p lang="fi-FI">
            järjestää henkilöstölle koulutusta ja tiedotusta
        </p>
        <ul>
            <li>
                <p lang="fi-FI">
                    päihteettömyyden ja alkoholin kohtuukäytön eduista työkyvyn ja hyvinvoinnin kannalta
                </p>
            </li>
            <li>
                <p lang="en-GB">
                    alkoholin riskikäytön haitoista terveydelle, työkyvylle ja työturvallisuudelle
                </p>
            </li>
        </ul>
    </li>
</ul>
<p lang="en-GB">
    – päihdeohjelman vastuiden edellyttämiin taitoihin
</p>
<ul>
    <li>
        <p lang="fi-FI">
            tarjota työterveyshuollon kautta apua päihdeongelmiin
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            seurata ja arvioida
        </p>
        <ul>
            <li>
                <p lang="fi-FI">
                    työoloja ja varmistaa, että ne eivät edesauta alkoholihaittoja työpaikalla
                </p>
            </li>
            <li>
                <p lang="fi-FI">
                    tämän ohjelman toteutumista vähintään kahden vuoden välein yhteistyössä henkilöstön ja heidän edustajiensa kanssa.
                </p>
            </li>
        </ul>
    </li>
</ul>
<p lang="fi-FI">
    <strong>Jokaisen työntekijän vastuulla on</strong>
</p>
<ul>
    <li>
        <p lang="fi-FI">
            tulla töihin työkuntoisena
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            tehdä työnsä turvallisuusohjeita noudattaen
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            toimia työyhteisössään rakentavasti ja asiallisesti muita kohtaan
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            noudattaa sovittuja, päihteitä koskevia sääntöjä
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            hakea apua päihdeongelmiinsa
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            ilmoittaa työyhteisössään havaitsemistaan päihdehaitoista sovitulle taholle.
        </p>
    </li>
</ul>
<p lang="fi-FI">
    <strong>Esimiesten vastuulla on</strong>
</p>
<ul>
    <li>
        <p lang="fi-FI">
            tukea ja valvoa työn sujuvuutta ja henkilöstön työhyvinvointia ja työturvallisuutta
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            saattaa henkilöstö yhteisten sääntöjen taakse päihdeasioissa esim. A-Stepin avulla
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            rohkaista henkilöstöä pitämään huolta työkunnostaan
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            perehdyttää kaikki päihdeohjelmaan
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            ottaa päihteet puheeksi työhön perehdytyksessä ja kehityskeskusteluissa sekä säännöllisesti henkilöstötilaisuuksissa
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            puuttua viipymättä työkyvyn heikkenemiseen ja päihdehaittatilanteesiin
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            estää päihtyneenä/krapulaisena työskentely
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            ohjata työntekijä työterveyshuoltoon saamaan tarvittavaa hoitoa työkykynsä parantamiseksi
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            selvittää hoitoonohjauskokouksessa päihdehaittatilanne työyhteisön näkökulmasta
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            tehdä hoitositoumus hoitoonohjattavan kanssa
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            sopia tiedonkulusta hoitositoumuksen voimassaolon aikana
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            tukea työyhteisöä kriisitilanteiden jälkeen ja ohjata keskustelua opiksi ottamisen näkökulmaan
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            varmistaa, että työpaikan tilaisuuksissa alkoholitarjoilu on vastuullista ja noudattaa sovittuja rajoja.
        </p>
    </li>
</ul>
<p lang="fi-FI">
    <strong>Työsuojeluhenkilöstön ja päihdetyöryhmän vastuulla on </strong>
</p>
<ul>
    <li>
        <p lang="fi-FI">
            toimia yhteistyössä esimiesten ja työterveyshuollon kanssa päihdehaittojen ehkäisemiseksi ja poistamiseksi
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            kartoittaa työpaikan päihdeasioiden tilannetta eri lähteitä käyttäen (luettelo niistä)
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            suunnitella työpaikan päihdehaittojen ehkäisytoimia osana Työsuojelun toimintasuunnitelmaa, esimerkiksi:
        </p>
        <ul>
            <li>
                <p lang="fi-FI">
                    toteuttaa koulutuksia, valmennuksia, tiedotustilaisuuksia
                </p>
            </li>
            <li>
                <p lang="fi-FI">
                    järjestää esimiesten ja päihdetyöryhmän yhteistyökokouksia
                </p>
            </li>
            <li>
                <p lang="fi-FI">
                    hyödyntää henkilöstön tiedotuskanavia
                </p>
            </li>
            <li>
                <p lang="fi-FI">
                    järjestää tempauksia, kampanjoita ja toimintapäiviä esim. työsuojeluviikon ja
                </p>
            </li>
        </ul>
    </li>
</ul>
<p lang="en-GB">
    Tipattoman tammikuun merkeissä
</p>
<ul>
    <ul>
        <li>
            <p lang="fi-FI">
                ehdottaa keinoja työhyvinvoinnin ja työilmapiirin tukemiseen
            </p>
        </li>
    </ul>
    <li>
        <p lang="fi-FI">
            jakaa esimiehille ja henkilöstölle tietoa työpaikan päihdeohjelmasta
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            tunnistaa päihdeongelmista viestittävät oireet ja riskit työpaikalla
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            tukea esimiehiä päihdeasioiden keskustelun käynnistämisessä työyhteisön kanssa
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            tehdä esimiehille toimenpide-ehdotuksia päihdehaittoja havaitessaan
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            valmentaa tarvittaessa esimiehiä päihdeongelman puheeksi ottamiseen
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            tukea hoitoonohjausprosessin toteutumista
        </p>
    </li>
    <li>
        <p lang="en-GB">
            kokoontua 4–6 kertaa vuodessa Työsuojelun toimintasuunnitelman mukaisesti
        </p>
    </li>
    <li>
        <p lang="en-GB">
            tehdä kokouksista muistiot tiedoksi työsuojeluryhmälle ja henkilöstölle
        </p>
    </li>
    <li>
        <p lang="en-GB">
            seurata päihdehaittojen ehkäisytoimien toteutumista ja raportoida siitä työsuojeluryhmälle ja työnantajalle.
        </p>
    </li>
</ul>
<p lang="en-GB">
    <strong>Työterveyshuollon vastuulla on </strong>
</p>
<ul>
    <li>
        <p lang="fi-FI">
            tukea henkilöstömme päihteiden riskikäytön ennalta ehkäisyä ja hoitoa
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            antaa jokaiselle työntekijälle terveystarkastuksien yhteydessä tietoa alkoholinkäytön vaikutuksista terveyteen ja työkykyyn
        </p>
    </li>
    <li>
        <p lang="en-GB">
            kysyä sairaanhoitovastaanotoilla myös alkoholinkäytöstä vähintään kerran vuodessa ja aina tiettyihin oireisiin liittyen
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            käydä sovituin välein henkilöstötilaisuuksissa puhumassa terveyttä edistävistä aiheista (tarkemmin TTH:n vuosisuunnitelmassa)
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            seuloa alkoholin riskikäyttöä AUDIT-testillä sekä tarjota ohjausta ja neuvontaa riskikäyttäjille
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            kerätä tietoa työpaikan alkoholitilanteesta (esim. haittakartoitus, AUDIT) ja antaa siitä palautetta vuosittain
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            osallistua työpaikan päihdetyöryhmän/päihdeyhdyshenkilöiden kokouksiin ja päihdehaittoja ehkäisevän koulutuksen toteutukseen (tietoiskut, luennot)
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            toimia hoitoonohjaustilanteissa asiantuntijana (hoitositoumus ja kuntoutussuunnitelma) ja tukea kuntoutujan paluuta työhön
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            toimia päihdekriisitilanteissa muun työyhteisön tukena.
        </p>
    </li>
</ul>
<p lang="fi-FI">
    <strong>Toimintamallit:</strong>
</p>
<p lang="en-GB">
    Päihdehaittatilanteissa on toimittava alla olevien ohjeiden mukaan ja työpaikan tilaisuuksissa vastuullisen alkoholitarjoilun ohjeen mukaan.
</p>
<p lang="fi-FI">
    Näitä toimintamalleja noudatetaan ja ne ovat voimassa @userinput($firmanNimi):ssa:
</p>
<p lang="en-GB">
    (lisää seuraaviin kohtiin ohjeet esim. Päihdeohjelmaoppaan s. 30–33 mukaan)
</p>
<p lang="fi-FI">
    a) Työntekijä on huolissaan omasta päihteiden käytöstään
</p>
<p lang="fi-FI">
    b) Työntekijä on huolissaan työtoverin työkunnosta
</p>
<p lang="fi-FI">
    c) Alaiset ovat huolissaan esimiehen työkunnosta
</p>
<p lang="fi-FI">
    d) Esimies on huolissaan alaisen työkunnosta
</p>
<p lang="fi-FI">
    e) Työntekijä on päihtyneenä töissä
</p>
<p lang="fi-FI">
    <strong>Tavoitteellisen puheeksiottokeskustelun ohje </strong>
</p>
<p lang="en-GB">
    (esim. Päihdeohjelmaoppaan s. 34–36 mukaan)
</p>
<p lang="fi-FI">
    <strong>Vastuullisen alkoholitarjoilun ohje</strong>
</p>
<p lang="fi-FI">
    Alkoholin käyttö @userinput($firmanNimi):ssa työajalla ja työpaikalla ei ole sallittua. Joissakin työpaikan tilaisuuksissa esimiehen luvalla voidaan tarjoilla alkoholia. On
    tärkeää huolehtia, että näistä tilanteista ei aiheudu haittaa kenellekään liiallisen alkoholin käytön vuoksi.
</p>
<p lang="en-GB">
    Työnantajan ja esimiesten vastuulla on huolehtia turvallisuudesta myös silloin, kun työpaikan tilaisuudessa tarjotaan alkoholia. Mikäli näissä
    tilaisuuksissa tapahtuu työkäyttäytymisen sääntöjen rikkomista, on esimiehen tehtävänä käydä tavoitteellinen puheeksiottokeskustelu vastaisuuden varalle
    viimeistään viikon sisällä tapahtuneesta. Esimies kirjoittaa keskustelusta muistion (Lomake 1).
</p>
<p lang="fi-FI">
    Seuraavat ohjeet auttavat ehkäisemään haittoja, mikäli työpaikan tilaisuudessa tarjotaan alkoholia:
</p>
<ul>
    <li>
        <p lang="fi-FI">
            Tilaisuuden alku- ja loppuajankohta ilmoitetaan selvästi.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Huolehditaan, että tarjolla on monipuolinen ja runsas valikoima alkoholittomia juomia ja vain mietoja alkoholijuomia.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Suositellaan, että ihmiset nauttivat vaihdellen em. juomia.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Tilaisuuden aikana on ruokaa ja vähäsuolaista naposteltavaa riittävästi tarjolla.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Varmistetaan, että alkoholia tarjotaan selkeinä annoksina, jotta osallistujat voivat olla tietoisia juomistaan määristä.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Rajoitetaan tarjottavien alkoholiannosten määrä, esimerkiksi 2 annosta/henkilö.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Tilaisuuden järjestäjillä ja tarjoiluhenkilökunnalla tulee olla anniskelupassi tai alkoholitarjoilun koulutus.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Opastetaan nuoria/uusia työntekijöitä etukäteen.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Huolehditaan työntekijöiden kotimatkasta, mikäli he toivovat sitä.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Kieltäydytään tarjoilemasta alkoholia päihtyneelle henkilölle.
        </p>
    </li>
    <li>
        <p lang="fi-FI">
            Pidetään tämä ohjeisto osana päihdeohjelmaa.
        </p>
    </li>
</ul>
<p lang="fi-FI">
    <strong>Päihdeohjelman lomakkeet:</strong>
</p>
<p lang="fi-FI">
    1. Muistio puheeksiottotilanteesta
</p>
<p lang="fi-FI">
    2. Hoitositoumus
</p>
<p lang="fi-FI">
    3. Kuntoutussuunnitelma
</p>
<p lang="fi-FI">
    4. Varoitus päihteiden käytöstä
</p>

            </div>



            </div>



            <!--- NEXT DOCUMENT STARTS -->

            <div class="content" id="paihdeohjelma_lomake1" data-fordocument="paihdeohjelma_lomake1" style="width: 90%; color: #222; background-color: white;">
                <div class="documentheader" contenteditable="false">Lomake 1 (Muistio puheeksiottotilanteesta)</div>
                <button class="openeditor" contenteditable="false" data-isopen="0">Avaa editori</button>
            
                <div class="contentforeditor"><p lang="en-GB">      

                <!-- COPY PASTE HERE -->    
                <h4>Lomake 1. MUISTIO PUHEEKSIOTTOTILANTEESTA</h4>
				<hr>
				<p lang="fi-FI">
				    <strong>Henkilön tiedot:</strong>
				</p>
				<p lang="en-GB">
				    sukunimi ___________________  etunimi _________________
				</p>
				<p lang="en-GB">
				    syntymäaika  ___________________  työtehtävä ___________________  
				</p>
				<p lang="fi-FI">
				    osasto/yksikkö  ___________________  esimies ___________________  
				</p>
				<p lang="fi-FI">
				    Olen osallistunut keskusteluun, jossa on käsitelty mahdollista päihdeongelmaani.
				</p>
				<p lang="fi-FI">
				    Minulle on selvitetty työpaikan toimintatavat päihdeasioiden käsittelyssä sekä tarjottu mahdollisuus hakea apua ongelmaani työterveyshuollon kautta.
				</p>
				<p lang="fi-FI">
				    Annan luvan toimittaa tämän muistion tässä asiakirjassa mainituille jakelun saajille.
				</p>
				<p lang="fi-FI">
				    <strong>Keskustelun sisältö:</strong>
				</p>
				<p lang="en-GB">
				    Työnantajan edustajan havainnot työssä esiintyneistä päihdehaitoista:
				</p>
				<br>
				<p lang="en-GB">
				    Henkilön oma käsitys päihdehaitoista:
				</p>
				<br>
				<hr>
				<p lang="en-GB">
				    <strong>Sovitut toimenpiteet ja seuranta-aikataulu:</strong>
				</p>
				<p lang="fi-FI">
				    <strong>Tukihenkilö:</strong>
				</p>
				<p lang="fi-FI">
				    Nimi ___________________  Työtehtävä ______________________________  
				</p> 
				<p lang="fi-FI">
				    Yhteystiedot ______________________________________________________
				</p>
				<p lang="fi-FI">
				    <strong>Päiväys ja allekirjoitukset:</strong>
				</p>
				<p lang="fi-FI">
				    Paikka ja aika
				</p>
				
				<p lang="fi-FI">
				    Henkilö___________________  Työnantajan edustaja ___________________ 
				</p>
				<hr>
				<p lang="fi-FI">
				    <strong>Seuranta:</strong>
				</p>
				<p lang="fi-FI">
				    Päivämäärä, osallistujat ja toimenpiteiden toteutuminen
				</p>

				<p lang="fi-FI">
				    <strong>Jakelu: Luottamuksellinen/arkistointi</strong>
				</p>
				<p lang="fi-FI">
				    ___ asianomainen henkilö ___ tukihenkilö
				</p>
				<p lang="fi-FI">
				    ___ työnantajan edustaja ___ luottamusmies
				</p>
				<p lang="fi-FI">
				    ___ esimies ___ työterveyshuolto
				</p>
				<p lang="fi-FI">
				    ___ yksikön päällikkö ___ henkilöstöhallinto
				</p>  

           		</div>
            </div>

            <!--- NEXT DOCUMENT STARTS -->

            <div class="content" id="paihdeohjelma_lomake2" data-fordocument="paihdeohjelma_lomake2" style="width: 90%; color: #222; background-color: white;">
                <div class="documentheader" contenteditable="false">Lomake 2 (Hoitositoumus)</div>
                <button class="openeditor" contenteditable="false" data-isopen="0">Avaa editori</button>
            
                <div class="contentforeditor"><p lang="en-GB">      

                <!-- COPY PASTE HERE -->    
				<h4>Lomake 2. HOITOSITOUMUS</h4>
				<hr>

				<p lang="fi-FI">
				    <strong>Sopijaosapuolet:</strong>
				</p>
				<p lang="fi-FI">
				    <strong>Henkilön tiedot</strong>
				</p>
				<p lang="en-GB">
				    sukunimi____________________________ etunimi____________________________
				</p>
				<p lang="fi-FI">
				    syntymäaika ____________________________työtehtävä____________________________
				</p>
				<p lang="fi-FI">
				    osasto/yksikkö____________________________ esimies____________________________
				</p>
				<br>
				<p lang="en-GB">
				    <strong>Työnantajan edustaja _________________</strong>
				    työtehtävä _________________ Osasto____________
				</p>

				<br>
				<p lang="fi-FI">
				    (Käsitelty = X)
				</p>
				<p lang="en-GB">
				    ___ Lupaudun osallistumaan minulle työterveyshuollon kautta järjestettyyn kuntoutukseen suunnitelman mukaisesti ja noudattamaan hoitopaikan ohjeita.
				</p>
				<p lang="fi-FI">
				    ___ Ilmoitan olevani tietoinen siitä, että mikäli en hyväksy hoitositoumusta tai en noudata kuntoutussuunnitelmaa tai päihteiden käyttöni jatkuu,
				    käynnistetään työsopimuslain mukaiset seuraamukset (kirjallinen varoitus, työsuhteen päättäminen).
				</p>

				<p lang="en-GB">
				    ___ Työterveyshuollolla on oikeus saada hoitopaikasta tiedot hoidon toteutumisesta ja kuntoutussuunnitelman noudattamisesta.
				</p>
				<p lang="en-GB">
				    ___ Hoitopaikalla on oikeus ottaa yhteyttä työterveyshuoltoon hoidon toteutumisesta.
				</p>
				<p lang="en-GB">
				    ___ Esimiehellä on oikeus saada tietää, toiminko kuntoutussuunnitelman mukaisesti.
				</p>
				<p lang="en-GB">
				    ___ Työnantajalla on oikeus työpaikan vaihtamisen yhteydessä toimittaa tämä hoitositoumus sekä kuntoutussuunnitelma niiden voimassaoloaikana seuraavaan
				    saman työnantajan työpaikkaan/yksikköön.
				</p>
				<p lang="en-GB">
				    ___ Sopimuksen päättyessä järjestetään arviointineuvottelu esimiehen ja työterveyshuollon kanssa.
				</p>
				<p lang="en-GB">
				    ___ Annan luvan toimittaa tämän sopimuksen tässä asiakirjassa mainituille jakelun saajille.
				</p>
				<p lang="en-GB">
				    ___ Olemme sopineet, miten tilanteestani tiedotetaan lähimmille työtovereille:
				</p>
				<p lang="en-GB">
				    (menettelytapa kirjoitetaan tähän) __________________________________________________________________ 
				<p lang="en-GB">
				    ______________________________________________________________
				</p>
				<p lang="en-GB">
				    ___ Kieltäydyn hoitoonohjauksesta.
				</p>
				<br>
				<p lang="en-GB">
				    <strong>Seurantakokousten ajankohdat: </strong>
				</p>
				<p lang="fi-FI">
				    <strong>Sopimuksen voimassaolo: </strong>
				</p>
				<p lang="fi-FI">
				    Hoitositoumus on voimassa ___ kuukautta allekirjoittamispäivämäärästä.
				</p>
				<hr>
				<p lang="fi-FI">
				    <strong>Päiväys ja allekirjoitukset:</strong>
				</p>
				<p lang="fi-FI">
				    Paikka ja aika
				</p>
				<p lang="fi-FI">
				    Henkilö____________________________ Työnantajan edustaja_________________________
				</p>
				<p lang="fi-FI">
				    Luottamusmies (tarvittaessa)______________________ Muistion kirjoittaja__________________
				</p>
				<p lang="fi-FI">
				    <strong>Jakelu:</strong>
				</p>
				<p lang="fi-FI">
				    ___ Sopijaosapuolet ___ Esimies
				</p>
				<p lang="fi-FI">
				    ___ Yksikön päällikkö ___ Tukihenkilö
				</p>
				<p lang="fi-FI">
				    ___ Luottamusmies ___ Työterveyshuolto
				</p>
				<p lang="en-GB">
				    ___ ___________
				</p>
				<p lang="fi-FI">
				    <strong>Liitteet:</strong>
				</p>
				<p lang="fi-FI">
				    Kuntoutussuunnitelma
				</p>

           		</div>
            </div>
            <!--- NEXT DOCUMENT STARTS -->

            <div class="content" id="paihdeohjelma_lomake3" data-fordocument="paihdeohjelma_lomake3" style="width: 90%; color: #222; background-color: white;">
                <div class="documentheader" contenteditable="false">Lomake 3 (Kuntoutussuunnitelma)</div>
                <button class="openeditor" contenteditable="false" data-isopen="0">Avaa editori</button>
            
                <div class="contentforeditor"><p lang="en-GB">      

                <!-- COPY PASTE HERE -->    
				<h4>Lomake 3. KUNTOUTUSSUUNNITELMA</h4>
				<hr>
				<p lang="fi-FI">
				    <strong>Henkilön tiedot</strong>
				</p>
				<p lang="en-GB">
				    sukunimi____________________________ etunimi____________________________
				</p>
				<p lang="en-GB">
				    syntymäaika____________________________ työtehtävä____________________________
				</p>
				<p lang="fi-FI">
				    osasto/yksikkö____________________________ esimies____________________________
				</p>
				<p lang="fi-FI">
				    Kuntoutussuunnitelma perustuu työkyvyn arviointiin.
				</p>
				<p lang="fi-FI">
				    <strong>Kuntoutussuunnitelman sisältö:</strong>
				</p>
				<p lang="fi-FI">
				    Käynnit avohoidossa 
				    <ul>
					    <li>Hoitopaikka ______________</li>
					    <li>Hoitoaika _______________</li>
					    <li>Käyntien tiheys _____</li>
				    </ul>
				</p>
				<p lang="fi-FI">
				    Laitoshoito
				     <ul>
					    <li>Hoitopaikka ______________</li>
					    <li>Hoitoaika _______________</li>

				    </ul>
				</p>
				<p lang="fi-FI">
				    Käynnit vertaistukiryhmissä
				    <ul>
					    <li>Hoitoaika ______________</li>
					    <li>Käyntien tiheys __________</li>

				    </ul>
				</p>
				<p lang="fi-FI">
				    Käynnit tukihenkilön tykö
				    <ul>
					    <li>Kesto ______________</li>
					    <li>Käyntien tiheys __________</li>

				    </ul>
				</p>
				<p lang="fi-FI">
				    Käynnit työterveyshuollossa
				    <ul>
					    <li>Kesto ______________</li>
					    <li>Käyntien tiheys __________</li>

				    </ul>
				</p>
				<p lang="fi-FI">
				    Muu tukitoiminta
				    <ul>
					    <li>Mitä _________________________</li>
					    <li>Kesto __________</li>
					    <li>Tiheys __________</li>

				    </ul>
				</p>				
				<br>
				<p lang="en-GB">
				    <strong>Seuranta- ja tukihenkilöt:</strong>
				</p>
				<p lang="fi-FI">
				    Työterveyslääkäri__________________________ Puh.__________________________
				</p>
				<p lang="fi-FI">
				    Työterveyshoitaja__________________________ Puh.__________________________
				</p>
				<p lang="fi-FI">
				    Tukihenkilö__________________________Puh.__________________________
				</p>
				<p lang="fi-FI">
				    Muu__________________________ Puh.__________________________
				</p>
				<hr>
				<p lang="fi-FI">
				    <strong>Päiväys ja allekirjoitukset:</strong>
				</p>
				<p lang="fi-FI">
				    Paikka ja aika
				</p>
				<br>
				<p lang="fi-FI">
				    Henkilö______________________ <span style="position: relative;">Työterveyshuollon edustaja______________________<span style="position: absolute; font-size: 11px; left: 0px; top: 22px;"><i>nimen selvennys ja virka-asema: </i></span></span>
				</p>
				<br>
				<hr>
				<p lang="fi-FI">
				    
				</p>

           		</div>
            </div>

            <!--- NEXT DOCUMENT STARTS -->

            <div class="content" id="paihdeohjelma_lomake4" data-fordocument="paihdeohjelma_lomake4" style="width: 90%; color: #222; background-color: white;">
                <div class="documentheader" contenteditable="false">Lomake 4 (varoitus päihteiden käytöstä)</div>
                <button class="openeditor" contenteditable="false" data-isopen="0">Avaa editori</button>
            
                <div class="contentforeditor">    
					<h4>Lomake 4. VAROITUS PÄIHTEIDEN KÄYTÖSTÄ </h4>
					<hr>
					<p lang="fi-FI">
					    <strong>Henkilön tiedot:</strong>
					</p>
					<p lang="en-GB">
					    sukunimi____________________________ etunimi____________________________
					</p>
					<p lang="en-GB">
					    syntymäaika____________________________ työtehtävä____________________________
					</p>
					<p lang="fi-FI">
					    osasto/yksikkö____________________________ esimies____________________________
					</p>

					<p lang="en-GB">
					    <strong>Työnantajan edustaja:____________</strong>
					    Tehtävä: _________________ Osasto:______________
					</p>
					<br>
					<p lang="fi-FI">
					    Työntekijä saa varoituksen päihteiden käytöstä.
					</p>
					<p lang="fi-FI">
					    Työntekijälle on selvitetty, mihin hallinnollisiin toimenpiteisiin päihteiden käytöstä johtuvat ongelmat työpaikalla jatkossa todennäköisesti johtavat.
					</p>
					<p lang="fi-FI">
					    Samalla on tehty hoitositoumus tai selvitetty sopimuksen tekemisen edellytykset.
					</p>
					<p lang="fi-FI">
					    Varoitukseen johtaneet seikat:
					</p>
					<br>
					<hr>
					<p lang="fi-FI">
					    <strong>Päiväys ja allekirjoitukset:</strong>
					</p>
					<p lang="fi-FI">
					    Paikka ja aika ____________________________
					</p>
					<p lang="fi-FI">
					    Työnantajan edustaja __________________________
					</p>
					<p lang="fi-FI">
					    Olen vastaanottanut tämän varoituksen ja saanut kaksoiskappaleen siitä.
					</p>
					<p lang="fi-FI">
					    Paikka ja aika __________________________
					</p>
					<p lang="fi-FI">
					    Työntekijä _________________________________
					</p>
					<p lang="fi-FI">
					    <strong>Tiedoksi:</strong>
					</p>
					<p lang="fi-FI">
					    työterveyshuolto ___
					</p>
					<p lang="fi-FI">
					    henkilöstöhallinto ___
					</p>

           		</div>
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
