<template>
    <grid-layout
            :layout.sync="layout"
            :col-num="gridColNum"
            :row-height="gridRowNum"
            :is-draggable="true"
            :is-resizable="true"
            :is-mirrored="false"
            :vertical-compact="true"
            :margin="[10, 10]"
            :use-css-transforms="true"
            :responsive="true">
        <grid-item v-for="item in layout"
                   :x="item.x"
                   :y="item.y"
                   :w="item.w"
                   :h="item.h"
                   :i="item.i"
                   :key="item.i">
            <img src="/assets/images/bg.jpg" width="100%" height="100%"/>
        </grid-item>
    </grid-layout>
</template>

<script>
    export default {
        name: "LandingGridComponent",
        data() {
            return {
                gridColNum: 12,
                gridRowNum: 30,
                gridImageMinSize: 2,
                gridImageMaxSize: 3,
                gridImageCount: 6,
                layout: [
                ]
            }
        },
        mounted() {
            for (let i = 0; i <= this.gridImageCount; i++) {
                this.layout.push({
                    "x": this.getRandomX(i),
                    "y": this.getRandomY(i),
                    "w": this.getRandomWidth(),
                    "h": this.getRandomHeight(),
                    "i": i
                });
            }
        },
        methods: {
            getRandomX(index) {
                return Math.floor(Math.random() * this.gridColNum + 1);
            },
            getRandomY(index) {
                return Math.floor(Math.random() * this.gridRowNum + 1);
            },
            getRandomWidth() {
                return Math.floor(Math.random() * (this.gridImageMaxSize - this.gridImageMinSize + 1) + this.gridImageMinSize);
            },
            getRandomHeight() {
                return Math.floor(Math.random() * (this.gridImageMaxSize - this.gridImageMinSize + 1) + this.gridImageMinSize);
            }
        }
    }
</script>

<style scoped>

</style>