<template>
    <div>
        <div>
            <canvas id="colorBubbleChart" width="400" height="400"></canvas>
        </div>
    </div>
</template>


<script>

export default {
    name: "ColorBubbleChart.",
    props: {
        msg: String
    },
    mounted() {
        const chartAreaBorder = {
            id: 'chartAreaBorder',

            beforeDraw(chart, args, options) {
                const { ctx, chartArea: { left, top, width, height } } = chart;

                ctx.save();
                ctx.strokeStyle = options.borderColor;
                ctx.lineWidth = options.borderWidth;
                ctx.setLineDash(options.borderDash || []);
                ctx.lineDashOffset = options.borderDashOffset;
                ctx.strokeRect(left, top, width, height);
                ctx.restore();
            }
        };

        new Chart(
            document.getElementById('colorBubbleChart'),
            {
                type: 'bubble',
                plugins: [chartAreaBorder],
                options: {
                    plugins: {
                        chartAreaBorder: {
                            borderColor: 'red',
                            borderWidth: 2,
                            borderDash: [5, 5],
                            borderDashOffset: 2,
                        }
                    },
                    aspectRatio: 1,
                },
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

            }
        )

    }
}

</script>



