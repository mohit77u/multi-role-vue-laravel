<template>
    <div>
        <div class="features" v-for="(feature, index) in featuresData" :key="index">
            <i v-bind:class= feature.icon ></i>
            <h4>{{feature.title}}</h4>
            <p>{{feature.para}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Features',
    props: [
        'featuresData'
    ]
}
</script>