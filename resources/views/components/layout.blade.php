<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bmw: '#0033A0',
                        bsouth: '#0060A9',
                        atlantic: '##9D2235',
                    }
                }
            }
        }
    </script>
    <title>BMW Cars | Blogs</title>
</head>
<body>
    <nav class="flex justify-between items-center mb-4">
        <a href="/">
            <img src={{ asset("images/bmw_logo.png") }} alt="" class="ml-10 mt-4 w-24 logo" />
        </a>
        <ul class="flex space-x-6 mr-10 text-lg">
            {{-- <li>
                <a href="#" class="hover:text-bmw">
                    <i class="fa-solid fa-gear"></i> Manage Blogs
                </a>
            </li>
            <li>
                <form method="POST" action="/logout" class="inline">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed"> Logout</i>
                    </button>
                </form>
            </li> --}}


            <li>
                <a href="/register" class="hover:text-bmw">
                    <i class="fa-solid fa-user-plus"></i> Register
                </a>
            </li>
            <li>
                <a href="/login" class="hover:text-bmw">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                </a>
            </li>
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold border-t-2 text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2 text-black">Copyright &copy; 2022, All Rights reserved</p>
        <a href="#" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5 hover:bg-bmw">Create Blog</a>
    </footer>
    
</body>
</html>