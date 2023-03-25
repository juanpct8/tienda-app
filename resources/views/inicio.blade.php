@extends("layouts.app")

@section("title", "inicio")

@section('meta-description', 'inicio')

@section("content")

<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Supermercado</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">siempre costoso</p>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              Boost your conversion rate
            </a>
          </h3>
          <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">precios siempre bajos</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="https://w7.pngwing.com/pngs/225/984/png-transparent-computer-icons-shopping-cart-encapsulated-postscript-shopping-cart-angle-black-shopping.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                mini super
              </a>
            </p>
            <p class="text-gray-600">Medellin colombia</p>
          </div>
        </div>
      </article>

      <!-- More posts... -->
    </div>
  </div>
</div>

    

@endsection