<style type="text/Css">
.content
{
	border-style:solid;
	margin:0 auto;
}
.tytul
{
margin:0 auto;
text-align:center;
font-weight:bold;
color: darkblue;
}
.pasek
{
	background-color:#92d050;
	color:white;
	padding:5px 0 5px 20px;
	font-weight:bold;
	font-size:14px;
}
.input_text
{
	border:solid 1px ;
	font-style:italic;
	float:left;
	margin-top:-6px !important;
	position:absolute;
	height:13px;
}
.label
{
	float:left;
	font-size:12px;
	position:absolute;
}
.clear
{
	clear:both;
}
span
{
	text-decoration:overline;
}
p
{
	padding:5px 40px 5px 40px;
	font-size:10px;

}
.logo
{
	
	z-index:10000;
	width:180px;
	height:50px;
	float:left;
	margin-top:-37px;
	margin-left:550px;
	
}
.podpis
{
	width:160px;
	height:50px;
}

</style>
<page>
	
	<div class="content">
		

		<br>
		<div class="tytul"> DEKLARACJA PRZYSTĄPIENIA DO UBEZPIECZENIA NASTĘPSTW NIESZCZĘŚLIWYCH WYPADKÓW I ASSISTANCE <br>	MEDYCZNY - VITBERG PREMIUM <br><br>Certyfikat nr: <?= $_POST['certificate']; ?></div>
		<img src="assets/library/logo.jpg" class="logo" style="" />
		<br>
		<div class="pasek"> DANE UBEZPIECZONEGO</div>
		<br>
		
		<div class="label" style="margin:140px 0 0 40px;"> Imię:</div> <div class="input_text" style="width:200px; padding:3px 0 3px 5px; margin:135px 0 0 80px;"> <?= $_POST['name'];?></div>
		<div class="label" style="margin:140px 0 0 400px;"> Nazwisko:</div> <div class="input_text" style="width:250px; padding:3px 0 3px 5px; margin: 135px 0 0 460px;"> <?= $_POST['surname'];?></div>
		<div class="clear"> </div>
		<br>
		<div class="pasek"> ADRES ZAMIESZKANIA</div>
		<br>
		<div class="label" style="margin:205px 0 0 40px;"> Ulica:</div> <div class="input_text" style="width:250px; padding:3px 0 3px 5px; margin:200px 0 0 120px;"> <?= $_POST['street'];?></div>
		<div class="label" style="margin:205px 0 0 400px;"> Nr domu:</div> <div class="input_text" style="width:80px; padding:3px 0 3px 5px; margin: 200px 0 0 470px;"> <?= $_POST['house_number'];?></div>
		<div class="label" style="margin:205px 0 0 570px;"> Nr lokalu:</div> <div class="input_text" style="width:80px; padding:3px 0 3px 5px; margin: 200px 0 0 630px;"> <?= $_POST['local_number'];?></div>
		<div class="clear"> </div>
		<br>
		<div class="label" style="margin:235px 0 0 40px;"> Kod pocztowy:</div> <div class="input_text" style="width:150px; padding:3px 0 3px 5px; margin: 230px 0 0 120px;"> <?= $_POST['post_code'];?></div>
		<div class="label" style="margin:235px 0 0 400px;"> Miejscowość:</div> <div class="input_text" style="width:240px; padding:3px 0 3px 5px; margin: 230px 0 0 470px;"> <?= $_POST['city'];?></div>
		<div class="clear"> </div>
		<br>
		<div class="label" style="margin:265px 0 0 40px;"> PESEL:</div> <div class="input_text" style="width:250px; padding:3px 0 3px 5px; margin: 260px 0 0 120px;"> <?= $_POST['pesel'];?></div>
		<div class="label" style="margin:265px 0 0 400px;"> Nr telefonu:</div> <div class="input_text" style="width:240px; padding:3px 0 3px 5px; margin: 260px 0 0 470px;"> <?= $_POST['phone_number'];?></div>
		<div class="clear"> </div>
		<br>
		<div class="pasek"> OKRES OCHRONY</div>
		<br>
		<div class="label" style="margin:335px 0 0 40px;"> Data rozpoczęcia ochrony:</div> <div class="input_text" style="width:150px; padding:3px 0 3px 5px; margin: 330px 0 0 180px;"> <?= $_POST['start_date'];?></div>
		<div class="label" style="margin:335px 0 0 400px;"> Data zakończenia ochrony:</div> <div class="input_text" style="width:150px; padding:3px 0 3px 5px; margin: 330px 0 0 540px;"> <?= $_POST['stop_date'];?></div>
		<div class="clear"> </div>
		<br>
		<div class="pasek">OŚWIADCZENIA UBEZPIECZONEGO I ZGODY</div>
		<p>1. Wyrażam zgodę na objęcie mnie ochroną ubezpieczeniową na warunkach określonych w „Umowie grupowego ubezpieczenia następstw nieszczęśliwych
			wypadków i assistance medyczny – Vitberg Premium” zawartej pomiędzy Vitberg Sikora Jacek (dalej „Vitberg”) i Česká pojišťovna Spółka Akcyjna Oddział w
			Polsce (dalej „Proama”) w dniu 1 czerwca 2015 r. (dalej „Umowa grupowa”) oraz „Ogólnych warunkach ubezpieczenia następstw nieszczęśliwych wypadków i
			assistance medyczny – Vitberg Premium” (dalej „OWU”)
		</p>
		<p>
			2. Oświadczam, że przed przystąpieniem do Umowy otrzymałem tekst OWU obowiązujących w dniu złożenia niniejszego oświadczenia oraz że są one dla mnie
			jasne i zrozumiałe i je w pełni akceptuję. Potwierdzam, że poinformowano mnie o możliwości żądania przeze mnie udzielenia informacji o postanowieniach
			Umowy generalnej oraz OWU w zakresie moich praw i obowiązków.
		</p>
		<p>
			3. Jako Uposażonych wskazuję:
		</p>
		<div class="label" style="margin:560px 0 0 40px;">a) Imię:</div> <div class="input_text" style="width:150px; padding:3px 0 3px 5px; margin: 555px 0 0 100px;"> <?= $_POST['name_salaried'];?></div>
		<div class="label" style="margin:560px 0 0 300px;">Nazwisko:</div> <div class="input_text" style="width:150px; padding:3px 0 3px 5px; margin: 555px 0 0 360px;"> <?= $_POST['surname_salaried'];?></div>
		<div class="label" style="margin:560px 0 0 550px;">Data ur</div> <div class="input_text" style="width:100px; padding:3px 0 3px 5px; margin: 555px 0 0 600px;"> <?= $_POST['born_date_salaried'];?></div>
		<div class="clear"> </div><br>
		<div class="label" style="margin:590px 0 0 40px;">b) Imię:</div> <div class="input_text" style="width:150px; padding:3px 0 3px 5px; margin: 585px 0 0 100px;">&nbsp; </div>
		<div class="label" style="margin:590px 0 0 300px;">Nazwisko:</div> <div class="input_text" style="width:150px; padding:3px 0 3px 5px; margin: 585px 0 0 360px;">&nbsp; </div>
		<div class="label" style="margin:590px 0 0 550px;">Data ur</div> <div class="input_text" style="width:100px; padding:3px 0 3px 5px; margin: 585px 0 0 600px;">&nbsp; </div>
		<div class="clear"> </div><br>
		<div class="label" style="margin:620px 0 0 40px;">c) Imię: <sup>1)</sup></div> <div class="input_text" style="width:150px; padding:3px 0 3px 5px; margin: 615px 0 0 100px;">&nbsp;</div>
		<div class="label" style="margin:620px 0 0 300px;">Nazwisko:</div> <div class="input_text" style="width:150px; padding:3px 0 3px 5px; margin:615px 0 0 360px;">&nbsp;</div>
		<div class="label" style="margin:620px 0 0 550px;">Data ur</div> <div class="input_text" style="width:100px; padding:3px 0 3px 5px; margin: 615px 0 0 600px;">&nbsp; </div>
		<div class="clear"> </div>
		<p style="font-size:12px;"><sup>1)</sup> W razie wskazania większej liczby osób, prosimy o wypełnienie odrębnego oświadczenia w tym zakresie. </p>
		<p>
			4. Wyrażam zgodę na przetwarzanie przez Česká pojišťovna Spółka Akcyjna Oddział w Polsce, z siedzibą w Warszawie przy ul. Postępu 15B (dalej „Administrator
			danych”), moich danych osobowych zgodnie z przepisami ustawy z dnia 29 sierpnia 1997 r. o ochronie danych osobowych w celu i w zakresie niezbędnym do
			objęcia mnie ochroną ubezpieczeniową na podstawie Umowy grupowej i OWU oraz realizacji tej ochrony, jak też marketingu usług własnych Administratora
			danych. Oświadczam, że zostałem poinformowany o przysługującym mi prawie wglądu do swoich danych oraz ich poprawiania, a także dobrowolności podaniadanych.
		</p>
		<p>
			5. Upoważniam Proama do uzyskiwania w razie zajścia zdarzenia ubezpieczeniowego informacji o stanie mego zdrowia, w tym dokumentacji medycznej, od
			podmiotów wykonujących działalność leczniczą, które udzielały mi świadczeń zdrowotnych w kraju i za granicą i zwalniam te podmioty z obowiązku
			zachowania tajemnicy. Powyższa zgoda obejmuje wszystkie informacje o stanie zdrowia niezbędne do ustalenia przez Proama prawa do świadczenia z umowy
			ubezpieczenia i jego wysokości, a także o przyczynie śmierci, z wyłączeniem wyników badań genetycznych, w szczególności informacje o przebytych chorobach,
			fizycznym i psychicznym stanie zdrowia, pobytach w szpitalu, udzielonych poradach lub diagnostyce medycznej oraz leczeniu.
		</p>
		<p>
			6. Wyrażam zgodę, aby Vitberg przekazywał Proama wszelkie wymagane zgodnie z Umową grupową i OWU dotyczące mnie informacje, w tym udostępniał
			Proama moje dane osobowe oraz dokumenty, wymagane do objęcia mnie ochroną ubezpieczeniową bądź mające na celu
			<br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-letf:70px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Podpis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br>
			
		</p>
		
		<p>
			7. Zgadzam się na otrzymywanie od Proama informacji handlowych za pomocą środków komunikacji elektronicznej, w tym używanie telekomunikacyjnych
			urządzeń końcowych dla celów marketingu bezpośredniego. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  TAK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIE
			<br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-letf:70px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Podpis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br>
		</p>
		<p>
			*) Zaznaczyć właściwe
		</p>
	</div>
</page>
<page>
<br><br><br>
<img src="assets/library/logo.jpg" class="logo" style="" /><br><br>
<p style="margin:20px 160px; font-size:16px;"><b>CERTYFIKAT UBEZPIECZENIA nr <?= $_POST['certificate']; ?></b></p>
<p style="font-size:12px;"> <b> Česká pojišťovna Spółka Akcyjna Oddział w Polsce (działająca pod marką handlową „Proama”) niniejszym potwierdza przystąpienie do „Umowy grupowego ubezpieczenia następstw nieszczęśliwych wypadków i assistance medyczny – Vitberg Premium” zawartej pomiędzy Vitberg Sikora Jacek i Proama w dniu 14 lipca 2015 r., na poniższych warunkach. </b>
</p>

<p style=" font-size:12px;">
<b>Ubezpieczyciel:</b> Česka Pojišťovna a.s. z siedzibą w Pradze, Praga 1, Spalena 75/16, PSČ 113 04, wpisana do Rejestru Spółek Handlowych pod numerem identyfikacyjnym 1464, działająca w Polsce poprzez Česká pojišťovna S.A. Oddział w Polsce, zarejestrowany przez Sąd Rejonowy dla m. st. Warszawy XIII Wydział Gospodarczy pod nr KRS 0000430690, NIP 108 00 13 493, VAT 108 00 13 642, REGON 146267490, z siedzibą przy ul. Postępu 15B, 02-676 Warszawa. 
</p>

<p style=" font-size:12px;">
<b>Ubezpieczający: </b> Vitberg Sikora Jacek z siedzibą przy ul. Borelowskiego 27, 33-300 Nowy Sącz, NIP: 7341009112, REGON: 490746866.
</p>

<p style=" font-size:12px;">
<b>Ubezpieczony (Klient):</b><?= $_POST['name'];?>, <?= $_POST['surname'];?>, <?= $_POST['pesel'];?>, <?= $_POST['street'];?> <?= $_POST['local_number'];?> /<?= $_POST['house_number'];?> ,<?= $_POST['post_code'];?> <?= $_POST['city'];?> , <?= $_POST['phone_number'];?>.
</p>

<p style=" font-size:12px;">
<b>Ochrona ubezpieczeniowa:</b> Ochrona ubezpieczeniowa jest udzielana pod warunkiem, że Klient nie odstąpił od umowy zakupu materaca firmy Vitberg w terminie 14 dni od jej zawarcia. 
</p>

<p style=" font-size:12px;">
<b>Przedmiot i zakres ubezpieczenia:</b> Śmierć i trwały uszczerbek na zdrowiu Ubezpieczonego w następstwie nieszczęśliwego wypadku oraz assistance medyczny. 
</p>

<p style=" font-size:12px;">
<b>Okres ubezpieczenia:</b> 12 miesięcy od dnia <?= $_POST['start_date'];?>. 
</p>

<p style=" font-size:12px;">
<b> Warunki ubezpieczenia: </b> Szczegółowe zasady udzielania Ubezpieczonemu ochrony ubezpieczeniowej, w szczególności wysokość sum ubezpieczenia i limitów, świadczenia przysługujące z umowy ubezpieczenia, wyłączenia odpowiedzialności Ubezpieczyciela, prawa i obowiązki Ubezpieczonego oraz sąd właściwy dla rozstrzygania sporów wynikających z umowy ubezpieczenia, określają „Ogólne warunki ubezpieczenia następstw nieszczęśliwych wypadków i assistance medyczny – Vitberg Premium”, które zostały doręczone Ubezpieczonemu przed złożeniem Deklaracji przystąpienia do ubezpieczenia. 
</p>

<p style=" font-size:12px;">
<b> Postępowanie w razie zajścia nieszczęśliwego wypadku:</b> W razie zajścia nieszczęśliwego wypadku, prosimy o jego natychmiastowe zgłoszenie pod numerem 815 815 815, dostępnym 24 godziny na dobę, 7 dni w tygodniu. 
</p>


<p style=" font-size:12px;">
<b> Realizacja usług assistance: </b> W celu realizacji usług assistance prosimy o kontakt z naszą infolinią pod numerem 22 203 75 68 dostępnym 24 godziny na dobę, 7 dni w tygodniu. 
</p>
<br> <br> <br>
<p style=" font-size:12px;">
___________________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/library/podpis.jpg" class="podpis" />
</p>
<p style=" font-size:12px; margin-top:-20px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;W imieniu Proama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agent Ubezpieczeniowy
</p>

</page>

