    <!doctype html>

    <head>
        <title>Laravel From Scratch Blog</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body style="font-family: Open Sans, sans-serif">
        <section class="px-6 py-8">
            <nav class="md:flex md:justify-between md:items-center">
                <div>
                    <a href="/">
                        <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                    </a>
                </div>

                <div class="mt-8 md:mt-0">
                    <a href="/" class="text-xs font-bold uppercase">Home Page</a>

                    <a href="#" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Subscribe
                        for Updates</a>
                </div>
            </nav>

            <?php

             use Carbon\Carbon; //use composer pakage carbon
             use YoHang88\LetterAvatar\LetterAvatar;
             ?>
            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
                <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                    <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                        <img src="<?= $post->image; ?>" class="rounded-xl">

                        <p class="mt-4 block text-gray-400 text-xs">
                            Published <time><?php $post_date = Carbon::createFromDate($post->created_at)->diffForHumans();
                                                    echo $post_date; ?></time>
                        </p>

                        <div class="flex items-center lg:justify-center text-sm mt-4">
                            <img src="<?php $avatar = new LetterAvatar($post->auther,'square'); echo $avatar ?>" alt="Lary avatar" style="border-radius: 0.75rem;">
                            <div class="ml-3 text-left">
                                <h5 class="font-bold"><?= $post->auther; ?></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-8">
                        <div class="hidden lg:flex justify-between mb-6">
                            <a href="/" class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                    <g fill="none" fill-rule="evenodd">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                        </path>
                                        <path class="fill-current" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                        </path>
                                    </g>
                                </svg>

                                Back to Posts
                            </a>

                            <div class="space-x-2">
                                <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold" style="font-size: 10px"><?= $post->tag1; ?></a>
                                <a href="#" class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold" style="font-size: 10px"><?= $post->tag2; ?></a>
                            </div>
                        </div>

                        <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                            <?= $post->title; ?>
                        </h1>

                        <div class="space-y-4 lg:text-lg leading-loose">
                            <p><?= $post->paragraph1; ?></p>
                            <h2 class="font-bold text-lg"><?= $post->subtitle; ?></h2>
                            <p><?= $post->paragraph2; ?></p>
                        </div>
                    </div>
                </article>
            </main>

            <div class="comments">
                @foreach($comments as $comment)
                <div class="flex items-center text-sm mt-4">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold"><?= $comment->naam; ?></h5>
                        <h6><?= $comment->comment; ?></h6>
                        <?php
                        $post_date = Carbon::createFromDate($comment->created_at)->diffForHumans();
                        echo $post_date;
                        ?>
                    </div>
                </div>
                <br>
                @endforeach

            </div>

            <form name="add-blog-post-form" action="{{url('/')}}" method="post" class="max-w-4xl mx-auto lg:grid">
                @csrf
                <input type="text" name="naam" placeholder="Name" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <br>
                <br>
                <label for="comment"></label>
                <textarea placeholder="Your Comment" name="comment" id="comment" cols="30" rows="10" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2"></textarea>
                <br>
                <input type="submit" style="width: 295.859px;" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
            </form>

            <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
                <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
                <h5 class="text-3xl">Stay in touch with the latest posts</h5>
                <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

                <div class="mt-10">
                    <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                        <form method="POST" action="#" class="lg:flex text-sm">
                            <div class="lg:py-3 lg:px-5 flex items-center">
                                <label for="email" class="hidden lg:inline-block">
                                    <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                                </label>

                                <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent pl-4 focus-within:outline-none">
                            </div>

                            <button type="submit" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </footer>
        </section>
    </body>