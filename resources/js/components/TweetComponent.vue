<template>
    <div class="tweet">
        <div class="tweet-content">
            <br />
            <div class="tweet-contentborder">
                <div class="author-tweet">
                    created by {{ tweet.user_id }} @ {{ tweet.created_at }}
                </div>
                <div class="tweet-tweets">
                    {{ tweet.tweet }}

                </div>
            </div>

            <br />

            <button :class="{ 'displaying' : likeActive }" class="btn btn-success likeUnlikeBtn" @click="likeTweet(tweet.id)">like</button>&nbsp;&nbsp;
            <br />
            <button :class="{ 'displaying' : unlikeActive }" class="btn btn-success likeUnlikeBtn" @click="unlikeTweet(tweet.id)">unlike</button>
            <br />

            <comments-component :tweetId="tweet.id"></comments-component>
            <br />
            <commenting-component :tweetId="tweet.id"></commenting-component>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data(){
            return{
                tweets: [],
                likeActive: true,
                unlikeActive: false
            }
        },
        methods:{
            likeTweet(tweetId){

                this.likeActive = false;
                this.unlikeActive = true;

                axios.get("/api/tweet-like/", {

                    tweet_id: tweetId,
                    like: '1',
                    user_id: currentlyLoggedInUserInUserId

                })
                    .then(function(response) {
                })
                    .catch(function(error) {
                });
            },
            unlikeTweet(){

                this.likeActive = true;
                this.unlikeActive = false;

                axios.get("/api/tweet-like/", {

                    tweet_id: tweetId,
                    like: '0',
                    user_id: currentlyLoggedInUserInUserId

                })
                    .then(function(response) {
                })
                    .catch(function(error) {
                });
            },

        },
        props: ['tweet','user']
    }
</script>
