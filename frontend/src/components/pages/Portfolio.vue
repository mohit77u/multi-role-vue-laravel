<template>
    <div>
        <breadcumb v-bind:title="pagetitle" />
        
        <section class="portfolio">
            <div class="container">
                <h2>We simplify your program building<br/> experience.</h2>
                <div class="row">
                    <div class="col-sm-5">
                        <p>Easy, fastest approach towards your project idea into shape.</p>
                    </div>
                    <div class="col-sm-7">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-custom-tab" data-bs-toggle="pill" data-bs-target="#pills-custom" type="button" role="tab" aria-controls="pills-custom" aria-selected="false">Custom Solution</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ecommerce-tab" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button" role="tab" aria-controls="pills-ecommerce" aria-selected="false">E-commerce</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-learning-tab" data-bs-toggle="pill" data-bs-target="#pills-learning" type="button" role="tab" aria-controls="pills-learning" aria-selected="false">Learning Management</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-start-tab" data-bs-toggle="pill" data-bs-target="#pills-start" type="button" role="tab" aria-controls="pills-start" aria-selected="false">Start-ups</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web" aria-selected="false">Web apps</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                                <PortfolioAll />
                            </div>
                            <div class="tab-pane fade" id="pills-custom" role="tabpanel" aria-labelledby="pills-custom-tab">
                                <PortfolioCustom/>
                            </div>
                            <div class="tab-pane fade" id="pills-ecommerce" role="tabpanel" aria-labelledby="pills-ecommerce-tab">
                                <PortfolioEcommerce/>
                            </div>
                            <div class="tab-pane fade" id="pills-learning" role="tabpanel" aria-labelledby="pills-learning-tab">
                                <PortfolioLearning/>
                            </div>
                            <div class="tab-pane fade" id="pills-start" role="tabpanel" aria-labelledby="pills-start-tab">
                                <PortfolioStartup/>
                            </div>
                            <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                                <PortfolioWeb/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="interested">
            <div class="container">
                <div class="customize-title">
                    <h2 class="text-center">Interested? Let's get in touch!</h2>
                    <div class="center-line">
                        <div class="line"></div>
                    </div>
                    <div class="para">
                        <p>Mxpertz is a trusted, process driven, and result-oriented agency for your software business needs !</p>
                    </div>
                    <div class="text-center"><router-link class="letsbtn" to="/contact">Get started</router-link></div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
import Breadcumb from '../reusablecomponents/Breadcumb.vue'
import PortfolioAll from '../reusablecomponents/PortfolioAll.vue'
import PortfolioCustom from '../reusablecomponents/PortfolioCustom.vue'
import PortfolioEcommerce from '../reusablecomponents/PortfolioEcommerce.vue'
import PortfolioLearning from '../reusablecomponents/PortfolioLearning.vue'
import PortfolioStartup from '../reusablecomponents/PortfolioStartup.vue'
import PortfolioWeb from '../reusablecomponents/PortfolioWeb.vue'
export default {
    name: 'Portfolio',
    components: {
        Breadcumb, PortfolioAll, PortfolioCustom, PortfolioEcommerce, PortfolioLearning, PortfolioStartup, PortfolioWeb
    },
    data(){
        return{
            pagetitle: 'Portfolio',
        }
    },
    mounted() {
        document.title = "Portfolio of Best Web Development Agency in Indore | Mxpertz";
    },
}
</script>