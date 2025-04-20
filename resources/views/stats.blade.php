<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-stretch border-bottom w-full text-zinc-700 dark:text-zinc-50">
            <h2 class="flex-1 w-2/3 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Statistiques') }}
            </h2>
            <input type="text" name="search" id="search" class="flex-2 w-1/3 rounded-lg outline-zinc-50 p-1 mx-12 bg-white dark:bg-gray-700" placeholder="Rechercher ...">
        </div>
    </x-slot>

    <div class="flex flex-row">
        <!-- Sidebar -->
        <div class="basis-1/7 min-h-svh min-w-36">
            <div class="p-12 bg-white dark:bg-gray-800 overflow-hidden shadow-sm">
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
                    <a href="/export" class="flex">Exporter</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="basis-6/7 flex-1">
            <div class="pt-12">
                <div class="sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Statistiques des Archives</h3>

                        <!-- Boutons d'exportation -->
                        <div class="flex justify-end mb-6">
                            <a href="/export/pdf" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600">Exporter en PDF</a>
                            <a href="/export/excel" class="bg-green-500 text-white px-4 py-2 ml-4 rounded-lg shadow-md hover:bg-green-600">Exporter en Excel</a>
                        </div>

                        <div class="flex flex-row gap-6">

                            <!-- Tableau des statistiques -->
                            <div class="mt-6 flex-1 w-1/2 gap-6 mx-auto">
                                <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Détails des Travaux</h4>
                                <table class="table-auto w-full border-collapse border border-gray-300 dark:border-gray-700">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">ID</th>
                                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Titre</th>
                                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Auteur</th>
                                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Directeur</th>
                                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Catégorie</th>
                                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Année</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">1</td>
                                            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Titre Exemple</td>
                                            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Auteur Exemple</td>
                                            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Directeur Exemple</td>
                                            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Thèse</td>
                                            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">2025</td>
                                        </tr>
                                        <!-- Ajouter d'autres lignes ici -->
                                    </tbody>
                                </table>
                            </div>
                            <!-- Graphiques -->
                            <div class="flex flex-1 flex-row w-1/2 gap-6 mx-auto">
                                <!-- Graphique en barres -->
                                <div class="flex-1/4  bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Travaux par Catégorie</h4>
                                    <canvas id="categoryChart"></canvas>
                                </div>

                                <!-- Graphique circulaire -->
                                <div class="flex-1/4  bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Travaux par Année</h4>
                                    <canvas id="yearChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclusion de Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Données pour le graphique des catégories
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        new Chart(categoryCtx, {
            type: 'bar',
            data: {
                labels: ['Thèse', 'Mémoire', 'Article', 'Rapport'],
                datasets: [{
                    label: 'Nombre de Travaux',
                    data: [50, 30, 20, 10], // Remplacez par vos données dynamiques
                    backgroundColor: ['#4F46E5', '#10B981', '#F59E0B', '#EF4444'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

        // Données pour le graphique des années
        const yearCtx = document.getElementById('yearChart').getContext('2d');
        new Chart(yearCtx, {
            type: 'pie',
            data: {
                labels: ['2023', '2024', '2025'],
                datasets: [{
                    data: [40, 50, 30], // Remplacez par vos données dynamiques
                    backgroundColor: ['#10B981', '#3B82F6', '#EF4444'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'bottom' },
                }
            }
        });
    </script>
</x-app-layout>