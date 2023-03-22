@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <div class="bg-black lg:flex flex lg:flex-nowrap md:flex-nowrap flex-wrap justify-center pt-8 pb-14">
        <img class="w-64 lg:h-96 lg:w-96 md:h-96 md:w-96 ml-5" src="{{url('/img/bg-image.jpg')}}" alt="Pc">
        <div class="">
            <h1 class="text-white text-center text-3xl font-bold mb-24 mt-10 ml-3">Bienvenue chez Come'Puters !</h1>
            <p class="text-white text-xl text-justify mr-5 ml-3 mb-5">
                Si vous cherchez un ordinateur puissant pour pouvoir profiter pleinement
                de tous les derniers jeux, sachez que vous êtes au bon endroit.<br/>
                Nous avons pensés à tous les budgets possibles, nos prix varient
                entre 300€ et 1500€ donc nous sommes persuadés que vous trouverez votre
                bonheur ici.
            </p>
            <div class="flex justify-center pb-9">
                <a href="{{ route('articles.index') }}" class="font-semibold text-black uppercase py-2 px-3 bg-white tracking-widest rounded-xl border-2 border-transparent">Voir tous nos produits</a>
            </div>
        </div>
    </div>
    <div class="bg-black pb-[3px]"></div>
@endsection