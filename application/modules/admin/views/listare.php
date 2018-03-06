<style>
body {
	text-align: center;
}
#wrapper {
	width: 50%;
	margin: 20px auto;
	text-align: left;
}
h1 {
	font-family: Arial;
	color: #000100;
	font-size: 26px;
}
p {
	font-family: Arial;
	color: #002200;
	font-size: 18px;
	line-height: 175%;
}
strong {
	text-transform: uppercase;
}
a {
	color: red;
}
@media print {
	.hide {
		display: none;
	}
	#wrapper {
		width: 100%;
	}
	p {
		font-size: 14px;
	}
}

@media all and (max-width: 1400px) {
	#wrapper {
		width:95%;
	}
}
</style><div id="wrapper">

	<h1 align="center">CONTRACT DE ÎNCHIRIERE AUTO</h1>

	<br/>

	<br/>

	<strong>Semnat la data de <?php echo $data_contract; ?>
		                                                                         mun. Xxxx</strong>

	<br/>

	<br/>

	<strong>CAP.I PĂRȚILE CONTRACTANTE</strong>

	<strong>Art.1 Locatorul și Locatarul</strong>
	<br/>
	(1)        Societatea Comerciala Your company, cu sediul social în România, mun. xxx, str. xxxx nr. xx,
	jud. XXX, înmatriculată la Oficiul Registrului Comerțului XXX sub nr. xxxxxxx, Cod Unic de înregistrare:
	xxxxx, tel<strong>.+ xxxxxxxx</strong>, e-mail: office@yourcompany.com, Banca: XXXXX,
	sucursala București, xxxxxxx, nr.xxx, sector 1, Codul SWIFT: XXXXXX, IBAN RON: xxxxxxxxx,
	reprezentată de reprezentantul dl. <strong>XXXXX XXXXX </strong>în baza procurii eliberate la data de xxxx xxxx xxxxstrong>, </strong>în
	calitate de Locator, și
	<br/>
	(2) <strong><?php echo $numec . " " . $prenumec; ?></strong>, data, luna, anul nașteri: <?php echo $dob; ?>, CNP: <?php echo $cnp; ?>,
	cu domiciliul:<?php echo $domiciliu; ?>, tel.<?php echo $telefon; ?>,în calitate de Locatar, au convenit sa încheie prezentul contract de locațiune (închiriere auto),
	cu respectarea tuturor clauzelor din prezentul contract.
	<br/>	<br/>
	<strong>CAP.II OBIECTUL CONTRACTULUI</strong>
	<br/>
	<strong>Art.2 Descrierea obiectului contractului</strong>
	<br/>
	(1)        Obiectul prezentului contract constă în darea în folosință (închirierea) de către Locator, Locatarului a autoturismului/autovehiculului
	descris la alin.(2) din prezentul articol, denumit în continuare în prezentul contract „autovehiculul”, în schimbul achitării de către Locatar a unui preț (chirie).
	<br/>
	(2)        Autovehiculul închiriat are următoarele caracteristici:
	<br/>
	Marca                            <strong><?php echo $marca . " " . $model; ?></strong>                      NR. de înmatriculare           <strong><?php echo $numar_masina; ?>
	</strong>

	Culoare                           <strong><?php echo $culoare; ?> </strong>                         Caroseria Nr<strong>.          </strong><strong><?php echo $vin; ?>
	</strong>
	<br/>
	(3)        Autovehiculul este asigurat, asigurarea fiind operabila în condițiile legii și ale prezentului contract.
	<br/>
	(4)        Locatarul declara ca va folosi autovehiculul închiriat pe teritoriul Românie.
	<br/>
	(5) Locatorul permite Locatarului folosirea autovehiculul închiriat și în străinătete, pe teritoriul: <?php echo $unde; ?>.
	<br/>	<br/>
	<strong>Art.3 Prețul chiriei</strong>
	<br/>
	(1)        Prețul închirierii autovehiculului este de <strong><?php echo $pret; ?></strong> lei pentru 1 zi (24 ore).
	<br/>
	(2)        Ca modalități de plata, chiria se va achita după cum urmează: prin numerar, simplu; prin numerar cu prezentarea unei cărți de credit valide, din motive de securitate; se accepta cardurile de credit cu utilizare internaționala.
	<br/>
	(3)        Combustibilul nu este inclus în preț. Pentru combustibilul lipsa în momentul restituirii autovehiculului, se va plăti de către locatar conform indicilor de pe panourile stațiilor de benzinărie.
	<br/>
	(4)        Locatarul datorează prețul pentru fiecare zi de închiriere, în cuantumul convenit chiar daca nu folosește autovehiculul închiriat.
	<br/>
	(5) Locatorul este în drept să accepte plata chiriei la sfîrșitul perioadei de chiriei.
	<br/>
	(6) Locatarul, la data semnării contractului, a transmis Locatorului suma de <strong><?php echo $garantie; ?></strong> lei cu titlul de garanție (gaj).
	Această sumă va fi restituită locatarului în ziua restituirii automobilului, cu condiția că automobilul a fost restituit în aceeași stare.
	Dacă automobilul este restituit cu anumite deteriorări și/sau lipsuri, Locatorul reține din suma garanției suma necesară pentru compensarea cheltuielilor.
	Din suma garanției se va reține și în cazul în care locatarul este dator la plata chiriei. Suma garanției nu eliberează locatarul de plata suplimentară
	pentru pagubele ce nu sunt acoperite din garanție.
	<br/>	<br/>
	<strong>Art.4 Perioada de închiriere</strong>
	<br/>
	(1)        Termenul de închiriere este de <strong><?php echo $termen; ?></strong> zile, cu începere de la data <strong><?php echo $din; ?></strong>, ora:
	<strong><?php echo $din_ora; ?></strong> pînă la data <strong><?php echo $pana; ?></strong>, ora:<strong><?php echo $pana_ora; ?></strong>.
	<br/>
	(2)        Perioada minima de închiriere este de 1 zi (24 ore).
	<br/>
	(3)        Durata contractului poate fi prelungita pe noi perioade de timp, numai prin acordul scris al parților, prin act adițional la prezentul contract.
	<br/>	<br/>
	<strong>Art.5 Întîrzierea în predarea autovehiculului</strong>
	<br/>
	(1)        Întîrzierea în predarea autovehiculului de către Locatar, are următoarele consecințe:
	<ul>
		<li>dacă întîrzierea este de cel mult 20 minute, față de ora încetării contractului, nu se vor percepe penalități;</li>
		<li>dacă întîrzierea depășește 20 de minute, se vor percepe penalități de <strong><?php echo $penalitati; ?></strong>% din cuantumul chiriei datorate pe zi, pentru fiecare ora de întîrziere, pînă la a 4-a oră;</li>
		<li>începand cu a 4-a oră de întîrziere, Locatarul va fi obligat la plata chiriei/zi, în cuantumul stabilit prin prezentul contract, pană în momentul, ziua, returnării autovehiculului.</li>
	</ul>
	(2)        În caz de întîrziere cu mai mult de 7 ore față de timpul stabilit (atunci cînd întîrzierea nu este anunțată telefonic) Locatorul își rezerva dreptul de a anunța imediat Politia pentru furt a autoturismului.
	<br/>	<br/>
	<strong>Art.6 Predarea-primirea autovehiculului</strong>
	<br/>
	(1)        Transmiterea autovehiculului se va face în baza procesului-verbal de predare-primire care constituie Anexa nr.1 la prezentul contract și face parte integrantă din acesta iar restituirea autovehiculului de la Locatar către Locator de asemenea se va face în baza unui proces-verbal de predare-primire care va confirma restituirea autovehiculului, și care va constitui Anexa nr. 2 la prezentul contract.
	<br/>
	(2)        Autovehiculul se pune la dispoziția Locatarului împreună cu cartea de identitate, cartea tehnică și toate celelalte dotări corespunzătoare: trusă medicală, cric, etc., ce vor fi inventariate în procesul verbal de predare-primire. Autovehiculul întrunește toate condițiile tehnice de folosire, fiind în stare bună de funcționare, neavînd defecțiuni sau lipsuri.
	<br/>
	(3)        Autovehiculul se returnează cu același volum de combustibil cu care a fost preluat.
	<br/>
	(4)        În lipsa unor înțelegeri, locatarul este obligat să restituie autovehiculul în același loc de unde la preluat.
	<br/>	<br/>
	<strong>Art.7 Garanția; Service-ul</strong>
	<br/>
	(1)        Locatorul garantează ca autovehiculul ce îl închiriază întrunește toate condițiile tehnice de folosire, fiind în stare normală de funcționare și neavînd defecte și lipsuri.
	<br/>
	(2)        Locatorul nu răspunde de nefuncționarea, funcționarea necorespunzătoare, sau accidentele nedorite daca acestea se datorează exclusiv culpei Locatarului în utilizare sau nerespectarea de către acesta a instrucțiunilor de folosire.
	<br/>
	(3)        Locatarul se obligă să se îngrijească de autovehicul ca un bun proprietar, respectînd instrucțiunile de utilizare și menținîndu-l în stare bună de funcționare pe tot parcursul derulării prezentului contract. Cheltuielile de întreținere și utilizare cad în sarcina Locatarului.
	<br/>	<br/>
	<strong>Art.8 Condiții de folosire</strong>
	<br/>
	(1)        Locatarul folosește autovehiculul conform destinației. Orice altă utilizare contrară destinației atrage culpa Locatarului pentru care va răspunde patrimonial pentru prejudiciul cauzat.
	<br/>
	(2)        Locatarul trebuie să posede permis de conducere necesar utilizării autovehiculului închiriat.
	<br/>
	(3)        În caz de accident, Locatarul își asumă obligația ca, în cel mai scurt timp posibil, să anunțe atît Locatorul cît si Poliția și să se prezinte la cel mai apropiat post de Poliție pentru a obține un Proces Verbal Constatator al accidentului pînă la sfârșitul perioadei de închiriere. Asigurările sunt aplicabile numai în cazul în care Locatarul prezintă actele constatatoare eliberate de Poliție pentru accident și, conform legislației, asiguratorul va achita despăgubiri pentru pagubele cauzate. În cazul în care Locatarul nu prezintă aceste înscrisuri, el este singurul responsabil pentru acoperirea sumelor de plata (prejudicial material cauzat) și acceptă să facă această plata.
	<br/>
	(4)        Locatorul nu răspunde pentru pagubele suferite de Locatar ori de persoanele care îl însoțesc, în legătura cu autovehiculul, pentru pierderea sau deteriorarea proprietăților personale lăsate nesupravegheate în interiorul autovehiculului.
	<br/>	<br/>
	<strong>Art.9 Condiții generale pentru asigurare</strong>
	<br/>
	(1)        Asigurarea include răspunderea civila auto pentru vehiculele Locatorului, conform limitelor stabilite de legislația româna. În cazul în care valoarea pagubelor accidentului depășește limita stabilita de lege, Locatarul este responsabil în mod direct pentru diferența dintre valoarea totală a pagubelor produse și limita maximă acceptată de lege, fiind de acord cu acoperirea integrală a valorii.
	<br/>
	(2)        Locatarul are posibilitatea de a opta pentru o asigurare completă, la alegerea sa.
	<br/>
	(3)        Pagubele produse și care nu sunt incluse în asigurare, se vor achita de către Locatar.
	<br/>
	(4)        În toate cazurile în care asigurarea (asiguratorul) nu despăgubește, Locatarul este responsabil să achite pentru pagubele produse autovehiculului.
	<br/>	<br/>
	<strong>Art.10 Costuri suplimentare</strong>
	<br/>
	(1) Locatarul este de acord sa achite următoarele costuri suplimentare în cazul în care acestea vor apărea:
	<br/>
	la contractele încheiate în locațiile Locatarului din aeroport, se aplica o taxă adițională de <strong><?php echo $taxa_aeroport; ?></strong> lei (excl. TVA) per închiriere;
	<br/>
	(2) Pentru întîrziere în predarea autovehiculului se plătesc penalități conform art.10;
	<br/>
	(3) Amenzile, penalitățile pentru parcare, încălcarea regulilor de circulație ce vizează autovehiculul sunt responsabilitatea Locatarului pe perioada de închiriere precum și dacă s-a depășit aceasta perioada. Locatarul autorizează Locatorul, în cazul efectuării plații prin card, sa debiteze cardul cu suma necesara acoperirii acestor cheltuieli. Aceste sume trebuie sa fie justificate cu înscrisuri probante;
	<br/>
	(4) În cazul pierderii sau deteriorării documentelor autovehicolului sau a cheilor acestuia, Locatarul va achita toate cheltuielile de recuperare;
	<br/>
	(5) În cazul în care autovehiculul este returnat fără a fi curățat ori prezintă urme de murdărie a interiorului, se va percepe o taxa suplimentara în mărime de:
	<br/>
	- 50 lei pentru automobile simple;
	<br/>
	<strong>-</strong> 70 lei pentru automobile SUV;
	<br/>
	<strong>-</strong> 100 lei pentru autocamion.
	<br/>	<br/>
	<strong>CAP. V OBLIGAȚIILE PĂRȚILOR</strong>
	<br/>
	<strong>Art.11 Obligațiile Locatorului</strong>
	<br/>
	(1) Obligațiile Locatorului decurg din clauzele întregului contract, cum ar fi:
	<ul>
		<li>să pună la dispoziția Locatarului autovehiculul stabilit și care să satisfacă cerințele standard;</li>
		<li>să predea Locatarului autovehiculul cu toate actele necesare și dotările aferente;</li>
		<li>să asigure autovehiculului pe toată durata contractului, cu asigurare RCA;</li>
		<li>să se abțină de la orice fapt care ar avea drept consecința tulburarea Locatarului în folosința bunului, tulburare de fapt sau de drept. Locatorul nu răspunde de tulburarea cauzata prin faptul unui terț care nu invocă vreun drept asupra bunului;</li>
	</ul>
	<strong>Art.12 Obligațiile Locatarului</strong>
	<br/>
	(1) Obligațiile Locatarului decurg din clauzele întregului contract, cum ar fi (dar nu limitativ):
	<ol>
		<li>de a avea carnet de conducere de categoria autovehiculului ce îl închiriază;</li>
		<li>de a plăti chiria autovehiculului, odată cu preluarea acestuia, iar în caz de prelungire a duratei contractului cu acordul Locatorului, odată cu prelungirea contractului sau dacă Locatorul încuviințează la restituirea autovehiculului;</li>
		<li>de a suporta costurile de întreținere și alte construi suplimentare necesare;</li>
		<li>de a exploata în condiții normale autovehiculul, conform instrucțiunilor de folosire și întreținere elaborate de fabricant și specificate în manualul de utilizare;</li>
		<li>de a achita amenzile emise de autorități pentru contravenții sau infracțiuni săvîrșite pe perioada închirierii autovehiculului;</li>
		<li>de a suporta costul primei de asigurare facultativă de răspundere civila auto încheiate cu valabilitate în afara teritoriului României (Cartea verde), în cazul în care autovehiculul pus la dispoziția Locatarului, urmează a fi folosit în trafic internațional;</li>
		<li>de a returna autovehiculul, la expirarea duratei contractului, în aceeași stare în care la primit, ținînd cont de uzura normală;</li>
		<li>în cazul unor avarii aduse autovehiculului, cu excepția celor provocate prin forță majora, Locatarul răspunde în solidar cu asiguratorul Locatorului pentru toate cheltuielile aferente aducerii la starea inițiala a autovehiculului sau înlocuirii acestuia cu unul similar ca marcă, tip, an de fabricație, dotări și valoarea de piață;</li>
		<li>locatarul poartă răspundere, fiind obligat să achite valoarea prejudiciului, pentru toate prejudiciile cauzate de el sau de terți, cu excepția celor ce sunt compensate de asigurator;</li>
		<li>în cazul în care motorul automobilului s-a defectat din cauza pătrunderii apei în motor, locatarul este obligat să repare integral prejudiciul material cauzat;</li>
		<li>în cazul în care la restituire automobilul este într-o stare înrăutăţită şi urmează să fie reparat, locatarul este obligat să achite suma venitului ratat pentru perioada în care automobilul s-a aflat la reparaţie. Venitul ratat pentru o zi este egal cu suma chiriei pentru o zi;</li>
		<li>dacă automobilul a fost deteriorat și locatarul dorește să îl repare pe contul său la autoservice, poate să facă acest lucru doar cu acordul locatorului și doar la un autoservice autorizat al mărcii automobilului;</li>
		<li>în cazul în care după expirarea termenului de locaţiune, locatarul nu restituie automobilul închiriat, acesta este obligat să achite locatorului plata chiriei pentru toate zilele în care a reţinut automobilul peste termenul de închiriere stabilit în contract.</li>
		<li>pentru ca pagubele produse în urma unui eveniment rutier să poată fi recuperate prin asiguratorul Locatorului, este obligatorie declararea acestora de către Locatar autovehiculului organelor de poliție din raza localității în care s-a produs evenimentul, urmînd ca în caz contrar contravaloarea pagubelor să fie suportată integral de către Locatar;</li>
		<li>în cazul în care autovehiculul a fost condus sub influenta alcoolului și/sau a drogurilor ori altor substanțe stupefiante, răspunderea în recuperarea materiala a pagubelor aparține în totalitate Locatarului;</li>
		<li>să apere bunul închiriat contra uzurpărilor;</li>
		<li>de a răspunde pentru toat daunele pricinuite terților și Locatorului;</li>
		<li>la încetarea perioadei de închiriere, Locatarul va preda (restitui) autovehiculul închiriat cu dotările aferente către Locator, și cu actele ce i-au fost înmînate</li>
		<li>orice alte obligații ce-i revin prin lege și prezentul contract.</li>
	</ol>
	(2) Din momentul transmiterii automobilului în chirie locatarului și pînă la restituirea acestuia, locatarul poartă răspundere pentru toate bagubele.
	<br/>	<br/>
	<strong> </strong>

	<strong>CAP. VI CLAUZE PENALE</strong>
	<br/>
	<strong>Art.13 Clauza penala. Daune interese</strong>
	<br/>
	(1)        Pentru nerespectarea totală sau parțiala sau pentru executarea defectuoasa a vreuneia din clauzele contractuale, partea vinovata se obligă sa plătească daune interese celeilalte părți.
	<br/>
	(2)        În vederea evitării unor situații conflictuale, părțile pot hotărî, de comun acord, noi termene sau modalități de rezolvare a obligațiilor.
	<br/>
	(3)        Locatarul poartă răspundere pentru neachitarea în termen a chiriei, fiind obligat să achite penalitate în mărime de 0,3% pentru fiecare zi de întîrziere, din suma neachitată în termen.
	<br/>
	(4) Locatarul achită o penalitate în mărime de 2000 lei dacă va repara automobilul închiriat fără acordul locatorului. Plus la penalitate, locatarul va achita și suma necesară pentru a se face reparația automobilului la un autoservice autorizat, în caz că reparația făcută fără acordul locatorului prezintă semne de lucru necalitativ.
	<br/>	<br/>
	<strong>CAP.VII ÎNCETAREA CONTRACTULUI</strong>
	<br/>
	<strong>Art.14 Modificarea contractului</strong>
	<br/>
	(1)        Modificarea prezentului contract se face numai prin act adițional scris și semnat de părțile contractante.
	<br/>
	<strong>Art.15 Încetarea contractului</strong>
	<br/>
	(1)        Prezentul contract încetează în următoarele împrejurări:
	<ul>
		<li>la expirarea duratei contractului de închiriere, daca părțile nu hotărăsc prelungirea acestuia;</li>
		<li>prin acordul de voința al parților, înainte de termen;</li>
		<li>prin reziliere de către oricare din părți în cazul în care cealaltă parte nu își respecta culpabil obligațiile asumate. Rezilierea operează în condițiile legii;</li>
		<li>pieirea bunului, în condițiile legii.</li>
	</ul>
	(2)        În toate cazurile de încetare a contractului, Locatarul are obligația să achite toate sumele datorate Locatorului.
	<br/>	<br/>
	<strong>CAP. VIII DISPOZITII FINALE ȘI TRANZITORII</strong>
	<br/>
	<strong>Art.16 Notificări între părți</strong>
	<br/>
	(1)        În accepțiunea părților contractante orice notificare adresată de una dintre acestea celeilalte este valabil îndeplinita dacă este transmisă la adresa/sediul prevăzut în partea introductiva a prezentului contract.
	<br/>
	(2)        În cazul în care notificarea se face pe cale poștală, ea va fi transmisa prin scrisoare recomandată cu confirmare de primire și se consideră primită de destinatar la data menționată de oficiul Poștal primitor pe această confirmare. Dacă confirmarea se transmite prin telex, telefax sau e-mail, ea se consideră primită în prima zi lucrătoare după cea în care a fost expediată. Notificările verbale se iau în considerare în măsura în care acestea sunt confirmate și în una din modalitățile descrise mai sus.
	<br/>
	<strong> Art.17 Locul executării contractului. Alte dispoziții finale</strong>
	<br/>
	(1)        Locul executării contractului este: mun. XXXX, str. xxxx xxx, nr. xx, jud. Xxxx. Orice executare a obligației din prezentul contract cu mar fi: plata chiriei, restituirea autovehiculului, repararea prejudiciului material, etc.), precum și anularea, rezoluțiunea sau rezilierea, se va face în locul stabilit în prezentul articol (aliniat) al prezentului contract;
	<br/>
	(2) Litigiile izvorîte din încheierea, executarea modificarea, încetarea și interpretarea clauzelor prezentului contract se rezolvă pe cale amiabilă sau de către instanțele judecătorești competente.
	<br/>
	(3)        Prezentul contract se completează cu prevederile legale a legislației României în vigoare și împreună cu anexele sale, care fac parte integrantă din cuprinsul său, reprezintă voința părților și înlătură orice înțelegere verbala dintre acestea, anterioară sau ulterioară încheierii lui. În cazul în care părțile își încalcă obligațiile, neexercitarea de partea care suferă vreun prejudiciu a dreptului de a cere executarea întocmai sau prin echivalent bănesc a obligației respective, nu înseamnă ca ea a renunțat la acest drept al sau.

	<br/>	<br/>

	<strong>CAP. IX SEMNĂTURILE PĂRȚILOR</strong>

	<br/>
	<table width="100%">
	<tbody>
	<tr>
	<td><strong>LOCATOR:</strong>

	<strong>Your company</strong>

	<strong> </strong>

	Reprezentant

	<strong>XXX xxxxx</strong>

	<strong> </strong>

	<strong>___________________ </strong>

	(semnătura)</td>
	</tr>
	</tbody>
	</table>
	<table width="100%">
	<tbody>
	<tr>
	<td><strong>LOCATAR:</strong>

	<strong> </strong>

	<strong><?php echo $numec . " " . $prenumec; ?></strong>

	<br/>

	<br/>

	<br/>

	<strong>_________________________ </strong>

	(semnătura)</td>
	</tr>
	</tbody>
	</table>
	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<strong> </strong>

	<br/>

	<strong>ANEXA Nr.1</strong> la contractul de închiriere auto din <strong><?php echo $data_contract; ?></strong>

	<br/>

	<br/>

	PROCES VERBAL DE PREDARE – PRIMIRE

	<br/>

	(TRANSMITEREA AUTOVEHICULULUI ÎN LOCAȚIUNE)

	<br/>

	Încheiat azi, data<strong>:<?php echo $data_contract; ?>, ora: <?php echo $ora_contract; ?>.</strong>

	<br/>

	Locul: Xxxxxx nr. xxx

	<br/>

	<strong>Părțile:</strong>

	Your company, cu sediul social în România, mun. Xxxx, str. xxxx nr. xx, jud. Xxxx, înmatriculată la
	Oficiul Registrului Comerțului Xxxx sub nr. xxxxxxxx, Cod Unic de înregistrare: xxxxx, în calitate de <strong>LOCATOR</strong>,
	și <strong><?php echo $numec . " " . $prenumec; ?></strong>, în calitate de <strong>LOCATAR, </strong>au încheiat prezentul process-verbal de predare primire
	(transmitere a automobilului), privind următoarele de mai jos:

	<br/>
	<ol>
		<li>Locatorul declară că a predat astăzi, Locatarului menționat mai sus, autovehiculul descris în contract, în stare bună de folosința,
			pentru perioada stipulată în contract.</li>
	</ol>
	Autovehiculul are următoarele dotări (accesorii) care se pun la dispoziția Locatarului odata cu acesta:
	<ol>
		<li>a) Certificat de înmatriculare;</li>
		<li>b) Raport de verificare tehnică;</li>
		<li>c) Certificat de asigurare obligatorie de răspundere civilă auto;</li>
		<li>d) Cheia automobilului;</li>
		<li>e) Cheie pentru roți;</li>
		<li>f) Cric; Jack;</li>
		<li>g) Roată de rezervă;</li>
		<li>h) Set (trusă medicală, stingător, triunghi de presemnalizare, haină reflectorizantă);</li>
		<li>i) Casetofon cu CD;</li>
		<li>j) 4 capace decorative.</li>
	</ol>
	<br/>

	(2) Subsemnatul (Locatar) declar că am preluat astăzi, la data semnării procesului verbal, la ora indicată mai sus, a
	utovehiculul marca <strong><?php echo $marca . " " . $model; ?></strong> nr. de înmatriculare: <strong><?php echo $numar_masina; ?></strong>
	descris în contractul de închiriere, în condițiile stipulate, în stare buna de folosință, cu dotările (accesoriile) prevăzute în prezentul proces
	verbal de predare-primire și mă oblig să folosesc bunul ca un bun proprietar, conform destinației acestuia, și să îl predau (restitui) la
	sfârșitul termenului de închiriere în starea în care l-am primit, cu uzura firească provenită din utilizarea sa normală.
<br/>
	(3) Volumul combustibilului: <strong><?php echo $comb_predare; ?></strong>
<br/>
	(4) NR./km la bord:<strong><?php echo $km_predare; ?></strong>;

	<br/>

	(5) Alte mențiuni:

	<strong><?php echo $mentiuni_predare; ?></strong>.

	<br/>
	<table width="100%">
	<tbody>
	<tr>
	<td>A predat:

	LOCATORUL

	<br/>

	<br/>

	<strong>_________________________ </strong>

	(semnătura)</td>
	</tr>
	</tbody>
	</table>
	<table width="100%">
	<tbody>
	<tr>
	<td>A primit:

	LOCATARUL

	<br/>

	<br/>

	<strong>_________________________ </strong>

	(semnătura)</td>
	</tr>
	</tbody>
	</table>
	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<br/>

	<strong> </strong>

	<strong> </strong>

	<strong> </strong>

	<strong> </strong>

	<strong> </strong>

	<br/>

	<strong>ANEXA Nr.2</strong> la contractul de închiriere auto din <strong><?php echo $data_contract; ?></strong>

	<br/>

	<br/>

	PROCES VERBAL DE PREDARE – PRIMIRE

	<br/>

	(RESTITUIREA AUTOVEHICULULUI)

	<br/>

	Încheiat azi, data:<strong><?php echo $pana; ?></strong>, ora: <strong><?php echo $pana_ora; ?></strong>.

	<br/>

	<br/>

	Locul: xxxxx xxxx nr xx

	<br/>

	<br/>

	<strong>Părțile:</strong>

	Your company, cu sediul social în România, mun. Xxxx, str. xxxx xxxx nr. xx, jud. Xxxx, înmatriculată la Oficiul Registrului Comerțului Xxxx sub nr. xxxxxxxxxxx, Cod Unic de înregistrare: xxxx, în calitate de <strong>LOCATOR</strong>, și

	<strong><?php echo $numec . " " . $prenumec; ?></strong>, în calitate de <strong>LOCATAR, </strong>au încheiat prezentul process-verbal de predare primire (restituire a automobilului), privind următoarele de mai jos:

	<br/>
	<ol>
		<li>Conform prezentul proces proces-verbal, Locatarul declară că a restituit astăzi, la data semnării procesului verbal, la ora indicată mai sus,
			autovehiculul: <strong><?php echo $marca . " " . $model; ?></strong> de înmatriculare: <strong><?php echo $numar_masina; ?></strong> descris în contractul de
			închiriere iar Locatorul Your company confirmă că a primit autovehiculul menționat.</li>
	</ol>
	<br/>
	<ol start="2">
		<li>Autovehiculul în cauză a fost restituit cu următoarele defecțiuni, deteriorări și/sau lipsuri:</li>
	</ol>
	<strong><?php echo $mentiuni_primire; ?></strong>

	<br/>
	<ul>
		<li>Volumul combustibilului: <strong><?php echo $comb_primire; ?></strong>.</li>
	</ul>
	<br/>
	<ul>
		<li>/km la bord:<strong><?php echo $km_primire; ?></strong>;</li>
	</ul>
	<br/>
	<ul>
		<li>Alte mențiuni:</li>
	</ul>
	<strong><?php echo $mentiuni_primire; ?></strong>

	<br/>

	<br/>
	<table width="100%">
	<tbody>
	<tr>
	<td>A primit:

	LOCATORUL

	<br/>

	<br/>

	<strong>_________________________ </strong>

	(semnătura)</td>
	</tr>
	</tbody>
	</table>
	<table width="100%">
	<tbody>
	<tr>
	<td>A predate:

	LOCATARUL

	<br/>

	<br/>

	<strong>_________________________ </strong>

	(semnătura)</td>
	</tr>
	</tbody>
	</table>


</div>
<div style="position:absolute; right: 0px; top: 0px;" class="hide">
	<a href="/management/admin/listare/pdf/?contract=<?php echo $id; ?>">Descarca contract</a> |
	<a href="/management/admin/contracte/index/edit/<?php echo $id; ?>">Editeaza contract</a> |
	<a href="/management/admin/contracte/index/">Inapoi la contracte</a>
</div>
