<template>
    <div>
        <section class="work-banner">
            <div class="container">
                <h1>Work Models</h1>
                <div class="center-line">
                    <div class="line"></div>
                </div>
                <p>We design, build and support websites and apps for clients worldwide.<br/>We make your business stand out. Interested? Let's chat.</p>
            </div>
        </section>

        <section class="dreams">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Build your dream project with us !</h2>
                    </div>
                    <div class="col-sm-7">
                        <p>Our work models leverages flexibility as per your in-hand budgets and execution plannings. These work models are been conceptualized keeping win-win situations at both the ends.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="developers">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 card" v-for="(developer,index) in developers" :key="index">
                        <div class="developer-detai">
                            <div class="text-center">
                                <img v-bind:src="'/static/images/icons/' + developer.image" alt="developers">
                            </div>
                            <h4>{{developer.title}}</h4>
                            <ul>
                                <li v-for="(details,index) in developer.details" :key="index">
                                    {{details.name}}
                                </li>
                            </ul>
                            <div class="text-center">
                                <button type="button" class="letsbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Get a quote
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wanted">
            <div class="container text-center">
                <p>Get actual updates on our works.</p>
                <h2>Wanted to be updated on your <br/> projects? We shall follow updates via -</h2>
                <div class="row">
                    <div class="col-sm-4" v-for="(contact,index) in contactData" :key="index">
                        <div class="card">
                            <i v-bind:class= contact.icon></i>
                            <h5>{{contact.title}}</h5>
                            <p>{{contact.para}}</p>
                            <a v-bind:href= contact.link class="redirectbtn">sales@mxpertz.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="work-testimonials">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval=3000>
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="work-test-content">
                                        <h4>Very good communication, they are professional</h4>
                                        <p>We are still working with them</p>
                                        <h5>Mr. Dominique M</h5>
                                        <p>Canada</p>
                                    </div>
                                </div>
                                <div class="carousel-item" v-for="(worktest,index) in workTestData" :key="index">
                                    <div class="work-test-content">
                                        <p>{{worktest.para}}</p>
                                        <h5>{{worktest.name}}</h5>
                                        <p>{{worktest.city}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>

            </div>
        </section>

    </div>
</template>

<script>
export default {
    name: 'WorkModel',
    data(){
        return{
            developers : [
                {
                title : 'Dedicated Developer',
                image: 'man.png',
                    details : [
                        { name : 'Cost Proposition'},
                        { name : 'Reduce Risk'},
                        { name : 'Reduced Operational Costing'},
                        { name : 'Monthly management'},
                        { name : 'Monthly reporting'},
                    ]
                },
                {
                title : 'Hourly Developer/s',
                image: 'manwomen.png',
                    details : [
                        { name : 'Cost + Value'},
                        { name : 'Controlled Risk'},
                        { name : 'Controlled Operational Cost'},
                        { name : 'Weekly management'},
                        { name : 'Weekly reporting'},
                    ]
                },
                {
                title : 'Project Basis Hiring',
                image: 'mens.png',
                    details : [
                        { name : 'Quick Effort + Value'},
                        { name : 'Fast Turn-around'},
                        { name : 'Controlled Cost Measures'},
                        { name : 'Complete Control'},
                        { name : 'Focus on Delivery'},
                    ]
                },
            ],
            contactData: [
                { icon:'fas fa-envelope', title: 'Email', para: 'Well updated informative emails gets rights idea about progress.', link: 'mailto:info@mxpertz.com'},
                { icon:'fab fa-skype', title: 'Skype', para: 'To support needed discussions over projects, and on any urgency.', link: 'skype: mxpertz.com?chat'},
                { icon:'fas fa-cloud', title: 'Instant Messanger', para: 'Instant assistance managed at ease, on getting instant answers.', link: 'tel:(+91) 626-4865-655'},
            ],
            workTestData: [
                { para: 'We hired them to create a new site for us. They are great to work with, excellent communication, reply quickly despite the time difference, did all the changes we needed and actually worked a few extra days to make sure we were completely satisfied with the product.', name: 'Mr. Yaro Celis', city: 'United States' },
                { para: 'Top Notch Quality! The Highest Quality Work! mxpertz are the best team to trust with your web-based project. They offer amazing communication, as well as honest and sincere feedback throughout your project. They are a definite re-hire! The best!', name: 'Mr. Michel Manning', city: 'Thailand' },
            ]
        }
    },
    mounted() {
        document.title = "Work Model of Best Web Development Agency in Indore | Mxpertz";
    },
}
</script>
