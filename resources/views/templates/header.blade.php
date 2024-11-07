<div class="shadow navbar bg-base-100 relative z-10">
    <div class="flex-1">
        <a class="text-xl btn btn-ghost" href="/">daisyUI</a>
    </div>
    <div class="flex-none gap-2">
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <details class="relative group">
                        <summary class="cursor-pointer">Categorías</summary>
                        <ul
                            class="absolute left-0 z-20 bg-base-100 shadow-lg rounded-t-none p-2 hidden group-open:block overflow-x-auto">
                            @foreach ($categories as $category)
                                <li><a class="block" href="/category/{{$category->slug}}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
    <div class="form-control">
        <button @click="toggleTema()" class="p-2 rounded-full bg-base-200">
            <!-- Iconos para el tema -->
            <svg x-show="tema === 'corporate'" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-gray-500"
                fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg x-show="tema === 'business'" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-yellow-500"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</div>