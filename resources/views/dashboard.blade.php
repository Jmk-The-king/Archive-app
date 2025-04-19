<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
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
                <a href="" class="flex">Statistiques</a> 
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
            <div class="py-12">
                <div class="sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                        <div class="p-6 flex flex-row text-gray-900 dark:text-gray-100 justify-between ">
                            <span class="w-96 flex-auto text-2xl font-semibold pr-20">Liste de Travail Scientifique de la mention de Chimie</span>
                            <span class="w-14 flex-none">    <a href="/add/archive" class="float-right inline-block px-5 py-1.5 dark:text-[#EDEDEC] items-end border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">Ajouter Archiver</a>
                            </span>
                        </div>
                        <div class="flex justify-between p-6 font-normal text-gray-900 dark:text-gray-100">
                            <table class="table-auto w-full flex-col">
                                <thead >
                                    <th > ID</th>
                                    <th >Titre </th>
                                    <th >Auteur</th>
                                    <th >Directeur</th>
                                    <th >Type</th>
                                    <th >Année de redaction</th>
                                    <th >Action</th>
                                </thead>
                                <tbody>
                                        
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td >
                                            <a href="" >Modifier</a>
                                            <a href="" >supprimer</a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
