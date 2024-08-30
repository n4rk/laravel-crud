<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased bg-white dark:bg-black text-black dark:text-white">
        Hello World!
    </body>
    {{-- Products List
    <section class="w-full py-12">
        <div class="container grid gap-6 md:gap-8 px-4 md:px-6">
          <div class="flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-8">
            <div class="grid gap-1">
              <h1 class="text-2xl font-bold tracking-tight">Innovative Products</h1>
              <p class="text-muted-foreground">Discover the latest in technology and design</p>
            </div>
            <a class="ml-auto shrink-0" href="#" rel="ugc">
              <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8">
                View Cart (0)
              </button>
            </a>
          </div>
          <ul class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <li class="grid gap-4 border rounded-lg overflow-hidden">
              <img
                src="https://placeholder.co/400x400"
                alt="Acme Smart Lamp"
                width="400"
                height="400"
                class="w-full aspect-square object-cover"
              />
              <div class="p-4 grid gap-2">
                <div class="flex items-center justify-between">
                  <h3 class="font-semibold">Acme Smart Lamp</h3>
                  <div class="text-2xl font-bold">$49.99</div>
                </div>
                <p class="text-muted-foreground">Intelligent lighting for your home</p>
                <div class="flex items-center justify-between">
                  <div
                    class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 font-medium"
                    data-v0-t="badge"
                  >
                    25 in stock
                  </div>
                  <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    Add to Cart
                  </button>
                </div>
              </div>
            </li>
            <li class="grid gap-4 border rounded-lg overflow-hidden">
              <img
                src="https://placeholder.co/400x400"
                alt="Eco-Friendly Water Bottle"
                width="400"
                height="400"
                class="w-full aspect-square object-cover"
              />
              <div class="p-4 grid gap-2">
                <div class="flex items-center justify-between">
                  <h3 class="font-semibold">Eco-Friendly Water Bottle</h3>
                  <div class="text-2xl font-bold">$14.99</div>
                </div>
                <p class="text-muted-foreground">Reusable bottle made from recycled materials</p>
                <div class="flex items-center justify-between">
                  <div
                    class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 font-medium"
                    data-v0-t="badge"
                  >
                    50 in stock
                  </div>
                  <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    Add to Cart
                  </button>
                </div>
              </div>
            </li>
            <li class="grid gap-4 border rounded-lg overflow-hidden">
              <img
                src="https://placeholder.co/400x400"
                alt="Ergonomic Office Chair"
                width="400"
                height="400"
                class="w-full aspect-square object-cover"
              />
              <div class="p-4 grid gap-2">
                <div class="flex items-center justify-between">
                  <h3 class="font-semibold">Ergonomic Office Chair</h3>
                  <div class="text-2xl font-bold">$199.99</div>
                </div>
                <p class="text-muted-foreground">Comfortable and supportive chair for long hours</p>
                <div class="flex items-center justify-between">
                  <div
                    class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 font-medium"
                    data-v0-t="badge"
                  >
                    12 in stock
                  </div>
                  <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    Add to Cart
                  </button>
                </div>
              </div>
            </li>
            <li class="grid gap-4 border rounded-lg overflow-hidden">
              <img
                src="https://placeholder.co/400x400"
                alt="Wireless Charging Pad"
                width="400"
                height="400"
                class="w-full aspect-square object-cover"
              />
              <div class="p-4 grid gap-2">
                <div class="flex items-center justify-between">
                  <h3 class="font-semibold">Wireless Charging Pad</h3>
                  <div class="text-2xl font-bold">$29.99</div>
                </div>
                <p class="text-muted-foreground">Charge your devices without the hassle of cables</p>
                <div class="flex items-center justify-between">
                  <div
                    class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 font-medium"
                    data-v0-t="badge"
                  >
                    30 in stock
                  </div>
                  <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    Add to Cart
                  </button>
                </div>
              </div>
            </li>
            <li class="grid gap-4 border rounded-lg overflow-hidden">
              <img
                src="https://placeholder.co/400x400"
                alt="Smart Thermostat"
                width="400"
                height="400"
                class="w-full aspect-square object-cover"
              />
              <div class="p-4 grid gap-2">
                <div class="flex items-center justify-between">
                  <h3 class="font-semibold">Smart Thermostat</h3>
                  <div class="text-2xl font-bold">$99.99</div>
                </div>
                <p class="text-muted-foreground">Automate your home temperature for energy savings</p>
                <div class="flex items-center justify-between">
                  <div
                    class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 font-medium"
                    data-v0-t="badge"
                  >
                    18 in stock
                  </div>
                  <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    Add to Cart
                  </button>
                </div>
              </div>
            </li>
            <li class="grid gap-4 border rounded-lg overflow-hidden">
              <img
                src="https://placeholder.co/400x400"
                alt="Noise-Cancelling Headphones"
                width="400"
                height="400"
                class="w-full aspect-square object-cover"
              />
              <div class="p-4 grid gap-2">
                <div class="flex items-center justify-between">
                  <h3 class="font-semibold">Noise-Cancelling Headphones</h3>
                  <div class="text-2xl font-bold">$149.99</div>
                </div>
                <p class="text-muted-foreground">Immersive audio experience with advanced noise-cancellation</p>
                <div class="flex items-center justify-between">
                  <div
                    class="inline-flex w-fit items-center whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 font-medium"
                    data-v0-t="badge"
                  >
                    22 in stock
                  </div>
                  <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    Add to Cart
                  </button>
                </div>
              </div>
            </li>
          </ul>
        </div>
    </section>


    <div class="flex items-center justify-center gap-2">
        <nav aria-label="pagination" class="mx-auto flex w-full justify-center" role="navigation">
          <ul class="flex flex-row items-center gap-1">
            <li class="">
                <a class="text-sm font-medium mr-8 px-4 py-2 inline-flex items-center justify-center rounded-md bg-zinc-700 text-white hover:bg-zinc-800" href="#">
                    <span>Previous</span>
                </a>
            </li>
            <li class="">
                <a class="text-sm text-center font-medium pl-1.5 pr-2 inline-flex items-center justify-center rounded-full border border-zinc-800 text-zinc-800 hover:bg-zinc-800 hover:text-white" href="#">
                  1
                </a>
            </li>
            <li class="">
                <a class="text-sm font-medium py-1 px-3 inline-flex items-center justify-center rounded-full text-zinc-800" href="#">
                  2
                </a>
            </li>
            <li class="">
                <a class="text-sm font-medium py-1 px-3 inline-flex items-center justify-center rounded-full text-zinc-800" href="#">
                  3
                </a>
            </li>
            <li class="items-center font-bold tracking-wide">
              ...
            </li>
            <li class="">
                <a class="text-sm font-medium py-1 px-3 inline-flex items-center justify-center rounded-full text-zinc-800" href="#">
                  10
                </a>
            </li>
            <li class="">
                <a class="text-sm font-medium ml-8 px-4 py-2 inline-flex items-center justify-center rounded-md bg-zinc-700 text-white hover:bg-zinc-800" href="#">
                  <span>Next</span>
                </a>
            </li>
          </ul>
        </nav>
    </div> --}}
</html>
