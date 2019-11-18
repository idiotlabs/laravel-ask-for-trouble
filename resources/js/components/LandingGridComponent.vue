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
            <div class="grid-image" :style="{ 'background-image': 'url(' + getGridImage(item.i) + ')' }"></div>
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
                gridImageMaxSize: 5,
                gridImageCount: 10,
                layout: [
                ],
            }
        },
        mounted() {
            for (let i = 0; i < this.gridImageCount; i++) {
                // get image information
                let imageWidth, imageHeight;

                let img = new Image();
                img.src = this.getGridImage(i);

                img.onload = () => {
                    // here you got the width and height
                    imageWidth = img.width;
                    imageHeight = img.height;
                    console.log( imageWidth );
                };

                let imageRatio = imageHeight / imageWidth;
                console.log( imageRatio );

                this.layout.push({
                    "x": this.getRandomX(i),
                    "y": this.getRandomY(i),
                    "w": this.getRandomWidth(),
                    "h": this.getRandomHeight(),
                    "i": i,
                });
            }
        },
        methods: {
            getRandomX(index) {
                return Math.floor(Math.random() * this.gridColNum);
            },
            getRandomY(index) {
                return Math.floor(Math.random() * (this.gridRowNum / 2));
            },
            getRandomWidth() {
                return Math.floor(Math.random() * (this.gridImageMaxSize - this.gridImageMinSize + 1) + this.gridImageMinSize);
            },
            getRandomHeight() {
                return Math.floor(Math.random() * (this.gridImageMaxSize - this.gridImageMinSize + 4) + this.gridImageMinSize);
            },
            getGridImage(i) {
                return (process.env.ASSET_PATH || '') + "/assets/images/landing/" + (i + 1) + ".jpeg";
            },
        },
        computed: {
        }
    }
</script>

<style scoped>

</style>