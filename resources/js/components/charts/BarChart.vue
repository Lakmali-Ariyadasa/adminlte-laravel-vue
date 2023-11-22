<template>
    <div>
        <div>
            <canvas id="barChart" width="400" height="400"></canvas>
        </div>
    </div>
</template>


<script>

export default {
    name: "BarChart",
    props: {
      
    },
    mounted() {
        console.log('bar');

        const ctx = document.getElementById('barChart');

      const barChart =  new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
}

</script>



