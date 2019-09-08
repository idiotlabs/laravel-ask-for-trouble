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
                gridColNum: 20,
                gridRowNum: 30,
                gridImageMinSize: 2,
                gridImageMaxSize: 5,
                gridImageCount: 20,
                layout: [
                ]
            }
        },
        mounted() {
            for (let i = 0; i <= this.gridImageCount; i++) {
                this.layout.push({
                    "x": this.getRandomX(),
                    "y": this.getRandomY(),
                    "w": this.getRandomWidth(),
                    "h": this.getRandomHeight(),
                    "i": i
                });
            }
        },
        methods: {
            getRandomX() {
                return Math.floor(Math.random() * this.gridColNum)
            },
            getRandomY() {
                return Math.floor(Math.random() * this.gridColNum)
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