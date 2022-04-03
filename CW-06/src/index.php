<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>tailwind</title>
</head>

<body>
    <section>
        <div calss="">
            <button type="button" class="text-white bg-blue-500 text-center ml-20 mr-2 rounded-lg text-sm px-5 py-2">primary</button>
            <button type="button" class="text-white bg-gray-500 text-center mr-2 rounded-lg text-sm px-5 py-2">secondary</button>
            <button type="button" class="text-white bg-green-500 text-center mr-2 rounded-lg text-sm px-5 py-2">success</button>
            <button type="button" class="text-white bg-red-500 text-center mr-2 rounded-lg text-sm px-5 py-2">danger</button>
            <button type="button" class="text-white bg-yellow-500 text-center mr-2 rounded-lg text-sm px-5 py-2">warning</button>
            <button type="button" class="text-white bg-cyan-500 text-center mr-2 rounded-lg text-sm px-5 py-2">info</button>
            <button type="button" class="text-black bg-gray-100 text-center mr-2 rounded-lg text-sm px-5 py-2">light</button>
            <button type="button" class="text-white bg-black text-center mr-2 rounded-lg text-sm px-5 py-2">dark</button>
        </div>
    </section>
    <section>
        <div class="mt-6">
            <button type="button" class="text-white bg-blue-500 text-center ml-20  text-sm px-5 py-2 rounded-l-lg">1
                <button type="button" class="text-white bg-blue-500 text-center mr-0  text-sm px-5 py-2">2
                    <button type="button" class="text-white bg-blue-500 text-center mr-0  text-sm px-5 py-2">3
                        <button type="button" class="text-white bg-blue-500 text-center mr-0  text-sm px-5 py-2 rounded-r-lg">4

                        </button>
                    </button>
                </button>
            </button>

        </div>
        <div>
            <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800  focus:ring-blue-300 font-medium  text-sm px-5 py-2.5 text-center  dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 mt-5 ml-20 rounded-l-lg">Radio 1
                <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800  focus:ring-blue-300 font-medium  text-sm px-5 py-2.5 text-center  dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 mt-5 ">Radio 2
                    <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800  focus:ring-blue-300 font-medium  text-sm px-5 py-2.5 text-center  dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 mt-5 rounded-r-lg">Radio 3</button>
                </button>

            </button>



        </div>
    </section>
    <section>
        <div class="flex flex-wrap ml-20 flex-1 gap-x-5 gap-y-60 ">
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md  mt-5  justify-center">
                <a href="https://picsum.photos/200">
                    <img class="rounded-t-lg w-full h-full" src="https://picsum.photos/200" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">lorem</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, perferendis quam! Tempora, aspernatur libero ea architecto consequuntur quia adipisci fugit! Cupiditate velit rerum obcaecati unde! Corrupti adipisci rerum provident cumque!</p>
                    <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Go Somewhere
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md  mt-5  justify-center">
                <a href="https://picsum.photos/200">
                    <img class="rounded-t-lg w-full h-full" src="https://picsum.photos/200" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">lorem</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, perferendis quam! Tempora, aspernatur libero ea architecto consequuntur quia adipisci fugit! Cupiditate velit rerum obcaecati unde! Corrupti adipisci rerum provident cumque!</p>
                    <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Go Somewhere
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md  mt-5  justify-center">
                <a href="https://picsum.photos/200">
                    <img class="rounded-t-lg w-full h-full" src="https://picsum.photos/200" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">lorem</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, perferendis quam! Tempora, aspernatur libero ea architecto consequuntur quia adipisci fugit! Cupiditate velit rerum obcaecati unde! Corrupti adipisci rerum provident cumque!</p>
                    <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Go Somewhere
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md  mt-5  justify-center">
                <a href="https://picsum.photos/200">
                    <img class="rounded-t-lg w-full h-full" src="https://picsum.photos/200" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">lorem</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, perferendis quam! Tempora, aspernatur libero ea architecto consequuntur quia adipisci fugit! Cupiditate velit rerum obcaecati unde! Corrupti adipisci rerum provident cumque!</p>
                    <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Go Somewhere
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        
        </div>
    </section>

</body>

</html>