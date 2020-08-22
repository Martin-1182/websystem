@extends('layouts.master')

@section('content')
<div class="container-inner mx-auto">
    <div class="text-4xl font-bold w-full sm:w-4/5 text-center sm:text-left mb-4">
        <h3 class="leading-tight">Ochrana osobých údajov</h3>
    </div>
    <div class="container-inner mx-auto text-xl pb-4 relative">
        <p class="mb-12 italic antialiased font-light">
            Spoločnosť WebSystem s.r.o, sídlom: Jesenského 428/18 960 01 Zvolen, IČO: 50491121 ako prevádzkovateľ
            internetového sídla www.websystem.sk (ďalej len „prevádzkovateľ“) garantuje bezpečnosť a ochranu zverených
            osobných údajov v plnom súlade s nariadením Európskeho parlamentu a Rady č. (EÚ) 2016/679 o ochrane
            fyzických osôb pri spracúvaní osobných údajov a o voľnom pohybe takýchto údajov (ďalej len „GDPR“) a so
            zákonom č. 18/2018 Z.z. o ochrane osobných údajov a o zmene a doplnení niektorých zákonov v znení neskorších
            zmien. V žiadnom prípade neposkytujeme tieto údaje tretej strane.
        </p>
    </div>
    <div class="container-inner mx-auto text-xl pb-4 relative">

        <p class="mb-12">
            Z dôvodu správneho vybavenia vašej objednávky a informovania o jej priebehu potrebujeme poznať meno
            objednávajúceho (prípadne meno firmy, IČO a kontaktnú osobu), adresu (fakturačnú a prípadne dodaciu),
            telefónny alebo e-mailový kontakt.
        </p>
        <p class="mb-12">
            Objednávateľ dáva poskytovateľovi svoj súhlas na zhromažďovanie a spracovanie týchto osobných údajov na
            účely splnenia predmetu uzatvorenia zmluvy o poskytnutí služieb, a to až do doby jeho písomného alebo
            telefonického vyjadrenia nesúhlasu s týmto spracovaním.
        </p>

        <p class="mb-12">
            Webstránka www.websystem.sk používa pri akomkoľvek pripojení užívateľa a prenose akýchkoľvek údajov
            šifrované pripojenie SSL, ktoré znemožňuje prístup tretích osôb k prenášaným údajom počas ich prenosu na
            internete a pozmeňovanie takýchto údajov tretími osobami. Databázy prevádzkovateľa obsahujúce osobné údaje
            sú chránené šifrovaním a neverejnými prístupovými údajmi v súlade s
            najmodernejšími technickými štandardmi.
        </p>

        <p class="mb-12">
            Užívateľ – dotknutá osoba pri svojej návšteve a ďalšom používaní webových stránok www.websystem.sk môže
            prevádzkovateľovi poskytnúť svoje osobné údaje. K poskytnutiu osobných údajov užívateľa môže dôjsť pri
            dobrovoľnej registrácii k odberu newsletteru za pomoci takej e-mailovej adresy, z ktorej možno určiť jeho
            totožnosť, alebo pri dobrovoľnom vyplnení kontaktného formulára spojeného s vybraným obsahom webových
            stránok.
        </p>

        <p class="mb-12">
            Poskytnutie osobných údajov je dobrovoľné. Nevyhnutnou podmienkou spracúvania osobných údajov užívateľa
            prevádzkovateľom na účel zasielania newsletteru je udelenie súhlasu užívateľa so spracúvaním osobných údajov
            v nevyhnutnom rozsahu a zasielaním marketingových správ, pričom tento súhlas je jediným právnym základom
            spracúvania údajov poskytnutých užívateľom (e-mailovej adresy).
        </p>

        <p class="mb-12">
            Súhlas užívateľa podľa predošlého odseku nadobúda platnosť okamihom dobrovoľného poskytnutia súhlasu
            zaškrtnutím príslušného políčka v online formulári a trvá do odvolania súhlasu užívateľom. Prevádzkovateľ má
            právo spracúvať poskytnuté údaje počas trvania súhlasu.
        </p>

        <p class="mb-12">
            Objednávateľ má právo na zmenu alebo odstránenie osobných údajov, <a href="{{ url('/')}}#contact">po kontaktovaní poskytovateľa.</a>
        </p>
    </div>
</div>
@endsection
