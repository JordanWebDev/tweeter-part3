
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('tweet-component', require('./components/TweetComponent.vue').default);
Vue.component('comments-component', require('./components/CommentsComponent.vue').default);
Vue.component('comment-component', require('./components/CommentComponent.vue').default);
Vue.component('commenting-component', require('./components/CommentingComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/**
*/

const test = new Vue ({
    el: '#tweetsWrapper',
    data() {
        return{
            tweets: [],
            lastTweetId: 0,
            lastCallTime: 0,
        }
    },
    methods: {
        initialTweets(){

            axios.get("/api/tweetsbynumber/10")
                .then((response) => {

                    this.tweets = response.data.data;
                    this.lastTweetId = response.data.data[((response.data.data).length - 1)]["id"];

            });
        },
        scroll(){
            window.onscroll = () => {

                if((window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 2)) {

                    if ((new Date).getTime() > (this.lastCallTime + 500)) {

                        axios.get("/api/tweetsbynumberfromstartpoint/10/" + this.lastTweetId)

                            .then((response) => {

                                var data = response.data.data;
                                for (var $i=0; $i <= data.length ; $i++) {
                                    this.tweets.push(data[1]);
                                    this.lastTweetId = data[1]["id"];
                                }

                        });

                        this.lastCallTime = (new Date).getTime();
                    }
                }
            }
        }
    },
    mounted(){
        this.initialTweets();
        this.scroll();
    }
});
