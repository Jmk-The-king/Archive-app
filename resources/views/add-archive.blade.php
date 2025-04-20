<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter un Archive') }}
        </h2>
    </x-slot>

    <div class="flex flex-row ">
        <div class="basis-1/3 min-h-svh min-w-36">
        <div >
        <div >
            <div class="p-12 bg-white dark:bg-gray-800 overflow-hidden shadow-sm ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/" class="flex">Accueil</a> 
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/add/archive" class="flex">Archiver</a> 
                </div>
                
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/statistique" class="flex">Statistiques</a> 
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 pb-48">
                    <a href="" class="flex">Exporter</a> 
                </div>
                
                <div class="p-6"></div>
                <div class="p-6"></div>
                <div class="p-6"></div>
                <div class="p-6"></div>
                <div class="p-6"></div>
                <div class="p-6"></div>
                <div class="p-6"></div>
                <div class="p-6"></div>
                <div class="p-6"></div>
                
            </div>
        </div>
    </div>
        </div>
        <div class="basis-2/3 flex-1">
            <div class="py-4">
                <div class="sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                        <form action="" method="post">
                            <div class="flex flex-col w-full gapy-2 p-4 items-center">
                                <div class="border-bottom w-3/4 text-zinc-700 dark:text-zinc-50 p-4">
                                    <label for="titre" class=" text-lg p-4  text-gray-900 dark:text-gray-100"> Titre </label><br>
                                    <input type="text" name="titre" id="titre" class="rounded-md outline-zinc-50 p-2 mx-12 w-full bg-white dark:bg-gray-700">
                                </div>
                                <div class="flex flex-row w-3/4">
                                    <div class="border-bottom flex-1 text-zinc-700 dark:text-zinc-50 p-4">
                                        <label for="titre" class=" text-lg p-4 text-gray-900 dark:text-gray-100"> Auteur  </label><br>
                                        <input type="text" name="auteur" id="auteur" class="rounded-md outline-zinc-50 p-2 mx-12 w-full bg-white dark:bg-gray-700">
                                    </div>
                                    <div class="border-bottom flex-1 text-gray-900 dark:text-gray-100 p-4">
                                        <label for="titre" class=" text-lg p-4  text-zinc-700 dark:text-zinc-50"> Directeur </label><br>
                                        <input type="text" name="directeur" id="directeur" class="rounded-md outline-zinc-50 p-2 mx-12 w-full bg-white dark:bg-gray-700">
                                    </div>
                                </div>
                                <div class="border-bottom w-3/4 text-zinc-700 dark:text-zinc-50 p-4">
                                    <label for="titre" class=" text-lg p-4  text-gray-900 dark:text-gray-100"> Resumé </label><br>
                                    <textarea type="text" name="resume" id="resume" class="rounded-md outline-zinc-50 p-2 mx-12 w-full bg-white dark:bg-gray-700"></textarea>
                                </div>
                                <div class="flex flex-row w-3/4">
                                    <div class="border-bottom flex-1 text-zinc-700 dark:text-zinc-50 p-4">
                                        <label for="titre" class=" text-lg p-4  text-gray-900 dark:text-gray-100"> Qualité </label><br>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white dark:bg-gray-700 py-1.5 pr-8 pl-3 text-base text-gray-900 dark:text-gray-100 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option>Thèse</option>
                                                <option>TFE</option>
                                                <option>TFC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom flex-1 text-zinc-700 dark:text-zinc-50 p-4">
                                        <label for="titre" class=" text-lg p-4  text-gray-900 dark:text-gray-100"> Année academique</label><br>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white dark:bg-gray-700 py-1.5 pr-8 pl-3 text-base text-gray-900 dark:text-gray-100 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option>2021-2022</option>
                                                <option>2022-2023</option>
                                                <option>2023-2024</option>
                                                <option>2024-2025</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom w-3/4 flex flex-row text-zinc-700 dark:text-zinc-50 p-4">
                                    <div class="col-span-full">
                                        <label for="photo" class="block text-lg px-4  font-semibold text-gray-900 dark:text-gray-100">Télécharger le document </label>
                                        <div class="flex flex-col items-center justify-start border border-dotted border-zinc-400 rounded-md p-2">
                                            <div class="mt-4 flex text-sm/6 text-gray-600">
                                                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                <span class="p-4">Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1 dark:text-gray-400">or drag and drop</p>
                                            </div>
                                            <p class="text-xs/5 text-gray-600 dark:text-gray-400">PDF up to 10MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" mx-auto py-4 flex w-3/4 items-center justify-end ">
                                <hr>
                                <a href="/dashboard" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] items-end border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#9d9d9b] rounded-sm text-sm leading-normal">Retour</a>
                                <span class="p-4"></span>
                                <button type="submit" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] items-end border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#9d9d9b] rounded-sm text-sm leading-normal">enregistrer</button>
                                <span class="p-4"></span></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
