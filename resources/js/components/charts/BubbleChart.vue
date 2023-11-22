<template>
    <div>
        <div>
            <canvas id="bubbleChart" width="400" height="400"></canvas>
        </div>
    </div>
</template>


<script>

export default {
    name: "BubbleChart",
    props: {
       msg:String
    },
    mounted() {
        console.log('mounted');

        const ctx = document.getElementById('bubbleChart');

      const bubbleChart =  new Chart(ctx, {
           type: 'bubble',
            options: {
                aspectRatio: 1,
                scales: {
                    x: {
                        max: 500,
                        ticks: {
                            callback: value => `${value / 100} m`
                        }
                    },
                    y: {
                        max: 500,
                        ticks: {
                            callback: value => `${value / 100} m`
                        }
                    }
                }
            },
        });
    }
}

</script>



