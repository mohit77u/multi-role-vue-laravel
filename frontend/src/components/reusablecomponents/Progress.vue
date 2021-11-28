<template>
    <div>
        <div class="main-progress">
            <div class="right-progress" v-for="(progress, index) in progressData" :key="index" data-aos="fade-up" data-aos-delay="600">
                <div class="progress-content">
                    <h6>{{progress.title}}</h6>
                    <h6>{{progress.percentage}}</h6>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" v-bind:style= progress.width >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Test',
    props: [
        'progressData'
    ]
}
</script>