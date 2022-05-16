<template>
    <div>
        <canvas id="analytics-chart"></canvas>
    </div>
</template>

<script>
import Chart from 'chart.js'
import analyticsChartData from './analytics_data.js'

export default {
    name: 'AnalyticsChart',
    data() {
        return {
            analyticsChartData: analyticsChartData
        }
    },
    mounted() {
        const ctx = document.getElementById('analytics-chart');
        new Chart(ctx, this.analyticsChartData);
    }
}
</script>