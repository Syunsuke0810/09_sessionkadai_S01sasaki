<x-guest-layout>
<body class="bg-gradient-to-r from-green-400 to-blue-500">
    <div class=>
        <div class=" container pt-10 md:pt-18 px-10 mx-auto flex flex-wrap flex-col md:flex-row items-center bg-red-0">
            <!--左側-->
            <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden ">
                <h1 class="my-4 text-2xl md:text-4xl text-green-500 font-bold leading-tight text-xs text-center md:text-left slide-in-bottom-h1">生成AI画像ちゃんねる</h1>
                <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">
                    自分で作った渾身の生成AI画像をみんなに見てもらおう♪コメントや他の人の投稿を見て勉強しよう。
                </p>

                <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">
                    仲間募集中。お気軽にマジで。
                </p>
                <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in ">
                    {{-- ボタン設定 --}}
                    <a href="{{route('contact,create')}}">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-600 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 mx-2">お問い合わせ</button>
                    </a>

                    <a href="{{route('register')}}">
                        <x-primary-button>ご登録はこちら</x-primary-button>
                    </a>
                </div>
            </div>
            {{-- 右側 --}}
            <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
                <img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom rounded-lg shadow-xl" src="{{asset('logo/topimg.png')}}">
            </div>
        </div>
        <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <div class="w-full text-sm text-center md:text-left fade-in border-2 p-4 text-red-800 leading-8 mb-8">
                <P> 自分で作った生成AI画像をみんなに見てもらい、感想を言ってもらいましょう。</p>
                    <P> コメントはポジティブオンリーなので、ネガティブ発言はBANします。</p>
            </div>
            <!--フッタ-->
            <div class="w-full pt-10 pb-6 text-sm md:text-left fade-in">
                <p class="text-gray-500 text-center">@2024.1.3　えんちょーLaravel初作品</p>
            </div>
        </div>
    </div>
</body>

</x-guest-layout>
