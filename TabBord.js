document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('chart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai'],
            datasets: [{
                label: 'Montants Recouvrés',
                data: [522000, 1058000, 2382800, 580000, 280000],
                borderColor: '#007bff',
                tension: 0.3,
                fill: false
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});