<template>
<div class="row">
    <div class="col-sm-3" v-for="(process, index) in processData" :key="index">
        <div class="process">
            <div class="upper">
                <div class="number">{{process.number}}</div>
                <div class="numberline"></div>
            </div>
            <h4>{{process.title}}</h4>
            <p>{{process.para}}</p>
            <a class="readbtn" href="#">Read more</a>
        </div>
    </div>

</div>
</template>
<script>
export default {
    name: 'Process',
    props: [
        'processData'
    ]
}
</script>