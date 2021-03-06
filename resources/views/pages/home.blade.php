@extends('layouts.master')

@section('content')
<div class="hero container-inner mx-auto flex flex-col sm:flex-row justify-between py-16">
    <div class="text-4xl font-bold w-full sm:w-3/5 text-center sm:text-left">
        <h1 class="leading-tight anim1">Tvorba E-shopov Portálov &amp; Webstránok</h1>
        <div class="mt-2 text-green-700 anim1">Vitajte na našej stránke</div>
    </div>
    <div class="mt-8 sm:mt-0">
        <img src="{{ asset('images/developer.svg') }}" alt="hero" class="mx-auto sm:mx-0 anim-hero-img" />
    </div>
</div> <!-- end hero -->
<div class="container-inner mx-auto">
    <p class="text-lg sm:text-xl anim1">
        Venujeme sa vývoju a designu webových stránok a aplikácií. Ak potrebujete e-shop webovú stránku, alebo blog či
        aplikáciu na mieru,
        tak neváhajte a kľudne sa nám ozvyte upresníme detaili a začneme na tom pracovať. Ponúkame profesionálne služby
        v oblasti informačných technológií, ktoré sme schopní poskytovať vďaka odborným znalostiam
        a dlhoročným skúsenostiam.
    </p>
    <div class="flex justify-between items-center py-6">
        <div class="w-full sm:w-1/2 px-8 py-8 sm:py-0 anim-img-left">
            <img src="{{ asset('images/code_review.svg') }}" alt="browser" />
        </div>
        <div class="w-1/2 px-8 hidden sm:flex justify-end anim-img-right">
            <img src="{{ asset('images/mobile.svg') }}" alt="mobile" />
        </div>
    </div>
</div>

<div class="overflow-x-hidden" id="projects">
    <div class="projects container-inner mx-auto text-xl border-t border-gray-500 border-b py-16 mb-16 relative">
        <h2 class="font-bold mb-6 header-text" data-aos="fade-down">Tu sú niektoré projekty na ktorých sme pracovali:
        </h2>

        <div class="absolute right-0" style="top: 50px; transform: translate(100%) rotate(180deg)">
            <svg id="dots-triangle" width="170" height="170" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M168.152 170a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm-18.478-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0 18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm-18.478 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.479a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm-18.479 0a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0 18.479a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0 18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-55.435a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zM94.24 133.043a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0 18.479a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0 18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-55.435a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm-18.478 36.956a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0 18.479a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0 18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-55.435a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm-18.478 55.434a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0 18.479a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0 18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-55.435a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.479a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm-18.479 73.913a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0 18.479a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0 18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-55.435a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.479a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm-18.478 92.391a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0 18.479a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0 18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-55.435a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.479a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM1.848 133.044a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.695zm0 18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0 18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-55.435a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.479a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.695 1.848 1.848 0 0 1 0 3.695zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm0-18.478a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696z"
                    fill="#2C8056" fill-rule="evenodd" opacity=".503"></path>
            </svg>
        </div>
        <ul class="text-lg sm:text-xl space-y-6">
            <li class="checkmark" data-aos="zoom-out-left">
                <div data-aos="zoom-out-down"> <a class="text-white font-normal"
                        href="https://ecommerce.websystem.sk">Ecommerce
                        aplikácia</a>
                </div>
                <div class="text-lg text-gray-600">Aplikácia Elelektronický obchod
                    je postavená na framevorku Laravel 7.
                    Aplikácia <a href="https://ecommerce.websystem.sk" target="_blank"
                        rel="noopener noreferrer">Ecommerce</a> zahŕňa viac produktov, kategórií, nákupný košík,
                    prehľadnú filtráciu produktov a
                    pokladničný systém s integrovanou platobnou bránou <a href="https://stripe.com/" target="_blank"
                        rel="noopener noreferrer">Stripe.</a>
                </div>
            </li>
            <li class="checkmark" data-aos="zoom-out-left">
                <div data-aos="zoom-out-down"> <a class="text-white font-normal" href="">Movies aplikácia</a> </div>
                <div class="text-lg text-gray-600 ">
                    Filmová aplikácia vytvorená pomocou rozhrania <a href="">TMDb Rest API.</a> Využívame funkcie
                    Laravel 7 ako HTTP klient,
                    Tailwind CSS, rozbaľovacia ponuka vyhľadávania s Livewire, interaktivita používateľského
                    rozhrania
                    Alpine.js.
                    <a href="https://movies.websystem.sk"> Movies</a>
                </div>
            </li>
            <li class="checkmark" data-aos="zoom-out-left">
                <div data-aos="zoom-out-down"> <a class="text-white font-normal" href="https://trims.sk/"
                        target="_blank" rel="noopener noreferrer">Webová stránka</a> </div>
                <div class="text-lg text-gray-600 ">
                    Webová stránka spoločnosti <a href="https://trims.sk/" target="_blank"
                        rel="noopener noreferrer">T.R.I.M.S. Security</a> je jeden s našich starších projektov
                    (2017).
                    Jedná sa o jednoduchú prezenčnú
                    webovú stránku HTML, SCSS, GSAP, JQUERY
                </div>
            </li>
            <li class="checkmark" data-aos="zoom-out-left">
                <div data-aos="zoom-out-down"> <a class="text-white font-normal" href="https://itunes.websystem.sk"
                        target="_blank" rel="noopener noreferrer">SPA iTunes</a> </div>
                <div class="text-lg text-gray-600">
                    Naša SPA (<em><small>single page application</small></em>) na vyhľadávanie skladieb a albumov z
                    rozhrania iTunes Search API. Pre vývoj
                    <a href="https://itunes.websystem.sk" target="_blank" rel="noopener noreferrer"> iTunes
                        aplkácie</a>
                    sme použili náš obľúbený javascriptový framework Vue.js

                </div>
            </li>
        </ul>
    </div> <!-- end projects -->
</div>
<div class="overflow-x-hidden border-gray-200 border-b" id="aboutUs">
    <div class="get-to-know-me container-inner mx-auto text-xl pb-16 relative">
        <h2 data-aos="fade-down" class="font-bold mb-6" id="about">Spoznajte nás:</h2>
        <div class="absolute left-0" style="top: 50px; transform: translateX(-100%)">
            <svg width="170px" height="170px">
                <use xlink:href="#dots-triangle" />
            </svg>
        </div>
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4">
            <div data-aos="fade-up">
                <img src="{{ asset('images/WS-logo-blue-edit.png') }}" alt="logo" class="w-34 h-32 mb-8 lg:mb-0" />
            </div>
            <div data-aos="zoom-out-down" class="flex-1 text-lg sm:text-xl ml-6">
                Sme mladá dynamicky sa rozvíjajúca spoločnosť, ktorá svojím zákazníkom ponúka a zhotovuje od menších, až
                po komplexné
                webové riešenia. Pri vývoji používame tie najmodernejšie a najspoľahlivejšie technológie a
                držíme sa
                najnovších trendov. Pracujeme s frameworkom <a href="https://laravel.com/" target="_blank">Laravel</a>
                na backende
                a na frontende pracujeme hlavne s frameworkom
                <a href="https://vuejs.org/" target="_blank">Vue.js</a>
            </div>
        </div>
        <!-- res. container <div class="responsive-container"></div>-->
    </div> <!-- end get-to-know me -->
</div>

<div data-aos="fade-up" class="overflow-x-hidden" id="contact">
    <div class="contact-me bg-gray-800 pt-16">
        <div class="container-inner mx-auto text-xl pb-4 relative">
            <h2 data-aos="fade-down" class="font-bold mb-6 header-text">Kontaktujte nás:</h2>
            <div class="absolute right-0 top-0" style="transform: translate(100%) rotate(180deg)">
                <svg width="170px" height="170px">
                    <use xlink:href="#dots-triangle" /></svg>
            </div>
            <p data-aos="zoom-out-down" class="mb-12">Ak máte záujem o spoluprácu alebo máte nejákú otázku na nás
                môžete nás kontaktovať cez náš kontaktný formulár. Alebo <a href="mailto:info@websystem.sk">poslať
                    email</a></p>
            <div data-aos="zoom-out-down" class="text-lg sm:text-lg mb-16">
                <div id="contactForm">
                    <contact-form />
                </div>
            </div>
        </div>
    </div> <!-- end contact-me -->
</div>
<div data-aos="fade-up" class="newsletter bg-gray-700">
    <div class="container-inner mx-auto py-16 pb-8 text-center textl-xl">
        <h2 data-aos="fade-down" class="text-2xl font-bold mb-8">Odoberajte náš Newsletter</h2>

        <div class="w-4/5 mx-auto mb-8">
            <p data-aos="zoom-out-down" class="mb-8 text-lg sm:text-xl">Ak sa zaujímate o novinky v spoločnosti
                WebSystem s.r.o. Tak neváhajte
                a zaregistrujte sa k odberu nášho newsletteru.</p>
            <div data-aos="zoom-out-down" id="newslatter">
                <newslatter />
            </div>
        </div>
    </div>

    <div data-aos="fade-up" class="container-inner mx-auto -mt-32 pb-4 overflow-x-hidden">
        <svg width="725" height="166" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
                <g opacity=".515">
                    <path
                        d="M1.848 165.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 162a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 162a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 162a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.523 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                        opacity=".503" fill="#2E855A" />
                </g>
                <g opacity=".9">
                    <g opacity=".515" fill="#2E855A">
                        <path
                            d="M1.848 147.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 144a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 144a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 144a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.523 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503" />
                    </g>
                </g>
                <g opacity=".8">
                    <g opacity=".515" fill="#2E855A">
                        <path
                            d="M1.848 129.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 126a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 126a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 126a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.523 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503" />
                    </g>
                </g>
                <g opacity=".7">
                    <g opacity=".515" fill="#2E855A">
                        <path
                            d="M1.848 111.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 108a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 108a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 108a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.523 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503" />
                    </g>
                </g>
                <g opacity=".6">
                    <g opacity=".515" fill="#2E855A">
                        <path
                            d="M1.848 93.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503" />
                    </g>
                </g>
                <g opacity=".5">
                    <g opacity=".515" fill="#2E855A">
                        <path
                            d="M1.848 75.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503" />
                    </g>
                </g>
                <g opacity=".4">
                    <g opacity=".515" fill="#2E855A">
                        <path
                            d="M1.848 57.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503" />
                    </g>
                </g>
                <g opacity=".3">
                    <g opacity=".515" fill="#2E855A">
                        <path
                            d="M1.848 39.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503" />
                    </g>
                </g>
                <g opacity=".2">
                    <g opacity=".515" fill="#1C75BC">
                        <path
                            d="M1.848 21.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503" />
                    </g>
                </g>
                <g opacity=".1">
                    <g opacity=".515" fill="#2E855A">
                        <path
                            d="M1.848 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM112.718 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM131.197 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM149.675 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM168.153 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM186.848 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM223.804 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM242.283 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM279.24 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM297.718 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM316.197 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM334.675 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM353.153 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503" />
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div>
@endsection
