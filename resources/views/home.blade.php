@extends('layouts.main')

@section('container')
<div class="container r px-6 font-inter mx-auto max-w-md sm:max-w-xl md:max-w-5xl lg:flex lg:max-w-full lg:p-0">
    <div class="lg:p-12 lg:flex-1">
           <h3 class="text-4xl font-bold text-slate-800 sm:text-5xl">MOBILE SUIT <span class="text-sky-500"> GUNDAM </span></h3>
           <img src="https://source.unsplash.com/1280x680?gundam" alt="img" class="mt-4 sm:h-64 sm:w-full sm:object-cover sm:object-top sm:mt-6 rounded-xl shadow-xl lg:hidden">
           <h2 class="mt-6 sm:mt-8 sm:text-4xl text-2xl font-semibold text-slate-800">EFSF</h2>
           <p class="sm:mt-8 sm:text-xl mt-6 text-slate-600 ">Lorem ipsum dolor sit amet consectetur, 
               adipisicing elit. Provident 
               fugit temporibus repellendus impedit, ea minima 
               inventore pariatur, voluptatum illum suscipit debitis quidem 
               ex id necessitatibus quae dolorem? 
           Error consectetur aliquid, eius voluptates explicabo magnam fugiat impedit, 
           culpa illo consequuntur voluptatibus.
       </p>
       <div class="mt-4">
           <a href="#" class="sm:text-base inline-block px-5 py-3 bg-red-600 text-white rounded-lg shadow-lg uppercase font-semibold tracking-wider text-sm">Link</a>
       </div>
    </div>
    <div class="hidden lg:flex lg:w-1/2">
       <img src="https://source.unsplash.com/1920x1080?gundam" alt="img" class="rounded-l-full object-cover object-top" >
    </div>
   </div>
@endsection