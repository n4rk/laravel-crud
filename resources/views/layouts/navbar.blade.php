<nav class="w-full flex justify-between items-center py-4 px-8">
    <div class="logo flex font-extrabold">
        <a href="/"><img class="rounded-xl" src="https://seeklogo.com/images/A/aws-cloudfront-logo-D475098A98-seeklogo.com.png" alt="Logo" width="55"></a>
    </div>
    <ul class="flex space-x-4 py-2">
        <li>
            <a href="/" class="items-center justify-center text-sm font-medium border border-input bg-white rounded-full py-2 px-6 hover:bg-zinc-100/75 hover:shadow-md hover:shadow-zinc-200">
                Home
            </a>
        </li>
        <li>
            <a href="/products" class="items-center justify-center text-sm font-medium border border-input bg-white rounded-full py-2 px-6 hover:bg-zinc-100/75 hover:shadow-md hover:shadow-zinc-200">
                Products
            </a>
        </li>
        <li>
            <a href="/about" class="items-center justify-center text-sm font-medium border border-input bg-white rounded-full py-2 px-6 hover:bg-zinc-100/75 hover:shadow-md hover:shadow-zinc-200">
                About
            </a>
        </li>
        <li>
            <a href="/contact" class="items-center justify-center text-sm font-medium border border-input bg-white rounded-full py-2 px-6 hover:bg-zinc-100/75 hover:shadow-md hover:shadow-zinc-200">
                Contact
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </li>
    </ul>
</nav>
