<template>
    <admin-layout>
        <v-card>
            <v-card-title class="text-h5 font-weight-bold">Analytics</v-card-title>
            <v-layout align-content-center class="pa-5">
                <v-responsive max-width="640px" class="mx-auto">
                    <div class="text-h5 mb-10">Lifetime Analytics</div>
                    <div class="d-flex justify-space-around">
                        <div class="text-center">
                            <div class="text-body-2">Views:</div>
                            <div class="text-h5">8.62k</div>
                        </div>
                        <div class="text-center">
                            <div class="text-body-2">Clicks:</div>
                            <div class="text-h5">3.47k</div>
                        </div>
                        <div class="text-center">
                            <div class="text-body-2">CTR:</div>
                            <div class="text-h5">0%</div>
                        </div>
                    </div>
                </v-responsive>
            </v-layout>
        </v-card>
        <v-responsive max-width="640px" class="mt-10 mx-auto">
            <div class="text-h5 mb-5">Activity</div>
            <div class="d-flex pa-3 rounded-lg bg-white mb-5">
                <v-icon>mdi-calendar-blank</v-icon>
                <div class="ml-2">Apr 20th, 2022 to Apr 26th, 2022</div>
            </div>
            <div class="d-flex flex-column bg-white pa-5 rounded-lg">
                <div class="d-flex justify-space-around mb-7">
                    <div class="text-center">
                        <div class="text-body-2">Views:</div>
                        <div class="text-h5">8.62k</div>
                    </div>
                    <div class="text-center">
                        <div class="text-body-2">Clicks:</div>
                        <div class="text-h5">3.47k</div>
                    </div>
                    <div class="text-center">
                        <div class="text-body-2">CTR:</div>
                        <div class="text-h5">0%</div>
                    </div>
                </div>
                <div class="analytics-chart">
                    <analytics-chart/>
                </div>
                <div class="d-flex justify-space-around">
                    <div class="text-center">
                        <div class="text-body-2"><span class="point-mark green accent-3"></span>Unique Views</div>
                    </div>
                    <div class="text-center">
                        <div class="text-body-2"><span class="point-mark purple lighten-3"></span>Clicks:</div>
                    </div>
                    <div class="text-center">
                        <div class="text-body-2"><span class="point-mark"></span>CTR:</div>
                    </div>
                </div>
            </div>
        </v-responsive>
        <v-responsive max-width="640px" class="mt-10 mx-auto">
            <div class="pa-5 bg-white">
                <div class="text-h5">Referrers</div>
                <v-expansion-panels accordion>
                    <v-expansion-panel>
                        <v-expansion-panel-header>
                            <v-row no-gutters>
                                <v-col cols="4">1. tiktok</v-col>
                                <v-col cols="2">2.75k Views</v-col>
                                <v-col cols="2">60% of visitors</v-col>
                                <v-col cols="4">722 Outbound Clicks</v-col>
                            </v-row>
                        </v-expansion-panel-header>
                        <v-expansion-panel-content>
                            <v-row>
                                <v-col cols="4">instgram.com/username</v-col>
                                <v-col cols="2">1.75k Views</v-col>
                                <v-col cols="2">80% of visitors</v-col>
                                <v-col cols="4">400 Outbound Clicks</v-col>
                            </v-row>
                        </v-expansion-panel-content>
                    </v-expansion-panel>
                    <v-expansion-panel>
                        <v-expansion-panel-header>
                            <v-row no-gutters>
                                <v-col cols="4">2. instgram</v-col>
                                <v-col cols="2">2.75k Views</v-col>
                                <v-col cols="2">60% of visitors</v-col>
                                <v-col cols="4">722 Outbound Clicks</v-col>
                            </v-row>
                        </v-expansion-panel-header>
                        <v-expansion-panel-content>
                            <v-row>
                                <v-col cols="4">instgram.com/username</v-col>
                                <v-col cols="2">1.75k Views</v-col>
                                <v-col cols="2">80% of visitors</v-col>
                                <v-col cols="4">400 Outbound Clicks</v-col>
                            </v-row>
                        </v-expansion-panel-content>
                    </v-expansion-panel>
                </v-expansion-panels>
            </div>
            <v-divider></v-divider>
            <div class="pa-5 bg-white">
                <div class="text-h5 mb-4">Outbound clicks</div>
                <div>
                    <v-row class="mb-4" no-gutters>
                        <v-col cols="3">1. website.com</v-col>
                        <v-col cols="3">600 clicks</v-col>
                        <v-col cols="6">60% of clicks</v-col>
                    </v-row>
                    <v-row no-gutters>
                        <v-col cols="3">2. website.com</v-col>
                        <v-col cols="3">600 clicks</v-col>
                        <v-col cols="6">60% of clicks</v-col>
                    </v-row>
                </div>
            </div>
            <v-divider></v-divider>
            <div class="pa-5 bg-white">
                <div class="text-h5 mb-4">Devices</div>
                <div>
                    <v-row class="mb-4" no-gutters>
                        <v-col cols="2">1. Mobile</v-col>
                        <v-col cols="2">600 visitors</v-col>
                        <v-col cols="2">645 clicks</v-col>
                        <v-col cols="6">85% CTR</v-col>
                    </v-row>
                    <v-row class="mb-4" no-gutters>
                        <v-col cols="2">1. Desktop</v-col>
                        <v-col cols="2">600 visitors</v-col>
                        <v-col cols="2">645 clicks</v-col>
                        <v-col cols="6">85% CTR</v-col>
                    </v-row>
                    <v-row class="mb-4" no-gutters>
                        <v-col cols="2">1. Tablet</v-col>
                        <v-col cols="2">600 visitors</v-col>
                        <v-col cols="2">645 clicks</v-col>
                        <v-col cols="6">85% CTR</v-col>
                    </v-row>
                    <v-row class="mb-4" no-gutters>
                        <v-col cols="2">1. Other</v-col>
                        <v-col cols="2">600 visitors</v-col>
                        <v-col cols="2">645 clicks</v-col>
                        <v-col cols="6">85% CTR</v-col>
                    </v-row>
                </div>
            </div>
            <v-divider></v-divider>
            <div class="pa-5 bg-white">
                <div class="d-flex justify-space-between mb-4">
                    <div class="text-h5">Loations</div>
                    <div class="f-size-08em">Country | City</div>
                </div>
                <div>
                    <div class="mb-4 d-flex">
                        <div class="font-weight-bold mr-5">1. United States</div>
                        <div class="mr-5">1.76k views</div>
                        <div class="mr-5">556 clicks</div>
                        <div>31.56% CTR</div>
                    </div>
                    <div class="mb-4 d-flex">
                        <div class="font-weight-bold mr-5">1. India</div>
                        <div class="mr-5">1.76k views</div>
                        <div class="mr-5">556 clicks</div>
                        <div>31.56% CTR</div>
                    </div>
                </div>
            </div>
        </v-responsive>
    </admin-layout>
</template>

<style scoped>
.bg-white {
    background-color: white;
}
.point-mark {
    width: 8px;
    height: 8px;
    margin-right: 5px;
    border-radius: 50%;
    background-color: green;
    display: inline-block;
    vertical-align: middle;
}

.f-size-08em {
    font-size: 0.8em;
}
</style>

<script>
import AdminLayout from "../../layouts/AdminLayout.vue";
import AnalyticsChart from "./analytics_chart.vue";

export default {
    components: { AdminLayout, AnalyticsChart },
    data() {
        return {
            dates: ['2019-09-10', '2019-09-20'],
        }
    },
    computed: {
      dateRangeText () {
        return this.dates.join(' ~ ')
      },
    },
}
</script>