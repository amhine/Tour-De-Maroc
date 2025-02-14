<?php
require_once __DIR__ . "/common/header.php";
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 transition-all duration-300 hover:shadow-md fade-in">
                <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium text-gray-500">Total Visitors</h3>
                </div>
                <p class="text-2xl font-bold text-gray-900 mt-2"><?= $countAll ?></p>
            </div>
            <!-- Add similar stat cards as needed -->
        </div>

        <!-- Main Table Card -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden fade-in">
            <!-- Table Header -->
            <div class="px-6 py-5 border-b border-gray-200 bg-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Website Visitors</h2>
                        <p class="mt-1 text-sm text-gray-500">A detailed list of all visitors to your website</p>
                    </div>
                </div>
            </div>

            <!-- Table Wrapper with Fixed Height -->
            <div class="table-container overflow-auto" style="max-height: 600px;">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 sticky-header">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">
                                Visitor ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">
                                IP Address
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">
                                Visit Date
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">
                                Page Visited
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="tableBody">
                        <?php foreach ($visitors as $visitor): ?>
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <?= htmlspecialchars($visitor['id']); ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <?= htmlspecialchars($visitor['ip_address']); ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <?= date('Y-m-d H:i:s', strtotime($visitor['visited_at'])); ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <?= htmlspecialchars($visitor['page_visited']); ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize GSAP animations
            gsap.from(".fade-in", {
                duration: 0.6,
                y: 20,
                opacity: 0,
                stagger: 0.2,
                ease: "power2.out"
            });

            // Row hover animations
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                row.addEventListener('mouseenter', () => {
                    gsap.to(row, {
                        duration: 0.3,
                        backgroundColor: "#F8FAFC",
                        scale: 1.01,
                        transformOrigin: "center",
                        boxShadow: "0 4px 6px -1px rgba(0, 0, 0, 0.1)",
                        ease: "power2.out"
                    });
                });

                row.addEventListener('mouseleave', () => {
                    gsap.to(row, {
                        duration: 0.3,
                        backgroundColor: "#FFFFFF",
                        scale: 1,
                        boxShadow: "none",
                        ease: "power2.out"
                    });
                });
            });

            // Smooth scroll animation for the table container
            const tableContainer = document.querySelector('.table-container');
            let isScrolling = false;
            let scrollTimeout;

            tableContainer.addEventListener('scroll', () => {
                if (!isScrolling) {
                    isScrolling = true;
                    tableContainer.classList.add('scrolling');
                }

                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    isScrolling = false;
                    tableContainer.classList.remove('scrolling');
                }, 150);
            });

            // Refresh button animation
            const refreshButton = document.querySelector('button:contains("Refresh")');
            if (refreshButton) {
                refreshButton.addEventListener('click', () => {
                    gsap.to(refreshButton, {
                        duration: 0.5,
                        rotation: 360,
                        ease: "power2.inOut"
                    });
                });
            }
        });
    </script>

<?php
require_once __DIR__ . "/common/footer.php";
?>