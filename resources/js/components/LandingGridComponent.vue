<template>
    <grid-layout
            :layout.sync="layout"
            :col-num="gridColNum"
            :row-height="gridRowNum"
            :is-draggable="true"
            :is-resizable="false"
            :is-mirrored="false"
            :vertical-compact="true"
            :margin="[10, 10]"
            :use-css-transforms="true">
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
                gridColNum: 30,
                gridRowNum: 30,
                gridImageMinSize: 3,
                gridImageMaxSize: 5,
                gridImageCount: 10,
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
                let min = (index % 3) * 10;
                let max = min + (this.gridRowNum / 3);
                return Math.floor(Math.random() * max - min + 1) + min
            },
            getRandomY(index) {
                return Math.floor(Math.random() * this.gridRowNum - (index * 2) + 1) + (index * 2);
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