<template>
    <div>
        <section class="notfound">
            <div class="container">
                <div class="customize-title">
                    <h1 class="text-center">Error 404</h1>
                    <div class="para">
                        <p>This page could not be found!</p>
                    </div>
                    <div class="text-center"><router-link class="readbtn" to='/'>Go to Homepage</router-link></div>

                </div>
                <div class="row">
                    <div class="col-sm-12">

                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    name:' NotFound',
}
</script>