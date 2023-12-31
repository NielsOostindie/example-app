
<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="./images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="/" class="text-xs font-bold uppercase">Home Page</a>

                <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        <header class="max-w-xl mx-auto mt-20 text-center">
            <h1 class="text-4xl">
                Post <span class="text-blue-500">Your Own</span> Blog
            </h1>
        </header>

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <form action="{{url('/addPost')}}" method="post" enctype="multipart/form-data">
            @csrf
                <input type="text" name="title" placeholder="Title" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <br>
                <br>
                <input type="text" name="auther" placeholder="Your Name" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <br>
                <br>
                <textarea name="paragraph1" placeholder="First Paragraph" cols="30" rows="10" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2"></textarea>
                <br>
                <br>
                <input type="text" name="subtitle" placeholder="Subtilte" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <br>
                <br>
                <textarea name="paragraph2" placeholder="Second Paragraph" cols="30" rows="10" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2"></textarea>
                <br>
                <br>
                <input type="text" name="tag1" placeholder="First Tag" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <br>
                <br>
                <input type="text" name="tag2" placeholder="Second Tag" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <br>
                <br>
                <input type="file" name="image" placeholder="Picture" style="outline: none; width: 295.859px;" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <br>
                <br>
                <input type="submit" style="width: 295.859px;" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
            </form>
        </main>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
