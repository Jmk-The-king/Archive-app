<x-app-layout>
    <x-slot name="header">
        
        <div class=" flex flex-row justify-between items-stretch border-bottom w-full text-zinc-700 dark:text-zinc-50 ">
            <h2 class=" flex-1 w-2/3 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <input type="text" name="titre" id="titre" class=" flex-2 w-1/3 rounded-lg outline-zinc-50 p-1 mx-12 bg-white dark:bg-gray-700" placeholder="  Rechercher ...">
        </div>
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
                <div class="p-1"></div>
                
            </div>
        </div>
    </div>
        </div>
        <div class="basis-2/3 flex-1">
            <div class="py-4">
                <div class="sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                        <div class="p-6 flex flex-row text-gray-900 dark:text-gray-100 justify-between ">
                            <span class="w-96 flex-auto text-2xl font-semibold pr-20">Liste de Travail Scientifique de la mention de Chimie</span>
                            <span class="w-14 flex-none">    <a href="/add/archive" class="float-right inline-block px-5 py-1.5 dark:text-[#EDEDEC] items-end border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">Ajouter Archiver</a>
                            </span>
                        </div>
                        <hr>
                        
                        <div class=" flex flex-row p-6 grid-cols-1 gap-6">
                            <div class=" flex-1 bg-blue-500 text-white p-4 rounded-lg shadow-md">
                                <h3 class="text-lg font-semibold">Total Archives</h3>
                                <p class="text-2xl font-bold">120</p>
                            </div>
                            <div class=" flex-1 bg-green-500 text-white p-4 rounded-lg shadow-md">
                                <h3 class="text-lg font-semibold">Archives Publiées</h3>
                                <p class="text-2xl font-bold">80</p>
                            </div>
                            <div class="flex-1 bg-red-500 text-white p-4 rounded-lg shadow-md">
                                <h3 class="text-lg font-semibold">Archives en Attente</h3>
                                <p class="text-2xl font-bold">40</p>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Détails des Archives</h3>
                            <table class="table-auto w-full border-collapse border border-gray-300 dark:border-gray-700">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">ID</th>
                                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Titre</th>
                                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Auteur</th>
                                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Directeur</th>
                                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Type</th>
                                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Année</th>
                                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">1</td>
                                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Titre Exemple</td>
                                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Auteur Exemple</td>
                                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">directeur Exemple</td>
                                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Thèse</td>
                                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">2025</td>
                                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 flex flex-row justify-center">
                                            <a href="#" class="text-blue-500">Modifier</a> |
                                            <a href="#" class="text-red-500">Supprimer</a>
                                        </td>
                                    </tr>
                                    <!-- Ajouter d'autres lignes ici -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
